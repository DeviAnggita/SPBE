<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Sistem Manajemen Pengetahuan SPBE | Kominfo Sukoharjo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="Version" content="v4.0.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/brands/sukoharjo.png" width="30" height="35" class=""
        viewBox="0 0 30 30" fill="none" />
    <!-- Bootstrap -->
    <link href="assets/user/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- tobii css -->
    <link href="assets/user/css/tobii.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="assets/user/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Slider -->
    <link rel="stylesheet" href="assets/user/css/tiny-slider.css" />
    <!-- Main Css -->
    <link href="assets/user/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="assets/user/css/colors/default.css" rel="stylesheet" id="color-opt">
</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="{{ route('home.index') }}">
                <span class="logo-light-mode">
                    <img src="assets/user/images/kominfo-dark.png" class="l-dark" height="60" width="200"
                        alt="">
                    <img src="assets/user/images/kominfo-light.png" class="l-light" height="60" width="200"
                        alt="">
                </span>
                <img src="assets/user/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
            </a>

            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <!--Login button Start-->
            @if (Auth::check() == true)
                <ul class="buy-button list-inline mb-0">
                    <div class="login-btn-primary">
                        <div class="btn-group dropdown-primary">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->nama_pegawai }}
                            </button>
                            <div class="dropdown-menu" style="height: 40px">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    style="position: relative; bottom: 28px">Logout</a>
                            </div>
                        </div>
                    </div>
                    <div class="login-btn-light">
                        <div class="btn-group dropdown-success">
                            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->nama_pegawai }}
                            </button>
                            <div class="dropdown-menu" style="height: 40px">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    style="position: relative; bottom: 28px">Logout</a>
                            </div>
                        </div>
                    </div>
                </ul>
            @else
                <ul class="buy-button list-inline mb-0">
                    <a href="{{ route('login') }}">
                        <div class="login-btn-primary"><span class="btn btn-pills btn-primary">Login</span></div>
                        <div class="login-btn-light"><span class="btn btn-pills btn-light">Login</span></div>
                    </a>
                </ul>
            @endif

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-light">
                    <li><a href="{{ route('home.index') }}" class="sub-menu-item">Home</a></li>
                    <li><a href="{{ route('inovasiuser.index') }}" class="sub-menu-item">Inovasi</a></li>
                    <li><a href="{{ route('artikeluser.index') }}" class="sub-menu-item">Artikel</a></li>
                    <li><a href="{{ route('forum-diskusi.index') }}" target="_blank" class="sub-menu-item">Forum
                            Diskusi</a>
                    </li>
                    <li><a href="{{ route('contact') }}" class="sub-menu-item">Contact</a></li>
                </ul>
                <!--end navigation menu-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="bg-half-170 pb-0 bg-primary d-table w-100"
        style="background: url('images/bg2.png') center center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="title-heading mb-md-5 pb-md-5">
                        <h4 class="heading text-white mb-3 title-dark"> Sistem Manajemen <br> Pengetahuan SPBE </h4>
                        <p class="para-desc text-white-50">Sistem Manajemen Pengetahuan SPBE adalah sistem berbasis
                            teknologi informasi yang digunakan untuk melakukan pengelolaan atas pengetahuan pada tiap
                            tahapan, baik saat perolehan, penyimpanan, pengambilan kembali, pemanfaatan maupun
                            penyempurnaannya.</p>
                        @if (Auth::check() == true)
                            <div></div>
                        @else
                            <div class="mt-4 pt-2">
                                <a href="{{ route('login') }}" class="btn btn-pills btn-light">Login</a>
                            </div>
                        @endif
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-6 mt-5 mt-sm-0">
                    <img src="assets/user/images/gedung-kominfo.png" style="width: 15cm; height: 15.6cm;"
                        class="img-fluid" alt="">
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Manajemen Pengetahuan <span class="text-primary">SPBE</span> ?</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Serangkaian proses untuk mencapai
                            penerapan SPBE yang efektif, efisien, dan berkesinambungan, serta layanan
                            SPBE yang berkualitas.</p>
                        <p class="text-muted para-desc mb-0 mx-auto">Manajemen SPBE, terdiri dari :</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div
                        class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-exclamation-triangle"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Risiko</h5>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-exclamation-triangle"></i>
                        </span>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div
                        class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-lock-alt"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Keamanan Informasi</h5>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-lock-alt"></i>
                        </span>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div
                        class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-file-alt"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Data</h5>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-file-alt"></i>
                        </span>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div
                        class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-rocket"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Aset TIK</h5>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-rocket"></i>
                        </span>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div
                        class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-users-alt"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Sumber Daya Manusia</h5>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-users-alt"></i>
                        </span>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div
                        class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-lightbulb-alt"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Pengetahuan</h5>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-lightbulb-alt"></i>
                        </span>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div
                        class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-process"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Perubahan</h5>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-process"></i>
                        </span>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 mt-4 pt-2" style="margin-bottom: 70px;">
                    <div
                        class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-phone"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Layanan SPBE</h5>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-phone"></i>
                        </span>
                    </div>
                </div>
                <!--end col-->

            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">Inovasi <span class="text-primary">SPBE</span> ?</h4>
                        <p class="text-muted para-desc mx-auto" style="margin-bottom: 100px">Proses pemanfaatan
                            pengetahuan, keterampilan dan pengalaman untuk menciptakan atau mengembangkan layanan SPBE.
                        </p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="features feature-primary text-center">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-wifi h1 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5><a href="#" class="text-dark">Infrastruktur</a></h5>
                            <p class="text-muted mb-0">Tahapan dalam mengelola,
                                memelihara atau mengembangkan
                                infrastruktur jaringan intra
                                pemerintah.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 col-12 mt-5 mt-sm-0">
                    <div class="features feature-primary text-center">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-apps h1 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5><a href="#" class="text-dark">Aplikasi</a></h5>
                            <p class="text-muted mb-0">Tahapan perencanaan dan
                                pengembangan aplikasi khusus
                                SPBE.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 col-12 mt-5 mt-sm-0">
                    <div class="features feature-primary text-center">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-shield-check h1 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5><a href="#" class="text-dark">Keamanan</a></h5>
                            <p class="text-muted" style="margin-bottom: 60px">Tahapan mengatasi permasalahan
                                keamanan informasi dalam penerapan SPBE.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center mb-4 pb-2">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-start">
                        <h6 class="text-primary">Artikel</h6>
                        <h4 class="title mb-4 mb-lg-0">Reads Our Latest <br>Artikel</h4>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                @if (Auth::check() == true)
                    @foreach ($artikels_log as $artikel)
                        <div class="col-lg-4 col-md-6 mt-4 pt-2">
                            <div class="card blog blog-primary rounded border-0 shadow">
                                <div class="position-relative">
                                    <img src="assets/cover/{{ $artikel->cover }}" class="card-img-top rounded-top"
                                        alt="...">
                                    <div class="overlay rounded-top"></div>
                                </div>
                                <div class="card-body content" style="height: 3.5cm">
                                    <h6 class="kategori text-primary">{{ $artikel->nama_kategori }}</h6>
                                    <h5><a href="javascript:void(0)"
                                            class="card-title title text-dark">{{ $artikel->judul_artikel }}</a>
                                    </h5>
                                </div>
                                <div class="post-meta text-end mb-2">
                                    <a href="{{ route('artikeluser.show', $artikel->id_artikel) }}"
                                        class="text-muted readmore">Read More <i
                                            class="uil uil-angle-right-b align-middle"></i></a>
                                </div>
                                <div class="author">
                                    <small class="text-light user d-block"><i class="uil uil-user"></i>
                                        {{ $artikel->nama_pegawai }}</small>
                                    <small class="text-light date"><i class="uil uil-calendar-alt"></i>
                                        {{ $artikel->publish_at }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--end col-->
                @else
                    @foreach ($artikels as $artikel)
                        <div class="col-lg-4 col-md-6 mt-4 pt-2">
                            <div class="card blog blog-primary rounded border-0 shadow">
                                <div class="position-relative">
                                    <img src="assets/cover/{{ $artikel->cover }}" class="card-img-top rounded-top"
                                        alt="...">
                                    <div class="overlay rounded-top"></div>
                                </div>
                                <div class="card-body content" style="height: 3.5cm">
                                    <h6 class="kategori text-primary">{{ $artikel->nama_kategori }}</h6>
                                    <h5><a href="javascript:void(0)"
                                            class="card-title title text-dark">{{ $artikel->judul_artikel }}</a>
                                    </h5>
                                </div>
                                <div class="post-meta text-end mb-2">
                                    <a href="{{ route('artikeluser.show', $artikel->id_artikel) }}"
                                        class="text-muted readmore">Read More <i
                                            class="uil uil-angle-right-b align-middle"></i></a>
                                </div>
                                <div class="author">
                                    <small class="text-light user d-block"><i class="uil uil-user"></i>
                                        {{ $artikel->nama_pegawai }}</small>
                                    <small class="text-light date"><i class="uil uil-calendar-alt"></i>
                                        {{ $artikel->publish_at }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--end col-->
                @endif
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-py-60">
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                <a href="{{ route('home.index') }}" class="logo-footer">
                                    <img src="assets/user/images/kominfo-light.png" height="60" width="200"
                                        alt="">
                                </a>
                                <p class="mt-4">Dinas Komunikasi dan Informatika Kabupaten Sukoharjo adalah
                                    Organisasi Perangkat Daerah yang di bentuk untuk menyelenggarakan urusan
                                    Pemerintahan bidang komunikasi dan informatika, bidang persandian, dan bidang
                                    statistik.</p>
                                <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/diskominfo.skh/"
                                            class="rounded"><i data-feather="instagram"
                                                class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                </ul>
                                <!--end icon-->
                            </div>
                            <!--end col-->
                            <div class="col-lg-2 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                            </div>
                            <!--end col-->

                            <div class="col-lg-4 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Contact</h5>
                                <div class="d-flex mt-4">
                                    <div class="features feature-primary feature-clean">
                                        <div class="text-center icons mx-auto">
                                            <i class="uil uil-map-marker d-block rounded h4 mb-0"></i>
                                        </div>
                                    </div>
                                    <div class="content mt-2" style="margin-left: 20px">
                                        <a class="text-foot">Jl. Jenderal Sudirman Nomor 199 Sukoharjo</a>
                                    </div>
                                </div>
                                <div class="d-flex mt-4">
                                    <div class="features feature-primary feature-clean">
                                        <div class="text-center icons mx-auto">
                                            <i class="uil uil-phone d-block rounded h4 mb-0"></i>
                                        </div>
                                    </div>
                                    <div class="content mt-2" style="margin-left: 20px">
                                        <a class="text-foot">0271 593068 ext. (1522) Fax 0271 593335</a>
                                    </div>
                                </div>
                                <div class="d-flex mt-4">
                                    <div class="features feature-primary feature-clean">
                                        <div class="text-center icons mx-auto">
                                            <i class="uil uil-envelope d-block rounded h4 mb-0"></i>
                                        </div>
                                    </div>
                                    <div class="conten mt-3" style="margin-left: 20px">
                                        <a class="text-foot">diskominfo@sukoharjokab.go.id</a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="footer-py-30 footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-start">
                            <p class="mb-0">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Sistem Manajemen Pengetahuan SBPE, by <a
                                    href="https://diskominfo.sukoharjokab.go.id/" target="_blank"
                                    class="text-reset">Kominfo Sukoharjo</a>.
                            </p>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled text-sm-end mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="assets/user/images/payments/american-ex.png" class="avatar avatar-ex-sm"
                                        title="American Express" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="assets/user/images/payments/discover.png" class="avatar avatar-ex-sm"
                                        title="Discover" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="assets/user/images/payments/master-card.png" class="avatar avatar-ex-sm"
                                        title="Master Card" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="assets/user/images/payments/paypal.png" class="avatar avatar-ex-sm"
                                        title="Paypal" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="assets/user/images/payments/visa.png" class="avatar avatar-ex-sm"
                                        title="Visa" alt=""></a></li>
                        </ul>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Offcanvas Start -->
    <div class="offcanvas offcanvas-end bg-white shadow" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header p-4 border-bottom">
            <h5 id="offcanvasRightLabel" class="mb-0">
                <img src="assets/user/images/logo-dark.png" height="24" class="light-version" alt="">
                <img src="assets/user/images/logo-light.png" height="24" class="dark-version" alt="">
            </h5>
            <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas"
                aria-label="Close"><i class="uil uil-times fs-4"></i></button>
        </div>
        <div class="offcanvas-body p-4">
            <div class="row">
                <div class="col-12">
                    <img src="assets/user/images/contact.svg" class="img-fluid d-block mx-auto"
                        style="max-width: 256px;" alt="">
                    <div class="card border-0 mt-5" style="z-index: 1">
                        <div class="card-body p-0">
                            <form method="post" name="myForm" onsubmit="return validateForm()">
                                <p id="error-msg" class="mb-0"></p>
                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Name <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input name="name" id="name" type="text"
                                                    class="form-control ps-5" placeholder="Name :">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input name="email" id="email" type="email"
                                                    class="form-control ps-5" placeholder="Email :">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Subject</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="book" class="fea icon-sm icons"></i>
                                                <input name="subject" id="subject" class="form-control ps-5"
                                                    placeholder="subject :">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Comments <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="message-circle"
                                                    class="fea icon-sm icons clearfix"></i>
                                                <textarea name="comments" id="comments" rows="4" class="form-control ps-5" placeholder="Message :"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" id="submit" name="send"
                                                class="btn btn-primary">Send Message</button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>

        <div class="offcanvas-footer p-4 border-top text-center">
            <ul class="list-unstyled social-icon social mb-0">
                <li class="list-inline-item mb-0"><a href="https://1.envato.market/landrick" target="_blank"
                        class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank"
                        class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i
                            class="uil uil-envelope align-middle" title="email"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://shreethemes.in" target="_blank"
                        class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
            </ul>
            <!--end icon-->
        </div>
    </div>
    <!-- Offcanvas End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up"
            class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->

    <!-- Style switcher -->
    <div id="style-switcher" class="bg-light border p-3 pt-2 pb-2" onclick="toggleSwitcher()">
        <div>
            <h6 class="title text-center">Select Your Color</h6>
            <ul class="pattern">
                <li class="list-inline-item">
                    <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
                </li>
                <li class="list-inline-item">
                    <a class="color2" href="javascript: void(0);" onclick="setColor('green')"></a>
                </li>
                <li class="list-inline-item">
                    <a class="color3" href="javascript: void(0);" onclick="setColor('purple')"></a>
                </li>
                <li class="list-inline-item">
                    <a class="color4" href="javascript: void(0);" onclick="setColor('red')"></a>
                </li>
                <li class="list-inline-item">
                    <a class="color5" href="javascript: void(0);" onclick="setColor('skyblue')"></a>
                </li>
                <li class="list-inline-item">
                    <a class="color6" href="javascript: void(0);" onclick="setColor('skobleoff')"></a>
                </li>
                <li class="list-inline-item">
                    <a class="color7" href="javascript: void(0);" onclick="setColor('cyan')"></a>
                </li>
                <li class="list-inline-item">
                    <a class="color8" href="javascript: void(0);" onclick="setColor('slateblue')"></a>
                </li>
            </ul>

            <h6 class="title text-center pt-3 mb-0 border-top">Theme Option</h6>
            <ul class="text-center list-unstyled">
                <li class="d-grid"><a href="javascript:void(0)"
                        class="btn btn-sm btn-block btn-primary rtl-version t-rtl-light mt-2"
                        onclick="setTheme('style-rtl')">RTL</a></li>
                <li class="d-grid"><a href="javascript:void(0)"
                        class="btn btn-sm btn-block btn-primary ltr-version t-ltr-light mt-2"
                        onclick="setTheme('style')">LTR</a></li>
                <li class="d-grid"><a href="javascript:void(0)"
                        class="btn btn-sm btn-block btn-primary dark-rtl-version t-rtl-dark mt-2"
                        onclick="setTheme('style-dark-rtl')">RTL</a></li>
                <li class="d-grid"><a href="javascript:void(0)"
                        class="btn btn-sm btn-block btn-primary dark-ltr-version t-ltr-dark mt-2"
                        onclick="setTheme('style-dark')">LTR</a></li>
                <li class="d-grid"><a href="javascript:void(0)"
                        class="btn btn-sm btn-block btn-dark dark-version t-dark mt-2"
                        onclick="setTheme('style-dark')">Dark</a></li>
                <li class="d-grid"><a href="javascript:void(0)"
                        class="btn btn-sm btn-block btn-dark light-version t-light mt-2"
                        onclick="setTheme('style')">Light</a></li>
            </ul>

            <h6 class="title text-center pt-3 mb-0 border-top">Admin</h6>
            <ul class="text-center list-unstyled mb-0">
                <li><a href="../dashboard/index.html" target="_blank"
                        class="btn btn-sm btn-block btn-success mt-2">Admin Dashboard</a></li>
            </ul>
        </div>
    </div>
    <!-- end Style switcher -->

    <!-- javascript -->
    <script src="assets/user/js/bootstrap.bundle.min.js"></script>
    <!-- SLIDER -->
    <script src="assets/user/js/tiny-slider.js "></script>
    <!-- tobii js -->
    <script src="assets/user/js/tobii.min.js "></script>
    <!-- Icons -->
    <script src="assets/user/js/feather.min.js"></script>
    <!-- Main Js -->
    <script src="assets/user/js/plugins.init.js"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="assets/user/js/app.js"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>

</html>
