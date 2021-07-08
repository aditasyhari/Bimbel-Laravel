<!doctype html>
<html class="no-js" lang="">

<head>
    <title>
        @yield('title')
    </title>
    @include('frontend.head')
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ url('img/logo.png') }}">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        @include('frontend.header')
    </header>

    <main>
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center"
                data-background="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/img/hero/contact_hero.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Detail Kelas</h2>
                                <p class="crumb">
                                    <span><a href="#">Home</a></span>
                                    <span>/</span>
                                    <span><a href="#">Kelas</a></span>
                                    <span>/</span>
                                    <span><a href="#">Detail Kelas</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')
    </main>

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding" id="contact">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="">
                                        <img src="{{ url('img/logo.png') }}">
                                    </a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Lembaga Bimbingan Belajar yang dipercaya sejak dulu!!</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Kontak</h4>
                                <ul>
                                    <li><a href="#">08125909773</a></li>

                                    <li><a href="https://www.instagram.com/dasapratamakertosono/">Instagram</a></li>

                                    <li><a href="#">
                                            <p>Jl. Dewi Sartika No. 8A, Banaran Kertosono</p>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p>© 2021 Lembaga Bimbingan Belajar Dasapratama
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    @include('frontend.script')

</body>

</html>
