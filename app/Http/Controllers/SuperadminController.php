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
  public function madmin()  //menampilkan data admin
  {
    $admin = User::all()->where('role','=','admin');
    return view('vsuperadmin.madmin', ['admin' => $admin]);
  }

  public function saveadmin(Request $request){  //tambah admin baru
    $admin = new User;

    $admin->name = Input::get('name');
    $admin->email = Input::get('email');
    $admin->password = bcrypt(Input::get('password'));
    $admin->role = 'admin';
    // script upload gambar
    if ($request->hasFile('foto')) {
      $file = $request->file('foto');
      $ext = $file->getClientOriginalExtension();
      $fileName = date('dmy').'.'.$ext;
      $request->file('foto')->storeAs('public/images', $fileName);
      $admin->foto = $fileName;
    }

    $admin->save();

    return redirect('superadmin/madmin');
  }


  public function updateadmin(Request $request)   //update data admin
  {
    $id = Input::get('id_edit');
    $admin = User::find($id);
    $admin->name = Input::get('nama_edit');
    if (Input::get('password') != "") {
      $admin->password = bcrypt(Input::get('password_edit'));
    }
    $admin->role = 'admin';
    if ($request->hasFile('foto')) {
      if ($admin->foto!="") {
        Storage::disk('public')->delete('images/'.$admin->foto); //delete foto lama jika ada
      }
      $file = $request->file('foto');
      $fileName = $file->getClientOriginalName();
      $request->file('foto')->storeAs('public/images', $fileName);;
      $admin->foto = $fileName;
    }

    $admin->save();
    return redirect('superadmin/madmin');
  }

  public function deleteadmin($id)    //delete user admin
  {
    $data = User::find($id);
    $foto = $data->foto;
    Storage::disk('public')->delete('images/'.$foto);
    $data -> delete($id);

    return redirect('superadmin/madmin');
  }
  // Batas Kelompok


  // Kelompok fungsi untuk Member
  public function mmember()   //menampilkan daftar member
  {
    $member = User::all() -> where('role','=','member');
    $ukm = Ukm::orderBy('nama_ukm','ASC')->get();

    return view('vsuperadmin.mmember') -> with('member',$member) -> with('ukm',$ukm);
  }

  public function savemember( Request $request)   //tambah data member baru
  {
    $member = new User;

    $member->name = Input::get('nama_ukm');
    $member->email = Input::get('email');
    $member->password = bcrypt(Input::get('password'));
    $member->role = 'member';
    //script upload gambar
    if ($request->hasFile('foto')) {
      $file = $request->file('foto');
      $fileName = $file->getClientOriginalName();
      $request->file('foto')->storeAs('public/images', $fileName);
      $member->foto = $fileName;
    }

    $member->save();

    return redirect('superadmin/mmember');
  }

  public function updatemember(Request $request)   //update data member
  {
    $id = Input::get('id_edit');
    $member = User::find($id);
    $member->name = Input::get('nama_edit');
    if (Input::get('password') != "") {
      $member->password = bcrypt(Input::get('password_edit'));
    }
    $member->role = 'member';
    if ($request->hasFile('foto')) {
      if ($member->foto!="") {
        Storage::disk('public')->delete('images/'.$member->foto); //delete foto lama jika ada
      }
      $file = $request->file('foto');
      $fileName = $file->getClientOriginalName();
      $request->file('foto')->storeAs('public/images',$fileName);;
      $member->foto = $fileName;
    }

    $member->save();
    return redirect('superadmin/mmember');
  }

  public function deletemember($id)   //delete user member
  {
    $data = User::find($id);
    Storage::disk('public')->delete('images/'.$data->foto);
    $data -> delete($id);
    return redirect('superadmin/mmember');
  }
  //Batas Kelompok

  // Menampilkan detail user pada modal Detail
  public function detailuser($id)
  {
    $admin = User::find($id);
    return response()->json($admin);
  }
}
