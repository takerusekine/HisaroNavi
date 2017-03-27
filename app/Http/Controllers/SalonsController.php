<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RegionController;
use App\Salon;
use App\Option;

class SalonsController extends Controller
{

    public function show(Request $request, $id)
    {
        $info = Salon::find($id);
        $reg_c = new RegionController();
        $title_regionName = $reg_c->areaEvaluate($info->area_code);
        $company = mb_convert_kana($info->company->name, 'aK', 'utf-8');
        $salonName = mb_convert_kana($info->name, 'aK', 'utf-8');
        $replaceSalonName = str_ireplace($company, '', $salonName);

        if (!empty($info->near_st)) {
            $titletag = $info->near_st .' - ' . $company . $replaceSalonName . 'の日焼けサロン | 日サロナビ';
        } else {
            $titletag = $title_regionName.' - ' . $company . $replaceSalonName . 'の日焼けサロン | 日サロナビ';
        }

            if (!empty($info->near_st)) {
                $description = $info->near_st . '（' .$info->address .'）にある'. $company . $replaceSalonName .'の日焼けサロン情報です。'.$company. $replaceSalonName.'の住所、電話番号など便利な情報満載です。日サロナビで日焼けサロンのお得な情報をゲットしよう！';
            } else {
                $description = $info->address .'にある'. $company . $replaceSalonName .'の日焼けサロン情報です。'.$company. $replaceSalonName.'の住所、電話番号など便利な情報満載です。日サロナビで日焼けサロンのお得な情報をゲットしよう！';
            }

            if (mb_strlen($replaceSalonName) > 0) {
                $keywords = $company .','. $replaceSalonName .','.str_replace('・', ',', $title_regionName).',日焼け,日サロ,日サロナビ';
            } else {
                $keywords = $company .','.str_replace('・', ',', $title_regionName).',日焼け,日サロ,日サロナビ';
            }
            


            $areacookie = $request->session()->get('hisaronavi_area', '未設定');

        return view('menu', ['info' => $info, 'titletag' => $titletag, 'description' => $description, 'keywords' => $keywords, 'areacookie' => $areacookie, 'replaceSalonName' => $replaceSalonName, 'company' => $company]);
    }

}
