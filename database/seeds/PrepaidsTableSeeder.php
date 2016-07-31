<?php

use Illuminate\Database\Seeder;

class PrepaidsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prepaids')->delete();
        $prepaids = array(
            array('salon_id' => 2, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回サービス', 'service_content' => '受付の際、ホームページを見たと言っていただくと初回登録料510円をサービスいたします。', 'price' => '-'),
           array('salon_id' => 3, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回サービス', 'service_content' => '受付の際、ホームページを見たと言っていただくと初回登録料510円をサービスいたします。', 'price' => '-'),
           array('salon_id' => 4, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回登録料無料', 'service_content' => '「ブログをみた」で、初回登録料が無料', 'price' => '-'),
           array('salon_id' => 8, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回割引', 'service_content' => '1000円からご利用できます', 'price' => '1000'),
           array('salon_id' => 9, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回登録無料クーポン', 'service_content' => '『HPを見た』で、初回登録料無料!!!', 'price' => '-'),
           array('salon_id' => 11, 'otoku_type' => 'ポイントカード', 'subject_person' => '全員', 'service_name' => 'ポイントカード', 'service_content' => '・1000円ごとに1個捺印いたします。 ・12個ごとに、500円、1000円、1500円をその場でキャッシュバック！ ・回数券、フリーパス購入の際にもご利用ます！ ・誕生月には1度だけ半額サービス！ ・有効期限はありません。', 'price' => '-'),
           array('salon_id' => 11, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'Zeetle', 'service_content' => '・スマホアプリを利用したサービスです。
                ・ご来店ごとに1ポイント貯まります。
                ・ポイントに応じて割引、半額、無料のクーポンがもらえます。
                ・紹介クーポンももらえます。
                ・ご新規様にはさらに特典があります。（詳しくはアプリ内ショップカードにて）
                ・事前にアプリをダウンロードしてご利用ください。', 'price' => '-'),
           array('salon_id' => 11, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '日焼け・コラーゲン共通回数券', 'service_content' => '・ポイントカードのキャッシュバックご利用で500円～2500円割引！
            　2000円券×12枚を17500円で購入された場合、6500円もお得！
            ・共同購入、譲渡もOKです！', 'price' => '-'),
            array('salon_id' => 11, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'コラーゲンマシン1ヶ月フリーパス', 'service_content' => '女性12,000円 　男性15,000円
            ・必ずポイントカードのキャッシュバックが適用されますので
            　女性は\10,500～\1,1500、男性は\12,500～\14,500で購入して頂けます。
             ・二日連続のご利用はできません。', 'price' => '-'),
            array('salon_id' => 12, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'ご新規様半額キャンペーン', 'service_content' => '', 'price' => '-'),
                array('salon_id' => 15, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード4800円分', 'service_content' => '4800円で5800円分利用可能
                1000円お得', 'price' => '4800'),
                array('salon_id' => 15, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード9500円分', 'service_content' => '9500円で12000円分利用可能
                2500円お得', 'price' => '9500'),
                array('salon_id' => 15, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード18000円分', 'service_content' => '18000円で25000円分利用可能
                7000円お得', 'price' => '18000'),
                array('salon_id' => 15, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'web 限定　クーポン', 'service_content' => 'すべてのマシーン一般価格より500 Off', 'price' => '-'),
                array('salon_id' => 17, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'モーニングサービス', 'service_content' => '10~14時、ベットタイププラス15分、フェイスタイププラス10分', 'price' => '-'),
                array('salon_id' => 17, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'お客様紹介キャンペーン', 'service_content' => '新規のお客様をご紹介いただいた方、回数券をお買い求めの方に差し上げます', 'price' => '-'),
                array('salon_id' => 17, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初めての方、初回のみサービス', 'service_content' => '35分→60分、3850円
                40分→60分、3080円', 'price' => '-'),
                array('salon_id' => 18, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイド1万円', 'service_content' => '1万円で11000円分利用できます', 'price' => '10000'),
                array('salon_id' => 18, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイド2万円', 'service_content' => '2万円で22500円分利用できます', 'price' => '20000'),
                array('salon_id' => 18, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイド3万円', 'service_content' => '3万円で35000円分利用できます', 'price' => '30000'),
                array('salon_id' => 18, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'ソフトコース', 'service_content' => '14580円で17040円分利用できます', 'price' => '14580'),
                array('salon_id' => 18, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'ビギナーコース', 'service_content' => '14580円で17820円分利用できます', 'price' => '14580'),
                array('salon_id' => 18, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'ブラウンコース', 'service_content' => '22680円で27000円分利用できます', 'price' => '22680'),
                array('salon_id' => 18, 'otoku_type' => 'お得', 'subject_person' => '全員', 'service_name' => '平日昼間サービス！', 'service_content' => '平日１６時までにご利用のお客様、日焼け料金１０％ＯＦＦ！', 'price' => '-'),
                array('salon_id' => 22, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '予約割引', 'service_content' => 'お帰りの際に次回のご予約をされると、次回の料金を10％OFFにてご利用いただけます', 'price' => '-'),
                array('salon_id' => 22, 'otoku_type' => 'クーポン', 'subject_person' => '-', 'service_name' => '学生割引「ガキワリ君」', 'service_content' => '学生証持参のお客様に限り、1000円割引タイムサービス実施中！', 'price' => '-'),
                array('salon_id' => 22, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'インターネット限定割引', 'service_content' => 'ＨＰよりサービスチケットを印刷し、持参すると10分無料', 'price' => '-'),
                array('salon_id' => 22, 'otoku_type' => '会員', 'subject_person' => '全員', 'service_name' => 'ＶＩＰ会員', 'service_content' => '年会費3000円で、全マシーン一般価格より1000円オフ', 'price' => '-'),
                array('salon_id' => 22, 'otoku_type' => '会員', 'subject_person' => '全員', 'service_name' => 'シルバーＶＩＰ', 'service_content' => '年会費5000円で、ジェル使い放題', 'price' => '-'),
                array('salon_id' => 22, 'otoku_type' => 'お得', 'subject_person' => '全員', 'service_name' => 'セット割引', 'service_content' => 'ＦＡＣＥマシーンご利用の方で、ＢＥＤマシーンを同時にご利用いただくと10分700円で利用可能', 'price' => '-'),
                array('salon_id' => 24, 'otoku_type' => 'タンニングチケット', 'subject_person' => '全員', 'service_name' => '5400円⇒6000円分', 'service_content' => 'お得なチケットをお求め下さい
                5400円で6000円分利用できます。', 'price' => '-'),
                array('salon_id' => 24, 'otoku_type' => 'タンニングチケット', 'subject_person' => '全員', 'service_name' => '8700円⇒10000円分', 'service_content' => 'お得なチケットをお求め下さい
                8700円で10000円分利用できます。', 'price' => '-'),
                array('salon_id' => 24, 'otoku_type' => 'タンニングチケット', 'subject_person' => '全員', 'service_name' => '16400円⇒20000円分', 'service_content' => 'お得なチケットをお求め下さい
                16400円で20000円分利用できます。', 'price' => '-'),
                array('salon_id' => 25, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回500円割引き', 'service_content' => 'ホームページより印刷', 'price' => '-'),
                array('salon_id' => 25, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'お友達紹介500円割引き', 'service_content' => 'ホームページより印刷', 'price' => '-'),
                array('salon_id' => 25, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'お誕生日サービス', 'service_content' => 'お誕生日にはサービス致します！！
                証明出来る物ご提示下さい、３日前後ＯＫ!', 'price' => '-'),
                array('salon_id' => 25, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '雨の日割引', 'service_content' => '雨の日にご来店頂くとサービスあります。
                (傘が必要な程度・店主判断基準とします)', 'price' => '-'),
                array('salon_id' => 26, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '一般チケット', 'service_content' => 'ノーマル200分チケット、オリンピック120分チケット', 'price' => '8000'),
                array('salon_id' => 26, 'otoku_type' => '回数券', 'subject_person' => '学生', 'service_name' => '学生チケット', 'service_content' => 'ノーマル200分チケット、オリンピック120分チケット', 'price' => '7000'),
                array('salon_id' => 28, 'otoku_type' => 'クーポン', 'subject_person' => '二回目以降', 'service_name' => '早割', 'service_content' => '10：00～14：00
                全日焼けマシーンのご利用が10分1000円', 'price' => '-'),
                array('salon_id' => 29, 'otoku_type' => 'クーポン', 'subject_person' => '二回目以降', 'service_name' => '早割', 'service_content' => '10：00～14：00
                全日焼けマシーンのご利用が10分1000円', 'price' => '-'),
                array('salon_id' => 29, 'otoku_type' => 'クーポン', 'subject_person' => '二回目以降', 'service_name' => 'セット割', 'service_content' => '14：00～ラスト
                全日焼けマシーン＋顔焼きorコラーゲンマシーン50%オフ', 'price' => '-'),
                array('salon_id' => 30, 'otoku_type' => 'クーポン', 'subject_person' => '二回目以降', 'service_name' => '早割', 'service_content' => '10：00～14：00
                全日焼けマシーンのご利用が10分1000円', 'price' => '-'),
                array('salon_id' => 30, 'otoku_type' => 'クーポン', 'subject_person' => '二回目以降', 'service_name' => 'セット割', 'service_content' => '14：00～ラスト
                全日焼けマシーン＋顔焼きorコラーゲンマシーン50%オフ', 'price' => '-'),
                array('salon_id' => 32, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回サービス', 'service_content' => '通常価格から￥1,000 OFF
                ※顔焼きは対象外です。 ※初回の方は、 最長30分までとなります。', 'price' => '-'),
                array('salon_id' => 33, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回サービス', 'service_content' => '通常価格から￥1,000 OFF
                ※顔焼きは対象外です。 ※初回の方は、 最長30分までとなります。', 'price' => '-'),
                array('salon_id' => 34, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回サービス', 'service_content' => '通常価格から￥1,000 OFF
                ※顔焼きは対象外です。 ※初回の方は、 最長30分までとなります。', 'price' => '-'),
                array('salon_id' => 38, 'otoku_type' => 'お得', 'subject_person' => '-', 'service_name' => 'マンスリーパス（メンバー価格）', 'service_content' => '一ヶ月日焼けマシン（シャワーオイル付）使い放題！！
                キャンペーン実施中！！

                1日36分', 'price' => '8640'),
                array('salon_id' => 38, 'otoku_type' => 'お得', 'subject_person' => '-', 'service_name' => 'マンスリーパス（高校生以下）', 'service_content' => '一ヶ月日焼けマシン（シャワーオイル付）使い放題！！
                キャンペーン実施中！！

                1日36分', 'price' => '7560'),
                array('salon_id' => 49, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '回数券', 'service_content' => '回数券
                20分×4回分
                7400円のところ5180円', 'price' => '5180'),
                array('salon_id' => 49, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'ポイントサービス', 'service_content' => '1000円毎に1ポイント進呈！

                ポイント毎にステキな特典が付いてきます。', 'price' => '-'),
                array('salon_id' => 50, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'おすすめ組合せ自由コース
                Ａコース（全てのマシーン）
                40分', 'service_content' => '', 'price' => '3000'),
                array('salon_id' => 50, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'おすすめ組合せ自由コース
                Ａコース（全てのマシーン）
                60分', 'service_content' => '', 'price' => '3300'),
                array('salon_id' => 50, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'おすすめ組合せ自由コース
                Ｂコース（エボリューション以外）
                40分', 'service_content' => '', 'price' => '2500'),
                array('salon_id' => 50, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'おすすめ組合せ自由コース
                Ｂコース（エボリューション以外）
                60分', 'service_content' => '', 'price' => '3000'),
                array('salon_id' => 52, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回のみ1,000円ポッキリ！', 'service_content' => 'スタンダードベッド30分＋OIL or GEL付き。さらに割引チケットをプレゼント。 
                ・対象期間：9月～3月
                　（4月～8月は繁忙期のためこのサービスはご利用頂けません）
                ・重複利用を避けるため、身分証明書をご提示頂きます', 'price' => '1000'),
                array('salon_id' => 52, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '学生＆レディースサービス ', 'service_content' => '平日月曜～金曜の17:00までに入店された方には、オイルorジェルをサービス（学生の場合は学生証の提示をお願いします） ', 'price' => '-'),
                array('salon_id' => 52, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '激安回数券 ', 'service_content' => 'マシン利用回数4回　8,000円分を5,000円で購入できる引換券をプレゼント', 'price' => '5000'),
                array('salon_id' => 52, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '利用料　500円OFF ', 'service_content' => 'お一人様1回限り。（他のサービスとの併用はできません） ', 'price' => '-'),
                array('salon_id' => 52, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'オイル or ジェルをサービス ', 'service_content' => 'お一人様1回限り。（他のサービスとの併用はできません） ', 'price' => '-'),
                array('salon_id' => 53, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカードキャンペーン
                10,000円　⇒ 11,000円分', 'service_content' => 'また、購入されたお客様はアメニティグッズ料金540円が毎回無料になりかなりお得です！
                メンバーズカードにポイントとプリペイド料金の両方が入りますので、１枚のカードでご利用いただけます。

                カード発行手数料　通常３３０円 ⇒ ０円
                ※カード再発行手数料は３３０円頂きます。', 'price' => '10000'),
                array('salon_id' => 53, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカードキャンペーン
                30,000円　⇒ 35,000円分', 'service_content' => 'また、購入されたお客様はアメニティグッズ料金540円が毎回無料になりかなりお得です！
                メンバーズカードにポイントとプリペイド料金の両方が入りますので、１枚のカードでご利用いただけます。

                カード発行手数料　通常３３０円 ⇒ ０円
                ※カード再発行手数料は３３０円頂きます。', 'price' => '30000'),
                array('salon_id' => 53, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカードキャンペーン
                50,000円　⇒ 60,000円分', 'service_content' => 'また、購入されたお客様はアメニティグッズ料金540円が毎回無料になりかなりお得です！
                メンバーズカードにポイントとプリペイド料金の両方が入りますので、１枚のカードでご利用いただけます。

                カード発行手数料　通常３３０円 ⇒ ０円
                ※カード再発行手数料は３３０円頂きます。', 'price' => '50000'),
                array('salon_id' => 53, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '下地作りコースキャンペーン', 'service_content' => '肌の白い方、下地、旅行前、女性の方におすすめのコース。2回分', 'price' => '5500'),
                array('salon_id' => 53, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'しっかり小麦色コースキャンペーン', 'service_content' => '小麦色の肌を作りたい！更に色をつけたい方にオススメのコース。2回分。', 'price' => '7000'),
                array('salon_id' => 53, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'お試しキャンペーン', 'service_content' => 'レギュラークラス初回のみ30分税込み1080円。（通常2700円）', 'price' => '1080'),
                array('salon_id' => 53, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'キャッシュバックキャンペーン', 'service_content' => '次回タンニングで使用可能なアメニティグッズサービス券540円分プレゼント', 'price' => '-'),
                array('salon_id' => 53, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学生キャンペーン', 'service_content' => 'お会計の際に学生書をご提示いただくと、スーパークラス、レギュラークラスどちらか30分1080円（ジェル・オイル別）でご案内いたします。', 'price' => '1080'),
                array('salon_id' => 54, 'otoku_type' => '会員', 'subject_person' => '全員', 'service_name' => 'スタンダードコース', 'service_content' => '年会費￥500

                ・お電話でのご予約の受付
                ・スタッフとのタンニングプラン相談
                ・タンニングジェルが￥100で利用可能
                ・アメニティの貸し出し
                ・10分につき1ポイントを付与', 'price' => '500'),
                array('salon_id' => 54, 'otoku_type' => '会員', 'subject_person' => '全員', 'service_name' => 'V.I.P.メンバープラン', 'service_content' => '年会費￥1,500

                ・いつご来店されてもタンニングジェルが無料
                ・スタンダードのアメニティに加え
                　充電器なども貸出
                ・スタンダード会員に比べポイント特典が2倍
                ・9・6がつく日はポイント特典が2倍
                ・お客様の誕生日にはバースデイ割引
                ・火曜日、水曜日に50分以上のご利用で、
                　　￥500offチケットプレゼント', 'price' => '1500'),
                array('salon_id' => 54, 'otoku_type' => 'サービス', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '500円を割引させて頂きます。
                来店時間が11:00a.m.～1:00p.m.の間であれば無料で10分延長致します。', 'price' => '-'),
                array('salon_id' => 54, 'otoku_type' => 'サービス', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '500円を割引させて頂きます。
                来店時間が11:00a.m.～1:00p.m.の間であれば無料で10分延長致します。', 'price' => '-'),
                array('salon_id' => 54, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'オープンキャンペーン', 'service_content' => '新規のお客様に限り、次回半額チケットプレゼント', 'price' => '-'),
                array('salon_id' => 55, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => 'タンニング回数券', 'service_content' => '日焼けマシン回数券（￥13,000分）    が￥9,800', 'price' => '9800'),
                array('salon_id' => 57, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'セット割', 'service_content' => '(利用時間は関係なし)

                セット利用でさらにお得なプランを是非ご利用ください。

                合計金額より500円税別サービス！！

                タンニング　＋　酸素カプセル

                コラーゲンマシン　＋　酸素カプセル', 'price' => '-'),
                array('salon_id' => 57, 'otoku_type' => 'ポイント', 'subject_person' => '全員', 'service_name' => 'ソラリスポイント', 'service_content' => 'ソラリスポイントについて
                500円＋税毎に1ポイント加算
                例）タンニング35分利用＝4320円＝8ポイントとなります。
                20ポイント単位でマシンに応じたサービスと交換する事が出来ます。
                

                ※タンニング利用時ジェル代は現金又はプリペイドカードにて500円＋税必要となります。', 'price' => '-'),
                array('salon_id' => 57, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回登録者限定サービス ネット割', 'service_content' => 'ホームページ参照', 'price' => '-'),
                array('salon_id' => 57, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード', 'service_content' => '9000円で10000円分使える', 'price' => '9000'),
                array('salon_id' => 57, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード', 'service_content' => '26000円で30000円分使える', 'price' => '26000'),
                array('salon_id' => 57, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'モーニングサービス', 'service_content' => '10:00～13:00にタンニングサービス30分以上ご利用の場合、5分サービス
                酸素カプセル40分以上ご利用の場合、10分サービス
                ※コラーゲンマシーンはご利用対象外', 'price' => '-'),
                array('salon_id' => 57, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '予約割', 'service_content' => 'コラーゲンマシーン・酸素カプセルご利用当日の帰りに次回予約をした場合のみ500＋税金をサービス', 'price' => '-'),
                array('salon_id' => 58, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 58, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 58, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 58, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 58, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 58, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '1000'),
                array('salon_id' => 58, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 59, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 59, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 59, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 59, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 59, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 59, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 59, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 60, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 60, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 60, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 60, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 60, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 60, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 60, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 61, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 61, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 61, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 61, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 61, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 61, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 61, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 62, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 62, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 62, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 62, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 62, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 62, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 62, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 63, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 63, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 63, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 63, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 63, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 63, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 63, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 64, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 64, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 64, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 64, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 64, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 64, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 64, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 65, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 65, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 65, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 65, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 65, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 65, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 65, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 66, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 66, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 66, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 66, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 66, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 66, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 66, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 67, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 67, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 67, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 67, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 67, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 67, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 67, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 68, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 68, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 68, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 68, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 68, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 68, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 68, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 69, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 69, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 69, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 69, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 69, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 69, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 69, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 70, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 70, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 70, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 70, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 70, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 70, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 70, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 71, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 71, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 71, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 71, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 71, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 71, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 71, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 72, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 72, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 72, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 72, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 72, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 72, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 72, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 73, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 73, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 73, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 73, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 73, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 73, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 73, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 74, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 74, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 74, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 74, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 74, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 74, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 74, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 75, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 75, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 75, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 75, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 75, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 75, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 75, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 76, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 76, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 76, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 76, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 76, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 76, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 76, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 77, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 77, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 77, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 77, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 77, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 77, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 77, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 78, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 78, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 78, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 78, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 78, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 78, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 78, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 79, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 79, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 79, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 79, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 79, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 79, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 79, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 80, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 80, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 80, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 80, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 80, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 80, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 80, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 81, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 81, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 81, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 81, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 81, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 81, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 81, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 82, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 82, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 82, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 82, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 82, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 82, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 82, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 83, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 83, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 83, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 83, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 83, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 83, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 83, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 84, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 84, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 84, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 84, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 84, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 84, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 84, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 85, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 85, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 85, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 85, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 85, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 85, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 85, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 86, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ともだち割', 'service_content' => '紹介者1000円オフ。おともだち2000円オフ', 'price' => '-'),
                array('salon_id' => 86, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生の方は会員になると、ゴールドカードからスタートとなり、毎回ジェル（500円）が無料になります。さらに学割時間帯にご来店された場合、500円割引になります。（学割時間帯は基本的に平日10～17時となっておりますが、店舗によって異なる場合があるので、必ずご確認下さい。', 'price' => '-'),
                array('salon_id' => 86, 'otoku_type' => 'クーポン', 'subject_person' => '女性', 'service_name' => '女性割', 'service_content' => '女性の方は最初からゴールドカードになり、毎回ジェル（500円）が無料になります。', 'price' => '-'),
                array('salon_id' => 86, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード1万円', 'service_content' => 'チャージ金額10000円で11500円ご利用可能。1500円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 86, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード2万円', 'service_content' => 'チャージ金額20000円で24000円ご利用可能。4000円お得。※有効期限はありません。サービスチケット、割引券との併用可能。キャッシュレスなので、受付がスムーズ。', 'price' => '-'),
                array('salon_id' => 86, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロン初心者・久しぶりに日焼けされる方', 'service_content' => '20分、通常3000円のところSOLEメルマガ登録で1000円に', 'price' => '-'),
                array('salon_id' => 86, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けされている方・他店で焼かれている方', 'service_content' => '25分、通常3500円のところSOLEメルマガ登録で1500円に。
                30分、通常4000円のところSOLEメルマガ登録で2000円に。', 'price' => '-'),
                array('salon_id' => 99, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '朝割引', 'service_content' => 'PM1:00までにご来店されてベッド型を30分以上ご利用の場合、500割引', 'price' => '-'),
                array('salon_id' => 103, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ゴールドプラン', 'service_content' => '(店内すべてのマシンOK)
                基本料金5500円　以降30日間30分600円からタンニング可能なプラン 
                ※学割4900円 
                30分強マシン 800円
                30分中マシン 700円
                30分弱マシン 600円
                10分延長200円共通 
                ※諏訪市、諏訪郡、茅野市、岡谷市以外の遠方からの方は＋１０日間有効（要身分証提示）', 'price' => '5500'),
                array('salon_id' => 103, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => 'ゴールドプラン（学割）', 'service_content' => '(店内すべてのマシンOK)
                基本料金5500円　以降30日間30分600円からタンニング可能なプラン 
                ※学割4900円 
                30分強マシン 800円
                30分中マシン 700円
                30分弱マシン 600円
                10分延長200円共通 
                ※諏訪市、諏訪郡、茅野市、岡谷市以外の遠方からの方は＋１０日間有効（要身分証提示）', 'price' => '4900'),
                array('salon_id' => 103, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '半額プラン３８', 'service_content' => '(一般料金価格の半額)
                基本料金3800円　以降38日間半額料金でタンニング可能なプラン
                ※学割3500円
                ※諏訪市、諏訪郡、茅野市、岡谷市以外の遠方からの方は＋１０日間有効（要身分証提示）', 'price' => '3800'),
                array('salon_id' => 103, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '半額プラン３８（学割）', 'service_content' => '(一般料金価格の半額)
                基本料金3800円　以降38日間半額料金でタンニング可能なプラン
                ※学割3500円
                ※諏訪市、諏訪郡、茅野市、岡谷市以外の遠方からの方は＋１０日間有効（要身分証提示）', 'price' => '3500'),
                array('salon_id' => 103, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '焼き放題', 'service_content' => 'なんと1日50分まで焼き放題！！全マシーン可能！30日毎日入ったら通常料金だと120000円分！！
                料金19000円
                ※学割17000円 
                ※諏訪市、諏訪郡、茅野市、岡谷市以外の遠方からの方は＋１０日間有効（要身分証提示）※諏訪市、諏訪郡、茅野市、岡谷市以外の遠方からの方は＋１０日間有効（要身分証提示）', 'price' => '19000'),
                array('salon_id' => 103, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '焼き放題（学割）', 'service_content' => 'なんと1日50分まで焼き放題！！全マシーン可能！30日毎日入ったら通常料金だと120000円分！！
                料金19000円
                ※学割17000円 
                ※諏訪市、諏訪郡、茅野市、岡谷市以外の遠方からの方は＋１０日間有効（要身分証提示）', 'price' => '17000'),
                array('salon_id' => 103, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回900円プラン', 'service_content' => 'タンニング未経験の方にお得なコミコミ900円プランをご用意いたしました。手ぶらでお越しください。日焼けジェル、タオル貸し出し、タンニング後のシャワー等々セット初回限定料金です。
                当店強マシン15分、中マシン20分、弱マシン25分からお選びください。

                ※会員希望の方は入会金500円 永久会員', 'price' => '900'),
                array('salon_id' => 103, 'otoku_type' => 'ポイント', 'subject_person' => '全員', 'service_name' => 'ポイントサービス', 'service_content' => 'ご来店ごとに1ポイント付与いたします。 
                またフリープランご購入時、お友達ご紹介で5ポイントを差し上げます。', 'price' => '-'),
                array('salon_id' => 106, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペードカード', 'service_content' => '8900円で10000円分の日焼けが出来ます', 'price' => '8900'),
                array('salon_id' => 106, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'セット割', 'service_content' => 'ベッドマシーンとフェイスマシン同時利用で、ベッド料金＋500円（15分）で顔焼き利用可能', 'price' => '-'),
                array('salon_id' => 106, 'otoku_type' => 'クーポン', 'subject_person' => '-', 'service_name' => '学割', 'service_content' => '300円ＯＦＦ', 'price' => '-'),
                array('salon_id' => 106, 'otoku_type' => 'クーポン', 'subject_person' => '-', 'service_name' => '8と9のつく日割引', 'service_content' => '8と9のつく日に限り、300円ＯＦＦ', 'price' => '-'),
                array('salon_id' => 109, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回登録料無料', 'service_content' => '初回登録料1000円を無料で！！', 'price' => '-'),
                array('salon_id' => 109, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'お得回数券
                3回分', 'service_content' => '30分×3回
                9,000円
                →６,０００円', 'price' => '6000'),
                array('salon_id' => 109, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'お得回数券
                5回分', 'service_content' => '30分×5回
                15,000円
                →１０,０００円', 'price' => '10000'),
                array('salon_id' => 109, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'お得回数券
                10回分', 'service_content' => '30分×10回
                30,000円
                →１８,０００円', 'price' => '18000'),
                array('salon_id' => 109, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ﾌﾞﾛﾝｽﾞｺｰｽ', 'service_content' => 'ｽﾀﾝﾃﾞｨﾝｸﾞ20分orﾍﾞｯﾄﾞ30分＋ﾌｪｲｽ15分×5回分', 'price' => '13000'),
                array('salon_id' => 109, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ｼﾙﾊﾞｰｺｰｽ', 'service_content' => 'ｽﾀﾝﾃﾞｨﾝｸﾞ40分orﾍﾞｯﾄﾞ40分+ﾌｪｲｽ15分×5回分', 'price' => '16000'),
                array('salon_id' => 109, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ｺﾞｰﾙﾄﾞｺｰｽ', 'service_content' => 'ｽﾀﾝﾃﾞｨﾝｸﾞ50分orﾍﾞｯﾄﾞ60分+ﾌｪｲｽ15分×5回分', 'price' => '18000'),
                array('salon_id' => 110, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'スペシャル割引ＤＡＹ', 'service_content' => '（当日午前９時～翌午前８時受付迄）
                毎月、２日・１２日・２２日　　　　スペシャル割引DAY価格表
                ※ その他のサービス・サービス券の併用はできません', 'price' => '-'),
                array('salon_id' => 110, 'otoku_type' => 'サービス', 'subject_person' => '学生', 'service_name' => 'ハイスクールＤＡＹ（高校生＆中学生対象）', 'service_content' => '（当日午前９時～翌午前８時受付迄）
                毎月、２日・１２日・２２日　　　　スペシャル割引DAY価格表
                ※ その他のサービス・サービス券の併用はできません', 'price' => '-'),
                array('salon_id' => 110, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'モーニング割引', 'service_content' => '（午前9時～午後3時受付まで）
                ５００円割引（マシン利用３０分以上）サマー・リンゴは３００円引き！
                ※ その他のサービス・サービス券の併用はできません', 'price' => '-'),
                array('salon_id' => 110, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '友人紹介サービス', 'service_content' => '次回利用可能　２０分無料サービス券プレゼント！', 'price' => '-'),
                array('salon_id' => 110, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'ホリデーサービス', 'service_content' => '（日・祝、午前９時～翌午前８時受付迄）
                次回利用可能　１０分無料サービス券プレゼント！
                ※ その他のサービス・サービス券の併用はできません', 'price' => '-'),
                array('salon_id' => 110, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'ハッピーバースデーサービス', 'service_content' => '（当日ご来店の方限定）
                次回利用可能　３０分無料サービス券プレゼント！', 'price' => '-'),
                array('salon_id' => 110, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プレミアムチケット', 'service_content' => '10800円で14000円のプレミア', 'price' => '10800'),
                array('salon_id' => 110, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '毎週水曜はレディースデー・毎週木曜はメンズデー', 'service_content' => '（当日午前９時～翌午前８時受付迄）
                ５００円割引（マシン４０分以上利用に限る）サマー・リンゴは３００円引き！
                ※ その他のサービス・サービス券の併用はできません', 'price' => '-'),
                array('salon_id' => 110, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'スタンプカードサービス', 'service_content' => 'マシン利用時１，０００円につき１個のスタンプ！
                　　　　　　　　　●１０個で１，０００円分のサービス
                　　　　　　　　　●２０個で２，０００円分のサービス
                　　　　　　　　　●３０個で３，０００円分のサービス
                　　　　　　　　　●４０個で４，０００円分のサービス
                　　　　　　　　　★４０個ためると計１０，０００円もオトク！！', 'price' => '-'),
                array('salon_id' => 110, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '年間フリーパスチケット', 'service_content' => '毎日お好きなマシン４０分間日焼け可能（１日１回限り）', 'price' => '132000'),
                array('salon_id' => 110, 'otoku_type' => 'サービス', 'subject_person' => '新規', 'service_name' => '初回サービス', 'service_content' => 'オリンピックⅡ　３０分　１，９５０円
                オリンピック　　３０分　１，８００円
                サマー　　・　　リンゴ　　　　３０分　１，６００円
                （　身分証提示の方のみ　）', 'price' => '-'),
                array('salon_id' => 118, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 118, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 118, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 119, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 119, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 119, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 120, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 120, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 120, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 121, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 121, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 121, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 122, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 122, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 122, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 123, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 123, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 123, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 124, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 124, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 124, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 125, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 125, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 125, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 126, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 126, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 126, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 127, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 127, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 127, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 128, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 128, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 128, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 129, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 129, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 129, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 130, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 130, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 130, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 131, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 131, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 131, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 132, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 132, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 132, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 133, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 133, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 133, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 134, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 134, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 134, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 135, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 135, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 135, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 136, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 136, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 136, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 137, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 137, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 137, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 138, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 138, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 138, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 139, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 139, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 139, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 140, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 140, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 140, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 141, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 141, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 141, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 142, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 142, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 142, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 143, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 143, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 143, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 144, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 144, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 144, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 145, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 145, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 145, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 146, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 146, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 146, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 147, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 147, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 147, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 148, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 148, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 148, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 149, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Special Coupon　限定スペシャルクーポン券', 'service_content' => '初めてのお客様は￥1,000(税込価格)からご利用いただけます。
                (M.Hyper class 20min)

                （当クーポンは2回目以降、ご来店の際にご利用ください。）
                ホームページよりクーポン画面をプリントアウトし、破線で切り取りの上、お近くのイリオス・ブラッキーまでご持参下さい。ご利用の際には、必ず精算前に当クーポンをご提示下さい。', 'price' => '-'),
                array('salon_id' => 149, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'SUMMER 10 PASS', 'service_content' => '毎回スタンプ有効期限内にご利用いただければ、
                ▶▶▶常に10％off!!
                上手に使って【お得】に日焼けを!!

                 
                ※一旦スタンプ有効期限が切れてしまっても、ご利用時に再度期限が更新されますので、9月末までパスをお持ち下さい。
                ※XXX PLUS+、ポイントカードのみ併用可。※一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 149, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'XXX PLUS+　3人揃えば日焼けがお得', 'service_content' => '［トリプルエックス プラス］
                ３名様以上のご来店で、全員+10分延長無料!!
                ▲［サマー10パス］との併用Ｏ.Ｋ!!
                OPEN〜18:00で実施中 ※4月〜9月

                 

                ※ 併用できない割引、メンバー区分がございます。詳細はご利用店舗までお問い合わせ下さい。
                ※24時間営業店舗は、朝9:00〜スタートとなります。
                ※ 一部店舗では実施しておりません。', 'price' => '-'),
                array('salon_id' => 151, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ホームページ限定！サービスチケット', 'service_content' => '5回分のサービスチケットをプレゼント!!初回から割引可能 なので、とりあえず日焼けサロン「エスタジ/ESTASI」のタンニングマシンを試してみたい！という方におすすめです。最大割引価格1,000円offで日焼けサロンを体験していただけます。

                ※フロント、又はお電話にて「ホームページ見た！」で サービスチケットを無料配布いたします。', 'price' => '-'),
                array('salon_id' => 151, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '初心者向け4回券', 'service_content' => '通常13400円～14900円（登録料、税込）分を10000円でご提供', 'price' => '10000'),
                array('salon_id' => 151, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '中級者向け4回券', 'service_content' => '通常14900円～16900円（登録料、税込）分を11500円でご提供', 'price' => '11500'),
                array('salon_id' => 151, 'otoku_type' => '金券', 'subject_person' => '全員', 'service_name' => '金券', 'service_content' => '通常20000円（登録料、税込）分を16000円でご提供', 'price' => '16000'),
                array('salon_id' => 151, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '1名様でのご来店', 'service_content' => '1名様でご来店の場合1000円オフ', 'price' => '-'),
                array('salon_id' => 151, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '2名様以上でのご来店', 'service_content' => '各1000円オフ＋日焼けジェル', 'price' => '-'),
                array('salon_id' => 152, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回限定！！
                2週間コース（11,340円分）
                一般', 'service_content' => 'リンゴ20分 or スーパーベッド20分 or
                アポロ25分
                ×3回

                ※2週間以内にマシンを3回入っていただくコースです。
                ※毎回マシンは自由に変更できます。
                ※海やプールに行く前の下地焼きに最適
                ※別途入会金 1,080円', 'price' => '5670'),
                array('salon_id' => 152, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回限定！！
                2週間コース（11,340円分）
                学生', 'service_content' => 'リンゴ20分 or スーパーベッド20分 or
                アポロ25分
                ×3回

                ※2週間以内にマシンを3回入っていただくコースです。
                ※毎回マシンは自由に変更できます。
                ※海やプールに行く前の下地焼きに最適
                ※別途入会金 860円', 'price' => '5670'),
                array('salon_id' => 158, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'お得なクーポン！', 'service_content' => '￥500-OFF! 

                ホームページ限定500円割り引きクーポン券
                点線内は必ず見えるようにご持参ください。

                【ホームページ限定500円割り引きクーポン券 】 
                ※ プリントアウトしてご持参するか携帯の画面でスタッフにお見せ下さい
                （他の割引サービスとは併用できません。）
                ※ 新規の方に限り有効です。尚、新規登録料として￥500いただきます。', 'price' => '-'),
                array('salon_id' => 172, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '¥10,000で¥12,000分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 172, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回割引クーポン', 'service_content' => 'ホームページのクーポン印刷で、初回1000円オフ（会員登録500円。シャワー500円）', 'price' => '-'),
                array('salon_id' => 173, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => '超お得なプリペイドカード', 'service_content' => '1万円で2万円分のプリカ発売中（期間限定）', 'price' => '10000'),
                array('salon_id' => 173, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（10:00～12:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 173, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（22:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 174, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 174, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 174, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（22:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 175, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 175, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 175, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 176, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 176, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 176, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 177, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 177, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 177, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 178, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '8000円で12000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '8000'),
                array('salon_id' => 178, 'otoku_type' => 'サービス', 'subject_person' => '学生', 'service_name' => '学割サービス', 'service_content' => '■学割サービススタート 当店1番人気マシン「キッス」30分1,000円 ※要毎回学生証提示', 'price' => '1000'),
                array('salon_id' => 180, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 180, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 180, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 181, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 181, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 181, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 182, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 182, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 182, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 183, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 183, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 183, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 185, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 185, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 185, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 187, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 187, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 188, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 189, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 189, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 189, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 190, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 190, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 190, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 192, 'otoku_type' => 'プリペイド', 'subject_person' => '新規', 'service_name' => 'ご新規のお客様限定のお得なプリペイドカード5000円', 'service_content' => '新規限定、プリペイドカード販売中。5000円分ご購入で、当日全マシーン20分無料。', 'price' => '5000'),
                array('salon_id' => 192, 'otoku_type' => 'プリペイド', 'subject_person' => '新規', 'service_name' => 'ご新規のお客様限定のお得なプリペイドカード8000円', 'service_content' => '新規限定、プリペイドカード販売中。8000円分ご購入で、当日全マシーン30分無料。', 'price' => '8000'),
                array('salon_id' => 192, 'otoku_type' => 'プリペイド', 'subject_person' => '新規', 'service_name' => 'ご新規のお客様限定のお得なプリペイドカード10000円', 'service_content' => '新規限定、プリペイドカード販売中。8000円分ご購入で、当日全マシーン30分無料。プラス顔焼き10分無料。', 'price' => '10000'),
                array('salon_id' => 192, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'お得なプリペイドカード10000円', 'service_content' => '10000円プリカ購入で13000円分利用可能。3000円お得！', 'price' => '10000'),
                array('salon_id' => 192, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'お得なプリペイドカード20000円', 'service_content' => '20000円プリカ購入で27000円分利用可能。7000円お得！', 'price' => '20000'),
                array('salon_id' => 192, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'お得なプリペイドカード30000円', 'service_content' => '30000円プリカ購入で42000円分利用可能。12000円お得！', 'price' => '30000'),
                array('salon_id' => 192, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝トク', 'service_content' => '10～12時の間にご来店で、電話でご予約の際に「朝トク」と言って頂くと、
                全マシーン10分無料。もしくは、顔焼き10分サービス。', 'price' => '-'),
                array('salon_id' => 192, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜トク', 'service_content' => '22～24時の間にご来店で、電話でご予約の際に「夜トク」と言って頂くと、
                全マシーン10分無料。もしくは、顔焼き10分サービス。', 'price' => '-'),
                array('salon_id' => 193, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => '超お得なプリペイドカード', 'service_content' => '1万円で2万円分のプリカ発売中（期間限定）', 'price' => '10000'),
                array('salon_id' => 193, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '昼得', 'service_content' => '・朝得（11:00～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 193, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（20:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 195, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 195, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 195, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 196, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 196, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 196, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 197, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 197, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 197, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 198, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 198, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 198, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 199, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 199, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 199, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 200, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 200, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 200, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 202, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 202, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 202, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 203, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 203, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 203, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 204, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 204, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 204, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 205, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 205, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 205, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（20:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 207, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 207, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '顔焼き無料', 'service_content' => '全身マシンご利用の御客様限定！
                終日顔焼き無料', 'price' => '-'),
                array('salon_id' => 207, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '深夜割サービス', 'service_content' => '詳細は店舗へお問い合わせ下さいませ！', 'price' => '-'),
                array('salon_id' => 208, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 208, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 208, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 210, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 210, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 210, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 211, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 211, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 211, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 212, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 212, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 212, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（20:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 213, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 213, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 214, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 215, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '8000円で12000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '8000'),
                array('salon_id' => 215, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 215, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 216, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 216, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 216, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 217, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 217, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 217, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 218, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 218, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～13:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 218, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（21:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 223, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '販売中', 'price' => '-'),
                array('salon_id' => 225, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '販売中', 'price' => '-'),
                array('salon_id' => 226, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '8000円で12000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '8000'),
                array('salon_id' => 227, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '顔焼き無料', 'service_content' => '全身マシンご利用の御客様限定！
                終日顔焼き無料', 'price' => '-'),
                array('salon_id' => 227, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '8000円で12000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '8000'),
                array('salon_id' => 227, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => 'ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 227, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '駐得', 'service_content' => 'ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 227, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '学得', 'service_content' => 'ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 229, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '8000円で12000円分使えるカード販売中
                プリカを購入すると4,000円分もお得。店内にて販売しておりますのでご気軽にお声掛けください。注) このプリペイドカードはザ・サンラウンジ名駅太閤通店、金山店、岐阜店、多治見店にてご利用出来ます。その他の店舗ではご利用出来ませんので注意して下さい。', 'price' => '8000'),
                array('salon_id' => 229, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '・朝得（OPEN～14:00）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 229, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '・夜得（20:00～Last）ベッドマシーンご使用のお客様に強力TROPIC顔焼15分無料！', 'price' => '-'),
                array('salon_id' => 231, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '8000円で12000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '8000'),
                array('salon_id' => 236, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'ポイントカード', 'service_content' => 'ポイントが”貯まる”お得な会員カード
                会員カードはお得なポイントカードになっております。
                1000円のご利用で10ポイント。80ポイントで次回500円引きとなる、利用しやすいポイント制になっております。他にもタイムサービスやポイント2倍のキャンペーン等もございます。', 'price' => '-'),
                array('salon_id' => 246, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で20000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 246, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '顔焼き無料', 'service_content' => '全身マシンご利用の御客様限定！
                終日顔焼き無料', 'price' => '-'),
                array('salon_id' => 248, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '8000円で12000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '8000'),
                array('salon_id' => 248, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '顔焼き無料', 'service_content' => '全身マシンご利用の御客様限定！
                終日顔焼き無料', 'price' => '-'),
                array('salon_id' => 249, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '8000円で12000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '8000'),
                array('salon_id' => 249, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '顔焼き無料', 'service_content' => '全身マシンご利用の御客様限定！
                終日顔焼き無料', 'price' => '-'),
                array('salon_id' => 253, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '8000円で12000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '8000'),
                array('salon_id' => 253, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '顔焼き無料', 'service_content' => '全身マシンご利用の御客様限定！
                終日顔焼き無料', 'price' => '-'),
                array('salon_id' => 254, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '8000円で12000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '8000'),
                array('salon_id' => 254, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '顔焼き無料', 'service_content' => '全身マシンご利用の御客様限定！
                終日顔焼き無料', 'price' => '-'),
                array('salon_id' => 261, 'otoku_type' => 'チケット', 'subject_person' => '全員', 'service_name' => '前売りチケット1万円分', 'service_content' => '10,000円分（1,000×10枚）→1,000円（1枚）お得', 'price' => '10000'),
                array('salon_id' => 261, 'otoku_type' => 'チケット', 'subject_person' => '全員', 'service_name' => '前売りチケット1万5千円分', 'service_content' => '15,000円分（1,000×15枚）→2,000円（2枚）お得', 'price' => '15000'),
                array('salon_id' => 261, 'otoku_type' => 'チケット', 'subject_person' => '全員', 'service_name' => '前売りチケット2万円分', 'service_content' => '20,000円分（1,000×20枚）→3,000円（3枚）お得', 'price' => '20000'),
                array('salon_id' => 261, 'otoku_type' => 'チケット', 'subject_person' => '全員', 'service_name' => '前売りチケット2万5千円分', 'service_content' => '25,000円分（1,000×25枚）→4,000円（4枚）お得', 'price' => '25000'),
                array('salon_id' => 261, 'otoku_type' => 'チケット', 'subject_person' => '全員', 'service_name' => '前売りチケット3万円分', 'service_content' => '30,000円分（1,000×30枚）→5,000円（5枚）お得', 'price' => '30000'),
                array('salon_id' => 261, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '予約割引', 'service_content' => '■予約割引き10％OFF（入店1時間前までに予約いただけた場合）', 'price' => '-'),
                array('salon_id' => 261, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '学生割引', 'service_content' => '■学生割引き10%OFF（毎回、学生証提示）', 'price' => '-'),
                array('salon_id' => 261, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝割引', 'service_content' => '■朝割引き10%OFF（10：00～13：00　※平日のみ）', 'price' => '-'),
                array('salon_id' => 262, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'サンラウンジ限定プリペイドカード', 'service_content' => '10000円で15000円分使えるカード販売中
                枚数限定ですので、お早目にお買い求めください。', 'price' => '10000'),
                array('salon_id' => 263, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード', 'service_content' => '5000円→5400円', 'price' => '5000'),
                array('salon_id' => 263, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード', 'service_content' => '10000円→11000円', 'price' => '10000'),
                array('salon_id' => 266, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード', 'service_content' => '¥10,000で¥20,000分御利用頂ける、
                サンラウンジ限定プリペイドカード発売中！
                枚数限定ですので、お早目にお買い求めください。', 'price' => '-'),
                array('salon_id' => 266, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'あさとく', 'service_content' => 'Open～13：00、全身マシンご利用の御客様限定！
                顔焼き15分無料！', 'price' => '-'),
                array('salon_id' => 266, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'よるとく', 'service_content' => '21:00～Close、全身マシンご利用の御客様限定！
                顔焼き15分無料！', 'price' => '-'),
                array('salon_id' => 267, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '午前割引', 'service_content' => '3割引クーポン配布中', 'price' => '-'),
                array('salon_id' => 267, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '終日割引あり', 'service_content' => '3割引クーポン配布中', 'price' => '-'),
                array('salon_id' => 267, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ご同伴半額', 'service_content' => 'ご同伴半額は、メンバー様、ご新規様ご同伴利用にて', 'price' => '-'),
                array('salon_id' => 267, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '高校生半額', 'service_content' => '高校生半額は18歳以下ならフリーターでもOK。要年齢証明書', 'price' => '-'),
                array('salon_id' => 267, 'otoku_type' => 'クーポン', 'subject_person' => '初回', 'service_name' => '初回半額', 'service_content' => '初回のお客様限定（お一人様一回限り）お得なクーポン券をご利用ください。
                ＨＰクーポン券をプリントアウト、又は店頭にて画面をご提示ください。', 'price' => '-'),
                array('salon_id' => 268, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '午前割引', 'service_content' => '水曜日＆日曜日
                （２割引き）', 'price' => '-'),
                array('salon_id' => 268, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '終日割引あり', 'service_content' => '11：00～12：00
                （２割引き）', 'price' => '-'),
                array('salon_id' => 268, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ご同伴半額', 'service_content' => 'ご同伴半額は、メンバー様、ご新規様ご同伴利用にて', 'price' => '-'),
                array('salon_id' => 268, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '高校生半額', 'service_content' => '高校生半額は18歳以下ならフリーターでもOK。要年齢証明書', 'price' => '-'),
                array('salon_id' => 268, 'otoku_type' => 'クーポン', 'subject_person' => '初回', 'service_name' => '初回半額', 'service_content' => '初回のお客様限定（お一人様一回限り）お得なクーポン券をご利用ください。
                ＨＰクーポン券をプリントアウト、又は店頭にて画面をご提示ください。', 'price' => '-'),
                array('salon_id' => 270, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => 'お得な日焼けチケット', 'service_content' => '5セットチケット
                とびきり価格！　4,000円
                （有効期限3カ月）

                10セットチケット
                8,000円→とびきり価格！\6,000円
                （有効期限3カ月）', 'price' => '-'),
                array('salon_id' => 271, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回体験サービス', 'service_content' => '・会員登録無料
                ・全機種30分まで2000円にてご提供', 'price' => '-'),
                array('salon_id' => 271, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'サービスデー', 'service_content' => '毎週月曜日･水曜日･金曜日 30分以上で1,000円分のサービス券を発行しています。
                毎週日曜日 ご来店の方全員に30分以上 御利用の場合は1000円分サービス。', 'price' => '-'),
                array('salon_id' => 271, 'otoku_type' => 'サービス', 'subject_person' => '学生', 'service_name' => '学生割引', 'service_content' => '平日12：00～19：00の御来店の場合に学割料金となります。※学生証の提示もしくは、制服でのご来店が必要です。', 'price' => '-'),
                array('salon_id' => 276, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'お試し30分', 'service_content' => '当店が初めてな方、日焼けサロン、日サロが初めての方に嬉しいお試しキャンペーン。
                2500円ドリンク付', 'price' => '2500'),
                array('salon_id' => 276, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'カット+タンニング(コラーゲンケア)セット料金', 'service_content' => 'カット+1回30分　5,000円(ドリンク付き)
                理容室併設日焼けサロンだからできる、とってもおトクなセットです。', 'price' => '5000'),
                array('salon_id' => 277, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '回数券6回分', 'service_content' => '回数券あり（6回分）
                一般：7200円
                ジム会員：6600円', 'price' => '-'),
                array('salon_id' => 278, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'タンニングジェルお試し３回無料！', 'service_content' => '', 'price' => '-'),
                array('salon_id' => 279, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '早トク', 'service_content' => '11～13時（夏季10:30～）
                シャワー無料、ポイント1.5倍（単品の方）、全マシン5分延長無料', 'price' => '-'),
                array('salon_id' => 279, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'おトク！なプリペイドカード', 'service_content' => '9000円で11000円
                12000円で16000円
                （有効期間1年間）', 'price' => '-'),
                array('salon_id' => 282, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'お得コース', 'service_content' => '30分×8回：12000円
                30分×5回：
                9800円', 'price' => '-'),
                array('salon_id' => 282, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学生コース', 'service_content' => '30分×8回：8900円
                30分×5回：6900円
                学生の方限定のコースチケットです。学生証の提示が必要です。', 'price' => '-'),
                array('salon_id' => 282, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'フリーパス1ヶ月', 'service_content' => '完全“黒”を目指すなら、やっぱりフリーパス。カウアイ・マウイ・ハワイ」は２０分、「オアフ」は３０分、「Ｍｉｘ－Ｔ」は１５分ご使用いただけます。時間延長も承っております。', 'price' => '20000'),
                array('salon_id' => 282, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'フリーパス2週間', 'service_content' => '完全“黒”を目指すなら、やっぱりフリーパス。カウアイ・マウイ・ハワイ」は２０分、「オアフ」は３０分、「Ｍｉｘ－Ｔ」は１５分ご使用いただけます。時間延長も承っております。', 'price' => '12000'),
                array('salon_id' => 282, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回５０％オフ＆ジェルサービスの特別クーポン券', 'service_content' => 'ホームページより印刷してご利用下さい', 'price' => '-'),
                array('salon_id' => 283, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ホームページを見た！', 'service_content' => '新規のお客様初回最大1200円ＯＦＦ！！
                「ホームページを見た！」 とフロントで言ってもらうとナント！！
                新規のお客様は登録料1000円ＯＦＦ+初回マシン利用料約10％OFFに！！
                例）ＡＭの場合→Sフォーティー30分＋コラーゲンライト5分（女性10分）＋GEL⇒総額1600円

                　　　　　　(PM12時～PM17時の場合→同セットで⇒総額1700円)
                　　　　　　(PM17時～PM22時の場合→同セットで⇒総額1800円)
                メンバーの方でも「ホームページを見た！」で特典あり！！
                他のコースも「ホームページを見た！」で特典あります！！
                「ホームページを見た！」コースは朝10時～夜10時迄にご来店の方に限ります。
                お肌にハリとツヤを与える『コラーゲンライト』を無料サービス実施中！！(コラーゲンライトサービスは朝10時～夜10時迄にご来店の方に限ります）', 'price' => '-'),
                array('salon_id' => 284, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回限定クーポン　新規メンバーキャンペーン!!', 'service_content' => '初回のお客様限定！
                各マシーン特別価格にて', 'price' => '-'),
                array('salon_id' => 285, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回限定クーポン　新規メンバーキャンペーン', 'service_content' => '初回のお客様に限りオールマシン２０分￥1,050

                会員登録料、５００円　

                ご予約、ご来店の際にスタッフに「ホームページを見た」とお伝え下さい。', 'price' => '1550'),
                array('salon_id' => 286, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '吉祥寺店WEBクーポン', 'service_content' => 'ブロンズ吉祥寺店　最強日焼けマシン
                ディアボロ　　コラーゲンプラスを35分　3500円
                （すでに下地のあるお客様一回限定）
                焼けの違いを体感してください', 'price' => '3500'),
                array('salon_id' => 287, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'Web限定 ＢＲＯＮＺＥ 葛西店 新規体験キャンペーン！！', 'service_content' => '初めてブロンズをご利用のお客様限定！！
                各マシーン、特別価格にて', 'price' => '-'),
                array('salon_id' => 288, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回限定クーポン　新規メンバーキャンペーン', 'service_content' => '初回のお客様！上野店限定！！

                オールマシン２０分　1,050円

                

                会員登録料、ジェル代別途

                ご来店の際ホームページの画面を必ずＳＴＡＦＦにお見せ下さい！', 'price' => '1050'),
                array('salon_id' => 289, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回限定クーポン　新規メンバーキャンペーン', 'service_content' => '初回のお客様！大山店限定！！

                オールマシン２０分　1,050円

                

                会員登録料、ジェル代別途

                ご来店の際ホームページの画面を必ずＳＴＡＦＦにお見せ下さい！', 'price' => '1050'),
                array('salon_id' => 290, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'メンバー限定WEBクーポン', 'service_content' => 'オールタイム１０分サービス', 'price' => '-'),
                array('salon_id' => 291, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '新規来店限定WEBクーポン', 'service_content' => '新規のお客様限定でディスカウントさせていただきます！！！！

                ★SHARK

                ２５分　→　２,０００円

                ４０分　→　２,２００円

                ★ANGEL

                ２５分　→　１,６００円

                ４０分　→　１,８００円

                ★KISS

                ３０分　→　１,２００円

                ４０分　→　１,５００円

                

                入会料、ジェル代込みです！！！

                とってもお得になっておりますので是非一度ご来店ください', 'price' => '-'),
                array('salon_id' => 296, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'ご新規様 半額キャンペーン', 'service_content' => 'お気軽にお試しください!!
                初回ご利用の方に限り、ご利用料金を半額にて、ご利用いただけます。

                ※他のサービスとの併用不可', 'price' => '-'),
                array('salon_id' => 296, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'お友達 紹介キャンペーン', 'service_content' => 'この機会にぜひご紹介ください!!
                会員様、お友達とともに、ご利用料金を半額とさせていただきます。

                ※他のサービスとの併用不可', 'price' => '-'),
                array('salon_id' => 296, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ポイント2倍デー', 'service_content' => '毎週水・木曜日開催中!!
                対象の曜日は付与されるポイントが通常より2倍になります。
                

                ※他のサービスとの併用不可', 'price' => '-'),
                array('salon_id' => 296, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '朝割 キャンペーン', 'service_content' => '午後から予定がある方に朗報!!
                10時～12時の午前中はご利用料金の30%OFFでご利用いただけます。
                

                ※他のサービスとの併用不可', 'price' => '-'),
                array('salon_id' => 296, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '学割 半額キャンペーン', 'service_content' => '学生の方にオススメ割引!!
                授業後の15時～18時に学生服または学生証をご提示いただくと半額にてご利用いただけます。

                ※他のサービスとの併用不可', 'price' => '-'),
                array('salon_id' => 297, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'ご新規様 半額キャンペーン', 'service_content' => 'お気軽にお試しください!!
                初回ご利用の方に限り、ご利用料金を半額にて、ご利用いただけます。

                ※他のサービスとの併用不可', 'price' => '-'),
                array('salon_id' => 297, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'お友達 紹介キャンペーン', 'service_content' => 'この機会にぜひご紹介ください!!
                会員様、お友達とともに、ご利用料金を半額とさせていただきます。

                ※他のサービスとの併用不可', 'price' => '-'),
                array('salon_id' => 297, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ポイント2倍デー', 'service_content' => '毎週水・木曜日開催中!!
                対象の曜日は付与されるポイントが通常より2倍になります。
                

                ※他のサービスとの併用不可', 'price' => '-'),
                array('salon_id' => 297, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '朝割 キャンペーン', 'service_content' => '午後から予定がある方に朗報!!
                10時～12時の午前中はご利用料金の30%OFFでご利用いただけます。
                

                ※他のサービスとの併用不可', 'price' => '-'),
                array('salon_id' => 297, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '学割 半額キャンペーン', 'service_content' => '学生の方にオススメ割引!!
                授業後の15時～18時に学生服または学生証をご提示いただくと半額にてご利用いただけます。

                ※他のサービスとの併用不可', 'price' => '-'),
                array('salon_id' => 298, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'ご新規様 半額キャンペーン', 'service_content' => 'お気軽にお試しください!!
                初回ご利用の方に限り、ご利用料金を半額にて、ご利用いただけます。

                ※他のサービスとの併用不可', 'price' => '-'),
                array('salon_id' => 298, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'お友達 紹介キャンペーン', 'service_content' => 'この機会にぜひご紹介ください!!
                会員様、お友達とともに、ご利用料金を半額とさせていただきます。

                ※他のサービスとの併用不可', 'price' => '-'),
                array('salon_id' => 298, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ポイント2倍デー', 'service_content' => '毎週水・木曜日開催中!!
                対象の曜日は付与されるポイントが通常より2倍になります。
                

                ※他のサービスとの併用不可', 'price' => '-'),
                array('salon_id' => 298, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '朝割 キャンペーン', 'service_content' => '午後から予定がある方に朗報!!
                10時～12時の午前中はご利用料金の30%OFFでご利用いただけます。
                

                ※他のサービスとの併用不可', 'price' => '-'),
                array('salon_id' => 298, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '学割 半額キャンペーン', 'service_content' => '学生の方にオススメ割引!!
                授業後の15時～18時に学生服または学生証をご提示いただくと半額にてご利用いただけます。

                ※他のサービスとの併用不可', 'price' => '-'),
                array('salon_id' => 301, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'レディース　ＤＡＹ', 'service_content' => '毎週月曜日 （ＮＯＲＭＡＬマシン以外）半額', 'price' => '-'),
                array('salon_id' => 301, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'ＴＵＢＥＳ　ＤＡＹ', 'service_content' => '毎月１０日､２５日 ￥５００OFFチケット プレゼント
                ※次回よりご利用いただけます', 'price' => '-'),
                array('salon_id' => 302, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '10日焼き放題', 'service_content' => '10日焼き放題6700円', 'price' => '6700'),
                array('salon_id' => 303, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '10日焼き放題', 'service_content' => '10日焼き放題7400円', 'price' => '7400'),
                array('salon_id' => 306, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'ノワールコース', 'service_content' => '【ノワールコース】とは通う度に料金がプライスダウンするコースになります。

                ノワールコース通常料金にプラス500円追加でお得なコース料金に変わります。
                さらに300円するジェルが100円！コースも2タイプありお客様にあったスタイルで通うことが出来ます。

                【コース①　40日間コース】
                有効期限内であれば回数制限無しで通うことが可能さらに特典として5回通われたお客様は　コースプレゼント
                【コース②　60日間6回コース】
                長めの有効期限の間に6回通うことが可能
                例）コース無しの場合30分（2500円）＋ジェル300円＝毎回計2800円
                例）コースありの場合30分（2500円）＋コース500円
                　　　　①回目は計3000円　
                　　　　②回目は30分2500円
                　　　　③回目30分2000円
                　　　　④回目30分1500円', 'price' => '-'),
                array('salon_id' => 308, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '通常コース（5回券）一般', 'service_content' => '下記6機種を5回利用できます。
                毎回ジェル類は必須購入となります。VIPルーム300円で利用できます。
                グラミー30分・ストリップ25分、マックスター25分、その他は30分ご利用できます。
                各マシンの延長追加料金で10分づつ延長出来ます。', 'price' => '10000'),
                array('salon_id' => 308, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '通常コース（5回券）学生', 'service_content' => '下記6機種を5回利用できます。
                毎回ジェル類は必須購入となります。VIPルーム300円で利用できます。
                グラミー30分・ストリップ25分、マックスター25分、その他は30分ご利用できます。
                各マシンの延長追加料金で10分づつ延長出来ます。', 'price' => '8500'),
                array('salon_id' => 308, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '通常コース（10回券）一般', 'service_content' => '下記6機種を10回利用できます。
                毎回ジェル類は必須購入となります。VIPルーム300円で利用できます。
                グラミー30分・ストリップ25分、マックスター25分、その他は30分ご利用できます。
                1回あたりの利用時間のご延長は出来ません。', 'price' => '19000'),
                array('salon_id' => 308, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '通常コース（10回券）学生', 'service_content' => '下記6機種を10回利用できます。
                毎回ジェル類は必須購入となります。VIPルーム300円で利用できます。
                グラミー30分・ストリップ25分、マックスター25分、その他は30分ご利用できます。
                1回あたりの利用時間のご延長は出来ません。', 'price' => '16000'),
                array('salon_id' => 308, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'スタンプカードサービス', 'service_content' => 'マシン利用料1,000円につき1個（コースの場合1来店につき1個）スタンプを押します。20個ごとに素敵なサービス特典をご用意しております。（本人のみ使用可・予告なくサービスを終了する場合がございますので、ご了承ください。会員証をお忘れになった場合でも後日スタンプは押せません。）スタンプカードの有効期限は最終ご来店日から一年間とさせていただきます。一年間ご来店されなかった場合はそれまで貯まったポイントは全て失効されますのでご了承ください。', 'price' => '-'),
                array('salon_id' => 308, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '友人ご紹介サービス', 'service_content' => '新規来店の方をご紹介頂き、一緒に利用されるとジェル・激焼けジェルをいずれか1個サービスいたします。
                （会員証お忘れや、コース、無料券や他サービス券使用時は除く）', 'price' => '-'),
                array('salon_id' => 308, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '1,500円DAY', 'service_content' => '毎月1月・15日の2日間は、20〜30分1500円にてご利用できます！
                ※一部対象外のマシンもあります。
                尚、初回の方は、初回料金が適用されますので対象外です。', 'price' => '1500'),
                array('salon_id' => 308, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'お誕生月サービス', 'service_content' => 'お誕生日サービスはメール会員限定のサービスとなっておりますので、メール会員登録されていないお客様は是非ご登録下さい。前月の20日までにご登録頂ければ翌月の誕生日月から配信されます。', 'price' => '-'),
                array('salon_id' => 312, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '5回コース', 'service_content' => '5回コース        
                30分×5回        13,000円                 ※オイル代金を含む。
                High Powerマシン（マスターサン360・テラブルー・MIX-T）の利用を除く。', 'price' => '13000'),
                array('salon_id' => 314, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '日焼け促進ローションプレゼント', 'service_content' => 'http://www.tateba.com/campaign.html
                より印刷必要', 'price' => '-'),
                array('salon_id' => 316, 'otoku_type' => 'サービス', 'subject_person' => '女性', 'service_name' => 'レディースディ', 'service_content' => '毎週月曜日はレディースディ！女性の方限定でALLマシン\1,155！', 'price' => '-'),
                array('salon_id' => 316, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '激安ディ', 'service_content' => '毎週火曜日は激安ディ！男女共にALLマシン\1,155！', 'price' => '-'),
                array('salon_id' => 316, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '得クーポン', 'service_content' => '初回の方限定ALLマシン\1,050
                強力タイプミックスティー、LP3は20分、その他のマシンは30分間ご利用可能です。
                ※身分証明をご提示頂きます。', 'price' => '1050'),
                array('salon_id' => 316, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '体験チケット', 'service_content' => '20分体験チケット（一部マシーン除く）', 'price' => '1000'),
                array('salon_id' => 316, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '友人紹介割', 'service_content' => '新規のお友達をご紹介で50%オフ', 'price' => '-'),
                array('salon_id' => 316, 'otoku_type' => 'クーポン', 'subject_person' => '会員', 'service_name' => 'ゴールド会員割', 'service_content' => '毎月5のつく日はその場で50%オフ', 'price' => '-'),
                array('salon_id' => 316, 'otoku_type' => 'クーポン', 'subject_person' => '誕生日の人', 'service_name' => 'バースデイ割', 'service_content' => 'お誕生に！（1回限り）', 'price' => '-'),
                array('salon_id' => 316, 'otoku_type' => 'クーポン', 'subject_person' => '学生', 'service_name' => '学割', 'service_content' => '学生証提示で、学生特典あり', 'price' => '-'),
                array('salon_id' => 316, 'otoku_type' => 'クーポン', 'subject_person' => '会員', 'service_name' => '朝割', 'service_content' => '期間限定！10：00～13：00、10分延長無料', 'price' => '-'),
                array('salon_id' => 316, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '日替わりキャンペーン
                月・木曜日', 'service_content' => '30分以上ご利用で1000円オフチケットプレゼント', 'price' => '-'),
                array('salon_id' => 316, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '日替わりキャンペーン
                火・水曜日', 'service_content' => '40分以上ご利用で50%オフチケットプレゼント', 'price' => '-'),
                array('salon_id' => 316, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'お得な回数券', 'service_content' => 'お得な回数券を多数をご用意しています。詳しくはホームページをご覧下さい。', 'price' => '-'),
                array('salon_id' => 321, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'お得ポイントカード', 'service_content' => '登録時発行するポイントカード

                ポイントバックシステム

                ご利用料金の5％をポイントバック

                100ポイント単位でのご利用が出来ます。

                （登録料、ポイントチャージ料金にはポイントバックは出来ません）

                ポイントチャージシステム

                5000円で7000ポイント（7000円分ポイントチャージ）

                        10000円で15000ポイント（15000円分ポイントチャージ）

                ポイントは現金同様にお使いいただけます。
                （ポイントでのポイントチャージは出来ません）', 'price' => '-'),
                array('salon_id' => 323, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '1500円体験クーポン', 'service_content' => 'ご来店が初めてのお客様がご利用できます。', 'price' => '1500'),
                array('salon_id' => 323, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '3回セットコース
                （ジャマイカセット）', 'service_content' => '3回分が9000円でご利用可能。
                （3000円程度お得）
                マキシ40分。ベガ25分。ＬＰ２25分。', 'price' => '9000'),
                array('salon_id' => 323, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '3回セットコース
                （バリセット）', 'service_content' => '3回分が7000円でご利用可能。
                （3000円程度お得）
                マキシ30分。ベガ20分。ＬＰ２20分。', 'price' => '7000'),
                array('salon_id' => 323, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '2名様割引', 'service_content' => '2名様でご来店のお客様にはお会計時、それぞれ200円割引させていただきます。', 'price' => '-'),
                array('salon_id' => 325, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '超格安なチケット（回数券）', 'service_content' => '', 'price' => '-'),
                array('salon_id' => 326, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'サービスデー', 'service_content' => '毎週・月曜日・水曜日・金曜日は山形本店のサービスデーです。通常30分3,240円が1,080円OFFの2,160円になるサービス券を発行。', 'price' => '-'),
                array('salon_id' => 326, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'メルマガ登録', 'service_content' => 'メルマガ登録で毎月半額クーポン配信中', 'price' => '-'),
                array('salon_id' => 326, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回限定15分お試しプラン！', 'service_content' => '日焼け１５分お試しプランが1,620円でご利用できます。（通常2,160円）
                ※初めてのご来店で新規登録された方のみご利用できるクーポンです。
                ※日焼けサロンロコズパラダイス山形本店でのみ有効。', 'price' => '1620'),
                array('salon_id' => 326, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '冬季価格', 'service_content' => '冬季価格では毎日がサービスデー！通常30分3,240円が毎日1,080円OFFの2,160円でご利用できます。', 'price' => '-'),
                array('salon_id' => 327, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '冬季価格', 'service_content' => '冬季価格では毎日がサービスデー！通常30分3,240円が毎日1,080円OFFの2,160円でご利用できます。', 'price' => '-'),
                array('salon_id' => 327, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'メルマガ登録', 'service_content' => 'メルマガ登録で毎月半額クーポン配信中', 'price' => '-'),
                array('salon_id' => 328, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => 'ちょっとお得な回数券（５回分）', 'service_content' => '回数券5回分
                ロータス20分：8500円
                ロータス30分：12000円
                スターフライト30分：7500円
                フェイス10分：4000円', 'price' => '-'),
                array('salon_id' => 329, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード', 'service_content' => '10000円のカード購入で13000円分ご利用できます。1回あたり666円。
                ※プリペイドカードの有効期限は最後のご来店より3ヶ月間です。予めご了承下さい。
                ※購入店舗のみで使用可能となっております。', 'price' => '10000'),
                array('salon_id' => 329, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'フェイス10分無料サービス', 'service_content' => 'オールタイムフェイス10分無料サービス', 'price' => '-'),
                array('salon_id' => 329, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '朝得10～12時毎日割引料金', 'price' => '-'),
                array('salon_id' => 329, 'otoku_type' => 'お得', 'subject_person' => '-', 'service_name' => '夜得', 'service_content' => '夜得22～0時
                毎日割引料金', 'price' => '-'),
                array('salon_id' => 330, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード', 'service_content' => '11000円のカード購入で15000円分ご利用できます。1回あたり666円。
                ※プリペイドカードの有効期限は最後のご来店より3ヶ月間です。予めご了承下さい。
                ※購入店舗のみで使用可能となっております。', 'price' => '11000'),
                array('salon_id' => 330, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'ジェルサービス', 'service_content' => '毎日13～20時、ジェルサービス', 'price' => '-'),
                array('salon_id' => 330, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '朝得10～13時毎日割引料金、フェイス15分サービス', 'price' => '-'),
                array('salon_id' => 330, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '夜得20～0時毎日割引料金、フェイス15分サービス', 'price' => '-'),
                array('salon_id' => 331, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード', 'service_content' => '11000円のカード購入で15000円分ご利用できます。1回あたり666円。
                ※プリペイドカードの有効期限は最後のご来店より3ヶ月間です。予めご了承下さい。
                ※購入店舗のみで使用可能となっております。', 'price' => '11000'),
                array('salon_id' => 331, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '朝得10～12時、フェイス10分サービス', 'price' => '-'),
                array('salon_id' => 331, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '夜得21～0時、フェイス10分サービス', 'price' => '-'),
                array('salon_id' => 332, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード', 'service_content' => '11000円のカード購入で15000円分ご利用できます。1回あたり666円。
                ※プリペイドカードの有効期限は最後のご来店より3ヶ月間です。予めご了承下さい。
                ※購入店舗のみで使用可能となっております。', 'price' => '11000'),
                array('salon_id' => 332, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '朝得10～12時、フェイス15分サービス', 'price' => '-'),
                array('salon_id' => 332, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '夜得21～0時、フェイス15分サービス', 'price' => '-'),
                array('salon_id' => 333, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード', 'service_content' => '11000円のカード購入で15000円分ご利用できます。1回あたり666円。
                ※プリペイドカードの有効期限は最後のご来店より3ヶ月間です。予めご了承下さい。
                ※購入店舗のみで使用可能となっております。', 'price' => '11000'),
                array('salon_id' => 333, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '朝得10～13時、フェイス15分サービス', 'price' => '-'),
                array('salon_id' => 333, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '夜得', 'service_content' => '夜得21～0時、フェイス15分サービス', 'price' => '-'),
                array('salon_id' => 334, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'プリペイドカード', 'service_content' => '10000円のカード購入で13000円分ご利用できます。1回あたり666円。
                ※プリペイドカードの有効期限は最後のご来店より3ヶ月間です。予めご了承下さい。
                ※購入店舗のみで使用可能となっております。', 'price' => '10000'),
                array('salon_id' => 334, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '朝得', 'service_content' => '平日限定、割引料金', 'price' => '-'),
                array('salon_id' => 337, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '', 'service_content' => '回数券        6枚
                9,200円（税込）', 'price' => '9200'),
                array('salon_id' => 337, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '', 'service_content' => '回数券　　10枚 
                12,200円（税込）', 'price' => '12200'),
                array('salon_id' => 338, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '', 'service_content' => '回数券        6枚
                9,200円（税込）', 'price' => '9200'),
                array('salon_id' => 338, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '', 'service_content' => '回数券　　10枚 
                12,200円（税込）', 'price' => '12200'),
                array('salon_id' => 339, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'カリブプレミアムチケット', 'service_content' => '新規のお客様500円オフ', 'price' => '-'),
                array('salon_id' => 339, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '1ヶ月焼き放題フリーパス　ブラック', 'service_content' => 'ハロゲン型20分・タテ型30分
                ベッド型30分・フェイス10分', 'price' => '15000'),
                array('salon_id' => 339, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '1ヶ月焼き放題フリーパス　ゴールド', 'service_content' => 'タテ型30分・フェイス10分', 'price' => '10500'),
                array('salon_id' => 339, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '1ヶ月焼き放題フリーパス　シルバー', 'service_content' => 'タテ型20分
                フェイス10分', 'price' => '9500'),
                array('salon_id' => 345, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'サービスデー', 'service_content' => '毎週火・木・土はお得な1000円割引券発行します', 'price' => '-'),
                array('salon_id' => 352, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => 'サービスデー', 'service_content' => 'サービスデーには、1000円OFFのサービスチケットを発行します。学生の方には半額の学割サービスも！
                サービスデー、毎週月曜日、水曜日、金曜日', 'price' => '-'),
                array('salon_id' => 356, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'タイムサービス', 'service_content' => 'OPEN〜14時　10分サービス', 'price' => '-'),
                array('salon_id' => 356, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'お客様感謝day', 'service_content' => '毎週月曜日　15分サービス', 'price' => '-'),
                array('salon_id' => 356, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'トロプル10', 'service_content' => '3名ご予約で10分サービス', 'price' => '-'),
                array('salon_id' => 356, 'otoku_type' => 'サービス', 'subject_person' => '女性', 'service_name' => '女性限定割', 'service_content' => '4～10月、女性限定割あり', 'price' => '-'),
                array('salon_id' => 358, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '日焼けサロンＴＯＭ お得なクーポン券', 'service_content' => '日焼けサロンＴＯＭ お得なクーポン券
                初回登録料（300円）＋タンニング1回分（1,400円）＋ジェル1回分（300円)

                2,000円⇒1,000円

                ・当店のご利用が初めての方に限らせていただきます。
                ・ご利用時に当クーポン券をご提示ください。
                ・ お電話にてご予約下さい。', 'price' => '1000'),
                array('salon_id' => 358, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '6回分チケット', 'service_content' => '', 'price' => '8000'),
                array('salon_id' => 358, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => '12回分チケット', 'service_content' => '', 'price' => '15000'),
                array('salon_id' => 362, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '4名様以上割引', 'service_content' => '基本料金～10％ｏｆｆ', 'price' => '-'),
                array('salon_id' => 362, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '全身焼きセット', 'service_content' => '全身焼きセットでフェイス通常料金より半額400円～', 'price' => '-'),
                array('salon_id' => 362, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '友人紹介割引', 'service_content' => '通常基本料金～20％ｏｆｆ 最大30％off', 'price' => '-'),
                array('salon_id' => 371, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'サービスタイム', 'service_content' => '男性通常12~14時
                日曜日オールタイム
                女性毎日オールタイム
                全マシーン500円オフ', 'price' => '-'),
                array('salon_id' => 372, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => 'ノーマルマシーン回数券', 'service_content' => '6回券
                一般
                9,000円
                学生5,000円
                10回券
                一般12,000円
                学生8,000円
                12回券13,500円
                14回券14,500円
                20回券20,000円
                ※1回30分', 'price' => '-'),
                array('salon_id' => 372, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => 'ハード回数券', 'service_content' => '6回券一般10000円
                ※1回20分', 'price' => '-'),
                array('salon_id' => 372, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'フリーパス1ヶ月', 'service_content' => '30分
                一般14000円
                学生12000円
                60分（2日おき）
                一般16000円
                学生14000円', 'price' => '-'),
                array('salon_id' => 381, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '学割', 'service_content' => 'オールタイム、オールマシン「２割引き」（ご利用の初回には、学生証のご提示をお願いします）', 'price' => '-'),
                array('salon_id' => 381, 'otoku_type' => 'クーポン', 'subject_person' => '全員', 'service_name' => '雨の日割引', 'service_content' => 'ポイント、スタンプ２倍', 'price' => '-'),
                array('salon_id' => 381, 'otoku_type' => 'お得', 'subject_person' => '-', 'service_name' => 'メルマガ割引', 'service_content' => 'メルマガに登録すると、HotDogのお得な情報や、メルマガ会員様限定のクーポンをゲット出来ます！', 'price' => '-'),
                array('salon_id' => 382, 'otoku_type' => 'サービス', 'subject_person' => '新規', 'service_name' => 'ＳＮＳキャンペーン', 'service_content' => '新規のお客様・1,000円でご利用頂けます。(マシン指定あり)

                FINCLUBの写真をSNSにUPして宣伝していただくと初回料金割引いたします。受付時にスタッフまで告知くださいませ。', 'price' => '1000'),
                array('salon_id' => 387, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => 'ポイントカード', 'service_content' => 'ご来店１回で１ポイント
                10ポイントごとに
                500円割引券プレゼント', 'price' => '-'),
                array('salon_id' => 387, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '友達紹介割引', 'service_content' => '新規のお友達を
                紹介してくれた方に
                500円割引券プレゼント', 'price' => '-'),
                array('salon_id' => 387, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '4000円分割引券', 'service_content' => '(有効期限２ヶ月間)

                基本料金より毎回500円OFF
                ７回目は1000円ＯＦＦ！', 'price' => '-'),
                array('salon_id' => 390, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => 'お得なクーポン！', 'service_content' => '￥500-OFF! 

                ホームページ限定500円割り引きクーポン券
                点線内は必ず見えるようにご持参ください。

                【ホームページ限定500円割り引きクーポン券 】 
                ※ プリントアウトしてご持参するか携帯の画面でスタッフにお見せ下さい
                （他の割引サービスとは併用できません。）
                ※ 新規の方に限り有効です。尚、新規登録料として￥500いただきます。', 'price' => '-'),
                array('salon_id' => 391, 'otoku_type' => '回数券', 'subject_person' => '全員', 'service_name' => 'お得な回数券6回分', 'service_content' => 'お得な回数券（6回分）もあります！

                15，850円でスーパー40分、ターボ30分、ウルトラ20分', 'price' => '-'),
                array('salon_id' => 391, 'otoku_type' => 'サービス', 'subject_person' => '全員', 'service_name' => '会員割引', 'service_content' => '石坂スポーツクラブのトレーニング会員の方は、お得な特別料金でタンニングできます。
                日焼け会員の方には、日焼けメンバーズカード（スタンプカード）が発行されます。', 'price' => '-'),
                array('salon_id' => 392, 'otoku_type' => 'ポイントカード', 'subject_person' => '全員', 'service_name' => 'ポイントカード
                衝撃のポイント還元率！', 'service_content' => '・ご利用1,000円ごとに1ポイント捺印いたします。
                ・来店時にフロントにカードをご提示下さい。
                ・6ポイントたまると、次回ご利用時に1,000円OFFとしてご利用いただけます。
                ・換金、返金は一切致しません。
                ・盗難･紛失等の復元発行は一切致しません。', 'price' => '-'),
                array('salon_id' => 397, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'チケット（スーパーベッド）', 'service_content' => 'スーパーベッド25分×5回分', 'price' => '11000'),
                array('salon_id' => 397, 'otoku_type' => 'プリペイド', 'subject_person' => '全員', 'service_name' => 'チケット（ノーマルベッド)', 'service_content' => 'ノーマルベッド15分×10回分', 'price' => '6800'),
                array('salon_id' => 397, 'otoku_type' => 'クーポン', 'subject_person' => '新規', 'service_name' => '初回20%オフ', 'service_content' => 'ＨＰにてクーポンを印刷', 'price' => '-'),
        );
        DB::table('prepaids')->insert($prepaids);
    }
}
