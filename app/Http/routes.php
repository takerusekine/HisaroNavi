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
Route::get('search', 'SearchesController@index');
Route::get('search/result', 'SearchesController@result');
Route::get('experiment', 'SearchesController@experiment');
Route::controller('feature', 'FeatureController');
Route::controller('selection', 'SelectionController');
