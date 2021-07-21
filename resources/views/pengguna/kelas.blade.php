@extends('pengguna.layouts.master')
@section('title')
    Kelas Siswa
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
                            <h4 class="card-title">Tabel Kelas Yang diBeli</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead class="text-center">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Paket</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <td>Wita Ananta</td>
                                                <td>SMA</td>
                                                <td>Regular</td>
                                                <td>iki Keterangan</td>
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