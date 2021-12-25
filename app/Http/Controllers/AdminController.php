<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AdminController extends Controller
{
  public function dashboard(){
      return view('admin/browsedashboard');
  }

  public function vendor(){
      $users =User::orderBy('user.nama', 'asc')->get();
      return view('admin/addvendor', compact('users'));

  }

  public function kategori(){
    $users =User::orderBy('user.nama', 'asc')->get();
    return view('admin/addkategori' );

}

public function subkategori(){
  $users =User::orderBy('user.nama', 'asc')->get();
  return view('admin/addsubkategori' );

}

public function lokasi(){
  $users =User::orderBy('user.nama', 'asc')->get();
  return view('admin/addlokasi' );

}
public function produk(){
  $users =User::orderBy('user.nama', 'asc')->get();
  return view('admin/browseproduk' );

}
public function transaksi(){
  $users =User::orderBy('user.nama', 'asc')->get();
  return view('admin/browsetransaksi' );

}

  public function vendorInsert(Request $request){
    $vendor = User::create($request->except('admin-vendor'));
    return redirect(route('admin-vendor'));

  }
  public function vendorDetail($id){

  }


public function vendorDelete(Request $request, $id){
    $user = User::findOrFail($id);
    $user->delete();
    return redirect(route('admin-vendor'));

  }
  

}
