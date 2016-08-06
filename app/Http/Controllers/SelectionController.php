<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\SalonsController;

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

    public function getSelection(Request $request)
    {
        $request->session()->put('hisaronavi_area', $_COOKIE['hisaronavi_area']);
        $request->session()->put('selection_title', str_replace('のサロン', '', $_COOKIE['selection_title']));
        $area_flash = $request->session()->get('hisaronavi_area');
        $area_code = $this->evaluateArea($area_flash);
        $title = $request->session()->get('selection_title');

        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])
        ->where('kodawari', 'like', '%'. $title .'%')
        ->get();
        $titletag = $area_flash.'の'.$title.'の日焼けサロン';
        $description = $area_flash.'の'.$title.'の日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords =  $title. ','.$area_flash.',日焼け,日サロ,日サロナビ';
        return view('selections.common', [
            'titletag' => $titletag,
            'description' => $description,
            'keywords' => $keywords,
            'salons' => $salons,
            'title' => $title,
            'area_flash' => $area_flash,
        ]);
    }


    public function getSelectionDetailArea(Request $request)
    {
        $area = $request->session()->get('hisaronavi_area');
        $area_code = $this->evaluateArea($area);
        $title = $request->session()->get('selection_title');
        $titletag = $area.'の'.$title.'の日焼けサロン';
        $description = $area.'の'.$title.'の日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords =  $title. ','.$area.',日焼け,日サロ,日サロナビ';
        $r = new RegionController();
        $selectAreaArr = $r->evalateAreaName($area);
        $salons = Salon::whereBetween('area_code', [$area_code, $area_code+999])->where('kodawari', 'like', '%' . $title . '%')->get();
        return view('selections.selectiondetail', [
            'titletag' => $titletag,
            'description' => $description,
            'keywords' => $keywords,
            'area' => $area,
            'title' => $title,
            'selectAreaArr' => $selectAreaArr,
            'salons' => $salons,
        ]);
    }

    public function getSelectionResult(Request $request)
    {
        $detail_area = $_GET['areachoice'];
        $title = $request->session()->get('selection_title');
        $request->session()->put('detail_area', $detail_area);
        $salons = Salon::whereIn('area_code', $detail_area)
        ->where('kodawari', 'like', '%'.$title.'%')
        ->get();

        $darray = array();
        $s = new SalonsController();

        foreach ($detail_area as $key => $value) {
            array_push($darray, $s->areaEvaluate($value));
        }

        $d_area_name = implode(',', $darray);
        $titletag = $d_area_name.'の'.$title.'の日焼けサロン';
        $description = $d_area_name.'の'.$title.'の日焼けサロン情報。お得なクーポン、口コミ、住所、電話番号、日焼け情報など便利な情報満載です。日サロナビでお得な情報をゲットしよう！';
        $keywords =  $title. ','.$d_area_name.',日焼け,日サロ,日サロナビ';

        return view('selections.selectresult', [
            'title' => $title,
            'salons' => $salons,
            'd_area_name' => $d_area_name,
            'titletag' => $titletag,
            'description' => $description,
            'keywords' => $keywords,
        ]);


    }
}
