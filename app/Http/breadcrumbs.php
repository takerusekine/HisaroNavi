<?php
/**
 * Define breadcrumbs
 */

//home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('ホーム', action('HomeController@index'));
});

// Home > エリア検索
Breadcrumbs::register('areaSearch', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('エリア検索', action('SearchesController@getArea'));
});

// Home > こだわり検索
Breadcrumbs::register('prejudiceSearch', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('こだわり検索', action('SearchesController@getPrejudice'));
});


Breadcrumbs::register('area-results', function($breadcrumbs)
{
    $breadcrumbs->parent('areaSearch');
    $breadcrumbs->push('検索結果', action('ResultsController@getIndex'));
});

Breadcrumbs::register('prej-results', function($breadcrumbs)
{
    $breadcrumbs->parent('prejudiceSearch');
    $breadcrumbs->push('検索結果', action('ResultsController@getIndex'));
});

Breadcrumbs::register('salons', function ($breadcrumbs, $info)
{
    $breadcrumbs->parent('prej-results');
    $str = $info->company->name.$info->name;
    if (mb_strlen($str) > 16) {
        $salonname = mb_substr($str, 0, 15). '...';
    }else {
        $salonname = $str;
    }
    $breadcrumbs->push($salonname, action('SalonsController@show'));
});
