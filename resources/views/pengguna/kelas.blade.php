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
                            <h4 class="card-title">Kelas Yang diBeli</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead class="">
                                            <tr>
                                                <th></th>
                                                <th>Nama</th>
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
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ Auth()->user()->profileUser->nama }}</td>
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

<script>
    function kelas(id) {
        window.location.href = "{!! url('/kelas/"+id+"') !!}"
    }
</script>
@endpush