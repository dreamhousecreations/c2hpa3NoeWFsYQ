<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class LoginController extends Controller
{

    

	/**
	 * Creates a new controller instance
	 *
	 * @return void
	 */
    public function __construct()
    {	
    	$this->middleware('guest:admin', ['except' => ['logout']]);
    }	

    /**
     * Show a Login Form
     * 
     * @return Illuminate\Http\Response
     */
    public function showLoginForm()
    {
    	return view('admin.auth.login');
    }

    /**
     * Attempts a login of Admin
     * 
     * @return Illuminate\Support\Facades\Redirect 
     */
    public function login(Request $request)
    {
    	//Validate the form data
    	$this->validate($request, [
    		'username' => 'required|alpha_num',
    		'password' => 'required|min:6'
    	]);
    	//Attempt to Log in the user
    	if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password, 'active' => 1], $request->remember))
    		{
    			//Login Success! Redirect to Dashboard
    			return redirect()->intended(route('admin.dashboard'));
    		}
    		//Login Failed! Redirect Back to Login with form data.
    		return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    /**
     * Logs out User instance
     * 
     * @return Illuminate\Support\Facades\Redirect
     */
    public function logout()
    {
    	Auth::guard('admin')->logout();
    	return redirect()->route('admin.login');
    }


}
