<?php

namespace app\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index(Request $request)
    {

            $arr = ['北海道', '東北', '北陸', '関東', '甲信越','東海', '関西', '中国', '四国', '九州・沖縄'];
            $titletag = '日焼けサロン　料金 ｜日焼けサロンのことなら日サロナビ';
            $description ='日焼けサロンの紹介サイト【日サロナビ】です。日本全国の日焼けサロンの料金情報、お得なクーポン、口コミ、住所、電話番号、日焼け情報などをらくらく検索。日サロナビでお得な情報を今すぐ検索！';
            $keywords = '日サロ,天サロ,日焼け,日サロナビ, 日焼けサロン';
            return view('home', ['arr' => $arr, 'titletag' => $titletag, 'description' => $description, 'keywords' => $keywords]);
    }
}
