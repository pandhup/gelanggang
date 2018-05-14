<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class AdminController extends Controller
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
       return view('vadmin.home');
     }
    public function mmember()
    {
      $user = User::all();
      $no = 1;
      return view('vadmin.mmember',compact('user','no'));
    }
}
