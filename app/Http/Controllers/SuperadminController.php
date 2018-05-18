<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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
          $user = DB::table('users')
          -> join('ukm','users.id_ukm','=','ukm.id_ukm')
          -> where('role','=','member')
          -> select('ukm.nama_ukm','users.email')
          -> get();

          $ukm = DB::table('ukm')->select('id_ukm','nama_ukm')->orderBy('nama_ukm','asc')->get();

          return view('vsuperadmin.mmember') -> with('user',$user) -> with('ukm',$ukm);
      }
}
