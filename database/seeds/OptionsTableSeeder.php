<?php

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->delete();
        $options = array(
            array('salon_id' => 5, 'options' => '保湿ジェル', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 11, 'options' => 'アフターローション', 'explanation' => '-', 'option_price' => '100'),
            array('salon_id' => 11, 'options' => '追加タンニングジェル', 'explanation' => '-', 'option_price' => '100'),
            array('salon_id' => 15, 'options' => '★ベットタイプ プラス500円でサンシャワー15分がセットになります。', 'explanation' => '-', 'option_price' => '-'),
            array('salon_id' => 15, 'options' => '★全身タイプとセットでご利用の場合料金より500円引き。', 'explanation' => '-', 'option_price' => '-'),
            array('salon_id' => 16, 'options' => 'タンニングジェル', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 18, 'options' => '専用タンニングジェル', 'explanation' => '-', 'option_price' => '270'),
            array('salon_id' => 18, 'options' => '入会金', 'explanation' => '-', 'option_price' => '1000'),
            array('salon_id' => 32, 'options' => '登録料', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 33, 'options' => '登録料', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 34, 'options' => '登録料', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 40, 'options' => 'ホロホロ ジェル', 'explanation' => 'チロシン　日焼け促進
            通常市販されている「サンオイル」には、日焼け止め成分などが含まれているものが多くタンニングマシンでの使用は好ましくありません。
            リボフラビン　ビタミン補給
            タンニングすると同時にビタミンをお肌に補給します。発汗や疲労などで疲れたお肌に栄養を与えます。
            コラーゲン　　肌に潤いをあたえる
            日焼け後の乾燥やかさつきを抑えみずみずしいお肌を保ち、日焼けを持続させます。', 'option_price' => '200'),
            array('salon_id' => 40, 'options' => 'ホロホロゴールドジェル', 'explanation' => 'チロシン　日焼け促進
            通常市販されている「サンオイル」には、日焼け止め成分などが含まれているものが多くタンニングマシンでの使用は好ましくありません。
            リボフラビン　ビタミン補給
            タンニングすると同時にビタミンをお肌に補給します。発汗や疲労などで疲れたお肌に栄養を与えます。
            コラーゲン　　肌に潤いをあたえる
            日焼け後の乾燥やかさつきを抑えみずみずしいお肌を保ち、日焼けを持続させます。
            ＜ホロホロジェルゴールドボトル＞は1回分のホロホロジェル（20ml）より、さらにチロシン（日焼け促進剤）が増量され、早く・美しい日焼けが体験できます。', 'option_price' => '1800'),
            array('salon_id' => 40, 'options' => 'ホロホロアフターローション', 'explanation' => '美褐色肌キープ
            日焼け後の乾燥した肌に、強い保湿力を持つヒアルロン酸やコラーゲンが角質層に素早くみずみずしさと弾力を与え逃がしません。3種混合植物エキス（ユキノシタ・ボタン・カッコン）この植物の最大なる恵みの働きでお肌のキメを整え、ハリやツヤを与え、また日焼け後の肌の火照りを鎮めます。', 'option_price' => '1500'),
            array('salon_id' => 40, 'options' => '新規会員登録', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 40, 'options' => 'カード再発行', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 44, 'options' => '酸素カプセル　OxyHealth Respiro270
            日焼けとセットで60分', 'explanation' => '健康な体作りはここから

            健康増進・アンチエイジングは元より、基礎体温上昇・ダイエット・美肌美容・疲労回復・腰痛・肩こり・怪我や骨折などなど、様々な分野で効果があります。また、下記追加オプションをご一緒に使用になりますとさらに効果的です。是非、ご利用ください。', 'option_price' => '2000'),
            array('salon_id' => 44, 'options' => '酸素カプセル　OxyHealth Respiro270
            酸素カプセルのみ60分', 'explanation' => '健康な体作りはここから

            健康増進・アンチエイジングは元より、基礎体温上昇・ダイエット・美肌美容・疲労回復・腰痛・肩こり・怪我や骨折などなど、様々な分野で効果があります。また、下記追加オプションをご一緒に使用になりますとさらに効果的です。是非、ご利用ください。', 'option_price' => '3000'),
            array('salon_id' => 44, 'options' => '炭酸フェイスマスク（ メディアプローラー Co2マスク ）', 'explanation' => 'バラプラセンタエキス・アセチルヒアルロン酸Na・アルテミアエキス・アマモエキス。４つの美容成分で集中アプローチ！独自技術によって生み出されたマスクと美容液の融合。たるみ、乾燥、くすみ、小じわなどなど…..。エイジングにより肌トラブルに着目し深部から潤いと艶をもたらします。できたての炭酸をお肌に乗せるフレッシュな炭酸シートマスク。', 'option_price' => '2500'),
            array('salon_id' => 44, 'options' => 'フットマスク', 'explanation' => '楽々フットエステ！簡単便利な履くだけ、湿美容液配合のフットマスクです。
            尿素、アルガンオイル、7種類の天然成分配合で足先からかかとまでしっとりやわらか。 優美な花果実の香りに心も足もうっとり！', 'option_price' => '500'),
            array('salon_id' => 44, 'options' => 'ハンドマスク', 'explanation' => '簡単便利なはめるだけのタイプです！保湿美容液配合のハンドパック！集中ケアでしっとりやわらかな手元へ。
            アルブチン、アルガンオイル、7種類の天然成分を配合しています。優美な花果実の香り。', 'option_price' => '500'),
            array('salon_id' => 47, 'options' => '会員登録費（1年更新）', 'explanation' => '-', 'option_price' => '1080'),
            array('salon_id' => 50, 'options' => '新規登録料', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 50, 'options' => '会員証再発行', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 50, 'options' => 'ジェル', 'explanation' => '-', 'option_price' => '100'),
            array('salon_id' => 50, 'options' => 'ニップレス', 'explanation' => '-', 'option_price' => '100'),
            array('salon_id' => 52, 'options' => 'オイル', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 52, 'options' => 'ジェル', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 53, 'options' => 'ＲＢＣオリジナルアフタークリーム', 'explanation' => '日焼け後の乾燥したお肌に潤いを与え、しっかり保湿。', 'option_price' => '3240'),
            array('salon_id' => 54, 'options' => 'タンニングジェル', 'explanation' => '-', 'option_price' => '100'),
            array('salon_id' => 90, 'options' => 'メンバーズカード再発行', 'explanation' => '-', 'option_price' => '216'),
            array('salon_id' => 90, 'options' => 'タンニングジェル', 'explanation' => '-', 'option_price' => '324'),
            array('salon_id' => 99, 'options' => '追加ジェル', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 99, 'options' => 'スペシャルジェル', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 99, 'options' => '初回登録料', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 99, 'options' => '再発行', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 100, 'options' => 'AFTER CARE　ALOE', 'explanation' => 'タンニング後のボディケアは必須！しっかり保湿して小麦肌をキープしましょう。', 'option_price' => '2000'),
            array('salon_id' => 100, 'options' => 'AFTER CARE　LOCK', 'explanation' => 'タンニング後のボディケアは必須！しっかり保湿して小麦肌をキープしましょう。', 'option_price' => '2000'),
            array('salon_id' => 100, 'options' => 'カリフォルニアタン「REGE GEL」', 'explanation' => 'より美しく濃い日焼けを目指したい！または既に日焼けした肌を更に濃くしたい方にオススメです！お肌に潤いを与えながら、更にディープでキレイなブロンズ肌を実現いたします。', 'option_price' => '2700'),
            array('salon_id' => 101, 'options' => 'AFTER CARE　ALOE', 'explanation' => 'タンニング後のボディケアは必須！しっかり保湿して小麦肌をキープしましょう。', 'option_price' => '2000'),
            array('salon_id' => 101, 'options' => 'AFTER CARE　LOCK', 'explanation' => 'タンニング後のボディケアは必須！しっかり保湿して小麦肌をキープしましょう。', 'option_price' => '2000'),
            array('salon_id' => 101, 'options' => 'カリフォルニアタン「REGE GEL」', 'explanation' => 'より美しく濃い日焼けを目指したい！または既に日焼けした肌を更に濃くしたい方にオススメです！お肌に潤いを与えながら、更にディープでキレイなブロンズ肌を実現いたします。', 'option_price' => '2700'),
            array('salon_id' => 107, 'options' => 'タンニングジェル1回', 'explanation' => '■日焼け促進効果 
            通常市販されているサンオイルには、日焼け止め成分などが含まれているものが多く、タンニングマシンでの使用には好ましくありません。

            ■ビタミン補給効果 
            タンニングすると同時にビタミンをお肌に補給します。発汗や疲労などで疲れたお肌に栄養を与えます。

            ■肌に潤いを与える 
            日焼け後の乾燥や、かさつきを抑えみずみずしいお肌を保ち、日焼けを持続させます。', 'option_price' => '150'),
            array('salon_id' => 107, 'options' => 'タンニングジェルボトル', 'explanation' => '■日焼け促進効果 
            通常市販されているサンオイルには、日焼け止め成分などが含まれているものが多く、タンニングマシンでの使用には好ましくありません。

            ■ビタミン補給効果 
            タンニングすると同時にビタミンをお肌に補給します。発汗や疲労などで疲れたお肌に栄養を与えます。

            ■肌に潤いを与える 
            日焼け後の乾燥や、かさつきを抑えみずみずしいお肌を保ち、日焼けを持続させます。', 'option_price' => '1500'),
            array('salon_id' => 109, 'options' => 'オイル', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 109, 'options' => 'ジェル', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 152, 'options' => 'ホロホロジェル
            ＜ボトルキープ＞　13回分（7,020円分）
            通常', 'explanation' => '日焼け促進剤チロシンを配合(ボトルはチロシンを増量）。シャワーですぐ流れるジェルタイプです。とにかく黒く焼きたい方にオススメの日焼け用ジェルです。', 'option_price' => '4860'),
            array('salon_id' => 152, 'options' => 'ホロホロジェル
            ＜ボトルキープ＞　13回分（7,020円分）
            ゴールドメンバー', 'explanation' => '-', 'option_price' => '4320'),
            array('salon_id' => 152, 'options' => 'ホロホロジェル
            ＜ボトルキープ＞　13回分（7,020円分）
            スーパーゴールド', 'explanation' => '-', 'option_price' => '3780'),
            array('salon_id' => 152, 'options' => 'ホロホロジェル
            ＜1回分＞', 'explanation' => '日焼け促進剤チロシンを配合(ボトルはチロシンを増量）。シャワーですぐ流れるジェルタイプです。とにかく黒く焼きたい方にオススメの日焼け用ジェルです。', 'option_price' => '540'),
            array('salon_id' => 152, 'options' => 'スクワランオイル
            ＜ボトルキープ＞　13回分（7,020円分）
            通常', 'explanation' => '深海ザメのエキス100%で作られており、綺麗に焼けて肌の保護になります。乾燥肌の方や肌が弱い方にオススメの高級オイルです。', 'option_price' => '4860'),
            array('salon_id' => 152, 'options' => 'スクワランオイル
            ＜ボトルキープ＞　13回分（7,020円分）
            ゴールドメンバー', 'explanation' => '深海ザメのエキス100%で作られており、綺麗に焼けて肌の保護になります。乾燥肌の方や肌が弱い方にオススメの高級オイルです。', 'option_price' => '4320'),
            array('salon_id' => 152, 'options' => 'スクワランオイル
            ＜ボトルキープ＞　13回分（7,020円分）
            スーパーゴールド', 'explanation' => '深海ザメのエキス100%で作られており、綺麗に焼けて肌の保護になります。乾燥肌の方や肌が弱い方にオススメの高級オイルです。', 'option_price' => '3780'),
            array('salon_id' => 152, 'options' => 'スクワランオイル
            ＜1回分＞', 'explanation' => '深海ザメのエキス100%で作られており、綺麗に焼けて肌の保護になります。乾燥肌の方や肌が弱い方にオススメの高級オイルです。', 'option_price' => '540'),
            array('salon_id' => 152, 'options' => 'アフターローション
            ＜ボトルキープ＞', 'explanation' => '日焼け後肌の鎮静と保湿が一本でできる優れたアフターローションです。', 'option_price' => '2160'),
            array('salon_id' => 172, 'options' => 'シャワー', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 172, 'options' => 'ジェル', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 179, 'options' => '入会金', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 193, 'options' => '会員登録', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 193, 'options' => '再発行手数料', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 193, 'options' => 'シャワーのみ', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 229, 'options' => '会員登録', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 229, 'options' => '再発行手数料', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 229, 'options' => 'カード忘れ', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 266, 'options' => '会員登録', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 266, 'options' => '再発行手数料', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 266, 'options' => 'カード忘れ', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 269, 'options' => 'バスタオル', 'explanation' => '-', 'option_price' => '100'),
            array('salon_id' => 272, 'options' => '初回登録料', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 272, 'options' => 'ジェル', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 279, 'options' => 'シャワー', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 279, 'options' => 'ジェル', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 282, 'options' => 'ホロホロアフターローション', 'explanation' => '日焼けはシャワーや洗顔などで徐々に色落ちしてしまいますが、それを防ぐには『ホロホロローション』が効果的です。

            また、日焼け後の肌のほてりや皮のめくれなどにも使用して頂くと効き目バツグンで、ワイハスタッフも愛用しています。', 'option_price' => '1000'),
            array('salon_id' => 282, 'options' => 'オイル、ジェル1回分（通常）', 'explanation' => '無臭のため、サンオイルのように独特な臭いを残すこともありません。使用後はシャワーで簡単に洗い流せます。', 'option_price' => '380'),
            array('salon_id' => 282, 'options' => 'オイル、ジェル1回分（フェイス用）', 'explanation' => '無臭のため、サンオイルのように独特な臭いを残すこともありません。使用後はシャワーで簡単に洗い流せます。', 'option_price' => '130'),
            array('salon_id' => 282, 'options' => 'オイル、ジェルボトルキープ（一般）', 'explanation' => '無臭のため、サンオイルのように独特な臭いを残すこともありません。使用後はシャワーで簡単に洗い流せます。', 'option_price' => '2800'),
            array('salon_id' => 282, 'options' => 'オイル、ジェルボトルキープ（ＧＭ）', 'explanation' => '無臭のため、サンオイルのように独特な臭いを残すこともありません。使用後はシャワーで簡単に洗い流せます。', 'option_price' => '2300'),
            array('salon_id' => 292, 'options' => 'ジェル代', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 292, 'options' => '男性入会金', 'explanation' => '-', 'option_price' => '1500'),
            array('salon_id' => 292, 'options' => '女性入会金', 'explanation' => '-', 'option_price' => '1000'),
            array('salon_id' => 296, 'options' => '日焼け用ジェル・ソフト
            使いきりパック（15g）', 'explanation' => 'ムラなく美しく焼ける自然な小麦色

            べとつかずさっぱりとした使い心地のインドア専用のジェルタイプです。
            日焼け後の肌荒れを防ぎ、自然な小麦色のお肌に仕上げます。', 'option_price' => '520'),
            array('salon_id' => 296, 'options' => '日焼け用ジェル・ソフト
            ボトル（150g）', 'explanation' => 'ムラなく美しく焼ける自然な小麦色

            べとつかずさっぱりとした使い心地のインドア専用のジェルタイプです。
            日焼け後の肌荒れを防ぎ、自然な小麦色のお肌に仕上げます。', 'option_price' => '3100'),
            array('salon_id' => 296, 'options' => '日焼け用ジェル・ハード
            使いきりパック（15g）', 'explanation' => '日焼けの促進により重点をおいたインドア専用のジェルタイプです。
            日焼け後の肌荒れを防ぎ、こんがりキレイな小麦色のお肌に仕上げます。', 'option_price' => '620'),
            array('salon_id' => 296, 'options' => '日焼け用ジェル・ハード
            ボトル（150g）', 'explanation' => '日焼けの促進により重点をおいたインドア専用のジェルタイプです。
            日焼け後の肌荒れを防ぎ、こんがりキレイな小麦色のお肌に仕上げます。', 'option_price' => '3300'),
            array('salon_id' => 297, 'options' => '日焼け用ジェル・ソフト
            使いきりパック（15g）', 'explanation' => 'ムラなく美しく焼ける自然な小麦色

            べとつかずさっぱりとした使い心地のインドア専用のジェルタイプです。
            日焼け後の肌荒れを防ぎ、自然な小麦色のお肌に仕上げます。', 'option_price' => '520'),
            array('salon_id' => 297, 'options' => '日焼け用ジェル・ソフト
            ボトル（150g）', 'explanation' => 'ムラなく美しく焼ける自然な小麦色

            べとつかずさっぱりとした使い心地のインドア専用のジェルタイプです。
            日焼け後の肌荒れを防ぎ、自然な小麦色のお肌に仕上げます。', 'option_price' => '3100'),
            array('salon_id' => 297, 'options' => '日焼け用ジェル・ハード
            使いきりパック（15g）', 'explanation' => '日焼けの促進により重点をおいたインドア専用のジェルタイプです。
            日焼け後の肌荒れを防ぎ、こんがりキレイな小麦色のお肌に仕上げます。', 'option_price' => '620'),
            array('salon_id' => 297, 'options' => '日焼け用ジェル・ハード
            ボトル（150g）', 'explanation' => '日焼けの促進により重点をおいたインドア専用のジェルタイプです。
            日焼け後の肌荒れを防ぎ、こんがりキレイな小麦色のお肌に仕上げます。', 'option_price' => '3300'),
            array('salon_id' => 298, 'options' => '日焼け用ジェル・ソフト
            使いきりパック（15g）', 'explanation' => 'ムラなく美しく焼ける自然な小麦色

            べとつかずさっぱりとした使い心地のインドア専用のジェルタイプです。
            日焼け後の肌荒れを防ぎ、自然な小麦色のお肌に仕上げます。', 'option_price' => '520'),
            array('salon_id' => 298, 'options' => '日焼け用ジェル・ソフト
            ボトル（150g）', 'explanation' => 'ムラなく美しく焼ける自然な小麦色

            べとつかずさっぱりとした使い心地のインドア専用のジェルタイプです。
            日焼け後の肌荒れを防ぎ、自然な小麦色のお肌に仕上げます。', 'option_price' => '3100'),
            array('salon_id' => 298, 'options' => '日焼け用ジェル・ハード
            使いきりパック（15g）', 'explanation' => '日焼けの促進により重点をおいたインドア専用のジェルタイプです。
            日焼け後の肌荒れを防ぎ、こんがりキレイな小麦色のお肌に仕上げます。', 'option_price' => '620'),
            array('salon_id' => 298, 'options' => '日焼け用ジェル・ハード
            ボトル（150g）', 'explanation' => '日焼けの促進により重点をおいたインドア専用のジェルタイプです。
            日焼け後の肌荒れを防ぎ、こんがりキレイな小麦色のお肌に仕上げます。', 'option_price' => '3300'),
            array('salon_id' => 301, 'options' => 'マシン専用オイル
            １回分', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 301, 'options' => 'マシン専用オイル 　　（ジェルタイプ）', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 301, 'options' => 'マシン専用オイル 　　　(ボトルキープ)', 'explanation' => '-', 'option_price' => '5000'),
            array('salon_id' => 306, 'options' => 'ジェル', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 308, 'options' => '初回登録料', 'explanation' => '身分証明書や学生証が必要です！お忘れになるとご利用できません！バスタオル・フェイスタオル・シャワー無料貸し出し、各化粧品、整髪料、ドライヤー等店内設備を無料でご利用できます。', 'option_price' => '1000'),
            array('salon_id' => 308, 'options' => '会員証再発行手数料', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 308, 'options' => 'VIPルーム', 'explanation' => '完全個室更衣室です。お1人様500円で利用可能。混雑時や、他のお客様と一緒が嫌な方にもお勧めです。', 'option_price' => '500'),
            array('salon_id' => 308, 'options' => 'プラチナルーム', 'explanation' => '2名様までご利用できる完全個室更衣室です。男女のご利用はできません。VIPルームより広く、アメニティーも多数ご用意しております。広めのシャワールーム、ソファー、テレビ完備。　至高の空間でおくつろぎください。', 'option_price' => '1000'),
            array('salon_id' => 308, 'options' => 'スクワランオイル', 'explanation' => 'お肌の保護作用有り。初心者向け！！', 'option_price' => '600'),
            array('salon_id' => 308, 'options' => 'ホロホロジェル', 'explanation' => '日焼け促進及び、うるおい成分配合！！', 'option_price' => '600'),
            array('salon_id' => 308, 'options' => '激焼けジェル', 'explanation' => '発汗作用有りの日焼け超促進！！', 'option_price' => '700'),
            array('salon_id' => 308, 'options' => '激焼けジェルゴールド', 'explanation' => '最高傑作！日焼け超促進！コラーゲン＆ヒアルロン酸で保湿も優れた究極の一品！ワンランク上の美黒へ', 'option_price' => '1000'),
            array('salon_id' => 308, 'options' => '追加タオル', 'explanation' => '-', 'option_price' => '100'),
            array('salon_id' => 308, 'options' => 'ビーチタイムイマージョン', 'explanation' => '日焼け後のクリームです、アロエをふんだんに使い赤くなった肌の鎮静効果や美しい日焼けを定着させます！！', 'option_price' => '2100'),
            array('salon_id' => 308, 'options' => 'クールウォーター', 'explanation' => '爽快感抜群のスキンウォーター', 'option_price' => '1800'),
            array('salon_id' => 311, 'options' => '新規登録料', 'explanation' => '-', 'option_price' => '1000'),
            array('salon_id' => 311, 'options' => '個室ご利用時間10分延長につき', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 312, 'options' => 'オイル', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 312, 'options' => '登録料', 'explanation' => '-', 'option_price' => '1000'),
            array('salon_id' => 312, 'options' => 'タンニングジェル（ブラックアクセル）', 'explanation' => '-', 'option_price' => '360'),
            array('salon_id' => 312, 'options' => 'タンニングジェル（ブラックアクセル）', 'explanation' => '-', 'option_price' => '360'),
            array('salon_id' => 314, 'options' => 'タンニングジェル', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 314, 'options' => '日焼け促進ローション', 'explanation' => 'より速く日焼けし、ブロンズ色を長持ちさせます。
            日焼けによるお肌の乾燥を防ぎ、お肌をツルツルにします。当店では画像のボトルを25mlに小分けにし、300円で販売しております。', 'option_price' => '300'),
            array('salon_id' => 314, 'options' => 'タンニングジェル HotDogオリジナル 20ml', 'explanation' => '-', 'option_price' => '400'),
            array('salon_id' => 314, 'options' => 'フェイス用ジェル 10ml', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 316, 'options' => 'DEEP BRONZE GEL（ディープブロンズジェル）', 'explanation' => 'DEEP BRONZE GEL（ディープブロンズジェル）
            従来のオイルに入っていた、着色料を省いて、スクワランを配合し、内容量が10ｇ増量しました。日焼け効果・効率が更にアップし、同時にスキンケアができます。（ヒアルロン酸・コラーゲン配合）
            税込価格：2,100円
            日焼け促進
            通常市販されているサンオイルには日焼け止め成分などが含まれているものが多く、タンニングマシーンでの使用は好ましくありません。
            ビタミン補給
            タンニングと同時にビタミンをお肌に補給します。
            発汗や疲労などで疲れたお肌に栄養を与えます。
            肌に潤いを与える
            日焼け後の乾燥を抑え、つやのあるお肌を保ち日焼け効果を持続させます。
            オイルは1回分ではないので、残りはキープして頂くか、お持ち帰りして、海などでもご利用頂けます。', 'option_price' => '2100'),
            array('salon_id' => 316, 'options' => 'トータルイマージョン（大）', 'explanation' => '日焼け促進
            日焼けによる肌の老化も防ぎ、日焼けの色持ちも良くします。
            肌のほてりを抑えて皮ムケも防ぐ、非常に優れた保湿クリームです。美黒を目指す方は是非お試しください。
            日焼け後だけでなく、日常のボディケアにも最適です！！

            日焼け後のお肌は乾燥しがちです。乾燥すると皮がむけやすくなったり色が長持ちしません。
            必ず保湿クリームをお使いください。また、トータルイマージョンを冷蔵庫などで冷やしてお使いになると、クールダウンと保湿が同時にできます。', 'option_price' => '3150'),
            array('salon_id' => 316, 'options' => 'トータルイマージョン（中）', 'explanation' => '日焼け促進
            日焼けによる肌の老化も防ぎ、日焼けの色持ちも良くします。
            肌のほてりを抑えて皮ムケも防ぐ、非常に優れた保湿クリームです。美黒を目指す方は是非お試しください。
            日焼け後だけでなく、日常のボディケアにも最適です！！

            日焼け後のお肌は乾燥しがちです。乾燥すると皮がむけやすくなったり色が長持ちしません。
            必ず保湿クリームをお使いください。また、トータルイマージョンを冷蔵庫などで冷やしてお使いになると、クールダウンと保湿が同時にできます。', 'option_price' => '1700'),
            array('salon_id' => 316, 'options' => 'トータルイマージョン（小）', 'explanation' => '日焼け促進
            日焼けによる肌の老化も防ぎ、日焼けの色持ちも良くします。
            肌のほてりを抑えて皮ムケも防ぐ、非常に優れた保湿クリームです。美黒を目指す方は是非お試しください。
            日焼け後だけでなく、日常のボディケアにも最適です！！

            日焼け後のお肌は乾燥しがちです。乾燥すると皮がむけやすくなったり色が長持ちしません。
            必ず保湿クリームをお使いください。また、トータルイマージョンを冷蔵庫などで冷やしてお使いになると、クールダウンと保湿が同時にできます。', 'option_price' => '1200'),
            array('salon_id' => 316, 'options' => 'トータルイマージョン（お試しミニサイズ）', 'explanation' => '日焼け促進
            日焼けによる肌の老化も防ぎ、日焼けの色持ちも良くします。
            肌のほてりを抑えて皮ムケも防ぐ、非常に優れた保湿クリームです。美黒を目指す方は是非お試しください。
            日焼け後だけでなく、日常のボディケアにも最適です！！

            日焼け後のお肌は乾燥しがちです。乾燥すると皮がむけやすくなったり色が長持ちしません。
            必ず保湿クリームをお使いください。また、トータルイマージョンを冷蔵庫などで冷やしてお使いになると、クールダウンと保湿が同時にできます。', 'option_price' => '600'),
            array('salon_id' => 325, 'options' => 'オイル（ブロンズ）', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 325, 'options' => 'オイル（ホロホロ）', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 325, 'options' => 'オイル（スリミング）', 'explanation' => '-', 'option_price' => '400'),
            array('salon_id' => 325, 'options' => 'オイル（ホロホロボトル）', 'explanation' => '-', 'option_price' => '2300'),
            array('salon_id' => 328, 'options' => '初回登録料', 'explanation' => '-', 'option_price' => '1000'),
            array('salon_id' => 328, 'options' => 'ジェル', 'explanation' => '-', 'option_price' => '150'),
            array('salon_id' => 328, 'options' => '伊藤園　水素水（缶410ml）', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 328, 'options' => 'レモン25（缶）', 'explanation' => '-', 'option_price' => '100'),
            array('salon_id' => 328, 'options' => 'ポカリスエイト（PET500ml）', 'explanation' => '-', 'option_price' => '150'),
            array('salon_id' => 328, 'options' => 'コロナ（瓶）', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 328, 'options' => 'タンニングジェル', 'explanation' => '-', 'option_price' => '100'),
            array('salon_id' => 328, 'options' => '入会金', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 329, 'options' => 'ジェル', 'explanation' => '素肌に優しい弱酸性で、お肌をいたわりながら快適なタンニングが楽しめます。', 'option_price' => '200'),
            array('salon_id' => 329, 'options' => 'ニプレス', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 330, 'options' => 'ジェル', 'explanation' => '素肌に優しい弱酸性で、お肌をいたわりながら快適なタンニングが楽しめます。', 'option_price' => '200'),
            array('salon_id' => 330, 'options' => 'ニプレス', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 330, 'options' => '全身もみほぐし', 'explanation' => '30分', 'option_price' => '1800'),
            array('salon_id' => 330, 'options' => '全身もみほぐし', 'explanation' => '60分', 'option_price' => '2980'),
            array('salon_id' => 330, 'options' => '全身もみほぐし', 'explanation' => '90分', 'option_price' => '4400'),
            array('salon_id' => 330, 'options' => '全身もみほぐし', 'explanation' => '120分', 'option_price' => '5900'),
            array('salon_id' => 330, 'options' => '全身もみほぐし指名', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 330, 'options' => '全身もみほぐし着替え', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 330, 'options' => '全身もみほぐし延長10分', 'explanation' => '-', 'option_price' => '600'),
            array('salon_id' => 330, 'options' => '全身もみほぐしシャワー', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 331, 'options' => 'ジェル', 'explanation' => '素肌に優しい弱酸性で、お肌をいたわりながら快適なタンニングが楽しめます。', 'option_price' => '100'),
            array('salon_id' => 331, 'options' => 'ニプレス', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 332, 'options' => 'ジェル', 'explanation' => '素肌に優しい弱酸性で、お肌をいたわりながら快適なタンニングが楽しめます。', 'option_price' => '100'),
            array('salon_id' => 332, 'options' => 'ニプレス', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 333, 'options' => 'ジェル', 'explanation' => '素肌に優しい弱酸性で、お肌をいたわりながら快適なタンニングが楽しめます。', 'option_price' => '200'),
            array('salon_id' => 333, 'options' => 'ニプレス', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 335, 'options' => 'メンバー登録料', 'explanation' => '-', 'option_price' => '100'),
            array('salon_id' => 335, 'options' => '再発行料', 'explanation' => '-', 'option_price' => '100'),
            array('salon_id' => 335, 'options' => '日焼けレンタルセット', 'explanation' => '（ガウン・タオル・バスタオル）', 'option_price' => '367'),
            array('salon_id' => 335, 'options' => 'タンニングジェル3パック', 'explanation' => '-', 'option_price' => '1000'),
            array('salon_id' => 337, 'options' => 'タンニングマシン専用ジェル
            ブラックアクセル', 'explanation' => 'より深みのある小麦色！
            シャワー無しでサラッとした使用感ながらもしっかり保湿！ ', 'option_price' => '360'),
            array('salon_id' => 338, 'options' => 'タンニングマシン専用ジェル
            ブラックアクセル', 'explanation' => 'より深みのある小麦色！
            シャワー無しでサラッとした使用感ながらもしっかり保湿！ ', 'option_price' => '360'),
            array('salon_id' => 345, 'options' => '会員登録', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 345, 'options' => '再発行', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 352, 'options' => '会員登録', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 352, 'options' => 'ジェル', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 358, 'options' => '初回登録料', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 358, 'options' => 'タンニングジェル1回', 'explanation' => '学生の方はタンニングジェルが半額のサービス料金となります。(学生証を提示して下さい)', 'option_price' => '300'),
            array('salon_id' => 358, 'options' => 'タンニングジェルボトル', 'explanation' => '学生の方はタンニングジェルが半額のサービス料金となります。(学生証を提示して下さい)', 'option_price' => '3000'),
            array('salon_id' => 360, 'options' => '登録料', 'explanation' => '-', 'option_price' => '0'),
            array('salon_id' => 360, 'options' => '再登録', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 360, 'options' => '全身用オイル', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 360, 'options' => 'フェイス用オイル', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 360, 'options' => 'ボトルオイル', 'explanation' => '-', 'option_price' => '3000'),
            array('salon_id' => 360, 'options' => 'ニプレス', 'explanation' => '-', 'option_price' => '200'),
            array('salon_id' => 360, 'options' => 'アフターローション', 'explanation' => '-', 'option_price' => '1700'),
            array('salon_id' => 387, 'options' => '入会金', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 387, 'options' => 'HOROHOROGEL使い切り(20g)', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 387, 'options' => 'ボトル(250g)', 'explanation' => '-', 'option_price' => '1900'),
            array('salon_id' => 387, 'options' => 'アフターローション(200ml)', 'explanation' => '-', 'option_price' => '2000'),
            array('salon_id' => 387, 'options' => '会員登録', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 390, 'options' => '新規登録料', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 391, 'options' => 'マシン専用ジェル', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 391, 'options' => 'タンニングジェル', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 395, 'options' => 'オイル（使いきりタイプ）', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 395, 'options' => 'オイル（ボトルキープ）', 'explanation' => '-', 'option_price' => '2500'),
            array('salon_id' => 396, 'options' => '日焼け＆ダイエットオイル1個', 'explanation' => '-', 'option_price' => '300'),
            array('salon_id' => 396, 'options' => '日焼け＆ダイエットオイル2個', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 397, 'options' => '初回登録料', 'explanation' => '-', 'option_price' => '500'),
            array('salon_id' => 397, 'options' => 'ジェル（1回分）', 'explanation' => '-', 'option_price' => '300'),
        );
        DB::table('options')->insert($options);
    }
}
