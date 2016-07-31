<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('map');
    }
}
