<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Salon;
use App\Menu;

class SearchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $json = file_get_contents(base_path().'/../json/search.json');
        $json = file_get_contents(public_path().'/json/search.json');

        $radio = json_decode($json, true);
        $area = $request->input('area_flash');
        $area_arr = array();
        switch ($area) {
            case '北海道':
                $salons = Salon::whereBetween('area_code', [1000, 1999])
                ->orderBy('area_code')->get();
                $area_arr = array(
                    '札幌市' => 1001,
                    '札幌市以外' => 1002
                );
                break;

            case '東北':
                $salons = Salon::whereBetween('area_code', [2000, 2999])->orderBy('area_code')->get();

                $area_arr = array(
                    '青森県' => 2101,
                    '秋田県' => 2201,
                    '岩手県' => 2301,
                    '山形県' => 2401,
                    '宮城県' => array(
                        '仙台市' => 2501,
                        'その他宮城県' => 2502,
                    ),
                    '福島県' => 2601);
                break;
            case '北陸':
                $salons = Salon::whereBetween('area_code', [3000, 3999])->orderBy('area_code')->get();
                $area_arr = array(
                    '富山県' => 3101,
                    '石川県' => 3201,
                    '福井県' => 3301);
                break;

            case '関東':
                $salons = Salon::whereBetween('area_code', [4000, 4999])->orderBy('area_code')->get();
                $area_arr = array(
                    '東京都' => array(
                        '池袋・目白'=> 4101,
                        '赤羽・王子・板橋・成増'=> 4102,
                        '新宿・代々木・高田馬場・飯田橋'=> 4103,
                        '練馬・大泉学園・荻窪・中野'=> 4104,
                        '渋谷・青山・恵比寿'=> 4105,
                        '明大前・三軒茶屋・自由が丘・駒沢'=> 4106,
                        '赤坂・六本木・新橋'=> 4107,
                        '品川・大森・蒲田・五反田'=> 4108,
                        '上野・浅草・錦糸町・神田'=> 4109,
                        '亀有・小岩・葛西'=> 4110,
                        '北千住・竹ノ塚'=> 4111,
                        '立川・八王子・福生・国分寺'=> 4112,
                        '町田・多摩'=> 4113,
                        '調布・吉祥寺・西東京'=> 4114
                    ),
                    '神奈川県' => array(
                        '横浜・上大岡・金沢・鶴見' => 4201,
                        '戸塚・瀬谷・青葉台・たまプラーザ' => 4202,
                        '川崎市' => 4203,
                        '横須賀・藤沢' => 4204,
                        '茅ヶ崎・平塚・小田原' => 4205,
                        '厚木・相模原・大和' => 4206,
                    ),
                    '埼玉県' => array(
                        'さいたま・川口・蕨' => 4301,
                        '越谷・久喜・春日部・草加' => 4302,
                        '所沢・川越・新座・和光' => 4303,
                        '熊谷・鴻巣・上尾' => 4304,
                    )
                        ,
                    '千葉県' => array(
                        '千葉・木更津' => 4401,
                        '柏・松戸' => 4402,
                        '船橋' => 4403,
                    ),
                    '群馬県' => 4501,
                    '栃木県' => 4601,
                    '茨城県' => 4701,
                );
                break;

            case '甲信越':
                $salons = Salon::whereBetween('area_code', [5000, 5999])
                ->orderBy('area_code')->get();
                $area_arr = array(
                    '新潟県' => 5101,
                    '長野県' => 5201,
                    '山梨県' => 5301,
                );
                break;

            case '東海':
                $salons = Salon::whereBetween('area_code', [6000, 6999])
                ->orderBy('area_code')->get();
                $area_arr = array(
                    '静岡県' => array(
                        '浜松' => 6101,
                        'その他静岡県' => 6102,
                    ),
                    '愛知県' => array(
                        '名駅・栄・金山' => 6201,
                        '藤が丘・今池・八事・野並' => 6202,
                        '小牧・北名古屋・一宮・春日井' => 6203,
                        '豊田・刈谷・岡崎・豊橋' => 6204,
                    ),
                    '岐阜県' => 6301,
                    '三重県' => 6401);
                break;

            case '関西':
                $salons = Salon::whereBetween('area_code', [7000, 7999])
                ->orderBy('area_code')->get();
                $area_arr = array(
                    '大阪府' => array(
                        '梅田・京橋・十三・新大阪' => 7101,
                        '心斎橋・難波・天王寺' => 7102,
                        '堺・岸和田・泉佐野・八尾' => 7103,
                        '枚方・寝屋川・東大阪' => 7104,
                        '豊中・池田・吹田・茨木' => 7105
                    ),
                    '京都府' => 7201,
                    '兵庫県' => array(
                        '神戸市内' => 7301,
                        'その他兵庫県' => 7302,
                    ),
                    '奈良県' => 7401,
                    '滋賀県' => 7501,
                    '和歌山県' => 7601);
                break;

            case '中国':
                $salons = Salon::whereBetween('area_code', [8000, 8999])
                ->orderBy('area_code')->get();
                $area_arr = array(
                    '岡山県' => 8101,
                    '広島県' => 8201,
                    '鳥取県' => 8301,
                    '島根県' => 8401,
                    '山口県' => 8501,
                );
                break;

            case '四国':
                $salons = Salon::whereBetween('area_code', [9000, 9999])->orderBy('area_code')->get();

                $area_arr = array(
                    '愛媛県' => 9101,
                    '徳島県' => 9201,
                    '香川県' => 9301,
                    '高知県' => 9401);
                break;
            case '九州・沖縄':
                $salons = Salon::whereBetween('area_code', [10000, 10999])->orderBy('area_code')->get();

                $area_arr = array(
                    '福岡県' => array(
                        '福岡市内' => 10101,
                        'その他福岡県' => 10102
                    ),
                    '熊本県' => 10201,
                    '佐賀県' => 10301,
                    '長崎県' => 10401,
                    '大分県' => 10501,
                    '宮崎県' => 10601,
                    '鹿児島県' => 10701,
                    '沖縄県' => 10801);
                break;
        }

        $titletag = $area.'エリア - こだわり検索';
        $description = $area.'エリアのこだわり検索。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = $area.',日焼け,日サロ,日サロナビ';
        return view('search', [
            'area' => $area,
            'salons' => $salons,
            'area_arr' => $area_arr,
            'radio' => $radio,
            'titletag' => $titletag,
            'description' => $description,
            'keywords' => $keywords,
        ]);

    }

    public function result(Request $request)
    {
        $areaname = $_GET['ajaxLgArea'];
        $l_price = $_GET['ajaxLP'];
        $u_price = $_GET['ajaxUP'];

        switch ($areaname) {
            case '北海道':
            $area = 1000;
                break;

            case '東北':
            $area = 2000;
                break;

            case '北陸':
            $area = 3000;
                break;

            case '関東':
            $area = 4000;
                break;

            case '甲信越':
            $area = 5000;
                break;

            case '東海':
            $area = 6000;
                break;

            case '関西':
            $area = 7000;
                break;

            case '中国':
            $area = 8000;
                break;

            case '四国':
            $area = 9000;
                break;

            case '九州・沖縄':
            $area = 10000;
                break;
            default:
                # code...
                break;
        }
        $s_id = [];
        $ksalons = Salon::whereBetween('area_code', [$area, $area+1000]);
        if(!empty($_GET['ajaxData'])){
            $kodawari = $_GET['ajaxData'];
            $i = 0;

            foreach ($kodawari as $k) {
                    $ksalons->where('kodawari','like', '%'.$k.'%');
            }
            $salons = $ksalons->get();

        }else{
            $ksalons = Salon::whereBetween('area_code', [$area, $area+1000]);
            $kodawari = [];
            $salons = $ksalons->get();
        }

        if(!empty($_GET['ajaxLP']) || !empty($_GET['ajaxUP'])) {
            $sid = Salon::whereBetween('area_code', [$area, $area+1000])->lists('id');

            $beforefilter = Menu::whereIn('salon_id', $sid)
            ->whereNotIn('grade', ['顔', '-'])
            ->whereNotIn('menu_price',['0'])
            ->whereNotNull('menu_price')
            ->orderBy('salon_id', 'ASC')
            ->orderBy('menu_price', 'ASC')->get();

            $menu_id_arr = [];
            foreach ($beforefilter as $bf) {
                $menu_id_arr[] = $bf->salon_id;
            }

            foreach ($salons as $s) {
                $menu_id_arr[] = $s->id;
            }

            $mia = array_unique($menu_id_arr);

            $menu_list = Menu::whereIn('salon_id', $mia)->whereNotNull('menu_price')->whereNotIn('menu_price', ['', '0', '-'])
            ->whereNotIn('grade', ['顔', '-'])->orderBy('salon_id', 'ASC')->orderBy('menu_price', 'ASC')->get();
            $filtered_menu = $menu_list->unique(function ($item)
            {
                return $item['salon_id'];
            });

            $filtered_menu->all();

            if(!empty($_GET['ajaxUP'] && !empty($_GET['ajaxLP']))){
                $m_arr = $filtered_menu->filter(function ($mitem)
                {
                    return $mitem->menu_price <= $_GET['ajaxUP'] && $mitem->menu_price >= $_GET['ajaxLP'];
                });
                $m_menu = $m_arr->unique('salon_id')->all();
            }elseif (!empty($_GET['ajaxUP'])) {
                $u_arr = $filtered_menu->filter(function ($uitem)
                {
                    return $uitem->menu_price <= $_GET['ajaxUP'];
                });
                $u_menu = $u_arr->unique('salon_id')->all();
            }elseif(!empty($_GET['ajaxLP'])){
                $l_arr = $filtered_menu->filter(function ($litem)
                {
                    return $litem->menu_price >= $_GET['ajaxLP'];
                });
                $l_menu = $l_arr->unique('salon_id')->all();
            }

            if (!empty($m_arr)) {
                $merged = $m_arr->merge($salons)->unique('salon_id')->all();
            }elseif (!empty($l_arr)) {
                $merged = $l_arr->merge($salons)->unique('salon_id')->all();
            }elseif (!empty($u_arr)) {
                $merged = $u_arr->merge($salons)->unique('salon_id')->all();
            }

            $m_id = [];
            foreach ($merged as $mg) {
                $m_id[] = $mg->salon_id;
            }

            $salons = Salon::whereIn('id', $m_id)->get();
        }



        return view('result', [
            'salons' => $salons,
            'kodawari' => $kodawari,
            'area' => $area,
            'areaname' => $areaname
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
