<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class CustomerController extends Controller
{
  public function beranda(){
    $users =User::orderBy('user.nama', 'asc')->get();
      return view('customer/refuse-customer/refuse-index');
  }

  public function kategori(){
      $users =User::orderBy('user.nama', 'asc')->get();
      return view('customer/refuse-customer/refuse-kategori', compact('users'));

  }

  public function detail(){
    $users =User::orderBy('user.nama', 'asc')->get();
    return view('customer/refuse-customer/refuse-index');

}

public function transaksi(){
  $users =User::orderBy('user.nama', 'asc')->get();
  return view('customer/refuse-customer/refuse-transaksi' );

}

public function checkhout(){
  $users =User::orderBy('user.nama', 'asc')->get();
  return view('customer/refuse-customer/refuse-checkout' );

}
public function kota(){
  $users =User::orderBy('user.nama', 'asc')->get();
  return view('customer/refuse-customer/refuse-kota' );

}

///////////////////////
public function accept_beranda(){
  $users =User::orderBy('user.nama', 'asc')->get();
  return view('customer/accept-customer/' );

}
public function accept_kategori(){
    $users =User::orderBy('user.nama', 'asc')->get();
    return view('admin/browsetransaksi' );
  
  }
  public function accept_detail(){
    $users =User::orderBy('user.nama', 'asc')->get();
    return view('admin/browsetransaksi' );
  
  }
  public function accept_transaksi(){
    $users =User::orderBy('user.nama', 'asc')->get();
    return view('admin/browsetransaksi' );
  
  }
  public function accept_checkout(){
    $users =User::orderBy('user.nama', 'asc')->get();
    return view('admin/browsetransaksi' );
  
  }
  public function accept_kota(){
    $users =User::orderBy('user.nama', 'asc')->get();
    return view('admin/browsetransaksi' );
  
  }


//   public function vendorInsert(Request $request){
//     $vendor = User::create($request->except('admin-vendor'));
//     return redirect(route('admin-vendor'));

//   }
//   public function vendorDetail($id){

//   }


// public function vendorDelete(Request $request, $id){
//     $user = User::findOrFail($id);
//     $user->delete();
//     return redirect(route('admin-vendor'));

//   }
  

}
