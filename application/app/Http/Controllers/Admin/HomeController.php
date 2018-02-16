<?php

namespace App\Http\Controllers\Admin;

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
    	$this->middleware('auth:admin');
    }

    /**
     * Show Dashboard
     * 
     * @return Illuminate\Http\Response
     */
    public function index()
    {
    	return view('admin.home');
    }
}
