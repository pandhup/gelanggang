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
    // return view('landingpage.index');
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
    Route::get('/', function(){ return redirect('superadmin/home');});
    Route::get('home','SuperadminController@index');
    // Route untuk admin
		Route::get('madmin','SuperadminController@madmin');
    Route::post('madmin/saveadmin','SuperadminController@saveadmin');
    Route::get('detailadmin/{id}','SuperadminController@detailuser');
    Route::get('editadmin/{id}','SuperadminController@detailuser');
    Route::post('madmin/updateadmin/','SuperadminController@updateadmin');
    Route::get('madmin/delete/{id}','SuperadminController@deleteadmin');
    // Route untuk member
    Route::get('mmember','SuperadminController@mmember');
    Route::post('mmember/savemember','SuperadminController@savemember');
    Route::get('detailmember/{id}','SuperadminController@detailuser');
    Route::get('editmember/{id}','SuperadminController@detailuser');
    Route::post('mmember/updatemember','SuperadminController@updatemember');
    Route::get('mmember/delete/{id}','SuperadminController@deletemember');

    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
	});
});

//prefix untuk petugas admin
Route::group(['prefix' => 'admin'], function()
{
	Route::group(['middleware' => ['web', 'auth', 'admin']], function () {Route::get('/', function(){ return redirect('superadmin/home');});
    Route::get('/', function(){ return redirect('admin/home');});
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
    Route::get('/', function(){ return redirect('member/home');});
		Route::get('home','MemberController@index');
    Route::get('event','MemberController@event');
    Route::post('event','MemberController@store');
    Route::get('event/{id_event?}','MemberController@detail');
    Route::put('event/{id_event}',[
      'uses' => 'MemberController@edit',
      'as' => 'event.update',
    ]);
    Route::get('create','MemberController@create');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
	});
});

// Auth::routes();
//
// Route::get('/home', 'HomeController@i ndex')->name('home');
