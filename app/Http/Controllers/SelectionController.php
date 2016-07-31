<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Salon;

class SelectionController extends Controller
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

    public function getNearStation(Request $request)
    {
        $area_flash = $request->input('area_flash');
        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%駅近%')
        ->get();
        $title = '駅近';
        $titletag = $area_flash.'の駅近の日焼けサロン';
        $description = $area_flash.'の駅近の日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '駅近,'.$area_flash.',日焼け,日サロ,日サロナビ';
        return view('feats.common', ['titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'title' => $title, 'area' => $area_flash, 'keywords' => $keywords]);
    }

    public function getPowerfulMachine(Request $request)
    {
        $area_flash = $request->input('area_flash');
        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%強力マシーンあり%')
        ->get();

        $title = '強力マシーンあり';
        $titletag = $area_flash.'の強力マシーンありの日焼けサロン';
        $description = $area_flash.'の強力マシーンありの日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '強力マシーンあり,'.$area_flash.',日焼け,日サロ,日サロナビ';

        return view('feats.common', ['titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'title' => $title, 'area' => $area_flash, 'keywords' => $keywords]);
    }

    public function getMorningDiscount(Request $request)
    {
        $area_flash = $request->input('area_flash');
        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%朝割引あり%')
        ->get();

        $title = '朝割引あり';
        $titletag = $area_flash.'の朝割引ありの日焼けサロン';
        $description = $area_flash.'の朝割引ありの日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '朝割引あり,'.$area_flash.',日焼け,日サロ,日サロナビ';

        return view('feats.common', ['titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'title' => $title, 'area' => $area_flash, 'keywords' => $keywords]);
    }

    public function getNightDiscount(Request $request)
    {
        $area_flash = $request->input('area_flash');
        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%夜割引あり%')
        ->get();

        $title = '夜割引あり';
        $titletag = $area_flash.'の夜割引ありの日焼けサロン';
        $description = $area_flash.'の夜割引ありの日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '夜割引あり,'.$area_flash.',日焼け,日サロ,日サロナビ';

        return view('feats.common', ['titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'title' => $title, 'area' => $area_flash, 'keywords' => $keywords]);
    }

    public function getIntroDiscount(Request $request)
    {
        $area_flash = $request->input('area_flash');
        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%紹介割引あり%')
        ->get();

        $title = '紹介割引あり';
        $titletag = $area_flash.'の紹介割引ありの日焼けサロン';
        $description = $area_flash.'の紹介割引ありの日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '紹介割引あり,'.$area_flash.',日焼け,日サロ,日サロナビ';

        return view('feats.common', ['titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'title' => $title, 'area' => $area_flash, 'keywords' => $keywords]);
    }

    public function getDrinkService(Request $request)
    {
        $area_flash = $request->input('area_flash');
        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%ドリンクサービス%')
        ->get();

        $title = 'ドリンクサービスあり';
        $titletag = $area_flash.'のドリンクサービスありの日焼けサロン';
        $description = $area_flash.'のドリンクサービスありの日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = 'ドリンクサービスあり,'.$area_flash.',日焼け,日サロ,日サロナビ';
        return view('feats.common', ['titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'title' => $title, 'area' => $area_flash, 'keywords' => $keywords]);
    }

    public function getPrivateRoom(Request $request)
    {
        $area_flash = $request->input('area_flash');
        $area_code = $this->evaluateArea($area_flash);

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%完全個室%')
        ->get();

        $title = '完全個室';
        $titletag = $area_flash.'の完全個室の日焼けサロン';
        $description = $area_flash.'の完全個室の日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords = '完全個室,'.$area_flash.',日焼け,日サロ,日サロナビ';

        return view('feats.common', ['titletag' => $titletag, 'description' => $description, 'salons' => $salons, 'title' => $title, 'area' => $area_flash, 'keywords' => $keywords]);
    }
}
