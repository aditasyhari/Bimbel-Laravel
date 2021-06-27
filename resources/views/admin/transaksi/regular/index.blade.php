@extends('admin.layouts.master')
@section('title')
Transaksi Kelas Regular
@endsection
@push('plugin-styles')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/file-uploaders/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/data-list-view.css')}}">
@endpush
@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-body">
        <!-- Data list view starts -->
        <section id="data-thumb-view" class="data-thumb-view-header">
            <div class="action-btns d-none">
                <div class="btn-dropdown mr-1 mb-1">
                    <div class="btn-group dropdown actions-dropodown">
                        <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actions
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
                            <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
                            <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
                            <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- dataTable starts -->
            <div class="table-responsive">
                <table class="table data-thumb-view">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Bukti Transfer</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Kelas</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Sahrul</td>
                            <td class="product-category">Sahrul@example.com</td>
                            <td>
                                SD
                            </td>
                            <td>
                                <div class="chip chip-info">
                                    <div class="chip-body">
                                        <div class="chip-text">Regular</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$69.99</td>
                            <td>
                                <a class="avatar bg-success" title="verifikasi">
                                    <div href="#" class="avatar-content">
                                            <i class="avatar-icon text-white feather icon-check-circle"></i>
                                    </div>
                                </a>
                                <a class="avatar bg-danger" title="tolak">
                                    <div href="#" class="avatar-content">
                                            <i class="avatar-icon text-white feather icon-x-circle"></i>
                                    </div>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- dataTable ends -->

            <!-- add new sidebar starts -->
            <div class="add-new-data-sidebar">
                <div class="overlay-bg"></div>
                <div class="add-new-data">
                    <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                        <div>
                            <h4 class="text-uppercase">Thumb View Data</h4>
                        </div>
                        <div class="hide-data-sidebar">
                            <i class="feather icon-x"></i>
                        </div>
                    </div>
                    <div class="data-items pb-3">
                        <div class="data-fields px-2 mt-3">
                            <div class="row">
                                <div class="col-sm-12 data-field-col">
                                    <label for="data-name">Name</label>
                                    <input type="text" class="form-control" id="data-name">
                                </div>
                                <div class="col-sm-12 data-field-col">
                                    <label for="data-category"> Category </label>
                                    <select class="form-control" id="data-category">
                                        <option>Audio</option>
                                        <option>Computers</option>
                                        <option>Fitness</option>
                                        <option>Appliance</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 data-field-col">
                                    <label for="data-status">Order Status</label>
                                    <select class="form-control" id="data-status">
                                        <option>Pending</option>
                                        <option>Canceled</option>
                                        <option>Delivered</option>
                                        <option>On Hold</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 data-field-col">
                                    <label for="data-price">Price</label>
                                    <input type="text" class="form-control" id="data-price">
                                </div>
                                <div class="col-sm-12 data-field-col data-list-upload">
                                    <form action="#" class="dropzone dropzone-area" id="dataListUpload">
                                        <div class="dz-message">Upload Image</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                        <div class="add-data-btn">
                            <button class="btn btn-primary">Add Data</button>
                        </div>
                        <div class="cancel-data-btn">
                            <button class="btn btn-outline-danger">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- add new sidebar ends -->
        </section>
        <!-- Data list view end -->

    </div>
</div>    
@endsection

@push('plugin-scripts')
<script src="{{asset('app-assets/vendors/js/extensions/dropzone.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.select.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/ui/data-list-view.js')}}"></script>
@endpush