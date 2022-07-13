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
                    <img src="assets/user/images/kominfo-dark.png" class="logo-light-mode" height="60" width="200"
                        alt="">
                    <img src="assets/user/images/kominfo-light.png" class="logo-dark-mode" height="60" width="200"
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
            <ul class="buy-button list-inline mb-0">
                @if (Auth::check() == true)
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
                @else
                    <a href="{{ route('login') }}">
                        <div><span class="btn btn-pills btn-primary">Login</span></div>
                    </a>
                @endif
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
    <section class="vh-100 d-flex align-items-center"
        style="background: whitesmoke">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mt-4">
                    <img src="assets/user/images/Internet Computer Technology.png" style="width: 600px" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="title-heading mt-5 pt-4">
                        <h3 class="text-dark">Dinas Komunikasi dan Informatika Kabupaten Sukoharjo</h3>
                        <p class="text-dark">Dinas Komunikasi dan Informatika Kabupaten Sukoharjo adalah Organisasi Perangkat Daerah yang di bentuk untuk menyelenggarakan urusan Pemerintahan bidang komunikasi dan informatika, bidang persandian, dan bidang statistik.</p>

                        <div class="d-flex contact-detail align-items-center mt-3">
                            <div class="icon">
                                <i data-feather="mail" class="fea icon-m-md text-dark me-3"></i>
                            </div>
                            <div class="flex-1 content">
                                <h5 class="title fw-bold mb-0">Email</h5>
                                <a href="mailto:diskominfo@sukoharjokab.go.id" class="text-primary"><h6>diskominfo@sukoharjokab.go.id</h6></a>
                            </div>
                        </div>

                        <div class="d-flex contact-detail align-items-center mt-3">
                            <div class="icon">
                                <i data-feather="phone" class="fea icon-m-md text-dark me-3"></i>
                            </div>
                            <div class="flex-1 content">
                                <h5 class="title fw-bold mb-0">Phone</h5>
                                <a href="tel:0271593068" class="text-primary"><h6>0271 593068 ext. (1522) Fax 0271 593335</h6></a>
                            </div>
                        </div>

                        <div class="d-flex contact-detail align-items-center mt-3">
                            <div class="icon">
                                <i data-feather="map-pin" class="fea icon-m-md text-dark me-3"></i>
                            </div>
                            <div class="flex-1 content">
                                <h5 class="title fw-bold mb-0">Location</h5>
                                <a href="https://goo.gl/maps/zAsdkkk5u3D6tdJn7" target="_blank"><h6>Jl. Jenderal Sudirman Nomor 199 Sukoharjo</h6></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

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
