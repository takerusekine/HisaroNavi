<?php

use Illuminate\Database\Seeder;

class SalonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salons')->delete();
        $salons = array(
            array('company_id'=>1,'name'=> '豊田店', 'kana_name'=>'あくあとよたてん', 'catch_msg'=>'上質な時間を堪能する贅沢な日焼けスタジオ','summary' => '美しく健康的でつややかに輝く上質なブロンズ肌をお約束します。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～23:00／最終受付23:00', 'close_day' => '', 'area_code' => 6204, 'address' => '愛知県豊田市喜多町4-102', 'near_st' => '豊田市駅より徒歩6分', 'load_navi' => '', 'tel' => '0565-34-3030', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://tanning-aqua.com/#pagetop', 'kodawari' => '強力マシーンあり', 'customers' => '','min_price' => 2800 ),
array('company_id'=>2,'name'=> '菊陽バイパス店', 'kana_name'=>'びーだっしゅきくようばいぱすてん', 'catch_msg'=>'全店舗完全個室なので男性・女性問わずご利用いただけます。
全室有線放送完備
全メニューシャワー・タオル付き

整髪料（ヘアスプレー・ワックス・ジェル）化粧落とし・洗顔料・ドライトリートメント・アイロンミスト・アイロン・コテ等の無料のアメニティーも充実しているので、汗をかいてもシャワーを浴びてしっかり準備してお出かけできます。','summary' => '私共は熊本県内において熊本市銀座通り沿いと菊陽バイパス沿いに2店舗日焼けサロンを展開しております。
 店舗によって設置マシンが異なります。
お客様がお好きな機種、利便性等ご都合のよい店舗をご利用ください。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 10201, 'address' => '熊本県菊池郡菊陽町津久礼2275－3', 'near_st' => '菊陽バイパス沿いTUTAYAお隣ローソン南側。', 'load_navi' => '菊陽バイパス沿いTUTAYAお隣ローソン南側。', 'tel' => '096-232-2399', 'machine_num' => '4', 'parking' => '店舗敷地内に駐車スペース2台分ございます。満車の場合近隣駐車場をご案内いたしますので(096-232-2399)までお電話下さい。', 'site_url' => 'http://www.hiyake-salon-b-max.jp/', 'kodawari' => '駐車場あり／完全個室／手ぶらＯＫ／初回割引あり', 'customers' => '','min_price' => 1540 ),
array('company_id'=>3,'name'=> '銀座通り店', 'kana_name'=>'びーまっくすぎんざどおりてん', 'catch_msg'=>'全店舗完全個室なので男性・女性問わずご利用いただけます。
全室有線放送完備
全メニューシャワー・タオル付き

整髪料（ヘアスプレー・ワックス・ジェル）化粧落とし・洗顔料・ドライトリートメント・アイロンミスト・アイロン・コテ等の無料のアメニティーも充実しているので、汗をかいてもシャワーを浴びてしっかり準備してお出かけできます。','summary' => '私共は熊本県内において熊本市銀座通り沿いと菊陽バイパス沿いに2店舗日焼けサロンを展開しております。
 店舗によって設置マシンが異なります。
お客様がお好きな機種、利便性等ご都合のよい店舗をご利用ください。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00 ～ 23:00', 'close_day' => '', 'area_code' => 10201, 'address' => '熊本県熊本市中央区下通1丁目8−20下通センタービル2Ｆ', 'near_st' => '花畑町駅、通町筋駅', 'load_navi' => '花畑町駅より徒歩4分。銀座通り沿いツインビルのお隣のビルの2Ｆです。b-maxののぼりが目印です。', 'tel' => '096-359-1299', 'machine_num' => '4', 'parking' => '', 'site_url' => 'http://www.hiyake-salon-b-max.jp/', 'kodawari' => '駅近／完全個室／手ぶらＯＫ／初回割引あり', 'customers' => '','min_price' => 1540 ),
array('company_id'=>4,'name'=> 'B-WAVE', 'kana_name'=>'びーうえーぶ', 'catch_msg'=>'高田馬場発!どこよりも安い日焼けサロン','summary' => '新宿、高田馬場、池袋エリアの激安日サロ（日焼けサロン）B-WAVEです。高田馬場駅すぐ！
ベット型¥950（シャワー、ジェル付き）50分焼いても¥1,600の地域最安価格！！
女性に人気のムラなく焼ける縦型マシーン、セットでさらにお得な顔焼きマシーンも！！
「ブログをみた」で、初回登録料が無料！！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00／最終受付時間23:30', 'close_day' => '日曜
(6月、7月は日曜も営業予定!)', 'area_code' => 4103, 'address' => '東京都新宿区高田馬場3-2-13第二丸曽ビル3階', 'near_st' => '高田馬場駅', 'load_navi' => '高田馬場駅から徒歩1分!', 'tel' => '03-5330-0339', 'machine_num' => '', 'parking' => 'なし', 'site_url' => 'http://hiyakebwave.blog.fc2.com/', 'kodawari' => '格安サロン／駅近／深夜まで営業／初回割引あり', 'customers' => '','min_price' => 950 ),
array('company_id'=>5,'name'=> 'BANBOO KING 鹿児島の日サロ', 'kana_name'=>'ばんぶきんぐかごしまのひさろ', 'catch_msg'=>'','summary' => '当店では2種類のマシーンよりお選びいただけます。お客様のご要望に沿ってご使用ください。※ご不明な点、ご要望はスタッフにお申し付けください。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00〜', 'close_day' => '', 'area_code' => 10701, 'address' => '鹿児島市新屋敷町21-6-102', 'near_st' => '新屋敷駅', 'load_navi' => '新屋敷駅より徒歩7分', 'tel' => '080-1741-0033', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://omure2002.wix.com/bamboo-king', 'kodawari' => '完全予約制', 'customers' => '','min_price' => null ),
array('company_id'=>6,'name'=> 'BAYSIDE CLUB', 'kana_name'=>'べいさいどくらぶ', 'catch_msg'=>'日焼け度の高い高級ランプが標準装備','summary' => '日焼けマシーンは紫外線ランプのパワーが命です。
当店はErgoline社日焼けマシーン、そして一般の日焼けマシーンよりも日焼け度の高いUWE社のLeXtraPowerという高級紫外線ランプを標準装備！
Ergoline社日焼けマシーンの導入により、30分以上の日焼けの必要はありません。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～20:00', 'close_day' => '火曜日', 'area_code' => 4106, 'address' => '東京都世田谷区深沢5-1-8 ハマックスビル104', 'near_st' => '等々力駅', 'load_navi' => '等々力駅より徒歩15分', 'tel' => '03-6303-3466', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.bayside-tokyo.jp/tanning.html', 'kodawari' => '', 'customers' => '','min_price' => 3240 ),
array('company_id'=>7,'name'=> 'BAYSIDE-CLUB', 'kana_name'=>'べいさいどくらぶ', 'catch_msg'=>'伊豆の国市のカラオケ&日焼けサロン','summary' => 'カラオケ併設','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '月火木金土17:00〜27:00／水日祝12:00〜24:00', 'close_day' => '', 'area_code' => 6102, 'address' => '伊豆の国市南條196-1 2F', 'near_st' => '伊豆長岡駅', 'load_navi' => '伊豆長岡から徒歩3分', 'tel' => '055-949-6545', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://baysideclubizu.wix.com/baysideclub', 'kodawari' => '駅近／駐車場あり／深夜まで営業／強力マシーンあり', 'customers' => '','min_price' => 2500 ),
array('company_id'=>8,'name'=> 'ＢＥＡＭ　ＺＯＮＥ', 'kana_name'=>'びーむぞーん', 'catch_msg'=>'四国唯一の日焼けサロン。安全で一年中美しい日焼けが出来ます。','summary' => '四国唯一の日焼けサロン。安全で一年中美しい日焼けが出来ます。
小麦色の肌はセクシーで行動力のある男性のステイタス。
小麦色の肌はアクティブでセクシーな女性のシンボル。
カッコよくなれます、きれいになれます、強くなれます、陽気にします、
疲れ・ストレスを解消します。初回1000円から。
レディース：半額、メンズ：スチューデント料金','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00-22:00／最終受付時間21:30', 'close_day' => '年中無休', 'area_code' => 9301, 'address' => '高松市田町3-13 4F', 'near_st' => '瓦町駅', 'load_navi' => '瓦町駅より徒歩5分', 'tel' => '087-837-2553', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.niji.or.jp/home/tamachi/beamzone/', 'kodawari' => '駅近／学割あり／女性割引あり／初回割引あり', 'customers' => '','min_price' => null ),
array('company_id'=>9,'name'=> '江古田店', 'kana_name'=>'ぶらっくぴーぷるえこだてん', 'catch_msg'=>'当店は、千川通り沿い、１階にあり気軽に入れて、南国風の雰囲気での
タンニングが楽しめます。','summary' => '各マシーンごとに部屋で区切られており、その中でお着替えができ、
そのままタンニングできます。
お客様の層も、１０代から６０代の男女を問わずの方々が
下地作りからサウナ変わりとしての利用、また本格的な日焼けを目指す方にご利用いただいております。
是非一度、ゆったりとした癒しの空間での日焼けでリフレッシュ下さいませ。
スタッフ一同心よりお待ちしております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～24:00', 'close_day' => '', 'area_code' => 4104, 'address' => '東京都練馬区旭丘1－68－3　1F', 'near_st' => '江古田駅、新江古田駅', 'load_navi' => '江古田駅より徒歩4分', 'tel' => '', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://blackpeople.web.fc2.com/', 'kodawari' => '', 'customers' => '10～60代の男女','min_price' => null ),
array('company_id'=>10,'name'=> 'BLACK・BLACK', 'kana_name'=>'ぶらっくぶらっく', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 6101, 'address' => '静岡県浜松市中区千歳町85', 'near_st' => '浜松駅', 'load_navi' => '浜松駅北口出口から徒歩約6分', 'tel' => '053-456-4761', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>11,'name'=> 'Black&White', 'kana_name'=>'ぶらっくあんどほわいと', 'catch_msg'=>'「日焼けサロン　サマースマイル」は地域初のコラーゲンマシンを導入し、
　新たに「日焼け＆コラーゲンサロン　Black&White」として生まれ変わりました。','summary' => '日焼けマシンでは健康的な小麦色の肌を、コラーゲンマシンではシワ・たるみの無い若々しい肌を
どうぞ手に入れてください。
健康的な褐色の肌になりたい、いつまでも若くて瑞々しく美しい肌でありたいという気持ちは、老若男女問わず誰もが持っている物だと思います。
当店は日焼けマシン5台、コラーゲンマシン2台を設置しお客様がご希望通りの肌を手に入れるお手伝いをさせて頂きます。
ポイントカードによる割引、回数券、フリーパス等、価格、サービス共に安心してご利用頂ける様、努力して参ります。
タンニングジェル、バスタオル、シャンプー、ボディシャンプー、ドライヤー等は無料でお使い頂けますし、
アフターローションも100円で販売しておりますが、クレンジング等、化粧品類の用意はございませんので、
必要な方は持参して頂くことになります。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:30～22:30', 'close_day' => '年中無休', 'area_code' => 6203, 'address' => '愛知県小牧市中央1-438', 'near_st' => '小牧駅', 'load_navi' => '小牧駅より徒歩4分
名鉄小牧線小牧駅を出て、南へ300m約5分。
東新町交差点手前右側。ALSOK隣。サークルK斜め向かい。

自動車の場合
小牧インターチェンジから約3km。
小牧駅南300m、県道102号線沿い。
※駐車場5台', 'tel' => '0568-74-4366', 'machine_num' => '7', 'parking' => 'あり5台', 'site_url' => 'http://www7b.biglobe.ne.jp/~black-white/', 'kodawari' => '格安サロン／駐車場あり／駅近／コラーゲンマシーンあり／お得な回数券・プリペイドカードあり／女性割引あり／手ぶらＯＫ／焼き放題メニューあり', 'customers' => '','min_price' => 1300 ),
array('company_id'=>12,'name'=> 'BlackBeryy', 'kana_name'=>'ぶらっくべりー', 'catch_msg'=>'大人の為の、個室日焼けサロンが星ヶ丘ＯＰＥＮ！','summary' => '個室日焼けサロン　BlackBeryy
プラスアルファ星ヶ丘店隣
ｼｬｰﾜｰﾙｰﾑ隣接完全個室タイプの
大人の為の、日サロです！！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '20:00～25:00／金20:00～27:00', 'close_day' => '土曜日', 'area_code' => 6202, 'address' => '名古屋市千種区桜が丘９０　ソミュール桜ヶ丘　１Ｆ', 'near_st' => '星ヶ丘駅、一社駅', 'load_navi' => '星ヶ丘駅・一社駅より徒歩7分
広小路通り沿い、打越交差点、プラスアルファ星ヶ丘店隣　', 'tel' => '090-2268-9696(予約開始、夜７時～）', 'machine_num' => '', 'parking' => 'ＡＯＫＩ隣タイムズパーキングをご利用下さい。', 'site_url' => 'http://tanningstublackberry.blog.fc2.com/', 'kodawari' => '初回割引あり／完全個室／深夜まで営業／大人向けサロン／格安サロン', 'customers' => '','min_price' => 1200 ),
array('company_id'=>13,'name'=> 'BLUE NEON', 'kana_name'=>'ぶるーねおん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 6203, 'address' => '愛知県春日井市若草通2丁目19番地1 第1ｶｰｻｴﾝｼｮｳ', 'near_st' => '勝川駅', 'load_navi' => '勝川駅からすぐの19号沿い
徒歩12分', 'tel' => '0568-33-4989', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>14,'name'=> 'Bright', 'kana_name'=>'ぶらいと', 'catch_msg'=>'日焼けを通して輝く大人をサポートする日焼けサロン','summary' => '日焼けを通して輝く大人をサポートする日焼けサロン

2010年よりSUNBO東口店として営業してまいりましたが、この度、SUNBOの加盟を外れ、
2015年9月より独自に 日焼けサロンBRIGHT（ブライト）とし、店舗運営を行う運びとなりました。

御利用のお客様におかれましては、店舗名以外、料金含め、全て以前と変わりありませんので、
御迷惑をお掛け致す事はございません。
今迄と同様にご利用頂けますので、変わらぬ御愛顧の程、宜しくお願い申し上げます。


当店は完全予約制となっております。
直前ですとご希望に添えない場合が多く御座いますので、
ご来店の際は事前にお電話にてご予約をお願いいたします。
みなさまのご来店心よりお待ちしております♪','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～22:00／最終受付時間21:30', 'close_day' => '火曜日', 'area_code' => 2501, 'address' => '仙台市若林区新寺
2-1-1-2F', 'near_st' => '仙台駅、宮城野通駅', 'load_navi' => '仙台東口 徒歩7分
地下鉄東西線
宮城野通駅 徒歩2分', 'tel' => '022-290-0298', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.ts-bright.com/', 'kodawari' => '駅近／完全予約制／マシーン種類豊富／大人向けサロン／強力マシーンあり', 'customers' => '','min_price' => 2050 ),
array('company_id'=>15,'name'=> '千葉店', 'kana_name'=>'ぶろんざーじゅちばてん', 'catch_msg'=>'酸素カプセルあり
バスタオル・フェイスタオル/シャワー/
ドライヤー/ヘアブラシ/シャンプー/ボディーソープ
/整髪料/洗顔料/水着/カチューシャ/サンダル無料貸し出し
手ぶらでお越しください。
会費　無料
予約優先
シャワー完備
お得なプリペイドあり
表示料金すべて税込・ジェル代込
クレジットカード利用可能','summary' => '■電話にてご予約ください。
（直接ご来店いただいても、ご案内できますがご予約いただいた方が、待ち時間なしに入れます。）

■ご来店後、受付にて簡単な登録をしていただきます。
  (会員登録は無料です)
　マシンの説明・コースの説明などをさせていただきます。
　酸素カプセルの場合は、アンケート用紙を記入していただきます。

■更衣室にて、脱衣・ジェル塗りをしていただきます。
　酸素カプセルの場合は洋服を着用したまま、ご利用できます。

■タンニング後、更衣室にてシャワーで汗を流して終了になります。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～24:00 ／最終受付時間23:00', 'close_day' => '年中無休(変動あり)', 'area_code' => 4401, 'address' => '千葉県千葉市中央区本千葉町16-7　ブラジルビル5F', 'near_st' => '京成千葉中央駅', 'load_navi' => '京成千葉中央駅より徒歩　1分
　　　　　JR千葉駅より徒歩　10分', 'tel' => '043-224-9696', 'machine_num' => '5', 'parking' => '', 'site_url' => 'http://bronzage.web.fc2.com/', 'kodawari' => '駅近／予約優先／酸素カプセルあり／手ぶらＯＫ／お得な回数券・プリペイドカードあり／学割あり／マシーン種類豊富／格安サロン', 'customers' => '','min_price' => 500 ),
array('company_id'=>16,'name'=> '鹿児島店', 'kana_name'=>'ぶろんずりぞーとかごしまてん', 'catch_msg'=>'鹿児島県下で顧客数NO1の実績を誇る　日焼けサロンbronze-resort をよろしくお願いします','summary' => '男らしく健康的に日焼けした小麦色の肌は、やはり、女性ウケするものです。
また、顔や体も引き締まって見えて、若々しく見られたりもします。人によっては、肌色がただ小麦色になっただけで、一気に見違えるほど格好良くなってしまう男性もいます。しかし、いざ日焼けするとなると、ほとんど焼けない人、赤くなるだけの人、すぐに肌がボロボロになってしまう人など、意外と上手くいかない事も多いものです。Bronze Resort 鹿児島店では、そんな貴方のお悩みを解決致します。
シャワー、貸タオル、予約制','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～20:00', 'close_day' => '', 'area_code' => 10701, 'address' => '鹿児島市宇宿1丁目41−3 1F', 'near_st' => '宇宿一丁目駅', 'load_navi' => '市電 宇宿1丁目電停を降りてスグ', 'tel' => '080-7983-6582', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://bronze-resort.com/', 'kodawari' => '予約優先／手ぶらＯＫ／', 'customers' => '','min_price' => null ),
array('company_id'=>17,'name'=> 'BROWN SUGAR', 'kana_name'=>'ぶらうんしゅがー', 'catch_msg'=>'気軽に日焼けしてみませんか？
相模線・小田急線大和駅から徒歩1分です。お仕事や学校帰りに気軽に寄れちゃうのでうれしい。','summary' => '当店は完全個室になっております。
今、世界では日焼マシーンで日光浴をすることが常識となりつつあります。それはフロンガス等により、ＵＶＣから地球の生物を守る役割を果たしていたオゾン層が破壊されつつあることが、人体に悪影響を及ぼすという報道が世界各国でなされているからです。地球上の生物は酸素と太陽がなければ生存することできません。優良な紫外線（ＵＶＡ）と少量のＵＶＢをバランスよく放出する日焼マシーンが必要とされてきているのです。
日焼マシーンは単なる流行としてではなく、人類生存の起源に基づいて一層注目を集めているのです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10：00～24:00／
予約時間 9：30～22:00（TEL)／
LAST START 23:00スタート迄', 'close_day' => '12/31, 1/1, 1/2', 'area_code' => 4206, 'address' => '神奈川県大和市中央4-1-23 風の木ビル5F', 'near_st' => '大和駅', 'load_navi' => '相模線・小田急線大和駅から徒歩1分', 'tel' => '046-260-0321', 'machine_num' => '', 'parking' => 'あり
完備', 'site_url' => 'http://www.brownsugar.info/', 'kodawari' => '駅近／駐車場あり／深夜まで営業／紹介割引あり／学割あり／初回割引あり／朝割引あり／完全個室', 'customers' => '','min_price' => 2420 ),
array('company_id'=>18,'name'=> 'C.M.G Tanning Studio', 'kana_name'=>'しーえむじーたんにんぐすたじお', 'catch_msg'=>'C.M.G Tanning Studioは、スポーツジムC.M.G に併設した本格的な日焼けサロンです。','summary' => '日焼けマシンでのタンニング（日焼け）でも、1回では綺麗に日焼けしません。

初めは短時間で繰り返し焼きながら、肌に「下地」を作ることが大切です。
この「下地を作る」段階は、お客様のお肌の状態によって違いがあり、お肌の様子を見ながら慎重に進める必要があります。

Ｃ.M.Gでは、経験豊富なスタッフが、お客様の肌に無理を与えないよう、アドバイスさせて頂きます。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '平日	10:00〜24:00／土・日・祝	10:00〜19:00', 'close_day' => '第2土曜・第3日曜', 'area_code' => 6202, 'address' => '名古屋市名東区小井堀町506　CMGビル2F', 'near_st' => '', 'load_navi' => '名古屋インター近く
「大久田東」交差点を南へ
看板を目印にお越し下さい。', 'tel' => '052-701-2013', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://hiyake.net/home.html', 'kodawari' => '完全個室／クレジットカード利用可能／トレーニングジム併設／朝割引あり／お得な回数券・プリペイドカードあり／深夜まで営業／駐車場あり', 'customers' => '20代〜50代','min_price' => null ),
array('company_id'=>19,'name'=> '京都駅前店', 'kana_name'=>'ちりきょうとえきまえてん', 'catch_msg'=>'古都を「褐気」づけるため努力する店。','summary' => 'レディースデー毎週木曜日　オールタイム1,000円引き（他のサービスと併用できません）

通常サービス
サービスタイムメンズ12:00～14:00　 レディース15:00～18:00
サービスタイム中は、通常料金より1000円引きとなります。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～23:00／最終受付時間22:00', 'close_day' => '', 'area_code' => 7201, 'address' => '京都市下京区塩小路通東洞院
西入ル東塩小路町544-2 ONﾋﾞﾙ4階', 'near_st' => '京都駅', 'load_navi' => '京都タワーより東に1分ﾄﾞｺﾓｼｮｯﾌﾟ東隣[ONビル]4階', 'tel' => '075-353-6166', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.chili.co.jp/salon-kyo.html', 'kodawari' => '女性割引あり／駅近／学割あり／格安サロン', 'customers' => '','min_price' => 820 ),
array('company_id'=>19,'name'=> '桂店', 'kana_name'=>'ちりかつらてん', 'catch_msg'=>'古都を「褐気」づけるため努力する店。','summary' => 'レディースデー毎週木曜日　オールタイム1,000円引き（他のサービスと併用できません）

通常サービス
サービスタイムメンズ12:00～14:00　 レディース15:00～18:00
サービスタイム中は、通常料金より1000円引きとなります。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～23:00／最終受付時間22:00', 'close_day' => '', 'area_code' => 7201, 'address' => '京都市西京区川島有栖川町98 ウッズ桂2F', 'near_st' => '桂駅', 'load_navi' => '阪急京都線 桂駅西口下車線路沿い南に徒歩2分', 'tel' => '075 382 1681', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.chili.co.jp/salon-ka.html', 'kodawari' => '女性割引あり／駅近／学割あり', 'customers' => '','min_price' => 1580 ),
array('company_id'=>19,'name'=> '河原町三条店', 'kana_name'=>'ちりかわらまちさんじょうてん', 'catch_msg'=>'古都を「褐気」づけるため努力する店。','summary' => 'レディースデー毎週木曜日　オールタイム1,000円引き（他のサービスと併用できません）

通常サービス
サービスタイムメンズ12:00～14:00　 レディース15:00～18:00
サービスタイム中は、通常料金より1000円引きとなります。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～23:00／最終受付時間22:00', 'close_day' => '', 'area_code' => 7201, 'address' => '京都市中京区石橋町河原町通
三条上ルココクルビル4階', 'near_st' => '京都市役所前駅、三条駅、三条京阪駅、烏丸御池駅', 'load_navi' => '河原町三条交差点より北に徒歩1分。ココクルビル4階。カメラのムツミが目印', 'tel' => '075-213-7875', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.chili.co.jp/salon-san.html', 'kodawari' => '女性割引あり／駅近／学割あり', 'customers' => '','min_price' => 1980 ),
array('company_id'=>20,'name'=> 'Ｃｏｏｌ', 'kana_name'=>'くーる', 'catch_msg'=>'初めての方も安心・安全にご利用頂くためにお客様に合った焼き方をスタッフが丁寧にお答えします。','summary' => 'ＣＯＯＬは「美しく・健康的に…」をテーマに、みなさまに快適なリラックスタイムを過ごして頂ける全室個室・シャワー完備のプライベートサロンです。
また「かっこいい小麦肌になりたい！」「健康的な体になりたい！」「引き締まったラインになりたい！」はもちろん、理想のＢｏｄｙに近づけるようお客様ひとりひとりに合ったカウンセリングで安心・安全にご利用頂いております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10：00～22：00／夏季（6～9月）営業時間10：00～23：00', 'close_day' => '', 'area_code' => 4205, 'address' => '小田原市栄町2丁目13-19', 'near_st' => '小田原駅', 'load_navi' => '小田原駅より徒歩6分', 'tel' => '0465-22-9614', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.cool-open.jp/hp/', 'kodawari' => '完全個室／学割あり／予約割引あり／マシーン種類豊富', 'customers' => '10代から会社帰りの60代の方まで','min_price' => 2000 ),
array('company_id'=>21,'name'=> 'CRAZY SUN', 'kana_name'=>'くれいじーさん', 'catch_msg'=>'大人専用
日焼けサロン
CRAZY SUN','summary' => '★お知らせ★
facebookはじめました
【いいね！】
お願いしま～す♪♪
日焼けサロンCRAZYSUNで検索してね！
★おしらせ★
CRAZY SUN店長が
パーソナルトレーニングはじめました!!
詳しくは店内にて
お知らせしております

お知らせ
高校生・18歳以下の方
はご利用いただけません。

お知らせ
日曜日も時間短縮にて
営業しております。
12時～１7時
*16:30受付終了','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～20:00／最終受付時間19:30', 'close_day' => '不定休', 'area_code' => 2401, 'address' => '山形県天童市南町2-13-21
クリスタルビル3号', 'near_st' => '天童南駅', 'load_navi' => '天童南駅より徒歩5分', 'tel' => '023-651-2239', 'machine_num' => '', 'parking' => 'あり(共用　30台）', 'site_url' => 'http://katy.jp/crazysun/', 'kodawari' => '駅近／駐車場あり／大人向けサロン／ドリンクサービスあり／手ぶらＯＫ', 'customers' => '','min_price' => 2000 ),
array('company_id'=>22,'name'=> 'Crowd', 'kana_name'=>'くらうど', 'catch_msg'=>'初めての方も安心してご来店ください。
スタッフがアドバイス致します。','summary' => '小麦色の肌は健康的で前向きな印象を与え、健康促進効果も！！日頃から通われている方は勿論、スポーツ焼けのムラを綺麗にしたい、海外旅行の前に下地を作りたいという方など、幅広い目的をお持ちの方にご利用いただいております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～22:00／最終受付時間21:30', 'close_day' => '無休（年末年始除く）', 'area_code' => 2601, 'address' => '福島県郡山市鶴見坦2-16-1　M．Mビル102', 'near_st' => '', 'load_navi' => '', 'tel' => '024-935-9610', 'machine_num' => '', 'parking' => 'あり3台', 'site_url' => 'http://www.gurutto-koriyama.com/detail/index_337.html', 'kodawari' => '学割あり／女性割引あり／初回割引あり／マシーン種類豊富／駐車場あり／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>23,'name'=> 'dope', 'kana_name'=>'どーぷ', 'catch_msg'=>'ハイパワーマシーン導入。是非、体感してみてください。','summary' => 'お誕生日にはサービス致します！！
証明出来る物ご提示下さい、３日前後ＯＫ!','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11：00～23：00／最終受付時間22：00', 'close_day' => '', 'area_code' => 7201, 'address' => '京都府京都市南区東九条柳下町３３', 'near_st' => '十条駅', 'load_navi' => '十条駅より徒歩4分

北からお越しの場合
お店を通り過ごして竹田街道十条の１０ｍ手前右側　十条ガレージです。
ミドリの看板のサカノシタ(工具屋)の横
入ってすぐに左側にｄｏｐｅの看板が有ります。
南からお越しの場合
竹田街道十条　１０ｍ上がる西側　十条ガレージです。
ミドリの看板のサカノシタ(工具屋)の横
入ってすぐに左側にｄｏｐｅの看板が有ります。
ｄｏｐｅ看板以外は駐車出来ません。', 'tel' => '075-672-9696', 'machine_num' => '7', 'parking' => 'あり5台', 'site_url' => 'http://www.i-opt.co.jp/docs/dope/main.html', 'kodawari' => '駅近／マシーン種類豊富／女性割引あり／学割あり／誕生日割引あり／雨の日割引あり／ドリンクサービスあり／手ぶらＯＫ／駐車場あり／初回割引あり／紹介割引あり／駐車場あり／格安サロン', 'customers' => '','min_price' => 1300 ),
array('company_id'=>24,'name'=> 'ＥＮＪＯＹ', 'kana_name'=>'えんじょい', 'catch_msg'=>'低価格
マシンルーム・シャワールーム・お化粧ルームは完全個室です。
手ぶらで来店OKです。タオル等無料貸し出しがあります。','summary' => '低価格
マシンルーム・シャワールーム・お化粧ルームは完全個室です。
手ぶらで来店OKです。タオル等無料貸し出しがあります。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～23:00／最終受付時間23:00', 'close_day' => '日・祝祭日', 'area_code' => 6401, 'address' => '三重県津市高茶屋小森町2874－3', 'near_st' => '', 'load_navi' => '松坂方面からお越しの方へ

国道23号線よりAOKI、西松屋の信号交差点（高茶屋小森）を右折して
もつ小町の交差点を左折します。(写真1）
ここから細い道を直進し、つきあたり（写真2）を右折するとENJOYが見えてきます。
鈴鹿方面からお越しの方へ

国道23号線よりオートバックスをすぎると、三重県陸運局への標識（写真3）があります。
その標識に従って左折し、ホテルをすぎると小さな交差点（写真4）があるので左折します。
つきあたり（写真2）を右折するとENJOYが見えてきます。
遠方より公共交通機関でお越しの方へ

JR高茶屋駅・三交バス卸センター前・サンバレー・米津・雲出にて送迎に伺います。
予約時に芝山に申し込みして下さい。
又、到着時刻の10分前にもう一度電話していただけると幸いです。', 'tel' => '059－234－1937', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://enjoyshibagym.web.fc2.com/hiyakesaron.html', 'kodawari' => '駐車場あり／送迎あり／完全個室／手ぶらＯＫ／学割あり／お得な回数券・プリペイドカードあり／コラーゲンマシーンあり／トレーニングジム併設', 'customers' => '','min_price' => 3000 ),
array('company_id'=>25,'name'=> 'ERGO JAPAN浜松', 'kana_name'=>'えるごじゃぱんはままつ', 'catch_msg'=>'完全個室','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '平日11:00～21:00／最終受付時間21:00／日祝11:00～20:00／最終受付時間20:00', 'close_day' => '', 'area_code' => 6101, 'address' => '静岡県浜松市中区佐藤町3-6-11レッツビル2F', 'near_st' => '', 'load_navi' => '', 'tel' => '053-460-0031', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://www.do-t.jp/ergo/ergo_index.html', 'kodawari' => '駐車場あり／強力マシーンあり／完全個室', 'customers' => '','min_price' => 2150 ),
array('company_id'=>26,'name'=> '代々木店', 'kana_name'=>'えくしおんよよぎてん', 'catch_msg'=>'貴方の生活が華やかになるお手伝い','summary' => '今日の疲れを取るために、明日の準備のために、ぜひEXIONをご利用ください。1人1部屋の個室なので女性の方や、共同更衣室など苦手な方も気軽にご利用頂けます。
代々木店・渋谷店・高田馬場店ともにご来店お待ちしております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10：00～深夜', 'close_day' => '', 'area_code' => 4103, 'address' => '東京都渋谷区代々木1-32-1
白倉第一ビル3階', 'near_st' => '代々木駅', 'load_navi' => '代々木駅 西口より徒歩30秒です。', 'tel' => '03-3379-8867', 'machine_num' => '', 'parking' => 'なし', 'site_url' => 'http://exion.jp/index.php', 'kodawari' => '駅近／深夜まで営業／コラーゲンマシーンあり／完全個室', 'customers' => '10代～50代','min_price' => 2400 ),
array('company_id'=>26,'name'=> '渋谷店', 'kana_name'=>'えくしおんしぶやてん', 'catch_msg'=>'貴方の生活が華やかになるお手伝い','summary' => '今日の疲れを取るために、明日の準備のために、ぜひEXIONをご利用ください。1人1部屋の個室なので女性の方や、共同更衣室など苦手な方も気軽にご利用頂けます。
代々木店・渋谷店・高田馬場店ともにご来店お待ちしております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10：00～深夜', 'close_day' => '', 'area_code' => 4105, 'address' => '東京都渋谷区渋谷2-19-17
第106東京ビル10階', 'near_st' => '渋谷駅', 'load_navi' => '各渋谷駅より徒歩3分です。', 'tel' => '03-6427-4150', 'machine_num' => '', 'parking' => 'なし', 'site_url' => 'http://exion.jp/index.php', 'kodawari' => '駅近／深夜まで営業／コラーゲンマシーンあり／完全個室／マシーン種類豊富', 'customers' => '','min_price' => 2000 ),
array('company_id'=>26,'name'=> '高田馬場店', 'kana_name'=>'えくしおんたかだのばばてん', 'catch_msg'=>'貴方の生活が華やかになるお手伝い','summary' => '今日の疲れを取るために、明日の準備のために、ぜひEXIONをご利用ください。1人1部屋の個室なので女性の方や、共同更衣室など苦手な方も気軽にご利用頂けます。
代々木店・渋谷店・高田馬場店ともにご来店お待ちしております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10：00～深夜', 'close_day' => '', 'area_code' => 4103, 'address' => '東京都新宿区高田馬場1－34－14山崎ビル３階', 'near_st' => '高田馬場駅', 'load_navi' => '高田馬場駅より徒歩２分です。', 'tel' => '03-5272-9699', 'machine_num' => '', 'parking' => 'なし', 'site_url' => 'http://exion.jp/index.php', 'kodawari' => '駅近／深夜まで営業／コラーゲンマシーンあり／完全個室', 'customers' => '','min_price' => 2000 ),
array('company_id'=>27,'name'=> 'ＦINE', 'kana_name'=>'ふぁいん', 'catch_msg'=>'完全個室でシャワーも完備。
タオルやボディソープも完備していますので
手ぶらで気軽にご来店いただけます。
予約優先
カット、パーマ、マッサージ、ヘッドスパあり','summary' => '理容・ソフト整体・日焼けサロンが1フロアに集結の新しいサロン
カットのついでに本格ツボほぐしマッサージでボディケアも♪カットと一緒にマッサージや日焼けサロンでセット割やトリプル割に！！
　　　　　　　　　ヘアカット、ソフト整体、日焼けもココだけでOK！
　　　　　忙しい自分にまとめてご褒美♪　これが新しいサロンのカタチ','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:30 - 19:00／土日祝8:30～19:00', 'close_day' => '火曜日', 'area_code' => 4301, 'address' => '埼玉県川口市戸塚南5－1－19', 'near_st' => '戸塚安行駅、東川口駅', 'load_navi' => '戸塚安行駅（駅から1km）
東川口駅（駅から1.5km） ', 'tel' => '048-456-5412', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://refresh-fine.com/', 'kodawari' => '駐車場あり／完全個室／手ぶらＯＫ／理容室併設／マッサージあり', 'customers' => '','min_price' => null ),
array('company_id'=>28,'name'=> '入間店', 'kana_name'=>'ふりすこいるまてん', 'catch_msg'=>'FRISCOは、埼玉の坂戸・上福岡・入間にある完全個室の日焼けスタジオです。
一部屋の中に、日焼けマシーン・シャワールーム・エアコン・ＵＳＥＮを完備。
お好きな曲を聴きながら、あなただけの日焼けスペースを味わってみませんか。。。
スタッフ一同、あなたの元気を応援します。','summary' => 'メンバーさんがお友だち紹介で、 スタンプ10コ　もれなくプレゼント！！
（但し同伴時に限ります）
毎月のキャンペーンもチェックね！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00 ～ 23:00／最終受付時間22:15', 'close_day' => '', 'area_code' => 4303, 'address' => '埼玉県入間市豊岡1-3-22　エンドール入間202', 'near_st' => '入間市駅', 'load_navi' => '西武池袋線入間市駅北口下車徒歩3分', 'tel' => '04-2966-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.fun-frisco.co.jp/', 'kodawari' => '駅近／紹介割引あり／完全個室／初回割引あり', 'customers' => '','min_price' => 2200 ),
array('company_id'=>28,'name'=> '坂戸店', 'kana_name'=>'ふりすこさかどてん', 'catch_msg'=>'メンバーさんがお友だち紹介で、 スタンプ10コ　もれなくプレゼント！！
（但し同伴時に限ります）
毎月のキャンペーンもチェックね！','summary' => 'FRISCOは、埼玉の坂戸・上福岡・入間にある完全個室の日焼けスタジオです。
一部屋の中に、日焼けマシーン・シャワールーム・エアコン・ＵＳＥＮを完備。
お好きな曲を聴きながら、あなただけの日焼けスペースを味わってみませんか。。。
スタッフ一同、あなたの元気を応援します。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00 ～ 23:00／最終受付時間22:15', 'close_day' => '', 'area_code' => 4303, 'address' => '埼玉県坂戸市南町18-1　中島マンション103', 'near_st' => '坂戸駅', 'load_navi' => '東武東上線　坂戸駅南口下車徒歩3分　ファミリーマート前', 'tel' => '049-289-8009', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://www.fun-frisco.co.jp/', 'kodawari' => '駅近／駐車場あり／初回割引あり／完全個室／紹介割引あり', 'customers' => '','min_price' => 2200 ),
array('company_id'=>28,'name'=> '上福岡店', 'kana_name'=>'ふりすこかみふくおかてん', 'catch_msg'=>'','summary' => 'FRISCOは、埼玉の坂戸・上福岡・入間にある完全個室の日焼けスタジオです。
一部屋の中に、日焼けマシーン・シャワールーム・エアコン・ＵＳＥＮを完備。
お好きな曲を聴きながら、あなただけの日焼けスペースを味わってみませんか。。。
スタッフ一同、あなたの元気を応援します。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00 ～ 23:00／最終受付時間22:15', 'close_day' => '月曜日', 'area_code' => 4303, 'address' => '埼玉県ふじみ野市上福岡1-14-51　石光ビル3F', 'near_st' => '東武東上線　上福岡駅', 'load_navi' => '東武東上線　上福岡駅東口下車徒歩3分　ファミリーマート並び', 'tel' => '049-264-8989', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.fun-frisco.co.jp/', 'kodawari' => '駅近／初回割引あり／完全個室／紹介割引あり', 'customers' => '','min_price' => 2000 ),
array('company_id'=>29,'name'=> 'g-style', 'kana_name'=>'じーすたいる', 'catch_msg'=>'福山市には、一軒の日焼けサロンです！
初心者用から上級者用までのマシンが揃っています。
年中、小麦色の肌をキープできます。
また、海水浴に行く前に下地を作って行くと焼けど日焼け（炎症）にないにくいです。','summary' => '福山市には、一軒の日焼けサロンです！
初心者用から上級者用までのマシンが揃っています。
年中、小麦色の肌をキープできます。
また、海水浴に行く前に下地を作って行くと焼けど日焼け（炎症）にないにくいです。
予約優先','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～22:00', 'close_day' => '不定休', 'area_code' => 8201, 'address' => '広島県福山市木之庄町1-18-17', 'near_st' => '福山駅', 'load_navi' => '福山駅より徒歩20分', 'tel' => '084-921-7003', 'machine_num' => '4', 'parking' => '', 'site_url' => 'http://www.g-style-tanning.com/', 'kodawari' => '予約優先／学割あり', 'customers' => '','min_price' => null ),
array('company_id'=>30,'name'=> 'GLOW横須賀中央店', 'kana_name'=>'ぐろうよこすかちゅうおうてん', 'catch_msg'=>'','summary' => '横須賀の日焼けサロン　GLOW横須賀中央店です。落ち着いた雰囲気の店内で日焼けを楽しんでください！ベットタイプのマシン室は完全個室で快適・安心な日サロです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～23:00／最終受付時間22:30', 'close_day' => '', 'area_code' => 4204, 'address' => '神奈川県横須賀市大滝町2-4-3高橋ビル5Ｆ', 'near_st' => '横須賀中央駅', 'load_navi' => '横須賀中央駅より徒歩4分', 'tel' => '0468-22-6681', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.soltron.jp/glow/', 'kodawari' => '駅近／マシーン種類豊富／格安サロン', 'customers' => '','min_price' => 900 ),
array('company_id'=>31,'name'=> 'Hair Salon Fetia', 'kana_name'=>'へあさろんフィティア', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～19:00／最終受付時間18:30', 'close_day' => '火曜日・第3月曜日定休', 'area_code' => 1002, 'address' => '北海道函館市新川町4-13', 'near_st' => '', 'load_navi' => '', 'tel' => '0138-27-5755', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hairsalonfetia.com/', 'kodawari' => '美容院併設／格安サロン', 'customers' => '','min_price' => 540 ),
array('company_id'=>32,'name'=> '中川店', 'kana_name'=>'へあさろんはーとなかがわてん', 'catch_msg'=>'音楽と日焼けマシーンベットで
リラックスできるプライベートＲＯＯＭです ','summary' => '横浜市都筑区・横浜市緑区・横浜市戸塚区・横浜市青葉区のキッズルーム・マッサージ・日焼けサロンのある美容室　美容室HEART　ヘアメイク・着付け・ブライダルもお気軽にご相談下さい。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:00～20:00', 'close_day' => '年中無休（年末年始・講習日を除く）', 'area_code' => 4202, 'address' => '横浜市都筑区中川 1-22-8　１階', 'near_st' => '中川駅', 'load_navi' => '市営地下鉄「中川駅」より徒歩3分', 'tel' => '045-913-4963', 'machine_num' => '', 'parking' => 'あり6台', 'site_url' => 'http://www.rise-heart.com/nakagawa.php', 'kodawari' => '駅近／手ぶらＯＫ／美容室併設／駐車場あり／焼き放題メニューあり', 'customers' => '','min_price' => 1620 ),
array('company_id'=>33,'name'=> 'ＨＯＬＬＹＷＯＯＤ', 'kana_name'=>'はりうっど', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4205, 'address' => '神奈川県平塚市紅谷町15－14', 'near_st' => '', 'load_navi' => '', 'tel' => '0463-24-9696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>34,'name'=> 'HOT RIPPER', 'kana_name'=>'ほっとりっぱー', 'catch_msg'=>'話題のニューマシンをご用意してお待ちしております。','summary' => 'コラーゲンマシンあり
学割あり
クレジット払い可能
ポイントカードあり
親切な女性スタッフ','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00-23:00 ／最終受付時間22:30', 'close_day' => '無休', 'area_code' => 8101, 'address' => '岡山市北区十日市西町1-2', 'near_st' => '', 'load_navi' => '', 'tel' => '086-201-0096', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://hotripper.jp/', 'kodawari' => '駐車場あり／クレジットカード利用可能／学割あり／マシーン種類豊富／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>35,'name'=> 'ibiza', 'kana_name'=>'いびざ', 'catch_msg'=>'完全プライベートなタンニング＆ネイルサロン「イビザ」 リーズナブルな価格設定と居心地の良さにこだわり、まるでリゾートにいるかの様な空間を提供します。','summary' => '完全プライベートなタンニング＆ネイルサロン「イビザ」
リーズナブルな価格設定と居心地の良さにこだわり、まるでリゾートにいるかの様な空間を提供します。
予約優先
ジェル無料
女性用ニプレスあり','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '月〜金 11:00〜22:00 ／土日祝 10:00〜22:00', 'close_day' => '毎週火曜日休み', 'area_code' => 6204, 'address' => '愛知県豊橋市潮崎町85 リッショーマンションB号室', 'near_st' => '愛知大学前駅', 'load_navi' => '愛知大学前駅より徒歩21分', 'tel' => '0532-37-7710', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://tanning-ibiza.club/', 'kodawari' => '駐車場あり／予約優先／ネイルサロン併設', 'customers' => '','min_price' => null ),
array('company_id'=>36,'name'=> 'Kuro\'s', 'kana_name'=>'くろーず', 'catch_msg'=>'健康のため、美しさのために、是非一度当店にお問い合わせください！','summary' => '金山総合駅から徒歩3分の好立地！

仕事帰り、遊びに行く前などにも手ぶらで行けて満足！

日焼けは若者だけじゃない！
Kuro\'sは中高年層も多く来店されるサロンです。
お一人様、女性の方も安心してご利用頂けます。

オシャレで日焼けを楽しみたい方！
健康的な肌の色をキープしたい方！
他店様でなかなか焼けなかった方！
またはすぐ色落ちしてしまった方！
とにかく黒くなりたい方！

上記のようなお客様は是非一度御来店下さい！
専門のスタッフが親切丁寧にアドバイスさせて頂きます。

初心者の方～上級者の方まで
御満足して頂けるよう、マシン・ランプ共に最高級ブランドの物を使用しております。

日焼けマシンはランプの紫外線が命！
より上質な日焼けが体験できます！！

タンニングジェル、アフタージェル、バスタオル、フェイスタオル、
その他各種アメニティグッズ、レンタル無料！
タンニング後のジュース類も飲み放題！


「日焼けサロンに興味はあるけど行きづらい…」
「初めてだから緊張する…」
　　　　　　　　　　　という方でも安心です！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00〜深夜', 'close_day' => '年中無休', 'area_code' => 6201, 'address' => '名古屋市熱田区金山町1-19-4 アイアンビル金山5F', 'near_st' => '金山駅', 'load_navi' => '金山総合駅から徒歩3分の好立地', 'tel' => '', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.kuro-s.jp/', 'kodawari' => '深夜まで営業／駅近／手ぶらＯＫ／ドリンクサービスあり／強力マシーンあり', 'customers' => '若年層～中高年まで','min_price' => 1840 ),
array('company_id'=>37,'name'=> '飯田橋店', 'kana_name'=>'らこすたいいだばしてん', 'catch_msg'=>'東京　新宿 銀座エリアの大人のためのラグジュアリーな日焼けサロン！','summary' => '初級者〜上級者までどなたでも使えるマシーンを完備。シャワー・バスタオル・ドライヤー完備で手ぶらでＯＫです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～23:00／最終受付時間22:00', 'close_day' => '年中無休', 'area_code' => 4103, 'address' => '東京都千代田区飯田橋4-9-8大和ビル4F', 'near_st' => '飯田橋駅', 'load_navi' => 'JR中央・総武線 飯田橋駅 / 東京メトロ東西線 飯田橋駅 / 東京メトロ有楽町線 飯田橋駅 / 東京メトロ南北線 飯田橋駅 / 都営大江戸線/飯田橋駅東口より徒歩0分※駅すぐ！', 'tel' => '03-3261-5578', 'machine_num' => '6', 'parking' => '近くに有料パーキングあり', 'site_url' => '', 'kodawari' => '駅近／大人向け／18歳未満お断り／手ぶらＯＫ／コラーゲンマシンあり／マシーン種類豊富／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>38,'name'=> 'LIEN', 'kana_name'=>'りあん', 'catch_msg'=>'絆＋憩いのスペース＝LIEN','summary' => '浅草雷門から徒歩1分にある「 LIEN – ESPACE ARC – 」は日焼けマシンや酸素カプセルを備える多目的スペースです。
下町情緒あふれる、浅草という観光客で賑わう場所で様々なジャンルの人が集まり、
お客様みんながリラックスして談笑することができる「たまり場的」な空間を提供いたします。

皆がリラックスできる空間
日焼けマスターはもちろん、女性や初心者の方にも安心なサービスで、若い方からご年配の方まで、幅広い年齢層の方々からご利用頂いております。
Lienでは、日焼けマシーン以外のスペースも充実しており、特に広くて使いやすいシャワールームはお客様から大好評を頂いております。
スタッフ一同、笑顔と元気で接客しておりますので、浅草にお越しの際は是非、お立ち寄りください。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～24:00／最終受付時間23:00', 'close_day' => '月曜日', 'area_code' => 4109, 'address' => '東京都台東区浅草1-20-4 イーストビル2F', 'near_st' => '浅草駅', 'load_navi' => '銀座線浅草駅1番出口より約2分', 'tel' => '03-5827-0180', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.espacearc.com/', 'kodawari' => '駅近／深夜まで営業／酸素カプセルあり', 'customers' => '','min_price' => 1800 ),
array('company_id'=>39,'name'=> 'ＬＯＣＯ　ＲＯＣＯ', 'kana_name'=>'ろころこ',
'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '8:00～21:00／最終受付時間21:00', 'close_day' => '日曜日・祝日', 'area_code' => 4301, 'address' => '埼玉県蕨市中央1-30-4', 'near_st' => '蕨駅',
'load_navi' => '蕨駅西口　駅から徒歩３０秒
駅前交番の裏
駐輪場の２Fです', 'tel' => '０４８－４３２－３９７３', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>40,'name'=> 'ＭＡＳＴＥＲ　ＳＵＮ',
'kana_name'=>'ますたーさん', 'catch_msg'=>'沖縄県北谷にある日焼けサロン。全国でもトップクラスの機種が勢揃い!!初めての人でも気軽にご利用いただけます。','summary' => '沖縄県北谷にある日焼けサロン。全国でもトップクラスの機種が勢揃い!!初めての人でも気軽にご利用いただけます。
キレイな肌を作り上げるよう、スタッフが丁寧にアドバイスします。女性スタッフなので女性の方も安心してご利用いただけます。
クレジット利用可
VISA,Master Card,JCB,その他
米ドルでの支払い可
待合室には雑誌、マッサージチェア、無料のアイスコーヒー、アイスウォーター、お菓子を
完備しております。喫煙はバルコニーにてご利用いただけます。
アメニティー類は全て無料となっております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '6:00～25:00／最終受付時間24:00', 'close_day' => '年中無休', 'area_code' => 10801,
'address' => '沖縄県中頭郡北谷町浜川8-5-2F', 'near_st' => '', 'load_navi' => '', 'tel' => '098-926-5553', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://xn--08j162n2geblfn9s.com/', 'kodawari' => '駐車場あり／深夜まで営業／クレジットカード利用可能／手ぶらＯＫ／マシーン種類豊富／ドリンクサービスあり／格安サロン', 'customers' => '10~70代と幅広い年齢層の方々','min_price' => 500 ),
array('company_id'=>41,'name'=> 'Muscele Beach', 'kana_name'=>'まっするびーち', 'catch_msg'=>'マッスルビーチで健康的でスタイリッシュな日焼け','summary' => '姫路、西播磨、神戸北区、西区、東播地方の方
鳥取、日生、竹野、佐用、篠山、福知山 方面からも来ていただいています
日焼けサロン　ボディビルの本場　マッスルビーチ

2014年　全ベッド入れ替え！
以前のベッドに比べよりパワーアップ！
さらに「コラーゲンランプ」をフェイスランプに搭載。
タンニングと同時に普段日光によるダメージを受けやすいフェイス、ネック部分をケアします！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 7302, 'address' => '兵庫県姫路市飾磨区上野田１丁目６', 'near_st' => '', 'load_navi' => '●ＪＲ姫路駅南出口より南へ徒歩２０分。
●神姫バス姫路駅南口のりばより　
　 ９１　山電飾磨駅行
　 ９８　庄田～姫路駅（南口）行
　 １６　庄田～姫路駅（北口）行
　 「姫路中央病院前」下車1分。
●山電亀山駅より東へ徒歩10分。
●姫路バイパス姫路南出口南へ1分。', 'tel' => '０７９－２３４－７８５７', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://www.american-health-club.com/sub13.htm', 'kodawari' => '完全個室／手ぶらＯＫ／駐車場あり', 'customers' => '','min_price' => null ),
array('company_id'=>42,'name'=> 'Muscle & Beauty磐田店', 'kana_name'=>'まっするあんどびゅーてぃーいわたてん', 'catch_msg'=>'入会金無料！
●モバイル会員（登録無料）を対象とした
　キャンペーン期間あります
●回数券あります','summary' => '磐田市の日焼けサロン　マッスル & ビューティーです。JAPAN L-8好評稼動中（完全個室で快適・安心）　磐田市内で日焼けサロンをお探しならマッスル & ビューティー磐田店へご来店ください！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '月～金8:00～22:00／土8:00～21:00／※特に午前中は要予約', 'close_day' => '※日曜定休日', 'area_code' => 6102, 'address' => '静岡県磐田市西貝塚2028-2', 'near_st' => '', 'load_navi' => '', 'tel' => '0538-32-4848', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://www.soltron.jp/muscle-beauty/', 'kodawari' => '駐車場あり／トレーニングジム併設／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>43,'name'=> 'ＯＶＥＲ　ＨＥＡＲＴ', 'kana_name'=>'おーばーひーと', 'catch_msg'=>'','summary' => 'マシーン各部屋はプライベートな個室空間。
バスタオル、バスローブもご用意してあなた様をお待ちしております。


アジアンリゾートを彷彿とさせる個室空間でごゆっくり、心ゆくまでタンニング(日焼け)をお楽しみ下さい！
ご来店の際は、どうぞお気軽に手ぶらでお越し下さい。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '平日・日・祝11:00～23:00', 'close_day' => '', 'area_code' => 6203, 'address' => '愛知県一宮市富士3丁目1-8', 'near_st' => '名鉄一宮駅', 'load_navi' => '『マツオボクシングジムの看板』が目印です！
名鉄一宮駅より徒歩30分', 'tel' => '(0586)25-1696', 'machine_num' => '', 'parking' => '駐車場20台完備', 'site_url' => 'http://www.over-heat.net/', 'kodawari' => '駐車場あり／トレーニングジム併設／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>44,'name'=> '竹ノ塚店', 'kana_name'=>'ぱるどたけのづかてん', 'catch_msg'=>'竹ノ塚駅　徒歩３分！！《大人の日焼けサロン　ＰＡＲＤ（パルド）》初めての方、大歓迎！お気軽にお越し下さい(*^_^*)','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～23:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4111, 'address' => '東京都足立区竹ノ塚1-40-12　サニービル３F', 'near_st' => '竹ノ塚駅', 'load_navi' => '東武伊勢崎線｢竹ノ塚」東口より徒歩３分', 'tel' => '03-3883-9696', 'machine_num' => '', 'parking' => 'なし', 'site_url' => 'http://pardhisaro.web.fc2.com/', 'kodawari' => '駅近／マシーン種類豊富', 'customers' => '','min_price' => 1840 ),
array('company_id'=>45,'name'=> '浜松店', 'kana_name'=>'ぷらいやーりぞーとはままつてん', 'catch_msg'=>'アパレル販売あり','summary' => 'Player Resort の日焼けマシンは、Soltron 及び Ergoline と共同開発にて作られた、コンパクトハイパワーマシンを採用しております。
従来のマシンと比べ、電球と皮膚の距離を近づけることにより、短時間で効率よく日焼けすることが可能です。（日焼けに不慣れな方は、短い時間でのご利用をお勧めいたします。）
マシンのワット数に関する質問が多数寄せられておりますが、通常マシンをベースにPlayer Resortマシンの電力をワット換算すると、おおよそ10,000～15,000ワットの電力が消費されます。※電力消費量と日焼けの度合いは必ずしも比例しません。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00〜20:00', 'close_day' => '', 'area_code' => 6101, 'address' => '静岡県浜松市西区志都呂1-25-18', 'near_st' => '', 'load_navi' => '', 'tel' => '053-489-3477', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://player-resort.com/', 'kodawari' => '女性割引あり／アパレル販売あり', 'customers' => '','min_price' => null ),
array('company_id'=>46,'name'=> 'RAYS　江坂', 'kana_name'=>'れいずえさか', 'catch_msg'=>'日焼けサロン　大阪　RAYS はカギ付き個室、シャワー設置で女性も安心の日焼けサロンです。

手ぶらＯＫ
日焼けオイルや日焼け後のシャワーで使用するシャンプー、ボディーソープ、バスタオル、ドライヤーなど全て完備しております。','summary' => '日焼けサロンRAYSでは、日焼けしたい男性、女性とも大歓迎です。お客様はサラリーマンやスポーツマン、GALなど多岐にわたります。
人に見られる仕事をしている人や、健康のためなど日焼けの理由はいろいろですが、美しく日焼けできるようにスタッフ一同サポートしていきます。不明な点などあればお気軽にスタッフまでお問い合わせください。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 7105, 'address' => '大阪府吹田市豊津町9-15 ニッコープラザ5F', 'near_st' => '江坂駅', 'load_navi' => '【車】
新御堂筋、江坂出口より3分
【電車】
地下鉄御堂筋線：江坂駅より徒歩1分。
江坂駅 9番出口直結。
1F薩摩っ子ラーメンのビル5F。', 'tel' => '06-6389-5444', 'machine_num' => '', 'parking' => 'なし', 'site_url' => 'http://www.studio-rays.com/', 'kodawari' => '駅近／手ぶらＯＫ／学割あり／女性割引あり／お得な回数券・プリペイドカードあり／初回割引あり／格安サロン', 'customers' => '10代後半～30代後半までの男女が約8割となっており、40代以上の男女が約2割ご利用いただいております。


江坂という土地柄、他のエリアに比べて、比較的ビジネスマンの方が多めです。
江坂には企業が多く集まっています。また近隣にはビジネス街の新大阪や梅田があり、ビジネスマンや単身赴任の男性が多く住む地域と言われています。

また新幹線の新大阪駅が近いこともあり、出張などで大阪に来た方にもご利用いただいております。

ギャルやギャル男と言われる10代～20代前半の方から、大学生やOLさん、ビジネスマンの男性や自営業の方など、かなり幅広い方々にご利用いただいております。','min_price' => 1300 ),
array('company_id'=>47,'name'=> 'ＲＢＣ', 'kana_name'=>'あーるびーしー', 'catch_msg'=>'恵比寿駅より徒歩1分。
完全個室の日焼けサロン。','summary' => 'コンセプトは『大人のための日焼けサロン』
恵比寿駅より徒歩一分。完全個室の日焼けサロンです。
各部屋ごとにシャワールームを完備しており、タンニングからお部屋を退室するまで、他の方に合わずに落ち着いてご利用頂けます。

さらにお客様のご希望に沿うように、マシンはドイツ製のエルゴライン、ソルトロンなどの四種類を導入し今までの物足りなさを解消いたしました。

タンニングマシンのライトも定期的に交換しており、いつも同じ品質のタンニングをご利用頂けるようにしております。

店内での衛生管理も徹底しておりますので、女性の方、初めての方も安心してご利用頂けます。

日本に導入事例の少ない機種もございますので『きれいな小麦色の肌になりたい方』『ほどよく焼けた感じにしたい』『健康的な肌の色をキープしたい方』『とにかく黒くなりたい方』は是非お試しください。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11：00～24：00', 'close_day' => '年中無休', 'area_code' => 4105, 'address' => '東京都渋谷区恵比寿1-8-3リバストーンハイム2Ｆ', 'near_st' => '恵比寿駅', 'load_navi' => '恵比寿駅より徒歩1分', 'tel' => '03-3473-8680', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://rbc-8.com/', 'kodawari' => '駅近／完全個室／深夜まで営業／強力マシーンあり／大人向けサロン／学割あり／初回割引あり', 'customers' => '','min_price' => 2160 ),
array('company_id'=>48,'name'=> 'rogieam　小倉店', 'kana_name'=>'ろぎーむこくらてん', 'catch_msg'=>'北九州日焼けサロンROGIEAM(ロギーム)は、完全個室性の本格日焼けサロンです。
あなたの肌をあなたが望む肌色に','summary' => '完全個室
V.I.P.会員のお客様にはタンニングジェルを無償配布しております。
学生割引をご利用の際は学生証の提示が必須となります。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 10102, 'address' => '小倉北区 江南町3-1 内山ビル1階', 'near_st' => '香春口三萩野駅', 'load_navi' => '香春口三萩野駅より徒歩4分', 'tel' => '080-4277-1196', 'machine_num' => '2', 'parking' => 'あり', 'site_url' => 'http://rogieam.com/', 'kodawari' => '駅近／深夜まで営業／駐車場あり／完全個室／学割あり／女性割引あり／会員制', 'customers' => '高校生から一般の方（60代）まで幅広くご利用頂いております。','min_price' => null ),
array('company_id'=>49,'name'=> 'ＲＯＹＡＬ　ＯＲＤＥＲ', 'kana_name'=>'ろいやるおーだー', 'catch_msg'=>'弘前市の美容室・理容室 トータルビューティーサロン り美しく、きれいに若々しく そして健康でおしゃれを楽しみたい 全てのお客様にトータルスタイルを様々な視点でご提供・ご案内いたします。','summary' => '当店の日焼けサロンはマシンが3台、シャワールーム2部屋完備、タオル等無料で貸し出しております。また、会員料等はございません。

カット・カラー、増毛・育毛、マッサージ、脱毛、ネイル、着付け、マツエクメニューあり','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '8:45～19:00', 'close_day' => '毎週月曜日', 'area_code' => 2101, 'address' => '青森県弘前市駅前町17-12', 'near_st' => '弘前駅', 'load_navi' => 'JR弘前駅より徒歩2分', 'tel' => '0172-38-6565', 'machine_num' => '3', 'parking' => 'あり', 'site_url' => 'http://www.royal-order.jp/contents/2015/10/tanning.php', 'kodawari' => '駅近／マッサージあり／美容院併設／ネイルあり／マツエクあり', 'customers' => '','min_price' => 2000 ),
array('company_id'=>50,'name'=> 'Santafe-サンタフェ-', 'kana_name'=>'さんたふぇ', 'catch_msg'=>'全身マシン学割500円引き','summary' => '20周年記念。快適空間に生まれ変わりました。

最新次世代ﾏｼﾝ導入! 当店ではお客様に安全に綺麗にタンニングをして頂けるように心がけております。この度、最新(次世代)マシンLP2を導入しました！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00-23:00 ／最終受付時間22:30', 'close_day' => '', 'area_code' => 2501, 'address' => '仙台市青葉区大町1丁目4-10
ココエステートジャパン大町ビル2F', 'near_st' => '青葉通一番町駅', 'load_navi' => '青葉通一番町駅より徒歩3分', 'tel' => '022-261-6226', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.santafe9696.jp/top.php', 'kodawari' => '駅近／強力マシーンあり／学割あり／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>51,'name'=> '博多筑紫口店', 'kana_name'=>'そらりすはかたつくしぐちてん', 'catch_msg'=>'日焼けマシーンで健康的な肌色を','summary' => '日焼けマシンと太陽光の違いは、誰もが一度は体験していることでしょうが、夏に海に行って日焼けした後、体中がヒリヒリしたり、かゆくなったり、次の日からはパリパリと皮がむけてきたりします。
自然の太陽は肌へのバランスに関係なく注いでくるので大変危険です。
日焼けマシンは有害な紫外線をカットしバランスを考えた光線の波と種類を使用しておりますのでブロンズ肌になるために大変効果的ですので安心してご利用頂けます。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10：00～24：00', 'close_day' => '年末年始', 'area_code' => 10101, 'address' => '福岡県福岡市博多区博多駅東1丁目12-7-903', 'near_st' => '博多駅', 'load_navi' => '地下鉄・西鉄バス『博多駅』　筑紫口を出て徒歩1分', 'tel' => '092-482-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://the-clear.co.jp/', 'kodawari' => '酸素カプセルあり／コラーゲンマシーンあり／駅近／手ぶらＯＫ／カップルＯＫ／クレジットカード利用可能／格安サロン／初回割引あり／予約割引あり／深夜まで営業／マシーン種類豊富／朝割引あり／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => 1500 ),
array('company_id'=>52,'name'=> '浅草店', 'kana_name'=>'あさくさてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00〜24:00 ／最終受付時間23:00', 'close_day' => '', 'area_code' => 4109, 'address' => '東京都台東区西浅草2-13-9 BL会館5F', 'near_st' => '田原町駅', 'load_navi' => '銀座線田原町駅 A2出口 徒歩3分', 'tel' => '03-3844-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/tokyo/asakusa', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '池袋北口店', 'kana_name'=>'いけぶくろきたぐちてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～26:00 ／最終受付25:00', 'close_day' => '', 'area_code' => 4101, 'address' => '東京都豊島区西池袋1-29-2 地得ビル5F', 'near_st' => '池袋駅', 'load_navi' => 'JR池袋駅北口 徒歩1分', 'tel' => '03-3989-9689', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/tokyo/ikebukurokita', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> 'IL SOLE 恵比寿店', 'kana_name'=>'いるそるえびすてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4105, 'address' => '東京都渋谷区恵比寿4-19-20 MLBカフェ施設内1F', 'near_st' => '恵比寿駅', 'load_navi' => 'JR/日比谷線 恵比寿駅東口より動く通路「スカイウォーク」を出て徒歩2分', 'tel' => '03-3444-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/tokyo/is-ebisu', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業／エステ・ネイル・まつ毛ケアあり／完全個室／大人向けサロン', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '錦糸町店', 'kana_name'=>'きんしちょうてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00　／最終受付時間23:00／金・土10:00～26:00／最終受付時間25:00', 'close_day' => '', 'area_code' => 4109, 'address' => '東京都墨田区錦糸3-5-9 ソアビル2F', 'near_st' => '錦糸町駅', 'load_navi' => 'JR錦糸町駅北口 徒歩2分', 'tel' => '03-5610-9689', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/tokyo/kinshicho', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '五反田店', 'kana_name'=>'ごたんだてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00　／最終受付時間23:00／金・土10:00～26:00／最終受付時間25:00', 'close_day' => '', 'area_code' => 4108, 'address' => '東京都品川区東五反田5-28-11 クレール五反田205', 'near_st' => '五反田駅', 'load_navi' => 'JR・都営浅草線五反田駅東口 徒歩2分', 'tel' => '03-3448-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/tokyo/gotanda', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '渋谷店', 'kana_name'=>'しぶやてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～26:00 ／24:30以降は電話予約制', 'close_day' => '', 'area_code' => 4105, 'address' => '東京都渋谷区宇田川町26-4 ルウ’82ビル8F', 'near_st' => '渋谷駅', 'load_navi' => '渋谷駅ハチ公口 徒歩3分', 'tel' => '03-3496-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/tokyo/shibuya', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '自由が丘店', 'kana_name'=>'じゆうがおかてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00　／最終受付時間23:00', 'close_day' => '', 'area_code' => 4106, 'address' => '東京都目黒区自由が丘1-27-2 ひかり街ビル3F', 'near_st' => '自由が丘駅', 'load_navi' => '東急東横線自由が丘駅正面出口 徒歩1分', 'tel' => '03-3718-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/tokyo/jiyugaoka', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '新宿東口店', 'kana_name'=>'しんじゅくひがしぐちてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～26:00 ／24:30以降は電話予約制', 'close_day' => '', 'area_code' => 4103, 'address' => '東京都新宿区新宿3-23-3 サンビル8F', 'near_st' => '新宿駅', 'load_navi' => 'JR新宿駅東口 徒歩2分', 'tel' => '03-3354-9689', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/tokyo/shinjukuhigashi', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '調布店', 'kana_name'=>'ちょうふてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '日～水10:00～24:00／最終受付時間23:30／木～土10:00～26:00／24:00～完全予約制', 'close_day' => '', 'area_code' => 4114, 'address' => '東京都調布市布田1-43-2 グレースメゾン谷中N棟301', 'near_st' => '調布駅', 'load_navi' => '調布駅北口 徒歩2分', 'tel' => '0424-89-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/tokyo/chofu', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '中野店', 'kana_name'=>'なかのてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '平日・日曜11:00～24:00／最終受付時間23:00　／金・土10:00～24:00', 'close_day' => '', 'area_code' => 4104, 'address' => '東京都中野区中野5-66-4 風月堂ビル6F', 'near_st' => '中野駅', 'load_navi' => 'JR中野駅 徒歩3分', 'tel' => '03-3386-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/tokyo/nakano', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> 'ビューテジオ青山店', 'kana_name'=>'びゅーてじおあおやまてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '平日10:00～23:00 ／最終受付時間22:00／土日祝10:00～22:00 ／最終受付時間21:00', 'close_day' => '', 'area_code' => 4105, 'address' => '東京都港区北青山2-12-7 2F', 'near_st' => '外苑前駅', 'load_navi' => '外苑前駅3番出口 徒歩3分', 'tel' => '03-5786-3544', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/tokyo/aoyama', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／完全個室／大人向けサロン', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '溝の口店', 'kana_name'=>'みぞのくちてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '平日・日曜10:00～24:00　／最終受付時間23:00／金・土10:00～26:00／最終受付時間25:00', 'close_day' => '', 'area_code' => 4203, 'address' => '神奈川県川崎市高津区久本1-2-2 SKIPSビル2F', 'near_st' => '溝の口駅', 'load_navi' => '溝の口駅南口 徒歩1分', 'tel' => '044-852-9699', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/kanagawa/mizonokuchi', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '戸塚店', 'kana_name'=>'とつかてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～26:00 ／24:30以降は電話予約制', 'close_day' => '', 'area_code' => 4202, 'address' => '神奈川県横浜市戸塚区上倉田町479-2 東横ビル1F', 'near_st' => '戸塚駅', 'load_navi' => 'JR戸塚駅東口 徒歩3分', 'tel' => '045-871-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/kanagawa/totsuka', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '横浜店', 'kana_name'=>'よこはまてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4201, 'address' => '神奈川県横浜市西区南幸2-17-4 第1ビル6F', 'near_st' => '横浜駅', 'load_navi' => 'JR横浜駅西口 徒歩10分', 'tel' => '045-314-9696', 'machine_num' => '6', 'parking' => '', 'site_url' => 'http://so-le.com/store/kanagawa/yokohama', 'kodawari' => '女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業／強力マシーンあり／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '川越店', 'kana_name'=>'かわごえてん', 'catch_msg'=>'','summary' => '2016年3月オープン','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4303, 'address' => '埼玉県川越市菅原町23-11　菅原町ビル3F', 'near_st' => '川越駅', 'load_navi' => '東武東上線川越駅東口 徒歩3分', 'tel' => '049-224-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/saitama/kawagoe', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '上尾店', 'kana_name'=>'あげおてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～23:00', 'close_day' => '', 'area_code' => 4304, 'address' => '埼玉県上尾市仲町1-7-8 ゆうきビル2F', 'near_st' => '上尾駅', 'load_navi' => 'JR高崎線上尾駅東口 徒歩3分', 'tel' => '048-771-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/saitama/ageo', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '志木店', 'kana_name'=>'しきてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '月～木、日11:00～23:00　／最終受付時間 22:00／金、土11:00～26:00　／最終受付時間25:00　／24:30以降完全予約', 'close_day' => '', 'area_code' => 4303, 'address' => '埼玉県新座市東北2-30-25 花野・尾崎共同ビル4F', 'near_st' => '志木駅', 'load_navi' => '東武東上線志木駅南口 徒歩2分', 'tel' => '048-476-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/saitama/shiki', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '南越谷店', 'kana_name'=>'みなみこしがやてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～25:00 ／最終受付時間 24:00', 'close_day' => '', 'area_code' => 4302, 'address' => '埼玉県越谷市南越谷1-17-1 新越谷プラザ2F', 'near_st' => '南越谷駅', 'load_navi' => 'JR武蔵野線南越谷駅西口 徒歩2分', 'tel' => '048-988-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/saitama/minamikoshigaya', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '川口店', 'kana_name'=>'かわぐちてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00 ／最終受付時間23:00', 'close_day' => '', 'area_code' => 4301, 'address' => '埼玉県川口市栄町3-11-17 クレール川口プラザ2F', 'near_st' => '川口駅', 'load_navi' => 'JR京浜東北線 川口駅東口 徒歩7分', 'tel' => '048-258-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/saitama/kawaguchi', 'kodawari' => '女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '千葉店', 'kana_name'=>'ちばてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～24:00／平日最終受付時間23:00／週末最終受付時間23:30', 'close_day' => '年中無休', 'area_code' => 4401, 'address' => '千葉県千葉市中央区富士見2-16-4 三社プラザ3F', 'near_st' => '千葉中央駅', 'load_navi' => '京成千原線千葉中央駅東口　徒歩2分', 'tel' => '043-222-9699', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/chiba/chiba', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業／強力マシーンあり／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '柏東口店', 'kana_name'=>'かしわひがしぐちてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～24:00 ／最終受付時間23:00', 'close_day' => '', 'area_code' => 4402, 'address' => '千葉県柏市柏4-8-13 アサヒビル 3F', 'near_st' => '柏駅', 'load_navi' => 'JR柏駅東口2分', 'tel' => '0471-66-9698', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/chiba/kashiwahigashi', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業／強力マシーンあり／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> 'シーサイド日立店', 'kana_name'=>'しーさいどひたちてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～22:30／最終受付時間22:00', 'close_day' => '', 'area_code' => 4701, 'address' => '茨城県日立市幸町1-15-1 ショットビル4F', 'near_st' => '日立駅', 'load_navi' => '常磐線 日立駅前 徒歩3分', 'tel' => '0294-22-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/ibaraki/hitachi', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '水戸店', 'kana_name'=>'みとてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～24:00', 'close_day' => '年中無休', 'area_code' => 4701, 'address' => '茨城県水戸市南町3-3-43 小林ビル2F', 'near_st' => '水戸駅', 'load_navi' => '常磐線水戸駅北口 徒歩15分', 'tel' => '029-231-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/ibaraki/mito', 'kodawari' => '女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '岐阜店', 'kana_name'=>'ぎふてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～24:00 ／最終受付時間23:30', 'close_day' => '', 'area_code' => 6301, 'address' => '岐阜県岐阜市神田町7-13 ミキムラビル3F', 'near_st' => '名鉄岐阜駅、岐阜駅', 'load_navi' => '名鉄岐阜駅 徒歩4分', 'tel' => '058-262-0996', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/gifu/gifu', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '長岡店', 'kana_name'=>'ながおかてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00 ／23:30以降は電話予約制', 'close_day' => '', 'area_code' => 5101, 'address' => '新潟県長岡市城内町3-3-2 タカキュービル2F', 'near_st' => '長岡駅', 'load_navi' => '長岡駅西口 徒歩3分', 'tel' => '0258-32-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/niigata/nagaoka', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '新潟店', 'kana_name'=>'にいがたてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00 ／最終受付時間23:00', 'close_day' => '', 'area_code' => 5101, 'address' => '新潟県新潟市中央区万代1-1-32 プリオール万代4F', 'near_st' => '新潟駅', 'load_navi' => '新潟駅万代口 徒歩5分', 'tel' => '025-249-9697', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/niigata/niigata', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '上越店', 'kana_name'=>'じょうえつてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～23:00／最終受付時間22:30', 'close_day' => '毎週水曜日', 'area_code' => 5101, 'address' => '新潟県上越市大字富岡539-2 ショッピングセンターパティオ内2F', 'near_st' => 'なし', 'load_navi' => '国道18号沿い', 'tel' => '025-522-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/niigata/joetsu', 'kodawari' => '女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '心斎橋店', 'kana_name'=>'しんさいばしてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～26:00 ／24:30以降は電話予約制', 'close_day' => '', 'area_code' => 7102, 'address' => '大阪府大阪市中央区心斎橋筋1-2-23 東心斎橋ビル2F', 'near_st' => '心斎橋駅', 'load_navi' => '御堂筋線心斎橋駅 クリスタ長堀のエスカレーター上りすぐ', 'tel' => '06-6282-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/osaka/shinsaibashi', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>52,'name'=> '神戸三宮店', 'kana_name'=>'こうべさんのみやてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～25:00／最終受付時間24:00', 'close_day' => '', 'area_code' => 7301, 'address' => '兵庫県神戸市中央区下山手通1-3-12 ゼウスタウンビル3F', 'near_st' => '三宮駅', 'load_navi' => '生田ロードから東門街正面入り口すぐ、東急ハンズから徒歩1分', 'tel' => '078-333-9689', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://so-le.com/store/hyogo/kobesannomiya', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／初回割引あり／お得な回数券・プリペイドカードあり／ドリンクサービスあり／手ぶらＯＫ／深夜まで営業／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>53,'name'=> '池袋店', 'kana_name'=>'そるとんじゃぱん　いけぶくろてん', 'catch_msg'=>'池袋東口徒歩３分！日焼けサロン ソルトロンジャパン池袋は完全個室で「安心」ハイスペック日焼けマシンで「快適」にリフレッシュタイムを過ごして頂けます。','summary' => '池袋東口徒歩3分！日焼けサロン ソルトロンジャパン池袋は完全個室で「安心」ハイスペック日焼けマシンで「快適」にリフレッシュタイムを過ごして頂けます。初心者の方から、上級者の方までご利用頂け、特に上級者の方にはフェイスとベットタイプのセットでのご利用が、
人気となっています。初回の方のみのキャンペーンも実施中です。初めての方でもリラックスしてご安心できます様、
当スタッフが対応させて頂きます。また、コラーゲンマシンも完備しておりますのでお肌のアンチエイジングも体験頂けます。
日焼けサロン ソルトロンジャパン池袋へぜひご来店ください。
※完全予約制ではありませんが、予約の方優先となります※','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～24:00／ラストオーダー23:30', 'close_day' => '', 'area_code' => 4101, 'address' => '東京都豊島区東池袋1-39-2
アドワンビル　4F/7F
受付　4F', 'near_st' => '池袋駅', 'load_navi' => '池袋駅より徒歩3分', 'tel' => '03-5950-1332', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.soltron.jp/ikebukuro/', 'kodawari' => '駅近／深夜まで営業／学割あり／女性割引あり', 'customers' => '','min_price' => 1700 ),
array('company_id'=>53,'name'=> '目黒店', 'kana_name'=>'', 'catch_msg'=>'JR山手線 目黒駅からすぐの日焼けサロン ソルトロンジャパン目黒店です。','summary' => 'JR山手線　目黒駅からすぐの日焼けサロン　ソルトロンジャパン目黒店です。ビックリするほど広い個室が人気ＮＯ1の日サロです！目黒・恵比寿・五反田エリアで日焼けサロンをお探しならソルトロンジャパン目黒店へぜひお越しください。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～23:15／最終受付時間23:15', 'close_day' => '', 'area_code' => 4108, 'address' => '東京都品川区上大崎2－17－3北斗目黒ビル3Ｆ', 'near_st' => '目黒駅', 'load_navi' => '※JR目黒駅西口に出て目の前の道路を右方向に道なりに進んで一つ目の信号を超えて　10mくらいで看板が見えます！（モスバーガー隣のビル）', 'tel' => '03-3490-5099', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.soltron.jp/meguro/', 'kodawari' => '駅近／完全個室／', 'customers' => '','min_price' => 2000 ),
array('company_id'=>53,'name'=> '奈良店', 'kana_name'=>'そるとんじゃぱんならてん', 'catch_msg'=>'コラーゲンマシン、酸素カプセルあり','summary' => '奈良県奈良市にある日焼けサロン　ソルトロンジャパン奈良店の最新機種で「日焼け」をたっぷり満喫して下さい！当店スタッフが無理なくキレイに焼けるコツを伝授いたします。ソルトロンジャパン奈良店は各マシンルールにシャワー完備で安心・快適です！
また、コラーゲンマシンでアンチエイジングや酸素カプセル(OXYRIUM medical 1.5)によるレオロジー効果もご体験下さい。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～22:30／21:00以降予約制', 'close_day' => '※祝日を除く毎週水曜定休日', 'area_code' => 7401, 'address' => '奈良市下三条町 10-1 末廣ビル 2F', 'near_st' => '奈良駅', 'load_navi' => '奈良駅より徒歩5分', 'tel' => '0742-26-8899', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.soltron.jp/nara/', 'kodawari' => '駅近／コラーゲンマシーンあり／酸素カプセルあり／格安サロン', 'customers' => '','min_price' => 1400 ),
array('company_id'=>53,'name'=> '静岡店', 'kana_name'=>'そるとんじゃぱんしずおかてん', 'catch_msg'=>'□メンバーズカード再発行料：216円(TAX　IN)
□タンニングGEL別途(324円)
□月曜日・祝日　OPEN～CLOSEまでGEL無料
コラーゲンマシンあり','summary' => '静岡県丸子の日焼けサロン　ソルトロンジャパン静岡は豊富なマシンラインナップでお客様の肌質を問わず安心して利用できる日焼けサロンです！日焼けサロン　ソルトロンジャパン静岡でキレイな小麦色の肌に！静岡県丸子で日焼けするなら日焼けサロン　ソルトロンジャパン静岡へ！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～23:00／最終受付23:00', 'close_day' => '年中無休', 'area_code' => 6102, 'address' => '静岡県静岡市駿河区丸子3-1-1　1F', 'near_st' => '安倍川駅', 'load_navi' => '安倍川駅より徒歩20分', 'tel' => '0542-57-2266', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.soltron.jp/soltron-japan-shizuoka/', 'kodawari' => 'コラーゲンマシーンあり', 'customers' => '','min_price' => 3024 ),
array('company_id'=>54,'name'=> 'SPAGIO本厚木', 'kana_name'=>'すぱじおあつぎてん', 'catch_msg'=>'本厚木で日焼けサロンをお探しなら是非スパジオ本厚木へお越しください。
コラーゲンマシンあり','summary' => '日焼けサロン スパジオ本厚木はPOPで清潔感のある日焼けサロンです。またハイスペックマシンで日焼けできるのもスパジオ本厚木の魅力です。
マシンの種類も豊富に取り揃えてあり、初心者の方から上級者の方までご利用頂けます。また、コラーゲンマシンも完備しておりますので
お肌のアンチエイジングも体験頂けます。本厚木で日焼けサロンをお探しなら是非スパジオ本厚木へお越しください。
初めての方でもリラックスしてご安心できます様、当スタッフが対応させて頂きます。また初回の方のみのキャンペーンも実施中です。
※完全予約制ではありませんが、予約の方優先となります※','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～24:00／最終受付時間24:00', 'close_day' => '', 'area_code' => 4206, 'address' => '神奈川県厚木市中町2-4-2トキワヤ第3ビル 3F', 'near_st' => '本厚木駅', 'load_navi' => '一番街を入ってすぐ！
マクドナルドの隣のビルの3Fです。
本厚木駅より徒歩1分', 'tel' => '0462-96-0555', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.soltron.jp/atsugi/', 'kodawari' => '駅近／深夜まで営業／予約優先／強力マシーンあり／コラーゲンマシーンあり／学割あり／女性割引あり', 'customers' => '','min_price' => 1800 ),
array('company_id'=>55,'name'=> 'ＳＴＡＲ　ＢＥＡＣＨ', 'kana_name'=>'すたーびーち', 'catch_msg'=>'岐阜県可児市に日焼けサロンSTAR BEACH（スタービーチ）がオープンしました。ハイクラスマシンのDIAVLOを導入。','summary' => '2013年3月15日　岐阜県可児市に日焼けサロンSTAR BEACH（スタービーチ）がオープンしました。ハイクラスマシンのDIAVLOを導入。その他SUMMERやFACEマシンも完備。美濃加茂、多治見、土岐、瑞浪、恵那、中津など様々な地域のお客様にご利用頂いております。また、金額もリーズナブルに設定されておりますので、ぜひご来店下さい。皆様のお越しを心よりお待ちしております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '15:00～23:00', 'close_day' => '月曜日', 'area_code' => 6301, 'address' => '岐阜県可児市下恵土5552', 'near_st' => '可児駅', 'load_navi' => '可児駅より徒歩6分', 'tel' => '0574-60-5533', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://starbeach5533.web.fc2.com/', 'kodawari' => '強力マシーンあり／学割あり／女性割引あり', 'customers' => '','min_price' => 1700 ),
array('company_id'=>56,'name'=> 'Sun Bed Lounge Luxxx', 'kana_name'=>'さんべっとらうんじらっくす', 'catch_msg'=>'進化を超えた日焼けマシーン
ドイツUWE社LOTUS秋田初上陸！','summary' => '当店で使用しているマシーンは、ドイツuwe社のLOTUS。
世界トップクラスのタンニングマシンです。
マシン内では音楽を聴きながら、エアーコントローラーで快適にタンニングのお時間をお過ごしいただけます。
世界トップクラスの、極上日焼けを、あなたもぜひ一度、体感してみてはいかがですか？

当店のマシーンでは30分までのご利用で十分な日焼け肌を維持することが可能です。
短い時間で日焼けができるのは日焼けマシーンの性能と特種紫外線ランプの組み合わせで可能になります。
通常の日焼けマシーンに使われているランプは、一色管のブルーランプです。
当店で使用している、紫外線ランプはＵＷＥ社が独占特許を取得している、二色管LextraPower ランプです。
次世代型マシーンだけに搭載が許されたこのランプとマシーンのコンビネーションで、これまでにはない、スピードタンニングを実現させました。
お客様のお肌によって利用量（時間）を決めていただきます。



また顔の位置には３発の、ハロゲンランプが搭載されています。
こちらもＵＷＥ社独自開発のＸＴＴ加工により、従来のランプ６発分以上の威力を発揮します！！

マシンのランプ消耗品は、定期的に〔保障期間の３/２〕交換しているのでLUXXXは,いつでも焼ける日焼けサロンなのです。

もちろん安全面でも厳しい検査機関を、クリアしています。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '平日11:00～26:00／日祝11:00～23:00', 'close_day' => '年中無休', 'area_code' => 2201, 'address' => '秋田県秋田市大町三丁目2-1旧サンケンビル2F', 'near_st' => '秋田駅', 'load_navi' => '秋田駅から徒歩10分
スカイホテル様向かい', 'tel' => '018-867-1819', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://x103.peps.jp/luxxx0605', 'kodawari' => '深夜まで営業／学割あり', 'customers' => '','min_price' => null ),
array('company_id'=>57,'name'=> '安城店', 'kana_name'=>'さんおーしゃんあんじょうてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～25:00 ／最終受付時間 24:00', 'close_day' => '年中無休', 'area_code' => 6204, 'address' => '愛知県安城市日の出町4-17', 'near_st' => '南安城駅', 'load_navi' => '名鉄　南安城駅　徒歩3分', 'tel' => '0566-75-1196', 'machine_num' => '', 'parking' => '', 'site_url' => 'https://ja-jp.facebook.com/sunocean1196', 'kodawari' => '駅近／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>57,'name'=> '刈谷店', 'kana_name'=>'さんおーしゃんかりやてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～25:00 ／最終受付時間 24:00', 'close_day' => '年中無休', 'area_code' => 6204, 'address' => '刈谷市大正町6-103', 'near_st' => '名鉄刈谷駅', 'load_navi' => '名鉄刈谷駅・徒歩1分', 'tel' => '0566-25-4196', 'machine_num' => '', 'parking' => '', 'site_url' => 'https://ja-jp.facebook.com/sunocean1196', 'kodawari' => '駅近／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>58,'name'=> 'Sun Style', 'kana_name'=>'さんすたいる', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:00～23:00', 'close_day' => '', 'area_code' => 6202, 'address' => '愛知県名古屋市守山区白山３丁目４０１', 'near_st' => '藤が丘駅', 'load_navi' => '藤が丘(愛知県)駅2出口から徒歩約23分', 'tel' => '052-737-9609', 'machine_num' => '', 'parking' => 'あり', 'site_url' => '', 'kodawari' => '学割あり／駅近／駐車場あり', 'customers' => '','min_price' => null ),
array('company_id'=>59,'name'=> '岡崎店', 'kana_name'=>'さんぷれいすおかざきてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 6204, 'address' => '愛知県 岡崎市 橋目町字竹之内58－1', 'near_st' => '', 'load_navi' => '', 'tel' => '0564-73-9672', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>60,'name'=> 'SUN・BRONZE', 'kana_name'=>'さんぶろんず', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 9401, 'address' => '高知県高知市潮新町2-1-25', 'near_st' => '', 'load_navi' => '', 'tel' => '088-833-9696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>61,'name'=> '大阪梅田店', 'kana_name'=>'さんくろぐろおおさかうめだてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 7101, 'address' => '大阪府大阪市北区神山町８−２', 'near_st' => '梅田駅', 'load_navi' => '梅田駅より徒歩4分', 'tel' => '06-6364-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sun9696.com/m/cost/', 'kodawari' => '駅近／マシーン種類豊富／朝割引あり／格安サロン', 'customers' => '','min_price' => 1400 ),
array('company_id'=>62,'name'=> 'SUNBO泉本店', 'kana_name'=>'さんぼいずみほんてん', 'catch_msg'=>'仙台の雰囲気のいい日焼けサロン、大人の為の日焼けサロン。','summary' => '仙台の雰囲気のいい日焼けサロン、大人の為の日焼けサロン。

この度、トータルイマージョンでお馴染みのカリフォルニアタンからリリースされているタンニング用ジェル「REGE GEL」の取り扱いを始めました！
より美しく濃い日焼けを目指したい！または既に日焼けした肌を更に濃くしたい方にオススメです！お肌に潤いを与えながら、更にディープでキレイなブロンズ肌を実現いたします。　販売価格￥2700

★SUNBOは安心のオールコミコミプライス！
表示価格には、タンニング、専用ジェル、シャワー、バスタオル、消費税が含まれております。

お支払いは現金、またはクレジットカードでのご利用が可能です。

当店は予約制となっております。ご来店の際は事前にお電話にてご予約をお願いいたします。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～22:00', 'close_day' => '', 'area_code' => 2501, 'address' => '仙台市泉区将監5-2-1-2F', 'near_st' => '', 'load_navi' => '泉インターよりスグ', 'tel' => '022-218-0498', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://sunbo.jp/', 'kodawari' => '手ぶらＯＫ／完全予約制／マシーン種類豊富／大人向けサロン／格安サロン', 'customers' => '','min_price' => 1500 ),
array('company_id'=>62,'name'=> 'SUNBO古川店', 'kana_name'=>'さんぼふるかわてん', 'catch_msg'=>'仙台の雰囲気のいい日焼けサロン、大人の為の日焼けサロン。','summary' => '仙台の雰囲気のいい日焼けサロン、大人の為の日焼けサロン。

この度、トータルイマージョンでお馴染みのカリフォルニアタンからリリースされているタンニング用ジェル「REGE GEL」の取り扱いを始めました！
より美しく濃い日焼けを目指したい！または既に日焼けした肌を更に濃くしたい方にオススメです！お肌に潤いを与えながら、更にディープでキレイなブロンズ肌を実現いたします。　販売価格￥2700

★SUNBOは安心のオールコミコミプライス！
表示価格には、タンニング、専用ジェル、シャワー、バスタオル、消費税が含まれております。

お支払いは現金、またはクレジットカードでのご利用が可能です。

当店は予約制となっております。ご来店の際は事前にお電話にてご予約をお願いいたします。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～21:00', 'close_day' => '', 'area_code' => 2502, 'address' => '大崎市古川旭4-3-16-2F', 'near_st' => '', 'load_navi' => '', 'tel' => '022-947-4125', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://sunbo.jp/', 'kodawari' => '手ぶらＯＫ／完全予約制／大人向けサロン／駐車場あり／格安サロン', 'customers' => '','min_price' => 1500 ),
array('company_id'=>63,'name'=> 'SunnySalon Aobadai', 'kana_name'=>'さにーさろんあおばだい', 'catch_msg'=>'プライベート日焼けサロン青葉台駅徒歩5分','summary' => 'プライベート・タン＆シャワーシステムで、タンニングルームからシャワールームへ服を脱いだまま移動できるプライバシーを重視した最新の個室システムを導入、さらに広いシャワールームは高級ガラスシャワーユニット、別にパウダールームも用意されています。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～24:00／最終受付時間23:30', 'close_day' => 'なし（年中無休）', 'area_code' => 4202, 'address' => '神奈川県横浜市青葉区青葉台2-11-24　セカンドエイトビルB1', 'near_st' => '青葉台駅', 'load_navi' => '青葉台駅より徒歩5分', 'tel' => '045-983-9669', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunnysalon.jp/', 'kodawari' => '完全個室／強力マシーンあり／駅近／深夜まで営業', 'customers' => '','min_price' => 3000 ),
array('company_id'=>64,'name'=> 'SUNRIVER', 'kana_name'=>'さんりばー', 'catch_msg'=>'諏訪の日焼けサロンはサンリバー','summary' => '当店は通常の日焼けサロンではあまり見られない焼き放題等のお得なプランがあります。

女性のお客様と20歳未満のお客様は学割料金の適用でお安くタンニングできます。 ','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～24:00／最終受付時間22:00', 'close_day' => '11月～4月は第1、第3日曜日は定休日とさせていただきます。', 'area_code' => 5201, 'address' => '長野県諏訪市沖田町2-1
沖田Sビル1F', 'near_st' => '', 'load_navi' => '諏訪I.Cから車で1分', 'tel' => '0266-53-1118', 'machine_num' => '4', 'parking' => 'あり', 'site_url' => 'http://sunriver.daa.jp/pc/src/index.html#LocalLink3', 'kodawari' => '学割あり／女性割引あり／初回割引あり／手ぶらＯＫ／焼き放題メニューあり／駐車場あり／深夜まで営業／格安サロン', 'customers' => '','min_price' => 1200 ),
array('company_id'=>65,'name'=> '草津店', 'kana_name'=>'さんびじょんくさつてん', 'catch_msg'=>'店舗は白を基調に、清潔感あふれる店内になっております。
各マシンブースは鍵付きの完全個室となっており、また各ブース内にシャワールームを完備しております。
女性のお客様でも安心してご利用ができます。','summary' => '日焼けサロンが初めての方へ
当店店長は、日焼けサロン全般を研究つくし、マシンの特性からお肌のメンテナンスに関しまして豊富な知識・経験を持っております。
お客様の目的に応じた日焼けメニューを当店店長がしっかりお聞きし無理のないメニューを構築し、提供いたします。

サンビジョンの特徴
店舗は白を基調に、清潔感あふれる店内になっております。
各マシンブースは鍵付きの完全個室となっており、また各ブース内にシャワールームを完備しております。
女性のお客様でも安心してご利用ができます。

日焼けサロンサンビジョンとは
当店の店長は、自ら全国の日焼けサロンに足を運び、それぞれのお店の良いところを吸収しました。そしてこの滋賀県彦根市と草津市に「日焼けサロン SUNVISION」を開業いたしました。日焼けサロンを求めておられるお客様にとって、この「日焼けサロン SUNVISION」が数ある日焼けサロンの中で、一番のサロンとなることをモットーに営業させて頂きます。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '13:00～22:00', 'close_day' => '', 'area_code' => 7501, 'address' => '滋賀県草津市矢橋町105-1　1Ｆ', 'near_st' => '南草津駅', 'load_navi' => 'JR南草津駅より徒歩16分
県道18号線西方向の右側にあります。
近くにはや草津総合病院やフレンドマート南草津店があり、お越しの際の前後に診察・お買い物ができます。', 'tel' => '077-566-0932', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://www.sunvision.biz/', 'kodawari' => '駐車場あり／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>65,'name'=> '彦根店', 'kana_name'=>'さんびじょんひこねてん', 'catch_msg'=>'店舗は白を基調に、清潔感あふれる店内になっております。
各マシンブースは鍵付きの完全個室となっており、また各ブース内にシャワールームを完備しております。
女性のお客様でも安心してご利用ができます。','summary' => '日焼けサロンが初めての方へ
当店店長は、日焼けサロン全般を研究つくし、マシンの特性からお肌のメンテナンスに関しまして豊富な知識・経験を持っております。
お客様の目的に応じた日焼けメニューを当店店長がしっかりお聞きし無理のないメニューを構築し、提供いたします。

サンビジョンの特徴
店舗は白を基調に、清潔感あふれる店内になっております。
各マシンブースは鍵付きの完全個室となっており、また各ブース内にシャワールームを完備しております。
女性のお客様でも安心してご利用ができます。

日焼けサロンサンビジョンとは
当店の店長は、自ら全国の日焼けサロンに足を運び、それぞれのお店の良いところを吸収しました。そしてこの滋賀県彦根市と草津市に「日焼けサロン SUNVISION」を開業いたしました。日焼けサロンを求めておられるお客様にとって、この「日焼けサロン SUNVISION」が数ある日焼けサロンの中で、一番のサロンとなることをモットーに営業させて頂きます。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '13:00～22:00', 'close_day' => '', 'area_code' => 7501, 'address' => '滋賀県彦根市大薮町13-6 エンゼルプラザ 1Ｆ', 'near_st' => '', 'load_navi' => '彦根・ベルロードに面した位置にあります。
近くにはパリヤや平和堂など大型スーパーがあり、お越しの際の前後にお買い物も済ますことができます。', 'tel' => '0749-30-3345', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunvision.biz/', 'kodawari' => '完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>66,'name'=> 'Tanning room The Beach', 'kana_name'=>'たんにんぐるーむざびーち', 'catch_msg'=>'アットホームな空間で、地域密着型の日焼けサロンを目指しております。','summary' => '愛知県名古屋市天白区野並地区にある日焼けサロンです。
アットホームな空間で、地域密着型の日焼けサロンを目指しております。料金は激安で、各種割引やキャンペーンによりさらにお安く日焼けを楽しめます。
お客様に気持ち良く日焼けを楽しんでいただくために、清掃に力を入れて店内を清潔に保っております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '平日14：00～26：00／土日祝12：00～26：00／最終受付時間25：00', 'close_day' => '10月〜３月までは火曜定休、元旦、ライト交換日', 'area_code' => 6202, 'address' => '名古屋市天白区福池2丁目393番地', 'near_st' => '野並駅', 'load_navi' => '野並駅より徒歩11分', 'tel' => '052-875-9302', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.beach89.com/', 'kodawari' => '学割あり／深夜まで営業／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => 2000 ),
array('company_id'=>67,'name'=> 'TANNING SALON HOT STAFF', 'kana_name'=>'たんにんぐさろんほっとすたっふ', 'catch_msg'=>'日焼けサロン・タンニングサロンホットスタッフでは、初めてのお客様から常連のお客様にも安心・安全に健康な体作りをご提供できるよう日々努めています。','summary' => '日焼けサロン・タンニングサロンホットスタッフでは、初めてのお客様から常連のお客様にも安心・安全に健康な体作りをご提供できるよう日々努めています。また、活動ホルモンの分泌を高めて血行を促進して、細胞の活力も高めてくれます。体と脳の両方の疲れをほぐして、あなたも、ストレスに負けない体作りをしてみませんか？

はじめての方でもスタッフが親切丁寧にご指導します。安心してご来店ください。また、わからないことがあればお電話でのご説明もさせていただいてます。お気軽にお問合せください。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 10801, 'address' => '沖縄県　那覇市　泊　1－8－3', 'near_st' => '牧志駅、美栄橋駅', 'load_navi' => '牧志駅、美栄橋駅より徒歩7分ほど
沖縄県 那覇市 泊・崇元寺通り(又吉通り)、ナイスチケットとなり！', 'tel' => '(098)863-1006', 'machine_num' => '', 'parking' => 'あり6台', 'site_url' => 'http://www.tanning-salon.asia/top.html', 'kodawari' => '駐車場あり／完全個室／ドリンクサービスあり／マシーン種類豊富', 'customers' => '','min_price' => 1700 ),
array('company_id'=>68,'name'=> 'TANNING STUDIO SUNSHOWER', 'kana_name'=>'たんにんぐすたじおさんしゃわー', 'catch_msg'=>'日サロが好き、太陽が好き、海が好き！そんな皆さんのための日焼けサロンです。','summary' => '1ヶ月焼き放題のフリーパスカードや、各種サービスも充実。健康ニーズも高い日焼けマシンで、健康的なボディを目指してみませんか。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～22:00／最終受付時間21:00', 'close_day' => '不定休
・店舗に直接お問合せください。', 'area_code' => 7104, 'address' => '大阪府寝屋川市香里南之町9-1　川口ビル3Ｆ', 'near_st' => '香里園駅', 'load_navi' => '京阪本線「香里園駅」より徒歩約3分', 'tel' => '072-834-2122', 'machine_num' => '', 'parking' => '駐車場なし（近隣には有料のパーキングがあります）', 'site_url' => '', 'kodawari' => '駅近／焼き放題メニューあり', 'customers' => '',
'min_price' => null ),
array('company_id'=>69,'name'=> 'TANNING UV.ZONE', 'kana_name'=>'たんにんぐゆーぶいぞーん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '',
'staff_img' => '',
'open_time' => '11：00～22：00／最終受付時間21：00',
'close_day' => '月曜日/祝日の場合火休', 'area_code' => 4109,
'address' => '東京都千代田区神田小川町3丁目20日比ﾋﾞﾙ3F', 'near_st' => '御茶ノ水駅、水道橋駅、神保町駅', 'load_navi' => '●JR線
御茶ノ水駅・御茶ノ水橋出口徒歩5分
●半蔵門・三田線
神保町A5出口徒歩3分
●中央・総武線・三田線
水道橋駅東口徒歩7分', 'tel' => '03-3292-8296', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://celebrity9696.mobi/', 'kodawari' => '完全予約制／駅近／お得な回数券・プリペイドカードあり／女性割引あり／初回割引あり／', 'customers' => '','min_price' => 1800 ),
array('company_id'=>70,'name'=> 'THE SUN TIMES札幌', 'kana_name'=>'さんたいむさっぽろ', 'catch_msg'=>'スタッフが丁寧にアドバイスさせていただきます。
初めての方もお気軽にお越しください。','summary' => '初めての方もスタッフが丁寧にアドバイスさせていただきますので　
お気軽に日焼けサロン「サンタイム札幌」へお越しください。
お待ちしております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '24時間営業', 'close_day' => '', 'area_code' => 1001, 'address' => '北海道札幌市中央区南７条西３丁目千両ビル５Ｆ', 'near_st' => '中島公園駅、すすきの駅', 'load_navi' => '地下鉄　中島公園駅　徒歩３分
地下鉄　すすきの駅　徒歩４分', 'tel' => '０１１－５３１－１７７７', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.suntimes.jp/', 'kodawari' => 'ドリンクサービス／完全個室／24時間営業／手ぶらＯＫ／学割あり／女性割引あり／駅近／格安サロン', 'customers' => '','min_price' => 1500 ),
array('company_id'=>71,'name'=> 'TITAN　GYM', 'kana_name'=>'たいたんじむ', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '月～金曜日8:00～22:00／土曜・祝日8:00～18:00', 'close_day' => '日曜日', 'area_code' => 6102, 'address' => '藤枝市田沼3-23-30', 'near_st' => '', 'load_navi' => '', 'tel' => '054-636-1208', 'machine_num' => '', 'parking' => 'あり19台', 'site_url' => '', 'kodawari' => '駐車場あり／トレーニングジム併設', 'customers' => '','min_price' => null ),
array('company_id'=>72,'name'=> 'ＵＶ.ＺＯＮＥ', 'kana_name'=>'ゆうぶいぞーん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～29:00／最終受付時間28:00', 'close_day' => '', 'area_code' => 7301, 'address' => '神戸市中央区下山手通２-１-１４アークコーストビル６階', 'near_st' => '三宮駅', 'load_navi' => '三宮駅より徒歩1分', 'tel' => '078-331-8883', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://2.mbsp.jp/UVZONE/', 'kodawari' => '朝まで営業／駅近', 'customers' => '','min_price' => null ),
array('company_id'=>73,'name'=> '新潟店', 'kana_name'=>'うヴぇじゃぱんにいがたてん', 'catch_msg'=>'日焼けサロン UWE JAPAN
落ち着いた雰囲気でとってもキレイなお店です。マシーンの種類も豊富であなたにあったマシーンがきっと見つかるハズ！フリードリンクでくつろげるスペースもあります。カワイイSTAFFがお待ちしてます♪','summary' => '学割あり
フリードリンクあり
30分2,000～で日曜日はポイント10倍♪次回タダで焼けちゃいます♪　平日は2人以上のご利用で全マシーン30分2000!!　学生は平日1,000です☆（18:00迄にご来店下さい）','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00 ～ 24:00', 'close_day' => 'なし', 'area_code' => 5101, 'address' => '新潟県新潟市中央区米山1丁目7-1 シーアンドディービル3F', 'near_st' => '新潟駅', 'load_navi' => '新潟駅より徒歩2分', 'tel' => '025-247-9696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近／深夜まで営業／学割あり／ドリンクサービスあり／紹介割引あり', 'customers' => '','min_price' => null ),
array('company_id'=>74,'name'=> 'アマゾネス', 'kana_name'=>'あまぞねす', 'catch_msg'=>'当店は、日焼けマシーン、シャワー、カギ付き完全個室です。リラックスして日焼けが楽しめます。','summary' => '当店は、日焼けマシーン、シャワー、カギ付き完全個室です。リラックスして日焼けが楽しめます。
尚、パウダールームも完備していますので日焼けの後も安心です。
日焼けマシーンはソルトロンブランドの他店には無い最新・最強マシーンを取り揃えております。
是非、一度ご来店いただき非日常の世界を体感して下さい。

★初めての方にもやさしく、少しの時間でお手軽に★

当店は、日焼けサロンとしては珍しい15分からの安心設定になっております。
また、貯めてお得なポイントカードを発行しています。
お客様第一、業界トップクラスのおもてなしでお客様のお越しをお待ちしております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '※営業時間についてはお電話にて問い合わせ下さい。ご予約は電話にて承ります。', 'close_day' => '', 'area_code' => 4204, 'address' => '横須賀市久里浜4-15-11 望月ビル4F', 'near_st' => '久里浜駅、京急久里浜駅', 'load_navi' => '・JR横須賀線久里浜駅下車、徒歩10分。
　 右へ進み、突き当たり左へ。

・京浜急行 京急久里浜駅下車、徒歩5分。
　東口より右へ進み、一つ目の信号左折。', 'tel' => '046-837-7010', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.amazoneskurihama.com/', 'kodawari' => '駅近／完全個室／格安サロン', 'customers' => '','min_price' => 1500 ),
array('company_id'=>75,'name'=> 'あらまあｄｅ西船', 'kana_name'=>'あらまあでにしふな', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4403, 'address' => '千葉県船橋市西船4丁目19−3', 'near_st' => '西船橋駅', 'load_navi' => '西船橋駅より徒歩2分', 'tel' => '047-433-5775', 'machine_num' => '', 'parking' => '', 'site_url' => 'https://www.facebook.com/pages/%E6%97%A5%E7%84%BC%E3%81%91%E3%82%B5%E3%83%AD%E3%83%B3-%E3%81%82%E3%82%89%E3%81%BE%E3%81%82de%E8%A5%BF%E8%88%B9/149412735093341', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>76,'name'=> 'あらまあｄｅ千葉', 'kana_name'=>'あらまあでちば', 'catch_msg'=>'完全個室','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4401, 'address' => '千葉県千葉市中央区新千葉2丁目1−1', 'near_st' => '千葉駅', 'load_navi' => '千葉駅西口出口から徒歩約2分', 'tel' => '043-243-7127', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>77,'name'=> 'アロハビーチ　国分寺', 'kana_name'=>'あろはびーち', 'catch_msg'=>'国分寺で日焼けサロンといえばアロハビーチ！','summary' => '日焼けサロン アロハビーチ 国分寺店は最強日焼けマシンから肌の弱い方も安心して利用できる日焼けマシンまで充実のラインナップでお客様をお待ちしております！国分寺で日焼けサロンをお探しなら日焼けサロン アロハビーチ 国分寺店へぜひお越しください！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～24:00', 'close_day' => '年中無休', 'area_code' => 4112, 'address' => '東京都国分寺市南町3-18-17サイトウビル4F', 'near_st' => '国分寺駅', 'load_navi' => '国分寺駅より徒歩1分', 'tel' => '042-328-9614', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://d.katy.jp/store/aloha-beach-kokubunji', 'kodawari' => '駅近／深夜まで営業／強力マシーンあり', 'customers' => '','min_price' => null ),
array('company_id'=>78,'name'=> 'イリオス Personal 上野店', 'kana_name'=>'うえのてん', 'catch_msg'=>'完全プライベート空間を実現した日焼けサロンです。','summary' => '最新型［マトリックス］L22-ER ＆ V56 (タテ型)
&［マックスター］L43-100-DEC & HF8-DEC (顔焼き)新登場!!
TOTAL RELAXATION…［個室サウナ］［最高級マッサージチェア※ご自由にどうぞ］も完備!!

日焼けサロン イリオス パーソナル 上野店　　■■■クレジットカードご利用可能■■■　東京日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆完全個室
個室更衣室⇔タンニング(日焼け)ルームが直結しており、マシンも遠隔で作動します。
他のお客様にはもちろん、店舗スタッフにも一切会わずにご利用いただける、
完全プライベート空間を実現した日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '朝10:00～深夜0:00／木・金・土24時間営業／日・祝日10:00～23:00', 'close_day' => '', 'area_code' => 4109, 'address' => '台東区上野2-13-2 パークサイドビル5・6F', 'near_st' => '上野駅、京成上野駅、上野御徒町駅、上野広小路駅、御徒町駅', 'load_navi' => '上野駅より徒歩3分', 'tel' => '03-3833-9693', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/38', 'kodawari' => '駅近／24時間営業／完全個室／初回割引あり／手ぶらＯＫ／紹介割引あり／クレジットカード利用可能／個室サウナあり／ミスト付シャワーあり／ドリンクサービスあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 2240 ),
array('company_id'=>78,'name'=> 'イリオス Personal 吉祥寺店', 'kana_name'=>'きちじょうじてん', 'catch_msg'=>'完全プライベート空間を実現した日焼けサロンです。','summary' => '最新型［マトリックス］L33 extreme［エクストリーム］新登場!!
最新顔焼き［マックスター］HF8-ER (マッサージ機能付き) 新登場!!
100％ Natural!! 歯のホワイトニング新登場!! 初回お試し¥3,000
TOTAL RELAXATION…　オススメ至極のフルコース↓
▶［個室サウナ］で身体を温めて▶［matrix］L33 日焼けでさらに汗をかき
▶［ビール］を飲みながら［最高級マッサージチェア※ご自由にどうぞ］で全身ほぐし
“心身のリフレッシュ”にいかがでしょうか？

日焼けサロン イリオス パーソナル 吉祥寺店　　■■■クレジットカードご利用可能■■■　東京日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆完全個室
個室更衣室⇔タンニング(日焼け)ルームが直結しており、マシンも遠隔で作動します。
他のお客様にはもちろん、店舗スタッフにも一切会わずにご利用いただける、
完全プライベート空間を実現した日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:00～26:00　／金・土24時間営業', 'close_day' => '', 'area_code' => 4114, 'address' => '武蔵野市吉祥寺本町1-10-4 古城会館ビル6Ｆ', 'near_st' => '吉祥寺駅', 'load_navi' => '吉祥寺駅より徒歩4分', 'tel' => '0422-28-7796', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/52', 'kodawari' => '駅近／24時間営業／完全個室／初回割引あり／手ぶらＯＫ／紹介割引あり／クレジットカード利用可能／個室サウナあり／ミスト付シャワーあり／ドリンクサービスあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 2240 ),
array('company_id'=>78,'name'=> 'ブラッキー Personal 渋谷店', 'kana_name'=>'しぶやてん', 'catch_msg'=>'店内大改装で、RENEWAL OPEN!!','summary' => '店内大改装で、RENEWAL OPEN!!
最新型［マトリックス］L33 extreme［エクストリーム］新登場!!
最新顔焼き［マックスター］HF8-ER (マッサージ機能付き) 新登場!!

日焼けサロン ブラッキー パーソナル 渋谷店　　■■■クレジットカードご利用可能■■■　渋谷日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆完全個室
個室更衣室⇔タンニング(日焼け)ルームが直結しており、マシンも遠隔で作動します。
他のお客様にはもちろん、店舗スタッフにも一切会わずにご利用いただける、
完全プライベート空間を実現した日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '24時間営業／日～24:00／月9:00～', 'close_day' => '', 'area_code' => 4105, 'address' => '渋谷区宇田川町13-8 ちとせ会館4Ｆ', 'near_st' => '渋谷駅', 'load_navi' => '渋谷駅より徒歩5分', 'tel' => '03-3770-0196', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/57', 'kodawari' => '駅近／24時間営業／完全個室／初回割引あり／手ぶらＯＫ／紹介割引あり／クレジットカード利用可能／ミスト付シャワーあり／ドリンクサービスあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 2240 ),
array('company_id'=>78,'name'=> 'ブラッキー Personal 池袋店', 'kana_name'=>'いけぶくろてん', 'catch_msg'=>'完全プライベート空間を実現した日焼けサロンです。','summary' => '最新型［マトリックス］L33 extreme［エクストリーム］国内唯一“2台”完備!!
最新顔焼き［マックスター］HF8-ER (マッサージ機能付き) 新登場!!
NHK「ドキュメント72時間」に取材いただきました。「日焼けサロン 小麦色の理由」
日焼けの前に…独り占めO.K!!［個室サウナ］新登場!! ※もちろん［個室サウナ］のみのご利用も可能!!

日焼けサロン ブラッキー パーソナル 池袋店　　■■■クレジットカードご利用可能■■■　池袋日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆完全個室
個室更衣室⇔タンニング(日焼け)ルームが直結しており、マシンも遠隔で作動します。
他のお客様にはもちろん、店舗スタッフにも一切会わずにご利用いただける、
完全プライベート空間を実現した日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '24時間営業／日～24:00／月9:00～', 'close_day' => '', 'area_code' => 4101, 'address' => '豊島区東池袋1-22-5 サンケエビル3Ｆ', 'near_st' => '池袋駅', 'load_navi' => '池袋駅より徒歩5分', 'tel' => '03-5396-0396', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/130', 'kodawari' => '駅近／24時間営業／完全個室／初回割引あり／手ぶらＯＫ／紹介割引あり／クレジットカード利用可能／個室サウナあり／ミスト付シャワーあり／ドリンクサービスあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 2240 ),
array('company_id'=>78,'name'=> 'イリオス 町田店', 'kana_name'=>'まちだてん', 'catch_msg'=>'初心者からヘヴィユーザーまで対応できる、幅広いマシンバリエーションを取り揃えております。','summary' => '［最高級マッサージチェア※ご自由にどうぞ］新登場!!

日焼けサロン イリオス 町田店　　■■■クレジットカードご利用可能■■■　東京日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆個室更衣室あり《増設済み》
通常の更衣室（男女別）の他に、個室更衣室も多数(7室)完備しております。初心者からヘヴィユーザーまで対応できる、幅広いマシンバリエーションを取り揃えております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:00～26:00／金・土曜日9:00〜27:00', 'close_day' => '', 'area_code' => 4113, 'address' => '町田市原町田6-20-13 ヤマダイビル5・6F', 'near_st' => '町田駅', 'load_navi' => '町田駅より徒歩1分', 'tel' => '042-722-9096', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/134', 'kodawari' => '駅近／深夜まで営業／初回割引あり／手ぶらＯＫ／紹介割引あり／クレジットカード利用可能／ドリンクサービスあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 1940 ),
array('company_id'=>78,'name'=> 'イリオス 新宿歌舞伎町店', 'kana_name'=>'かぶきちょうてん', 'catch_msg'=>'店内改装で、RENEWAL OPEN!!','summary' => '店内改装で、RENEWAL OPEN!!

日焼けサロン イリオス 新宿歌舞伎町店　東京日サロ

◆全更衣室 個室
タンニング（日焼け）ルームが個室なのはもちろん、全ての更衣室が個室で、
他人に気兼ねなくご利用いただける、プライベート重視の日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '24時間営業', 'close_day' => '', 'area_code' => 4103, 'address' => '新宿区歌舞伎町1-6-7 三径ビル38 8F', 'near_st' => '新宿駅、西武新宿駅、新宿三丁目駅、新宿西口駅、東新宿駅', 'load_navi' => '新宿駅より徒歩4分', 'tel' => '03-5155-9396', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/138', 'kodawari' => '駅近／24時間営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 1940 ),
array('company_id'=>78,'name'=> 'イリオス 錦糸町店', 'kana_name'=>'きんちょうてん', 'catch_msg'=>'プライベート重視 大人の為の日焼けサロンです。','summary' => '最新型［マトリックス］L58-DEC 国内初登場!!
最新型［マトリックス］L33 extreme［エクストリーム］新登場!!
最新顔焼き［マックスター］HF8-DEC(マッサージ機能付きインバーター搭載モデル)新登場!!

日焼けサロン イリオス 錦糸町店　　■■■クレジットカードご利用可能■■■　東京日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆個室更衣室あり《増設済み》
タンニング(日焼け)ルームが個室なのはもちろん、個室更衣室を大増設!!
ワンランク上の個室更衣室【VIP ROOM】(※ご予約可)も新たに完備した、
プライベート重視 大人の為の日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～30:00　／金・土24時間営業　／日10:00～23:00', 'close_day' => '', 'area_code' => 4109, 'address' => '墨田区錦糸3-3-9 イーストビル錦糸町6F', 'near_st' => '錦糸町駅', 'load_navi' => '錦糸町駅より徒歩1分', 'tel' => '03-5637-5596', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/140', 'kodawari' => '駅近／朝まで営業／初回割引あり／手ぶらＯＫ／紹介割引あり／クレジットカード利用可能／ドリンクサービスあり／大人向けサロン／ミスト付シャワーあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 1940 ),
array('company_id'=>78,'name'=> 'イリオス 王子店', 'kana_name'=>'おうじてん', 'catch_msg'=>'他人に気兼ねなくご利用いただける、プライベート重視の日焼けサロンです。','summary' => '◆全更衣室 個室
タンニング（日焼け）ルームが個室なのはもちろん、全ての更衣室が個室で、
他人に気兼ねなくご利用いただける、プライベート重視の日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00／日・祝日10:00～23:00', 'close_day' => '火曜日', 'area_code' => 4102, 'address' => '北区王子1-2-3 スギモトビルB1F', 'near_st' => '王子駅', 'load_navi' => '王子駅より徒歩1分', 'tel' => '03-3949-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/143', 'kodawari' => '駅近／深夜まで営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 1940 ),
array('company_id'=>78,'name'=> 'ブラッキー 新小岩店', 'kana_name'=>'しんこいわてん', 'catch_msg'=>'店内改装＆マシン入替で、RENEWAL OPEN!!','summary' => '店内改装＆マシン入替で、RENEWAL OPEN!!
最新［マックスター］L43-100-DEC
＆［マックスター］L43-80 ×2台新登場!!

日焼けサロン ブラッキー 新小岩店　■■■6月上旬からクレジットカードご利用可能※予定■■■ 新小岩 日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆全更衣室 個室
タンニング（日焼け）ルームが個室なのはもちろん、全ての更衣室が個室で、
他人に気兼ねなくご利用いただける、プライベート重視の日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00', 'close_day' => '', 'area_code' => 4110, 'address' => '葛飾区新小岩1-46-3 東栄ビル6F', 'near_st' => '新小岩駅', 'load_navi' => '新小岩駅より徒歩0分', 'tel' => '03-3656-5096', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/145', 'kodawari' => '駅近／深夜まで営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／ミスト付シャワーあり／クレジットカード利用可能／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 1940 ),
array('company_id'=>78,'name'=> 'ブラッキー 蒲田店', 'kana_name'=>'かまたてん', 'catch_msg'=>'初心者からヘヴィユーザーまで対応できる、幅広いマシンバリエーションを取り揃えております。','summary' => '［マックスター］L43-80-ER ×2台 新登場!!

日焼けサロン ブラッキー 蒲田店　　■■■クレジットカードご利用可能■■■　東京日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆個室更衣室あり
通常の更衣室（男女別）の他に、個室更衣室も完備しております。初心者からヘヴィユーザーまで対応できる、幅広いマシンバリエーションを取り揃えております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:00～26:00／金・土24時間営業／日9:00～24:00', 'close_day' => '', 'area_code' => 4108, 'address' => '大田区西蒲田7-48-3 大越ビル2F', 'near_st' => '蒲田駅、京急蒲田駅', 'load_navi' => '蒲田駅より徒歩3分', 'tel' => '03-5714-5596', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/147', 'kodawari' => '駅近／24時間営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／クレジットカード利用可能／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 1940 ),
array('company_id'=>78,'name'=> 'ブラッキー 立川店', 'kana_name'=>'たちかわてん', 'catch_msg'=>'他人に気兼ねなくご利用いただける、プライベート重視の日焼けサロンです。','summary' => '最新型［マトリックス］L33 extreme［エクストリーム］新登場!!
店内大改装で、RENEWAL OPEN!!
［最高級マッサージチェア※ご自由にどうぞ］新登場!!

日焼けサロン ブラッキー 立川店　　■■■クレジットカードご利用可能■■■　東京日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆全更衣室 個室
タンニング（日焼け）ルームが個室なのはもちろん、全ての更衣室が個室で、
他人に気兼ねなくご利用いただける、プライベート重視の日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:00～26:00／金・土24時間営業', 'close_day' => '', 'area_code' => 4112, 'address' => '立川市曙町2-10-10 五光曙ビル3F', 'near_st' => '立川駅、立川北駅', 'load_navi' => '立川駅より徒歩4分', 'tel' => '042-521-7796', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/150', 'kodawari' => '駅近／24時間営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／クレジットカード利用可能／ミスト付シャワーあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 1940 ),
array('company_id'=>78,'name'=> 'ブラッキー 八王子店', 'kana_name'=>'はちおうじてん', 'catch_msg'=>'初心者からヘヴィユーザーまで対応できる、幅広いマシンバリエーションを取り揃えております。','summary' => '［マックスター］L43-80 ×2台 新登場!!
RENEWAL OPEN!! 【個室更衣室】を大増設!!

日焼けサロン ブラッキー 八王子店　　■■■クレジットカードご利用可能■■■　東京日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆個室更衣室あり《増設済み》
個室更衣室を増設いたしました。他人に気兼ねなくご利用いただけます。（※混雑時、一部メンバーを除く）
初心者からヘヴィユーザーまで対応できる、幅広いマシンバリエーションを取り揃えております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:00～26:00／金24時間営業', 'close_day' => '', 'area_code' => 4112, 'address' => '八王子市旭町6-12 旭星ビル3F', 'near_st' => '八王子駅、京王八王子駅', 'load_navi' => '八王子駅より徒歩1分', 'tel' => '042-620-3696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/152', 'kodawari' => '駅近／24時間営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／クレジットカード利用可能／ミスト付シャワーあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 1940 ),
array('company_id'=>78,'name'=> 'イリオス Personal 柏店', 'kana_name'=>'かしわてん', 'catch_msg'=>'完全プライベート空間を実現した日焼けサロンです。','summary' => '店内外改装で、RENEWAL OPEN!!
SHAVE ICE(かき氷)数量限定販売スタート!!
［マトリックス］L58-ER 新登場!!
最新型［マトリックス］L18-ER 新登場!!
100％ Natural!! 歯のホワイトニング新登場!! 初回お試し¥3,240
［最高級マッサージチェア※ご自由にどうぞ］新登場!!

日焼けサロン イリオス パーソナル 柏店　　■■■クレジットカードご利用可能■■■　柏日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆完全個室
個室更衣室⇔タンニング(日焼け)ルームが直結しており、マシンも遠隔で作動します。
他のお客様にはもちろん、店舗スタッフにも一切会わずにご利用いただける、
完全プライベート空間を実現した日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:00～29:00／木・金・土24時間営業／日9:00～26:00', 'close_day' => '', 'area_code' => 4402, 'address' => '柏市中央町2-10　KSSビル1＆2Ｆ', 'near_st' => '柏駅', 'load_navi' => '柏駅より徒歩3分', 'tel' => '04-7164-9696', 'machine_num' => '', 'parking' => '割引あり', 'site_url' => 'http://www.hiyake.com/info/archives/154', 'kodawari' => '駅近／24時間営業／完全個室／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／クレジットカード利用可能／ミスト付シャワーあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 2240 ),
array('company_id'=>78,'name'=> 'イリオス Personal MEGAドンキ 柏店', 'kana_name'=>'めがどんきかしわてん', 'catch_msg'=>'完全プライベート空間を実現した日焼けサロンです。','summary' => '店内外改装で、RENEWAL OPEN!!
SHAVE ICE(かき氷)数量限定販売スタート!!
［マトリックス］L58-ER 新登場!!
最新型［マトリックス］L18-ER 新登場!!
100％ Natural!! 歯のホワイトニング新登場!! 初回お試し¥3,240
［最高級マッサージチェア※ご自由にどうぞ］新登場!!

日焼けサロン イリオス パーソナル 柏店　　■■■クレジットカードご利用可能■■■　柏日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆完全個室
個室更衣室⇔タンニング(日焼け)ルームが直結しており、マシンも遠隔で作動します。
他のお客様にはもちろん、店舗スタッフにも一切会わずにご利用いただける、
完全プライベート空間を実現した日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～28:00／最終受付時間27:00／日曜日10:00～24:00', 'close_day' => '', 'area_code' => 4402, 'address' => '柏市富里3-3-2　MEGAドンキ3Ｆ', 'near_st' => '柏駅', 'load_navi' => '柏駅より徒歩20分', 'tel' => '04-7142-9696', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://www.hiyake.com/info/archives/154', 'kodawari' => '深夜まで営業／完全個室／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／クレジットカード利用可能／ミスト付シャワーあり／駐車場あり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 2240 ),
array('company_id'=>78,'name'=> 'イリオス Personal 千葉店', 'kana_name'=>'ちばてん', 'catch_msg'=>'店内大改装で、RENEWAL OPEN!!　［VIP ROOM］も2室になりました!!','summary' => '［マックスター］L43-80 ×2台 新登場!!

日焼けサロン イリオス パーソナル メガ ドン.キホーテ 柏店　　■■■クレジットカードご利用可能■■■　柏日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆完全個室
各個室内にタンニングマシン、シャワー、ドレッサーなど全てを設置!!
個室更衣室に入室～タンニング（日焼け）～退室まで、他のお客様にはもちろん、
店舗スタッフにも一切会わずにご利用いただける、完全プライベート空間を実現した日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '24時間営業／日～24:00／月9:00～', 'close_day' => '', 'area_code' => 4401, 'address' => '千葉市中央区富士見2-7-2 鹿島ビル5F', 'near_st' => '京成千葉駅', 'load_navi' => '京成千葉駅より徒歩4分', 'tel' => '043-308-0396', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/156', 'kodawari' => '駅近／24時間営業／完全個室／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／クレジットカード利用可能／ミスト付シャワーあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 2240 ),
array('company_id'=>78,'name'=> 'イリオス 松戸本店', 'kana_name'=>'まつどほんてん', 'catch_msg'=>'RENEWAL OPEN!! 【個室更衣室】を大増設','summary' => '店内大改装で、RENEWAL OPEN!!　［VIP ROOM］も2室になりました!!
［マトリックス］L33 増設!! 2台完備!!

日焼けサロン イリオス パーソナル 千葉店　　■■■クレジットカードご利用可能■■■　千葉日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆完全個室
個室更衣室⇔タンニング(日焼け)ルームが直結しており、マシンも遠隔で作動します。
他のお客様にはもちろん、店舗スタッフにも一切会わずにご利用いただける、
完全プライベート空間を実現した日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:00～26:00／金・土24時間営業', 'close_day' => '', 'area_code' => 4402, 'address' => '松戸市本町20-10 ル・シーナビル4F', 'near_st' => '松戸駅', 'load_navi' => '松戸駅より徒歩1分', 'tel' => '047-366-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/158', 'kodawari' => '駅近／24時間営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／クレジットカード利用可能／ミスト付シャワーあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 1940 ),
array('company_id'=>78,'name'=> 'イリオス 津田沼店', 'kana_name'=>'つだぬまてん', 'catch_msg'=>'店内改装で、RENEWAL OPEN!!','summary' => '店内改装で、RENEWAL OPEN!!
最新型［マトリックス］L33 extreme［エクストリーム］新登場!!
強力顔焼き［マックスター］HF6 新登場!! マッサージ機能付きで快適日焼け
100％ Natural!! 歯のホワイトニング新登場!! 初回お試し¥3,240
［最高級マッサージチェア※ご自由にどうぞ］新登場!!

◆全更衣室 個室
日焼けサロン イリオス 津田沼店　　■■■クレジットカードご利用可能■■■　津田沼日サロ
★アルバイトスタッフ(18歳以上)募集中!!

タンニング（日焼け）ルームが個室なのはもちろん、全ての更衣室が個室で、
他人に気兼ねなくご利用いただける、プライベート重視の日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:00～26:00／金・土24時間営業', 'close_day' => '', 'area_code' => 4403, 'address' => '船橋市前原西2-12-9 大生ビル5F', 'near_st' => '津田沼駅、新津田沼駅', 'load_navi' => '津田沼駅より徒歩3分', 'tel' => '047-403-8989', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/164', 'kodawari' => '駅近／24時間営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／クレジットカード利用可能／ミスト付シャワーあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 1940 ),
array('company_id'=>78,'name'=> 'イリオス 千葉店', 'kana_name'=>'ちばてん', 'catch_msg'=>'初心者からヘヴィユーザーまで対応できる、幅広いマシンバリエーションを取り揃えております。','summary' => '［マトリックス］L58 マシン入替済み!!
［マックスター］L43-100 新登場!!

日焼けサロン イリオス 千葉店　　■■■クレジットカードご利用可能■■■　千葉日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆個室更衣室あり
通常の更衣室（男女別）の他に、個室更衣室も多数完備しております。初心者からヘヴィユーザーまで対応できる、幅広いマシンバリエーションを取り揃えております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～23:00／最終受付時間22:00', 'close_day' => '', 'area_code' => 4401, 'address' => '千葉市中央区富士見2-7-2 鹿島ビル4F', 'near_st' => '京成千葉駅、千葉駅、千葉中央駅、葭川公園駅、栄町駅', 'load_navi' => '京成千葉駅より徒歩4分', 'tel' => '043-221-8989', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/166', 'kodawari' => '駅近／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／クレジットカード利用可能／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 1940 ),
array('company_id'=>78,'name'=> 'ブラッキー Personal 大宮店', 'kana_name'=>'おおみやてん', 'catch_msg'=>'完全プライベート空間を実現した日焼けサロンです。','summary' => '最新型［マトリックス］L33 extreme［エクストリーム］新登場!!

日焼けサロン ブラッキー パーソナル 大宮店　　■■■クレジットカードご利用可能■■■　大宮日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆完全個室
個室更衣室⇔タンニング(日焼け)ルームが直結しており、マシンも遠隔で作動します。
他のお客様にはもちろん、店舗スタッフにも一切会わずにご利用いただける、
完全プライベート空間を実現した日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '月～木9:00～26:00／金・土24時間営業／日9:00～24:00', 'close_day' => '', 'area_code' => 4301, 'address' => 'さいたま市大宮区桜木町2-2-23 石井第一ビル4F', 'near_st' => '大宮駅', 'load_navi' => '大宮駅より徒歩2分', 'tel' => '048-644-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/172', 'kodawari' => '駅近／24時間営業／完全個室／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／クレジットカード利用可能／ミスト付シャワーあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 2240 ),
array('company_id'=>78,'name'=> 'イリオス 熊谷店', 'kana_name'=>'くまがやてん', 'catch_msg'=>'初心者からヘヴィユーザーまで対応できる、幅広いマシンバリエーションを取り揃えております。','summary' => '初心者からヘヴィユーザーまで対応できる、幅広いマシンバリエーションを取り揃えております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:00～25:00／最終受付時間24:00／日・祝日9:00～22:00　／最終受付時間21:00', 'close_day' => '', 'area_code' => 4304, 'address' => '熊谷市銀座2-18-3 守屋ビル2F', 'near_st' => '熊谷駅', 'load_navi' => '熊谷駅より徒歩5分', 'tel' => '048-525-9006', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/175', 'kodawari' => '駅近／深夜まで営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 1940 ),
array('company_id'=>78,'name'=> 'ブラッキー 大宮西口店', 'kana_name'=>'おおみやにしぐちてん', 'catch_msg'=>'店内大改装で、RENEWAL OPEN!!','summary' => '店内大改装で、RENEWAL OPEN!!
最新顔焼き［マックスター］HF8-ER (マッサージ機能付き) 新登場!!
さらに［マトリックス］L33 もマシン入替済み! 2台完備!!

日焼けサロン ブラッキー 大宮西口店　　■■■クレジットカードご利用可能■■■　埼玉日サロ
★アルバイトスタッフ(18歳以上)募集中!!

初心者からヘヴィユーザーまで対応できる、幅広いマシンバリエーションを取り揃えております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '8:30～24:00', 'close_day' => '', 'area_code' => 4301, 'address' => 'さいたま市大宮区桜木町2-2-12 藤沢ビル2F', 'near_st' => '大宮駅', 'load_navi' => '大宮駅より徒歩1分', 'tel' => '048-642-5596', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/177', 'kodawari' => '駅近／深夜まで営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／クレジットカード利用可能／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 1940 ),
array('company_id'=>78,'name'=> 'ブラッキー Personal 横浜店', 'kana_name'=>'よこはまてん', 'catch_msg'=>'完全プライベート空間を実現した日焼けサロンです。','summary' => '最新型［マトリックス］L18-ER ＆
［マックスター］L43-80-DEC×2台 & HF8-ER (顔焼き)新登場!!

日焼けサロン ブラッキー パーソナル 横浜店　　■■■クレジットカードご利用可能■■■　横浜日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆完全個室
個室更衣室⇔タンニング(日焼け)ルームが直結しており、マシンも遠隔で作動します。
他のお客様にはもちろん、店舗スタッフにも一切会わずにご利用いただける、
完全プライベート空間を実現した日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '24時間営業／日～24:00／月9:00～', 'close_day' => '', 'area_code' => 4201, 'address' => '横浜市西区南幸2-19-3 第一土屋ビル4F', 'near_st' => '横浜駅', 'load_navi' => '横浜駅より徒歩5分', 'tel' => '045-410-0596', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/179', 'kodawari' => '駅近／24時間営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／クレジットカード利用可能／ミスト付シャワーあり／完全個室／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 2240 ),
array('company_id'=>78,'name'=> 'イリオス 本厚木店', 'kana_name'=>'ほんあつぎてん', 'catch_msg'=>'初心者からヘヴィユーザーまで対応できる、幅広いマシンバリエーションを取り揃えております。','summary' => '最強顔焼き「メガ2」!! 全身型ご利用で15分500円!!

日焼けサロン イリオス 本厚木店　　■■■クレジットカードご利用可能■■■　神奈川日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆個室更衣室あり
通常の更衣室（男女別）の他に、個室更衣室も多数完備しております。初心者からヘヴィユーザーまで対応できる、幅広いマシンバリエーションを取り揃えております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:00～26:00', 'close_day' => '', 'area_code' => 4206, 'address' => '厚木市旭町1-1-1 AODENビル5F', 'near_st' => '本厚木駅', 'load_navi' => '本厚木駅より徒歩1分', 'tel' => '046-220-1196', 'machine_num' => '', 'parking' => '割引あり', 'site_url' => 'http://www.hiyake.com/info/archives/181', 'kodawari' => '駅近／24時間営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／クレジットカード利用可能／ミスト付シャワーあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 1940 ),
array('company_id'=>78,'name'=> 'イリオス Personal 土浦店', 'kana_name'=>'つちうらてん', 'catch_msg'=>'完全プライベート空間を実現した日焼けサロンです。','summary' => '最新型［マトリックス］L33 extreme［エクストリーム］新登場!!
［マトリックス］L58 新登場!!　［マトリックス］L22 VIP ROOMも復活!!

日焼けサロン イリオス パーソナル 土浦店　　■■■クレジットカードご利用可能■■■　土浦日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆完全個室
個室更衣室⇔タンニング(日焼け)ルームが直結しており、マシンも遠隔で作動します。
他のお客様にはもちろん、店舗スタッフにも一切会わずにご利用いただける、
完全プライベート空間を実現した日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～30:00／日11:00～25:00', 'close_day' => '', 'area_code' => 4701, 'address' => '土浦市大和町5-15 山口ビル1F', 'near_st' => '土浦駅', 'load_navi' => '土浦駅より徒歩5分', 'tel' => '029-835-3399', 'machine_num' => '', 'parking' => '割引あり', 'site_url' => 'http://www.hiyake.com/info/archives/183', 'kodawari' => '駅近／朝まで営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／クレジットカード利用可能／ミスト付シャワーあり／完全個室／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 2240 ),
array('company_id'=>78,'name'=> 'イリオス 水戸店', 'kana_name'=>'みとてん', 'catch_msg'=>'プライベート重視の日焼けサロンです。','summary' => '［マックスター］L43-100 新登場!!

日焼けサロン イリオス 水戸店　水戸日サロ　★アルバイトスタッフ(18歳以上)募集中!!

◆全更衣室 個室
タンニング（日焼け）ルームが個室なのはもちろん、全ての更衣室が個室で、
他人に気兼ねなくご利用いただける、プライベート重視の日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～25:00　／木・金11:00～30:00', 'close_day' => '', 'area_code' => 4701, 'address' => '水戸市南町1-3-11 南町スクランブル交差点ビル3F', 'near_st' => '水戸駅', 'load_navi' => '水戸駅より徒歩9分', 'tel' => '029-231-9699', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/186', 'kodawari' => '朝まで営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 1940 ),
array('company_id'=>78,'name'=> 'ブラッキー Personal 太田店', 'kana_name'=>'おおたてん', 'catch_msg'=>'完全プライベート空間を実現した日焼けサロンです。','summary' => '［マトリックス］L58 新登場!!
最強顔焼き［メガ2］
全身型とセットのご利用で15分500円!!／30分1,000円!!

日焼けサロン ブラッキー パーソナル 太田店　　■■■クレジットカードご利用可能■■■　群馬日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆完全個室
個室更衣室⇔タンニング(日焼け)ルームが直結しており、マシンも遠隔で作動します。
他のお客様にはもちろん、店舗スタッフにも一切会わずにご利用いただける、
完全プライベート空間を実現した日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:00～26:00', 'close_day' => '※ラストオーダー深夜1：00', 'area_code' => 4501, 'address' => '太田市飯田町1404 ドン・キホーテ1F', 'near_st' => '太田駅', 'load_navi' => '太田駅より徒歩0分', 'tel' => '0276-60-1696', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://www.hiyake.com/info/archives/188', 'kodawari' => '駅近／深夜まで営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／完全個室／クレジットカード利用可能／駐車場あり／完全個室／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 2240 ),
array('company_id'=>78,'name'=> 'イリオス 郡山店', 'kana_name'=>'こおりやまてん', 'catch_msg'=>'プライベート重視の日焼けサロンです。','summary' => 'タンニング（日焼け）ルームが個室なのはもちろん、全ての更衣室が個室で、
他人に気兼ねなくご利用いただける、プライベート重視の日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～0:00／木・金・土11:00～26:00', 'close_day' => '', 'area_code' => 2601, 'address' => '郡山市駅前1-11-9 日商ビル3F', 'near_st' => '郡山駅', 'load_navi' => '郡山駅より徒歩5分', 'tel' => '024-925-9696', 'machine_num' => '', 'parking' => '割引あり', 'site_url' => 'http://www.hiyake.com/info/archives/191', 'kodawari' => '駅近／深夜まで営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 1940 ),
array('company_id'=>78,'name'=> 'ブラッキー いわき店', 'kana_name'=>'いわきてん', 'catch_msg'=>'プライベート重視の日焼けサロンです。','summary' => '［マトリックス］L18-ER 新登場!!

日焼けサロン ブラッキー いわき店　いわき日サロ　★アルバイトスタッフ(18歳以上)募集中!!

◆全更衣室 個室
タンニング（日焼け）ルームが個室なのはもちろん、全ての更衣室が個室で、
他人に気兼ねなくご利用いただける、プライベート重視の日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～0:00', 'close_day' => '', 'area_code' => 2601, 'address' => 'いわき市平字田町56番地 2F', 'near_st' => 'いわき駅', 'load_navi' => 'いわき駅より徒歩1分', 'tel' => '0246-21-7711', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/193', 'kodawari' => '駅近／深夜まで営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 1940 ),
array('company_id'=>78,'name'=> 'イリオス Personal 名駅WEST店', 'kana_name'=>'めいえきうえすとてん', 'catch_msg'=>'完全プライベート空間を実現した日焼けサロンです。','summary' => '最新型［マトリックス］L33 extreme［エクストリーム］新登場!!
最強顔焼き［マックスター］HF8 新登場!!

日焼けサロン イリオス パーソナル 名駅 ウエスト店　　■■■クレジットカードご利用可能■■■　名古屋日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆完全個室
個室更衣室⇔タンニング(日焼け)ルームが直結しており、マシンも遠隔で作動します。
他のお客様にはもちろん、店舗スタッフにも一切会わずにご利用いただける、
完全プライベート空間を実現した日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～26:00／最終受付時間25:00／日10:00～24:00', 'close_day' => '', 'area_code' => 6201, 'address' => '名古屋市中村区椿町14-12 セントラルWESTビル2F', 'near_st' => '名古屋駅', 'load_navi' => '名古屋駅より徒歩1分', 'tel' => '052-453-7272', 'machine_num' => '', 'parking' => '割引あり', 'site_url' => 'http://www.hiyake.com/info/archives/195', 'kodawari' => '駅近／深夜まで営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／完全個室／クレジットカード利用可能／ミスト付シャワーあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 2240 ),
array('company_id'=>78,'name'=> 'ブラッキー Personal 名古屋栄店', 'kana_name'=>'なごやさかえてん', 'catch_msg'=>'店内大改装で、RENEWAL OPEN!!','summary' => '店内大改装で、RENEWAL OPEN!!
［マックスター］L43-100-ER 増設! 2台完備!!
最新型［マトリックス］L22-ER 新登場!! ★快適マットタイプ 最強マシン 西日本初上陸!!

日焼けサロン ブラッキー パーソナル 名古屋 栄店　　■■■クレジットカードご利用可能■■■　名古屋日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆完全個室
個室更衣室⇔タンニング(日焼け)ルームが直結しており、マシンも遠隔で作動します。
他のお客様にはもちろん、店舗スタッフにも一切会わずにご利用いただける、
完全プライベート空間を実現した日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:00～26:00／木・金・土24時間営業／日9:00～24:00', 'close_day' => '', 'area_code' => 6201, 'address' => '名古屋市中区錦3-6-10 大丸ビル2F', 'near_st' => '栄駅、久屋大通駅', 'load_navi' => '栄駅より0分', 'tel' => '052-963-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/197', 'kodawari' => '駅近／24時間営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／完全個室／クレジットカード利用可能／ミスト付シャワーあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 2240 ),
array('company_id'=>78,'name'=> 'ブラッキー Personal 大阪心斎橋店', 'kana_name'=>'おおさかしんさいばしてん', 'catch_msg'=>'完全プライベート空間を実現した日焼けサロンです。','summary' => '［マトリックス］L33 増設!! 2台完備!!
最強顔焼き［マックスター］HF8 新登場!!

日焼けサロン ブラッキー パーソナル 大阪 心斎橋店　　■■■クレジットカードご利用可能■■■　大阪日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆完全個室
個室更衣室⇔タンニング(日焼け)ルームが直結しており、マシンも遠隔で作動します。
他のお客様にはもちろん、店舗スタッフにも一切会わずにご利用いただける、
完全プライベート空間を実現した日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '24時間営業／日～26:00　／月10:00～', 'close_day' => '', 'area_code' => 7102, 'address' => '大阪市中央区心斎橋筋2-3-19 ヨシモトビルディング4F', 'near_st' => 'なんば駅、日本橋駅、心斎橋駅', 'load_navi' => 'なんば駅より徒歩5分', 'tel' => '06-6214-8686', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/199', 'kodawari' => '駅近／24時間営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／完全個室／クレジットカード利用可能／ミスト付シャワーあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 2240 ),
array('company_id'=>78,'name'=> 'ブラッキー 大阪 アメリカ村店', 'kana_name'=>'おおさかあめりかむらてん', 'catch_msg'=>'初心者からヘヴィユーザーまで対応できる、幅広いマシンバリエーションを取り揃えております。','summary' => '最新型［マトリックス］L33 extreme［エクストリーム］関西初登場!!
［マトリックス］L58 新登場!!
100％ Natural!! 歯のホワイトニング新登場!! 初回お試し¥3,240
［最高級マッサージチェア※ご自由にどうぞ］新登場!!

日焼けサロン ブラッキー 大阪アメリカ村店　　■■■クレジットカードご利用可能■■■
※旧 B GOLD (ビーゴールド) アメリカ村店　大阪日サロ
★アルバイトスタッフ(18歳以上)募集中!!

◆個室更衣室あり
個室更衣室を多数(9室)完備した、プライベート重視の日焼けサロンです。
初心者からヘヴィユーザーまで対応できる、幅広いマシンバリエーションを取り揃えております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '月～水10:00～26:00　／木・金・土曜日0:00～24:00／日曜日10:00～24:00', 'close_day' => '', 'area_code' => 7102, 'address' => '大阪市中央区西心斎橋2-10-34 心斎橋ウエスト363ビル3F', 'near_st' => '心斎橋駅、四ツ橋駅、なんば駅', 'load_navi' => '心斎橋駅より徒歩3分', 'tel' => '06-6211-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hiyake.com/info/archives/201', 'kodawari' => '駅近／24時間営業／初回割引あり／手ぶらＯＫ／紹介割引あり／ドリンクサービスあり／クレジットカード利用可能／ミスト付シャワーあり／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => 1940 ),
array('company_id'=>79,'name'=> 'エグゼ', 'kana_name'=>'えぐぜ', 'catch_msg'=>'日焼けは肌質とご要望に合わせて、スタッフが無理のない日焼けをご提案！　ハイパワーマシーンなので、日焼け時間の調整だけで肌質にあわせたご希望のお色を短時間で得る事ができます。
完全個室
手ぶらＯＫ','summary' => '美サロ　EXE（エグゼ）は青森県八戸市にある、強めのマシンを3台設置した日焼けのお店です。

日焼けマシーンは、エルゴライン製アフィニティー600シリーズを3台設置
初めて日焼けされる方から、極黒を目指すヘビーなお客様まで、あらゆるお客様のニーズに対応いたします。


無料でご使用頂ける物
（日焼けジェル・バスタオル・ボディーソープ・ボディースポンジ・シャンプー＆コンディショナー・保湿クリーム・化粧水）
ＬＩＮＥでのポイント制あり','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 2101, 'address' => '八戸市廿三日町21-3', 'near_st' => '', 'load_navi' => '廿三日町交差点近く、鯛焼き「たい夢」さんの隣です', 'tel' => '0178-71-3345', 'machine_num' => '3', 'parking' => '', 'site_url' => 'http://exe-8.com/', 'kodawari' => '完全個室／予約優先／コラーゲンマシーンあり／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>80,'name'=> 'エスタジ', 'kana_name'=>'えすたじ', 'catch_msg'=>'最新のタンニングマシーン、明るく清潔な各種施設、元気なスタッフ達で親切丁寧にお出迎えいたします。','summary' => '日焼けサロン「エスタジ/ESTASI」は京都三条木屋町という京都の繁華街の中心で1996年から、皆様に親しまれてきました。常に最新のタンニングマシン・設備・サービスを心掛け、これからも京都の日焼けサロンといえば「エスタジ/ESTASI」と言われる様に頑張っていきます☆

京都府京都市の繁華街のど真ん中！三条木屋町で日焼けサロン「エスタジ/ESTASI」は営業しております。
京阪三条駅から徒歩3分！地下鉄御池駅から徒歩3分！阪急四条駅から徒歩10分！の好立地なので、河原町でのショッピングのついでに、デートの前に、飲み会の前にと、、いつでもお手軽に最新のタンニングマシーンで日焼けが楽しめます。京都河原町・三条木屋町にお越しの際はぜひお寄りください。

日焼けサロン「エスタジ/ESTASI」では安全で健康的に日焼けを楽しんでいただく為に常に最新のタンニングマシンを使用しております。当サロンで使用している日焼け用ライトは、近紫外線と可視光線のみを効果的に放射して、肌に有害となる光線を極限までカットすることにより、急激な日焼けに対してでも炎症などを起こすことがなく、短時間で小麦色の肌を作ることができます。その性能は、有害紫外線の含有率が太陽光線のわすが0.011％まで制御されており、安全性については折り紙つきです。
また、より効率的に身体を鍛えられるトレーニングマシンを常設しておりますので日焼けだけでなくトータルでボディメイキングを楽しんでいただけます。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '平日11:00～23:00／最終受付時間22:00 ／日曜11:00～21:00最終受付時間20:00', 'close_day' => '年中無休', 'area_code' => 7201, 'address' => '京都府京都市中京区三条木屋町上ル
上大阪町532-20FORUMU木屋町3F', 'near_st' => '京都市役所前駅、三条駅、三条京阪駅', 'load_navi' => '京阪三条駅より徒歩3分
地下鉄京都市役所前より徒歩3分', 'tel' => '0120-849-961
075-254-2703', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hisalo.com/', 'kodawari' => '学割あり／駅近／マシーン種類豊富／トレーニンジム併設／お得な回数券・プリペイドカードあり／格安サロン', 'customers' => '','min_price' => 1500 ),
array('company_id'=>81,'name'=> 'エルソール', 'kana_name'=>'えるそーる', 'catch_msg'=>'ワンランク上の日焼けを！','summary' => '大阪市中央区のミナミにある日焼けサロンのエルソールは、1990年創業の日焼けサロン。芸能人やスポーツ選手もおこしいただいております。安全な日焼けのために万全の整備の元、適正なワット数のマシンに高性能ゴールドライトを使用しています。 短時間にムラなく安全に安心して日焼けを御堪能いただけます。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00 ／最終受付時間23:00', 'close_day' => '', 'area_code' => 7102, 'address' => '大阪府大阪市中央区日本橋1丁目18-14', 'near_st' => '日本橋駅', 'load_navi' => '日本橋駅より徒歩0分', 'tel' => '06-6649-7666', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.el-sol.jp/', 'kodawari' => 'ドリンクサービスあり／手ぶらＯＫ／マシーン種類豊富／クレジットカード利用可能／駅近／コラーゲンマシーンあり／完全個室／深夜まで営業／初回割引あり', 'customers' => '10代から50代までと幅広く、男性、女性も偏りなくご利用いただいています。','min_price' => 2270 ),
array('company_id'=>82,'name'=> '成瀬店', 'kana_name'=>'なるせてん', 'catch_msg'=>'コイン日焼24は、24時間営業！年中無休！のセルフ日焼けサロンです。','summary' => 'コイン日焼24は、24時間営業！年中無休！のセルフ日焼けサロンです。
まったく新しい感覚で、気軽に！いつでも！安い値段で！日焼けを楽しめるお店です。
当店を選んで頂いた理由を聞くと「気楽でイイね」「安いね」が圧倒的！！
日焼けが好きなあなたなら、きっと満足して頂けると思います。
※自販機は高額紙幣が使えません。千円札、小銭のご用意を！
※日焼けジェルの持ち込みはお止めください。
※日焼けジェル以外は持ち込みOKです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4113, 'address' => '東京都町田市成瀬が丘2-1-5スカイパールビル3階', 'near_st' => '成瀬駅', 'load_navi' => 'JR横浜線 成瀬駅 南口を出て左、横浜信用金庫側 3棟目のビル3階、徒歩約1分。
※1階に居酒屋「みちのく」があります。', 'tel' => '042-796-9366', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.ch24.jp/naruseten.html', 'kodawari' => '駅近／24時間営業／格安サロン', 'customers' => '','min_price' => 500 ),
array('company_id'=>82,'name'=> '下北沢店', 'kana_name'=>'しもきたざわてん', 'catch_msg'=>'コイン日焼24は、24時間営業！年中無休！のセルフ日焼けサロンです。','summary' => 'コイン日焼24は、24時間営業！年中無休！のセルフ日焼けサロンです。
まったく新しい感覚で、気軽に！いつでも！安い値段で！日焼けを楽しめるお店です。
当店を選んで頂いた理由を聞くと「気楽でイイね」「安いね」が圧倒的！！
日焼けが好きなあなたなら、きっと満足して頂けると思います。
※自販機は高額紙幣が使えません。千円札、小銭のご用意を！
※日焼けジェルの持ち込みはお止めください。
※日焼けジェル以外は持ち込みOKです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4106, 'address' => '東京都世田谷区北沢2-12-10SSビル4階', 'near_st' => '下北沢駅', 'load_navi' => '小田急線・井の頭線下北沢駅南口から徒歩約1分
※南口出口前マックがあり、その裏側', 'tel' => '03-3412-9676', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.ch24.jp/shimokitazawa.html', 'kodawari' => '駅近／24時間営業／マシーン種類豊富／格安サロン', 'customers' => '','min_price' => 500 ),
array('company_id'=>82,'name'=> '経堂店', 'kana_name'=>'きょうどうてん', 'catch_msg'=>'コイン日焼24は、24時間営業！年中無休！のセルフ日焼けサロンです。','summary' => 'コイン日焼24は、24時間営業！年中無休！のセルフ日焼けサロンです。
まったく新しい感覚で、気軽に！いつでも！安い値段で！日焼けを楽しめるお店です。
当店を選んで頂いた理由を聞くと「気楽でイイね」「安いね」が圧倒的！！
日焼けが好きなあなたなら、きっと満足して頂けると思います。
※自販機は高額紙幣が使えません。千円札、小銭のご用意を！
※日焼けジェルの持ち込みはお止めください。
※日焼けジェル以外は持ち込みOKです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4106, 'address' => '東京都世田谷区経堂1-12-3ビル3階', 'near_st' => '経堂駅', 'load_navi' => '小田急線経堂駅から農大通りに徒歩約3分。
※左側1階にみずほ銀行のATMが有るビルの3階。', 'tel' => '03-6906-9378', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.ch24.jp/kyoudou.html', 'kodawari' => '駅近／24時間営業／格安サロン', 'customers' => '','min_price' => 500 ),
array('company_id'=>82,'name'=> '吉祥寺店', 'kana_name'=>'きちじょうじてん', 'catch_msg'=>'コイン日焼24は、24時間営業！年中無休！のセルフ日焼けサロンです。','summary' => 'コイン日焼24は、24時間営業！年中無休！のセルフ日焼けサロンです。
まったく新しい感覚で、気軽に！いつでも！安い値段で！日焼けを楽しめるお店です。
当店を選んで頂いた理由を聞くと「気楽でイイね」「安いね」が圧倒的！！
日焼けが好きなあなたなら、きっと満足して頂けると思います。
※自販機は高額紙幣が使えません。千円札、小銭のご用意を！
※日焼けジェルの持ち込みはお止めください。
※日焼けジェル以外は持ち込みOKです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4114, 'address' => '東京都武蔵野市御殿山1-1-2アライ吉祥寺ビル6F', 'near_st' => '吉祥寺駅', 'load_navi' => 'JR・井の頭線吉祥寺駅パルコ側から出て徒歩約１分。
※吉祥寺西口交番の前。', 'tel' => '0422-24-9989', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.ch24.jp/kichijyouji.html', 'kodawari' => '駅近／24時間営業／格安サロン', 'customers' => '','min_price' => 500 ),
array('company_id'=>82,'name'=> '蒲田店', 'kana_name'=>'かまたてん', 'catch_msg'=>'コイン日焼24は、24時間営業！年中無休！のセルフ日焼けサロンです。','summary' => 'コイン日焼24は、24時間営業！年中無休！のセルフ日焼けサロンです。
まったく新しい感覚で、気軽に！いつでも！安い値段で！日焼けを楽しめるお店です。
当店を選んで頂いた理由を聞くと「気楽でイイね」「安いね」が圧倒的！！
日焼けが好きなあなたなら、きっと満足して頂けると思います。
※自販機は高額紙幣が使えません。千円札、小銭のご用意を！
※日焼けジェルの持ち込みはお止めください。
※日焼けジェル以外は持ち込みOKです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4108, 'address' => '東京都大田区西蒲田7-29-5ニューカマタビル6階', 'near_st' => '蒲田駅', 'load_navi' => 'JR・東急池上線・東急多摩川線蒲田駅西口から徒歩約１分。
※西口のロータリーから「ニューカマタビル」と書かれているビルが見えます。', 'tel' => '03-3736-8111', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.ch24.jp/kamata.html', 'kodawari' => '駅近／24時間営業／格安サロン', 'customers' => '','min_price' => 500 ),
array('company_id'=>83,'name'=> 'コカクラブ尼崎店', 'kana_name'=>'こかくらぶあまがさきてん', 'catch_msg'=>'ウェイティングスペースは木の風合いを生かしたナチュラルな雰囲気。
1997年開店以来お店もお客様も年を重ね、比較的年齢層の高い男性のお客様にも多数ご来店頂いております。
コラーゲンマシンあり','summary' => 'ウェイティングスペースは木の風合いを生かしたナチュラルな雰囲気。
1997年開店以来お店もお客様も年を重ね、比較的年齢層の高い男性のお客様にも多数ご来店頂いております。
マシン内部の部屋は全室個室で、内側からカギがかけられるようになっています。料金は先に券を購入するシステムなので初めての方も安心です!','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～22:00／最終受付時間21:30／日祝11:00～21:00／最終受付時間20:30', 'close_day' => '', 'area_code' => 7302, 'address' => '兵庫県尼崎市御園町39', 'near_st' => '-尼崎駅', 'load_navi' => '阪神電鉄線--尼崎駅から徒歩　約3分', 'tel' => '06-6418-7489', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.xcokax.com/', 'kodawari' => 'コラーゲンマシーンあり／駅近／マシーン種類豊富／新規割引あり／大人向けサロン', 'customers' => '大人向け','min_price' => null ),
array('company_id'=>84,'name'=> 'ココナッツクラブ新潟', 'kana_name'=>'ここなっつくらぶにいがた', 'catch_msg'=>'','summary' => '新潟県新潟市の日焼けサロン　ココナッツクラブです。マシンブースが完全個室で快適性は新潟市内の日焼けサロンの中でもトップクラス！リラックスして日焼けできます。新潟県新潟市で日焼けサロンをお探しならココナッツクラブへお越しください。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00 ～24:00　／最終受付時間23:00', 'close_day' => '', 'area_code' => 5101, 'address' => '新潟県新潟市東堀前通8番町1371ビックナイトビル　4階', 'near_st' => '', 'load_navi' => '', 'tel' => '025-222-5572', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.soltron.jp/coconut-club/', 'kodawari' => '強力マシーンあり／深夜まで営業／学割あり／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>85,'name'=> 'ココナッツスタジアム', 'kana_name'=>'ここなっつすたじあむ', 'catch_msg'=>'丁寧＆リーズナブルが人気の秘密
1回ごとの都度払いなので、
気軽に通えるエステ＆日焼けの人気サロン!
完全予約制、喫煙可
脱毛、スリムケア、フェイシャルあり','summary' => '丁寧＆リーズナブルが人気の秘密
1回ごとの都度払いなので、
気軽に通えるエステ＆日焼けの人気サロン!

≪日焼けマシン≫初心者向けの5000ｗ〜しっかり焼きたい方向けの14000ｗまで完備。完全個室・シャワー2台と設備環境の良さも嬉しいポイント。

遠方からのお客様も多数！リピーターの多い人気サロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～21:00／最終受付時間20:00', 'close_day' => '火曜日', 'area_code' => 9101, 'address' => '愛媛県松山市小坂1-1-12　グランシェル12　1F', 'near_st' => '', 'load_navi' => '', 'tel' => '089-945-4989', 'machine_num' => '3', 'parking' => 'あり3台', 'site_url' => 'http://coconut.kyackrus.jp/', 'kodawari' => '駐車場あり／完全予約制／脱毛あり／マッサージあり／格安サロン', 'customers' => '','min_price' => 800 ),
array('company_id'=>86,'name'=> 'ココナッツスタジオ', 'kana_name'=>'ここなっつすたじお', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 9201, 'address' => '徳島県徳島市南新町2丁目28', 'near_st' => '徳島駅', 'load_navi' => '徳島駅出口から徒歩約9分', 'tel' => '088-625-0204', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>87,'name'=> 'ココナッツルーム日焼サロン', 'kana_name'=>'ここなっつるーむひやけさろん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4205, 'address' => '小田原市田島650', 'near_st' => '下曽我駅', 'load_navi' => '下曽我駅より徒歩21分', 'tel' => '0465-42-0438', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '美容院併設', 'customers' => '','min_price' => null ),
array('company_id'=>88,'name'=> 'コスモス溝の口店', 'kana_name'=>'こすもすみぞのくちてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:00～23:00', 'close_day' => '', 'area_code' => 4203, 'address' => '神奈川県川崎市高津区溝口1丁目12−5', 'near_st' => '溝の口駅、武蔵溝ノ口駅、高津駅', 'load_navi' => '武蔵溝ノ口駅[北口]から徒歩約4分', 'tel' => '044-811-3040', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '札幌店', 'kana_name'=>'さっぽろてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 1001, 'address' => '北海道札幌市豊平区中の島一条1丁目7-20', 'near_st' => '', 'load_navi' => '', 'tel' => '011-812-1414', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> 'アルファ千歳店', 'kana_name'=>'あるふぁちとせてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 1002, 'address' => '北海道千歳市幸町4丁目26-1駿河4丁目ビル3階', 'near_st' => '', 'load_navi' => '', 'tel' => '0123-42-9696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '帯広店', 'kana_name'=>'おびひろてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 1002, 'address' => '北海道帯広市西4条南21-4-2', 'near_st' => '', 'load_navi' => '', 'tel' => '0155-21-1696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '東札幌店', 'kana_name'=>'ひがしさっぽろてん', 'catch_msg'=>'高級感と清潔感漂うインテリアで皆様をお待ちしております。','summary' => '高級感と清潔感漂うインテリア、道内第4店舗目のザ・サンラウンジがこの冬に満を持してオープンいたしました。
エルゴラン、ソルトロン、Sportarredo等ヨーロッパの一流ブランドマシンをご堪能ください！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00', 'close_day' => '', 'area_code' => 1001, 'address' => '北海道札幌市白石区東札幌三条四丁目5-25トピア福井ビル1F', 'near_st' => '白石駅', 'load_navi' => '地下鉄白石駅より徒歩3分', 'tel' => '011-812-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/higashisapporo.html', 'kodawari' => '駅近／深夜まで営業／手ぶらＯＫ', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '旭川店', 'kana_name'=>'あさひかわてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 1002, 'address' => '北海道旭川市3条通り8丁目1705アイリットビル5F', 'near_st' => '', 'load_navi' => '', 'tel' => '0166-27-1696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '郡山店', 'kana_name'=>'こおりやまてん', 'catch_msg'=>'東北最大級のサンラウンジ直営店です。','summary' => 'ドイツ・ソルトロン社製、最強マシン、Soltron S-55 Queen Berry／クィーンベリーターボパワー（12400W）同時2機導入しました！！これ、本当に焼けます！！！
顔焼きも3台あり、混雑時もらくらく顔焼き利用が可能です。
地域最大級マシンを多数設置、料金も業界最安値でご案内しています。
スタッフ一同皆様のご来店をお待ちしております。
オールタイム同一料金キャンペーン実施中!!東北エリア最安値でご利用頂けます！
キッスご利用のお客様、最強顔焼き15分無料!!しかも3台設置で、らくらく顔焼き。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～	23:00', 'close_day' => '年中無休', 'area_code' => 2601, 'address' => '郡山市駅前1-4-9 野田屋ビル3F', 'near_st' => '郡山駅', 'load_navi' => '駅前大道り沿い 徒歩2分 丸井並び', 'tel' => '024-925-9614', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/kooriyama.html', 'kodawari' => '駅近／コラーゲンマシーンあり／手ぶらＯＫ／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>89,'name'=> '福島店', 'kana_name'=>'ふくしまてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 2601, 'address' => '福島市栄町7-5-3F', 'near_st' => '', 'load_navi' => '', 'tel' => '0245-28-9614', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> 'いわき店', 'kana_name'=>'いわきてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 2601, 'address' => 'いわき市平三町目35番地 三町目館2F', 'near_st' => '', 'load_navi' => '', 'tel' => '0246-25-9614', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '青山本店', 'kana_name'=>'あおやまほんてん', 'catch_msg'=>'都心からすぐの為、お仕事帰りに便利です。
コラーゲンマシン、最新マシーン多数増設','summary' => '都心からすぐの為、お仕事帰りに便利です。
最新式VIP高級使用マシンのみ設置!!
全マシンエアコン完備・完全個室・駐車場完備で、プライバシーが守れる大人向けサロンです。
リピーターの方も多数ご来店頂いております。
初心者の方でも、スタッフが丁寧に接客致しますので、皆様のご来店お待ちしております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～25:00／最終受付時間24:00', 'close_day' => '年中無休', 'area_code' => 4105, 'address' => '東京都渋谷区神宮前3丁目42-12', 'near_st' => '外苑前駅', 'load_navi' => '東京メトロ銀座線、外苑前駅より徒歩3分', 'tel' => '03-3402-3251', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/aoyama.html', 'kodawari' => '大人向けサロン／駅近／完全個室／駐車場あり／マシーン種類豊富／深夜まで営業／手ぶらＯＫ／初回割引あり／お得な回数券・プリペイドカードあり／格安サロン', 'customers' => '大人向け','min_price' => 1000 ),
array('company_id'=>89,'name'=> '新宿歌舞伎町店', 'kana_name'=>'しんじゅくかぶきちょうてん', 'catch_msg'=>'JR新宿駅東口・西武新宿駅より徒歩5分の好立地。新宿エリア最安値で、マシン台数・来客数もナンバーワンのハイクオリティパフォーマンスを提供します！','summary' => 'JR新宿駅東口・西武新宿駅より徒歩5分の好立地。新宿エリア最安値で、マシン台数・来客数もナンバーワンのハイクオリティパフォーマンスを提供します！ドイツのソルトロン社製マシンを使い、自然な焼き色に仕上がります！超お得なキャンペーンも多数揃えていますので、ザ・サンラウンジ新宿歌舞伎町店へ是非、お越しください！
■ジェル・シャワー・タオル全て無料
■強力マシン多数導入
ドイツ製高性能日焼けマシン、ソルトロン社のマシンによるハイパワーマシン、スピードタンニング、それでいて美しいお肌をプロデュースいたします。お肌も真っ赤にならずに、小麦色の自然な仕上がりになります。
※仕上がりには個人差があります。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～30:00／最終受付時間29:15', 'close_day' => '', 'area_code' => 4103, 'address' => '東京都新宿区歌舞伎町1-8-1 SATOビル3F', 'near_st' => '新宿駅、西武新宿駅、新宿三丁目駅', 'load_navi' => '新宿駅より徒歩5分、新宿区役所本庁舎裏手', 'tel' => '03-5285-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge-shinjukukabukicho.com/', 'kodawari' => '駅近／マシーン種類豊富／朝まで営業／手ぶらＯＫ／強力マシーンあり／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／格安サロン', 'customers' => '','min_price' => 1100 ),
array('company_id'=>89,'name'=> '池袋店', 'kana_name'=>'いけぶくろてん', 'catch_msg'=>'日本初導入！コラーゲンマシーン導入
日焼け＋コラーゲンの生成を促す効果
流行中のコラーゲンマシンと同じ効果を得られる新しいジャンルの日焼けマシンです！女性の方に大人気！日焼け上級者、男性にもオススメ！','summary' => '池袋店、マシンリニューアルしました！
■2016年最新モデル“AFFINITY 700”
⇒人気機種AFFINITYがグレードアップしました！
■最新機種“Inspiration 600”
⇒フェイス4面！強力ランプ搭載の上級マシン！
■現在大流行中のコラーゲンマシンの機能を搭載した“Collatan”
健康的な日焼けを目指す方にｵｽｽﾒです！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～30:00／最終受付時間29:00', 'close_day' => '', 'area_code' => 4101, 'address' => '東京都豊島区西池袋1丁目41-6', 'near_st' => 'JR池袋駅', 'load_navi' => 'JR池袋駅北口を出て徒歩3分', 'tel' => '03-3983-9696', 'machine_num' => '※値段も要確認', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/ikebukuro.html', 'kodawari' => '駅近／マシーン種類豊富／朝まで営業／手ぶらＯＫ／朝割引あり／夜割引あり／コラーゲンマシーンあり／お得な回数券・プリペイドカードあり／格安サロン', 'customers' => '','min_price' => 1100 ),
array('company_id'=>89,'name'=> '北千住店', 'kana_name'=>'きたせんじゅてん', 'catch_msg'=>'駅直結
清潔な店内','summary' => '北千住駅北口を出てすぐの店舗は、アフィニティ660　DYNAMIC POWERを始め、
最強フェイスマシン3台で、混雑時もらくらく顔焼き利用が可能です。
大変便利な立地です！！いつでも気軽にお立ち寄り下さい！！！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '金11:00～25:00／土10:00～25:00／最終受付時間24:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4111, 'address' => '東京都足立区千住1丁目33-11', 'near_st' => '北千住駅', 'load_navi' => '地下鉄千代田線 1番出口真上', 'tel' => '03-3879-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/kitasenju.html', 'kodawari' => '駅近／深夜まで営業／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => 2100 ),
array('company_id'=>89,'name'=> '赤羽店', 'kana_name'=>'あかばねてん', 'catch_msg'=>'サンラウンジが先行導入したAFFINITY660　ダイナミックパワーは、17500Wで圧巻！完全個室でのご利用も出来ます。2000円～','summary' => '■2016年最新モデル“AFFINITY 700”
人気機種AFFINITYがグレードアップしました！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '金11:00～25:00／土10:00～25:00／最終受付時間24:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4102, 'address' => '東京都北区赤羽1丁目12-4 丸久ヤング館ビル 2F', 'near_st' => '赤羽駅', 'load_navi' => '赤羽駅徒歩1分　1番街路地を入った所に有ります。巨大看板の裏が入り口です。', 'tel' => '03-3903-9614', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/akabane.html', 'kodawari' => '駅近／深夜まで営業／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '葛飾店', 'kana_name'=>'かつしかてん', 'catch_msg'=>'駅近で便利な立地','summary' => '■“AFFINITY 950”
⇒上面オールハロゲン！肩焼き機能搭載！
日焼け上級者の方にｵｽｽﾒのマシンです！

■“RED Passion”
⇒2015年モデルの最新マシンを、導入で初級マシンもパワーアップ！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '金11:00～25:00／土10:00～25:00／最終受付時間24:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4110, 'address' => '東京都葛飾区亀有5丁目33-14', 'near_st' => '亀有駅', 'load_navi' => '亀有駅徒歩1分', 'tel' => '03-5616-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/kameari.html', 'kodawari' => '駅近／深夜まで営業／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '小岩店', 'kana_name'=>'こいわてん', 'catch_msg'=>'明るい木目の店内。学割あり。女性大歓迎。清潔な店内','summary' => '【店長コメント】
当店では徹底した従業員教育、衛生管理を心がけ地域NO.1店として日々スタッフ一同お客様にご満足頂ける店舗作りに励んでおります。また、小岩店は女性の方の来店が非常に多く、1人でも安心してご利用頂けます。幅広いマシンラインナップを取りそろえているので、日焼けをするならぜひ当店をご利用ください。スタッフ一同、最高の笑顔で皆様をタンニングリゾート空間にご案内させて頂きます。
【スタッフ大募集】
18歳以上の女性スタッフ
早番、遅番、土日勤務可能な方 大募集中','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～26:00／最終受付時間25:30', 'close_day' => '', 'area_code' => 4110, 'address' => '東京都江戸川区南小岩6丁目28-13', 'near_st' => '小岩駅', 'load_navi' => 'JR「小岩駅」下車徒歩5分、南口よりフラワーロード道なり
TSUTAYAを超えてサンクスの2軒先のビル', 'tel' => '03-3657-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/koiwa.html', 'kodawari' => '駅近／深夜まで営業／手ぶらＯＫ／学割あり／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '上板橋店', 'kana_name'=>'かみいたばしてん', 'catch_msg'=>'','summary' => '板橋の日焼けサロンなら人気のザ・サンラウンジがおすすめ！
安心できる癒しのサービスと充実した設備の日焼けサロンです。
板橋周辺で日焼けサロンをお探しの方は是非ザ・サンラウンジへ！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～24:00／最終受付時間24:00', 'close_day' => '', 'area_code' => 4102, 'address' => '板橋区上板橋3-13-12-1F', 'near_st' => '上板橋駅', 'load_navi' => '東武東上線上板橋駅より徒歩3分（北口を降りて東武ストア本社ビル裏手を進み、交差点向かい）', 'tel' => '03-5399-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.hisaronavi.com/?page_id=112', 'kodawari' => '駅近／深夜まで営業／手ぶらＯＫ', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '成増店', 'kana_name'=>'なりますてん', 'catch_msg'=>'最新マシーン多数入荷中','summary' => '■BLACK PASSION
⇒2016年最新モデル！従来のパッションより、ランプ本数＆ワット数がパワーアップ。

■“RED Passion”
⇒2015年モデルの最新マシンを導入で、初級マシンもパワーアップ！ ','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／金11:00～26:00／土10:00～26:00／最終受付時間25:00／日・祝日10:00～25:00／月～木11:00～25:00／最終受付時間24:00／／冬期営業時間／金11:00～25:00／土10:00～25:00／最終受付時間24:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4102, 'address' => '板橋区成増2-18-3-1F', 'near_st' => '成増駅', 'load_navi' => '東武東上線成増駅南口より徒歩2分　地下鉄有楽町線成増駅5番出口より徒歩2分', 'tel' => '03-5998-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/narimasu.html', 'kodawari' => '駅近／深夜まで営業／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '立川店', 'kana_name'=>'たちかわてん', 'catch_msg'=>'駅近好立地。リニューアル完了。','summary' => '立川店大規模リニューアル完了致しました！駅から徒歩5分の好立地。
顔焼きも3台完備の為、混雑時もらくらく顔焼き。
いつでも気軽にお立ち寄り下さい。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／10:00～26:00／最終受付時間25:00／／冬期営業時間／日～木・祝日10:00～25:00／最終受付時間24:00／金土・祝前日10:00～26:00／最終受付時間25:00', 'close_day' => '', 'area_code' => 4112, 'address' => '立川市錦町2-1-3 ICHIGO MIビル5F', 'near_st' => '立川駅', 'load_navi' => '立川駅南口 徒歩2分 松屋の上', 'tel' => '042-523-9614', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/tachikawa.html', 'kodawari' => '駅近／深夜まで営業／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／格安サロン', 'customers' => '','min_price' => 1100 ),
array('company_id'=>89,'name'=> '調布店', 'kana_name'=>'ちょうふてん', 'catch_msg'=>'18時以降も割引価格でご提供中','summary' => 'マシンバリエーションも最新式ベッド4タイプに部分焼きとお客様のお好みに合わせてご用意させて頂いております。
とてもアットホームな店内にブルーを基調としたオシャレな店内です。スタッフ一同お待ちしております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '金11:00～25:00／土10:00～25:00／最終受付時間24:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4114, 'address' => '調布市布田1-34-1 永祥ビル2F', 'near_st' => '調布駅', 'load_navi' => '「調布駅」下車徒歩5分、北口より旧甲州街道を右折
天神商店街を道なり100M進んだ牛角向い', 'tel' => '042-489-4989', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/chofu.html', 'kodawari' => '駅近／深夜まで営業／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／格安サロン', 'customers' => '','min_price' => 1100 ),
array('company_id'=>89,'name'=> '一軒家町田店', 'kana_name'=>'いっけんやまちだてん', 'catch_msg'=>'マシン台数は町田No.1！駐車場完備！
マシン続々リニューアル中！','summary' => 'マシン台数は町田No.1！駐車場完備！
マシン続々リニューアル中！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '日～木・祝日10:00～25:00／最終受付時間24:00／金土・祝前日10:00～26:00／最終受付時間25:00', 'close_day' => '', 'area_code' => 4113, 'address' => '町田市原町田6-29-10', 'near_st' => '町田駅', 'load_navi' => '小田急「町田駅」下車、東口より徒歩3分
（日産レンタカー、代ゼミ近く）', 'tel' => '042-720-9699', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/new_machida.html', 'kodawari' => '駅近／深夜まで営業／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／駐車場あり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '町田店', 'kana_name'=>'まちだてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4113, 'address' => '町田市原町田6-20-19 STビル5F', 'near_st' => '町田駅', 'load_navi' => ' JR横浜線町田駅 北口から徒歩1分
 小田急線町田駅 西口から徒歩3分', 'tel' => '042-724-1696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '八王子店', 'kana_name'=>'はちおうじてん', 'catch_msg'=>'八王子駅より徒歩3分！気軽にお立ち寄り下さい。','summary' => '■最新機種“Inspiration 600”
⇒フェイス4面！強力ランプ搭載の上級マシン！

■スタンディングタイプ“ESSENSE”
⇒脇腹など、全身キレイに焼けます！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／10:00～26:00／／冬期営業時間／日～木・祝日10:00～25:00／最終受付時間24:00／金土・祝前日10:00～26:00／最終受付時間25:00', 'close_day' => '', 'area_code' => 4112, 'address' => '八王子市旭町8－2 宮崎ビル3Ｆ', 'near_st' => '八王子駅', 'load_navi' => '「八王子駅」下車、北口より徒歩3分
（ユーロード、ロッテリア3F）', 'tel' => '0426-56-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/hachiouji.html', 'kodawari' => '駅近／深夜まで営業／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／マシーン種類豊富', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '福生店', 'kana_name'=>'ふっさてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4112, 'address' => '福生市東町13-4-1F', 'near_st' => '福生駅', 'load_navi' => '福生駅より徒歩5分', 'tel' => '042-552-9676', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '西新井店', 'kana_name'=>'にしあらいてん', 'catch_msg'=>'アットホームなお店です','summary' => '西新井駅東口を出てサティを右側に見て脇をまっすぐに抜けて突き当りを右に曲がって頂くと見えます。ビルの2Fです。
20年6月OPENのきれいな店舗です！
西新井にお立ち寄りの際は是非お越しください。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '金11:00～25:00／土10:00～25:00／最終受付時間24:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4111, 'address' => '足立区梅島3-33-4', 'near_st' => '西新井駅', 'load_navi' => '「西新井駅」下車、東口より徒歩2分
（サティ横、2F）', 'tel' => '03-3852-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/nishiarai.html', 'kodawari' => '駅近／深夜まで営業／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '三ノ輪店', 'kana_name'=>'みのわてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4109, 'address' => '台東区根岸5-24-7 第三ビル201号', 'near_st' => '', 'load_navi' => '', 'tel' => '03-5850-1696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '錦糸町店', 'kana_name'=>'きんしちょうてん', 'catch_msg'=>'錦糸町駅より徒歩3分！気軽にお立ち寄り下さい。','summary' => 'Ergoline社2012年　最新マシン10台導入！！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '金11:00～25:00／土10:00～25:00／最終受付時間24:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4109, 'address' => '東京都墨田区江東橋2-6-7　島田ビル4F', 'near_st' => '錦糸町駅', 'load_navi' => 'JR錦糸町駅　南口　丸井裏側　徒歩3分', 'tel' => '03-3634-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/kinshicho.html', 'kodawari' => '駅近／深夜まで営業／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '中野店', 'kana_name'=>'なかのてん', 'catch_msg'=>'清潔感のある店内。中野駅より徒歩2分の好立地。お気軽にお立ち寄り下さい。','summary' => '■2013年OPENの新店舗！

最新マシン多数設置しております！
■“AFFINITY 800 LIMITED EDITION”
⇒サンラウンジ限定仕様！フェイス4面＆肩焼き機能搭載。
日焼け上級者の方にｵｽｽﾒです！

■BLACK PASSION
⇒2016年最新モデル！従来のパッションより、ランプ本数＆ワット数がパワーアップ。

■スタンディングタイプ“ESSENSE”
⇒脇腹など、全身キレイに焼けます！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／日～木・祝日10:00～26:00／4・5月の金土・祝前日10:00～26:00／最終受付時間25:00／6～8月の金土・祝前日10:00～27:00／最終受付時間26:00／／冬期営業時間／日～木・祝日10:00～25:00／最終受付時間24:00／金土・祝前日10:00～26:00／最終受付時間25:00', 'close_day' => '', 'area_code' => 4104, 'address' => '東京都中野区中野5-61-6 サンモール富士ビル3・4F', 'near_st' => '中野駅', 'load_navi' => 'JR中央線 中野駅より徒歩2分', 'tel' => '03-3388-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/nakano.html', 'kodawari' => '駅近／深夜まで営業／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／マシーン種類豊富', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '新橋店', 'kana_name'=>'しんばしてん',
'catch_msg'=>'2014年10月18日（土）にOPENした新しいお店です。','summary' => '2014年10月18日（土）OPEN','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4107, 'address' => '東京都港区新橋2-2-3裕芳ビル3F', 'near_st' => '内幸駅、新橋駅',
'load_navi' => '都営三田線「内幸駅」下車、A1出口より徒歩1分
もしくは、JR・東京メトロ各線「新橋駅」下車、8番出口より徒歩3分', 'tel' => '03-3580-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/shinbashi.html', 'kodawari' => '駅近／深夜まで営業／手ぶらＯＫ／', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> 'サンサン渋谷店', 'kana_name'=>'さんさんしぶやてん', 'catch_msg'=>'手ぶらで来店。清潔なマシン。綺麗な店内。プライバシーも安心。音楽を聴きながらゆっくりタンニング。豊富な貸し出しアメニティ。親切で丁寧なスタッフ。日焼けサロン初めての方大歓迎。コラーゲンマシン完備。女性スタッフ出勤。女性客大歓迎。','summary' => '渋谷の日焼けサロンなら人気のザ・サンラウンジがおすすめ！
安心できる癒しのサービスと充実した設備の日焼けサロンです。
渋谷周辺で日焼けサロンをお探しの方は是非ザ・サンラウンジへ！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～26:00', 'close_day' => '', 'area_code' => 4105, 'address' => '東京都渋谷区宇田川町31-4 シノダビル4F', 'near_st' => '渋谷駅', 'load_navi' => '各線渋谷駅から徒歩7分（宇田川交番すぐ、ゲームセンター向かい、ブックオフ渋谷センター街店、よしもと∞ホール近く）', 'tel' => '03-3477-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://sunsun.asia/', 'kodawari' => '深夜まで営業／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／コラーゲンマシーンあり／初回割引あり／学割あり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '三軒茶屋店', 'kana_name'=>'さんげんちゃやてん', 'catch_msg'=>'手ぶらで来店可能。ジェル・シャワー・タオル・アフターローション全て無料！強力マシン多数導入','summary' => '東急田園都市線・三軒茶屋駅より徒歩2分の好立地。
世田谷・渋谷・目黒エリア最安値！上級マシンを多数取り揃えておりますので、
満足度もナンバーワンのハイクオリティパフォーマンスを提供します！
ドイツのソルトロン社製マシンを使い、自然な焼き色に仕上がります！
超お得なキャンペーンも多数揃えていますので、
ザ・サンラウンジ三軒茶屋店へ是非、お越しください！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～23:00／最終受付時間22:10', 'close_day' => '', 'area_code' => 4106, 'address' => '東京都世田谷区三軒茶屋1-36-3 三茶108ビル 3F', 'near_st' => '三軒茶屋駅', 'load_navi' => '三軒茶屋駅より徒歩2分', 'tel' => '03-3411-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge-sangenjaya.com/', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／マシーン種類豊富／格安サロン', 'customers' => '','min_price' => 1100 ),
array('company_id'=>89,'name'=> '久喜店', 'kana_name'=>'くきてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4302, 'address' => '久喜市中央2-2-6 イオリビル3Ｆ', 'near_st' => '', 'load_navi' => '', 'tel' => '0480-21-1696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '大宮店', 'kana_name'=>'おおみやてん', 'catch_msg'=>'一戸建てが丸々日焼けサロンです。目立つのですぐに分かると思います。','summary' => '2016年最新モデルの日焼けマシンを続々導入中！
大人気新型“BLACK PASSION”は限定3台導入！
最上級機種、AFFINITY800は限定2台導入！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／月～金11:00～26:00／土日・祝日10:00～26:00／／冬期営業時間／金11:00～26:00／土10:00～26:00／最終受付時間25:00／日・祝日10:00～25:00／月～木11:00～25:00／最終受付時間24:00', 'close_day' => '', 'area_code' => 4301, 'address' => 'さいたま市大宮区桜木町1-268', 'near_st' => '大宮駅', 'load_navi' => 'JR大宮駅西口降りて、線路沿いに与野方面に歩いて、徒歩5分
駿台予備校斜め向い、スクール21横の一軒家です。', 'tel' => '048-641-8989', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/omiya.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業／格安サロン', 'customers' => '','min_price' => 1100 ),
array('company_id'=>89,'name'=> '浦和店', 'kana_name'=>'うらわてん', 'catch_msg'=>'全マシン終日早割り料金キャンペーン実施中!!格安にてご提供中','summary' => 'サンラウンジ直営店の中でも数多くのマシン品揃えです。
ゆったりとした店内に明るいクルーが皆様をお待ちしております。
場所は、伊勢丹裏です。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '金11:00～25:00／土10:00～25:00／最終受付時間24:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4301, 'address' => 'さいたま市浦和区高砂2丁目6-22 小泉ビル2F', 'near_st' => '浦和駅', 'load_navi' => 'JR浦和駅下車、西口より徒歩1分　伊勢丹裏', 'tel' => '048-830-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/urawa.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '春日部店', 'kana_name'=>'かすかべてん', 'catch_msg'=>'高級機種、開店～18時まで￥500割引キャンペーン実施中!!','summary' => '■近隣パーキング多数有！
■高級機種、開店～18時まで￥500割引キャンペーン実施中!!','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '金11:00～25:00／土10:00～25:00／最終受付時間24:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4302, 'address' => '春日部市粕壁2-2-4 1F', 'near_st' => '春日部駅', 'load_navi' => '東武線春日部駅下車、東口より徒歩3分。
黄色の看板が目印です。', 'tel' => '048-760-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/kasukabe.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '蕨店', 'kana_name'=>'わらびてん', 'catch_msg'=>'■高級機種、開店～18時まで500円割引キャンペーン実施中!!','summary' => '街道沿いの一戸建てを、丸々日焼けサロンです。
大きなお店で14台のマシンがお客様をお待ちしています。
■顔焼き2016年モデル“Crazy Lemon”
日本初登場！ハンドタンナー機能搭載！ ','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／日～木・祝日10:00～26:00／4・5月の金土・祝前日10:00～26:00／最終受付時間25:00／6～8月の金土・祝前日10:00～27:00／最終受付時間26:00／／冬期営業時間／日～木・祝日10:00～25:00／最終受付時間24:00／金土・祝前日10:00～26:00／最終受付時間25:00', 'close_day' => '', 'area_code' => 4301, 'address' => '川口市芝新町14-10', 'near_st' => '蕨駅', 'load_navi' => 'JR蕨駅下車、東口より徒歩5分', 'tel' => '048-262-8989', 'machine_num' => '14', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/warabi.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業／格安サロン', 'customers' => '','min_price' => 1100 ),
array('company_id'=>89,'name'=> '草加店', 'kana_name'=>'そうかてん', 'catch_msg'=>'高級機種、開店～18時まで500円割引キャンペーン実施中!!','summary' => 'サンラウンジ直営店の中でも数多くのマシン品揃えです。
ゆったりとした店内に明るいクルーが皆様をお待ちしております。
常時最新マシン導入店！！
草加店はサンラウンジの中でも老舗店舗です。明るいスタッフがお迎えします。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '金11:00～25:00／土10:00～25:00／最終受付時間24:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4302, 'address' => '埼玉県草加市住吉1-2-24　日進ビル2階', 'near_st' => '草加駅', 'load_navi' => '東武伊勢崎「草加駅」下車、東口より徒歩3分', 'tel' => '048-921-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/souka.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業／格安サロン', 'customers' => '','min_price' => 1100 ),
array('company_id'=>89,'name'=> '新越谷店', 'kana_name'=>'しんこしがやてん', 'catch_msg'=>'■高級機種、開店～18時まで¥500割引キャンペーン実施中!!','summary' => 'サンラウンジ直営店の中でも数多くのマシン品揃えです。
ゆったりとした店内に明るいクルーが皆様をお待ちしております。
常時最新マシン導入店！！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／日～木・祝日10:00～26:00／4・5月の金土・祝前日10:00～26:00／最終受付時間25:00／6～8月の金土・祝前日10:00～27:00／最終受付時間26:00／／冬期営業時間／日～木・祝日10:00～25:00／最終受付時間24:00／金土・祝前日10:00～26:00／最終受付時間25:00', 'close_day' => '', 'area_code' => 4302, 'address' => '越谷市南越谷4丁目6-8-102', 'near_st' => '新越谷駅', 'load_navi' => '東武伊勢崎「新越谷駅」・JR武蔵野線「南越谷」下車、西口より徒歩3分', 'tel' => '048-987-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/shinkoshigaya.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業／格安サロン', 'customers' => '','min_price' => 1100 ),
array('company_id'=>89,'name'=> '志木店', 'kana_name'=>'しきてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4303, 'address' => '新座市東北2-31-6-4A', 'near_st' => '志木駅', 'load_navi' => '', 'tel' => '048-487-4196', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '川越店', 'kana_name'=>'かわごえてん', 'catch_msg'=>'','summary' => '店内は全体木目調で落ち着いた雰囲気です。
路面店でカウンターの様子も外から見えますので、初めての方でも気楽にご来店ください。
ドレッサーの数が豊富なので、女性のお客様にもオススメです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／日～木・祝日10:00～26:00／4・5月の金土・祝前日10:00～26:00／最終受付時間25:00／6～8月の金土・祝前日10:00～27:00／最終受付時間26:00／／冬期営業時間／日～木・祝日10:00～25:00／最終受付時間24:00／金土・祝前日10:00～26:00／最終受付時間25:00', 'close_day' => '', 'area_code' => 4303, 'address' => '川越市脇田本町7-9 中村ビル1F', 'near_st' => '川越駅', 'load_navi' => 'JR埼京線「川越駅」もしくは東武線東上線「川越駅」下車、西口より徒歩5分', 'tel' => '049-241-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/kawagoe.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業／格安サロン', 'customers' => '','min_price' => 1100 ),
array('company_id'=>89,'name'=> '大和店', 'kana_name'=>'やまとてん', 'catch_msg'=>'大和駅より徒歩1分の好立地','summary' => '大和駅より徒歩1分の好立地','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '金11:00～25:00／土10:00～25:00／最終受付時間24:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4206, 'address' => '大和市大和南2-1-1ヤマト中央ビル201', 'near_st' => '大和駅', 'load_navi' => '小田急江ノ島線 大和駅 南口徒歩1分', 'tel' => '046-260-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/yamato.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '川崎店', 'kana_name'=>'かわさきてん', 'catch_msg'=>'川崎駅より徒歩3分の好立地','summary' => 'Ergoline Red Passion350サンラウンジオリジナル機種初導入
今秋　ザ・サンラウンジ川崎店マシンフルリニューアル。Ergolineとサンラウンジの 共同開発新型Red Passion350を日本初導入しました。 是非、川崎にお立ち寄りの際はお試し下さい。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '金11:00～25:00／土10:00～25:00／最終受付時間24:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4203, 'address' => '川崎市幸区中幸町4-50 金沢ビル2F', 'near_st' => '川崎駅', 'load_navi' => '川崎駅　西口より徒歩3分', 'tel' => '044-520-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/kawasaki.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '武蔵小杉店', 'kana_name'=>'むさしこすぎてん', 'catch_msg'=>'武蔵小杉駅、新丸子駅両駅利用可能','summary' => '武蔵小杉駅、新丸子駅両駅利用可能','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '金11:00～25:00／土10:00～25:00／最終受付時間24:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4203, 'address' => '川崎市中原区新丸子町915 サミットビル2F', 'near_st' => '武蔵小杉駅、新丸子駅', 'load_navi' => '武蔵小杉駅、新丸子駅より徒歩3分', 'tel' => '044-711-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/musashikosugi.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '横浜三ツ境店', 'kana_name'=>'みつきょうてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4202, 'address' => '横浜市瀬谷区三ツ境23-30 イシガキビル1F', 'near_st' => '', 'load_navi' => '', 'tel' => '045-361-9696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '上大岡店', 'kana_name'=>'かみおおおかてん', 'catch_msg'=>'新型マシーン続々導入中。おしゃれな店内','summary' => '上大岡駅から1番近い日焼けサロン6/1OPEN !!
最強マシン多数、個室シャワー完備ルームもあります。
オープニングキャンペーン実施しておりますので、是非ご来店下さい','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／月～金11:00～26:00／土日・祝日10:00～26:00／／冬期営業時間／金11:00～25:00／土10:00～25:00／最終受付時間24:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4201, 'address' => '横浜市港南区上大岡西2-9-15　サンローゼ上大岡B1F', 'near_st' => '上大岡駅', 'load_navi' => '上大岡駅から徒歩3分', 'tel' => '045-842-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/kamiooka.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業／マシーン種類豊富', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '本厚木店', 'kana_name'=>'ほんあつぎてん', 'catch_msg'=>'駅徒歩2分。近隣駐車場有。きれいな店内でお待ちしております。','summary' => '2013年、リニューアルOpen致しました！
マシンもお店も新しくなりました★
小田急本厚木駅南口より徒歩2分！近隣パーキング多数有！
※時間帯によって大変混み合いますので、事前にお電話でのご予約をｵｽｽﾒ致します！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／日～木・祝日10:00～26:00／4・5月の金土・祝前日10:00～26:00／最終受付時間25:00／6～8月の金土・祝前日10:00～27:00／最終受付時間26:00／／冬期営業時間／日～木・祝日10:00～25:00／最終受付時間24:00／金土・祝前日10:00～26:00／最終受付時間25:00', 'close_day' => '', 'area_code' => 4206, 'address' => '厚木市旭町1-24-17浅丘ビル3Ｆ', 'near_st' => '本厚木駅', 'load_navi' => '小田急本厚木駅　南口より徒歩2分', 'tel' => '046-230-9696', 'machine_num' => '', 'parking' => '近隣に駐車場あり', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/honatugi.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '橋本店', 'kana_name'=>'はしもとてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4206, 'address' => '相模原市橋本6丁目19-5', 'near_st' => '', 'load_navi' => '', 'tel' => '042-770-3996', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '向ヶ丘遊園店', 'kana_name'=>'むこうがおかゆうえんてん', 'catch_msg'=>'全マシン最新機種導入！
新型インスピレーション600　日本初導入
PASSSION LIMITED EDITION　導入決定','summary' => '2014年11月11日（火）OPEN
向ヶ丘遊園駅、南口から徒歩2分！
新型インスピレーション600　日本初上陸！
ＰＡＳＳＩＯＮ　ＬＩＭＩＴＥＤ　ＥＤＩＴＩＯＮ　導入！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／日～木・祝日11:00～24:00／最終受付時間23:00／金土・祝前日11:00～25:00／最終受付時間23:00／／冬期営業時間／11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4203, 'address' => '神奈川県川崎市多摩区登戸2705-1 まるやビル2F', 'near_st' => '向ヶ丘遊園駅', 'load_navi' => '小田急線 向ヶ丘遊園駅南口から徒歩2分', 'tel' => '044-932-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/mukogaoka.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '高津溝ノ口店', 'kana_name'=>'たかつみぞのくちてん', 'catch_msg'=>'2015年ＯＰＥＮの新店舗。近隣駐車場あり。','summary' => '■2015年OPENの新店舗！
高津駅から徒歩30秒！溝ノ口駅から徒歩5分！
府中街道沿い、近隣パーキング多数。

全マシン、最新機種設置しております！
■最新機種“Inspiration 600”
⇒フェイス4面！強力ランプ搭載の上級マシン！

■スタンディングタイプ“ESSENSE”
⇒脇腹など、全身キレイに焼けます！

■“RED PASSION”
⇒初級ですが、かなり焼けると大好評のマシンです！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／日～木・祝日11:00～24:00／最終受付時間23:00／金土・祝前日11:00～25:00／最終受付時間23:00／／冬期営業時間／11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4203, 'address' => '神奈川県川崎市高津区二子5-3-3 皆川ビル2F', 'near_st' => '高津駅、溝の口駅', 'load_navi' => '高津駅から徒歩30秒！溝の口駅から徒歩5分！
府中街道沿い。', 'tel' => '044-811-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/takatsumizonoguti.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '柏店', 'kana_name'=>'かしわてん', 'catch_msg'=>'最新マシン多数導入で、大幅リニューアル致しました！','summary' => '最新マシン多数導入で、大幅リニューアル致しました！
■Inspiration 600
⇒フェイス4面！強力ランプ搭載の上級マシン！

■BLACK PASSION
⇒2016年最新モデル！従来のパッションより、ランプ本数＆ワット数がパワーアップ。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／金11:00～26:00／土10:00～26:00／最終受付時間25:00／日・祝日10:00～25:00／月～木11:00～25:00／最終受付時間24:00／／冬期営業時間／金11:00～26:00／土10:00～26:00／最終受付時間25:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4402, 'address' => '柏市柏2-5-9-2F 202号', 'near_st' => '柏駅', 'load_navi' => '柏駅東口から徒歩5分', 'tel' => '047-163-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/kashiwa.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '船橋店', 'kana_name'=>'ふなばしてん', 'catch_msg'=>'船橋駅北口から徒歩3分の好立地です。','summary' => '■最新機種“RED Passion”
こちらの最新機種は千葉エリアで船橋店でしか、体験出来ません！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '金11:00～25:00／土10:00～25:00／最終受付時間24:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4403, 'address' => '船橋市本町7-4-14-3F', 'near_st' => '船橋駅', 'load_navi' => '船橋駅北口から徒歩3分', 'tel' => '047-421-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/funabashi.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '稲毛店', 'kana_name'=>'いなげてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4401, 'address' => '千葉市稲毛区小仲台2丁目8-20', 'near_st' => '稲毛駅', 'load_navi' => '稲毛駅から徒歩2分', 'tel' => '043-251-9696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '松戸店', 'kana_name'=>'まつどてん', 'catch_msg'=>'松戸駅 西口 ダイエー並びの路面店です。','summary' => 'サンラウンジ限定マシン
AFFINITY 800 LIMITED EDITIONを限定2台設置中！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～24:00', 'close_day' => '', 'area_code' => 4402, 'address' => '千葉県松戸市根本2-2', 'near_st' => '松戸駅', 'load_navi' => '松戸駅 西口 ダイエー並びの路面店です。徒歩3分', 'tel' => '047-394-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/matsudo.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '宇都宮店', 'kana_name'=>'うつのみやてん', 'catch_msg'=>'日本に数台ラウンジだけが導入のチリパワー導入しました！！
最新機種アフィニテイも更に2台導入しました！！','summary' => '日本に数台ラウンジだけが導入のチリパワー導入しました！！
最新機種アフィニテイも更に2台導入しました！！
これからも、サンラウンジ宇都宮店をよろしくお願いします！！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／金11:00～26:00／土10:00～26:00／最終受付時間25:00／日・祝日10:00～25:00／月～木11:00～25:00／最終受付時間24:00／／冬期営業時間／金11:00～26:00／土10:00～26:00／最終受付時間25:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4601, 'address' => '宇都宮市江野町2-13 鮨常ビル2・3F', 'near_st' => '宇都宮駅', 'load_navi' => 'JR「宇都宮駅」下車、徒歩10分
東武「宇都宮駅」下車、徒歩2分', 'tel' => '028-614-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/utunomiya.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業／マシーン種類豊富／強力マシーンあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '小山店', 'kana_name'=>'おやまてん', 'catch_msg'=>'小山駅目の前の好立地です。お気軽にお立ち寄り下さい。','summary' => '小山駅目の前の好立地です。お気軽にお立ち寄り下さい。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／金11:00～26:00／土10:00～26:00／最終受付時間25:00／日・祝日10:00～25:00／月～木11:00～25:00／最終受付時間24:00／／冬期営業時間／金11:00～26:00／土10:00～26:00／最終受付時間25:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4601, 'address' => '小山市城山町3-2-17 友井ビル4F', 'near_st' => '小山駅', 'load_navi' => 'JR小山駅　西口目の前の4Fです。', 'tel' => '0285-24-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/oyama.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '水戸店', 'kana_name'=>'みとてん', 'catch_msg'=>'茨城エリア最安値で御提供中です。','summary' => '最新機種RED PASSIONを導入致しました！
茨城エリア最安値で御提供中です。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／金11:00～26:00／土10:00～26:00／最終受付時間25:00／日・祝日10:00～25:00／月～木11:00～25:00／最終受付時間24:00／／冬期営業時間／金11:00～26:00／土10:00～26:00／最終受付時間25:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4701, 'address' => '水戸市南町1-3-4 田所ビル1F', 'near_st' => '水戸駅', 'load_navi' => 'JR常磐線「水戸駅」下車、北口より徒歩5分', 'tel' => '029-228-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/mito.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> 'つくば店', 'kana_name'=>'つくばてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4701, 'address' => 'つくば市吾妻3丁目13-9-A', 'near_st' => '', 'load_navi' => '', 'tel' => '0298-50-4989', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '高崎店', 'kana_name'=>'たかさきてん', 'catch_msg'=>'入会金1,000円、20分1,000円～Ｐ完備・完全個室','summary' => '高崎の日焼けサロンなら人気のザ・サンラウンジがおすすめ！
安心できる癒しのサービスと充実した設備の日焼けサロンです。
高崎周辺で日焼けサロンをお探しの方は是非ザ・サンラウンジへ！
■完全個室ドリンク付きで1,000円から日焼けができる店舗','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～23:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4501, 'address' => '群馬県高崎市江木町980-1', 'near_st' => '', 'load_navi' => '高崎環状線上大類町より徒歩3分（ブックオフ高崎上大類店先）', 'tel' => '0273-20-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://globalsun.jp/?page_id=116', 'kodawari' => '完全個室／ドリンクサービスあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> 'サンサン太田店', 'kana_name'=>'さんさんおおたてん', 'catch_msg'=>'入会金1,000円、30分1,000円～完全個室アリ','summary' => '太田の日焼けサロンなら人気のザ・サンラウンジがおすすめ！
安心できる癒しのサービスと充実した設備の日焼けサロンです。
太田周辺で日焼けサロンをお探しの方は是非ザ・サンラウンジへ！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～23:00', 'close_day' => '', 'area_code' => 4501, 'address' => '群馬県太田市東本町22-53', 'near_st' => '太田駅', 'load_navi' => '東武伊勢崎線太田駅徒歩3分（北口を出てロータリー左側に進み、古河街道太田駅入口の手前）', 'tel' => '0276-25-8989', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://globalsun.jp/?page_id=118', 'kodawari' => '駅近／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '新潟店', 'kana_name'=>'にいがたてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／13:00～ 24:00／最終受付時間23:50／／冬季営業時間／10:00 ～ 24:00／最終受付時間23:50', 'close_day' => '', 'area_code' => 5101, 'address' => '新潟市弁天2-1-25 安本ビル4F', 'near_st' => '新潟駅', 'load_navi' => 'JR「新潟駅」下車、徒歩5分（第四銀行裏）', 'tel' => '025-248-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/niigata.html', 'kodawari' => '駅近／手ぶらＯＫ／深夜まで営業／強力マシーンあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '長野店', 'kana_name'=>'ながのてん', 'catch_msg'=>'リニューアルオープンしたばかりのきれいな店内です。長野店は女性の方の来客が多く、1人でも安心してご利用頂けます。','summary' => '県下最大のマシンラインナップ、最新マシンを取り揃えてます。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～25:00／最終受付時間23:30', 'close_day' => '', 'area_code' => 5201, 'address' => '長野市南千歳町878-5 グランヴィル南千歳2番館3F', 'near_st' => '長野駅', 'load_navi' => 'JR「長野駅」下車、善光寺口より徒歩5分
（南千歳町の魚民の横のビル3F）', 'tel' => '026-223-2200', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/nagano.html', 'kodawari' => '駅近／手ぶらＯＫ／深夜まで営業／マシーン種類豊富／強力マシーンあり／お得な回数券・プリペイドカードあり／学割あり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '松本店', 'kana_name'=>'まつもとてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 5201, 'address' => '松本市深志1丁目4-10', 'near_st' => '', 'load_navi' => '', 'tel' => '0263-36-9600', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '佐久店', 'kana_name'=>'さくてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～23:00／最終受付時間22:00', 'close_day' => '', 'area_code' => 5201, 'address' => '佐久市岩村田北1丁目9-15', 'near_st' => '', 'load_navi' => '', 'tel' => '026-788-8990', 'machine_num' => '7', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/saku.html', 'kodawari' => 'お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '伊那店', 'kana_name'=>'いなてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 5201, 'address' => '伊那市御園132-2 青山ビル1F', 'near_st' => '', 'load_navi' => '', 'tel' => '0265-98-0667', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => 'お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '甲府店', 'kana_name'=>'こうふてん', 'catch_msg'=>'日本最大級総敷地面積200平方メートル、 日焼けマシン20台設置の大型日焼けビル！！','summary' => '日本最大級総敷地面積200平方メートル、
日焼けマシン20台設置の大型日焼けビル！！
※料金大幅値下げ終日1000円～スタート！！
※「朝得」「駐得」「学得」FACE15分無料！！
※会員登録費無料サービスあります！！
その他各種キャンペーンも随時行っております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00', 'close_day' => '', 'area_code' => 5301, 'address' => '甲府市丸の内1-16-13 日焼けビル', 'near_st' => '甲府駅', 'load_navi' => 'JR中央線「甲府駅」南口下車、徒歩5分', 'tel' => '055-232-8989', 'machine_num' => '20', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/kofu.html', 'kodawari' => '駅近／手ぶらＯＫ／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／マシーン種類豊富／学割あり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '金山店', 'kana_name'=>'かなやまてん', 'catch_msg'=>'明るく丁寧なスタッフがお待ちしています。
完全個室完備の、お店に是非一度ご来店下さい！','summary' => '明るく丁寧なスタッフがお待ちしています。
完全個室完備の、お店に是非一度ご来店下さい！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '金11:00～25:00／土10:00～25:00／最終受付時間24:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 6201, 'address' => '名古屋市中区金山4丁目3-1 つちやビル2Ｆ', 'near_st' => '金山駅', 'load_navi' => '金山駅下車、徒歩5分', 'tel' => '052-331-1696', 'machine_num' => '8', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/kanayama.html', 'kodawari' => '駅近／手ぶらＯＫ／完全個室', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '名駅太閤通店', 'kana_name'=>'めいえきたいこうどおりてん', 'catch_msg'=>'名古屋駅から徒歩5分、太閤通りの日焼けサロン。激安料金で最新・高性能な日焼けマシーンを地域最大数完備。深夜まで営業中で、仕事帰りの来店も歓迎。シャワー完備＆完全個室、店内・マシーンが清潔なのが特徴！快適に日焼けを楽しんで頂く為に、高級インテリアも設置！','summary' => '名古屋駅から徒歩5分、太閤通りの日焼けサロン。激安料金で最新・高性能な日焼けマシーンを地域最大数完備。深夜まで営業中で、仕事帰りの来店も歓迎。シャワー完備＆完全個室、店内・マシーンが清潔なのが特徴！快適に日焼けを楽しんで頂く為に、高級インテリアも設置！
【名古屋駅エリア最安値】
お得ポイント1　他店では中級マシンとして扱われるエルゴライン　パッション300Ｓ TwinPower(7800ｗ)が　30min　￥1300～ご利用頂けます。(OPEN～18:00)　
お得ポイント2　朝とく・夜とくキャンペーンで最強顔焼きマシンが15分無料でご利用頂けます。
お得ポイント3　プリペイドカード購入でさらにお得！

【地域最大のマシン台数】
日焼けサロンの未経験者や初心者から上級者までが満足して頂ける最新タンニングマシンを完備。名古屋駅周辺で、タンニングマシン台数Ｎｏ1のお店が、ザ・サンラウンジ名駅太閤通店です。
【事前準備不要！ご気軽に手ぶらでご来店可能】
ジェル、シャワー、タオルが全て無料！日焼けに必要なものはすべて揃っていますので、仕事帰りや空いた時間でも、お気軽に手ぶらでご来店頂いて大丈夫です。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '日曜～木曜・祝日10:00～24:00／金曜・土曜・祝前日10:00～1:00', 'close_day' => '', 'area_code' => 6201, 'address' => '名古屋市中村区太閤3-2-12 伊東ビル3F', 'near_st' => '名古屋駅', 'load_navi' => '名古屋駅から徒歩5分', 'tel' => '052-452-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://sunlounge-nagoya.com/', 'kodawari' => '駅近／手ぶらＯＫ／深夜まで営業／お得な回数券・プリペイドカードあり／朝割引あり／夜割引あり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '名駅西口店', 'kana_name'=>'めいえきにしぐちてん', 'catch_msg'=>'シャワー付き完全個室
日焼けマニアのマネージャーがこだわりの蛍光管を独自輸入!!
ザ・サンラウンジ名駅西口本店の最新マシンは1か月に1～2回通う程度できれいな小麦色を保てるハイグレードマシンです！
オールタイム均一料金','summary' => '名古屋駅西口から徒歩4分の
シャワー付完全個室日焼けサロンです
女性や仕事中のサラリーマン、TATOOの方も
こっそり、安心してご利用できます★

日焼けサロンが初めての方は
スタッフがご説明致しますのでお申し出ください

日サロ歴20年以上の当店女性マネージャーが
こだわってマシン、蛍光管を選んでおります
日焼けへのこだわり方は半端ではないので
他店との焼け方の違い、お安さを比べてください

※当店ではプリペードカードはご利用いただけません。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～24:00／木～土曜日　11:00～26:00', 'close_day' => '', 'area_code' => 6201, 'address' => '愛知県名古屋市中村区則武1-8-6', 'near_st' => '名古屋駅', 'load_navi' => '名古屋駅西口(太閤通口から徒歩3分)',
'tel' => '052-451-9696', 'machine_num' => '', 'parking' => '近隣にコインパーキングが多数あります
提携しておりませんが下記の金額が最安値です
20時までは、60分200円
20時からは、60分100円
週末は込み合いますのでご注意ください', 'site_url' => 'http://758hiyake.com/', 'kodawari' => '駅近／完全個室／深夜まで営業／', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '岐阜店', 'kana_name'=>'ぎふてん', 'catch_msg'=>'岐阜店大盛況中！オープニングキャンペーン継続中
1000円～リーズナブルな日焼けを提供中！','summary' => '岐阜店大盛況中！オープニングキャンペーン継続中
1000円～リーズナブルな日焼けを提供中！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '金・土　10:00～25:00／最終受付時間24:00／日・祝日10:00～24:00／月～木11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 6301, 'address' => '岐阜市玉宮町2-17 エーキューブ2F', 'near_st' => '名鉄岐阜駅、岐阜駅', 'load_navi' => '名鉄岐阜駅より徒歩2分', 'tel' => '058-266-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/gifu.html', 'kodawari' => '駅近／深夜まで営業／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> 'カロカロ多治見店', 'kana_name'=>'かろかろたじみてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 6301, 'address' => '多治見市白山町1-15 サラムコロビル1F', 'near_st' => '', 'load_navi' => '', 'tel' => '0572-23-4989', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> 'カロカロ大垣店', 'kana_name'=>'かろかろおおがきてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 6301, 'address' => '大垣市高屋町3-3', 'near_st' => '', 'load_navi' => '', 'tel' => '0584-82-1696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '松坂店', 'kana_name'=>'まつさかてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 6401, 'address' => '松坂市船江町1392?3　松坂マーム内3階', 'near_st' => '', 'load_navi' => '', 'tel' => '0598-53-2583', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '静岡店', 'kana_name'=>'しずおかてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～23:00', 'close_day' => '', 'area_code' => 6102, 'address' => '静岡市葵区紺屋町1-3 岩久本店ビル5F', 'near_st' => '', 'load_navi' => '', 'tel' => '054-221-9689', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/shizuoka.html', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '梅田 HEP-URA店', 'kana_name'=>'うめだてん', 'catch_msg'=>'大阪・梅田で日焼けサロンをお探しなら、『ザ・サンラウンジ』梅田 HEP裏店をご利用ください。
完全個室シャワー併設
アフターケア用品は全て無料','summary' => 'シェアNo.1 ドイツJKグループのマシンを採用
アルファサングループではEUの厳しい基準に合格した世界シェアNo.1 JKグループのマシンを、全てのベッドマシン、縦型マシンに採用しています。さらに全てのマシンは毎回アルコールにて消毒しております。（※フェイスマシンには一部イタリアメーカーを使用しております。）
メーカー純正品と最大手フィリップス社の電球
マシンだけではなく、ライトも非常に重要です。
アルファサンでは安全性の高い、世界シェアNo.1のフィリップス社とメーカー純正ライトを使用し、メーカー推奨時間よりも早く交換しております。
アルファサンオリジナルのアフターケア用品
日焼け後のお肌のお手入れのための当社が専用に開発した、
各種アメニティをご用意しております。
これらのアフターケア用品は全て無料でご利用いただけます。
また、すべての店舗にパウダーブースをご用意しております。
ポイントが”貯まる”お得な会員カード
会員カードはお得なポイントカードになっております。
1000円のご利用で10ポイント。80ポイントで次回500円引きとなる、利用しやすいポイント制になっております。他にもタイムサービスやポイント2倍のキャンペーン等もございます。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～22:30／最終受付時間21:45', 'close_day' => '', 'area_code' => 7101, 'address' => '大阪市北区角田町1-10', 'near_st' => '梅田駅、阪急梅田駅、大阪駅', 'load_navi' => '阪急梅田駅徒歩5分 HEP-FIVE裏口前', 'tel' => '06-6367-3689', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://hepura.hi-ya-ke.com/', 'kodawari' => '駅近／完全個室／マシーン種類豊富／強力マシーンあり／朝割引あり／格安サロン', 'customers' => '','min_price' => 1400 ),
array('company_id'=>89,'name'=> '京橋店', 'kana_name'=>'きょうばしてん', 'catch_msg'=>'大阪・京橋で日焼けサロンをお探しなら、『ザ・サンラウンジ』京橋店をご利用ください。
アフターケア用品は全て無料','summary' => 'シェアNo.1 ドイツJKグループのマシンを採用
アルファサングループではEUの厳しい基準に合格した世界シェアNo.1 JKグループのマシンを、全てのベッドマシン、縦型マシンに採用しています。さらに全てのマシンは毎回アルコールにて消毒しております。（※フェイスマシンには一部イタリアメーカーを使用しております。）
メーカー純正品と最大手フィリップス社の電球
マシンだけではなく、ライトも非常に重要です。
アルファサンでは安全性の高い、世界シェアNo.1のフィリップス社とメーカー純正ライトを使用し、メーカー推奨時間よりも早く交換しております。
アルファサンオリジナルのアフターケア用品
日焼け後のお肌のお手入れのための当社が専用に開発した、
各種アメニティをご用意しております。
これらのアフターケア用品は全て無料でご利用いただけます。
また、すべての店舗にパウダーブースをご用意しております。
ポイントが”貯まる”お得な会員カード
会員カードはお得なポイントカードになっております。
1000円のご利用で10ポイント。80ポイントで次回500円引きとなる、利用しやすいポイント制になっております。他にもタイムサービスやポイント2倍のキャンペーン等もございます。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～22:30／最終受付時間21:45／日祝日11:00～22:15／最終受付時間21:30', 'close_day' => '', 'area_code' => 7101, 'address' => '大阪市都島区東野田町2-9-15-3F', 'near_st' => '京橋駅', 'load_navi' => '京橋駅より徒歩2分', 'tel' => '06-6354-0105', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://kyobashi.hi-ya-ke.com/', 'kodawari' => '駅近／マシーン種類豊富／強力マシーンあり／朝割引あり／格安サロン', 'customers' => '','min_price' => 1300 ),
array('company_id'=>89,'name'=> '阿倍野店', 'kana_name'=>'あべのてん', 'catch_msg'=>'大阪・天王寺で日焼けサロンをお探しなら、『ザ・サンラウンジ』阿倍野(天王寺)店をご利用ください。
アフターケア用品は全て無料','summary' => 'シェアNo.1 ドイツJKグループのマシンを採用
アルファサングループではEUの厳しい基準に合格した世界シェアNo.1 JKグループのマシンを、全てのベッドマシン、縦型マシンに採用しています。さらに全てのマシンは毎回アルコールにて消毒しております。（※フェイスマシンには一部イタリアメーカーを使用しております。）
メーカー純正品と最大手フィリップス社の電球
マシンだけではなく、ライトも非常に重要です。
アルファサンでは安全性の高い、世界シェアNo.1のフィリップス社とメーカー純正ライトを使用し、メーカー推奨時間よりも早く交換しております。
アルファサンオリジナルのアフターケア用品
日焼け後のお肌のお手入れのための当社が専用に開発した、
各種アメニティをご用意しております。
これらのアフターケア用品は全て無料でご利用いただけます。
また、すべての店舗にパウダーブースをご用意しております。
ポイントが”貯まる”お得な会員カード
会員カードはお得なポイントカードになっております。
1000円のご利用で10ポイント。80ポイントで次回500円引きとなる、利用しやすいポイント制になっております。他にもタイムサービスやポイント2倍のキャンペーン等もございます。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～23:00／最終受付時間22:15／日祝日11:00～22:45／最終受付時間22:00', 'close_day' => '', 'area_code' => 7102, 'address' => '大阪市阿倍野区阿倍野筋1-3-20-3F', 'near_st' => '天王寺駅、大阪阿部野橋駅', 'load_navi' => '天王寺駅より徒歩1分', 'tel' => '06-6624-8788', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://abeno.hi-ya-ke.com/', 'kodawari' => '駅近／マシーン種類豊富／朝割引あり／格安サロン', 'customers' => '','min_price' => 1400 ),
array('company_id'=>89,'name'=> '十三店', 'kana_name'=>'じゅうそうてん', 'catch_msg'=>'大阪・十三で日焼けサロンをお探しなら、『ザ・サンラウンジ』十三店をご利用ください。
アフターケア用品は全て無料','summary' => 'シェアNo.1 ドイツJKグループのマシンを採用
アルファサングループではEUの厳しい基準に合格した世界シェアNo.1 JKグループのマシンを、全てのベッドマシン、縦型マシンに採用しています。さらに全てのマシンは毎回アルコールにて消毒しております。（※フェイスマシンには一部イタリアメーカーを使用しております。）
メーカー純正品と最大手フィリップス社の電球
マシンだけではなく、ライトも非常に重要です。
アルファサンでは安全性の高い、世界シェアNo.1のフィリップス社とメーカー純正ライトを使用し、メーカー推奨時間よりも早く交換しております。
アルファサンオリジナルのアフターケア用品
日焼け後のお肌のお手入れのための当社が専用に開発した、
各種アメニティをご用意しております。
これらのアフターケア用品は全て無料でご利用いただけます。
また、すべての店舗にパウダーブースをご用意しております。
ポイントが”貯まる”お得な会員カード
会員カードはお得なポイントカードになっております。
1000円のご利用で10ポイント。80ポイントで次回500円引きとなる、利用しやすいポイント制になっております。他にもタイムサービスやポイント2倍のキャンペーン等もございます。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '平日11:00～22:30／最終受付時間21:45／日祝11:00～22:15／最終受付時間21:30', 'close_day' => '', 'area_code' => 7101, 'address' => '大阪市淀川区十三本町1-1-11', 'near_st' => '阪急十三駅', 'load_navi' => '阪急十三駅西口改札より左手徒歩1分', 'tel' => '06-6889-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://jyuso.hi-ya-ke.com/', 'kodawari' => '駅近／マシーン種類豊富／朝割引あり／格安サロン', 'customers' => '','min_price' => 1400 ),
array('company_id'=>89,'name'=> '堺東店', 'kana_name'=>'さかいひがしてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 7103, 'address' => '堺市堺区中瓦町1丁目3-6 ENSHOビル1F', 'near_st' => '', 'load_navi' => '', 'tel' => '072-227-1696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '豊中庄内店', 'kana_name'=>'とよなかしょうないてん', 'catch_msg'=>'大阪・豊中庄内で日焼けサロンをお探しなら、『ザ・サンラウンジ』豊中庄内店をご利用ください。
完全個室シャワー併設
アフターケア用品は全て無料','summary' => 'シェアNo.1 ドイツJKグループのマシンを採用
アルファサングループではEUの厳しい基準に合格した世界シェアNo.1 JKグループのマシンを、全てのベッドマシン、縦型マシンに採用しています。さらに全てのマシンは毎回アルコールにて消毒しております。（※フェイスマシンには一部イタリアメーカーを使用しております。）
メーカー純正品と最大手フィリップス社の電球
マシンだけではなく、ライトも非常に重要です。
アルファサンでは安全性の高い、世界シェアNo.1のフィリップス社とメーカー純正ライトを使用し、メーカー推奨時間よりも早く交換しております。
アルファサンオリジナルのアフターケア用品
日焼け後のお肌のお手入れのための当社が専用に開発した、
各種アメニティをご用意しております。
これらのアフターケア用品は全て無料でご利用いただけます。
また、すべての店舗にパウダーブースをご用意しております。
ポイントが”貯まる”お得な会員カード
会員カードはお得なポイントカードになっております。
1000円のご利用で10ポイント。80ポイントで次回500円引きとなる、利用しやすいポイント制になっております。他にもタイムサービスやポイント2倍のキャンペーン等もございます。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 7105, 'address' => '豊中市庄内西町3-2-1-3F', 'near_st' => '庄内駅', 'load_navi' => '庄内駅より徒歩2分', 'tel' => '06-6336-8989', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://shonai.hi-ya-ke.com/', 'kodawari' => '駅近／マシーン種類豊富／朝割引あり／格安サロン', 'customers' => '','min_price' => 1300 ),
array('company_id'=>89,'name'=> '枚方店', 'kana_name'=>'ひらかたてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 7104, 'address' => '枚方市川原町13-20 第2クラウンマンション1F', 'near_st' => '', 'load_navi' => '', 'tel' => '072-846-1696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '茨木店', 'kana_name'=>'いばらきてん', 'catch_msg'=>'大阪・茨木で日焼けサロンをお探しなら、『ザ・サンラウンジ』茨木店をご利用ください。 ','summary' => 'シェアNo.1 ドイツJKグループのマシンを採用
アルファサングループではEUの厳しい基準に合格した世界シェアNo.1 JKグループのマシンを、全てのベッドマシン、縦型マシンに採用しています。さらに全てのマシンは毎回アルコールにて消毒しております。（※フェイスマシンには一部イタリアメーカーを使用しております。）
メーカー純正品と最大手フィリップス社の電球
マシンだけではなく、ライトも非常に重要です。
アルファサンでは安全性の高い、世界シェアNo.1のフィリップス社とメーカー純正ライトを使用し、メーカー推奨時間よりも早く交換しております。
アルファサンオリジナルのアフターケア用品
日焼け後のお肌のお手入れのための当社が専用に開発した、
各種アメニティをご用意しております。
これらのアフターケア用品は全て無料でご利用いただけます。
また、すべての店舗にパウダーブースをご用意しております。
ポイントが”貯まる”お得な会員カード
会員カードはお得なポイントカードになっております。
1000円のご利用で10ポイント。80ポイントで次回500円引きとなる、利用しやすいポイント制になっております。他にもタイムサービスやポイント2倍のキャンペーン等もございます。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 7105, 'address' => '茨木市双葉町3-20 石川ビル3F', 'near_st' => '茨木市駅', 'load_navi' => '阪急茨木市駅東口徒歩2分 マクドナルド正面ビル3F', 'tel' => '072-635-3666', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://ibaraki.hi-ya-ke.com/', 'kodawari' => '駅近／マシーン種類豊富／朝割引あり／格安サロン', 'customers' => '','min_price' => 1400 ),
array('company_id'=>89,'name'=> '寝屋川店', 'kana_name'=>'ねやがわてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 7104, 'address' => '寝屋川市早子町18-4 中村興文堂書店2F', 'near_st' => '', 'load_navi' => '', 'tel' => '072-820-1696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '守口店', 'kana_name'=>'もりぐちてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 7104, 'address' => '守口市本町1-3-3-5F', 'near_st' => '', 'load_navi' => '', 'tel' => '06-6996-3777', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '布施店', 'kana_name'=>'ふせてん', 'catch_msg'=>'布施駅より徒歩3分の好立地。','summary' => '布施駅より徒歩3分の好立地。
お気軽にお立ち寄りください','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間（6/1～8/31）10:00～29:00／最終受付時間28:00／日曜10:00～26:00／最終受付時間25:00／／冬期営業時間　10:00～26:00／最終受付時間25:00', 'close_day' => '', 'area_code' => 7104, 'address' => '東大阪市長堂2-4-18', 'near_st' => '布施駅', 'load_navi' => '布施駅より徒歩3分', 'tel' => '06-6618-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/fuse.html', 'kodawari' => '駅近／手ぶらＯＫ／お得な回数券・プリペイドカードあり／朝まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '八尾店', 'kana_name'=>'やおてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 7103, 'address' => '八尾市志紀町南1丁目30', 'near_st' => '', 'load_navi' => '', 'tel' => '072-948-9614', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '豊中駅前店', 'kana_name'=>'とよなかえきまえてん', 'catch_msg'=>'豊中駅より徒歩1分の好立地','summary' => '豊中駅より徒歩1分の好立地
お気軽にお立ち寄りください','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～23:00／最終受付時間22:15', 'close_day' => '火曜定休', 'area_code' => 7105, 'address' => '大阪府豊中市玉井町1-2-13 ゆたか第3ビル 301', 'near_st' => '豊中駅', 'load_navi' => '阪急宝塚線豊中駅北口七番出口、エトレとよなか方面出口より徒歩1分', 'tel' => '06-6858-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/toyonakaekimae.html', 'kodawari' => '駅近／手ぶらＯＫ／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '玉出店', 'kana_name'=>'たまでてん', 'catch_msg'=>'玉出駅より徒歩1分の好立地','summary' => '玉出駅より徒歩1分の好立地
お気軽にお立ち寄りください','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～23:00／最終受付時間22:15', 'close_day' => '火曜定休', 'area_code' => 7102, 'address' => '西成区玉出西2-6-6　ヒラヤマビル2Ｆ', 'near_st' => '玉出駅', 'load_navi' => '玉出駅より徒歩1分', 'tel' => '06-6661-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/tamade.html', 'kodawari' => '駅近／手ぶらＯＫ／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '泉大津店', 'kana_name'=>'いずみおおつてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 7103, 'address' => '大阪府泉大津市北豊中町3丁目2-13', 'near_st' => '信太山駅', 'load_navi' => 'JR阪和線　信太山駅より500M徒歩9分　国道26沿い店舗', 'tel' => '0725-43-9614', 'machine_num' => '', 'parking' => 'あり（9台）', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/izumiotu.html', 'kodawari' => '手ぶらＯＫ／マシーン種類豊富', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '京都河原町店', 'kana_name'=>'きょうとかわらまち', 'catch_msg'=>'青を基調とした店内','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～23:00／最終受付時間22:00／日祝10:00～22:00／最終受付時間21:00', 'close_day' => '', 'area_code' => 7201, 'address' => '京都市中京区河原町通三条下る大黒町71 木屋町ベストビル1F', 'near_st' => '三条駅', 'load_navi' => '京阪本線「三条駅」、阪急京都線「河原町駅」、地下鉄東西線「京都市役所前」下車、徒歩5分。または、市バス「河原町三条」下車すぐ（高瀬川の西沿い）', 'tel' => '075-221-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/kawaramachi.html', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '京都西院店', 'kana_name'=>'きょうとさいいんてん', 'catch_msg'=>'京都・西院で日焼けサロンをお探しなら、『ザ・サンラウンジ』京都西院店をご利用ください。
完全個室シャワー併設
アフターケア用品は全て無料','summary' => 'シェアNo.1 ドイツJKグループのマシンを採用
アルファサングループではEUの厳しい基準に合格した世界シェアNo.1 JKグループのマシンを、全てのベッドマシン、縦型マシンに採用しています。さらに全てのマシンは毎回アルコールにて消毒しております。（※フェイスマシンには一部イタリアメーカーを使用しております。）
メーカー純正品と最大手フィリップス社の電球
マシンだけではなく、ライトも非常に重要です。
アルファサンでは安全性の高い、世界シェアNo.1のフィリップス社とメーカー純正ライトを使用し、メーカー推奨時間よりも早く交換しております。
アルファサンオリジナルのアフターケア用品
日焼け後のお肌のお手入れのための当社が専用に開発した、
各種アメニティをご用意しております。
これらのアフターケア用品は全て無料でご利用いただけます。
また、すべての店舗にパウダーブースをご用意しております。
ポイントが”貯まる”お得な会員カード
会員カードはお得なポイントカードになっております。
1000円のご利用で10ポイント。80ポイントで次回500円引きとなる、利用しやすいポイント制になっております。他にもタイムサービスやポイント2倍のキャンペーン等もございます。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '平日11:00～22:30／最終受付時間21:45／日祝11:00～22:15／最終受付時間21:30', 'close_day' => '', 'area_code' => 7201, 'address' => '京都府京都市右京区西院巽町41-2東光興産西院ビル3階', 'near_st' => '阪急西院駅', 'load_navi' => '阪急西院駅より四条通を左手（西）徒歩3分', 'tel' => '075-314-5491', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://saiin.hi-ya-ke.com/', 'kodawari' => '駅近／完全個室／マシーン種類豊富／強力マシーンあり／格安サロン', 'customers' => '','min_price' => 1500 ),
array('company_id'=>89,'name'=> 'BLUEBOX 神戸三ノ宮店', 'kana_name'=>'ブルーボックスこうべさんのみやてん', 'catch_msg'=>'神戸三ノ宮店、2016年マシン大幅リニューアルしました★','summary' => '神戸三ノ宮店、2016年マシン大幅リニューアルしました★
■BLACK PASSION
⇒2016年最新モデル！従来のパッションより、ランプ本数＆ワット数がパワーアップ。

■“RED PASSION”
⇒2015年モデルの最新マシンを導入で、初級マシンもパワーアップ！

［A］社員候補スタッフ
■対象となる方
20～30歳位までの男性（元気で体力に自身のある方歓迎）
■勤務時間
各店舗の営業時間に準ずる（シフト制）
■応募方法
履歴書（写真貼付）を店舗までお持ちください
［B］アルバイトスタッフ
■対象となる方
20～30歳位までの男女（元気で体力に自身のある方歓迎）
■勤務時間
各店舗の営業時間に準ずる（シフト制）
■応募方法
履歴書（写真貼付）を店舗までお持ちください','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～23:00／最終受付時間22:15', 'close_day' => '火曜定休', 'area_code' => 7301, 'address' => '神戸市中央区中山手通1-1-9
ゴールドウッズ三宮4F', 'near_st' => '三ノ宮駅', 'load_navi' => '三ノ宮駅前→生田新道を東急ハンズ方面へ徒歩→右側に【すきや】超え一本目の曲がり角を右ですぐ左側のビルの4階です。', 'tel' => '078-391-9614', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/kobesannomiya.html', 'kodawari' => '駅近／手ぶらＯＫ／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '尼崎店', 'kana_name'=>'あまがさきてん', 'catch_msg'=>'明るく元気なスタッフが、お迎えします。
アットホームなお店。','summary' => '尼崎店、2016年マシン大幅リニューアルしました★
■BLACK PASSION
⇒2016年最新モデル！従来のパッションより、ランプ本数＆ワット数がパワーアップ。

■“RED PASSION”
⇒2015年モデルの最新マシンを導入で、初級マシンもパワーアップ！

［A］社員候補スタッフ
■対象となる方
20～30歳位までの男性（元気で体力に自信のある方歓迎）
■勤務時間
各店舗の営業時間に準ずる（シフト制）
■応募方法
履歴書（写真貼付）を店舗までお持ちください
［B］アルバイトスタッフ
■対象となる方
18～30歳位までの男女（元気で体力に自信のある方歓迎）
■勤務時間
各店舗の営業時間に準ずる（シフト制）
■応募方法
履歴書（写真貼付）を店舗までお持ちください','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '金　11:00～25:00／土　10:00～25:00／最終受付時間24:00／日・祝日　10:00～24:00／月～木　11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 7302, 'address' => '尼崎市神田中通3-31-3 KT2ビル2F', 'near_st' => '尼崎駅（阪神）', 'load_navi' => '尼崎駅（阪神）より徒歩4分
中央通り商店街のど真ん中に位置する2階にあります。', 'tel' => '06-6412-9696', 'machine_num' => '8', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/amagasaki.html', 'kodawari' => '駅近／手ぶらＯＫ／お得な回数券・プリペイドカードあり／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '加古川店', 'kana_name'=>'かこがわてん', 'catch_msg'=>'来店の際は、是非ご予約をお願い致します。ご予約の無い場合は待ち時間が出来たり、最悪の場合その時にタンニングを行えない場合がございます。ACCESSのページからご希望の店舗へご連絡下さい。','summary' => '垂水一周年記念！オリジナルキーホルダープレゼント！
各マシンの隣にシャワー室をご用意しています
バスタオル・ハンドタオル・シャンプー・リンス・ボディーソープも御用しております
アフタードリンクサービス!
メイクルーム完備！
待合スペース完備
コラーゲンマシン稼働中
会員登録無料','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～24:00／最終受付時間24:00', 'close_day' => '', 'area_code' => 7302, 'address' => '加古川市加古川町寺家町142-1新魚住ビル2F', 'near_st' => '加古川駅', 'load_navi' => '電車の場合：JR加古川駅下車、南口を出て南へ徒歩約3分（商店街内）
お車の場合：加古川インター下車南へ約3分（契約駐車場無）', 'tel' => '079-422-5508', 'machine_num' => '', 'parking' => 'なし', 'site_url' => 'http://sunlounge-kgw.com/', 'kodawari' => '駅近／コラーゲンマシーンあり／手ぶらＯＫ／マシーン種類豊富／予約優先／ドリンクサービスあり／深夜まで営業', 'customers' => '','min_price' => 1800 ),
array('company_id'=>89,'name'=> '姫路店', 'kana_name'=>'ひめじてん', 'catch_msg'=>'来店の際は、是非ご予約をお願い致します。ご予約の無い場合は待ち時間が出来たり、最悪の場合その時にタンニングを行えない場合がございます。ACCESSのページからご希望の店舗へご連絡下さい。','summary' => '各マシンの隣にシャワー室をご用意しています
バスタオル・ハンドタオル・シャンプー・リンス・ボディーソープも御用しております
アフタードリンクサービス!
メイクルーム完備！
待合スペース完備
会員登録無料','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～24:00／最終受付時間24:00', 'close_day' => '', 'area_code' => 7302, 'address' => '姫路市呉服町70番地菊屋ビル1F', 'near_st' => '姫路駅', 'load_navi' => '電車の場合：JR姫路駅下車、東口を出て北へ徒歩約5分　ヤマトヤシキさんの筋東側です
お車の場合：姫路南インター下車北へ約5分（契約駐車場無）', 'tel' => '079-283-3088', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://sunlounge-kgw.com/', 'kodawari' => '駅近／深夜まで営業／手ぶらＯＫ／予約優先／ドリンクサービスあり', 'customers' => '','min_price' => 1800 ),
array('company_id'=>89,'name'=> '垂水店', 'kana_name'=>'たるみてん', 'catch_msg'=>'来店の際は、是非ご予約をお願い致します。ご予約の無い場合は待ち時間が出来たり、最悪の場合その時にタンニングを行えない場合がございます。ACCESSのページからご希望の店舗へご連絡下さい。','summary' => '各マシンの隣にシャワー室をご用意しています
バスタオル・ハンドタオル・シャンプー・リンス・ボディーソープも御用しております
アフタードリンクサービス!
メイクルーム完備！
待合スペース完備
コラーゲンマシン稼働中
会員登録無料','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～23:30／最終受付時間23:30', 'close_day' => '', 'area_code' => 7301, 'address' => '神戸市垂水区平磯4ｰ5ｰ5 ビラノーブル垂水3F', 'near_st' => '垂水駅', 'load_navi' => '電車の場合：JR垂水駅下車、東口を出て南へ徒歩約1分　スロットabicさんのあるビル3F
お車の場合：国道2号線沿い　緑の歩道橋のある路地を北へ（契約駐車場無）', 'tel' => '078-707-7638', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://sunlounge-kgw.com/', 'kodawari' => '駅近／手ぶらＯＫ／予約優先／ドリンクサービスあり／コラーゲンマシーンあり', 'customers' => '','min_price' => 1800 ),
array('company_id'=>89,'name'=> '倉敷店', 'kana_name'=>'くらしきてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 8101, 'address' => '岡山県倉敷市白楽町382-4　サンライトビル201', 'near_st' => '', 'load_navi' => '', 'tel' => '086-434-8003', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '岡山店', 'kana_name'=>'おかやまてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 8101, 'address' => '岡山県岡山市北区神田町2-4-22', 'near_st' => '', 'load_navi' => '', 'tel' => '086-221-9616', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/okayama.html', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '博多天神店', 'kana_name'=>'はかたてんじてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 10101, 'address' => '福岡市中央区天神3丁目5-4 天神トレスビル1F', 'near_st' => '', 'load_navi' => '', 'tel' => '092-722-1696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '久留米店', 'kana_name'=>'くるめてん', 'catch_msg'=>'アットホームな雰囲気で入りやすいお店です。
日焼けの豊富な知識を持ったスタッフが適切なアドバイスをしますので御安心ください。','summary' => 'アットホームな雰囲気で入りやすいお店です。
日焼けの豊富な知識を持ったスタッフが適切なアドバイスをしますので御安心ください。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00', 'close_day' => '', 'area_code' => 10102, 'address' => '久留米市東町39-10 灘小ビル3F', 'near_st' => '西鉄久留米駅', 'load_navi' => '西鉄「久留米駅」下車、正面一番街入口
徒歩1分', 'tel' => '0942-34-2711', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://s.maho.jp/homepage/c23acfd63dbce437/', 'kodawari' => '駅近／深夜まで営業／学割あり／予約割引あり／朝割引あり／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '天神北店', 'kana_name'=>'てんじんきたてん', 'catch_msg'=>'TVで話題のマシン！九州初上陸
4月20日リニューアルオープン','summary' => 'プライベート重視の空間へ ニップレス、シャワーキャップは無料です。 女性のお客様は10分プラスサービスさせて頂きます。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～25:00／最終受付時間24:00', 'close_day' => '', 'area_code' => 10101, 'address' => '福岡市中央区天神3-8-1 天神亜依ビル3F', 'near_st' => '西鉄福岡駅、天神駅',
'load_navi' => '「西鉄福岡駅」下車、徒歩10分
地下鉄空港線「天神駅」下車、徒歩7分', 'tel' => '092-734-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.xn--vck1fw80o.com/', 'kodawari' => '深夜まで営業／クレジットカード利用可能／手ぶらＯＫ／強力マシーンあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '北九州店', 'kana_name'=>'きたきゅうしゅうてん', 'catch_msg'=>'旧フレックス日焼けルームが、2016年4月リニューアルオープン！','summary' => '旧フレックス日焼けルームが、2016年4月リニューアルオープン！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:00～22:00／最終受付時間21:20', 'close_day' => '', 'area_code' => 10102, 'address' => '北九州市八幡西区下上津役1丁目10-6', 'near_st' => '', 'load_navi' => '', 'tel' => '093-613-6291', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'https://docs.google.com/file/d/0BwP5kidu1fz2SEZVT0ZEVml3Wjg/edit', 'kodawari' => 'お得な回数券・プリペイドカードあり／駐車場あり／マシーン種類豊富／強力マシーンあり／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>89,'name'=> 'スパゾー熊本店', 'kana_name'=>'すぱぞーくまもとてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 10201, 'address' => '熊本市南坪井町5-4 ドルハウスビル2F', 'near_st' => '', 'load_navi' => '', 'tel' => '096-359-0303', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> 'LUXE鹿児島店', 'kana_name'=>'るーくすかごしまてん', 'catch_msg'=>'最先端の光のエステでセレブ肌に','summary' => '鹿児島でエステサロンを探すなら唯一のコラーゲンマシン、日焼けマシン、酸素カプセル専門店ルークスへ！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '不定休', 'area_code' => 10701, 'address' => '鹿児島市西田3-10-17', 'near_st' => '中央駅', 'load_navi' => '中央駅西口より徒歩5分', 'tel' => '099-213-1741', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.luxe-kagoshima.com/', 'kodawari' => '駅近／完全個室／コラーゲンマシーンあり／完全予約制／酸素カプセルあり', 'customers' => '','min_price' => null ),
array('company_id'=>89,'name'=> '所沢店', 'kana_name'=>'ところざわてん', 'catch_msg'=>'最安550円からタンニング可能！
地域最安店！','summary' => 'アットホームな造りで、マシンの種類が豊富です。
親しみやすいSTAFFと、キレイな店内が自慢です。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／月～金11:00～26:00／土日・祝日10:00～26:00／／冬季営業時間／金11:00～26:00／土10:00～26:00／最終受付時間25:00／日・祝日10:00～25:00／月～木11:00～25:00／最終受付時間24:00', 'close_day' => 'なし', 'area_code' => 4303, 'address' => '所沢市東町12-14 ねぎしビル2F', 'near_st' => '所沢駅', 'load_navi' => '西武新宿線「所沢駅」もしくは西武池袋線「所沢駅」下車、西口より徒歩10分 （ファルマン通り沿い）', 'tel' => '042-924-9696', 'machine_num' => '', 'parking' => 'なし', 'site_url' => 'http://www.sunlounge.co.jp/shop/shop_detail/tokorozawa.html', 'kodawari' => '朝割引あり／夜割引あり／清潔な店内／深夜まで営業／手ぶらＯＫ／格安サロン', 'customers' => '10代から50代まで幅広いお客様に支持されています。','min_price' => 1100 ),
array('company_id'=>90,'name'=> 'ＣＡＢＩＮ名駅店', 'kana_name'=>'ざまりんくらぶきゃびんめいえきてん', 'catch_msg'=>'日焼けサロン　ザ・マリンクラブは市内2店舗
名古屋・今池のマリンクラブへどうぞ','summary' => '初回は３～４回詰めて焼くのが効果的！
顔が黒いとより焼けて見えますので全身マシーンに顔焼き専用マシーンを併用（２０分で充分です）すると割安でより黒くみえます。
しかし安全な日焼けマシーンでも過信は禁物。早く焼きたいあまりに無理なタンニングをすればトラブルになりかねません。
1～２回焼いてカユミがでたら２～３日空けて症状が収まってからご利用ください。特にアトピー等皮膚疾患のある方は医師にご相談を。焼かれる場合も直接肌に触れない縦型がオススメです。
不安のある方はお気軽にスタッフへご相談ください。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11：00～23:00', 'close_day' => '月曜日', 'area_code' => 6201, 'address' => '名古屋市中村区名駅4-11-28伊藤ビル4F', 'near_st' => '名古屋駅より徒歩4分', 'load_navi' => '', 'tel' => '052-571-8100', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.themarineclub.co.jp/', 'kodawari' => '駅近／学割あり／初回割引あり／朝割引あり／紹介割引あり／／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>90,'name'=> '今池店', 'kana_name'=>'ざまりんくらぶいまいけてん', 'catch_msg'=>'日焼けサロン　ザ・マリンクラブは市内2店舗
名古屋・今池のマリンクラブへどうぞ','summary' => '初回は３～４回詰めて焼くのが効果的！
顔が黒いとより焼けて見えますので全身マシーンに顔焼き専用マシーンを併用（２０分で充分です）すると割安でより黒くみえます。
しかし安全な日焼けマシーンでも過信は禁物。早く焼きたいあまりに無理なタンニングをすればトラブルになりかねません。
1～２回焼いてカユミがでたら２～３日空けて症状が収まってからご利用ください。特にアトピー等皮膚疾患のある方は医師にご相談を。焼かれる場合も直接肌に触れない縦型がオススメです。
不安のある方はお気軽にスタッフへご相談ください。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11：00～23：00／金・土11:00～24：00', 'close_day' => '火曜日', 'area_code' => 6202, 'address' => '名古屋市千種区内山3-10-22ヤマトビル7F', 'near_st' => '今池駅', 'load_navi' => '今池駅より徒歩1分。錦通り沿い', 'tel' => '052-735-7773', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.themarineclub.co.jp/', 'kodawari' => '駅近／学割あり／初回割引あり／朝割引あり／紹介割引あり／／格安サロン', 'customers' => '','min_price' => 1500 ),
array('company_id'=>91,'name'=> 'サムライ', 'kana_name'=>'さむらい', 'catch_msg'=>'短時間で綺麗な日焼けが楽しめる日焼けマシンや、お手ごろ価格で利用できるネイルコーナーなども取り揃えておりますので、皆様のお越しを心よりお待ちしております。','summary' => '当店は2010年5月21日、沖縄は北谷（ちゃたん）町・美浜に誕生いたしました。
短時間で綺麗な日焼けが楽しめる日焼けマシンや、お手ごろ価格で利用できるネイルコーナーなども取り揃えておりますので、皆様のお越しを心よりお待ちしております。

より早く美しい日焼けをした肌の色を得る為に選ばれた最高の3台。
短時間で日焼けできるので、混み合っている時間でも長時間待つことは少ないでしょう。

メールマガジンあり
日焼けコーナーやネイル等々、お得なキャンペーン情報をイチ早くお届けします','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '月～金1:00～24:00／土・日11:00～22:00', 'close_day' => '水曜定休日', 'area_code' => 10801, 'address' => '沖縄県北谷町美浜2-2-13', 'near_st' => '', 'load_navi' => '当店へお越しの際は、国道58号線より北谷ジャスコへ向かうように折れて頂き、最初の信号を左右（スターバックス横から折れてきたのであれば右に・観覧車側からであれば左に）に折れて下さい。

すると、すぐにPET BOXが見えてくると思いますので、その2軒隣りの白い3階立ての建物が当店です。', 'tel' => '(098)989-4543', 'machine_num' => '3', 'parking' => 'あり

ご駐車の際は、当店の1階が駐車場になっておりますのでそこにお止め下さい。もし、1階に駐車できないようでしたら、道向かいの大きな駐車場（北谷ジャスコ前の町営大駐車場）へお止め下さい。駐車料金は無料です。', 'site_url' => 'http://samuraitanningandnail.web.fc2.com/index.html', 'kodawari' => '駐車場あり／深夜まで営業／ネイルあり', 'customers' => '','min_price' => null ),
array('company_id'=>92,'name'=> 'サロンエイト', 'kana_name'=>'さろんえいと', 'catch_msg'=>'日焼けして南国に行ったふりしませんか？

飲み会、合コン前に日焼けして注目度UP！させませんか？

コタツじゃなくて日焼けマシンでぬくぬくしませんか？

美しい人生よかぎりない喜びよ','summary' => '楽天スマートペイ加盟店　VISA,Master Card,JCB,American Express,Diners Club,Discover
6ブランドご利用できます。

アパレル販売、アクセサリー販売、雑貨販売も','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:30～21:00', 'close_day' => '月曜日', 'area_code' => 2101, 'address' => '青森県十和田市東十二番町17-22', 'near_st' => '八戸駅', 'load_navi' => '最寄駅　JR八戸駅　25㎞　徒歩5時間8分
最寄IC 下田百石IC　18.4㎞　約30分', 'tel' => '0176-66-4810', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://www2.hp-ez.com/hp/salon-eight', 'kodawari' => '駐車場あり／クレジットカード利用可能／お得な回数券・プリペイドカードあり／ネイルあり／アパレル販売あり／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>93,'name'=> 'サンパラダイス', 'kana_name'=>'さんぱらだいす', 'catch_msg'=>'ディアブロ三河地区初登場！遂に！世界最強?!★ディアブロ★がサンパラに初導入！！！！
予約なしでも利用可能','summary' => '「サン･パラダイス」ではお客様が理想とする肌色を実現するお手伝いをするとともに、快適なひと時を提供し、そして安全に日焼けを楽しんで頂きたいと考えております。 お客様が美しく健康的な、つややかに輝くブロンズ色の肌を手に入れられますよう質の高いサービスと真心を込めてサポート致します。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '4月～9月（夏季営業時間）12:00～23:00／土日10:00～23:00／／10月～3月（冬季営業時間）12:00～22:00／土日10:00～22:00', 'close_day' => '4月～9月（夏季）無休、もしくは木曜休
10月～3月（冬季）毎週火・木定休日', 'area_code' => 6204, 'address' => '愛知県高浜市神明町7丁目1番地1', 'near_st' => '三河高浜駅', 'load_navi' => '三河高浜駅より徒歩15分', 'tel' => '0566-52-9614', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://www.9614-sunparadise.com/', 'kodawari' => 'ドリンクサービスあり／強力マシーンあり／初回割引あり／学割あり／駐車場あり／手ぶらＯＫ／格安サロン', 'customers' => '年齢層は男女問わず10代～60代まで幅広くご利用頂いております。','min_price' => 1200 ),
array('company_id'=>94,'name'=> 'サンフレンド', 'kana_name'=>'さんふれんど', 'catch_msg'=>'☆ＪＲ新松戸駅に営業開始から13年が経ちました。
☆日焼けファンの集まるお洒落なお店です。
☆日焼けサロンが初めての方も、他店はちょっと・・と感じた方は是非お試しください。
☆当店は完全個室スタイルでプライバシーは万全です。
☆エリア一番のロープライス設定','summary' => '☆ＪＲ新松戸駅に営業開始から13年が経ちました。




☆日焼けファンの集まるお洒落なお店です。




☆日焼けサロンが初めての方も、他店はちょっと・・と感じた方は是非お試
　しください。




☆当店は完全個室スタイルでプライバシーは万全です。




☆エリア一番のロープライス設定','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～24:00', 'close_day' => '', 'area_code' => 4402, 'address' => '千葉県松戸市新松戸2－14銀座ビル2Ｆ', 'near_st' => '新松戸駅', 'load_navi' => '新松戸駅より徒歩2分', 'tel' => '047－348－3969', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://the-sunfriend.jimdo.com/', 'kodawari' => '駅近／深夜まで営業／強力マシーンあり／完全個室／格安サロン', 'customers' => '','min_price' => 1100 ),
array('company_id'=>95,'name'=> 'サンマッスル', 'kana_name'=>'さんまっする', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～22:00／最終受付時間21:30', 'close_day' => '', 'area_code' => 4105, 'address' => '渋谷区神宮前 4-14-20', 'near_st' => '表参道駅', 'load_navi' => '地下鉄表参道駅A2出口→アップルストアの角を右に入り徒歩10分
駐車場の用意はございませんので、店舗近くの駐車場をご利用ください。', 'tel' => '０３－５４１４－１４１７', 'machine_num' => '10', 'parking' => '', 'site_url' => 'http://sunmuscle.web.fc2.com/', 'kodawari' => '格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>96,'name'=> '調布店', 'kana_name'=>'さんろいやるちょうふてん', 'catch_msg'=>'調布駅北口目の前。お気軽にお立ち寄りください。
シャワー、タオル、保湿剤等、全て揃っておりますので手ぶらでお越し下さい。
新品ライト完備','summary' => '当店では、ほぼ全てが、ドイツ製の新型高級マシンです。
特徴としては、従来のマシンの様な暑さを解消し、短時間で焼ける様になりました。
全てのマシンに顔焼き用のハロゲン装備ですので落ち易い顔も安心です。
ライトにも種類が豊富でお店により違いますが、当店では最高のチョイスで常に新しい物と交換しております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00／最終受付時間23:30', 'close_day' => '年中無休', 'area_code' => 4114, 'address' => '東京都調布市布田1-37-15　清水ビル5F', 'near_st' => '調布駅', 'load_navi' => '京王線、調布駅北口、ロータリー内、パルコ前、吉野家の5F
徒歩1分', 'tel' => '0424-84-9617', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sun-royal.net/', 'kodawari' => '駅近／強力マシーンあり／マシーン種類豊富／手ぶらＯＫ', 'customers' => '20代、30代の落ち着いた方の多いお店','min_price' => null ),
array('company_id'=>96,'name'=> '明大前店', 'kana_name'=>'さんろいやるめいだいまえてん', 'catch_msg'=>'明大前駅目の前。お気軽にお立ち寄りください。
シャワー、タオル、保湿剤等、全て揃っておりますので手ぶらでお越し下さい。
新品ライト完備','summary' => '当店では、ほぼ全てが、ドイツ製の新型高級マシンです。
特徴としては、従来のマシンの様な暑さを解消し、短時間で焼ける様になりました。
全てのマシンに顔焼き用のハロゲン装備ですので落ち易い顔も安心です。
ライトにも種類が豊富でお店により違いますが、当店では最高のチョイスで常に新しい物と交換しております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00／最終受付時間23:30', 'close_day' => '年中無休', 'area_code' => 4106, 'address' => '東京都世田谷区松原1-38-12　佐藤ビル2F', 'near_st' => '明大前駅', 'load_navi' => '電車の方        京王線、井の頭線、明大前駅徒歩2分。すずらん通りの郵便局2F
車の方        甲州街道（国道20号）八王子方面の側道、松原のファミリーマートを越して左折後10m', 'tel' => '03-5300-9617', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.sun-royal.net/', 'kodawari' => '駅近／強力マシーンあり／マシーン種類豊富／手ぶらＯＫ', 'customers' => '20代、30代の落ち着いた方の多いお店','min_price' => null ),
array('company_id'=>97,'name'=> 'シーガール', 'kana_name'=>'しーがーる', 'catch_msg'=>'池袋駅西口徒歩4分・隠れ家的日焼けサロン','summary' => '話題のコラーゲンマシンと、タンニングマシンが1台に。
美肌も日焼けも同時にできるから、財布にやさしく、時間も節約。
池袋駅西口4分の日焼けサロン『シーガル』は、ドイツで生まれた最新のスーパーマシンを導入しています。いま話題のコラーゲンマシンとタンニングマシンが1つに合体。1回の施術で、美肌も、日焼けも同時に行えます。だから、料金も時間もお得で安いのです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4101, 'address' => '東京都豊島区西池袋２丁目３１−２２', 'near_st' => '池袋駅', 'load_navi' => 'JR池袋駅西口から徒歩4分!!　メトロポリタン口から2分!!', 'tel' => '03-3985-1679', 'machine_num' => '', 'parking' => 'なし', 'site_url' => 'http://seagullclub.tokyo/', 'kodawari' => '駅近／コラーゲンマシーンあり／理容室併設／ドリンクサービスあり／初回割引あり', 'customers' => '','min_price' => 3000 ),
array('company_id'=>98,'name'=> 'シェイプジムカリフォルニア', 'kana_name'=>'しぇいぷじむかりふぉるにあ', 'catch_msg'=>'ジム会員様でない一般の方のご利用も大歓迎です
完全予約制ですのでお電話にて予約後ご来店ください','summary' => 'ジム会員様でない一般の方のご利用も大歓迎です
完全予約制ですのでお電話にて予約後ご来店ください','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '月～金10:00～13:00、15:00～23:00／土10:00～13:00、15:00～21:00', 'close_day' => '日・祝日・盆･年末年始、その他
（月）～（土）13：00～15：00は閉館します', 'area_code' => 10301, 'address' => '佐賀市本庄町大字袋325-3', 'near_st' => '', 'load_navi' => '', 'tel' => '0952-29-2855', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://california.g.dgdg.jp/HIYAKE.html', 'kodawari' => '駐車場あり／完全予約制／お得な回数券・プリペイドカードあり／トレーニングジム併設', 'customers' => '','min_price' => null ),
array('company_id'=>99,'name'=> 'アメリカ村店', 'kana_name'=>'そるとろんじゃぱんあめりかむらてん', 'catch_msg'=>'業界最強のマシーンバリエーション
大人のためのタンニングスタジオ','summary' => '受付時には、登録カードのご記入、お肌のカウンセリング、
日焼けマシンの選択を致します。
親切なスタッフがお客様の肌質に合った日焼けアドバイスを致します','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～22:00／最終受付時間', 'close_day' => '', 'area_code' => 7102, 'address' => '大阪市中央区西心斎橋1-6-33
オカビル5F', 'near_st' => '心斎橋駅、四ツ橋駅、なんば駅', 'load_navi' => 'アメ村ビックステップすぐ裏！', 'tel' => '06-6281-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.soltron-amemura.com/', 'kodawari' => 'マシーン種類豊富／駅近／初回割引あり／朝割引あり／大人向けサロン／格安サロン', 'customers' => '','min_price' => 1400 ),
array('company_id'=>100,'name'=> 'ダイヤモンドサン', 'kana_name'=>'だいやもんどさん', 'catch_msg'=>'大人が安心してご利用できる日焼けサロンをコンセプトにタンニングを通して健康的で前向きなライフスタイルを提案します。','summary' => '大人が安心してご利用できる日焼けサロンをコンセプトにタンニングを通して健康的で前向きなライフスタイルを提案します。
1回できれいな日焼け肌を手に入れる事は難しいです。肌の調子を見ながらコツコツ焼くのがポイントです。
日焼け効果には個人差があります。20年を超えるベテランのアドバイザーがあなたに合ったマシン・時間をご提案します。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～20:00', 'close_day' => '火曜日
(その他 月に1～2回の不定休あり)', 'area_code' => 2501, 'address' => '宮城県仙台市青葉区中央4丁目1−3', 'near_st' => '仙台駅', 'load_navi' => '仙台駅より徒歩2分', 'tel' => '022-211-1701', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://diamondsun.net/', 'kodawari' => '駅近／お得な回数券・プリペイドカードあり／朝割引あり／大人向けサロン／格安サロン', 'customers' => '当店を御利用されているお客様は10～70歳代の幅広い方々がご来店いただいております。','min_price' => 1500 ),
array('company_id'=>101,'name'=> 'タンゴ', 'kana_name'=>'たんご', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～24:00／最終受付時間23:30', 'close_day' => '', 'area_code' => 4104, 'address' => '東京都杉並区西荻北３-２５-１　3F', 'near_st' => '西荻窪駅', 'load_navi' => '西荻窪駅北口徒歩３分', 'tel' => '03-3396-9096', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>102,'name'=> 'タンニング スタジオ キラ', 'kana_name'=>'たんにんぐすたじおきら', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '平日11:00-22:30 ／土10:00-23:00 ／日･祝日10:00-21:30', 'close_day' => '', 'area_code' => 7101, 'address' => '大阪府 大阪市都島区東野田町 2-3-26 サトウビル 7F', 'near_st' => '京橋駅', 'load_navi' => '', 'tel' => '', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>103,'name'=> 'タンニングクラブ ワイハ', 'kana_name'=>'たんにんぐくらぶわいは', 'catch_msg'=>'タオル、シャワーなどご用意しておりますので、手ぶらでお越しいただいてＯＫです。','summary' => '思いっきり焼きたい方はもちろん、肌が弱くてお悩みの方も、お肌の健康のためサロンでの日焼けをオススメします。
詳しくは当店プロのアドバイザーまでお気軽にお問い合わせください。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～23:00', 'close_day' => '年中無休', 'area_code' => 7501, 'address' => '滋賀県近江八幡市堀上町130－1カンキビル2Ｆ', 'near_st' => '近江八幡駅', 'load_navi' => '近江八幡駅より徒歩10分', 'tel' => '0748－32－1000', 'machine_num' => '10', 'parking' => '大型駐車場完備', 'site_url' => 'http://www.waiiha.jp/', 'kodawari' => '駐車場あり／手ぶらＯＫ／お得な回数券・プリペイドカードあり／学割あり／マシーン種類豊富／初回割引あり／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>104,'name'=> '関内店', 'kana_name'=>'たんにんぐさろんごるぱかんないてん', 'catch_msg'=>'関内（横浜　伊勢佐木町）にある日焼けサロン　ゴルパは、ただの日焼けサロンではありません。初回最大1200円オフ！日焼けジェル無料＆コラーゲンライトを無料セットにしている『日焼けしながらエステ出来る新感覚の日焼けサロン』です！','summary' => '関内（横浜　伊勢佐木町）にある日焼けサロン　ゴルパは、ただの日焼けサロンではありません。初回最大1200円オフ！日焼けジェル無料＆コラーゲンライトを無料セットにしている『日焼けしながらエステ出来る新感覚の日焼けサロン』です！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～23:30／最終受付時間23:00／／夏季営業時間4/29～8/31／金曜日・土曜日のみサマータイム／10:00～24:30／最終受付時間24:00', 'close_day' => '', 'area_code' => 4201, 'address' => '神奈川県横浜市中区伊勢佐木町2-86　白牡丹ビル3Ｆ', 'near_st' => '伊勢佐木長者町駅、関内駅、日の出町駅', 'load_navi' => '※市営地下鉄『伊勢佐木長者町』徒歩4分
　京浜東北『関内』徒歩6分
　京急『日の出町』より徒歩7分', 'tel' => '045-252-8059', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.soltron.jp/kannai/', 'kodawari' => '駅近／強力マシーンあり／マシーン種類豊富／学割あり／コラーゲンマシーンあり／お得な回数券・プリペイドカードあり／初回割引あり／格安サロン', 'customers' => '','min_price' => 900 ),
array('company_id'=>105,'name'=> 'タンニングサロンブロンズ柏本店', 'kana_name'=>'たんにんぐさろんぶろんずかしわほんてん', 'catch_msg'=>'進化し続けるプレミアム日焼けサロン！！','summary' => '2014年4月24日 Renewal Open！

個室完備の日焼けサロン！ALL次世代マシーン＆リーズナブルな料金です。
アクアフレッシュ＆アロマミスト付の最新次世代Newマシーン等が続々導入！！

日本初上陸！アンチエイジングコラーゲン！！

新たなる美の追求、光を浴びるだけで美肌が甦る！！

ピンクの光線が真皮層に働きかけ、コラーゲンやエラスチンなど肌に有効な成分の生成を促進。
肌本来の美肌力を呼びさまし、内側から自然に若肌へと導いてくれます。
肌にダメージを与えず光を浴びるだけのアンチエイジングトリートメントの誕生です。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間（5月～8月）／日10:00～ 26:00 ／最終受付時間25:00 ／月～木10:00～26:00 ／最終受付時間25:30／金、土10:00～27:00／最終受付時間26:00／／冬季受付時間（9月～4月）／日～木11:00～24:00／最終受付時間23:00／金、土、祝前日／11:00～26:00 ／最終受付時間／25:30', 'close_day' => '', 'area_code' => 4402, 'address' => '千葉県柏市中央町3-30 柏ハイツ1Ｆ', 'near_st' => '柏駅', 'load_navi' => '柏駅より徒歩3 分', 'tel' => '04-7128-8685', 'machine_num' => '', 'parking' => '駐車場完備（無料）', 'site_url' => 'http://www.j-bronze.jp/kashiwa/', 'kodawari' => '駅近／駐車場あり／強力マシーンあり／深夜まで営業／学割あり／女性割引あり／格安サロン', 'customers' => '','min_price' => 1300 ),
array('company_id'=>105,'name'=> 'タンニングサロンブロンズ竹ノ塚店', 'kana_name'=>'たんにんぐさろんたけのづかてん', 'catch_msg'=>'７種類のマシン勢揃い','summary' => '駅から徒歩3分の場所にある落ち着いた感じの店内です。
初心者用のマシンから上級者向き強力マシンまで取り揃えておりますのでお客様にとっては、
リーズナブルてきに心地よいタンニングが楽しんでいただけると思います。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間11:00～ 24:00 ／最終受付時間 23:00', 'close_day' => '', 'area_code' => 4111, 'address' => '東京都足立区竹ノ塚6-14-11 ノーブル竹ノ塚2階', 'near_st' => '竹ノ塚駅', 'load_navi' => '東武鉄道伊勢崎線 竹ノ塚駅より徒歩3分', 'tel' => '03-6715-7997', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.j-bronze.jp/takenozuka/', 'kodawari' => '駅近／マシーン種類豊富／学割あり／女性割引あり／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>105,'name'=> 'タンニングサロンブロンズ吉祥寺店', 'kana_name'=>'たんにんぐさろんぶろんずきちじょうじてん', 'catch_msg'=>'2012/5/28 タンニングサロンブロンズ吉祥寺店 GRAND OPEN!!','summary' => '吉祥寺駅公園口（南口）目の前に新規オープン致しました。

進化し続けるプレミアムサロン。日焼けとコラーゲンと組み合わせたALL次世代マシン！！
全マシンにコラーゲンランプ搭載でお肌にも安心。
さらに上級グレード3機種には、アクアフレッシュ＆アロマフレグランスミストも搭載。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '冬季営業時間／月～土12:00～25:00／最終受付時間24:00／日11:00～24:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4114, 'address' => '東京都武蔵野市吉祥寺南町1-5-7 雪ビル3F', 'near_st' => '吉祥寺駅', 'load_navi' => 'JR井の頭線 吉祥寺駅公園口より徒歩30秒', 'tel' => '0422-72-7100', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.j-bronze.jp/kichijoji/', 'kodawari' => '駅近／強力マシーンあり／学割あり／女性割引あり／深夜まで営業', 'customers' => '','min_price' => 2000 ),
array('company_id'=>105,'name'=> 'タンニングサロンブロンズ葛西店', 'kana_name'=>'たんにんぐさろんぶろんずかさいてん', 'catch_msg'=>'～新たなる美への追求～時代とともに進化し続けるプレミアム日焼けサロン！！','summary' => '2013年春！ついに タンニングサロン ブロンズ 葛西店 が OPEN！！
旧マリンクラブ ～ ブロンズへ生まれ変わりました。
葛西駅から徒歩1分！！
メトロセンター葛西第２目の前にオープン！

進化しつづけるプレミアム日焼けサロン BRONZE ！！
上級者用マシンから初心者用のマシンまで取り揃えており日焼けとコラーゲンとビタミンＤ３を組み合わせた次世代マシン導入！！コラーゲンランプ搭載でお肌にも安心。
更に世界が注目の太陽のビタミンとも呼ばれているVitamin D3ランプも搭載！！
全室完全個室！！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間	／10:00～ 23:30／最終受付時間23:00／／冬季営業時間／11:00～ 23:30／最終受付時間23:00', 'close_day' => '', 'area_code' => 4110, 'address' => '東京都江戸川区中葛西3-35-18 秋元ビル5F', 'near_st' => '葛西駅', 'load_navi' => '東西線 葛西駅より徒歩約30秒', 'tel' => '03-3680-9699', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.j-bronze.jp/kasai/', 'kodawari' => '駅近／強力マシーンあり／学割あり／女性割引あり／マシーン種類豊富／初回割引あり／格安サロン', 'customers' => '','min_price' => 1500 ),
array('company_id'=>105,'name'=> 'タンニングサロン ブロンズ 上野店', 'kana_name'=>'たんにんぐさろんぶろんずうえのてん', 'catch_msg'=>'進化し続けるプレミアム日焼サロンＢＲＯＮＺＥ！','summary' => '立地条件抜群&駅近で
全個室のプライベートサロンとしてオープンいたしました！
価格もリーズナブルです。
上野 で日焼けサロンをお探しであれば是非一度お越し願います。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～ 23:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4109, 'address' => '東京都台東区上野4-5-6 ウィズビル8Ｆ', 'near_st' => '上野御徒町駅、上野広小路駅、御徒町駅、京成上野駅、仲御徒町駅、湯島駅、上野駅、末広町駅', 'load_navi' => '上野御徒町駅　徒歩2分

上野広小路駅　徒歩3分

御徒町駅　徒歩3分

京成上野駅　徒歩3分

仲御徒町駅　徒歩5分

湯島駅　徒歩5分

上野駅　徒歩8分

末広町駅　徒歩9分', 'tel' => '03-3832-9614', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.j-bronze.jp', 'kodawari' => '駅近／マシーン種類豊富／強力マシーンあり／初回割引あり', 'customers' => '','min_price' => 2100 ),
array('company_id'=>105,'name'=> 'タンニングサロン ブロンズ 大山店', 'kana_name'=>'たんにんぐさろんぶろんずおおやまてん', 'catch_msg'=>'２０１４年２月よりタンニングパレスホロホロからブロンズグループに加盟いたしました。','summary' => 'これによりハイグレードマシンから設備などもより一層アップグレードいたしました！
大山店は駅から徒歩一分と
立地条件も抜群
是非お待ちしております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～ 23:00／最終受付時間23:00', 'close_day' => '', 'area_code' => 4102, 'address' => '東京都板橋区大山町9-5 一ノ瀬ビル2Ｆ', 'near_st' => '大山駅', 'load_navi' => '大山駅より徒歩30秒', 'tel' => '03-5966-8989', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.j-bronze.jp/ooyama/', 'kodawari' => '駅近／マシーン種類豊富／初回割引あり／格安サロン', 'customers' => '','min_price' => 1500 ),
array('company_id'=>105,'name'=> 'タンニングサロンブロンズ沼津駅南口店', 'kana_name'=>'たんにんぐさろんぶろんずぬまづみなみぐちてん', 'catch_msg'=>'静岡県東部で唯一の全国チェーンの日焼けサロンで大人気！
東部では唯一オール次世代マシン完備！！','summary' => 'ＪＲ沼津駅南口から徒歩3分！！08年に北口から移店リニューアルし、店内もマシンバリエーションもパワーアップ致しました。
会員様には割引クーポンによる低料金で営業してます。
また、プライベート更衣室完備店ですので多くの幅広い年齢層の方にご利用して頂いております。

お一人様でも気楽にご来店できるようなシステムとなっております！！

明るく・元気・丁寧 な接客をＳＴＡＦＦ一同心掛けております！！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／12:00～24:00／最終受付時間23:00／／冬季営業時間／12:00～23:00／最終受付時間22:00', 'close_day' => '', 'area_code' => 6102, 'address' => '静岡県沼津市大手町3-2-16 FBビル 2Ｆ-A', 'near_st' => '沼津駅', 'load_navi' => 'JR沼津駅南口より徒歩1分', 'tel' => '055-962-0533', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.j-bronze.jp/numadu/', 'kodawari' => '深夜まで営業／駅近／女性割引あり／学割あり／マシーン種類豊富／格安サロン', 'customers' => '','min_price' => 1500 ),
array('company_id'=>105,'name'=> 'タンニングサロンブロンズ小山店', 'kana_name'=>'たんにんぐさろんぶろんずおやまてん', 'catch_msg'=>'完全なるプライベート空間を実現。初めてのお客様も安心の完全個室でお待ちしております。','summary' => 'BRONZE小山店は全室にシャワールームを完備した完全個室のサロンです。
どんなお客様でも安心してタンニングすることができます。さらに会員様には特別プライスで提供しておりますのでぜひ一度ご来店ください。

【旧マリンCLUB】','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '火～土11:00～24:00／最終受付時間23:00／日・祝11:00～21:00／最終受付時間20:00', 'close_day' => '月曜日　（9月 ～ 3月）', 'area_code' => 4601, 'address' => '栃木県小山市城山町3-2-14 第二伊豆倉ビル4階', 'near_st' => '小山駅', 'load_navi' => 'JR小山駅西口より徒歩1分', 'tel' => '0285-21-3007', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.j-bronze.jp/oyama/', 'kodawari' => '駅近／深夜まで営業／完全個室／初回割引あり／女性割引あり／学割あり／格安サロン', 'customers' => '','min_price' => 1400 ),
array('company_id'=>106,'name'=> '和光店', 'kana_name'=>'たんにんぐすたじおぼあわこうてん', 'catch_msg'=>'アパレル販売あり','summary' => '埼玉県和光市の日焼けサロン　BoA和光店は『大人の為の日焼けサロン』です。和光市近郊で日焼けサロンをお探しならタンニングスタジオBoA 和光店へご来店ください。皆様のご来店を心よりお待ちしております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '月～土11:00～23:00／最終受付時間22:00／日・祝祭日11:00～18:00／最終受付時間17:00', 'close_day' => '', 'area_code' => 4303, 'address' => '埼玉県和光市本町9－40　志幸36SORAN ビル4Ｆ', 'near_st' => '和光市駅', 'load_navi' => '和光市駅徒歩3分', 'tel' => '048－464－9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.soltron.jp/boa/', 'kodawari' => '駅近／女性割引あり', 'customers' => '','min_price' => null ),
array('company_id'=>107,'name'=> '八王子店', 'kana_name'=>'たんにぐすたじおらぐじーはちおうじてん', 'catch_msg'=>'初めての方もスタッフが丁寧にアドバイスさせていただきます。素敵なひとときをLUXYでゆっくりとお過ごし下さい。ご来店をお待ちしております。','summary' => '「大人の癒し空間」を
コンセプトとしたくつろぎサロン

白と茶を基調とし、デザイナーがデザインした観葉植物に囲まれた店内は、「大人の癒し空間」をコンセプトとしたくつろぎサロン。
LUXYは完全個室。女性の方や、共同更衣室など苦手な方も気軽にご利用頂けます。個室にはシャワールーム完備。エアコン完備。男女問わず、美しさのために、健康のために、是非当店をご利用下さい。
初めての方もスタッフが丁寧にアドバイスさせていただきます。素敵なひとときをLUXYでゆっくりとお過ごし下さい。ご来店をお待ちしております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '月～土／13:00～23:00 ／日曜日／12:00～23:00', 'close_day' => '', 'area_code' => 4112, 'address' => '東京都八王子市横山町9-15 808ビル5F', 'near_st' => '八王子駅', 'load_navi' => '八王子駅より徒歩7分', 'tel' => '042-646-4196', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://gb-luxy.com/', 'kodawari' => '完全個室／大人向けサロン／ネイルあり／まつありエク', 'customers' => '','min_price' => null ),
array('company_id'=>107,'name'=> '国立店', 'kana_name'=>'たんにぐすたじおらぐじーくにたちてん', 'catch_msg'=>'男性の美と健康を トータルにサポートするサロン','summary' => 'MEN’S BEAUNATIONは、男性の美と健康をトータルにサポートするサロンです。身体の疲れだけでなく、日頃のストレスやお悩みも聞きながらカウンセリング。完全個室の癒しの空間で、スタッフがお客様一人ひとりに合ったトリートメントをご提案、ご提供いたします。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '火曜日～日曜日／11:00 ～20:00', 'close_day' => '', 'area_code' => 4112, 'address' => '東京都国立市西2-12-28　2F', 'near_st' => '西国立駅、国立駅', 'load_navi' => '西国立駅、国立駅より徒歩15分', 'tel' => '042-571-8689', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://gb-luxy.com/', 'kodawari' => '駐車場あり／完全個室／大人向けサロン／マッサージあり／ネイルあり／まつエクあり', 'customers' => '','min_price' => null ),
array('company_id'=>108,'name'=> '岡崎店', 'kana_name'=>'たんにんぐすたじおさんみっくすおかざきてん', 'catch_msg'=>'愛知県の日焼けサロン サンミックス岡崎店です。すべてのお客様に「安全」「快適」に日焼けを楽しんで頂ける様にミドルクラス～ハイクラスのマシンをご用意しています！','summary' => '当店でお得に日焼けするコツ
1まず、マシン利用料金＋500円で【割パス】購入！
2次回から【割パス】対応料金でＯＫ！（有効期限は購入日から40日間）
割パス特典
通常料金から1000円oFF
通常300円する日焼けジェルが、100円でご利用出来ます。

※その他サービス多数あり！
　詳しい内容はお問い合わせください！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00 ～24:00／最終受付時間 23:00', 'close_day' => '', 'area_code' => 6204, 'address' => '愛知県岡崎市本町通1-12サンアベニュー　5F', 'near_st' => '東岡崎駅', 'load_navi' => '※康生地区ショッピングセンター ＣＩＢＩＣＯ（シビコ）並びサンアベニュービル5階', 'tel' => '0564-25-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.soltron.jp/sun-mix/', 'kodawari' => '学割あり', 'customers' => '','min_price' => null ),
array('company_id'=>109,'name'=> '今池店', 'kana_name'=>'たんにんぐすたじおぶろんずいまいけてん', 'catch_msg'=>'上質な時を堪能する贅沢な日焼けサロン','summary' => '最新機器を備えた日焼けスタジオ,名古屋　今池・日比野･名駅の日焼けサロン','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～26:00', 'close_day' => '年中無休', 'area_code' => 6202, 'address' => '名古屋市千種区今池4丁目9-4', 'near_st' => '今池駅', 'load_navi' => '地下鉄今池駅5番出口すぐ！', 'tel' => '052-733-1196', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／駅近／手ぶらＯＫ／初回割引あり／深夜まで営業／朝割引あり', 'customers' => '','min_price' => 1700 ),
array('company_id'=>109,'name'=> '日比野店', 'kana_name'=>'たんにんぐすたじおぶろんずひびのてん', 'catch_msg'=>'上質な時を堪能する贅沢な日焼けサロン','summary' => '最新機器を備えた日焼けスタジオ,名古屋　今池・日比野･名駅の日焼けサロン','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～26:00', 'close_day' => '年中無休', 'area_code' => 6201, 'address' => '名古屋市熱田区日比野51-1', 'near_st' => '日比野駅', 'load_navi' => '地下鉄日比野駅3番出口すぐ！', 'tel' => '052-682-1196', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／駅近／手ぶらＯＫ／初回割引あり／深夜まで営業／朝割引あり', 'customers' => '','min_price' => 1700 ),
array('company_id'=>109,'name'=> '名駅店', 'kana_name'=>'たんにんぐすたじおぶろんずめいえきてん', 'catch_msg'=>'上質な時を堪能する贅沢な日焼けサロン','summary' => '最新機器を備えた日焼けスタジオ,名古屋　今池・日比野･名駅の日焼けサロン','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '13:00～24:00', 'close_day' => '年中無休', 'area_code' => 6201, 'address' => '名古屋市中村区名駅4丁目24-12横江ビルB1階', 'near_st' => '名古屋駅', 'load_navi' => '名古屋駅から徒歩5分！', 'tel' => '052-571-1196', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近／女性割引あり／学割あり／紹介割引あり／駅近／手ぶらＯＫ／初回割引あり／深夜まで営業', 'customers' => '','min_price' => 1700 ),
array('company_id'=>110,'name'=> 'タンニングパレス江古田', 'kana_name'=>'たんにんぐぱれすえこだ', 'catch_msg'=>'完全個室だから他人の視線が気になりません！','summary' => '全室個室、マシーン2種類、全5台！
ハイパワーマシン＆シャワー洗面台完備！
ＶＩＰルーム有り！ お出かけ前や旅行、下地作りや
日焼けの維持に是非とも御利用下さい！

「日焼けサロンに行ってみたいけどなんだか恥ずかしい…」なんて思いの方は是非当店へ！
完全個室での施術だから他人の目が気になりませんよ！
太陽光ではなくマシーンが紫外線を照射することで得られる美しい小麦色の肌を手に入れましょう！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00／最終受付時間23:30', 'close_day' => '年中無休（但し年末年始休み）', 'area_code' => 4104, 'address' => '東京都練馬区栄町３２−３', 'near_st' => '江古田駅、新江古田駅、新桜台駅', 'load_navi' => '西武池袋線江古田駅より徒歩1分
大江戸線新江古田駅より徒歩10分
有楽町線新桜台駅より徒歩10分', 'tel' => '03-3557-9696', 'machine_num' => '5', 'parking' => '', 'site_url' => 'https://www.facebook.com/%E3%82%BF%E3%83%B3%E3%83%8B%E3%83%B3%E3%82%B0%E3%83%91%E3%83%AC%E3%82%B9%E6%B1%9F%E5%8F%A4%E7%94%B0-174677775950969/', 'kodawari' => '完全個室／駅近／ＶＩＰルームあり／手ぶらＯＫ／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>111,'name'=> 'タンニングルーム・プラージュ', 'kana_name'=>'たんにんぐるーむぷらーじゅ', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 5201, 'address' => '松本市大字里山辺1435-5', 'near_st' => '', 'load_navi' => '', 'tel' => '0263-35-0696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>112,'name'=> 'チューブ', 'kana_name'=>'ちゅーぶ', 'catch_msg'=>'健康的な肌をてに入れましょう','summary' => '健康的で若々しく細く見える小麦色に日焼けしたい方。必ず思い通りに日焼けできる様、お客様の肌に合ったメニューをスタッフが明るく優しく適切なアドバイスで対応します。安全性の高いマシンによる日焼けで、自然の太陽光線の日焼けよりも美しく、健康的な肌を手に入れましょう。マシンに入ることにより汗をかく為、ストレス解消にもなり、外見だけでなく内面からも美しくなれます。お気軽にお越し下さい。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏期営業時間	10：00～21：00／冬期営業時間11：00～21：00', 'close_day' => '無休', 'area_code' => 7102, 'address' => '大阪府大阪市阿倍野区松崎町2-4-15 イトウビル,3F', 'near_st' => '天王寺駅、大阪阿倍野橋駅', 'load_navi' => 'ＪＲ・地下鉄天王寺駅から徒歩５分、近鉄あべの橋駅から徒歩３分', 'tel' => '06-6627-7714', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://tanpopo-tane.com/detail.asp?id=10038', 'kodawari' => 'ドリンクサービスあり／手ぶらＯＫ／温泉施設あり／駅近／マシーン種類豊富／女性割引あり／格安サロン', 'customers' => '','min_price' => 1300 ),
array('company_id'=>113,'name'=> '野々市店', 'kana_name'=>'とろぴかーなののいちしてん', 'catch_msg'=>'完全個室','summary' => '専属モデル、スタッフ募集中','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～22:00', 'close_day' => '年中無休', 'area_code' => 3201, 'address' => '石川県 野々市市 本町5丁目11－17', 'near_st' => '', 'load_navi' => '', 'tel' => '076-246-4989', 'machine_num' => '4', 'parking' => 'あり4台', 'site_url' => 'http://cosmic-biz.com/index1.html', 'kodawari' => '駐車場あり／完全個室／学割あり／女性割引あり／お得な回数券・プリペイドカードあり／紹介割引あり', 'customers' => '','min_price' => null ),
array('company_id'=>113,'name'=> '高岡店', 'kana_name'=>'とろぴかーなたかおかてん', 'catch_msg'=>'完全個室','summary' => '専属モデル、スタッフ募集中','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～22:00', 'close_day' => '年中無休', 'area_code' => 3101, 'address' => '富山県高岡市井口本江640-2', 'near_st' => '', 'load_navi' => '', 'tel' => '0766-22-4989', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://cosmic-biz.com/index1.html', 'kodawari' => '完全個室／学割あり／女性割引あり／お得な回数券・プリペイドカードあり／紹介割引あり', 'customers' => '','min_price' => null ),
array('company_id'=>113,'name'=> '金沢店', 'kana_name'=>'とろぴかーなかなざわてん', 'catch_msg'=>'完全個室','summary' => '専属モデル、スタッフ募集中','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～22:00', 'close_day' => '年中無休', 'area_code' => 3201, 'address' => '石川県金沢市鞍月東2-66', 'near_st' => '', 'load_navi' => '', 'tel' => '076-239-4989', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://cosmic-biz.com/index1.html', 'kodawari' => '完全個室／学割あり／女性割引あり／紹介割引あり', 'customers' => '','min_price' => null ),
array('company_id'=>113,'name'=> '富山店', 'kana_name'=>'とろぴかーなとやまてん', 'catch_msg'=>'完全個室','summary' => '専属モデル、スタッフ募集中','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～22:00', 'close_day' => '年中無休', 'area_code' => 3101, 'address' => '富山県富山市四ツ葉町22−29', 'near_st' => '', 'load_navi' => '', 'tel' => '076-444-4989', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://cosmic-biz.com/index1.html', 'kodawari' => '完全個室／学割あり／女性割引あり／紹介割引あり', 'customers' => '','min_price' => null ),
array('company_id'=>114,'name'=> 'ノワール豊田', 'kana_name'=>'のわーるとよた', 'catch_msg'=>'愛知県豊田市の日焼けサロン ノワール豊田は落ち着いた雰囲気の日焼けサロンです。','summary' => '愛知県豊田市の日焼けサロン　ノワール豊田は落ち着いた雰囲気の日焼けサロンです。ハイスペック日焼けマシンで快適なリフレッシュタイムを！愛知県豊田市で日焼けサロンをお探しならノワール豊田へお越しください。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00 ～24:00／最終受付時間 23:00', 'close_day' => '', 'area_code' => 6204, 'address' => '愛知県豊田市永覚新町4-202-1　2F', 'near_st' => '末野原駅', 'load_navi' => '末野原駅より徒歩17分
※県道76号線沿い　ＣＯＣＯ壱番（大林支店）横', 'tel' => '0565-26-9696', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://www.soltron.jp/noir/', 'kodawari' => '深夜まで営業／駐車場あり／学割あり／女性割引あり／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => 2000 ),
array('company_id'=>115,'name'=> 'ビー・ブラック（ＢＥ・ＢＬＡＣＫ）タンニングスタジオ', 'kana_name'=>'びーぶらっく', 'catch_msg'=>'TANNING STUDIO 「BEBLACK」は、セーフティ＆リーズナブル！
安全＋低料金でAM10:00～翌朝のAM６：００まで営業しています！','summary' => 'タンニングすることにより、体に優良な内分泌活動が活発になります
日焼けしながら適度に汗をかいた後は、シャワーを浴びてくつろげば心も体もリフレッシュ！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～6:00／最終受付5:00　', 'close_day' => '', 'area_code' => 1001, 'address' => '札幌市中央区南２条西４丁目PASSE2・4ビル2階', 'near_st' => '大通駅', 'load_navi' => '地下鉄各線・大通駅徒歩3分', 'tel' => '011-233-1696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.beblack.jp/', 'kodawari' => '朝まで営業／手ぶらＯＫ／ドリンクサービスあり／完全個室／初回割引あり／駅近／格安サロン', 'customers' => '','min_price' => 1260 ),
array('company_id'=>116,'name'=> 'ビーチタイム札幌店', 'kana_name'=>'びーちたいむさっぽろてん', 'catch_msg'=>'ビューティフルボディーをプロデュース！','summary' => '日本最大級の日焼けサロン。マシン台数21台。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '平日11:00～22:00（最終受付）／
土・日・サービスデー10:00～23:00（最終受付）／
祝日10:00～22:00（最終受付）／
※季節により、店休日・営業時間が異なります', 'close_day' => '不定休', 'area_code' => 1001, 'address' => '北海道札幌市中央区北4条西1丁目4-1
ベガスベガスビル2階', 'near_st' => '札幌駅', 'load_navi' => '函館本線「札幌駅」徒歩5分', 'tel' => '011-200-5033', 'machine_num' => '21', 'parking' => '', 'site_url' => 'http://www.beach-time.jp/sapporo/', 'kodawari' => '駅近／マシーン種類豊富／コラーゲンマシーンあり／強力マシーンあり／学割あり／紹介割引あり／初回割引あり／完全個室／格安サロン', 'customers' => '10代から50代まで幅広いお客様に支持されています。','min_price' => 1100 ),
array('company_id'=>117,'name'=> 'フィットネスプラザジャンプス', 'kana_name'=>'ふぃっとねすぷらざじゃんぷす', 'catch_msg'=>'NEWタン二ングマシン導入　山陰初(sportarredo)　MADE IN ITALY
　　　
見学・ご予約承ります！','summary' => '運動したことない、痩せたい、筋肉をつけたい、競技力UPを望む人

減量、筋力アップ、中高年の気になるお腹回りや女性のボディラインを引き締める、
各種アスリートのレベルアップ等あらゆるご要望にスタッフがお応えします。
広々としたトレーニングスペースに充実した設備を驚きの低料金でご提供します！！
新たに女性専用スペースを設置しました。
また、米子市唯一の個室シャワー付き日焼けルームも低料金でご利用頂けます。
ぜひご利用ください！！  ','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '平日13：30～22：00／土曜日13：30～19：00／祝祭日13：30～18：00

／最終チェックインは閉店60分前', 'close_day' => '日曜日', 'area_code' => 8301, 'address' => '鳥取県米子市両三柳861-1', 'near_st' => '三本松口駅', 'load_navi' => '三本松口駅より徒歩8分', 'tel' => '0859-29-4077', 'machine_num' => '4', 'parking' => 'あり', 'site_url' => 'http://fitness-jumps.jimdo.com/%E6%97%A5%E7%84%BC%E3%81%91%E3%82%B5%E3%83%AD%E3%83%B3/', 'kodawari' => '予約優先／駐車場あり／完全個室／手ぶらＯＫ／トレーニングジム併設／格安サロン', 'customers' => '','min_price' => 1200 ),
array('company_id'=>118,'name'=> 'フェイバー', 'kana_name'=>'ふぇいばー', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 6102, 'address' => '静岡県磐田市二之宮東13-11', 'near_st' => '', 'load_navi' => '', 'tel' => '0538-37-5551', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>119,'name'=> 'ブラックブラック高崎', 'kana_name'=>'ぶらっくぶらっくたかさき', 'catch_msg'=>'『ぶらぶら高崎店』は新感覚の全く新しい、
ラグジュアリーな日焼スタジオです。
個室にシャワールームを完備！

パウダールーム無料で利用できます！','summary' => '今話題の「ぶらぶら高崎店」。人気の理由はなんといっても、完全個室タイプのプライベート空間！シャワーや着替える場所が共同スペースなお店が多いなかで、ぶらぶら高崎店では、マシーンからシャワーまで全て個室に完備しているので、リラックスしてタンニングができます。


健康的な小麦色をキープ！
女性に大好評なのが、無料で使えるパウダールームが完備されていること！ぜひ極上のリラクゼーション空間をご堪能ください。意外と知られていませんが、全身に紫外線を適度に浴びることで爽快感が得られますので、だるさや倦怠感がスッキリします！健康的な小麦色をキープしたい方も、スッキリとした爽快感を感じたい方も、日焼スタジオブラックブラックに是非一度お越し下さい！日焼サロン未体験の方も大歓迎です。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～26:00 ／最終受付25:00', 'close_day' => '', 'area_code' => 4501, 'address' => '群馬県高崎市飯塚町460-1', 'near_st' => '', 'load_navi' => '', 'tel' => '027-384-8902', 'machine_num' => '9', 'parking' => 'あり15台', 'site_url' => 'http://www.dan-b.com/blackblack/', 'kodawari' => '駐車場あり／深夜まで営業／予約優先／完全個室', 'customers' => '20代前半～50代','min_price' => 2300 ),
array('company_id'=>120,'name'=> 'へヴンリー', 'kana_name'=>'べヴんりー', 'catch_msg'=>'日焼けサロン ヘヴンリーは、肌の安全性最優先のお店です。 UVバランス、照射強度、時間管理、クールタンニングを行うことにより、安心して日焼けをしていただけます。','summary' => '日焼けサロン　ヘヴンリーは、肌の安全性最優先のお店です。
UVバランス、照射強度、時間管理、クールタンニングを行うことにより、安心して日焼けをしていただけます。
強力24,000Wのハイパワーマシン、全身に影を作らず焼き上げる縦型マシン、リラックスして日焼けできるベッド型マシン、
顔焼きマシンなどを取り揃えております。日焼けマシンが照射する人工的な紫外線を肌に当て安全に小麦色に変身させます。
""水素水導入
高気圧 酸素カプセル
パーソナルトレーニング""','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00 ～22:00', 'close_day' => '', 'area_code' => 3101, 'address' => '富山県高岡市野村1375-6', 'near_st' => '', 'load_navi' => '', 'tel' => '0766-26-6119', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://www.heavenly.jp/index.html', 'kodawari' => '駐車場あり／強力マシーンあり／酸素カプセルあり／マシーン種類豊富／トレーニングジム併設／お得な回数券・プリペイドカードあり／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>121,'name'=> '前橋店', 'kana_name'=>'べらーのたんにんぐすたじおまえばしてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4501, 'address' => '群馬県前橋市下小出町3-14-24', 'near_st' => '', 'load_navi' => '', 'tel' => '027-233-8916', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>122,'name'=> 'ヘルシー温泉タテバ', 'kana_name'=>'へるしーおんせんたてば', 'catch_msg'=>'無料駐車場完備！朝の5時まで営業しております！','summary' => '全室鍵付き個室。（女性の方も安心してご利用いただけます）　館内着無料レンタル。　当店では全てのマシンに最高品質のタンニングランプ「Rタイプ」を装着。他店のマシンと焼き比べてみてください。違いは一目瞭然です。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '14:00～29:00', 'close_day' => '', 'area_code' => 7102, 'address' => '大阪市浪速区桜川2-14-19', 'near_st' => '桜川駅、難波駅、芦原橋駅', 'load_navi' => '桜川駅より徒歩6分', 'tel' => '0120-514-026', 'machine_num' => '6', 'parking' => 'あり', 'site_url' => 'http://www.tateba.com/hiyake/', 'kodawari' => '温泉施設あり／マッサージあり／駐車場あり／朝まで営業', 'customers' => '','min_price' => 2200 ),
array('company_id'=>123,'name'=> 'マリンＣＬＵＢ小山店', 'kana_name'=>'まりんくらぶこやまてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4601, 'address' => '小山市 城山町３丁目２－１４', 'near_st' => '小山駅', 'load_navi' => '小山駅西口出口から徒歩約1分', 'tel' => '0285-21-3007', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>124,'name'=> 'マリンクラブ', 'kana_name'=>'まりんくらぶ', 'catch_msg'=>'白で統一した清潔感溢れる店内。サービスも充実。低料金からご利用いただけます。','summary' => '白で統一した清潔感溢れる店内。サービスも充実させつつ、低料金の\1,050～となっていますので10代～70代と幅広い年齢層からご利用頂いております','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '月～金11：00～02：00／最終受付01：00／月、水、金のみ朝5：00まで営業／土・日08：30～02：00／最終受付01：00', 'close_day' => '年中無休', 'area_code' => 1001, 'address' => '北海道札幌市中央区南2条西5丁目26-4 SOWAビル5階', 'near_st' => '大通駅', 'load_navi' => '地下鉄大通駅徒歩3分', 'tel' => '011-231-9614', 'machine_num' => '12', 'parking' => 'なし', 'site_url' => 'http://9614.info/', 'kodawari' => '朝まで営業／駅近／クレジットカード利用可能／女性割引あり／マシーン種類豊富／強力マシーンあり／初回割引あり／格安サロン', 'customers' => '','min_price' => 1050 ),
array('company_id'=>125,'name'=> 'マリンクラブ', 'kana_name'=>'まりんくらぶ', 'catch_msg'=>'福岡の大人気日焼けサロン「マリンクラブ福岡」','summary' => '初めてご来店の方もｓｔａｆｆが丁寧にご説明
させて頂きますのでお気軽にご来店下さいね（*^_^*）

マリンクラブはブログも更新しておりますので
そちらのチェックもどうぞよろしくお願い致します＼(^o^)／','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～25:00／最終受付時間24:00', 'close_day' => '年中無休', 'area_code' => 10101, 'address' => '福岡県福岡市中央区天神3-5-9マリンビル1Ｆ', 'near_st' => '赤坂駅、天神駅、西鉄福岡駅', 'load_navi' => '[西通り]
西鉄 グランドホテル左手、カメラのキタムラ右手で2つの横断歩道を渡り、右手駅前不動産を通り1つ目の角を右折し、左手3軒目にやしの木の看板を見つけ、そのビルの1Fです。
[西鉄福岡駅]
西鉄福岡駅左手、天神コア右手で2つの信号（左手紳士服フタタ）を左折し、右手に駅前不動産の信号右折し、1つ目の角を右折し、左手3軒目にやしの木の看板を見つけ、そのビルの1Fです。
[天神北]
都市高速天神北でおり、3つ目の信号右折し、1つ目の信号（左手ガソリンスタンド）左折し左手4つ目の角を左折し、左手3軒目にやしの木の看板見つけ、そのビルの1Fです。', 'tel' => '092-751-9618', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.marineclub-fukuoka.com/', 'kodawari' => '深夜まで営業／駅近／初回割引あり／手ぶらＯＫ／学割あり／紹介割引あり／お得な回数券・プリペイドカードあり／朝割引あり／マシーン種類豊富', 'customers' => '','min_price' => null ),
array('company_id'=>126,'name'=> '赤坂店', 'kana_name'=>'めらすあかさかてん', 'catch_msg'=>'日焼けサロン | メラス 赤坂店,麻布店共に銀座方面からのアクセスに便利 東京都港区','summary' => '完全個室でマシーンのスイッチから、脱衣、シャワーまで全て部屋からでないで済ますことが出来ますので、人の目を気にせず落ち着いてご利用できます。
赤坂店、麻布店とも銀座、新橋、六本木、青山方面からのアクセスに便利ですのでお仕事やお出かけの帰りにお気軽にお立ち寄りください。
当店は完全個室で落ち着いた雰囲気のおとなのための日焼けサロンです。芸能人の方にもご利用いただいております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～26:00', 'close_day' => '年中無休', 'area_code' => 4107, 'address' => '東京都港区赤坂3-12-3', 'near_st' => '赤坂駅、赤坂見附駅', 'load_navi' => '東京メトロ千代田線「赤坂駅」より徒歩1分
東京メトロ丸の内線・銀座線「赤坂見附駅」より徒歩3分', 'tel' => '03-5114-1444', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://merasu.jp/', 'kodawari' => '駅近／完全個室／大人向けサロン／手ぶらＯＫ／初回割引あり／マシーン種類豊富／強力マシーンあり／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>126,'name'=> '麻布店', 'kana_name'=>'めらすあざぶてん', 'catch_msg'=>'日焼けサロン | メラス 赤坂店,麻布店共に銀座方面からのアクセスに便利 東京都港区','summary' => '完全個室でマシーンのスイッチから、脱衣、シャワーまで全て部屋からでないで済ますことが出来ますので、人の目を気にせず落ち着いてご利用できます。
赤坂店、麻布店とも銀座、新橋、六本木、青山方面からのアクセスに便利ですのでお仕事やお出かけの帰りにお気軽にお立ち寄りください。
当店は完全個室で落ち着いた雰囲気のおとなのための日焼けサロンです。芸能人の方にもご利用いただいております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～30:00', 'close_day' => '年中無休', 'area_code' => 4107, 'address' => '東京都港区南麻布2-5-2', 'near_st' => '麻布十番駅', 'load_navi' => '東京メトロ南北線
都営地下鉄大江戸線「麻布十番駅」より徒歩五分', 'tel' => '03-3769-1444', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://merasu.jp/', 'kodawari' => '駅近／完全個室／大人向けサロン／手ぶらＯＫ／初回割引あり／マシーン種類豊富／強力マシーンあり／朝まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>127,'name'=> 'ユーランドエステ部', 'kana_name'=>'ゆーらんどえすてぶ', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4201, 'address' => '神奈川県横浜市鶴見区下末吉２丁目２１−２０', 'near_st' => '鶴見駅', 'load_navi' => '鶴見駅より徒歩21分', 'tel' => '045-585-1497', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>128,'name'=> 'ラグーナ', 'kana_name'=>'らぐーな', 'catch_msg'=>'初めての方も安心です。
長野駅より徒歩５分。
クラス最上級、最新マシン装備。','summary' => '受付
ラグーナ　受付 初めての方も安心です。 営業時間 AM11:00~PM10:00 PM9:00までにご予約無い場合PM9:00閉店 になります。 ５月度より夏期、冬期営業時間統一とさせて頂きます。

LAGUNA 日焼けマシン
Laguna 日焼けマシン 当店お勧めマシン 日本人の肌質に最適。 最新モデルマシン

更衣室,ご利用案内
いくつかのご注意点、ご利用価格 お肌の弱い方、初めての方はお気軽にご相談ください。

初めての方やお肌の弱い方は事前にスタッフにお問い合わせ下さい。

当店のマシンは強めのマシンで揃えている為、短めのお時間で効果があります。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00〜22:00／最終受付時間21:00', 'close_day' => '平成28年5月1日～9月30日の間は、定休日無しで営業します', 'area_code' => 5201, 'address' => '長野市南千歳町860−24
ビトロアレイⅡ　 2F', 'near_st' => '長野駅', 'load_navi' => '長野駅より徒歩5分。', 'tel' => '026−217−4747', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://laguna.jp/', 'kodawari' => '駅近／お得な回数券・プリペイドカードあり／学割／格安サロン', 'customers' => '','min_price' => 700 ),
array('company_id'=>129,'name'=> '川崎店', 'kana_name'=>'らこすたかわさきてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '平日12:00～25:00／土日10:00～25:00', 'close_day' => '', 'area_code' => 4203, 'address' => '神奈川県 川崎市川崎区小川町２－１', 'near_st' => '川崎駅', 'load_navi' => '川崎駅東口出口から徒歩約4分', 'tel' => '044-222-9696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近／深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>130,'name'=> 'ひばりヶ丘店', 'kana_name'=>'らふぃーねひばりがおかてん', 'catch_msg'=>'当店はマナーの良いお客様が中心のお店です。','summary' => '当店はマナーの良いお客様が中心のお店です。
☆Hawaii☆イメージの明るい店内で落ち着いてゆっくりできます。
スタッフ一同、笑顔で親切・丁寧に接客させて頂きます。
女性のお客様やおひとり様でのご来店でも安心の日サロです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00／最終受付時間23:00', 'close_day' => '毎月第3木曜日
(6月～8月はお休みなし)', 'area_code' => 4114, 'address' => '東京都西東京市谷戸町
3-27-11ひばりヶ丘南館4階', 'near_st' => 'ひばりヶ丘駅', 'load_navi' => 'ひばりヶ丘駅　徒歩２分', 'tel' => '042-425-3555', 'machine_num' => '4', 'parking' => 'なし', 'site_url' => 'http://lafiene-hiyake.com/', 'kodawari' => '駅近／ドリンクサービスあり／女性割引あり／初回割引あり／紹介割引あり／深夜まで営業', 'customers' => '','min_price' => 2000 ),
array('company_id'=>131,'name'=> 'レインボー', 'kana_name'=>'れいんぼー', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 1002, 'address' => '福岡県 久留米市 合川町2208－1', 'near_st' => '', 'load_navi' => '', 'tel' => '0942-38-4565', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>132,'name'=> 'ログハウスの中にある日焼けサロン 焼けぼっくり', 'kana_name'=>'ろぐはうすのなかにあるひやけさろん　やけぼっくり', 'catch_msg'=>'完全に占有出来ますので女性のお客様にも安心出来るプライベートサロンです。','summary' => '当店の特徴は輸入ログハウスのいい戸建です。さらに完全予約制のため他のお客様とバッティングすることなく使用中は完全に貴方だけのプライベートハウスとなり女性の方にも安心で、快適な他イニングをお約束できます。またログハウス敷地内に無料大型駐車場を設けておりますゆえ大事なお車の心配全くございません。初めてのお客様は一様にとっても落ち着きますと評価いただいております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '8:00 ～ 22:00', 'close_day' => '年中無休', 'area_code' => 4201, 'address' => '神奈川県横浜市鶴見区佃野町21-30', 'near_st' => '鶴見駅', 'load_navi' => 'JR鶴見駅西口より徒歩8分', 'tel' => '045-573-7736', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://yakebokkuri.on.omisenomikata.jp/', 'kodawari' => '完全個室／駐車場あり／完全予約制／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>133,'name'=> '山形本店', 'kana_name'=>'ろこぱらやまがたほんてん', 'catch_msg'=>'『はじめよう、日焼けライフ。』山形市七日町の日焼けサロンロコズパラダイス山形本店では、プロのタンニングアドバイザーがお客様ひとりひとりの日焼けライフをサポートします。日焼けサロンの利用が初めての方でも安心してご利用いただけます。','summary' => '山形県山形市七日町で営業している日焼けサロンロコズパラダイス山形本店は日焼けサロン専門店としては山形県初の日焼けサロンとして20年以上実績のある日焼けサロンです。ドイツ製uwe社業務用日焼けマシンの日本総代理店で日本全国に日焼けマシーンを販売している株式会社コロンブスジャパンの直営日焼けサロン本部でもあり、いつでも新型日焼けマシーンで日焼けができる日焼けサロンです。山形本店をご利用いただいているお客様はアダルトのお客様も多く、落ち着いた雰囲気でご利用できる大人の日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '4月～10月　12:00～23:00／11月～3月　12:00～22:00', 'close_day' => '年中無休', 'area_code' => 2401, 'address' => '山形県山形市七日町1-4-24', 'near_st' => '山形駅', 'load_navi' => '山形駅より徒歩20分。
山形市七日町通り(一方通行）を文翔館（旧県庁）方面へ行き、右にナナビーンズ・左にドトールコーヒーの交差点を左（西）へ曲がり3件目（30㍍ほど）行くと左の2階に大きな看板があります。エレベーターで2Fへ行けばすぐお店です。', 'tel' => '023-631-9696', 'machine_num' => '', 'parking' => '無料駐車場なし', 'site_url' => 'http://hiyake.yamagata.jp/', 'kodawari' => '完全個室／初回割引あり／学割あり', 'customers' => '10代～60代まで幅広くご利用頂いております。','min_price' => null ),
array('company_id'=>133,'name'=> '山形南店', 'kana_name'=>'ろこぱらやまがたみなみてん', 'catch_msg'=>'全室個室でシャワールーム・メイクルームも完備しております。
女性の方の為ににバスローブもございます。','summary' => '山形県山形市南館にある日焼けサロンロコズパラダイス山形南店お店のテーマは「極上シンプル」ドイツuwe社の世界トップクラスの最新マシンを6台導入している県内最大級の日焼けサロン専門店です。2年連続日焼けマシーンを総入替するくらい日焼けマシーンにはこだわりがあります。一般の日焼けマシーンよりも日焼け度の高い高級紫外線ランプを使用し、他店では味わえない世界レベルの極上日焼けがあなたの肌を輝かせます。シンプルなお店づくりの陰には、スタッフの徹底した店内の美化、清潔感・リラックス空間の維持があります。平均年齢20代前半のスタッフは、徹底した接客、タンニングアドバイス・アフターケアの指導を受けております。これからも日々進化し続ける、新しいスタイルの日焼けサロンです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '4月～10月　12:00～23:00／11月～3月　12:00～22:00', 'close_day' => '年中無休', 'area_code' => 2401, 'address' => '山形県山形市南館1-9-8
阿部ビル1F', 'near_st' => '', 'load_navi' => '国道13号線松山交差点を西（西バイパス方面）へ向かい線路をくぐり1つ目の信号を過ぎたら左に牛丼の松や・ドラッグストアのツルハがあります。その真向かいがお店です。大きな看板が目印！その他近くにはオートバックス・ファミレスのビッグボーイがあります。', 'tel' => '023-645-9696', 'machine_num' => '', 'parking' => 'あり10台', 'site_url' => 'http://www.locopara.jp/6459696.html', 'kodawari' => '駐車場あり／完全個室／学割あり', 'customers' => '学生の方から仕事帰りの遅いお客様まで','min_price' => null ),
array('company_id'=>133,'name'=> '盛岡店', 'kana_name'=>'ろこぱらもりおかてん', 'catch_msg'=>'ロコズパラダイスでは常時数名のスタッフが
在籍しています。
兼業のスタッフが多く出番もバラバラなので
なかなか全員とお会いでききないと
おもいますが、
全員フレンドリーで楽しいスタッフばっかり
気軽に声をかけてください！','summary' => '冬が長い盛岡だけど、夏が好き、海が好き、
サーフィンもボードも、もちろんハワイも好き、
そして何より日焼けが大好き！
　ってな岩手っ子の為に1996年オープンしました。
4年前開運橋通から現在の店舗に移店。
日焼けマシーンも更にパワーアップして
フル稼動中です。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～23:00', 'close_day' => '年中無休', 'area_code' => 2301, 'address' => '岩手県盛岡市
　大通3丁目6－19
バーセル開運橋2F', 'near_st' => '盛岡駅', 'load_navi' => '盛岡駅より徒歩5分', 'tel' => '019-625-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.locopara.com/', 'kodawari' => '完全個室／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => 1800 ),
array('company_id'=>134,'name'=> '関内本店', 'kana_name'=>'かんないほんてん', 'catch_msg'=>'関内本店はシャワールーム完備の完全個室です。女性や幅広い層の方に気兼ねなく他のお客様を気にせずタンニングしていただけます。','summary' => '関内本店はシャワールーム完備の完全個室です。女性や幅広い層の方に気兼ねなく他のお客様を気にせずタンニングしていただけます。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間4月～8月　10:00～1:00／日曜祝日　10:00～24:00／／冬季営業時間9月～3月　10:00～24:00', 'close_day' => '', 'area_code' => 4201, 'address' => '横浜市中区蓬莱町2-3-1　杉山ビル6F', 'near_st' => '関内駅', 'load_navi' => '関内駅から徒歩5分', 'tel' => '045-252-9614', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.locoloco-9614.com/kannai_shop.html', 'kodawari' => '駅近／完全個室／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり／深夜まで営業／マシーン種類豊富', 'customers' => '','min_price' => 1700 ),
array('company_id'=>134,'name'=> '上大岡店', 'kana_name'=>'かみおおおかてん', 'catch_msg'=>'もみほぐしスペースLOCOLOCO 業界激震60分2,980円(税抜) の全身もみほぐし専門店です。 ','summary' => '日焼けマシーンはもちろん完備、全身もみほぐしも業界激震の業界激震60分2,980円(税抜)で行っています。ぜひ一度お試し下さい。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間4月～8月　10:00～1:00／日曜祝日　10:00～24:00／／冬季営業時間9月～3月　10:00～24:00', 'close_day' => '', 'area_code' => 4201, 'address' => '横浜市港南区上大岡西3-1-11　サンシャインビル2F', 'near_st' => '上大岡駅', 'load_navi' => '上大岡駅から徒歩8分', 'tel' => '045-845-9614', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.locoloco-9614.com/kamiooka_shop.html', 'kodawari' => '深夜まで営業／マッサージあり／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり朝割引あり／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>134,'name'=> '川崎店', 'kana_name'=>'かわさきてん', 'catch_msg'=>'エルゴライン＆ソルトロン
最新最強マシーンを激安価格で！','summary' => 'エルゴライン＆ソルトロン
最新最強マシーンを激安価格で！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00', 'close_day' => '', 'area_code' => 4203, 'address' => '川崎市川崎区砂子2-4-20　ニュータケウチビル3F', 'near_st' => '川崎駅', 'load_navi' => '川崎駅から徒歩5分', 'tel' => '044-244-9614', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.locoloco-9614.com/kawasaki_shop.html', 'kodawari' => '駅近／深夜まで営業／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり朝割引あり／格安サロン', 'customers' => '','min_price' => 1500 ),
array('company_id'=>134,'name'=> '蒲田店', 'kana_name'=>'かまたてん', 'catch_msg'=>'エルゴライン＆ソルトロン
最新最強マシーンを激安価格で！','summary' => 'エルゴライン＆ソルトロン
最新最強マシーンを激安価格で！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間4月～8月　10:00～1:00／日曜祝日　10:00～24:00／／冬季営業時間9月～3月　10:00～24:00', 'close_day' => '', 'area_code' => 4108, 'address' => '東京都大田区西蒲田7-1-11　ダイヤビル3F', 'near_st' => '蒲田駅', 'load_navi' => '蒲田駅から徒歩3分', 'tel' => '03-3736-9614', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.locoloco-9614.com/kamata_shop.html', 'kodawari' => '駅近／深夜まで営業／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり朝割引あり／格安サロン', 'customers' => '','min_price' => 1500 ),
array('company_id'=>134,'name'=> '大和店', 'kana_name'=>'やまとてん', 'catch_msg'=>'エルゴライン＆ソルトロン
最新最強マシーンを激安価格で！','summary' => 'エルゴライン＆ソルトロン
最新最強マシーンを激安価格で！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間4月～8月　10:00～1:00／日曜祝日　10:00～24:00／／冬季営業時間9月～3月　10:00～24:00', 'close_day' => '', 'area_code' => 4206, 'address' => '大和市大和南1-11-5　フォーブルいすず1F', 'near_st' => '大和駅', 'load_navi' => '大和駅から徒歩5分', 'tel' => '0462-60-9614', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.locoloco-9614.com/yamato_shop.html', 'kodawari' => '駅近／深夜まで営業／朝割引あり／夜割引あり／お得な回数券・プリペイドカードあり朝割引あり／強力マシーンあり／マシーン種類豊富／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>134,'name'=> '平塚店', 'kana_name'=>'ひらつかてん', 'catch_msg'=>'エルゴライン＆ソルトロン
最新最強マシーンを激安価格で！','summary' => 'エルゴライン＆ソルトロン
最新最強マシーンを激安価格で！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～23:00', 'close_day' => '', 'area_code' => 4205, 'address' => '平塚市明石町26-5 BNSビル1F', 'near_st' => '平塚駅', 'load_navi' => '平塚駅から徒歩5分', 'tel' => '0463-24-9614', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.locoloco-9614.com/hiratsuka_shop.html', 'kodawari' => '駅近／朝割引あり／お得な回数券・プリペイドカードあり朝割引あり／格安サロン', 'customers' => '','min_price' => 1500 ),
array('company_id'=>135,'name'=> 'わくわくの湯', 'kana_name'=>'わくわくのゆ', 'catch_msg'=>'完全個室完備
お風呂、カラオケ、リラクゼーション複合施設','summary' => '「あなたのしたい」をすべてかなえるスペース。
総合アミューズメントパーク。
それがわくわくの湯です。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '月～木・日曜 8:00～25:00   ／金曜・土曜8:00～26:00', 'close_day' => '年中無休', 'area_code' => 6301, 'address' => '岐阜県羽島市正木町新井936', 'near_st' => '羽島市役所前駅', 'load_navi' => '[お車の場合]
●岐阜方面からのアクセス
岐阜環状線を南へ直進。大垣一宮線を一宮方面へ
●一宮方面からのアクセス
大垣一宮線を羽島方面に、濃尾大橋を渡って直進すぐ
●名神高速羽島ＩＣからのアクセス
大垣一宮線を一宮方面へ
[電車の場合]
●名鉄岐阜駅より
名古屋本線　笠松駅で名鉄竹鼻線に乗り換え　羽島市役所前下車　徒歩25分', 'tel' => '058-391-8989', 'machine_num' => '5', 'parking' => 'あり200台', 'site_url' => 'http://www.wakuwakunoyu.com/hiyake/index.html', 'kodawari' => '駐車場あり／完全個室／カラオケ併設／温泉施設あり／格安サロン', 'customers' => '','min_price' => 945 ),
array('company_id'=>136,'name'=> '黒べぇーっ', 'kana_name'=>'くろべえ', 'catch_msg'=>'安心・安全な光パワーで松山に元気をご提供します！','summary' => '安心・安全な光パワーで松山に元気をご提供します！
黒べぇーっの日焼けマシン及びライトは、すべてヨーロッパの医療用ライトを使用しています。
「焼く」だけじゃない、美容健康サロン黒べぇーっをご堪能下さい。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00〜21:00／最終受付時間21:00', 'close_day' => '', 'area_code' => 9101, 'address' => '愛媛県松山市湊町4丁目12番地11
佐伯物産ビルNo.7 3F', 'near_st' => '松山市駅', 'load_navi' => '松山市駅より徒歩5分', 'tel' => '089-932-9614', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近／学割あり／格安サロン', 'customers' => '','min_price' => 1500 ),
array('company_id'=>137,'name'=> '南大分ｼﾞﾑ', 'kana_name'=>'おおいたとれーにんぐくらぶみなみおおいたじむ', 'catch_msg'=>'入会金等もなく、どなたでもご利用いただけます。','summary' => '入会金等もなく、どなたでもご利用いただけます。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:15～22:00', 'close_day' => '日・祝定休', 'area_code' => 10501, 'address' => '大分県大分市大字荏隈尼ケ瀬4', 'near_st' => '', 'load_navi' => '明磧橋上流500m', 'tel' => '097-546-1060', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://www.oitatrainingclub.com/hiyake.html', 'kodawari' => '駐車場あり／トレーニングジム併設／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>137,'name'=> '上野ジム', 'kana_name'=>'おおいたとれーにんぐくらぶうえのじむ', 'catch_msg'=>'入会金等もなく、どなたでもご利用いただけます。','summary' => '入会金等もなく、どなたでもご利用いただけます。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～21:30', 'close_day' => '日・祝定休', 'area_code' => 10501, 'address' => '大分県大分市上野丘西10−25', 'near_st' => '', 'load_navi' => '上野丘高校すぐ近く', 'tel' => '097-544-3839', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://www.oitatrainingclub.com/hiyake.html', 'kodawari' => '駐車場あり／トレーニングジム併設／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>138,'name'=> '日サロカリブ', 'kana_name'=>'ひさろかりぶ', 'catch_msg'=>'「安心」「安い「早い」
カリブはこの3つのことがらをコンセプトに営業しています。安いが焼けない。高くて焼けて当たり前の概念を覆すプラン設定及びマシン導入を行い、いかにお客様に納得して頂くかが一番大切な事だと考えております。リーズナブルな価格でスピーディーな日焼けを安心してお楽しみ下さい。','summary' => '1.更衣室、シャワー室が完全個室に!!
（マシーンまでの移動は有ります）

2.充実したアメニティーグッズ
（Ｔ字カミソリ・マウスウォッシュ・メイク落とし）

3.シャワー室にはシャンプー、リンス、ボディーソープ、洗顔、使い捨てボディスポンジを完備し手ぶらでお越しいただけるようにしております。

セット割引あり

全メニューオイル付','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～23:00／最終受付時間22:00', 'close_day' => '年中無休', 'area_code' => 7105, 'address' => '大阪府池田市空港1-5-22　ポートサイドビル4F', 'near_st' => '蛍池駅', 'load_navi' => '■阪急宝塚線蛍池駅徒歩10分
■モノレール大阪空港駅徒歩7分', 'tel' => '06-6853-7233', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://www.hisaro-carib.com/', 'kodawari' => '駐車場あり／マシーン種類豊富／焼き放題メニューあり／強力マシーンあり', 'customers' => '','min_price' => 2200 ),
array('company_id'=>139,'name'=> '日焼けアイランドアクアたまプラーザ店', 'kana_name'=>'ひやけあいらんどあくあたまぷらーざてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4202, 'address' => '神奈川県横浜市青葉区美しが丘1-5-2', 'near_st' => 'たまプラーザ駅', 'load_navi' => 'たまプラーザ駅より徒歩3分', 'tel' => '045-902-8481', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>140,'name'=> '中野栄店', 'kana_name'=>'ばりはりなかのさかえてん', 'catch_msg'=>'店内はゆったりとしたスペースで日焼けマシーン４台を取り揃えております。','summary' => '店内はゆったりとしたスペースで日焼けマシーン4台を取り揃えております。
初めて焼かれる方用のノーマルマシーンは20分から学生・GOLD・VIP会員・840円・一般2100円、
小麦肌を目指す方のスーパーマシーン20分から学生・GOLD・VIP会員・1575円・一般2940円、
立ったまま焼く縦型マシーンは、全身むらなくきれいに焼けるので好評です。15分から学生・GOLD・VIP会員・1050円・一般2100円
上半身を中心に焼くフェイスマシーンは、椅子に座ったまま焼く事ができ、顔や首周りを焼かれるのに効果的です。15分から学生・GOLD・VIP会員・1365円・一般2100円
一般のお客様もGOLD会員3150円(30日間有効)、VIP会員5250円(60日間有効)に入会されるとタンニング料金は学割料金と同じく通常の半額程度にてご利用いただけます。
又、会員以外の一般の方は14時30分までにご来店されると25％OFFとなります。
ムラなく、綺麗にそして安全に日焼けできるようにベテランスタッフが親切丁寧に説明しご案内させて頂きますので初めて日焼けサロンに通われる方でも安心してお越し下さい。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '4月～10月　10:00～23:00　／11月～3月　11:00～22:30', 'close_day' => 'なし', 'area_code' => 2501, 'address' => '宮城県仙台市宮城野区出花2-65-2　  荻野ビル2F', 'near_st' => '中野栄駅', 'load_navi' => 'JR仙石線中野栄駅下車　徒歩2分', 'tel' => '022-388-7713', 'machine_num' => '4', 'parking' => 'あり5台', 'site_url' => 'http://www.towa-pro-nets.com/bari-hari/', 'kodawari' => '駅近／駐車場あり', 'customers' => '','min_price' => null ),
array('company_id'=>140,'name'=> '吉成店', 'kana_name'=>'ばりはりよしなりてん', 'catch_msg'=>'落ち着いた雰囲気の店内には日焼けマシーン３台を取り揃えております。','summary' => '落ち着いた雰囲気の店内には日焼けマシーン3台を取り揃えております。初めて焼かれる方用のノーマルマシーンは20分から学生・GOLD・VIP会員・840円・一般1575円、
小麦肌を目指す方のスーパーマシーンは、20分から学生・GOLD・VIP会員・1260円・一般2625円、
上半身を中心に焼くフェイスマシーンは、椅子に座ったまま顔や首周りを焼く事ができベッド型タイプのマシーンと合わせて焼かれるとより効果的です。10分から学生・GOLD・VIP会員・840円・一般1260円
一般のお客様もGOLD会員3150円(30日間有効)、VIP会員5250円(60日間有効)に入会されるとタンニング料金は学割料金と同じく通常の半額程度にてご利用いただけます。
又、会員以外の一般の方は18時までにご来店されると25％OFFとなります。
ムラなく、綺麗にそして安全に日焼けできるようにベテランスタッフが親切丁寧に説明しご案内させて頂きますので初めて日焼けサロンに通われる方でも安心してお越し下さい。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '4月～10月　10:00～23:00　／11月～3月　11:00～22:30', 'close_day' => 'なし', 'area_code' => 2501, 'address' => '宮城県仙台市青葉区吉成3-1-2　  遠藤ビル2F', 'near_st' => '市営バス吉成一丁目下車　1分　　北環状線パチンコタイガー吉成店並び', 'load_navi' => '市営バス吉成一丁目下車　徒歩1分　　北環状線パチンコタイガー吉成店並び', 'tel' => '022-277-7678', 'machine_num' => '3', 'parking' => 'あり3台', 'site_url' => 'http://www.towa-pro-nets.com/bari-hari/', 'kodawari' => '駐車場あり', 'customers' => '','min_price' => null ),
array('company_id'=>140,'name'=> '古川店', 'kana_name'=>'ばりはりふるかわてん', 'catch_msg'=>'明るい雰囲気の店内には日焼けマシーン４台を取り揃えています。','summary' => '明るい雰囲気の店内には日焼けマシーン4台を取り揃えています。初めて焼かれる方用のノーマルマシーンは20分から学生・GOLD・VIP会員・840円・一般1890円、
小麦肌を目指す方のスーパーマシーンは、20分から学生・GOLD・VIP会員・1050円・一般2100円、
ブロンズ肌には10分で黒くなるマックスマシーンは、20分から学生・GOLD・VIP会員・1680円・一般3045円、
上半身を中心に焼くフェイスマシーンは、椅子に座ったまま焼く事ができ、顔や首周りを焼かれるのに効果的です。15分から学生・GOLD・VIP会員・1365円・一般2100円
一般のお客様もGOLD会員3150円(30日間有効)、VIP会員5250円(60日間有効)に入会されるとタンニング料金は学割料金と同じく通常の半額程度にてご利用いただけます。
又、会員以外の一般の方は18時までにご来店されると25％OFFとなります。
ムラなく、綺麗にそして安全に日焼けできるようにベテランスタッフが親切丁寧に説明しご案内させて頂きますので初めて日焼けサロンに通われる方でも安心してお越し下さい。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '4月～10月　10:00～23:00　／11月～3月　11:00～22:30', 'close_day' => 'なし', 'area_code' => 2502, 'address' => '宮城県大崎市古川駅前大通2-2-31　  早坂ビル2F', 'near_st' => '古川駅', 'load_navi' => '古川駅より徒歩2分', 'tel' => '0229-23-0089', 'machine_num' => '4', 'parking' => '', 'site_url' => 'http://www.towa-pro-nets.com/bari-hari/', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>141,'name'=> '日焼けサロン　Ｇぐる～', 'kana_name'=>'ひやけさろんぐーぐる', 'catch_msg'=>'ドイツUWE　高級日焼けマシーン！
　
次世代日焼けマシーンを体験して下さい

上級者向け、高級紫外線ランプ LextraPower＆YellowSol

最上級の日焼けが可能です','summary' => '当店は美容院と併設しておりますので、
　美容院の入口からお入り下さい。
　予約制では御座いませんので、お好きな時間にご来店下さい。
　お持ち頂く物はありません、タオル等ご用意してあります。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:00～18:00', 'close_day' => '月曜・第3火曜日', 'area_code' => 6203, 'address' => '春日井市八田町7-1-1', 'near_st' => '春日井駅', 'load_navi' => '春日井駅より徒歩25分', 'tel' => '0568-87-7896', 'machine_num' => '', 'parking' => 'あり10台', 'site_url' => 'http://www.bloodspeed.jp/bs2a.html', 'kodawari' => '駐車場あり／美容院併設／クレジットカード利用可能', 'customers' => '','min_price' => null ),
array('company_id'=>142,'name'=> '堺店', 'kana_name'=>'がじゅまるさかいてん', 'catch_msg'=>'お店は落ち着いた雰囲気が自慢です。学校帰りや仕事帰りにお立ち寄りください。','summary' => '『ランプにこだわりがある、高級日焼けマシーン（ドイツuwe社）』
日焼けサロンガジュマル（堺店・岸和田店）は大阪初導入の次世代日焼けマシーンLOTUSをはじめ、関西初導入の日焼けマシーンi-BEDで初心者から上級者のユーザーが満足していただけるマシーンを導入しております。岸和田店は、日焼けマシーンを多数導入し各部屋にシャワールームも完備しておりますので、マシーン・設備も充実！

『落ち着いた雰囲気で、新しいスタイルの日焼けサロン』
お客様に綺麗に気持ちよご利用いただくために、掃除・衛生面は徹底して管理しております。またアットホームな落ち着いた雰囲気で幅広い年齢層のお客様にご利用頂いております。

『駅から近くて、通いやすい！』
中百舌鳥店はなかもず駅前にあり、仕事帰りや学校帰りに気軽に通っていただけます。2009年10月にオープンしたばかりの岸和田店も、岸和田駅前の商店街の中にあり、駅から徒歩3分でとても通いやすいお店です。

『サービスデーや学割などオトクなサービスが充実！』
サービスデーには、1000円OFFのサービスチケットを発行します。学生の方には学割サービスも！こんなにオトクなサービスがいっぱいなのは日焼けサロンガジュマルだけ！

大阪府堺市のなかもず駅前に次世代日焼けマシーン導入の日焼けサロンガジュマル堺店は、大阪府堺市　中百舌鳥駅徒歩一分の場所にあります。大阪初上陸のドイツ製ＬＯＴＵＳという日焼けマシンを導入。パワー＆デザイン＆機能が上質。お店は落ち着いた雰囲気が自慢です。学校帰りや仕事帰りにお立ち寄りください。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～23:00', 'close_day' => '年中無休', 'area_code' => 7103, 'address' => '大阪府堺市北区中百舌鳥町2-42ファインなかもず2Ｆ', 'near_st' => 'なかもず駅', 'load_navi' => '地下鉄御堂筋線 なかもず駅・南海高野線 なかもず駅から徒歩1分', 'tel' => 'TEL 072-256-4196', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.gaju-maru.jp/sakai.html', 'kodawari' => '駅近／学割あり／お得な回数券・プリペイドカードあり', 'customers' => '','min_price' => null ),
array('company_id'=>143,'name'=> '日焼けサロン ジャングル2', 'kana_name'=>'ひやけさろんじゃんぐるつー', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '月～土9:00～19:00／最終受付時間18:00', 'close_day' => '日曜日・祝日', 'area_code' => 2501, 'address' => '宮城県仙台市太白区長町7丁目18-9 1F', 'near_st' => '長町駅', 'load_navi' => 'JR 長町駅西口より徒歩5分
市営地下鉄 長町南駅東1出口より徒歩5分
市営地下鉄 長町駅南1出口より徒歩5分', 'tel' => '022-248-9600', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'https://www.facebook.com/#!/pages/日焼けサロン-Ｊｕｎｇｌｅ2/257059384409405', 'kodawari' => '駅近／駐車場あり', 'customers' => '','min_price' => null ),
array('company_id'=>144,'name'=> '日焼けサロン・キラ緑橋店', 'kana_name'=>'ひやけさろんきらみどりばしてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 7102, 'address' => '大阪府大阪市東成区中本１丁目５−２９', 'near_st' => '緑橋駅', 'load_navi' => '緑橋駅2出口から徒歩約4分', 'tel' => '06-6977-6222', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>145,'name'=> '日焼けサロン・サンビーチ', 'kana_name'=>'ひやけさろんさんびーち', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 6401, 'address' => '三重県四日市市松本3丁目8−7', 'near_st' => '', 'load_navi' => '', 'tel' => '059-355-0089', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>146,'name'=> '日焼けサロン・サンロケ', 'kana_name'=>'ひやけさろんさんろけ', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 3301, 'address' => '福井県福井市大宮3丁目13−9', 'near_st' => '日華化学前駅', 'load_navi' => '日華化学前駅出口1出口から徒歩約4分', 'tel' => '0776-23-5336', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>147,'name'=> '日焼けサロン・セレーノビーチⅢ', 'kana_name'=>'ひやけさろんせれーのびーちすりー', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 3101, 'address' => '富山県富山市太郎丸西町2丁目4-7', 'near_st' => '南富山駅、南小泉町', 'load_navi' => '小泉町駅より徒歩12分', 'tel' => '076-424-9696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>148,'name'=> '日焼けサロン・ソレイユ', 'kana_name'=>'ひやけさろんそれいゆ', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 7103, 'address' => '大阪府貝塚市近木町２１−３', 'near_st' => '貝塚駅', 'load_navi' => '貝塚(大阪府)駅西出口から徒歩約2分', 'tel' => '072-437-5632', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>149,'name'=> '日焼けサロン・ボンバー', 'kana_name'=>'ひやけさろんぼんばー', 'catch_msg'=>'日焼けサロンボンバーはシャワールム付き完全個室の日焼けサロンです。最新の日焼けマシンを導入しており、汗のかかないスピードタンニングが可能です。','summary' => '日焼けサロンボンバーはシャワールム付き完全個室の日焼けサロンです。最新の日焼けマシンを導入しており、汗のかかないスピードタンニングが可能です。20分または30分のご利用で十分な日焼け肌を維持することが可能です。短い時間で日焼けができるのは日焼けマシーンの性能と特種紫外線ランプの組み合わせで可能になります。お客様の肌によって利用量（時間）を決めていただきます。また、当店では使用後毎回アルコール殺菌・消毒を行っておりますので、いつも清潔な状態です。安心してご利用ください。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～22:00', 'close_day' => '', 'area_code' => 3101, 'address' => '富山県富山市五福3区34-2', 'near_st' => '大学前駅', 'load_navi' => '大学前駅より徒歩10分', 'tel' => '076-433-5501', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.toyama-bomber.jp/', 'kodawari' => '完全個室／学割あり／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>150,'name'=> '日焼けサロン961レ・ミュー', 'kana_name'=>'ひやけさろんくろいれみゅー', 'catch_msg'=>'最上級な日焼けマシーンに入ってスッキリ！ 一年中、常夏気分！リゾート気分','summary' => '健康的な肌はすでにファッションの一部！
あなたの魅力をアップさせます！
また、気分がすぐれない時、冷え性の方、骨が弱くカルシウムを服用している方など、健康増進の目的にもお使い頂いている方もおります。
日焼けは黒くなるだけではありません！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～22:00', 'close_day' => '不定休', 'area_code' => 1002, 'address' => '北海道函館市桔梗町418－489', 'near_st' => '桔梗駅', 'load_navi' => '桔梗駅より徒歩25分', 'tel' => '0138-47-9610', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>151,'name'=> '日焼けサロンKIRRA平野店', 'kana_name'=>'ひやけさろんきらひらのてん', 'catch_msg'=>'シャワー室有り','summary' => '愉快で快適なサロンです☆マシンは4種類あります！ご来店、心よりお待ち致しております。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～22:00', 'close_day' => '6月～9月まで無休営業致します！その後は只今検討中です。', 'area_code' => 7102, 'address' => '大阪府大阪市平野区平野本町2丁目1-21', 'near_st' => '平野駅', 'load_navi' => '平野駅から徒歩3分！内環状線沿い扇ビル2F', 'tel' => '06-6794-5888', 'machine_num' => '4', 'parking' => '', 'site_url' => 'http://kirra2hirano.on.omisenomikata.jp/', 'kodawari' => '駅近／学割あり／紹介割引あり', 'customers' => '','min_price' => null ),
array('company_id'=>152,'name'=> '日焼けサロンNEXT', 'kana_name'=>'ひやけさろんねくすと', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 10601, 'address' => '宮崎県宮崎市花ケ島町赤江町1348−1Ｆ', 'near_st' => '宮崎神宮駅', 'load_navi' => '宮崎神宮駅出口から徒歩約14分', 'tel' => '0985-71-1677', 'machine_num' => '', 'parking' => 'あり', 'site_url' => '', 'kodawari' => '駐車場あり', 'customers' => '','min_price' => null ),
array('company_id'=>153,'name'=> '熊谷店', 'kana_name'=>'ひやけさろんぱれおくまがやてん', 'catch_msg'=>'熊谷最大級の日焼けサロン広い店内でごゆっくりご利用頂けます','summary' => 'マシーンの選び方
一般的にはマシンの総ワット数で焼ける焼けないの判断をされている方が多く、これはあまり正確な判断ではありません。強いマシンには多くのファンやエアコンなどが装備されワット数も大きいものになっていきます。マシンの選び方はまず、ご自分の肌状態に合ったマシン選択が大事です。今現在ご自分の肌色に合わせて、マシンの強度とご利用時間を選ぶ事が大事です。無理な選択は肌トラブルの元になる場合がありますので知識を得たスタッフと決めてください。
下地作り
タンニングは下地作り（ベース）から初めてください。弱いマシンで２０分〜３０分ご利用後、２日〜３日後再度同じマシンをご利用してマシンの強度や利用時間を選択されて下さい。少しでもヒリヒリ感が残っといる場合は治ってからご利用してください。肌が剥けてしまった場合はムラ焼けができる場合がありますので綺麗な状態になってからご利用になってください。ご不明な点はスタッフがアドバイスさせて頂きます。当店では、極度に色白の方、日光を浴びると赤くなってしまう方へのタンニングはお断りさせて頂く場合があります。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間　10:00～23:30／冬季営業時間　11:00～22:30', 'close_day' => 'なし', 'area_code' => 4304, 'address' => '埼玉県熊谷市桜木町1-40サウスビル2階', 'near_st' => '熊谷駅', 'load_navi' => '車でお越しの方へ
行田方面、深谷方面　共に熊谷駅南口入り口交差点角のビルになります。大きい看板が目印です。
電車・バスでお越しの方へ
熊谷駅南口より徒歩2分。駅前交差点角のビル2階になります。大きい看板が目印です。', 'tel' => '048-522-9696', 'machine_num' => '', 'parking' => 'あり3台', 'site_url' => 'http://pareo9696.luna.weblife.me/', 'kodawari' => '駅近／クレジットカード利用可能／ドリンクサービスあり／手ぶらＯＫ／学割あり／女性割引あり／朝割引あり', 'customers' => '','min_price' => 1600 ),
array('company_id'=>154,'name'=> '日焼けサロンsunflash', 'kana_name'=>'ひやけさろんふらっしゅ', 'catch_msg'=>'','summary' => '仙台市立町にある日焼けサロンSUNFLASH','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 2501, 'address' => '青葉区立町5-9 梅屋ビル2F', 'near_st' => '', 'load_navi' => '', 'tel' => '022-211-7035', 'machine_num' => '', 'parking' => '', 'site_url' => 'https://www.facebook.com/sunflash24sendai/', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>155,'name'=> '日焼けサロンＴＯＭ', 'kana_name'=>'ひやけさろんとむ', 'catch_msg'=>'健康的なインドア・タンニング
海、プールに行く前にもどうぞ','summary' => '・完全予約制です。ご予約の方を優先しておりますので、ご来店の際は前もって電話にてご予約下さい。
・オイルは持ち込み禁止です。
・タオル、バスタオル等は無料で貸し出しています。シャワー等も無料でご利用できます。
・当サロンでは、一切の皮膚その他のトラブルについては責任を負わないものとします。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～22:00', 'close_day' => '日曜、祭日、第2・4土曜日', 'area_code' => 6401, 'address' => '三重県四日市市小生町229-184', 'near_st' => '伊勢松本駅', 'load_navi' => '近鉄湯の山線、伊勢松本駅より、松本街道を北西に歩いて徒歩12分。
サークルKのある交差点を直進し、来来憲駐車場の手前を左折してスグ。', 'tel' => '059-353-7270', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://www.tom-gaia.com/tom/index.html', 'kodawari' => '駐車場あり／完全予約制／手ぶらＯＫ／お得な回数券・プリペイドカードあり／学割あり／格安サロン／トレーニングジム併設／初回割引あり', 'customers' => '','min_price' => 1400 ),
array('company_id'=>156,'name'=> '日焼けサロンＵＶドラッグ', 'kana_name'=>'ひやけさろんゆうぶいどらつぐ', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4106, 'address' => '東京都世田谷区船橋1-9-4', 'near_st' => '千歳船橋駅', 'load_navi' => '千歳船橋駅出口から徒歩約1分', 'tel' => '03-3427-5427', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>157,'name'=> '日焼けサロンアッシュ', 'kana_name'=>'ひやけさろんあっしゅ', 'catch_msg'=>'世田谷区、目黒区周辺にある大人向け日焼けサロン「アッシュ」','summary' => '若年層が集まる騒がしいサロンは行きにくい・・・。
個室でゆっくり日焼けを楽しみたい・・・。
汚らしいマシン、お店を利用するのはちょっと・・・。
マシンが古くて何十分焼いても黒くならない・・・。

上記のような不安をお持ちの方、是非ご来店下さい。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '13:00～24:00／最終受付時間24:00', 'close_day' => '年中無休', 'area_code' => 4106, 'address' => '東京都世田谷区駒沢1-5-13
ビラアペックス9F', 'near_st' => '駒沢大学駅', 'load_navi' => '東急田園都市線・駒沢大学駅公園出口より用賀方面へ徒歩1分', 'tel' => '03-3410-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.t-hiyake.jp/', 'kodawari' => '手ぶらＯＫ／駅近／大人向けサロン／学割あり', 'customers' => '大人中心','min_price' => 2300 ),
array('company_id'=>158,'name'=> '南小泉店', 'kana_name'=>'ひやけさろんうるふ', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 2501, 'address' => '宮城県 仙台市若林区 南小泉4丁目9－11', 'near_st' => '', 'load_navi' => '', 'tel' => '022-282-1013', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>159,'name'=> '日焼けサロンエグジスト', 'kana_name'=>'ひやけさろんえぐじすと', 'catch_msg'=>'初心者でも安心＆より黒くなりたい方も気楽に御来店下さい。','summary' => '初心者でも安心＆より黒くなりたい方も気楽に御来店下さい。
・5種類のマシンよりセレクト頂けます。
・ムラ、皮ムケなしできれいに焼ける日焼けマシンです。
・他店にはないマシン、完全個室でごゆっくりくつろいで下さい。
・アフターＤｒｉｎｋ、アフタージェル、化粧水、乳液、アフタークリームも全てご用意
★手ぶらでＯＫです★完全個室★予約優先','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '夏季営業時間／9:00～27:00／最終受付時間26:00／／冬季営業時間／10:00～26:00／最終受付時間25:30', 'close_day' => '年中無休
≪営業時間は変更になることがありますので、ご来店の際は必ずＴＥＬで確認の上ご来店下さいませ！≫', 'area_code' => 4601, 'address' => '栃木県小山市駅東通り1丁目6－16', 'near_st' => '小山駅', 'load_navi' => 'ＪＲ小山駅東口から駅東通り徒歩5分
駅東通り直進、美容室マイルドさんを右折してすぐ', 'tel' => '0285-25-4747', 'machine_num' => '', 'parking' => '4', 'site_url' => '', 'kodawari' => '駅近／深夜まで営業／完全個室／予約優先／マシーン種類豊富／手ぶらＯＫ／強力マシーンあり／駐車場あり／学割あり／女性割引あり／紹介割引あり', 'customers' => '','min_price' => null ),
array('company_id'=>160,'name'=> '藤沢店', 'kana_name'=>'ここなっつあいらんどふじさわてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4204, 'address' => '神奈川県藤沢市鵠沼花沢町1−16', 'near_st' => '藤沢駅', 'load_navi' => '藤沢駅南口出口から徒歩約3分', 'tel' => '0466-24-4989', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>160,'name'=> '金沢文庫店', 'kana_name'=>'ここなっつあいらんどかなざわぶんこてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4201, 'address' => '神奈川県横浜市金沢区泥亀1丁目1−1', 'near_st' => '金沢文庫駅', 'load_navi' => '金沢文庫駅より徒歩3分', 'tel' => '045-788-4989', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>160,'name'=> '日焼けサロンココナッツアイランド', 'kana_name'=>'ここなっつあいらんど', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4701, 'address' => '茨城県牛久市上柏田2丁目44−4', 'near_st' => '', 'load_navi' => '', 'tel' => '029-873-9670', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>160,'name'=> '茅ヶ崎駅前店', 'kana_name'=>'ここなっつあいらんどちがさきえきまえてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4205, 'address' => '神奈川県茅ヶ崎市元町4－6', 'near_st' => '茅ヶ崎駅', 'load_navi' => '茅ヶ崎駅より徒歩4分', 'tel' => '0467-58-0057', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>161,'name'=> '日焼けサロンコナ', 'kana_name'=>'ひやけさろんこな', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 2301, 'address' => '岩手県盛岡市前潟4丁目5−6', 'near_st' => '', 'load_navi' => '', 'tel' => '019-648-0134', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>162,'name'=> '錦糸町店', 'kana_name'=>'ひやけさろんざまりんくらぶきんしちようてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4109, 'address' => '東京都墨田区江東橋４丁目１０−２', 'near_st' => '錦糸町駅', 'load_navi' => '錦糸町駅2出口から徒歩約3分', 'tel' => '03-5600-9614', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>163,'name'=> '日焼けサロンサンクチュアリ', 'kana_name'=>'ひやけさろんさんくちゅあり', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4304, 'address' => '埼玉県鴻巣市箕田１８７９‐１', 'near_st' => '北鴻巣駅', 'load_navi' => '北鴻巣駅出口から徒歩約16分', 'tel' => '048-597-3131', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>164,'name'=> '大泉学園店', 'kana_name'=>'ひやけさろんしーがるおおいずみがくえんてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4104, 'address' => '東京都練馬区東大泉5-41-26', 'near_st' => '大泉学園駅', 'load_navi' => '大泉学園駅徒歩2分', 'tel' => '03-3925-4545', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>165,'name'=> '日焼けｻﾛﾝｼﾊﾞ', 'kana_name'=>'ひやけさろんしば', 'catch_msg'=>'世界のブランド‥Ergolineエルゴライン　美しい小麦色のボディメークをお届けします。','summary' => '毎日サービスタイム実施中 ! !

月・火：12~17時
木・金・土：12～15時
日曜：オールタイム','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～21:00', 'close_day' => '水曜日', 'area_code' => 2401, 'address' => '山形市七日町2-4-20（1F）', 'near_st' => '山形駅', 'load_navi' => '山形駅より徒歩22分', 'tel' => '023-641-1720', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www3.tky.3web.ne.jp/~shibaest/hiyake.html', 'kodawari' => '女性割引あり／朝割引あり', 'customers' => '','min_price' => null ),
array('company_id'=>166,'name'=> '日焼けサロンジャンタナ', 'kana_name'=>'ひやけさろんじゃんたな', 'catch_msg'=>'アットホームな空間と気さくなスタッフたち、1回行ったらやみつきになるサロンです！！
23歳まで学割適用可','summary' => 'アットホームな空間と気さくなスタッフたち、1回行ったらやみつきになるサロンです！！老若男女問わず初心者〜上級者まで幅広くご利用できます!!月ごとにお得なイベントあり!!
格安でしっかり焼けるアットホームな日焼けサロン','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '月～土11:00～23:00／日12:00～21:00', 'close_day' => '4月～9月　毎月最終日曜日
10月～3月　毎週日曜日（メンテナンスの為）', 'area_code' => 2501, 'address' => '仙台市泉区市名坂字東裏77斉藤ビル2F', 'near_st' => '泉中央駅', 'load_navi' => '泉中央駅より徒歩11分', 'tel' => '022-773-4226', 'machine_num' => '', 'parking' => 'あり3台', 'site_url' => 'http://www.tsjantana.com/', 'kodawari' => '学割あり／駐車場あり／お得な回数券・プリペイドカードあり／焼き放題メニューあり／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>167,'name'=> '日焼けサロンショアブレイク', 'kana_name'=>'ひやけさろんしょあぶれいく', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4302, 'address' => '埼玉県越谷市花田２丁目３０−７', 'near_st' => '北越谷駅', 'load_navi' => '北越谷駅東口出口から徒歩約22分', 'tel' => '048-964-2736', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>168,'name'=> '日焼けサロンナチグロン', 'kana_name'=>'ひやけさろんなちぐろん', 'catch_msg'=>'日焼けサロン初めての方大歓迎！ 学校帰り、会社帰り、興味のある方気軽にご来店ください。','summary' => '日焼けサロン初めての方大歓迎！
学校帰り、会社帰り、興味のある方気軽にご来店ください。
日に焼けた当スタッフが丁寧に接客しております。
タオル、ボディーソープ、シャンプーなども取り揃えておりますので、手ぶらでご来店下さい！！
※会員費0円(オイル込)
※完全コミコミ価格(GEL、タオル、シャワー消費税込み)','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～23:00', 'close_day' => '', 'area_code' => 2502, 'address' => '宮城県塩釜市東玉川町7-21　1F', 'near_st' => '塩釜駅', 'load_navi' => '塩釜駅より徒歩2分', 'tel' => '022-361-3250', 'machine_num' => '', 'parking' => 'あり5台', 'site_url' => 'http://nachi96.web.fc2.com/', 'kodawari' => '駅近／手ぶらＯＫ／駐車場あり', 'customers' => '','min_price' => null ),
array('company_id'=>169,'name'=> '立石店', 'kana_name'=>'ひやけさろんびーむたていしてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4110, 'address' => '東京都葛飾区立石４丁目２３−２', 'near_st' => '京成立石駅、青砥駅', 'load_navi' => '京成立石駅出口1出口から徒歩約2分
京成立石駅出口2出口から徒歩約2分
青砥駅西口出口から徒歩約15分', 'tel' => '03-3695-9696', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>170,'name'=> '聖蹟店', 'kana_name'=>'ひやけさろんびたみんしいせいせきてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4113, 'address' => '東京都多摩市一ノ宮4丁目1−1', 'near_st' => '聖蹟桜ヶ丘駅', 'load_navi' => '聖蹟桜ヶ丘駅（京王京王線） 384m', 'tel' => '042-371-9966', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>171,'name'=> '日焼けサロンボディーフレッシュ', 'kana_name'=>'ひやけさろんびでぃーふれっしゅ', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4204, 'address' => '神奈川県 横須賀市 大滝町2丁目4-3', 'near_st' => '横須賀中央駅', 'load_navi' => '横須賀中央駅より徒歩4分', 'tel' => '046-822-6681', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近', 'customers' => '','min_price' => null ),
array('company_id'=>172,'name'=> '日焼けサロンポプラ', 'kana_name'=>'ひやけさろんぽぷら', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4402, 'address' => '千葉県柏市しいの木台4丁目8−1', 'near_st' => '', 'load_navi' => '', 'tel' => '047-385-5517', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>173,'name'=> '日焼けサロンマチズモ', 'kana_name'=>'ひやけさろんまちずも', 'catch_msg'=>'世田谷区下高井戸でドッグレッグスのレスラーに会える！かも...','summary' => 'ドッグレッグスのチケット販売もしております。
※在庫がない場合は後日郵送となります。
　
京王線・東急世田谷線下高井戸駅で好評営業中！
女性・高校生30分1000円から。
最新マシンが海を渡って下高井戸に上陸！
君も従業員として働く菓子パンマンに会いたくないか！？
とても手作りとは思えない高級店並みの豪華な内装と、
かゆいところに手が届く抜群の接客と評判！！
神山は連日朝10時から翌朝3時まで働き、過労死一歩手前だ！！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～22:30／最終受付時間22:00', 'close_day' => '年末年始も「営業してます！」年中無休！
お休みは修理・工事・法事の時だけ', 'area_code' => 4106, 'address' => '世田谷区赤堤5-31-3　フレンド104ビル2F', 'near_st' => '下高井戸駅', 'load_navi' => '東急世田谷線・京王線 下高井戸駅から徒歩3分', 'tel' => '03-3321-3796', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://homepage3.nifty.com/doglegs/info/salon.html', 'kodawari' => '駅近／女性割引あり／学割あり／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>174,'name'=> '日焼けサロンラウ', 'kana_name'=>'ひやけさろんらう', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4601, 'address' => '栃木県宇都宮市陽東7丁目2−20', 'near_st' => '宇都宮駅', 'load_navi' => '宇都宮駅（駅から2.9km）
東武宇都宮駅（駅から4.4km） ', 'tel' => '028-661-9614', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>175,'name'=> '日焼けスタジオ HotDog（ホットドッグ）', 'kana_name'=>'ひやけすたじおほっとどっく', 'catch_msg'=>'完全個室でプライベート確保！
業界最高マシーンで安心して焼ける！','summary' => 'メラニン色素の活性化を身体の中から促し、紫外線の吸収力をアップさせながらムラなく全身を焼きます。
完全個室制なので、ビギナーでも気軽に小麦色を目指せると大好評です。
普段ストレスが溜まっている人はもちろん、「日サロ」に抵抗がある人も一度試してみよう！ 予約優先！ご来店の方は事前にお電話願います
※予約優先！ご来店の際は事前にお電話おねがいします！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11：00 ～ 28：00 ／最終受付時間27:00', 'close_day' => '年中無休', 'area_code' => 6201, 'address' => '名古屋市東区東桜1-10-36　第44オーシャンビル 6F', 'near_st' => '栄駅', 'load_navi' => '栄駅より徒歩0分', 'tel' => '052-962-9626', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.tanning-hotdog.jp/', 'kodawari' => '駅近／初回割引あり／学割あり／雨の日割引あり／メルマガ割引あり／完全個室／予約優先／マシーン種類豊富／深夜まで営業／マシーン種類豊富', 'customers' => '','min_price' => 2000 ),
array('company_id'=>176,'name'=> '日焼けスタジオ ファインクラブ', 'kana_name'=>'ひやけすたじおふぁいんくらぶ', 'catch_msg'=>'■全室完全個室 ■学生割引き有り
フリードリンク・タオル・水着貸し出し・ロッカー・シャワー完備','summary' => '■全室完全個室 ■学生割引き有り
フリードリンク・タオル・水着貸し出し・ロッカー・シャワー完備

※登録料、オイル料金別途','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00', 'close_day' => 'なし', 'area_code' => 8201, 'address' => '広島市中区本通8-2 吉井ビル2F', 'near_st' => '広島市電八丁堀駅', 'load_navi' => '広島市電八丁堀駅から徒歩3分', 'tel' => '082-249-3144', 'machine_num' => '6', 'parking' => '', 'site_url' => 'http://fineclub.info/', 'kodawari' => '駅近／深夜まで営業／初回割引あり／学割あり／完全個室／ドリンクサービスあり', 'customers' => '','min_price' => null ),
array('company_id'=>177,'name'=> '日焼けスタジオＹＯＯバイパス店', 'kana_name'=>'ひやけすたじおよーばいぱすてん', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～24:00', 'close_day' => '', 'area_code' => 6203, 'address' => '愛知県北名古屋市宇福寺天神１８４', 'near_st' => '稲沢駅', 'load_navi' => '稲沢駅より徒歩36分', 'tel' => '0568-23-4989', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '深夜まで営業', 'customers' => '','min_price' => null ),
array('company_id'=>178,'name'=> '日焼けスタジオオーシャンブルー', 'kana_name'=>'ひやけすたじおおーしやんぶるー', 'catch_msg'=>'エステサービス併設','summary' => 'エステサービス併設','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 8201, 'address' => '広島県広島市中区袋町2−22', 'near_st' => '本通駅', 'load_navi' => '本通駅出口から徒歩約3分', 'tel' => '082-542-7716', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近／エステあり', 'customers' => '','min_price' => null ),
array('company_id'=>179,'name'=> '蒲田店', 'kana_name'=>'ひやけすたじおくろこだいるかまたてん', 'catch_msg'=>'当店に初めて御来店のお客様は、

短い日焼け時間設定からお始めいただくことをお薦めいたします。','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '月～水 10:00～18:00／最終受付時間17:00／金10:00～23:00／最終受付時間22:00／土・日祝10:00～21:00／最終受付時間20:30', 'close_day' => '木曜日', 'area_code' => 4108, 'address' => '東京都大田区蒲田５丁目６−１２ サンローズ蒲田 1F', 'near_st' => '蒲田駅、京急蒲田駅', 'load_navi' => 'ＪＲ蒲田東口下車徒歩2分', 'tel' => '03-3735-7799', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://blog.livedoor.jp/crocodile_tanning/', 'kodawari' => '駅近／女性割引あり', 'customers' => '','min_price' => null ),
array('company_id'=>179,'name'=> '平和島店', 'kana_name'=>'ひやけすたじおくろこだいるへいわじまてん', 'catch_msg'=>'当店に初めて御来店のお客様は、

短い日焼け時間設定からお始めいただくことをお薦めいたします。','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '月～水 10:00～18:00／最終受付時間17:00／金10:00～23:00／最終受付時間22:00／土・日祝10:00～21:00／最終受付時間20:30', 'close_day' => '木曜日', 'area_code' => 4108, 'address' => '大田区大森西2-33-2', 'near_st' => '平和島駅', 'load_navi' => '京浜急行平和島下車徒歩1分', 'tel' => '03-3766-2212', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://blog.livedoor.jp/crocodile_tanning/', 'kodawari' => '駅近／女性割引あり', 'customers' => '','min_price' => null ),
array('company_id'=>180,'name'=> '日焼けスタジオゴールドラッシュ', 'kana_name'=>'ひやけさろんごーるどらっしゅ', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10～3月 15:00～21:00／4～9月 13:00～21:00／日曜・祝日 11:00～17:00', 'close_day' => '月曜日', 'area_code' => 5101, 'address' => '上越市本町5-3-26　2Ｆ', 'near_st' => '高田駅', 'load_navi' => '高田駅より徒歩4分', 'tel' => '025－526－1796', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://78.xmbs.jp/goldrush/', 'kodawari' => '駅近／紹介割引あり／学割あり／女性割引あり', 'customers' => '','min_price' => null ),
array('company_id'=>181,'name'=> '日焼けスタジオシャイニング', 'kana_name'=>'ひやけすたじおしゃいにんぐ', 'catch_msg'=>'洗練されたワンランク上のタイニングスペースで、
心も体もリフレッシュ出来ます！','summary' => '●１回３０分が標準ですが、個別に最適アドバイス、初めての方もお気軽にご来店下さい。
●個室、裸でＯＫ！
●広くてきれいなシャワールーム （シャワーのみも可）
●充実した化粧品類、女性も手ぶらでＯＫ
●落ち着いた雰囲気の店内でリラックス','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '11:00～23:00／日曜・祝日12:00～22:00', 'close_day' => '不定休 （年末年始は休業）', 'area_code' => 4107, 'address' => '東京都港区六本木３丁目１０－１１', 'near_st' => '六本木駅', 'load_navi' => '◆鉄道
東京メトロ日比谷線・六本木駅・5番出口徒歩1分
東京メトロ大江戸線・六本木駅・5番出口徒歩1分
◆その他
六本木交差点より1分！六本木通り沿い、俳優座向かい
青木ビル2Ｆ', 'tel' => '03-3401-5130', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '駅近／クレジットカード利用可能／学割あり／ドリンクサービスあり／タイム割引あり／手ぶらＯＫ', 'customers' => '','min_price' => null ),
array('company_id'=>182,'name'=> '日焼けスタジオちびくろサンタ', 'kana_name'=>'ひやけすたじおちびくろさんた', 'catch_msg'=>'葛西駅１分★マシーン全９台、優良大型店！','summary' => '２５年以上続いているお店です。オープンの頃から来て頂いている方も多数いらっしゃいます。アットホームな安心優良店です。お気軽にお越し下さい。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～23:00／最終受付時間22:30', 'close_day' => '年中無休', 'area_code' => 4110, 'address' => '東京都江戸川区東葛西６丁目１－１３－３０１', 'near_st' => '葛西駅', 'load_navi' => '東西線・葛西駅徒歩1分', 'tel' => '03-5605-8380', 'machine_num' => '', 'parking' => 'なし', 'site_url' => 'http://nttbj.itp.ne.jp/0356058380/index.html', 'kodawari' => '駅近／初心者歓迎／女性歓迎学割あり／タイム割引あり／強力マシーンあり／', 'customers' => '高校生から８０代の方まで','min_price' => null ),
array('company_id'=>183,'name'=> '神戸三宮店', 'kana_name'=>'そるとろんじゃぱんこうべさんのみやてん', 'catch_msg'=>'当店はきれいな日焼け、安心感、居心地、快適性、をモットーにしております。
日焼け初体験の方も安心してきてください。','summary' => 'バーベキュウ・キャンプ・海水浴・等、強い太陽光線を１度に長時間浴びるのは、今の時代、肌への負担大！
特に普段紫外線ほとんど浴びていない方はご用心。そこでおすすめ！（笑）、日焼けマシーンで下地作り、まじいいですよ。１～２度だけでも効果大！！おすすめです。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10:00～24:00　／最終受付時間23:00', 'close_day' => '', 'area_code' => 7301, 'address' => '兵庫県神戸市中央区北長狭通1-10-5　
ムーンライトビル5F', 'near_st' => '三宮駅', 'load_navi' => '大阪方面より　 ＪＲ線・阪急・阪神・地下鉄　三宮駅から徒歩　約5分
　姫路方面より　 ＪＲ線・阪急・阪神・地下鉄　三宮駅から徒歩　約5分', 'tel' => '078-392-9696', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.soltron-kobe.com/', 'kodawari' => '駅近／強力マシーンあり／マシーン種類豊富／深夜まで営業／初回割引あり／格安サロン', 'customers' => '','min_price' => 900 ),
array('company_id'=>184,'name'=> '日焼けルーム クロンボ', 'kana_name'=>'ひやけるーむくろんぼ', 'catch_msg'=>'当店のマシンはお好みのパワーを選べます！貸しタオル付き（無料）
3種類のマシンからお選びください！','summary' => '大好評のウルトラも、ますますご利用しやすくなりました！

ウルトラは、最新技術の結晶とも言うべき機能を搭載した、最強、最高モデル！
通常のマシンの数倍の出力があるウルトラ・ハイプレッシャー・システムを搭載し、快適さを
極めた2種類のアロマ＆ミスト等、今までとは別次元のタンニングをぜひご体験ください！

当店のマシンはドイツのエルゴライン。日本だけでなく世界の高級ブランドとして、その品質と安全性を認められています。

冷暖房 ＆ シャワールーム 完備
貸しタオル（無料）付き
ご自分のスマホや携帯、ｉＰｏｄ、ＣＤでお気に入りの音楽をお楽しみいただけます','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '月～金8:30～22:30／土8:30～18:00／日9:00～12:00', 'close_day' => '第3土・日曜', 'area_code' => 6102, 'address' => '静岡県富士市石坂140－1イトービル', 'near_st' => '', 'load_navi' => '東名富士インターそば', 'tel' => '0545－51－2292
0545－51－5959', 'machine_num' => '4', 'parking' => 'あり', 'site_url' => 'http://homepage2.nifty.com/itoproject/tanning.htm', 'kodawari' => '駐車場あり／強力マシーンあり／トレーニングジム併設／お得な回数券・プリペイドカードあり／格安サロン', 'customers' => '','min_price' => 1100 ),
array('company_id'=>185,'name'=> '日焼け屋新宿', 'kana_name'=>'ひやけやしんじゅく', 'catch_msg'=>'毎日24時間営業！JR新宿駅（東口）徒歩５分！歌舞伎町ドンキホーテから徒歩1分！ぜひご予約ください。','summary' => '日焼けサロンに必要なもの以外をカットすることにより料金改正に直反映させました。
安く、ラグジュアリーに、気軽な空間つくりで、何度でも遊びにでも来れる店を目指します。','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '24時間営業', 'close_day' => '年中無休', 'area_code' => 4103, 'address' => '東京都新宿区歌舞伎町1-17-13 J1ビル8F', 'near_st' => '新宿駅、西武新宿駅、新宿三丁目駅', 'load_navi' => 'JR新宿駅（東口）徒歩5分', 'tel' => '03−5287−9696', 'machine_num' => '', 'parking' => 'なし', 'site_url' => 'http://www.estate9696.com/', 'kodawari' => '24時間営業／駅近／強力マシーンあり／マシーン種類豊富／格安サロン', 'customers' => '','min_price' => 1500 ),
array('company_id'=>186,'name'=> '日焼サロン・ノースショア', 'kana_name'=>'ひやけさろんのーすしょあ', 'catch_msg'=>'幅広い層のお客様にお気軽にご来店頂ける様 スタッフ一同心よりお待ち致しております','summary' => '安全性と日焼け効果を考慮し上質のランプを使用
メンテナンスも万全です！
長いお付き合いで日焼けをご満足頂ける様
安全で快適なサービスをご提供致します
初めての方でもご希望・お肌質に合わせプログラム致します
大好評の学生料金あり
幅広い層のお客様にお気軽にご来店頂ける様
スタッフ一同心よりお待ち致しております','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12:00～23:00', 'close_day' => '毎週月曜', 'area_code' => 4401, 'address' => '千葉県千葉市稲毛区小仲台7丁目7－11', 'near_st' => '稲毛駅', 'load_navi' => '稲毛駅・東口出口小仲台坂通りを東京方面へ3つ目の信号左折つき当たり
徒歩10分', 'tel' => '043-284-0110', 'machine_num' => '', 'parking' => 'あり', 'site_url' => 'http://www004.upp.so-net.ne.jp/tsukasa/north.htm', 'kodawari' => '駐車場あり／マシーン種類豊富／学割あり', 'customers' => '','min_price' => null ),
array('company_id'=>187,'name'=> '日焼サロンカレドニア', 'kana_name'=>'ひやけさろんかれどにあ', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '', 'close_day' => '', 'area_code' => 4110, 'address' => '東京都葛飾区東金町3-32-11', 'near_st' => '金町駅', 'load_navi' => '金町(東京都)駅北口出口から徒歩約6分', 'tel' => '03-3627-9093', 'machine_num' => '', 'parking' => '', 'site_url' => '', 'kodawari' => '', 'customers' => '','min_price' => null ),
array('company_id'=>188,'name'=> '日焼スタジオＳＵＮ・ＴＲＡＰ', 'kana_name'=>'ひやけさろんさんとらっぷ', 'catch_msg'=>'','summary' => '当店は、美しい日焼けと快適な居心地を心がけております。スタッフが、お客様のお肌の状態に合わせて、適切なアドバイスを致しますので、お気軽にご相談・ご来店下さい！','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '12：00～24:00／最終受付時間23：20', 'close_day' => '水曜日、★７月は水曜日も休まず営業★1月1日～1月3日は休み', 'area_code' => 4201, 'address' => '神奈川県横浜市神奈川区西神奈川２丁目２－１', 'near_st' => '東白楽駅、東神奈川駅', 'load_navi' => '東横線・東白楽駅徒歩1分
ＪＲ線・東神奈川駅徒歩8分', 'tel' => '045-491-9618', 'machine_num' => '', 'parking' => '近くにコインパーキング有り', 'site_url' => 'http://nttbj.itp.ne.jp/0454919618/index.html', 'kodawari' => '手ぶらＯＫ／駅近／学割あり／女性割引あり／格安サロン', 'customers' => '','min_price' => 1000 ),
array('company_id'=>189,'name'=> '髪工房ダム', 'kana_name'=>'かみこうぼうだむ', 'catch_msg'=>'奈良県橿原市葛本町、上品寺町にある 日焼けサロン、リラクゼーション、美容室、美容院なら ［髪工房ダム］','summary' => '奈良県橿原市にある美容室・美容院 ［髪工房ダム］です。
当店ではヘアースタイルから始まるトータルファッションをご提案しております。
お客様とスタッフの“笑顔”と“愛情”で一杯なアットホームな店内でどうぞお寛ぎください。

完全個室
シャワー室完備
美容院併設','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '9:00～19:00', 'close_day' => '毎週月曜日（第2・第3月火連休）', 'area_code' => 7401, 'address' => '奈良県橿原市葛本町676-5', 'near_st' => '', 'load_navi' => '', 'tel' => '0744-24-2468', 'machine_num' => '', 'parking' => '', 'site_url' => 'http://www.kk-dam.com/', 'kodawari' => '完全個室／美容院併設', 'customers' => '','min_price' => null ),
array('company_id'=>190,'name'=> '美容室＆日焼けサロン　Klug Crook', 'kana_name'=>'びようしつあんどひやけさろん　くるーく', 'catch_msg'=>'','summary' => '','top_img' => '', 'outerier_img' => '', 'interier_img' => '', 'staff_img' => '', 'open_time' => '10：00～20：00', 'close_day' => '火曜日', 'area_code' => 4201, 'address' => '横浜市保土ヶ谷区仏向町238
ノースハイツ１F', 'near_st' => '和田町駅', 'load_navi' => '相模線和田町駅より徒歩5分', 'tel' => '０４５-３３４-２００３', 'machine_num' => '', 'parking' => 'あり2台', 'site_url' => 'http://www.ck-yokohama.com/', 'kodawari' => '駅近／手ぶらＯＫ／駐車場あり／美容院併設／お得な回数券・プリペイドカードあり／初回割引あり', 'customers' => '','min_price' => 1600 ),
        );

        DB::table('salons')->insert($salons);
    }
}
