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
    <link rel="shortcut icon" href="../assets/images/brands/sukoharjo.png" width="30" height="35" class=""
        viewBox="0 0 30 30" fill="none" />
    <!-- Bootstrap -->
    <link href="../assets/user/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="../assets/user/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Main Css -->
    <link href="../assets/user/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="../assets/user/css/colors/default.css" rel="stylesheet" id="color-opt">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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
                    <img src="../assets/user/images/kominfo-dark.png" class="logo-light-mode" height="60"
                        width="200" alt="">
                    <img src="../assets/user/images/kominfo-light.png" class="logo-dark-mode" height="60"
                        width="200" alt="">
                </span>
                <img src="../assets/user/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
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
                <div class="col-lg-8 text-center">
                    <div class="pages-heading">
                        <h4 class="title mb-2"> Members </h4>
                        <h4 class="text-primary"> {{ $member->judul_inovasi }} </h4>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb bg-white rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('inovasiuser.index') }}">All Inovasi</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('inovasiuser.show', $member->id_inovasi) }}">Inovasi</a></li>
                        <li class="breadcrumb-item text-primary">Members</li>
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
            <div class="col-lg-6 col-md-10">
                <div class="row">
                    <div class="header-title">
                        <div class="d-flex">
                            <div class="col-lg-6">
                                <h4 class="card-title">Members</h4>
                            </div>
                            <div class="col-lg-6 text-end">
                                <button href="#"
                                    class="text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3 text-end"
                                    title="Add Member" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                        data-feather="plus" class="fea icon-sm"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-members">
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <form action="{{ route('membersuser.store') }}" method="POST">
                                @csrf
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom bg-primary">
                                            <h5 class="modal-title text-light" id="LoginForm-title">Add Member
                                            </h5>
                                            <button type="button" class="btn btn-icon btn-close"
                                                data-bs-dismiss="modal" id="close-modal"><i
                                                    class="uil uil-times fs-4 text-light"></i></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            <input type="text"
                                                class="form-control @error('id_inovasi') is-invalid @enderror"
                                                id="id_inovasi" aria-describedby="id_inovasi" name="id_inovasi"
                                                value="{{ $member->id_inovasi }}" required hidden>
                                            <div class="form-group">
                                                <label class="form-label" style="font-size: 15px">Pegawai</label>
                                                <select style="width: 465px; height: 50px;" name="id_user[]"
                                                    multiple="multiple" id="selectPegawai"
                                                    class="s-example-placeholder-multiple form-select mb-3 shadow-none"
                                                    required>
                                                    @foreach ($pegawais as $pegawai)
                                                        <option value="{{ $pegawai->id_user }}">
                                                            {{ $pegawai->nama_pegawai }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('id_user')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="text-end mt-3">
                                                <button type="submit" class="btn btn-primary"
                                                    data-bs-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal fade" id="deletemember" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="editmemberLabel" aria-hidden="true">
                            <form action="{{ route('membersuser.delete') }}" method="post">
                                @csrf
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn btn-icon btn-close"
                                                data-bs-dismiss="modal" id="close-modal"><i
                                                    class="uil uil-times fs-4 text-dark"></i></button>
                                        </div>
                                        <div class="modal-body" style="text-align: center;">
                                            <h3 class="judul mb-3">Delete
                                                Member</h3>
                                            <input type="text"
                                                class="form-control @error('id_inovasi_pegawai') is-invalid @enderror"
                                                id="id_inovasi_pegawai_delete" aria-describedby="id_inovasi_pegawai"
                                                name="id_inovasi_pegawai" required hidden>
                                            <input type="text"
                                                class="form-control @error('id_inovasi') is-invalid @enderror"
                                                id="id_inovasi_delete" aria-describedby="id_inovasi"
                                                name="id_inovasi" required hidden>
                                            <div id="content-delete"></div>
                                            <div class="modal-footer mt-3">
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="bd-example mt-3">
                        <ul class="list-group ">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $owner->nama_pegawai }}
                                <span class="badge rounded-pill bg-primary">Author</span>
                            </li>
                        </ul>
                    </div>
                    @if ($inovasis->count() > 0)
                    <div class="bd-example mt-3">
                        <ul class="list-group ">
                            @foreach ($inovasis as $member)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $member->nama_pegawai }}
                                    <span class="badge rounded-pill">
                                        <div class="d-flex">
                                            <button
                                                onclick="handleDeleteMember('{{ $member->id_inovasi_pegawai }}', '{{ $member->id_inovasi }}')"
                                                class="btn btn-sm btn-icon text-danger flex-end"
                                                data-bs-toggle="tooltip" title="Delete Member"><i
                                                    data-feather="trash" class="fea icon-sm"> </i>
                                            </button>
                                        </div>
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- PAGINATION START -->
                    <div class="col-12 mt-4">
                        <ul class="pagination justify-content-center mb-0">
                            {{ $inovasis->links() }}
                        </ul>
                    </div>
                    <!--end col-->
                    <!-- PAGINATION END -->
                    @else
                        <div class="row text-center mt-5">
                            <h6>Anda belum menambahkan member</h6>
                        </div>
                    @endif
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <!-- Footer Start -->
    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-py-60">
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                <a href="{{ route('home.index') }}" class="logo-footer">
                                    <img src="../assets/user/images/kominfo-light.png" height="60" width="200"
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

    <script src="../assets/js/superadmin/member.js"></script>
    <!-- javascript -->
    <script src="../assets/user/js/bootstrap.bundle.min.js"></script>
    <!-- shuffle js -->
    {{-- <script src="../assets/user/js/shuffle.min.js"></script> --}}
    <!-- Icons -->
    <script src="../assets/user/js/feather.min.js"></script>
    <!-- Main Js -->
    <script src="../assets/user/js/plugins.init.js"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="../assets/user/js/app.js"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    @include('sweetalert::alert')
</body>

</html>
