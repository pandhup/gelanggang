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
        $event = DB::table('events')
        ->join('users','events.id_user_member','=','users.id')
        ->join('ukm','users.id_ukm','=','ukm.id_ukm')
        ->where('status','=','belumverif')
<<<<<<< HEAD
        ->select('events.*','ukm.nama_ukm')
=======
        ->select('event.*','ukm.nama_ukm','users.id')
>>>>>>> 1da2cb3255f69c036bdd694f0da099efdda87541
        ->get();
        $no = 1;
        return view('vadmin.antrian')
        ->with('event',$event)
        ->with('no',$no);
    }
    public function revisi()
    {
      $event = DB::table('events')
      ->where('status','=','direvisi')
      ->select('events.*')
      ->get();
      $no = 1;
      return view('vadmin.revisi')
      ->with('event',$event)
      ->with('no',$no);
    }
    public function berakhir()
    {
      $event = DB::table('events')
      ->where('status','=','selesai')
      ->select('events.*')
      ->get();
      $no = 1;
      return view('vadmin.berakhir')
      ->with('event',$event)
      ->with('no',$no);
    }
    public function berlangsung()
    {
      $event = DB::table('events')
      ->where('status','=','berlangsung')
      ->select('events.*')
      ->get();
      $no = 1;
      return view('vadmin.berlangsung')
      ->with('event',$event)
      ->with('no',$no);
    }
    public function tolak()
    {
      $event = DB::table('events')
      ->where('status','=','ditolak')
      ->select('events.*')
      ->get();
      $no = 1;
      return view('vadmin.tolak')
      ->with('event',$event)
      ->with('no',$no);
    }
    public function batal()
    {
      $event = DB::table('events')
      ->where('status','=','dibatalkan')
      ->select('events.*')
      ->get();
      $no = 1;
      return view('vadmin.batal')
      ->with('event',$event)
      ->with('no',$no);
    }
    public function aksi($modal_id)
    {
      $event = DB::table('event')
      ->join('users','event.id_user_member','=','users.id')
      ->join('ukm','users.id_ukm','=','ukm.id_ukm')
      ->where('nama','=',$modal_id)
      ->select('event.*','ukm.nama_ukm','users.id')
      ->get();
      return response()->json($event);
    }
}
