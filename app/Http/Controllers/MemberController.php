<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Event as Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class MemberController extends Controller
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
        return view('vmember.home');
    }

    public function event()
    {
      $id_login = Auth::user()->id;
      $events = Event::all()
      ->where('id_user_member','=',$id_login);

      return view('vmember.event', ['event'=>$events]);
    }

    public function create()
    {
        return view('vmember.create');
    }

    public function detail($id)
    {
      $event = Event::all()
      ->where('id_event','=',$id);
      return response()->json($event);
    }

    public function edit(Request $request, $id)
    {
        $event = Event::all()
        ->where('id_event','=',$id);

        // $event->nama = $request->nama;
        // $event->tanggal_mulai = $request->tanggal_mulai;
        // $event->tanggal_selesai = $request->tanggal_selesai;
        // $event->deskripsi = $request->deskripsi;
        // $event->lokasi = $request->lokasi;
        // $event->kontak = $request->kontak;
        // $event->status = $request->status;
        // $event->id_user_member = $request->id_user_member;
        $event = $event->update($request->all());
        // $event->save();
        return response()->json($event);
    }

    public function store(Request $request)
    {
        $event = Event::create($request->input());
        return response()->json($event);
    }
}
