<?php namespace App\Http\Controllers;

class CaptureController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('capture');
	}

}
