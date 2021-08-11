<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                </div>
                <ul class="nav navbar-nav float-right">

                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                class="ficon feather icon-maximize"></i></a></li>
                                <li class="dropdown dropdown-notification nav-item">
                        <?php
                            $hitung_notif = \App\Transaksi::where([
                                                ['status_bayar', 'lunas'],
                                                ['user_read', false]
                                            ])
                                            ->orWhere('status_bayar', 'ditolak')
                                            ->where('user_id', Auth()->user()->id)
                                            ->orderBy('updated_at', 'desc')->count();
                            $notifikasi = \App\Transaksi::where([
                                                ['status_bayar', 'lunas'],
                                                ['user_read', false]
                                            ])
                                            ->orWhere('status_bayar', 'ditolak')
                                            ->where('user_id', Auth()->user()->id)
                                            ->orderBy('updated_at', 'desc')
                                            ->take('5')
                                            ->get();
                        ?>
                        <a class="nav-link nav-link-label" href="#"
                            data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
                                class="badge badge-pill badge-primary badge-up">{{ $hitung_notif }}</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header m-0 p-2">
                                    <h3 class="white">{{ $hitung_notif }}</h3><span class="notification-title">
                                        Notifikasi Baru</span>
                                </div>
                            </li>
                            <li class="scrollable-container media-list">
                                @foreach($notifikasi as $notif)
                                <div class="d-flex justify-content-between">
                                    <div class="media d-flex align-items-start">
                                        <?php
                                            $kelas = \App\Kelas::find($notif->kelas_id);
                                        ?>
                                        <div class="media-left"><i
                                                class="feather icon-plus-square font-medium-5 primary"></i></div>
                                        <div class="media-body">
                                            <h6 class="primary media-heading text-capitalize">
                                            @if($notif->status_bayar == 'ditolak')
                                                <span class="text-danger">{{ $notif->status_bayar }}</span>
                                            @else
                                                <span class="text-success">{{ $notif->status_bayar }}</span>
                                            @endif
                                            </h6>
                                            <small class="notification-text">
                                                {{ $kelas->nama_kelas }} - {{ $kelas->kategori_kelas }}
                                            </small>
                                        </div><small>
                                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">{{ $notif->updated_at }}</time></small>
                                    </div>
                                </div>
                                @endforeach
                            </li>
                            <li class="dropdown-menu-footer">
                            @if($hitung_notif > 0)
                                <a class="dropdown-item p-1 text-center" href="{{ url('/siswa/transaksi') }}">Lihat</a>
                                <a class="dropdown-item p-1 text-center" onclick="event.preventDefault();document.getElementById('tandai-form').submit();">Tandai Lunas Notif</a>
                                <form id="tandai-form" action="{{ route('SiswaTandaiLihat') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @endif
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                            href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{ Auth()->user()->name }}</span><span class="user-status">{{ Auth()->user()->role }}</span></div><span><img class="round"
                                    src="{{asset('app-assets/images/portrait/small/'.Auth()->user()->profileUser->foto)}}" alt="avatar"
                                    height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('profile.index') }}"><i class="feather icon-user"></i> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                    class="feather icon-power"></i> Logout</a>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- 
<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a class="pb-25" href="#">
            <h6 class="text-primary mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="{{asset('app-assets/images/icons/xls.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                        Manager</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="{{asset('app-assets/images/icons/jpg.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="{{asset('app-assets/images/icons/pdf.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                        Marketing Manager</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="{{asset('app-assets/images/icons/doc.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a class="pb-25" href="#">
            <h6 class="text-primary mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="{{asset('app-assets/images/portrait/small/avatar-s-8.jpg')}}"
                        alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="{{asset('app-assets/images/portrait/small/avatar-s-1.jpg')}}"
                        alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="{{asset('app-assets/images/portrait/small/avatar-s-14.jpg')}}"
                        alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                        Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="{{asset('app-assets/images/portrait/small/avatar-s-6.jpg')}}"
                        alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No
                    results found.</span></div>
        </a></li>
</ul> -->
