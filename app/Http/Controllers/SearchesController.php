<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SalonsController;
use App\Http\Controllers\RegionController;
use App\Salon;
use App\Menu;

class SearchesController extends Controller
{
    public function getIndex(Request $request)
    {
        // $json = file_get_contents(base_path().'/../json/search.json');
        $json = file_get_contents(public_path().'/json/search.json');
        $radio = json_decode($json, true);
        $default_area = $request->session()->get('hisaronavi_area');
        $detail_area = $request->session()->get('detail_area');
        $d_area = array();
        $s = new SalonsController();
        foreach ($detail_area as $dkey => $dval) {
         array_push($d_area, $s->areaEvaluate(intval($dval))) ;
        }
        $titletag = 'こだわり検索';
        $description = 'お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '日焼け,日サロ,日サロナビ';
        return view('search', [
            'radio' => $radio,
            'titletag' => $titletag,
            'description' => $description,
            'keywords' => $keywords,
            'd_area' => $d_area,
            'detail_area' => $detail_area,
        ]);

    }

    public function getConditionSearch(Request $request)
    {
        // $json = file_get_contents(base_path().'/../json/search.json');
        $json = file_get_contents(public_path().'/json/search.json');
        $radio = json_decode($json, true);
        $titletag = 'こだわり検索';
        $description = 'お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '日焼け,日サロ,日サロナビ';
        $request->session()->put('hisaronavi_area', $_COOKIE['hisaronavi_area']);
        $areaname = $request->session()->get('hisaronavi_area');
        return view('condsearch', [
            'radio' => $radio,
            'titletag' => $titletag,
            'description' => $description,
            'keywords' => $keywords,
            'areaname' => $areaname,
        ]);
    }

    public function getConditionResult(Request $request)
    {
        $request->session()->put('hisaronavi_area', $_COOKIE['hisaronavi_area']);
        $request->session()->put('lower_price', $_GET['lower_price']);
        $request->session()->put('upper_price', $_GET['upper_price']);
        $areaname = $request->session()->get('hisaronavi_area');
        $r = new RegionController();
        $area_code = $r->largeAreaEv($areaname);
        $before_filter = Salon::whereBetween('area_code', [$area_code, $area_code+999]);
        if (!empty($_GET['kodawari'])) {
            $cond = $_GET['kodawari'];
            $request->session()->put('kodawari', $_GET['kodawari']);
            foreach ($cond as $key => $value) {
                if ($key == 0) {
                    $before_filter->where('kodawari', 'like' ,'%'.$value. '%')->whereBetween('area_code', [$area_code, $area_code+999]);
                } else {
                    $before_filter->orWhere('kodawari', 'like', '%'. $value . '%')->whereBetween('area_code', [$area_code, $area_code+999]);
                }
            }
        } else {
            $cond ='条件未設定';
        }
        $nullexcept = $before_filter
        ->get();

        if (!empty($_GET['upper_price']) && !empty($_GET['lower_price'])) {
            $price_filter = $nullexcept->filter(function ($item)
            {
                return $item['min_price'] <= $_GET['upper_price']
                && $item['min_price'] >= $_GET['lower_price']
                && !empty($item['min_price']);
            });

        } elseif (!empty($_GET['upper_price']) && empty($_GET['lower_price'])) {
            $price_filter = $nullexcept->filter(function ($item)
            {
                return $item['min_price'] <= $_GET['upper_price'] && !empty($item['min_price']);
            });

        } elseif (!empty($_GET['lower_price']) && empty($_GET['upper_price'])) {
            $price_filter = $nullexcept->filter(function ($item)
            {
                return $item['min_price'] >= $_GET['lower_price'] && !empty($item['min_price']);
            });
        } else {
            $price_filter = $nullexcept->filter(function ($item)
            {
                return $item;
            });
        }
        $p_filtered = $price_filter->all();

        $salons = $p_filtered;

        $titletag = 'こだわり検索結果';
        $description = 'お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '日焼け,日サロ,日サロナビ';
        $kodawari = $cond;
        return view('layouts.resultwrap', [
            'salons' => $salons,
            'areaname' => $areaname,
            'titletag' => $titletag,
            'description' => $description,
            'keywords' => $keywords,
            'kodawari' => $kodawari,
            'cond' => $cond,
        ]);
    }

    public function getResult(Request $request)
    {
        $detail_area = $request->session()->get('detail_area');
        $before_filter = Salon::whereIn('area_code', $detail_area);
        if (!empty($_GET['kodawari'])) {
            foreach ($_GET['kodawari'] as $key => $value) {
                if ($key == 0) {
                    $before_filter->where('kodawari', 'like', '%'.$value.'%')->whereIn('area_code', $detail_area);
                }else {
                    $before_filter->orWhere('kodawari', 'like', '%'.$value.'%')->whereIn('area_code', $detail_area);
                }
            }
        }
        $nullexcept = $before_filter
        ->get();


        if (!empty($_GET['upper_price']) && !empty($_GET['lower_price'])) {
            $price_filter = $nullexcept->filter(function ($item)
            {
                return $item['min_price'] <= $_GET['upper_price'] && $item['min_price'] >= $_GET['lower_price'] && !empty($item['min_price']);
            });

        } elseif (!empty($_GET['upper_price']) && empty($_GET['lower_price'])) {
            $price_filter = $nullexcept->filter(function ($item)
            {
                return $item['min_price'] <= $_GET['upper_price'] && !empty($item['min_price']);
            });

        } elseif (!empty($_GET['lower_price']) && empty($_GET['upper_price'])) {
            $price_filter = $nullexcept->filter(function ($item)
            {
                return $item['min_price'] >= $_GET['lower_price'] && !empty($item['min_price']);
            });
        } else {
            $price_filter = $nullexcept->filter(function ($item)
            {
                return $item;
            });
        }
        $p_filtered = $price_filter->all();

        $salons = $p_filtered;
        $area = '仮';
        $area_array = array();
        $s = new SalonsController();
        $req_detail = $request->session()->get('detail_area');
        if ( !empty($req_detail) ) {
            foreach ($req_detail as $key => $value) {
                array_push($area_array, $s->areaEvaluate(intval($value)));
            }
            $areaname = $area_array;
        } else {
            $areaname = $request->session()->get('hisaronavi_area');
        }

        if (!empty($_GET['kodawari'])) {
            $cond = $_GET['kodawari'];
        }else {
            $cond = '条件未設定';
        }
        $titletag = 'こだわり検索結果';
        $description = 'お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '日焼け,日サロ,日サロナビ';
        $kodawari = $cond;
        return view('layouts.resultwrap', [
            'salons' => $salons,
            'area' => $area,
            'areaname' => $areaname,
            'titletag' => $titletag,
            'description' => $description,
            'keywords' => $keywords,
            'req_detail' => $req_detail,
            'cond' => $cond,
            'kodawari' => $kodawari,
            'detail_area' => $detail_area,
        ]);
    }

    public function experiment()
    {
        $salon = Salon::whereBetween('area_code', [5000, 6000])->lists('id');

        $beforefiltermenu = Menu::whereIn('salon_id', $salon)
        ->whereNotIn('grade', ['顔', '-'])
        ->whereNotIn('menu_price',['0'])
        ->whereNotNull('menu_price')
        ->orderBy('salon_id', 'ASC')
        ->orderBy('menu_price', 'ASC')->get();


        $menu = $beforefiltermenu;
        $menu->sortBy(['salon_id', 'menu_price'])->all();
        $marr = [];
        foreach ($menu as $m) {
            $marr[] = $m->salon_id;
        }

        $mlist = Menu::whereIn('salon_id', $marr)->whereNotNull('menu_price')->orderBy('salon_id', 'ASC')->orderBy('menu_price', 'ASC')->get();
        $mn = $mlist->unique(function ($item)
        {
            return $item['salon_id'];
        });
        foreach ($mn as $mp) {
            $menus[] = $mp->menu_price;
        }

        $a = array(
            1 => 2800,
            2 => 1540,
            3 => 1540,
            4 => 950,
            6 => 3240,
            7 => 2500,
            11 => 1300,
            12 => 1200,
            14 => 2050,
            15 => 500,
            17 => 2420,
            19 => 820,
            20 => 1580,
            21 => 1980,
            22 => 2000,
            23 => 2000,
            24 => 1000,
            25 => 1300,
            26 => 3000,
            27 => 2150,
            28 => 2400,
            29 => 2000,
            30 => 2000,
            32 => 2200,
            33 => 2200,
            34 => 2000,
            36 => 900,
            37 => 540,
            38 => 1620,
            40 => 1000,
            42 => 1840,
            43 => 1000,
            44 => 1800,
            46 => 500,
            50 => 1840,
            52 => 1300,
            53 => 2160,
            55 => 2000,
            56 => 1000,
            57 => 1500,
            87 => 1700,
            88 => 2000,
            89 => 1400,
            90 => 3024,
            91 => 1800,
            92 => 1700,
            99 => 1400,
            100 => 1500,
            101 => 1500,
            102 => 3000,
            103 => 1200,
            106 => 2000,
            107 => 1700,
            109 => 1800,
            110 => 1500,
            114 => 1500,
            118 => 2240,
            119 => 2240,
            120 => 2240,
            121 => 2240,
            122 => 1940,
            123 => 1940,
            124 => 1940,
            125 => 1940,
            126 => 1940,
            127 => 1940,
            128 => 1940,
            129 => 1940,
            130 => 2240,
            131 => 2240,
            132 => 2240,
            133 => 1940,
            134 => 1940,
            135 => 1940,
            136 => 2240,
            137 => 1940,
            138 => 1940,
            139 => 2240,
            140 => 1940,
            141 => 2240,
            142 => 1940,
            143 => 2240,
            144 => 1940,
            145 => 1940,
            146 => 2240,
            147 => 2240,
            148 => 2240,
            149 => 1940,
            150 => 1000,
            151 => 1500,
            152 => 2270,
            153 => 500,
            154 => 500,
            155 => 500,
            156 => 500,
            157 => 500,
            159 => 1000,
            160 => 800,
            169 => 1000,
            172 => 1000,
            173 => 1100,
            174 => 1100,
            175 => 2100,
            181 => 1100,
            182 => 1100,
            193 => 1100,
            195 => 1100,
            198 => 1100,
            199 => 1100,
            200 => 1100,
            202 => 1100,
            236 => 1400,
            237 => 1300,
            238 => 1400,
            239 => 1400,
            241 => 1300,
            243 => 1400,
            252 => 1500,
            255 => 1800,
            256 => 1800,
            257 => 1800,
            263 => 1000,
            266 => 1100,
            267 => 1000,
            268 => 1500,
            270 => 1000,
            271 => 1200,
            272 => 1100,
            273 => 1000,
            276 => 3000,
            278 => 1400,
            279 => 1500,
            282 => 1000,
            283 => 900,
            284 => 1300,
            286 => 2000,
            287 => 1500,
            288 => 2100,
            289 => 1500,
            290 => 1500,
            291 => 1400,
            296 => 1700,
            297 => 1700,
            298 => 1700,
            299 => 1000,
            301 => 1300,
            306 => 2000,
            307 => 1260,
            308 => 1100,
            309 => 1200,
            311 => 2300,
            312 => 1000,
            314 => 2200,
            316 => 1050,
            321 => 700,
            323 => 2000,
            328 => 1800,
            329 => 1700,
            330 => 1000,
            331 => 1500,
            332 => 1500,
            333 => 1000,
            334 => 1500,
            335 => 945,
            336 => 1500,
            339 => 2200,
            352 => 1000,
            356 => 1600,
            358 => 1400,
            360 => 2300,
            372 => 1000,
            379 => 1000,
            381 => 2000,
            390 => 900,
            391 => 1100,
            392 => 1500,
            395 => 1000,
            397 => 1600,
        );

        $titletag = '実験';
        $description = "a";
        $keywords = '実験ページ';
        return view('experiment', ['mlist' => $mn, 'menus' => $menus, 'titletag' => $titletag, 'description' => $description, 'keywords' => $keywords, 'a' => $a]);
    }


}
