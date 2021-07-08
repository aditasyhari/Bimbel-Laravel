@extends('frontend.master')
@section('title')
Kelas
@endsection
@section('content')
<div class="recent-area section-paddingt">
    <div class="container">
        <!-- section tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2>KELAS TERBATAS</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-recent-cap mb-30 ">
                    <div class="recent-img text-center" style="max-height: 300px">
                        <a href="{{ url('/detail-terbatas') }}"><img class="course-img" src="{{ url('img/sd.jpg') }}"
                                alt="Business Administration"></a>

                    </div>
                    <div class="recent-cap pb-5">
                        <span>SD / MI</span>
                        <h4><a href="{{ url('/detail-terbatas') }}">Kelas Untuk SD dan MI</a></h4>
                        <p>Siswa akan mendapatkan kaos, modul dan fasilitas kelas yang nyaman dengan AC</p>
                        <a href="{{ url('/detail-terbatas') }}" class="btn btn-primary float-right btn-sm"><i
                                class="fa "></i> Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-recent-cap mb-30 ">
                    <div class="recent-img text-center" style="max-height: 300px">
                        <a href="{{ url('/detail-terbatas') }}"><img class="course-img" src="{{ url('img/smp.png') }}"
                                alt="Sales 101"></a>

                    </div>
                    <div class="recent-cap pb-5">
                        <span>SMP / MTs</span>
                        <h4><a href="{{ url('/detail-terbatas') }}">Kelas Untuk SMP dan MTS</a></h4>
                        <p>Siswa akan mendapatkan kaos, modul dan fasilitas kelas yang nyaman dengan AC</p>
                        <a href="{{ url('/detail-terbatas') }}" class="btn btn-primary float-right btn-sm"><i
                                class="fa "></i> Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-recent-cap mb-30 ">
                    <div class="recent-img text-center" style="max-height: 300px">
                        <a href="{{ url('/detail-terbatas') }}"><img class="course-img" src="{{ url('img/sma.png') }}"
                                alt="Cold Calling Mastery"></a>
                    </div>
                    <div class="recent-cap pb-5">
                        <span>SMA / MA - IPA</span>
                        <h4><a href="{{ url('/detail-terbatas') }}">Kelas Untuk SMA – IPA </a></h4>
                        <p>Siswa akan mendapatkan kaos, modul dan fasilitas kelas yang nyaman dengan AC</p>
                        <a href="{{ url('/detail-terbatas') }}" class="btn btn-primary float-right btn-sm"><i
                                class="fa "></i> Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-recent-cap mb-30 ">
                    <div class="recent-img text-center" style="max-height: 300px">
                        <a href="{{ url('/detail-terbatas') }}"><img class="course-img" src="{{ url('img/sma.png') }}"
                                alt="Business Administration"></a>
                    </div>
                    <div class="recent-cap pb-5">
                        <span>SMA / MA - IPS</span>
                        <h4><a href="{{ url('/detail-terbatas') }}">Kelas Untuk SMA – IPS</a></h4>
                        <p>Siswa akan mendapatkan kaos, modul dan fasilitas kelas yang nyaman dengan AC</p>
                        <a href="{{ url('/detail-terbatas') }}" class="btn btn-primary float-right btn-sm"><i
                                class="fa "></i> Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-recent-cap mb-30 ">
                    <div class="recent-img text-center" style="max-height: 300px">
                        <a href="{{ url('/detail-terbatas') }}"><img class="course-img" src="{{ url('img/sbmptn.jpg') }}"
                                alt="Sales 101"></a>
                    </div>
                    <div class="recent-cap pb-5">
                        <span>SBMPTN</span>
                        <h4><a href="{{ url('/detail-terbatas') }}">Kelas Untuk SBMPTN</a></h4>
                        <p>Siswa akan mendapatkan kaos, modul dan fasilitas kelas yang nyaman dengan AC</p>
                        <a href="{{ url('/detail-terbatas') }}" class="btn btn-primary float-right btn-sm"><i
                                class="fa "></i> Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-recent-cap mb-30 ">
                    <div class="recent-img text-center" style="max-height: 300px">
                        <a href="{{ url('/detail-terbatas') }}"><img class="course-img" src="{{ url('img/dinas.jpg') }}"
                                alt="Cold Calling Mastery"></a>
                    </div>
                    <div class="recent-cap pb-5">
                        <span>KEDINASAN / IKATAN DINAS</span>
                        <h4><a href="{{ url('/detail-terbatas') }}">Kelas Untuk KEDINASAN / IKATAN DINAS</a></h4>
                        <p>Siswa akan mendapatkan kaos, modul dan fasilitas kelas yang nyaman dengan AC</p>
                        <a href="{{ url('/detail-terbatas') }}" class="btn btn-primary float-right btn-sm"><i
                                class="fa "></i> Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="recent-area section-paddingt">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2>KELAS REGULAR</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-recent-cap mb-30 ">
                    <div class="recent-img text-center" style="max-height: 300px">
                        <a href="{{ url('/detail-regular') }}"><img class="course-img" src="{{ url('img/sd.jpg') }}"
                                alt="Business Administration"></a>

                    </div>
                    <div class="recent-cap pb-5">
                        <span>SD / MI</span>
                        <h4><a href="{{ url('/detail-regular') }}">Kelas Untuk SD dan MI</a></h4>
                        <p>Siswa akan mendapatkan kaos, modul dan fasilitas kelas yang nyaman</p>
                        <a href="{{ url('/detail-regular') }}" class="btn btn-primary float-right btn-sm"><i
                                class="fa "></i> Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-recent-cap mb-30 ">
                    <div class="recent-img text-center" style="max-height: 300px">
                        <a href="{{ url('/detail-regular') }}"><img class="course-img" src="{{ url('img/smp.png') }}"
                                alt="Sales 101"></a>
                    </div>
                    <div class="recent-cap pb-5">
                        <span>SMP / MTs</span>
                        <h4><a href="{{ url('/detail-regular') }}">Kelas Untuk SMP dan MTS</a></h4>
                        <p>Siswa akan mendapatkan kaos, modul dan fasilitas kelas yang nyaman.</p>
                        <a href="{{ url('/detail-regular') }}" class="btn btn-primary float-right btn-sm"><i
                                class="fa "></i> Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-recent-cap mb-30 ">
                    <div class="recent-img text-center" style="max-height: 300px">
                        <a href="{{ url('/detail-regular') }}"><img class="course-img" src="{{ url('img/sma.png') }}"
                                alt="Cold Calling Mastery"></a>
                    </div>
                    <div class="recent-cap pb-5">
                        <span>SMA / MA - IPA</span>
                        <h4><a href="{{ url('/detail-regular') }}">Kelas Untuk SMA – IPA </a></h4>
                        <p>Siswa akan mendapatkan kaos, modul dan fasilitas kelas yang nyaman</p>
                        <a href="{{ url('/detail-regular') }}" class="btn btn-primary float-right btn-sm"><i
                                class="fa "></i> Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-recent-cap mb-30 ">
                    <div class="recent-img text-center" style="max-height: 300px">
                        <a href="{{ url('/detail-regular') }}"><img class="course-img" src="{{ url('img/sma.png') }}"
                                alt="Business Administration"></a>
                    </div>
                    <div class="recent-cap pb-5">
                        <span>SMA / MA - IPS</span>
                        <h4><a href="{{ url('/detail-regular') }}">Kelas Untuk SMA – IPS</a></h4>
                        <p>Siswa akan mendapatkan kaos, modul dan fasilitas kelas yang nyaman</p>
                        <a href="{{ url('/detail-regular') }}" class="btn btn-primary float-right btn-sm"><i
                                class="fa "></i> Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-recent-cap mb-30 ">
                    <div class="recent-img text-center" style="max-height: 300px">
                        <a href="{{ url('/detail-regular') }}"><img class="course-img" src="{{ url('img/sbmptn.jpg') }}"
                                alt="Sales 101"></a>
                    </div>
                    <div class="recent-cap pb-5">
                        <span>SBMPTN</span>
                        <h4><a href="{{ url('/detail-regular') }}">Kelas Untuk SBMPTN</a></h4>
                        <p>Siswa akan mendapatkan kaos, modul dan fasilitas kelas yang nyaman</p>
                        <a href="{{ url('/detail-regular') }}" class="btn btn-primary float-right btn-sm"><i
                                class="fa "></i> Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-recent-cap mb-30 ">
                    <div class="recent-img text-center" style="max-height: 300px">
                        <a href="{{ url('/detail-regular') }}"><img class="course-img" src="{{ url('img/dinas.jpg') }}"
                                alt="Cold Calling Mastery"></a>
                    </div>
                    <div class="recent-cap pb-5">
                        <span>KEDINASAN / IKATAN DINAS</span>
                        <h4><a href="{{ url('/detail-regular') }}">Kelas Untuk KEDINASAN / IKATAN DINAS</a></h4>
                        <p>Siswa akan mendapatkan kaos, modul dan fasilitas kelas yang nyaman</p>
                        <a href="{{ url('/detail-regular') }}" class="btn btn-primary float-right btn-sm"><i
                                class="fa "></i> Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
