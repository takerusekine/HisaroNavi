<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('menu', 'MenuController@index');
Route::get('capture', 'CaptureController@index');
Route::resource('salon', 'SalonsController', ['only' => 'show']);
Route::controller('region', 'RegionController');
Route::controller('result', 'ResultsController');
Route::get('map/{id}', 'MapController@index');
Route::controller('search', 'SearchesController');
Route::controller('feature', 'FeatureController');
Route::controller('selection', 'SelectionController');

//Sitemap
Route::get('sitemap', function()
{
    $sitemap = App::make('sitemap');
        $sitemap->add(url('/'), '2016-08-06T13:15:00+09:00', '1.0', 'daily');
        $area_arr = array(
            1001,
            1002,
            2101,
            2201,
            2301,
            2401,
            2501,
            2502,
            2601,
            3101,
            3201,
            3301,
            4101,
            4102,
            4103,
            4104,
            4105,
            4106,
            4107,
            4108,
            4109,
            4110,
            4111,
            4112,
            4113,
            4114,
            4201,
            4202,
            4203,
            4204,
            4205,
            4206,
            4301,
            4302,
            4303,
            4304,
            4401,
            4402,
            4403,
            4501,
            4601,
            4701,
            5101,
            5201,
            5301,
            6101,
            6102,
            6201,
            6202,
            6203,
            6204,
            6301,
            6401,
            7101,
            7102,
            7103,
            7104,
            7105,
            7201,
            7301,
            7302,
            7401,
            7501,
            7601,
            8101,
            8201,
            8301,
            8401,
            8501,
            9101,
            9201,
            9301,
            9401,
            10101,
            10102,
            10201,
            10301,
            10401,
            10501,
            10601,
            10701,
            10801,
        );
        $lp = array(
            0,500,1000,1500,2000,
        );
        $up = array (
            1000, 1500, 2000, 2500,
        );

        $kodawari = array(
            '格安サロン',
            '駅近',
            'お得な回数券・プリペイドカードあり',
            '強力マシーンあり',
            'マシーン種類豊富',
            '女性割引あり',
            '学割あり',
            '朝割引あり',
            '夜割引あり',
            '初回割引あり',
            '紹介割引あり',
            '朝まで営業',
            '深夜まで営業',
            '24時間営業',
            '駐車場あり',
            'トレーニングジム併設',
            'コラーゲンマシーンあり',
            '酸素カプセルあり',
            'ドリンクサービスあり',
            '完全予約制',
            '予約優先',
            '予約割引あり',
            '大人向けサロン',
            '完全個室',
            '手ぶらＯＫ',
            'クレジットカード利用可能',
            '温泉施設あり',
            '美容院併設',
            '理容室併設',
            'メルマガ割引あり',
            '雨の日割引あり',
            '18歳未満お断り',
            '焼き放題メニューあり',
            'カラオケ併設',
            'マッサージあり',
            'ネイルあり',
        );
        foreach ($area_arr as $ar) {
            $sitemap->add(url('result?areachoice%5B%5D=' . $ar), '2016-08-06T13:15:00+09:00', '0.8', 'monthly');
        }

        foreach ($kodawari as $kval) {
            foreach ($lp as $lpval) {
                foreach ($up as $upval) {
                    if($upval - $lpval >= 1000){
                        $sitemap->add(url('result?kodawari%5B%5D=' . $kval . '&pricerefine=1&lower-price='.$lpval.'&upper-price='.$upval), '2016-08-06T13:15:00+09:00', '0.8', 'monthly');
                    }
                }
            }
        }

        foreach ($kodawari as $kval) {
            foreach ($lp as $lpval) {
                foreach ($up as $upval) {
                    if($upval - $lpval >= 1000){
                        $sitemap->add(url('result?kodawari%5B%5D=' . $kval . '&lower-price='.$lpval.'&upper-price='.$upval), '2016-08-06T13:15:00+09:00', '0.8', 'monthly');
                    }
                }
            }
        }



        $salons = DB::table('salons')->orderBy('id')->lists('id');
        foreach ($salons as $salon) {
            $sitemap->add(url('salon/'.$salon), '2016-08-06T13:15:00+09:00', '0.8', 'monthly');
            $sitemap->add(url('map/'.$salon), '2016-08-06T13:15:00+09:00', '0.8', 'monthly');
        }
        $sitemap->add(url('/'), '2016-08-06T13:15:00+09:00', '0.8', 'monthly');


    return $sitemap->render('xml');
});
