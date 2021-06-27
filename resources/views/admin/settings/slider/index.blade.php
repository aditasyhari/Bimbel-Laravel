@extends('admin.layouts.master')
@section('title')
Slider Carousel
@endsection
@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-body">

        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Slider Carousel</h4>
                        <button type="button" class="btn btn-icon btn-outline-primary mr-1 mb-1" title="Tambah"><i class="feather icon-plus"></i></button>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td><img src="{{asset('app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder"></td>
                                        <td>Apa Hayo</td>
                                        <td>
                                            <p>
                                                hahahahaha apa hayo
                                            </p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-primary mr-1 mb-1" title="edit"><i class="feather icon-edit"></i></button>
                                            <button type="button" class="btn btn-icon btn-outline-danger mr-1 mb-1" title="hapus"><i class="feather icon-trash-2"></i></button>
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
</div>
@endsection
