<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SalonsController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ProcessingController;
use App\Salon;
use App\Menu;

class SearchesController extends Controller
{
    public function getPrejudice(Request $request)
    {
        //$json = file_get_contents(base_path().'/../json/search.json');
         $json = file_get_contents(public_path().'/json/search.json');
        $radio = json_decode($json, true);
        $request->session()->put('url', $request->path());

        $region_cookie = $_COOKIE['hisaronavi_area'];
        if ($request->session()->get('hisaronavi_area', '未設定') !== $region_cookie) {
            $request->session()->put('hisaronavi_area', $region_cookie);
            $reg_c = new RegionController();
            $request->session()->put('detail_area', $reg_c->largeAreaEv($region_cookie));
        }
        $ses_dacode = $request->session()->get('detail_area');
        $ses_kodawari = $request->session()->get('kodawari');

        $pc = new ProcessingController($region_cookie, $ses_dacode, $ses_kodawari);
        $detail_area = $pc->getDetailAreaCode();
        $d_area = $pc->getDaNameArray();
        $cond = $pc->getKodawari();
        $titletag = 'こだわり検索【日サロナビ】｜日焼けサロンの検索・店舗情報';
        $description = 'お好きな日焼けサロンをこだわり検索で見つけよう。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = 'こだわり検索, 日焼け,日サロ,日サロナビ, 日焼けサロン';
        return view('search', [
            'radio' => $radio,
            'titletag' => $titletag,
            'description' => $description,
            'keywords' => $keywords,
            'd_area' => $d_area,
            'detail_area' => $detail_area,
            'cond' => $cond,
        ]);

    }

    public function getArea(Request $request)
    {
        $region_cookie = $_COOKIE['hisaronavi_area'];

        if ($request->session()->get('hisaronavi_area', '未設定') !== $region_cookie) {
            $request->session()->put('hisaronavi_area', $region_cookie);
            $reg_c = new RegionController();
            $request->session()->put('detail_area', $reg_c->largeAreaEv($region_cookie));
        }

        $ses_dacode = $request->session()->get('detail_area');
        $ses_kodawari = $request->session()->get('kodawari');
        $request->session()->put('url', $request->path());

        $pc = new ProcessingController($region_cookie, $ses_dacode, $ses_kodawari);
        $detail_area = $pc->getDetailAreaCode();
        $d_area = $pc->getDaNameArray();
        $selectAreaArr = $pc->getAreaForm();
        $cond = $pc->getKodawari();
        $areaCode = $pc->getRegionCode();
        $area = $_COOKIE['hisaronavi_area'];
        $salons = Salon::whereBetween('area_code', [$areaCode, $areaCode+999])->get();
        $titletag = 'エリア検索【日サロナビ】｜日焼けサロンの検索・店舗情報';
        $description = '全国の日焼けサロンをエリアで検索できます。日焼けサロンのお得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = 'エリア検索, 日サロ, 日焼け, 日サロナビ, 日焼けサロン';
        return view('regions.selectarea', [
            'titletag' => $titletag,
            'description' => $description,
            'keywords' => $keywords,
            'selectAreaArr' => $selectAreaArr,
            'area' => $area,
            'salons' => $salons,
            'areaCode' => $areaCode,
            'detail_area' => $detail_area,
            'd_area' => $d_area,
            'cond' => $cond,
        ]);
    }


    }
