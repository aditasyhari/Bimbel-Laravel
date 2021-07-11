@extends('frontend.master2')
@section('title')
Detail Kelas
@endsection
@section('content')
<div class="recent-area section-paddingt">
    <div class="container">
        <!-- section tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2 class="text-uppercase">kelas {{ $k->kategori_kelas }}</h2>
                </div>
            </div>
        </div>
        <section class="about-area them-2 pb-130 pt-50 recent-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-1">
                        <img class="rounded img-fluid img-thumbnail"
                            src="{{ asset('app-assets/images/thumbnail/kelas/'.$k->thumbnail) }}">
                    </div>
                    <div class="col-md-8">
                        <h3>{{ $k->nama_kelas }}</h3>
                        <span class="text-uppercase">{{ $k->kategori }}</span>
                        <p>
                            Rp {{ number_format($k->harga-50000, 0, ",",".") }}  + uang pendaftaran Rp 50.000
                        </p>
                        @auth
                            @if(Auth()->user()->role == 'siswa')
                                <form action="{{ url('keranjang') }}" method="GET">
                                    @csrf
                                    <input type="hidden" value="{{ $k->id }}" name="kelas[]">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fa fa-cart-plus"></i> Checkout
                                    </button>
                                </form>
                            @else
                                <span class="mt-3 text-info">Mohon maaf checkout hanya bisa dilakukan oleh siswa.</span>
                            @endif
                        @endauth
                        @guest
                            <a class="btn btn-primary btn-lg mb-3" disabled>
                                <i class="fa fa-cart-plus"></i> Checkout
                            </a>
                            <br>
                            <span class="mt-3 text-warning">Silahkan login terlebih dahulu.</span>
                        @endguest
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-8">
                        <ul class="nav nav-pills mb-2" id="myTab3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab"
                                    aria-controls="home" aria-selected="true"><i class="fa fa-info-circle"></i>
                                    Details</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="home3" role="tabpanel"
                                aria-labelledby="home-tab3">
                                <div class="card">
                                    <div class="card-body">
                                        <p>
                                            {!! $k->desc !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection
