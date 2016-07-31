<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        // $menus = Menu::all();
        return view('menu');
    }
}
