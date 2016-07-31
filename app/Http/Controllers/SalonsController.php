<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Salon;
use App\Option;

class SalonsController extends Controller
{
    public function areaEvaluate($area_code)
    {
        $evalarea = array(
            1001=>'札幌市',
            1002=>'札幌市以外',
            2101=>'青森県',
            2201=>'秋田県',
            2301=>'岩手県',
            2401=>'山形県',
            2501=>'仙台市',
            2502=>'その他宮城県',
            2601=>'福島県',
            3101=>'富山県',
            3201=>'石川県',
            3301=>'福井県',
            4101=>'池袋・目白',
            4102=>'赤羽・王子・板橋・成増',
            4103=>'新宿・代々木・高田馬場・飯田橋',
            4104=>'練馬・大泉学園・荻窪・中野',
            4105=>'渋谷・青山・恵比寿',
            4106=>'明大前・三軒茶屋・自由が丘・駒沢',
            4107=>'赤坂・六本木・新橋',
            4108=>'品川・大森・蒲田・五反田',
            4109=>'上野・浅草・錦糸町・神田',
            4110=>'亀有・小岩・葛西',
            4111=>'北千住・竹ノ塚',
            4112=>'立川・八王子・福生・国分寺',
            4113=>'町田・多摩',
            4114=>'調布・吉祥寺・西東京',
            4201=>'横浜・上大岡・金沢・鶴見',
            4202=>'戸塚・瀬谷・青葉台・たまプラーザ',
            4203=>'川崎市',
            4204=>'横須賀・藤沢',
            4205=>'茅ヶ崎・平塚・小田原',
            4206=>'厚木・相模原・大和',
            4301=>'さいたま・川口・蕨',
            4302=>'越谷・久喜・春日部・草加',
            4303=>'所沢・川越・新座・和光',
            4304=>'熊谷・鴻巣・上尾',
            4401=>'千葉・木更津',
            4402=>'柏・松戸',
            4403=>'船橋',
            4501=>'群馬県',
            4601=>'栃木県',
            4701=>'茨城県',
            5101=>'新潟県',
            5201=>'長野県',
            5301=>'山梨県',
            6101=>'浜松',
            6102=>'その他静岡県',
            6201=>'名駅・栄・金山',
            6202=>'藤が丘・今池・八事・野並',
            6203=>'小牧・北名古屋・一宮・春日井',
            6204=>'豊田・刈谷・岡崎・豊橋',
            6301=>'岐阜県',
            6401=>'三重県',
            7101=>'梅田・京橋・十三・新大阪',
            7102=>'心斎橋・難波・天王寺',
            7103=>'堺・岸和田・泉佐野・八尾',
            7104=>'枚方・寝屋川・東大阪',
            7105=>'豊中・池田・吹田・茨木',
            7201=>'京都府',
            7301=>'神戸市内',
            7302=>'その他兵庫県',
            7401=>'奈良県',
            7501=>'滋賀県',
            7601=>'和歌山県',
            8101=>'岡山県',
            8201=>'広島県',
            8301=>'鳥取県',
            8401=>'島根県',
            8501=>'山口県',
            9101=>'愛媛県',
            9201=>'徳島県',
            9301=>'香川県',
            9401=>'高知県',
            10101=>'福岡市内',
            10102=>'その他福岡県',
            10201=>'熊本県',
            10301=>'佐賀県',
            10401=>'長崎県',
            10501=>'大分県',
            10601=>'宮崎県',
            10701=>'鹿児島県',
            10801=>'沖縄県',
        );
        return $evalarea[$area_code];
    }
    public function show(Request $request, $id)
    {
        $info = Salon::find($id);
        $title_regionName = $this->areaEvaluate($info->area_code);
        $titletag = $title_regionName.' - '.$info->name;
            if (empty($info->summary)) {
                $description = $info->address.'にある日焼けサロンの情報です。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
            } else {
                $des_str = mb_substr($info->address.'にある日焼けサロンの情報です。'.str_replace(array(" ", "　"), "", $info->summary), 0, 120);
                //最後の句読点が80文字目以下
                $endperiod = mb_strrpos($des_str, '。');
                if($endperiod < 79) {
                    $description = $info->address.'にある日焼けサロンの情報です。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
                }else{
                    $description = mb_substr($des_str, 0, $endperiod+1);
                }
            }

            if ($info->company->name == $info->name) {
                $keywords = $info->company->name.','.str_replace('・', ',', $title_regionName).',日焼け,日サロ,日サロナビ';
            }else {
                if (strpos($info->name, $info->company->name) !== false) {
                    $keywords = $info->company->name.','.str_replace($info->company->name, '', $info->name).','.str_replace('・', ',', $title_regionName).',日焼け,日サロ,日サロナビ';
                }
                $keywords = $info->company->name.','. $info->name .','.str_replace('・', ',', $title_regionName).',日焼け,日サロ,日サロナビ';

            }

            $areacookie = $request->session()->get('hisaronavi_area', '未設定');

        return view('menu', ['info' => $info, 'titletag' => $titletag, 'description' => $description, 'keywords' => $keywords, 'areacookie' => $areacookie]);
    }

}
