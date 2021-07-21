@extends('pengguna.layouts.master')

@section('title')
Dashboard Siswa
@endsection

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
                    <div class="row mb-5 mt-2">
                        <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{asset('img/logo-sma.png')}}" class="img-fluid" alt="product image">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <h5>Kelas SMA - IPA
                            </h5>
                            <p class="text-muted">Regular</p>
                            <div class="ecommerce-details-price d-flex flex-wrap">

                                <p class="text-primary font-medium-3 mr-1 mb-0">Rp. 800.000</p>
                                
                            </div>
                            <hr>
                            <p>Keterangan iki bos photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel
                                full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful
                                films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V
                                24-70mm lens kit.</p>
                          </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection('content')
