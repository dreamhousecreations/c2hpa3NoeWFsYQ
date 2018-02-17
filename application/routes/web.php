<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::get('/', 'User\HomeController@index')->name('home');
Route::get('/classroom/{classroom}', 'User\ClassroomController@showClassroom');
Route::any('/register', function() {
	abort(404);
});

/**
 *  Admin Authentication Routes
 */
Route::group(['prefix'  => 'admin'], function () {
	//show login page
	Route::get('/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
	//post login data
	Route::post('/login', 'Admin\Auth\LoginController@login');
	//post logout
	Route::post('/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
	//show password reset link form
	Route::get('/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm' )->name('admin.password.request');
	//post password reset email
	Route::post('/password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	//get password reset form
	Route::get('/password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
	//post password reset data
	Route::post('password/reset', 'Admin\Auth\ResetPasswordController@reset');
});

/**
 *  Teacher Authentication Routes
 */
Route::group(['prefix'  => 'teacher'], function () {
	//show login page
	Route::get('/login', 'Teacher\Auth\LoginController@showLoginForm')->name('teacher.login');
	//post login data
	Route::post('/login', 'Teacher\Auth\LoginController@login');
	//post logout
	Route::post('/logout', 'Teacher\Auth\LoginController@logout')->name('teacher.logout');
	//show password reset link form
	Route::get('/password/reset', 'Teacher\Auth\ForgotPasswordController@showLinkRequestForm' )->name('teacher.password.request');
	//post password reset email
	Route::post('/password/email', 'Teacher\Auth\ForgotPasswordController@sendResetLinkEmail')->name('teacher.password.email');
	//get password reset form
	Route::get('/password/reset/{token}', 'Teacher\Auth\ResetPasswordController@showResetForm')->name('teacher.password.reset');
	//post password reset data
	Route::post('password/reset', 'Teacher\Auth\ResetPasswordController@reset');
});

/**
 *  Guardian Authentication Routes
 */
Route::group(['prefix'  => 'guardian'], function () {
	//show login page
	Route::get('/login', 'Guardian\Auth\LoginController@showLoginForm')->name('guardian.login');
	//post login data
	Route::post('/login', 'Guardian\Auth\LoginController@login');
	//post logout
	Route::post('/logout', 'Guardian\Auth\LoginController@logout')->name('guardian.logout');
	//show password reset link form
	Route::get('/password/reset', 'Guardian\Auth\ForgotPasswordController@showLinkRequestForm' )->name('guardian.password.request');
	//post password reset email
	Route::post('/password/email', 'Guardian\Auth\ForgotPasswordController@sendResetLinkEmail')->name('guardian.password.email');
	//get password reset form
	Route::get('/password/reset/{token}', 'Guardian\Auth\ResetPasswordController@showResetForm')->name('guardian.password.reset');
	//post password reset data
	Route::post('password/reset', 'Guardian\Auth\ResetPasswordController@reset');
});


/**
 *  Admin Routes
 */

Route::group(['prefix' => 'admin'], function () {
	Route::get('/', 'Admin\HomeController@index');
});

/**
 *  Teacher Routes
 */

Route::group(['prefix' => 'teacher'], function () {
	Route::get('/', 'Teacher\HomeController@index');
});

/**
 *  Guardian Routes
 */

Route::group(['prefix' => 'guardian'], function () {
	Route::get('/', 'Guardian\HomeController@index');
});


//Design Testing Route
Route::get('/test-login', function () {
	return view('test.login');
});