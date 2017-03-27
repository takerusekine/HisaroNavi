<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Salon;
use App\Http\Controllers\UseragentController;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        $salon_map = Salon::find($id);
        $companyName = mb_convert_kana($salon_map->company->name, 'aK', 'utf-8');
        $salonName = mb_convert_kana($salon_map->name, 'aK', 'utf-8');
        $replaceSalonName = str_ireplace($companyName, '', $salonName);
        $titletag = $companyName.' '. $replaceSalonName . '日焼けサロンの住所・地図 | 日サロナビ';
        $description = $companyName. $replaceSalonName .'の住所・地図です。'. $companyName.$replaceSalonName .'の日焼けサロンは' . $salon_map->address .'にあります。日サロナビで日本全国の日焼けサロンを素早く検索！';
        $keywords = '地図情報, 日焼け, 日サロ, 日サロナビ';
        $uac = new UseragentController();
        $ua_type = $uac->set();
        if ($ua_type === 'others') {
            return view('map', [
                'salon_map' => $salon_map,
                'titletag' => $titletag,
                'description' => $description,
                'keywords' => $keywords,
                'companyName' => $companyName,
                'replaceSalonName' => $replaceSalonName,
            ]);

        } else {
            return view('mapsp', [
                'salon_map' => $salon_map,
                'titletag' => $titletag,
                'description' => $description,
                'keywords' => $keywords,
                'companyName' => $companyName,
                'replaceSalonName' => $replaceSalonName,
                'ua_type' => $ua_type,
            ]);
        }
    }
}
