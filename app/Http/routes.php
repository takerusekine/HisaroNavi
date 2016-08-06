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
Route::get('map', 'MapController@index');
Route::controller('search', 'SearchesController');
Route::get('experiment', 'SearchesController@experiment');
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
        foreach ($area_arr as $ar) {
            $sitemap->add(url('region/result?areachoice%5B%5D=' . $ar), '2016-08-06T13:15:00+09:00', '0.8', 'monthly');
        }
        $salons = DB::table('salons')->orderBy('id')->lists('id');
        foreach ($salons as $salon) {
            $sitemap->add(url('salon/'.$salon), '2016-08-06T13:15:00+09:00', '0.8', 'monthly');
        }
    return $sitemap->render('xml');
});
