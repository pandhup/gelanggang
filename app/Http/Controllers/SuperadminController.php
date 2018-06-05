<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
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

    // script upload gambar
    $file = $request->file('foto');
    $fileName = $file->getClientOriginalName();
    $request->file('foto')->storeAs('public/images', $fileName);

    $admin = new User;

    // $data->nama_field_di_database = Input::get('nama_field_di_form');
    $admin->name = Input::get('name');
    $admin->email = Input::get('email');
    $admin->password = bcrypt(Input::get('password'));
    $admin->role = 'admin';
    $admin->foto = $fileName;

    $admin->save();

    return redirect('superadmin/madmin');
  }
  // }

  public function detailadmin($id)
  {
    $admin = User::find($id);
    return response()->json($admin);
  }

  public function updateadmin(Request $request)
  {
    $id = Input::get('id_edit');
    $admin = User::find($id);
    $admin->name = Input::get('nama_edit');
    // $admin->email = Input::get('email_edit');
    if (Input::get('password') != "") {
      $admin->password = bcrypt(Input::get('password_edit'));
    }
    $admin->role = 'admin';
    if ($request->hasFile('foto')) {
      if ($admin->foto!="") {
        Storage::disk('public')->delete('images/'.$admin->foto);
      }

      $file = $request->file('foto');
      $fileName = $file->getClientOriginalName();
      $request->file('foto')->storeAs('public/images', $fileName);;
      $admin->foto = $fileName;
    }

    $admin->save();
    return redirect('superadmin/madmin');
  }

  // fungsi untuk menghapus user
  public function deleteadmin($id)
  {
    $data = User::find($id);
    $foto = $data->foto;
    Storage::disk('public')->delete('images/'.$foto);
    $data -> delete($id);

    return redirect('superadmin/madmin')->with('sukses_delete', 'yes');
  }
  // Batas Kelompok

  // Kelompok fungsi untuk Member

  // menampilkan daftar member
  public function mmember()
  {
    $member = DB::table('users')
    -> where('role','=','member')
    -> select('*')
    -> get();

    $ukm = DB::table('ukm')->select('id_ukm','nama_ukm')->orderBy('nama_ukm','asc')->get();

    return view('vsuperadmin.mmember') -> with('member',$member) -> with('ukm',$ukm);
  }

  public function savemember( Request $request)
  {
    $file = $request->file('foto');
    $fileName = $file->getClientOriginalName();
    $request->file('foto')->storeAs('public/images', $fileName);

    $member = new User;
    // $data->nama_field_di_database = Input::get('nama_field_di_form');
    $member->name = Input::get('nama_ukm');
    $member->email = Input::get('email');
    $member->password = bcrypt(Input::get('password'));
    $member->role = 'member';
    $member->foto = $fileName;

    $member->save();

    return redirect('superadmin/mmember');
  }

  public function detailmember($id)
  {
    $member = User::find($id);
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
