<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event as Event;

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
        $event = Event::all();
        $no = 1;
        return view('vmember.event',compact('event','no'));
    }
    public function create()
    {
        return view('vmember.create');
    }
}
