@extends('pengguna.layouts.master')
@section('title')
Transaksi Siswa
@endsection
@push('plugin-styles')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/file-uploaders/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/data-list-view.css')}}">

<style>
button.btn.btn-outline-primary {
    display: none;
}
</style>
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
                        <h5 class="mt-1 mb-1 pl-2 pr-2">Riwayat Transaksi</h5>
                    </div>
                </div>
            </div>
            <!-- dataTable starts -->
            <div class="table-responsive">
                <table id="myTable" class="table data-thumb-view">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Bukti Transfer</th>
                            <th>Kelas</th>
                            <th>Kategori</th>
                            <th>Kategori Kelas</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transaksi as $t)
                        <?php
                            $k = \App\Kelas::find($t->kelas_id);
                        ?>
                        <tr>
                            <td></td>
                            <td class="product-img">
                                @if($t->bukti == '')
                                    <h6>Belum Ada</h6>
                                @else
                                    <img src="{{asset('app-assets/images/elements/bukti-tf/'.$t->bukti)}}" alt="Bukti Transfer" style="max-width: 70px; height: auto;"><br>
                                    <a class="mt-1 btn btn-sm btn-primary" href="{{asset('app-assets/images/elements/bukti-tf/'.$t->bukti)}}" target="_blank" rel="noopener noreferrer">Lihat</a>

                                @endif
                            </td>
                            <td class="product-name">{{ $k->nama_kelas }}</td>
                            <td class="product-category">{{ $k->kategori }}</td>
                            <td>
                                <?php
                                    if($k->kategori_kelas == 'terbatas') {
                                        $chip = 'chip-warning';
                                    } else {
                                        $chip = 'chip-primary';
                                    }
                                ?>
                                
                                <div class="chip {{ $chip }}">
                                    <div class="chip-body">
                                        <div class="chip-text text-capitalize">{{ $k->kategori_kelas }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">Rp {{ number_format($k->harga, 0, ",",".") }}</td>
                            <td class="text-capitalize">{{ $t->status_bayar }}</td>
                            <td>
                                @if($t->status_bayar == 'lunas')
                                    <div class="text-success">Sudah Dibayar</div>
                                @else
                                    <form id="form-bukti{{$t->id}}" action="{{ url('/siswa/transaksi') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="input-group">
                                            <div class="custom-file" style="max-width: 180px;">
                                                <input type="hidden" value="{{ $t->id }}" name="id">
                                                <input type="file" class="custom-file-input" name="bukti" accept="image/*" onchange="$('#form-bukti{{$t->id}}').submit()">
                                                <label class="custom-file-label">Upload Bukti</label>
                                            </div>
                                        </div>
                                    </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
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

@if(session('status'))
    <script>
        $(function() {
            $('#staticBackdrop').modal('show');
        });
    </script>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Berhasil !!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                {{ session('status') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
    </div>
@endif
@endpush