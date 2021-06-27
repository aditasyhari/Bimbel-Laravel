{{-- <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true"> --}}
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template/index.html">
                        {{-- <div class="brand-logo"></div> --}}
                        <h2 class="brand-text mb-0">Dasapratama</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item active"><a href="{{url('dashboard')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <li class=" navigation-header"><span>Apps</span>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <i class="feather icon-user"></i><span class="menu-title" data-i18n="User">Kelas</span>
                    </a>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="User">Absen</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ url('/user-list') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">List</span></a>
                        </li>
                        <li><a href="{{ url('/user-view') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">View</span></a>
                        </li>
                        <li><a href="{{ url('/user-edit') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Edit</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Miscellaneous">Jadwal</span></a>
                    <ul class="menu-content">
                        <li><a href="page-coming-soon.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Coming Soon">Coming Soon</span></a>
                        </li>
                        <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Error">Error</span></a>
                            <ul class="menu-content">
                                <li><a href="error-404.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="404">404</span></a>
                                </li>
                                <li><a href="error-500.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="500">500</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="page-not-authorized.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Not Authorized">Not Authorized</span></a>
                        </li>
                        <li><a href="page-maintenance.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Maintenance">Maintenance</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        