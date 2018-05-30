<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Models\User as User;
use App\Models\Ukm as Ukm;

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
  // Menampilkan halaman home
  public function index()
  {
    return view('vsuperadmin.home');
  }

// Mengecek validasi email user
  public function checkuser(Request $request)
  {
    $user_check = User::all()->Where('email', $request->email)->count();
    if ($user_check > 0) {
      return response()->json('Error');
    }
  }


  // Kelompok fungsi untuk admin

  // menampilkan daftar admin
  public function madmin()
  {
    $admin = User::all()->where('role','=','admin');
    return view('vsuperadmin.madmin', ['admin' => $admin]);
  }

// fungsiuntuk menambah admin baru
  public function saveadmin(Request $request){
    $validator = Validator::make($request->all(), [
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|unique:users',
      'password' => 'required|string|min:6|confirmed',
    ]);

    // $user_check = User::all()->Where('email',Input::get('email'))->count();
    // if ($user_check > 0) {
    //   return back();
    // }else {


    // if ($validator->fails()) {
    //     return redirect('superadmin/madmin')
    //         ->withErrors($validator)
    //         ->withInput();
    // }

    $admin = new User;

    // $data->nama_field_di_database = Input::get('nama_field_di_form');
    $admin->name = Input::get('name');
    $admin->email = Input::get('email');
    $admin->password = bcrypt(Input::get('password'));
    $admin->role = 'admin';

    $admin->save();

    return redirect('superadmin/madmin');
  }
  // }

public function detailadmin($id)
{
  $admin = User::find($id);
  return response()->json($admin);
}

  // fungsi untuk menghapus user
  public function deleteadmin($id)
  {
    $data = User::find($id);
    $data -> delete($id);
    return redirect('superadmin/madmin')->with('sukses_delete', 'yes');
  }
// Batas Kelompok

// Kelompok fungsi untuk Member

// menampilkan daftar member
  public function mmember()
  {
    $member = DB::table('users')
    -> join('ukm','users.id_ukm','=','ukm.id_ukm')
    -> where('role','=','member')
    -> select('ukm.*','users.*')
    -> get();

    $ukm = DB::table('ukm')->select('id_ukm','nama_ukm')->orderBy('nama_ukm','asc')->get();

    return view('vsuperadmin.mmember') -> with('member',$member) -> with('ukm',$ukm);
  }


  public function detailmember($id)
  {
    // $member = User::find($id);
    $member = DB::table('users')
    -> join('ukm','users.id_ukm','=','ukm.id_ukm')
    -> where('id','=',$id)
    -> select('users.*','ukm.*')
    -> get();
    return response()->json($member);
  }


  // fungsi untuk menghapus member
  public function deletemember($id)
  {

    $data = User::find($id);
    $data -> delete($id);
    return redirect('superadmin/mmember')->with('sukses_delete', 'yes');
  }
//Batas Kelompok

}
