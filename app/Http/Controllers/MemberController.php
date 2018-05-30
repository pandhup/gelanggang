<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Event as Event;
use App\Models\Poster as Poster;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

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
      $event = DB::table('events')
      ->join('poster','events.id_event','=','poster.id_event')
      ->where('events.id_user_member','=',$id_login)
      ->select('events.*','poster.nama_poster')
      ->get();

      return view('vmember.event', ['event'=>$event]);
    }

    public function create()
    {
        return view('vmember.create');
    }

    public function detail($id)
    {
      $event = DB::table('events')
      ->join('poster','events.id_event','=','poster.id_event')
      ->where('events.id_event','=',$id)
      ->select('events.*','poster.nama_poster')
      ->get();
      return response()->json($event);
    }

    public function edit(Request $request, $id)
    {
        $event = Event::all()
        ->where('id_event','=',$id);
        $event = $event->update($request->all());
        return response()->json($event);
    }

    public function store(Request $request)
    {
        $event = Event::create($request->input());
        return response()->json($event);
    }
}
