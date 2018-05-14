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

//akses index all user
Route::get('/', function () {
    return view('welcome');
});

// akses logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//memeriksa session
Route::group(['middleware' => 'web'], function () {
	Route::auth();
});

//akses home untuk superadmin, admin, dan member yang log in
Route::group(['middleware' => ['web','auth']], function()
{
	// Route::get('/home', 'HomeController@index');
	Route::get('/home', function(){
		if (Auth::user()->role == 'superadmin'){
			return view('vsuperadmin.home');
		} elseif (Auth::user()->role == 'admin'){
			return view('vadmin.home');
		} else {
			return view('vmember.home');
		}
	});
});

//prefix untuk petugas superadmin
Route::group(['prefix' => 'superadmin'], function()
{
	Route::group(['middleware' => ['web', 'auth', 'superadmin']], function () {
    Route::get('home','SuperadminController@index');
		Route::get('madmin','SuperadminController@madmin');
    Route::get('mmember','SuperadminController@mmember');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
	});
});

//prefix untuk petugas admin
Route::group(['prefix' => 'admin'], function()
{
	Route::group(['middleware' => ['web', 'auth', 'admin']], function () {
    Route::get('home','AdminController@index');
		Route::get('mmember','AdminController@mmember');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('antrian', 'EventController@antrian');
    Route::get('revisi', 'EventController@revisi');
    Route::get('berlangsung', 'EventController@berlangsung');
    Route::get('berakhir', 'EventController@berakhir');
    Route::get('tolak', 'EventController@tolak');
    Route::get('batal', 'EventController@batal');
	});
});

//prefix untuk petugas member
Route::group(['prefix' => 'member'], function()
{
	Route::group(['middleware' => ['web', 'auth', 'member']], function () {
		Route::get('home','MemberController@index');
    Route::get('event','MemberController@event');
    Route::get('create','MemberController@create');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
	});
});

// Auth::routes();
//
// Route::get('/home', 'HomeController@i ndex')->name('home');
