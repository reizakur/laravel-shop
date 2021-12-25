<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class VendorController extends Controller
{
  public function dashboard(){
      return view('vendor/browsedashboard');
  }

  public function biodata(){
      $users =User::orderBy('user.nama', 'asc')->get();
      return view('vendor/editbiodata', compact('users'));

  }
  public function password(){
    $users =User::orderBy('user.nama', 'asc')->get();
    return view('vendor/editpassword', compact('users'));

}

  public function produk(){
    $users =User::orderBy('user.nama', 'asc')->get();
    return view('vendor/addproduk' );

}

public function transaksi(){
  $users =User::orderBy('user.nama', 'asc')->get();
  return view('vendor/browsetransaksi' );

}


  public function vendorInsert(Request $request){
    $vendor = User::create($request->except('admin-vendor'));
    return redirect(route('vendor-addproduk'));

  }
  public function vendorDetail($id){

  }


public function vendorDelete(Request $request, $id){
    $user = User::findOrFail($id);
    $user->delete();
    return redirect(route('vendor-addproduk'));

  }
  

}
