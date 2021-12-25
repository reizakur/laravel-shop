@extends('admin/main-template')     
@section('title','Vendor')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Tambah Vendor
                        <div class="page-title-subheading">Halaman ini merupakan halaman untuk menambah vendor
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                        <i class="fa fa-star"></i>
                    </button>
                    <div class="d-inline-block dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-business-time fa-w-20"></i>
                            </span>
                            Buttons
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span>
                                            Inbox
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-book"></i>
                                        <span>
                                            Book
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-picture"></i>
                                        <span>
                                            Picture
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                        <i class="nav-link-icon lnr-file-empty"></i>
                                        <span>
                                            File Disabled
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    
            </div>
</div>

<div class="tab-content">
<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Grid Rows</h5>
            <form method="post" action="{{route ('admin-vendor-insert')}}" >
                @csrf
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Nama Kepemilikan</label><input name="nama" type="text" class="form-control"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group"><label for="examplePassword11" class="">Email Perusahaan</label><input name="email" id="examplePassword11"   type="text"
                                                                                                                                 class="form-control"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Phone Perusahaan</label><input name="phone"   type="text" class="form-control"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group"><label for="examplePassword11" class="">Alamat Perusahaan</label><input name="alamat" id="examplePassword11"   type="text"
                                                                                                                                 class="form-control"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group"><label  >Pilih Kota</label>
                        <select name="id_kota"  class="form-control"> 
                            <option value="1" >Bekasi</option>
                        </select></div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group"><label for="examplePassword11" class="">Nama Kecamatan</label><input name="kecamatan" id="examplePassword11"   type="text"
                                                                                                                                 class="form-control"></div>
                    </div>
                </div>

               
            
                <div class="position-relative form-group"><label for="exampleAddress" class="">URL Maps<H6>https://www.google.com/maps/place/National+Monumen</H6></label><input name="linkmaps" id="exampleAddress" type="text" class="form-control"></div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">URL Spreadsheets Jadwal<H6>https://www.google.com/maps/place/National+Monumen</H6></label><input name="linkspreadsheets"  type="text" class="form-control"></div>
               
                    <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Logo Perusahaan<h6>*Format: JPG</h6><input    type="file" class="form-control"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group"><label for="examplePassword11" class="">Work Hours: <h6>*Contoh: Senin-Jumat 10:00-13:00</h6></label><input name="workhours" id="examplePassword11"   type="text"
                                                                                                                                 class="form-control"></div>
                    </div>
                </div>
                <div class="position-relative form-group"><label for="exampleAddress2" class="">Nama Perusahaan</label><input name="namastudio" id="exampleAddress2" type="text" class="form-control">
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Username</label><input name="username"   type="text" class="form-control"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group"><label for="examplePassword11" class="">Password</label><input name="password" id="examplePassword11"  type="password"
                                                                                                                                 class="form-control"></div>
                    </div>
                </div>
                <input type="hidden" name="akses" value="vendor"></input>
<button class="mt-2 btn btn-primary" >Submit</button>
            </form>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Active Users
                        <div class="btn-actions-pane-right">
                            <div role="group" class="btn-group-sm btn-group">
                                <button class="active btn btn-focus">Last Week</button>
                                <button class="btn btn-focus">All Month</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Nama Perusahaan</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                         @foreach ($users as $item)
                         <tr>
                            <td class="text-center text-muted">{{$loop->iteration}}</td>
                            <td>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="widget-content-left">
                                                <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">{{$item->nama}}</div>
                                            <div class="widget-subheading opacity-7">{{$item->akses}}</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">{{$item->email}}</td>
                            <td class="text-center">
                                <div class="badge badge-warning">Dibekukan</div>
                            </td>
                            <td class="text-center">
                            <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Details</button>
                          
                          <button type="button" id="PopoverCustomT-4" class="btn btn-info btn-sm">Aktifkan</button>
                          <form action="{{ route('admin-vendor-delete', ['id'=> $item->id_user])}}" class="d-inline" method="post">
                          @csrf
                          @method('delete')
                          <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                          </form>
                        </td>
                        </tr>    
                         @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-block text-center card-footer">
                     </div>
                </div>
            </div>
        </div>
    </div>
          <div class="app-wrapper-footer">
        <div class="app-footer">
            <div class="app-footer__inner">
                <div class="app-footer-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                Footer Link 1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                Footer Link 2
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="app-footer-right">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                Footer Link 3
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <div class="badge badge-success mr-1 ml-0">
                                    <small>NEW</small>
                                </div>
                                Footer Link 4
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>    </div>


                 @endsection