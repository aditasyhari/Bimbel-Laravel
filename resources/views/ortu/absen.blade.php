@extends('pengguna.layouts.master')
@section('title')
Absen | Role Ortu
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
                            <h4 class="card-title">Riwayat Absen</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Kategori</th>
                                                <th>Hadir</th>
                                                <th>Izin</th>
                                                <th>Tidak Hadir</th>
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                            @foreach($absen as $a)
                                            @foreach($a->absensiUser as $ab)
                                            <tr>
                                                <?php
                                                    $user = \App\User::find($ab->user_id);
                                                    $kelas = \App\Kelas::find($a->id_kelas);
                                                ?>
                                                <td>{{ $user->profileUser->nama }}</td>
                                                <td class="text->uppercase">{{ $kelas->kategori }}</td>
                                                <td class="text-capitalize">{{ $kelas->kategori_kelas }}</td>
                                                
                                                <td class="text-capitalize">{{ $hadir }}</td>
                                                <td class="text-capitalize">{{ $izin }}</td>
                                                <td class="text-capitalize">{{ $tidak }}</td>


                                            </tr>
                                            @endforeach
                                            @endforeach
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
