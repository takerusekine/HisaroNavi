<?php

use Illuminate\Database\Seeder;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defregions = array(
            array('lg_code' => 1000, 'md_code' => 0, 'sm_code' => 1, 'area_name' => '札幌市' ),
            array('lg_code' => 1000, 'md_code' => 0, 'sm_code' => 2, 'area_name' => 'その他北海道' ),
            array('lg_code' => 2000, 'md_code' => 100, 'sm_code' => 1, 'area_name' => '青森県' ),
            array('lg_code' => 2000, 'md_code' => 200, 'sm_code' => 2, 'area_name' => '秋田県' ),
            array('lg_code' => 2000, 'md_code' => 300, 'sm_code' => 3, 'area_name' => '岩手県' ),
            array('lg_code' => 2000, 'md_code' => 400, 'sm_code' => 4, 'area_name' => '山形県' ),
            array('lg_code' => 2000, 'md_code' => 500, 'sm_code' => 5, 'area_name' => '仙台市' ),
            array('lg_code' => 2000, 'md_code' => 500, 'sm_code' => 6, 'area_name' => 'その他宮城県' ),
            array('lg_code' => 2000, 'md_code' => 600, 'sm_code' => 7, 'area_name' => '福島県' ),
            array('lg_code' => 3000, 'md_code' => 100, 'sm_code' => 1, 'area_name' => '富山県' ),
            array('lg_code' => 3000, 'md_code' => 100, 'sm_code' => 2, 'area_name' => '石川県' ),
            array('lg_code' => 3000, 'md_code' => 100, 'sm_code' => 3, 'area_name' => '福井県' ),
            array('lg_code' => 4000, 'md_code' => 100, 'sm_code' => 1, 'area_name' => '池袋・目白' ),
            array('lg_code' => 4000, 'md_code' => 100, 'sm_code' => 2, 'area_name' => '赤羽・王子・板橋・成増' ),
            array('lg_code' => 4000, 'md_code' => 100, 'sm_code' => 3, 'area_name' => '新宿・代々木・高田馬場・飯田橋' ),
            array('lg_code' => 4000, 'md_code' => 100, 'sm_code' => 4, 'area_name' => '練馬・大泉学園・荻窪・中野' ),
            array('lg_code' => 4000, 'md_code' => 100, 'sm_code' => 5, 'area_name' => '渋谷・青山・恵比寿' ),
            array('lg_code' => 4000, 'md_code' => 100, 'sm_code' => 6, 'area_name' => '明大前・三軒茶屋・自由が丘・駒沢' ),
            array('lg_code' => 4000, 'md_code' => 100, 'sm_code' => 7, 'area_name' => '赤坂・六本木・新橋' ),
            array('lg_code' => 4000, 'md_code' => 100, 'sm_code' => 8, 'area_name' => '品川・大森・蒲田・五反田' ),
            array('lg_code' => 4000, 'md_code' => 100, 'sm_code' => 9, 'area_name' => '上野・浅草・錦糸町・神田' ),
            array('lg_code' => 4000, 'md_code' => 100, 'sm_code' => 10, 'area_name' => '亀有・小岩・葛西' ),
            array('lg_code' => 4000, 'md_code' => 100, 'sm_code' => 11, 'area_name' => '北千住・竹ノ塚' ),
            array('lg_code' => 4000, 'md_code' => 100, 'sm_code' => 12, 'area_name' => '立川・八王子・福生・国分寺' ),
            array('lg_code' => 4000, 'md_code' => 100, 'sm_code' => 13, 'area_name' => '町田・多摩' ),
            array('lg_code' => 4000, 'md_code' => 100, 'sm_code' => 14, 'area_name' => '調布・吉祥寺・西東京' ),
            array('lg_code' => 4000, 'md_code' => 200, 'sm_code' => 1, 'area_name' => '横浜・上大岡・金沢・鶴見' ),
            array('lg_code' => 4000, 'md_code' => 200, 'sm_code' => 2, 'area_name' => '戸塚・瀬谷・青葉台・たまプラーザ' ),
            array('lg_code' => 4000, 'md_code' => 200, 'sm_code' => 3, 'area_name' => '川崎市'),
            array('lg_code' => 4000, 'md_code' => 200, 'sm_code' => 4, 'area_name' => '横須賀・藤沢' ),
            array('lg_code' => 4000, 'md_code' => 200, 'sm_code' => 5, 'area_name' => '茅ヶ崎・平塚・小田原' ),
            array('lg_code' => 4000, 'md_code' => 200, 'sm_code' => 6, 'area_name' => '厚木・相模原・大和' ),
            array('lg_code' => 4000, 'md_code' => 300, 'sm_code' => 1, 'area_name' => 'さいたま・川口・蕨' ),
            array('lg_code' => 4000, 'md_code' => 300, 'sm_code' => 2, 'area_name' => '越谷・久喜・春日部・草加' ),
            array('lg_code' => 4000, 'md_code' => 300, 'sm_code' => 3, 'area_name' => '所沢・川越・新座・和光' ),
            array('lg_code' => 4000, 'md_code' => 300, 'sm_code' => 4, 'area_name' => '熊谷・鴻巣・上尾' ),
            array('lg_code' => 4000, 'md_code' => 400, 'sm_code' => 1, 'area_name' => '千葉・木更津' ),
            array('lg_code' => 4000, 'md_code' => 400, 'sm_code' => 2, 'area_name' => '柏・松戸' ),
            array('lg_code' => 4000, 'md_code' => 400, 'sm_code' => 3, 'area_name' => '船橋' ),
            array('lg_code' => 4000, 'md_code' => 500, 'sm_code' => 1, 'area_name' => '群馬県' ),
            array('lg_code' => 4000, 'md_code' => 600, 'sm_code' => 1, 'area_name' => '栃木県' ),
            array('lg_code' => 4000, 'md_code' => 700, 'sm_code' => 1, 'area_name' => '茨城県' ),
            array('lg_code' => 5000, 'md_code' => 100, 'sm_code' => 1, 'area_name' => '新潟県' ),
            array('lg_code' => 5000, 'md_code' => 200, 'sm_code' => 1, 'area_name' => '長野県' ),
            array('lg_code' => 5000, 'md_code' => 300, 'sm_code' => 1, 'area_name' => '山梨県' ),
            array('lg_code' => 6000, 'md_code' => 100, 'sm_code' => 1, 'area_name' => '浜松' ),
            array('lg_code' => 6000, 'md_code' => 100, 'sm_code' => 2, 'area_name' => 'その他静岡県' ),
            array('lg_code' => 6000, 'md_code' => 200, 'sm_code' => 1, 'area_name' => '名駅・栄・金山' ),
            array('lg_code' => 6000, 'md_code' => 200, 'sm_code' => 2, 'area_name' => '藤が丘・今池・八事・野並' ),
            array('lg_code' => 6000, 'md_code' => 200, 'sm_code' => 3, 'area_name' => '小牧・北名古屋・一宮・春日井' ),
            array('lg_code' => 6000, 'md_code' => 200, 'sm_code' => 4, 'area_name' => '豊田・刈谷・岡崎・豊橋' ),
            array('lg_code' => 6000, 'md_code' => 300, 'sm_code' => 1, 'area_name' => '岐阜県' ),
            array('lg_code' => 6000, 'md_code' => 400, 'sm_code' => 1, 'area_name' => '三重県' ),
            array('lg_code' => 7000, 'md_code' => 100, 'sm_code' => 1, 'area_name' => '梅田・京橋・十三・新大阪' ),
            array('lg_code' => 7000, 'md_code' => 100, 'sm_code' => 2, 'area_name' => '心斎橋・難波・天王寺' ),
            array('lg_code' => 7000, 'md_code' => 100, 'sm_code' => 3, 'area_name' => '堺・岸和田・泉佐野・八尾' ),
            array('lg_code' => 7000, 'md_code' => 100, 'sm_code' => 4, 'area_name' => '枚方・寝屋川・東大阪' ),
            array('lg_code' => 7000, 'md_code' => 100, 'sm_code' => 5, 'area_name' => '豊中・池田・吹田・茨木' ),
            array('lg_code' => 7000, 'md_code' => 200, 'sm_code' => 1, 'area_name' => '京都府' ),
            array('lg_code' => 7000, 'md_code' => 300, 'sm_code' => 1, 'area_name' => '神戸市内' ),
            array('lg_code' => 7000, 'md_code' => 300, 'sm_code' => 2, 'area_name' => 'その他兵庫県' ),
            array('lg_code' => 7000, 'md_code' => 400, 'sm_code' => 1, 'area_name' => '奈良県' ),
            array('lg_code' => 7000, 'md_code' => 500, 'sm_code' => 2, 'area_name' => '滋賀県' ),
            array('lg_code' => 7000, 'md_code' => 600, 'sm_code' => 3, 'area_name' => '和歌山県' ),
            array('lg_code' => 8000, 'md_code' => 100, 'sm_code' => 1, 'area_name' => '岡山県' ),
            array('lg_code' => 8000, 'md_code' => 200, 'sm_code' => 2, 'area_name' => '広島県' ),
            array('lg_code' => 8000, 'md_code' => 300, 'sm_code' => 3, 'area_name' => '鳥取県' ),
            array('lg_code' => 8000, 'md_code' => 400, 'sm_code' => 4, 'area_name' => '島根県' ),
            array('lg_code' => 8000, 'md_code' => 500, 'sm_code' => 5, 'area_name' => '山口県' ),
            array('lg_code' => 9000, 'md_code' => 100, 'sm_code' => 1, 'area_name' => '愛媛県' ),
            array('lg_code' => 9000, 'md_code' => 200, 'sm_code' => 1, 'area_name' => '徳島県' ),
            array('lg_code' => 9000, 'md_code' => 300, 'sm_code' => 1, 'area_name' => '香川県' ),
            array('lg_code' => 9000, 'md_code' => 400, 'sm_code' => 1, 'area_name' => '高知県' ),
            array('lg_code' => 10000, 'md_code' => 100, 'sm_code' => 1, 'area_name' => '福岡市内' ),
            array('lg_code' => 10000, 'md_code' => 100, 'sm_code' => 2, 'area_name' => 'その他福岡県' ),
            array('lg_code' => 10000, 'md_code' => 200, 'sm_code' => 1, 'area_name' => '熊本県' ),
            array('lg_code' => 10000, 'md_code' => 300, 'sm_code' => 1, 'area_name' => '佐賀県' ),
            array('lg_code' => 10000, 'md_code' => 400, 'sm_code' => 1, 'area_name' => '長崎県' ),
            array('lg_code' => 10000, 'md_code' => 500, 'sm_code' => 1, 'area_name' => '大分県' ),
            array('lg_code' => 10000, 'md_code' => 600, 'sm_code' => 1, 'area_name' => '宮崎県' ),
            array('lg_code' => 10000, 'md_code' => 700, 'sm_code' => 1, 'area_name' => '鹿児島県' ),
            array('lg_code' => 10000, 'md_code' => 800, 'sm_code' => 1, 'area_name' => '沖縄県' ),
        );
        DB::table('regions')->insert($defregions);
    }
}