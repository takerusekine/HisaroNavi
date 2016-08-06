<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SalonsController;
use App\Http\Controllers\RegionController;
use App\Salon;
use App\Menu;

class FeatureController extends Controller
{
    function evaluateArea($area_flash)
    {

        switch ($area_flash) {
            case '北海道':
                return 1000;
                break;

            case '東北':
                return 2000;
                break;
            case '北陸':
                return 3000;
                break;

            case '関東':
                return 4000;
                break;

            case '甲信越':
                return 5000;
                break;

            case '東海':
                return 6000;
                break;

            case '関西':
                return 7000;
                break;

            case '中国':
                return 8000;
                break;

            case '四国':
                return 9000;
                break;
            case '九州・沖縄':
                return 10000;
                break;
        }
    }

    public function getFeatureArea(Request $request)
    {
        $area = $request->session()->get('hisaronavi_area');
        $r = new RegionController();
        $feature_title = $request->session()->get('feature_title');
        $titletag = $area.'の'.$feature_title;
        $description = $area.'の'. $feature_title .'情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = $feature_title . ','.$area.',日焼け,日サロ,日サロナビ';
        $large_areacode = $r->largeAreaEv($area);
        if ($feature_title == '格安サロン') {
            $salons = Salon::whereBetween('area_code', [$large_areacode, $large_areacode + 999])->get();
        } else {
            $salons = Salon::whereBetween('area_code', [$large_areacode, $large_areacode + 999])
            ->where('kodawari', 'like', '%'.$feature_title.'%')
            ->get();
        }

        $selectAreaArr = $r->evalateAreaName($area);
        return view('feats.featurearea', [
            'area' => $area,
            'selectAreaArr' => $selectAreaArr,
            'salons' => $salons,
            'title' => $feature_title,
            'titletag' => $titletag,
            'keywords' => $keywords,
            'description' => $description,
        ]);
    }

    public function getReasonable(Request $request)
    {
        $request->session()->put('hisaronavi_area', $_COOKIE['hisaronavi_area']);
        $area_flash = $request->session()->get('hisaronavi_area');
        $r = new RegionController();
        $area_code = $r->largeAreaEv($area_flash);
        $before_filter = Salon::whereBetween('area_code', [$area_code, $area_code + 999])->whereNotNull('min_price')->get();
        $filtered = $before_filter->filter(function ($item)
        {
            return $item['min_price'] <= 1500;
        });

        $salons = $filtered->all();

        $request->session()->put('feature_title', $_COOKIE['feature_title']);
        $title = $request->session()->get('feature_title');
        $titletag = $area_flash.'の'.$title;
        $description = $area_flash.'の'. $title .'情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '格安サロン,'.$area_flash.',日焼け,日サロ,日サロナビ';
        return view('feats.common', ['keywords' => $keywords, 'title' => $title, 'titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'area_flash' => $area_flash]);

    }

    public function getReasonableResult(Request $request)
    {
        $detail_area = $_GET['areachoice'];
        $title = $request->session()->get('feature_title');
        $before_filter = Salon::whereIn('area_code', $detail_area)->whereNotNull('min_price')->get();
        $filtered = $before_filter->filter(function ($item)
        {
            return $item['min_price'] <= 1500;
        });
        $s = new SalonsController();
        $darray = array();
        foreach ($detail_area as $key => $value) {
            array_push($darray, $s->areaEvaluate($value));
        }
        $d_area_name = implode(',' , $darray);
        $salons = $filtered->all();

        $titletag = $d_area_name.'の'.$title;
        $description = $d_area_name.'の'. $title .'情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = $title.','.$d_area_name.',日焼け,日サロ,日サロナビ';

        return view('feats.resonableresult', [
            'salons' => $salons,
            'titletag' => $titletag,
            'keywords' => $keywords,
            'description' => $description,
            'title' => $title,
            'd_area_name' => $d_area_name,
        ]);
    }

    public function getFirstDiscount(Request $request)
    {
        $request->session()->put('hisaronavi_area', $_COOKIE['hisaronavi_area']);

        $area_flash = $request->session()->get('hisaronavi_area');
        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%初回割引あり%')
        ->get();
        $request->session()->put('feature_title', $_COOKIE['feature_title']);
        $title = $request->session()->get('feature_title');
        $titletag = $area_flash.'の初回割引ありの日焼けサロン';
        $description = $area_flash.'の初回割引ありの日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '初回割引あり,'.$area_flash.',日焼け,日サロ,日サロナビ';
        return view('feats.common', ['keywords' => $keywords, 'title' => $title, 'titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'area_flash' => $area_flash, 'area_code' => $area_code]);

    }

    public function getStudentDiscount(Request $request)
    {
        $request->session()->put('hisaronavi_area', $_COOKIE['hisaronavi_area']);

        $area_flash = $request->session()->get('hisaronavi_area');
        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%学割あり%')
        ->get();
        $request->session()->put('feature_title', $_COOKIE['feature_title']);
        $title = $request->session()->get('feature_title');
        $titletag = $area_flash.'の学割ありの日焼けサロン';
        $description = $area_flash.'の学割ありの日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '学割あり,'.$area_flash.',日焼け,日サロ,日サロナビ';
        return view('feats.common', ['keywords' => $keywords, 'title' => $title, 'titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'area_flash' => $area_flash, 'area_code' => $area_code]);

    }

    public function getMidnight(Request $request)
    {
        $request->session()->put('hisaronavi_area', $_COOKIE['hisaronavi_area']);

        $area_flash = $request->session()->get('hisaronavi_area');
        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%深夜まで営業%')
        ->get();
        $request->session()->put('feature_title', $_COOKIE['feature_title']);
        $title = $request->session()->get('feature_title');
        $titletag = $area_flash.'の深夜まで営業している日焼けサロン';
        $description = $area_flash.'の深夜まで営業している日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '深夜まで営業,'.$area_flash.',日焼け,日サロ,日サロナビ';
        return view('feats.common', ['keywords' => $keywords, 'title' => $title, 'titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'area_flash' => $area_flash, 'area_code' => $area_code]);

    }

    public function getWomanDiscount(Request $request)
    {
        $request->session()->put('hisaronavi_area', $_COOKIE['hisaronavi_area']);

        $area_flash = $request->session()->get('hisaronavi_area');
        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%女性割引あり%')
        ->get();
        $request->session()->put('feature_title', $_COOKIE['feature_title']);
        $title = $request->session()->get('feature_title');
        $titletag = $area_flash.'の女性割引ありの日焼けサロン';
        $description = $area_flash.'の女性割引ありの日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '女性割引あり,'.$area_flash.',日焼け,日サロ,日サロナビ';
        return view('feats.common', ['keywords' => $keywords, 'title' => $title, 'titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'area_flash' => $area_flash, 'area_code' => $area_code]);

    }

    public function getMachineMany(Request $request)
    {
        $request->session()->put('hisaronavi_area', $_COOKIE['hisaronavi_area']);

        $area_flash = $request->session()->get('hisaronavi_area');

        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%マシーン種類豊富%')
        ->get();

        $request->session()->put('feature_title', $_COOKIE['feature_title']);
        $title = $request->session()->get('feature_title');
        $titletag = $area_flash.'のマシーンの種類が豊富な日焼けサロン';
        $description = $area_flash.'のマシーンの種類が豊富な日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = 'マシーン種類豊富,'.$area_flash.',日焼け,日サロ,日サロナビ';
        return view('feats.common', ['keywords' => $keywords, 'title' => $title, 'titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'area_flash' => $area_flash, 'area_code' => $area_code]);

    }

    public function getPrepaid(Request $request)
    {
        $request->session()->put('hisaronavi_area', $_COOKIE['hisaronavi_area']);

        $area_flash = $request->session()->get('hisaronavi_area');
        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%お得な回数券・プリペイドカードあり%')
        ->get();

        $request->session()->put('feature_title', $_COOKIE['feature_title']);
        $title = $request->session()->get('feature_title');
        $titletag = $area_flash.'のお得な回数券・プリペイドカードありの日焼けサロン';
        $description = $area_flash.'のお得な回数券・プリペイドカードありの日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = $title.','.$area_flash.',日焼け,日サロ,日サロナビ';
        return view('feats.common', ['keywords' => $keywords, 'title' => $title, 'titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'area_flash' => $area_flash, 'area_code' => $area_code]);

    }

    public function getFeaturesResult(Request $request)
    {
        $detail_area = $_GET['areachoice'];
        $title = $request->session()->get('feature_title');
        $s = new SalonsController();
        $darray = array();
        foreach ($detail_area as $key => $value) {
            array_push($darray, $s->areaEvaluate($value));
        }

        $d_area_name = implode(',', $darray);

        $salons = Salon::whereIn('area_code', $detail_area)
        ->where('kodawari', 'like', '%'.$title.'%')
        ->get();

        $titletag = $d_area_name.'の'.$title;
        $description = $d_area_name.'の'. $title .'情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = $title.','.$d_area_name.',日焼け,日サロ,日サロナビ';

        return view('feats.featuresresult', [
            'title' => $title,
            'titletag' => $titletag,
            'description' => $description,
            'keywords' => $keywords,
            'salons' => $salons,
            'd_area_name' => $d_area_name,

        ]);

    }
}
