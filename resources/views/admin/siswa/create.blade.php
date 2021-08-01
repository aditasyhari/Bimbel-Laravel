@extends('admin.layouts.master')
@section('title')
Create Siswa
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
                            <h4 class="card-title">Tambah Data Siswa</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" action="{{ route('siswa.store') }}" method="POST">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Name</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="name" placeholder="Masukan Nama User">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Email</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="email" id="email-id" class="form-control"
                                                            name="email" placeholder="Masukan Email User">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Password</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="password" id="password" class="form-control"
                                                            name="password" placeholder="Masukan Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Konfirmasi Password</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="password" id="password_confirmasion"
                                                            class="form-control" name="password_confirmation"
                                                            placeholder="Konfirmasi Password">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                <button type="reset"
                                                    class="btn btn-outline-warning mr-1 mb-1">Reset</button>
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
