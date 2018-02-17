<?php

namespace App\Http\Controllers\Guardian;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
	 * Creates a new controller instance
	 *
	 * @return void
	 */
    public function __construct()
    {
    	$this->middleware('auth:guardian');
    }

    /**
     * Show Dashboard
     * 
     * @return Illuminate\Http\Response
     */
    public function index()
    {
    	return view('guardian.home');
    }
}
