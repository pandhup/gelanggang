<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EventController extends Controller

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
    public function antrian()
    {
        $event = DB::table('event')
        ->join('users','event.id_user_member','=','users.id')
        ->join('ukm','users.id_ukm','=','ukm.id_ukm')
        ->where('status','=','belumverif')
        ->select('event.*','ukm.nama_ukm')
        ->get();
        $no = 1;
        return view('vadmin.antrian')
        ->with('event',$event)
        ->with('no',$no);
    }
    public function revisi()
    {
      $event = DB::table('event')
      ->where('status','=','direvisi')
      ->select('event.*')
      ->get();
      $no = 1;
      return view('vadmin.revisi')
      ->with('event',$event)
      ->with('no',$no);
    }
    public function berakhir()
    {
      $event = DB::table('event')
      ->where('status','=','selesai')
      ->select('event.*')
      ->get();
      $no = 1;
      return view('vadmin.berakhir')
      ->with('event',$event)
      ->with('no',$no);
    }
    public function berlangsung()
    {
      $event = DB::table('event')
      ->where('status','=','berlangsung')
      ->select('event.*')
      ->get();
      $no = 1;
      return view('vadmin.berlangsung')
      ->with('event',$event)
      ->with('no',$no);
    }
    public function tolak()
    {
      $event = DB::table('event')
      ->where('status','=','ditolak')
      ->select('event.*')
      ->get();
      $no = 1;
      return view('vadmin.tolak')
      ->with('event',$event)
      ->with('no',$no);
    }
    public function batal()
    {
      $event = DB::table('event')
      ->where('status','=','dibatalkan')
      ->select('event.*')
      ->get();
      $no = 1;
      return view('vadmin.batal')
      ->with('event',$event)
      ->with('no',$no);
    }
}
