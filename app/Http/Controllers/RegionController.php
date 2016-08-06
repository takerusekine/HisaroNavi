<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SalonsController;
use App\Salon;

class RegionController extends Controller
{
    public function evalateAreaName($area)
    {
        $areaname = array(
            '北海道' =>  array(
                '札幌市' => 1001,
                '札幌市以外' => 1002,
            ),
            '東北' => array(
                '青森県' => 2101,
                '秋田県' => 2201,
                '岩手県' => 2301,
                '山形県' => 2401,
                '宮城県' => array(
                    '仙台市' => 2501,
                    '仙台市以外' => 2502,
                ),
                '福島県' => 2601,
            ),
            '北陸' => array(
                '富山県' => 3101,
                '石川県' => 3201,
                '福井県' => 3301,
            ),
            '関東' => array(
                '東京都' => array(
                    '池袋・目白' => 4101,
                    '赤羽・王子・板橋・成増' => 4102,
                    '新宿・代々木・高田馬場・飯田橋' => 4103,
                    '練馬・大泉学園・荻窪・中野' => 4104,
                    '渋谷・青山・恵比寿' => 4105,
                    '明大前・三軒茶屋・自由が丘・駒沢' => 4106,
                    '赤坂・六本木・新橋' => 4107,
                    '品川・大森・蒲田・五反田' => 4108,
                    '上野・浅草・錦糸町・神田' => 4109,
                    '亀有・小岩・葛西' => 4110,
                    '北千住・竹ノ塚' => 4111,
                    '立川・八王子・福生・国分寺' => 4112,
                    '町田・多摩' => 4113,
                    '調布・吉祥寺・西東京' => 4114,
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
                ),
                '千葉県' => array(
                    '千葉・木更津' => 4401,
                    '柏・松戸' => 4402,
                    '船橋' => 4403,
                ),
                '群馬県' => 4501,
                '栃木県' => 4601,
                '茨城県' => 4701,
            ),
            '甲信越' => array(
                '新潟県' => 5101,
                '長野県' => 5201,
                '山梨県' => 5301,
            ),
            '東海' => array(
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
                '岐阜県' => 6031,
                '三重県' => 6041,
            ),
            '関西' => array(
                '大阪府' => array(
                    '梅田・京橋・十三・新大阪' => 7101,
                    '心斎橋・難波・天王寺' => 7102,
                    '堺・岸和田・泉佐野・八尾' => 7103,
                    '枚方・寝屋川・東大阪' => 7104,
                    '豊中・池田・吹田・茨木' => 7105,
                ),
                '京都府' => 7201,
                '兵庫県' => array(
                    '神戸市内' => 7301,
                    'その他兵庫県' => 7302,
                ),
                '奈良県' => 7401,
                '滋賀県' => 7501,
                '和歌山県' => 7601,
            ),
            '中国' => array(
                '岡山県' => 8101,
                '広島県' => 8201,
                '鳥取県' => 8301,
                '島根県' => 8401,
                '山口県' => 8501,
            ),
            '四国' => array(
                '愛媛県' => 9101,
                '徳島県' => 9201,
                '香川県' => 9301,
                '高知県' => 9401,
            ),
            '九州・沖縄' => array(
                '福岡県' => array(
                    '福岡市内' => 10101,
                    'その他福岡県' => 10102,
                ),
                '熊本県' => 10201,
                '佐賀県' => 10301,
                '長崎県' => 10401,
                '大分県' => 10501,
                '宮崎県' => 10601,
                '鹿児島県' => 10701,
                '沖縄県' => 10801,
            ),

        );

        return $areaname[$area];
    }

    public function largeAreaEv($area)
    {
        $array = array(
            '北海道' => 1000,
            '東北' => 2000,
            '北陸' => 3000,
            '関東' => 4000,
            '甲信越' => 5000,
            '東海' => 6000,
            '関西' => 7000,
            '中国' => 8000,
            '四国' => 9000,
            '九州・沖縄 ' => 10000,
        );
        return $array[$area];
    }

    public function getAreaSelect(Request $request)
    {
        $request->session()->put('hisaronavi_area', $_COOKIE['hisaronavi_area']);
        $area = $request->session()->get('hisaronavi_area');
        $selectAreaArr = $this->evalateAreaName($area);
        $areaCode = $this->largeAreaEv($area);
        $salons = Salon::whereBetween('area_code', [$areaCode, $areaCode+999])->get();
        $titletag = $area.'エリア選択';
        $description = $area. 'エリアを選択。日焼けサロンのお得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = $area. ',日焼け,日サロ,日サロナビ';
        return view('regions.selectarea', [
            'titletag' => $titletag,
            'description' => $description,
            'keywords' => $keywords,
            'selectAreaArr' => $selectAreaArr,
            'area' => $area,
            'salons' => $salons,
            'areaCode' => $areaCode,
        ]);
    }

    public function getDetailArea(Request $request)
    {
        $request->session()->put('hisaronavi_area', $_COOKIE['hisaronavi_area']);
        $area = $request->session()->get('hisaronavi_area');
        $selectAreaArr = $this->evalateAreaName($area);
        $areaCode = $this->largeAreaEv($area);
        $salons = Salon::whereBetween('area_code', [$areaCode, $areaCode+999])->get();
        $titletag = $area.'エリア選択';
        $description = $area. 'エリアを選択。日焼けサロンのお得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = $area. ',日焼け,日サロ,日サロナビ';
        $kodawari = $request->session()->get('kodawari');
        return view('regions.selectdetail', [
            'titletag' => $titletag,
            'description' => $description,
            'keywords' => $keywords,
            'selectAreaArr' => $selectAreaArr,
            'area' => $area,
            'salons' => $salons,
            'areaCode' => $areaCode,
            'kodawari' => $kodawari,
        ]);
    }

    public function getResult(Request $request)
    {
        $url = $request->query();
        $area = $request->session()->get('hisaronavi_area');
        if (!empty($area)) {
            $default_areacode = $this->largeAreaEv($area);
        }else {
            if (count($url['areachoice']) === 1 ) {
                $default_areacode = intval($url['areachoice']['0']);
            } else {
                $default_areacode = $url['areachoice'];
            }
        }
        if (!empty($_GET['areachoice'])) {
            $request->session()->put('detail_area', $_GET['areachoice']);
            $salons = Salon::whereIn('area_code', $_GET['areachoice'])->get();
            $detail_area = $request->session()->get('detail_area', $default_areacode);
        } else {
            if (!empty($area)) {
                $salons = Salon::whereBetween('area_code', [$default_areacode, $default_areacode+999])->get();

            } else {
                if (count($url['areachoice']) === 1) {
                    $salons = Salon::where('area_code', $default_areacode)->get();
                } else {
                    $salons = Salon::whereIn('area_code', $default_areacode)->get();
                }
            }

            $detail_area = $default_areacode;
        }
        $area_array = array();
        $s = new SalonsController();
        if (is_array($detail_area)) {
            foreach ($detail_area as $key => $value) {
                array_push($area_array, $s->areaEvaluate(intval($value)));
            }
            $area_cond = $area_array;
        } else {
            $area_cond = $area;
        }
        $titletag = $area.'エリア選択';
        $description = $area. 'エリアを選択。日焼けサロンのお得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = $area. ',日焼け,日サロ,日サロナビ';
        return view('regions.rswrapper', [
            'area' => $area,
            'detail_area' => $detail_area,
            'salons' => $salons,
            'titletag' => $titletag,
            'description' => $description,
            'keywords' => $keywords,
            'area_cond' => $area_cond,
            'url' => $url,
        ]);
    }

    public function getDetailResult(Request $request)
    {
        $area = $request->session()->get('hisaronavi_area');
        $default_areacode = $this->largeAreaEv($area);
        $kodawari = $request->session()->get('kodawari');
        $up_cond = $request->session()->get('upper_price', 0);
        $lp_cond = $request->session()->get('lower_price', 0);


        if (isset($_GET['areachoice'])) {
            $request->session()->put('detail_area', $_GET['areachoice']);
            $before_filter = Salon::whereIn('area_code', $_GET['areachoice']);
        } else {
            $before_filter = Salon::whereBetween('area_code', [$default_areacode, $default_areacode+999]);
        }

        $detail_area = $request->session()->get('detail_area', $area);
        $s = new SalonsController();
        $areaname_array = array();
        foreach ($detail_area as $key => $value) {
            array_push($areaname_array, $s->areaEvaluate($value));
        }
        $area_cond = $areaname_array;
        foreach ($kodawari as $key => $value) {
            if ($key == 0) {
                $before_filter->where('kodawari','like', '%'.$value.'%')->whereIn('area_code', $detail_area);
            }else {
                $before_filter->orWhere('kodawari','like', '%'. $value . '%')->whereIn('area_code', $detail_area);
            }
        }

        $before_salons = $before_filter->get();


            $sal = $before_salons->filter(function ($item) use($up_cond, $lp_cond)
            {
                if (!empty($up_cond) && !empty($lp_cond)) {
                    //上限下限金額設定あり
                    return $item['min_price'] <= $up_cond && $item['min_price'] >= $lp_cond && !empty($item['min_price']);
                } elseif (!empty($up_cond) && empty($lp_cond)) {
                    //上限のみ
                    return $item['min_price'] <= $up_cond && !empty($item['min_price']);

                } elseif (empty($up_cond) && !empty($lp_cond)) {
                    // 下限のみ
                    return $item['min_price'] >= $lp_cond && !empty($item['min_price']);
                } else {
                    // 設定なし
                    return $item;
                }
            });

            $salons = $sal->all();


        $titletag = $area.'エリア選択';
        $description = $area. 'エリアを選択。日焼けサロンのお得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = $area. ',日焼け,日サロ,日サロナビ';
        return view('regions.rswrapper', [
            'area' => $area,
            'detail_area' => $detail_area,
            'salons' => $salons,
            'titletag' => $titletag,
            'description' => $description,
            'keywords' => $keywords,
            'area_cond' => $area_cond,
            'kodawari' => $kodawari,
            'up_cond' => $up_cond,
            'lp_cond' => $lp_cond,
        ]);
    }

}
