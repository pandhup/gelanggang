<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('checkuser', function (Request $request) {
    $user_check = \App\User::all()->Where('email', $request->email)->count();
    if ($user_check > 0) {
      return response()->json('Error');
    } else {
      return response()->json('Success');
    }
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
