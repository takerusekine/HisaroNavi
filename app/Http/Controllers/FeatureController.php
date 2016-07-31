<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
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

    public function getReasonable(Request $request)
    {
        $area_flash = $request->input('area_flash');

        switch ($area_flash) {
            case '北海道':
                $salons_id = Salon::whereBetween('area_code', [1000, 1999])
                ->orderBy('area_code')->lists('id');
                break;

            case '東北':
                $salons_id = Salon::whereBetween('area_code', [2000, 2999])->orderBy('area_code')->lists('id');
                break;
            case '北陸':
                $salons_id = Salon::whereBetween('area_code', [3000, 3999])
                ->orderBy('area_code')->lists('id');
                break;

            case '関東':
                $salons_id = Salon::whereBetween('area_code', [4000, 4999])
                ->orderBy('area_code')->lists('id');
                break;

            case '甲信越':
                $salons_id = Salon::whereBetween('area_code', [5000, 5999])
                ->orderBy('area_code')->lists('id');
                break;

            case '東海':
                $salons_id = Salon::whereBetween('area_code', [6000, 6999])
                ->orderBy('area_code')->lists('id');
                break;

            case '関西':
                $salons_id = Salon::whereBetween('area_code', [7000, 7999])
                ->orderBy('area_code')->lists('id');
                break;

            case '中国':
                $salons_id = Salon::whereBetween('area_code', [8000, 8999])
                ->orderBy('area_code')->lists('id');
                break;

            case '四国':
                $salons_id = Salon::whereBetween('area_code', [9000, 9999])->orderBy('area_code')->lists('id');
                break;
            case '九州・沖縄':
                $salons_id = Salon::whereBetween('area_code', [10000, 10999])->orderBy('area_code')->lists('id');
                break;
        }

        $beforefilter = Menu::whereIn('salon_id', $salons_id)
        ->whereNotIn('grade', ['顔', '-'])
        ->whereNotIn('menu_price',['0'])
        ->whereNotNull('menu_price')
        ->orderBy('salon_id', 'ASC')
        ->orderBy('menu_price', 'ASC')->get();

        $menu = $beforefilter->unique(function ($uniqueitem)
        {
            return $uniqueitem->salon_id;
        });

        $menu->all();



        $filteredmenu = $menu->filter(function ($item)
        {
            return $item->menu_price <= 1500;
        });

        $refinedsalon = [];
        foreach ($filteredmenu as $f) {
            $refinedsalon[] = $f->salon_id;
        }

        $salons = Salon::whereIn('id', $refinedsalon)->get();
        $title = '格安サロン';
        $titletag = $area_flash.'の格安サロン';
        $description = $area_flash.'の格安サロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '格安サロン,'.$area_flash.',日焼け,日サロ,日サロナビ';
        return view('feats.common', ['keywords' => $keywords, 'title' => $title, 'titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'area' => $area_flash]);

    }

    public function getFirstDiscount(Request $request)
    {
        $area_flash = $request->input('area_flash');
        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%初回割引あり%')
        ->get();
        $title = '初回割引あり';
        $titletag = $area_flash.'の初回割引ありの日焼けサロン';
        $description = $area_flash.'の初回割引ありの日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '初回割引あり,'.$area_flash.',日焼け,日サロ,日サロナビ';
        return view('feats.common', ['keywords' => $keywords, 'title' => $title, 'titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'area' => $area_flash, 'area_code' => $area_code]);

    }

    public function getStudentDiscount(Request $request)
    {
        $area_flash = $request->input('area_flash');
        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%学割あり%')
        ->get();
        $title = '学割あり';
        $titletag = $area_flash.'の学割ありの日焼けサロン';
        $description = $area_flash.'の学割ありの日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '学割あり,'.$area_flash.',日焼け,日サロ,日サロナビ';
        return view('feats.common', ['keywords' => $keywords, 'title' => $title, 'titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'area' => $area_flash, 'area_code' => $area_code]);

    }

    public function getMidnight(Request $request)
    {
        $area_flash = $request->input('area_flash');
        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%深夜まで営業%')
        ->get();
        $title = '深夜まで営業';
        $titletag = $area_flash.'の深夜まで営業している日焼けサロン';
        $description = $area_flash.'の深夜まで営業している日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '深夜まで営業,'.$area_flash.',日焼け,日サロ,日サロナビ';
        return view('feats.common', ['keywords' => $keywords, 'title' => $title, 'titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'area' => $area_flash, 'area_code' => $area_code]);

    }

    public function getWomanDiscount(Request $request)
    {
        $area_flash = $request->input('area_flash');
        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%女性割引あり%')
        ->get();
        $title = '女性割引あり';
        $titletag = $area_flash.'の女性割引ありの日焼けサロン';
        $description = $area_flash.'の女性割引ありの日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '女性割引あり,'.$area_flash.',日焼け,日サロ,日サロナビ';
        return view('feats.common', ['keywords' => $keywords, 'title' => $title, 'titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'area' => $area_flash, 'area_code' => $area_code]);

    }

    public function getMachineMany(Request $request)
    {
        $area_flash = $request->input('area_flash');
        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%マシーン種類豊富%')
        ->get();

        $title = 'マシーン種類豊富';
        $titletag = $area_flash.'のマシーンの種類が豊富な日焼けサロン';
        $description = $area_flash.'のマシーンの種類が豊富な日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = 'マシーン種類豊富,'.$area_flash.',日焼け,日サロ,日サロナビ';
        return view('feats.common', ['keywords' => $keywords, 'title' => $title, 'titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'area' => $area_flash, 'area_code' => $area_code]);

    }

    public function getPrepaid(Request $request)
    {
        $area_flash = $request->input('area_flash');
        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%お得な回数券・プリペイドカードあり%')
        ->get();

        $title = 'お得な回数券・プリペイドカードあり';
        $titletag = $area_flash.'のお得な回数券・プリペイドカードありの日焼けサロン';
        $description = $area_flash.'のお得な回数券・プリペイドカードありの日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = $title.','.$area_flash.',日焼け,日サロ,日サロナビ';
        return view('feats.common', ['keywords' => $keywords, 'title' => $title, 'titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'area' => $area_flash, 'area_code' => $area_code]);

    }
}
