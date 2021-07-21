@extends('admin.layouts.master')
@section('title')
    Update Siswa SD
@endsection
@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-body">
        <!-- Basic Horizontal form layout section start -->
        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Data Siswa SD</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Name</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="text" id="first-name" class="form-control" name="fname" placeholder="Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Email</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="email" id="email-id" class="form-control" name="email-id" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Kelas</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="text" id="contact-info" class="form-control" name="contact" placeholder="Kelas">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Kategori</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="text" id="contact-info" class="form-control" name="contact" placeholder="Kategori">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Tanggal Daftar</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="text" id="password" class="form-control" name="password" placeholder="Tanggal Daftar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">Update</button>
                                                <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic Horizontal form layout section end -->
    </div>
</div>
@endsection