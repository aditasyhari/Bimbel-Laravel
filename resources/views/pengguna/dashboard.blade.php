@extends('pengguna.layouts.master')

@section('title')
Dashboard Siswa
@endsection

@push('plugin-styles')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
@endpush

@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- Dashboard Analytics Start -->
        <section id="dashboard-analytics">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card bg-analytics text-white">
                        <div class="card-content">
                            <div class="card-body text-center">
                                <img src="{{asset('app-assets/images/elements/decore-left.png')}}" class="img-left"
                                    alt=" card-img-left">
                                <img src="{{asset('app-assets/images/elements/decore-right.png')}}" class="img-right"
                                    alt="card-img-right">
                                <div class="avatar avatar-xl bg-primary shadow mt-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-award white font-large-1"></i>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h1 class="mb-2 text-white">Selamat Datang Di Dashboard Dasapratama</h1>
                                    <p class="m-auto w-75">Selamat Belajar Dan Merai Masa depan dengan <strong>Dasapratama</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Dashboard Analytics end -->
        <section class="app-ecommerce-details">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-5 mt-2 pl-2 pr-2">
                        <p>5 Kelas terakhir yang dibeli</h>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th></th>
                                        <th>Kelas</th>
                                        <th>Kategori</th>
                                        <th>Paket</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                @foreach($transaksi as $t)
                                    <tr>
                                        <?php
                                            $kelas = \App\Kelas::find($t->kelas_id);
                                        ?>
                                        <td class="text-center">
                                            <img src="{{ asset('app-assets/images/thumbnail/kelas/'.$kelas->thumbnail) }}" alt="Thumbnail" class="img-fluid" style="max-width:150px; max-height:150px;">
                                        </td>
                                        <td>{{ $kelas->nama_kelas }}</td>
                                        <td class="text-uppercase">{{ $kelas->kategori }}</td>
                                        <td class="text-uppercase">{{ $kelas->kategori_kelas }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-info" onclick="kelas({{ $kelas->id }})">Lihat</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection('content')

@push('plugin-scripts')
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/app-assets/js/scripts/datatables/datatable.js')}}"></script>

<script>
    function kelas(id) {
        window.location.href = "{!! url('/kelas/"+id+"') !!}"
    }
</script>
@endpush
