<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->delete();
        $companies = array(
                           array('name' =>'AQUA'),
                            array('name' =>'B-DASH'),
                            array('name' =>'b-max'),
                            array('name' =>'B-WAVE'),
                            array('name' =>'BANBOO KING 鹿児島の日ｻﾛ'),
                            array('name' =>'BAYSIDE CLUB'),
                            array('name' =>'BAYSIDE-CLUB'),
                            array('name' =>'BEAM ZONE'),
                            array('name' =>'Black People'),
                            array('name' =>'BLACK･BLACK'),
                            array('name' =>'Black&White'),
                            array('name' =>'BlackBeryy'),
                            array('name' =>'BLUE NEON'),
                            array('name' =>'Bright'),
                            array('name' =>'BRON ZAGE'),
                            array('name' =>'Bronze Resort'),
                            array('name' =>'BROWN SUGAR'),
                            array('name' =>'C.M.G Tanning Studio'),
                            array('name' =>'Chili'),
                            array('name' =>'Cool'),
                            array('name' =>'CRAZY SUN'),
                            array('name' =>'Crowd'),
                            array('name' =>'dope'),
                            array('name' =>'ENJOY'),
                            array('name' =>'ERGO JAPAN浜松'),
                            array('name' =>'EXION'),
                            array('name' =>'FINE'),
                            array('name' =>'FRISCO'),
                            array('name' =>'g-style'),
                            array('name' =>'GLOW横須賀中央店'),
                            array('name' =>'Hair Salon Fetia'),
                            array('name' =>'hair salon HEART'),
                            array('name' =>'HOLLYWOOD'),
                            array('name' =>'HOT RIPPER'),
                            array('name' =>'ibiza'),
                            array('name' =>'Kuro\'s'),
                            array('name' =>'LA COSTA'),
                            array('name' =>'LIEN'),
                            array('name' =>'LOCO ROCO'),
                            array('name' =>'MASTER SUN'),
                            array('name' =>'Muscele Beach'),
                            array('name' =>'Muscle & Beauty磐田店'),
                            array('name' =>'OVER HEART'),
                            array('name' =>'PARD'),
                            array('name' =>'PLAYER RESORT'),
                            array('name' =>'RAYS 江坂'),
                            array('name' =>'RBC'),
                            array('name' =>'rogieam'),
                            array('name' =>'ROYAL ORDER'),
                            array('name' =>'Santafe-ｻﾝﾀﾌｪ-'),
                            array('name' =>'SOLARIS'),
                            array('name' =>'SOLE'),
                            array('name' =>'Soltron JAPAN'),
                            array('name' =>'SPAGIO本厚木'),
                            array('name' =>'STAR BEACH'),
                            array('name' =>'Sun Bed Lounge Luxxx'),
                            array('name' =>'SUN OCEAN'),
                            array('name' =>'Sun Style'),
                            array('name' =>'SUN‐PLACE'),
                            array('name' =>'SUN･BRONZE'),
                            array('name' =>'SUN9696'),
                            array('name' =>'SUNBO'),
                            array('name' =>'SunnySalon Aobadai'),
                            array('name' =>'SUNRIVER'),
                            array('name' =>'SUNVISION'),
                            array('name' =>'Tanning room The Beach'),
                            array('name' =>'TANNING SALON HOT STAFF'),
                            array('name' =>'TANNING STUDIO SUNSHOWER'),
                            array('name' =>'TANNING UV.ZONE'),
                            array('name' =>'THE SUN TIMES札幌'),
                            array('name' =>'TITAN GYM'),
                            array('name' =>'UV.ZONE'),
                            array('name' =>'UWE JAPAN'),
                            array('name' =>'アマゾネス'),
                            array('name' =>'あらまあde西船'),
                            array('name' =>'あらまあde千葉'),
                            array('name' =>'アロハビーチ　国分寺'),
                            array('name' =>'イリオス ブラッキー'),
                            array('name' =>'エグゼ'),
                            array('name' =>'エスタジ'),
                            array('name' =>'エルソール'),
                            array('name' =>'コイン日焼け24'),
                            array('name' =>'コカクラブ尼崎店'),
                            array('name' =>'ココナッツクラブ新潟'),
                            array('name' =>'ココナッツスタジアム'),
                            array('name' =>'ココナッツスタジオ'),
                            array('name' =>'ココナッツルーム日焼サロン'),
                            array('name' =>'コスモス溝の口店'),
                            array('name' =>'ザ・サンラウンジ'),
                            array('name' =>'ザ・マリンクラブ'),
                            array('name' =>'サムライ'),
                            array('name' =>'サロンエイト'),
                            array('name' =>'サンパラダイス'),
                            array('name' =>'サンフレンド'),
                            array('name' =>'サンマッスル'),
                            array('name' =>'サンロイヤル'),
                            array('name' =>'シーガール'),
                            array('name' =>'シェイプジムカリフォルニア'),
                            array('name' =>'ソルトロンジャパン'),
                            array('name' =>'ダイヤモンドサン'),
                            array('name' =>'タンゴ'),
                            array('name' =>'タンニング スタジオ キラ'),
                            array('name' =>'タンニングクラブ ワイハ'),
                            array('name' =>'タンニングサロン　GOLPA'),
                            array('name' =>'タンニングサロンブロンズ'),
                            array('name' =>'タンニングスタジオ　BOA'),
                            array('name' =>'タンニングスタジオ LUXY'),
                            array('name' =>'タンニングスタジオ　サンミックス'),
                            array('name' =>'タンニングスタジオブロンズ'),
                            array('name' =>'タンニングパレス江古田'),
                            array('name' =>'タンニングルーム・プラージュ'),
                            array('name' =>'チューブ'),
                            array('name' =>'トロピカーナ'),
                            array('name' =>'ノワール豊田'),
                            array('name' =>'ビー・ブラック（ＢＥ・ＢＬＡＣＫ）タンニングスタジオ'),
                            array('name' =>'ビーチタイム'),
                            array('name' =>'フィットネスプラザジャンプス'),
                            array('name' =>'フェイバー'),
                            array('name' =>'ブラックブラック高崎'),
                            array('name' =>'へヴンリー'),
                            array('name' =>'ベラーノタンニングスタジオ'),
                            array('name' =>'ヘルシー温泉タテバ'),
                            array('name' =>'マリンＣＬＵＢ小山店'),
                            array('name' =>'マリンクラブ'),
                            array('name' =>'マリンクラブ'),
                            array('name' =>'メラス'),
                            array('name' =>'ユーランドエステ部'),
                            array('name' =>'ラグーナ'),
                            array('name' =>'ラコスタ'),
                            array('name' =>'ラフィーネ'),
                            array('name' =>'レインボー'),
                            array('name' =>'ログハウスの中にある日焼けサロン 焼けぼっくり'),
                            array('name' =>'ロコパラ'),
                            array('name' =>'ロコロコ'),
                            array('name' =>'わくわくの湯'),
                            array('name' =>'黒べぇーっ'),
                            array('name' =>'大分トレーニングクラブ'),
                            array('name' =>'日サロカリブ'),
                            array('name' =>'日焼けアイランドアクアたまプラーザ店'),
                            array('name' =>'日焼けサロン　Bari-Hari'),
                            array('name' =>'日焼けサロン　Ｇぐる～'),
                            array('name' =>'日焼けサロン　ガジュマル'),
                            array('name' =>'日焼けサロン ジャングル2'),
                            array('name' =>'日焼けサロン・キラ緑橋店'),
                            array('name' =>'日焼けサロン・サンビーチ'),
                            array('name' =>'日焼けサロン・サンロケ'),
                            array('name' =>'日焼けサロン・セレーノビーチⅢ'),
                            array('name' =>'日焼けサロン・ソレイユ'),
                            array('name' =>'日焼けサロン・ボンバー'),
                            array('name' =>'日焼けサロン961レ・ミュー'),
                            array('name' =>'日焼けサロンKIRRA平野店'),
                            array('name' =>'日焼けサロンNEXT'),
                            array('name' =>'日焼けサロンPAREO'),
                            array('name' =>'日焼けサロンsunflash'),
                            array('name' =>'日焼けサロンＴＯＭ'),
                            array('name' =>'日焼けサロンＵＶドラッグ'),
                            array('name' =>'日焼けサロンアッシュ'),
                            array('name' =>'日焼けサロンウルフ'),
                            array('name' =>'日焼けサロンエグジスト'),
                            array('name' =>'日焼けサロンココナッツアイランド'),
                            array('name' =>'日焼けサロンコナ'),
                            array('name' =>'日焼けサロンザマリンクラブ'),
                            array('name' =>'日焼けサロンサンクチュアリ'),
                            array('name' =>'日焼けサロンシーガル'),
                            array('name' =>'日焼けサロンシバ'),
                            array('name' =>'日焼けサロンジャンタナ'),
                            array('name' =>'日焼けサロンショアブレイク'),
                            array('name' =>'日焼けサロンナチグロン'),
                            array('name' =>'日焼けサロンビーム'),
                            array('name' =>'日焼けサロンビタミンＣ'),
                            array('name' =>'日焼けサロンボディーフレッシュ'),
                            array('name' =>'日焼けサロンポプラ'),
                            array('name' =>'日焼けサロンマチズモ'),
                            array('name' =>'日焼けサロンラウ'),
                            array('name' =>'日焼けスタジオ HotDog（ホットドッグ）'),
                            array('name' =>'日焼けスタジオ ファインクラブ'),
                            array('name' =>'日焼けスタジオＹＯＯバイパス店'),
                            array('name' =>'日焼けスタジオオーシャンブルー'),
                            array('name' =>'日焼けスタジオクロコダイル'),
                            array('name' =>'日焼けスタジオゴールドラッシュ'),
                            array('name' =>'日焼けスタジオシャイニング'),
                            array('name' =>'日焼けスタジオちびくろサンタ'),
                            array('name' =>'日焼けソルトロンジャパン'),
                            array('name' =>'日焼けルーム クロンボ'),
                            array('name' =>'日焼け屋新宿'),
                            array('name' =>'日焼サロン・ノースショア'),
                            array('name' =>'日焼サロンカレドニア'),
                            array('name' =>'日焼スタジオＳＵＮ・ＴＲＡＰ'),
                            array('name' =>'髪工房ダム'),
                            array('name' =>'美容室＆日焼けサロン Klug Crook'),
                            );
                DB::table('companies')->insert($companies);


    }
}
