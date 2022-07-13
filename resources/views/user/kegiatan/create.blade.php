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
    <link rel="shortcut icon" href="../../assets/images/brands/sukoharjo.png" width="30" height="35"
        class="" viewBox="0 0 30 30" fill="none" />
    <!-- Bootstrap -->
    <link href="../../assets/user/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="../../assets/user/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Main Css -->
    <link href="../../assets/user/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="../../assets/user/css/colors/default.css" rel="stylesheet" id="color-opt">

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
                    <img src="../../assets/user/images/kominfo-dark.png" class="logo-light-mode" height="60"
                        width="200" alt="">
                    <img src="../../assets/user/images/kominfo-light.png" class="logo-dark-mode" height="60"
                        width="200" alt="">
                </span>
                <img src="../../assets/user/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
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
            <ul class="buy-button list-inline mb-0">
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
            </ul>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li><a href="{{ route('home.index') }}" class="sub-menu-item">Home</a></li>
                    <li><a href="{{ route('inovasiuser.index') }}" class="sub-menu-item">Inovasi</a></li>
                    <li><a href="{{ route('artikeluser.index') }}" class="sub-menu-item">Artikel</a></li>
                    <li><a href="{{ route('forum-diskusi.index') }}" target="_blank" class="sub-menu-item">Forum Diskusi</a></li>
                    <li><a href="{{ route('contact') }}" class="sub-menu-item">Contact</a></li>
                </ul>
                <!--end navigation menu-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="bg-half-170 bg-light d-table w-100">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading">
                        <h4 class="title mb-0"> Kegiatan </h4>
                        <h4 class="text-primary"> {{ $inovasi->judul_inovasi }} </h4>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb bg-white rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('inovasiuser.index') }}">Inovasi</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('inovasiuser.show', $inovasi->id_inovasi) }}">My Inovasi</a></li>
                        <li class="breadcrumb-item text-primary">Add Kegiatan</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-10">
                <h3 class="mb-4 text-primary">Add Kegiatan</h4>
                    <form action="{{ route('kegiatanuser.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3" hidden>
                            <label class="form-label" style="font-size: 16px" for="">Author</label>
                            <input type="text" class="form-control @error('id_user') is-invalid @enderror"
                                name="id_user" id="id_user" aria-describedby="helpId" placeholder=""
                                value="{{ Auth::user()->id_user }}">
                            @error('id_user')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3" hidden>
                            <label class="form-label" style="font-size: 16px" for="">Id Inovasi</label>
                            <input type="text" class="form-control @error('id_inovasi') is-invalid @enderror"
                                name="id_inovasi" id="id_inovasi" aria-describedby="helpId" placeholder=""
                                value="{{ $inovasi->id_inovasi }}">
                            @error('id_inovasi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" style="font-size: 16px" for="">Judul Kegiatan</label>
                            <input type="text" class="form-control @error('judul_kegiatan') is-invalid @enderror"
                                name="judul_kegiatan" id="judul_kegiatan" aria-describedby="helpId" placeholder="">
                            @error('judul_kegiatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" style="font-size: 16px" for="">Latar Belakang</label>
                            <textarea id="latarbelakangkegiatan" class="form-control @error('latar_belakang_kegiatan') is-invalid @enderror"
                                name="latar_belakang_kegiatan" id="latar_belakang_kegiatan" rows="3"></textarea>
                            @error('latar_belakang_kegiatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" style="font-size: 16px" for="">Deskripsi
                                Kegiatan</label>
                            <textarea id="deskripsikegiatan" class="form-control @error('deskripsi_kegiatan') is-invalid @enderror"
                                name="deskripsi_kegiatan" id="deskripsi_kegiatan" rows="3"></textarea>
                            @error('deskripsi_kegiatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" style="font-size: 16px" for="">Tujuan Kegiatan</label>
                            <textarea id="tujuankegiatan" class="form-control @error('tujuan_kegiatan') is-invalid @enderror"
                                name="tujuan_kegiatan" id="tujuan_kegiatan" rows="3"></textarea>
                            @error('tujuan_kegiatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" style="font-size: 16px" class="form-label"
                                style="font-size: 16px" for="exampleInputdatetime">Tanggal Publish</label>
                            <input type="datetime-local" class="form-control" name="publish_at" id="publish_at"
                                value="{{ date('Y-m-d H:i:s') }}">
                            @error('publish_at')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" style="font-size: 16px" for="Lampiran"
                                class="form-label custom-file-input">Lampiran</label>
                            <input class="form-control @error('lampiran_inovasi') is-invalid @enderror" type="file"
                                name="lampiran_kegiatan" id="lampiran_kegiatan">
                            @error('lampiran_kegiatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" style="font-size: 16px" for="cover"
                                class="form-label custom-file-input">Cover</label>
                            <input class="form-control @error('cover') is-invalid @enderror" type="file"
                                name="cover" id="cover">
                            @error('cover')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="button text-end mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-py-60">
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                <a href="{{ route('home.index') }}" class="logo-footer">
                                    <img src="../../assets/user/images/kominfo-light.png" height="60"
                                        width="200" alt="">
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
                                        src="../assets/user/images/payments/american-ex.png"
                                        class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="../assets/user/images/payments/discover.png" class="avatar avatar-ex-sm"
                                        title="Discover" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="../assets/user/images/payments/master-card.png"
                                        class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="../assets/user/images/payments/paypal.png" class="avatar avatar-ex-sm"
                                        title="Paypal" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img
                                        src="../assets/user/images/payments/visa.png" class="avatar avatar-ex-sm"
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

    <!-- Offcanvas Start -->
    <div class="offcanvas offcanvas-end bg-white shadow" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header p-4 border-bottom">
            <h5 id="offcanvasRightLabel" class="mb-0">
                <img src="images/logo-dark.png" height="24" class="light-version" alt="">
                <img src="images/logo-light.png" height="24" class="dark-version" alt="">
            </h5>
            <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas"
                aria-label="Close"><i class="uil uil-times fs-4"></i></button>
        </div>
        <div class="offcanvas-body p-4">
            <div class="row">
                <div class="col-12">
                    <img src="images/contact.svg" class="img-fluid d-block mx-auto" style="max-width: 256px;"
                        alt="">
                    <div class="card border-0 mt-5" style="z-index: 1">
                        <div class="card-body p-0">
                            <form method="post" name="myForm" onsubmit="return validateForm()">
                                <p id="error-msg" class="mb-0"></p>
                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" style="font-size: 16px" class="form-label"
                                                style="font-size: 16px" style="font-size: 16px">Your Name <span
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
                                            <label class="form-label" style="font-size: 16px" class="form-label"
                                                style="font-size: 16px" style="font-size: 16px">Your Email <span
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
                                            <label class="form-label" style="font-size: 16px" class="form-label"
                                                style="font-size: 16px" style="font-size: 16px">Subject</label>
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
                                            <label class="form-label" style="font-size: 16px" class="form-label"
                                                style="font-size: 16px" style="font-size: 16px">Comments <span
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
                <li class="list-inline-item">
                    <a class="color9" href="javascript: void(0);" onclick="setColor('yellow')"></a>
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
    <script src="../../assets/user/js/bootstrap.bundle.min.js"></script>
    <!-- shuffle js -->
    <script src="../../assets/user/js/shuffle.min.js"></script>
    <!-- Icons -->
    <script src="../../assets/user/js/feather.min.js"></script>
    <!-- Main Js -->
    <script src="../../assets/user/js/plugins.init.js"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="../../assets/user/js/app.js"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    <script src="../../assets/ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('latarbelakangkegiatan');
        CKEDITOR.replace('deskripsikegiatan');
        CKEDITOR.replace('tujuankegiatan');
    </script>
    @include('sweetalert::alert')
</body>

</html>
