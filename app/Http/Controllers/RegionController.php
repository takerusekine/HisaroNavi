<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Salon;

class RegionController extends Controller
{
    public function getSelect(Request $request)
    {
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

        $titletag = $area.'エリア 日サロ検索';
        $description = $area. 'エリアを検索。日焼けサロンのお得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = $area. ',日焼け,日サロ,日サロナビ';
        $request->session()->put('hisaronavi_area', $area);
        return view('regions.rswrapper', [
            'area' => $area,
            'salons' => $salons,
            'area_arr' => $area_arr,
            'titletag' => $titletag,
            'description' => $description,
            'keywords' => $keywords,
        ]);
    }

    public function getResult(Request $request)
    {
        if(!empty($_GET['ajaxData'])){
            $area = $_GET['ajaxData'];
            $salons = Salon::whereIn('area_code', $area)->get();
        }else{
            switch ($_GET['ajaxLgArea']) {
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
            };
            $salons = Salon::whereBetween('area_code', [$area, $area+1000])->get();

        }

        $area_arr = [];
        return view('regions.regionresult', ['salons' => $salons,
        'area' => $area,
        'area_arr' => $area_arr,
    ]);
    }
}
