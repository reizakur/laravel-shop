<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController as Admin;
use App\Http\Controllers\VendorController as Vendor;
use App\Http\Controllers\CustomerController as Customer;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// ------- admin

Route::get('/master-dashboard', function () {
    return view('admin/browsedashboard');
});
Route::get('/vendor', function () {
    return view('admin/addvendor');
});
Route::get('/kategori', function () {
    return view('admin/addkategori');
});
Route::get('/subkategori', function () {
    return view('admin/addsubkategori');
});
Route::get('/lokasi', function () {
    return view('admin/addlokasi');
});
Route::get('/produk', function () {
    return view('admin/browseproduk');
});
Route::get('/transaksi', function () {
    return view('admin/browsetransaksi');
});

Route::get('/admin/dashboard',[Admin::class,'dashboard'])->name('admin-dashboard');
Route::get('/admin/vendor',[Admin::class,'vendor'])->name('admin-vendor');
Route::post('/admin/vendor/insert',[Admin::class,'vendorInsert'])->name('admin-vendor-insert');
Route::get('/admin/vendor/{id}',[Admin::class,'vendorDetail'])->name('admin-vendor-detail');
Route::delete('/admin/vendor/{id}',[Admin::class,'vendorDelete'])->name('admin-vendor-delete');
Route::get('/admin/kategori',[Admin::class,'kategori'])->name('admin-kategori');
Route::get('/admin/subkategori',[Admin::class,'subkategori'])->name('admin-subkategori');
Route::get('/admin/lokasi',[Admin::class,'lokasi'])->name('admin-addlokasi');
Route::get('/admin/produk',[Admin::class,'produk'])->name('admin-browseproduk');
Route::get('/admin/transaksi',[Admin::class,'transaksi'])->name('admin-browsetransaksi');

// buat vendor
Route::get('/vendor/dashboard',[Vendor::class,'dashboard'])->name('vendor-dashboard');
Route::get('/vendor/biodata',[Vendor::class,'biodata'])->name('vendor-biodata');
Route::get('/vendor/password',[Vendor::class,'password'])->name('vendor-password');
Route::get('/vendor/produk',[Vendor::class,'produk'])->name('vendor-produk');
Route::get('/vendor/transaksi',[Vendor::class,'transaksi'])->name('vendor-transaksi');

// buat customer udah login
Route::get('/Customer/Beranda',[Customer::class,'accept_beranda'])->name('accept-beranda');
Route::get('/Customer/Kategori',[Customer::class,'accept_kategori'])->name('accept-kategori');
Route::get('/Customer/Detail',[Customer::class,'accept_detail'])->name('accept-detail');
Route::get('/Customer/Transaksi',[Customer::class,'accept_transaksi'])->name('accept-transaksi');
Route::get('/Customer/CheckOut',[Customer_Accepe::class,'accept_checkout'])->name('accept-checkout');
Route::get('/Customer/Kota',[Customer::class,'accept_kota'])->name('accept-kota');

// buat customer belum login
Route::get('/halaman-beranda',[Customer::class,'beranda'])->name('beranda');
Route::get('/halaman-kategori',[Customer::class,'kategori'])->name('kategori');
Route::get('/halaman-detail',[Customer::class,'detail'])->name('customer-detail');
Route::get('/halaman-transaksi',[Customer::class,'transaksi'])->name('transaksi');
Route::get('/halaman-checkout',[Customer::class,'checkout'])->name('checkout');
Route::get('/halaman-kota',[Customer::class,'kota'])->name('kota');

// buat login

// ------- vendor

Route::get('/subkategori', function () {
    return view('vendor/addproduk');
});
Route::get('/lokasi', function () {
    return view('vendor/browsedashboard');
});
Route::get('/produk', function () {
    return view('vendor/browsetransaksi');
});

// ------- customer