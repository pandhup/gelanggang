<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class SuperadminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
      {
         return view('vsuperadmin.home');
      }
      public function madmin()
      {
          $user = User::all()->where('role','=','admin');
          return view('vsuperadmin.madmin', ['user' => $user]);
      }
      public function mmember()
      {
          $user = User::all()->where('role','=','member');
          return view('vsuperadmin.mmember', ['user' => $user]);
      }
}
