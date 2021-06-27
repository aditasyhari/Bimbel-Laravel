@extends('admin.layouts.master')
@section('title')
Absen Siswa SD / MI
@endsection
@push('plugin-styles')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
@endpush

@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-body">
        <!-- Zero configuration table -->
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Absen Siswa Terbatas | SD / MI</h4>
                            <a href="#" class="btn btn-icon btn-outline-primary float-right mr-1 mb-1"
                                title="tambah siswa"><i class="feather icon-user-plus"></i></a>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead class="text-center">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Tanggal Daftar</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>
                                                    <div class="chip chip-success">
                                                        <div class="chip-body">
                                                            <div class="chip-text">Masuk</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="avatar bg-success" title="masuk">
                                                        <div href="#" class="avatar-content">
                                                                <i class="avatar-icon text-white feather icon-check-square"></i>
                                                        </div>
                                                    </a>
                                                    <a class="avatar bg-warning" title="izin">
                                                        <div href="#" class="avatar-content">
                                                                <i class="avatar-icon text-white feather icon-alert-circle"></i>
                                                        </div>
                                                    </a>
                                                    <a class="avatar bg-danger" title="tidak masuk">
                                                        <div href="#" class="avatar-content">
                                                                <i class="avatar-icon text-white feather icon-x-square"></i>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Zero configuration table -->
    </div>
</div>
@endsection
@push('plugin-scripts')
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/app-assets/js/scripts/datatables/datatable.js')}}"></script>
@endpush
