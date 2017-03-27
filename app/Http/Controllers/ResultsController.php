<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ProcessingController;

class ResultsController extends Controller
{
    public function getIndex(Request $request)
    {
        $region_cookie = $_COOKIE['hisaronavi_area'];
        $reg_c = new RegionController();
        $region_code = $reg_c->largeAreaEv($region_cookie);
        $previous_url = $request->session()->get('url');

        if ($request->session()->get('hisaronavi_area', '未設定') !== $region_cookie) {
            $request->session()->put('hisaronavi_area', $region_cookie);
            $request->session()->put('detail_area', $region_code);
        }

            //直前がエリア条件のページの場合に、この処理をする
            if (isset($_GET['areachoice'])) {
                $ses_dacode = $_GET['areachoice'];
                if (strpos($previous_url, 'area') !== false) {
                    $request->session()->put('detail_area', $_GET['areachoice']);
                }
            } else {
                $ses_dacode = $request->session()->get('detail_area', $region_code);
                if (strpos($previous_url, 'area') !== false) {
                    $request->session()->put('detail_area', $region_code);
                }
            }

            //直前がこだわり条件のページの場合に、この処理をする
            if (isset($_GET['kodawari'])) {
                $ses_kodawari = $_GET['kodawari'];
                if (strpos($previous_url, 'prejudice') !== false) {
                    $request->session()->put('kodawari', $_GET['kodawari']);
                }
            } else {
                $ses_kodawari = $request->session()->get('kodawari', null);
                if (strpos($previous_url, 'prejudice') !== false) {
                    $ses_kodawari = $request->session()->put('kodawari', null);
                }
            }


        $pc = new ProcessingController($region_cookie, $ses_dacode, $ses_kodawari);
        $detail_area = $pc->getDetailAreaCode();
        $d_area = $pc->getDaNameArray();
        $selectAreaArr = $pc->getAreaForm();
        $cond = $pc->getKodawari();
        $areaCode = $pc->getRegionCode();


        if (in_array('条件未設定', $cond)) {
            if (count($detail_area) === 1) {
                if ($detail_area[0] % 1000 == 0) {
                    $salons = Salon::whereBetween('area_code', [$detail_area, $detail_area+999])->get();
                } else {
                    $salons = Salon::where('area_code', $detail_area)->get();
                }

            }else {
                $salons = Salon::whereIn('area_code', $detail_area)->get();
            }
        } else {
            if (count($detail_area) === 1) {

                if ($detail_area['0'] % 1000 == 0) {
                    $before_salons = Salon::whereBetween('area_code', [$detail_area, $detail_area+999]);
                } else {
                    $before_salons = Salon::where('area_code', $detail_area[0]);
                }
                foreach ($cond as $key => $value) {
                    if ($key === 0) {
                        if ($detail_area[0] % 1000 == 0) {
                            $before_salons->where('kodawari','like', '%'.$value.'%')->whereBetween('area_code', [$detail_area, $detail_area+999]);
                        } else {
                            $before_salons->where('kodawari','like', '%'.$value.'%')->where('area_code', $detail_area[0]);
                        }

                    }else {
                        if ($detail_area[0] % 1000 == 0) {
                            $before_salons->orWhere('kodawari','like', '%'.$value.'%')->whereBetween('area_code', [$detail_area, $detail_area+999]);

                        } else {
                            $before_salons->orWhere('kodawari','like', '%'.$value.'%')->where('area_code', $detail_area[0]);
                        }

                    }
                }
                $salons = $before_salons->get();
                $counts = count($salons);
            } else {
                $before_salons = Salon::whereIn('area_code', $detail_area);
                foreach ($cond as $key => $value) {
                    if ($key == 0) {
                        $before_salons->where('kodawari','like', '%'.$value.'%')->whereIn('area_code', $detail_area);
                    }else {
                        $before_salons->orWhere('kodawari','like', '%'.$value.'%')->whereIn('area_code', $detail_area);
                    }
                }
                $salons = $before_salons->get();
                $counts = 'else'.count($salons);
            }
        }

        if (!empty($_GET['pricerefine'])) {
            $price_refine = $salons->filter(function($item)
            {
                return $item['min_price'] >= $_GET['lower-price'] && $item['min_price'] <= $_GET['upper-price'] && !empty($item['min_price']);
            });
            $salons = $price_refine->all();
        }else {
            $price_refine = $salons->filter(function($item)
            {
                return $item;
            });
            $salons = $price_refine->all();
        }

        $discAreaArr = array();
        foreach ($salons as $s) {
            array_push($discAreaArr, floor($s->area_code/100));
        }

        $uniq_disc = array_unique($discAreaArr);
        $discriptionAreaNames = array();

        foreach ($uniq_disc as $ud) {
            array_push($discriptionAreaNames, $reg_c->descArea($ud));
        }

        if (is_array($d_area)) {
            $titletag = implode($d_area, '・').'の日焼けサロン一覧【日サロナビ】｜日焼けサロンの検索・店舗情報';
            $description = implode($d_area, '・') . 'の日焼けサロン情報、店舗一欄（'.implode($discriptionAreaNames, '・').'）日本最大級の豊富な日サロ一覧から'.implode($d_area, '・').'の日焼けサロンを希望の条件で簡単に絞り込み！日サロ情報が満載の日焼けサロン情報サイトです。';
            $keywords = implode($d_area, '・').', 日サロ, '.implode($discriptionAreaNames, '・').', 日サロナビ, 日焼けサロン';

        }else {
            $titletag = $d_area.'の日焼けサロン一覧【日サロナビ】｜日焼けサロンの検索・店舗情報';
            $description = $d_area . 'の日焼けサロン情報、店舗一覧（'.implode($discriptionAreaNames, '・').'）日本最大級の豊富な日サロ一覧から'. $d_area .'の日焼けサロンを希望の条件で簡単に絞り込み！日サロ情報が満載の日焼けサロン情報サイトです。';
            $keywords = $d_area .', 日サロ, '.implode($discriptionAreaNames, '・').', 日サロナビ, 日焼けサロン';

        }

        if (count($detail_area) === 1) {
            if ($detail_area[0] % 1000 == 0) {
                $zero_count = Salon::whereBetween('area_code', [$detail_area, $detail_area+999])->get();
            } else {
                $zero_count = Salon::where('area_code', $detail_area)->get();
            }

        }else {
            $zero_count = Salon::whereIn('area_code', $detail_area)->get();
        }


        return view('results.resultwrap', [
            'areaname' => $d_area,
            'titletag' => $titletag,
            'description' => $description,
            'keywords' => $keywords,
            'cond' => $cond,
            'salons' => $salons,
            'detail_area' => $detail_area,
            'zero_count' => $zero_count,
            'previous_url' => $previous_url,
        ]);
    }
}
