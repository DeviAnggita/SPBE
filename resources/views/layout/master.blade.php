    <main class="main-content">
        <div class="position-relative iq-banner">
            <!--Nav Start-->
            <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
                <div class="container-fluid navbar-inner">
                    <a href="{{ route('dashboard.index') }}" class="navbar-brand">
                        <!--Logo start-->
                        <img src="../assets/images/brands/sukoharjo.png" width="30" height="35" class=""
                            viewBox="0 0 30 30" fill="none">
                        <!-- <svg width="30" class="text-primary" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                        </svg> -->
                        <!--logo End-->
                        <h3 class="logo-title">SPBE</h3>
                    </a>
                    <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                        <i class="icon">
                            <svg width="20px" height="20px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                            </svg>
                        </i>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <span class="mt-2 navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="mb-2 navbar-nav ms-auto me-5 align-items-center navbar-list mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/images/avatars/01.png" alt="User-Profile"
                                        class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
                                    <img src="../assets/images/avatars/avtar_1.png" alt="User-Profile"
                                        class="theme-color-purple-img img-fluid avatar avatar-50 avatar-rounded">
                                    <img src="../assets/images/avatars/avtar_2.png" alt="User-Profile"
                                        class="theme-color-blue-img img-fluid avatar avatar-50 avatar-rounded">
                                    <img src="../assets/images/avatars/avtar_4.png" alt="User-Profile"
                                        class="theme-color-green-img img-fluid avatar avatar-50 avatar-rounded">
                                    <img src="../assets/images/avatars/avtar_5.png" alt="User-Profile"
                                        class="theme-color-yellow-img img-fluid avatar avatar-50 avatar-rounded">
                                    <img src="../assets/images/avatars/avtar_3.png" alt="User-Profile"
                                        class="theme-color-pink-img img-fluid avatar avatar-50 avatar-rounded">
                                    <div class="caption ms-3 d-none d-md-block ">
                                        <h6 class="mb-0 caption-title">{{ auth()->user()->nama_pegawai }}</h6>
                                        <p class="mb-0 caption-sub-title">{{ auth()->user()->role }}</p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">
                                        <p style="margin-bottom: 0"><span class="badge bg-success">{{ $akun->nip }}</span></p>
                                        <p style="margin-bottom: 0"><span class="badge bg-primary">{{ $akun->nama_jenis_unit }}</span></p>
                                        <p style="margin-bottom: 0"><span class="badge bg-info">{{ Str::substr($akun->nama_unit, 0, 30) }}</span></p>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> <!-- Nav Header Component Start -->
            <div class="iq-navbar-header" style="height: 215px;">
                <div class="container-fluid iq-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="flex-wrap d-flex justify-content-between align-items-center">
                                <div>
                                    <h2>Welcome, {{ auth()->user()->nama_pegawai }}!</h2>
                                    <h6>Saat kita masih diberi kesempatan bangun di pagi hari, berarti Tuhan masih
                                        memberi kesempatan</h6>
                                    <h6>kepada kita untuk melakukan pekerjaan yang harus kita lakukan.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="iq-header-img">
                    <img src="../assets/images/dashboard/top-header.png" alt="header"
                        class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
                    <img src="../assets/images/dashboard/top-header1.png" alt="header"
                        class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
                    <img src="../assets/images/dashboard/top-header2.png" alt="header"
                        class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
                    <img src="../assets/images/dashboard/top-header3.png" alt="header"
                        class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
                    <img src="../assets/images/dashboard/top-header4.png" alt="header"
                        class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
                    <img src="../assets/images/dashboard/top-header5.png" alt="header"
                        class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
                </div>
            </div> <!-- Nav Header Component End -->
            <!--Nav End-->
        </div>
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="row row-cols-1">
                        <div class="overflow-hidden d-slider1 ">
                            <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                                <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="bg-info text-white rounded p-3">
                                                <svg width="20px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M10.7044 3.51898C10.034 3.51898 9.46373 3.9848 9.30365 4.61265H14.6863C14.5263 3.9848 13.956 3.51898 13.2856 3.51898H10.7044ZM16.2071 4.61264H18.1881C20.2891 4.61264 22 6.34428 22 8.47085C22 8.47085 21.94 9.3711 21.92 10.6248C21.918 10.724 21.8699 10.8212 21.7909 10.88C21.3097 11.2354 20.8694 11.5291 20.8294 11.5493C19.1686 12.6632 17.2386 13.447 15.1826 13.8369C15.0485 13.8632 14.9165 13.7934 14.8484 13.6739C14.2721 12.6754 13.1956 12.0253 11.995 12.0253C10.8024 12.0253 9.71586 12.6683 9.12256 13.6678C9.05353 13.7853 8.92346 13.8531 8.7904 13.8278C6.75138 13.4369 4.82141 12.6541 3.17059 11.5594L2.21011 10.8911C2.13007 10.8405 2.08004 10.7493 2.08004 10.6481C2.05003 10.1316 2 8.47085 2 8.47085C2 6.34428 3.71086 4.61264 5.81191 4.61264H7.78289C7.97299 3.1443 9.2036 2 10.7044 2H13.2856C14.7864 2 16.017 3.1443 16.2071 4.61264ZM21.6598 12.8152L21.6198 12.8355C19.5988 14.1924 17.1676 15.0937 14.6163 15.4684C14.2561 15.519 13.8959 15.2861 13.7959 14.9216C13.5758 14.0912 12.8654 13.5443 12.015 13.5443H12.005H11.985C11.1346 13.5443 10.4242 14.0912 10.2041 14.9216C10.1041 15.2861 9.74387 15.519 9.38369 15.4684C6.83242 15.0937 4.4012 14.1924 2.38019 12.8355C2.37019 12.8254 2.27014 12.7646 2.1901 12.8152C2.10005 12.8659 2.10005 12.9874 2.10005 12.9874L2.17009 18.1519C2.17009 20.2785 3.87094 22 5.97199 22H18.018C20.1191 22 21.8199 20.2785 21.8199 18.1519L21.9 12.9874C21.9 12.9874 21.9 12.8659 21.8099 12.8152C21.7599 12.7849 21.6999 12.795 21.6598 12.8152ZM12.7454 17.0583C12.7454 17.4836 12.4152 17.8177 11.995 17.8177C11.5848 17.8177 11.2446 17.4836 11.2446 17.0583V15.7519C11.2446 15.3367 11.5848 14.9924 11.995 14.9924C12.4152 14.9924 12.7454 15.3367 12.7454 15.7519V17.0583Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </div>
                                            <div class="text-end">
                                                OPD
                                                <h2 class="counter" style="visibility: visible;">{{ $opd }}
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="bg-warning text-white rounded p-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="text-end">
                                                Pegawai
                                                <h2 class="counter" style="visibility: visible;">{{ $pegawai }}
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="bg-success text-white rounded p-3">
                                                <svg width="20px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M8.9 2H15.07C17.78 2 19.97 3.07 20 5.79V20.97C20 21.14 19.96 21.31 19.88 21.46C19.75 21.7 19.53 21.88 19.26 21.96C19 22.04 18.71 22 18.47 21.86L11.99 18.62L5.5 21.86C5.351 21.939 5.18 21.99 5.01 21.99C4.45 21.99 4 21.53 4 20.97V5.79C4 3.07 6.2 2 8.9 2ZM8.22 9.62H15.75C16.18 9.62 16.53 9.269 16.53 8.83C16.53 8.39 16.18 8.04 15.75 8.04H8.22C7.79 8.04 7.44 8.39 7.44 8.83C7.44 9.269 7.79 9.62 8.22 9.62Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </div>
                                            <div class="text-end">
                                                Inovasi
                                                <h2 class="counter" style="visibility: visible;">{{ $inovasi }}
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="bg-danger text-white rounded p-3">
                                                <svg width="20px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.81 2H16.191C19.28 2 21 3.78 21 6.83V17.16C21 20.26 19.28 22 16.191 22H7.81C4.77 22 3 20.26 3 17.16V6.83C3 3.78 4.77 2 7.81 2ZM8.08 6.66V6.65H11.069C11.5 6.65 11.85 7 11.85 7.429C11.85 7.87 11.5 8.22 11.069 8.22H8.08C7.649 8.22 7.3 7.87 7.3 7.44C7.3 7.01 7.649 6.66 8.08 6.66ZM8.08 12.74H15.92C16.35 12.74 16.7 12.39 16.7 11.96C16.7 11.53 16.35 11.179 15.92 11.179H8.08C7.649 11.179 7.3 11.53 7.3 11.96C7.3 12.39 7.649 12.74 8.08 12.74ZM8.08 17.31H15.92C16.319 17.27 16.62 16.929 16.62 16.53C16.62 16.12 16.319 15.78 15.92 15.74H8.08C7.78 15.71 7.49 15.85 7.33 16.11C7.17 16.36 7.17 16.69 7.33 16.95C7.49 17.2 7.78 17.35 8.08 17.31Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </div>
                                            <div class="text-end">
                                                Artikel
                                                <h2 class="counter" style="visibility: visible;">{{ $artikel }}
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="bg-primary text-white rounded p-3">
                                                <svg width="20px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M21.7872 10.539C21.6518 10.6706 21.4681 10.7457 21.2747 10.7457C20.559 10.7457 19.9787 11.3095 19.9787 11.9953C19.9787 12.6858 20.5522 13.2467 21.2611 13.2543C21.6605 13.258 22 13.5286 22 13.9166V16.3265C22 18.3549 20.3075 20 18.2186 20H15.0658C14.7398 20 14.4758 19.7435 14.4758 19.4269V17.3975C14.4758 17.0029 14.1567 16.6929 13.7505 16.6929C13.354 16.6929 13.0251 17.0029 13.0251 17.3975V19.4269C13.0251 19.7435 12.7611 20 12.4362 20H5.78143C3.70213 20 2 18.3558 2 16.3265V13.9166C2 13.5286 2.33946 13.258 2.73888 13.2543C3.44874 13.2467 4.02128 12.6858 4.02128 11.9953C4.02128 11.3282 3.46035 10.8209 2.72534 10.8209C2.53191 10.8209 2.34816 10.7457 2.21277 10.6142C2.07737 10.4827 2 10.3042 2 10.1163V7.68291C2 5.65731 3.706 4 5.7911 4H12.4362C12.7611 4 13.0251 4.25649 13.0251 4.57311V6.97827C13.0251 7.36348 13.354 7.68291 13.7505 7.68291C14.1567 7.68291 14.4758 7.36348 14.4758 6.97827V4.57311C14.4758 4.25649 14.7398 4 15.0658 4H18.2186C20.3075 4 22 5.64416 22 7.67352V10.0411C22 10.229 21.9226 10.4075 21.7872 10.539ZM13.7505 14.8702C14.1567 14.8702 14.4758 14.5508 14.4758 14.1656V10.4075C14.4758 10.0223 14.1567 9.70288 13.7505 9.70288C13.354 9.70288 13.0251 10.0223 13.0251 10.4075V14.1656C13.0251 14.5508 13.354 14.8702 13.7505 14.8702Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </div>
                                            <div class="text-end">
                                                Kategori
                                                <h2 class="counter" style="visibility: visible;">{{ $kategori }}
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="swiper-button swiper-button-next"></div>
                            <div class="swiper-button swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" data-aos="fade-up" data-aos-delay="800">
                                <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                                    <div class="header-title">
                                        <h4 class="card-title">$855.8K</h4>
                                        <p class="mb-0">Gross Sales</p>
                                    </div>
                                    <div class="d-flex align-items-center align-self-center">
                                        <div class="d-flex align-items-center text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8"
                                                        fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                            <div class="ms-2">
                                                <span class="text-secondary">Sales</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center ms-3 text-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <g>
                                                    <circle cx="12" cy="12" r="8"
                                                        fill="currentColor"></circle>
                                                </g>
                                            </svg>
                                            <div class="ms-2">
                                                <span class="text-secondary">Cost</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-secondary dropdown-toggle"
                                            id="dropdownMenuButton22" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            This Week
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton22">
                                            <li><a class="dropdown-item" href="#">This Week</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="d-main" class="d-main"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-6">
                            <div class="card" data-aos="fade-up" data-aos-delay="900">
                                <div class="flex-wrap card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Earnings</h4>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-secondary dropdown-toggle"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            This Week
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">This Week</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="flex-wrap d-flex align-items-center justify-content-between">
                                        <div id="myChart" class="col-md-8 col-lg-8 myChart"></div>
                                        <div class="d-grid gap col-md-4 col-lg-4">
                                            <div class="d-flex align-items-start">
                                                <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14"
                                                    viewBox="0 0 24 24" fill="#3a57e8">
                                                    <g>
                                                        <circle cx="12" cy="12" r="8"
                                                            fill="#3a57e8"></circle>
                                                    </g>
                                                </svg>
                                                <div class="ms-3">
                                                    <span class="text-secondary">Fashion</span>
                                                    <h6>251K</h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start">
                                                <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14"
                                                    viewBox="0 0 24 24" fill="#4bc7d2">
                                                    <g>
                                                        <circle cx="12" cy="12" r="8"
                                                            fill="#4bc7d2"></circle>
                                                    </g>
                                                </svg>
                                                <div class="ms-3">
                                                    <span class="text-secondary">Accessories</span>
                                                    <h6>176K</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-6">
                            <div class="card" data-aos="fade-up" data-aos-delay="1000">
                                <div class="flex-wrap card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Conversions</h4>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-secondary dropdown-toggle"
                                            id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                            This Week
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton3">
                                            <li><a class="dropdown-item" href="#">This Week</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="d-activity" class="d-activity"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
                                <div class="flex-wrap card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="mb-2 card-title">Enterprise Clients</h4>
                                        <p class="mb-0">
                                            <svg class="me-2 text-primary" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                                            </svg>
                                            15 new acquired this month
                                        </p>
                                    </div>
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton7"
                                            data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton7">
                                            <a class="dropdown-item " href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item " href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item " href="javascript:void(0);">Something else
                                                here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-0 card-body">
                                    <div class="mt-4 table-responsive">
                                        <table id="basic-table" class="table mb-0 table-striped" role="grid">
                                            <thead>
                                                <tr>
                                                    <th>COMPANIES</th>
                                                    <th>CONTACTS</th>
                                                    <th>ORDER</th>
                                                    <th>COMPLETION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                                src="../assets/images/shapes/01.png" alt="profile">
                                                            <h6>Addidis Sportwear</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="iq-media-group iq-media-group-1">
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                            </a>
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                            </a>
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>$14,000</td>
                                                    <td>
                                                        <div class="mb-2 d-flex align-items-center">
                                                            <h6>60%</h6>
                                                        </div>
                                                        <div class="shadow-none progress bg-soft-primary w-100"
                                                            style="height: 4px">
                                                            <div class="progress-bar bg-primary"
                                                                data-toggle="progress-bar" role="progressbar"
                                                                aria-valuenow="60" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                                src="../assets/images/shapes/05.png" alt="profile">
                                                            <h6>Netflixer Platforms</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="iq-media-group iq-media-group-1">
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                            </a>
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>$30,000</td>
                                                    <td>
                                                        <div class="mb-2 d-flex align-items-center">
                                                            <h6>25%</h6>
                                                        </div>
                                                        <div class="shadow-none progress bg-soft-primary w-100"
                                                            style="height: 4px">
                                                            <div class="progress-bar bg-primary"
                                                                data-toggle="progress-bar" role="progressbar"
                                                                aria-valuenow="25" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                                src="../assets/images/shapes/02.png" alt="profile">
                                                            <h6>Shopifi Stores</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="iq-media-group iq-media-group-1">
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                            </a>
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>$8,500</td>
                                                    <td>
                                                        <div class="mb-2 d-flex align-items-center">
                                                            <h6>100%</h6>
                                                        </div>
                                                        <div class="shadow-none progress bg-soft-success w-100"
                                                            style="height: 4px">
                                                            <div class="progress-bar bg-success"
                                                                data-toggle="progress-bar" role="progressbar"
                                                                aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                                src="../assets/images/shapes/03.png" alt="profile">
                                                            <h6>Bootstrap Technologies</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="iq-media-group iq-media-group-1">
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                            </a>
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                            </a>
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                            </a>
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>$20,500</td>
                                                    <td>
                                                        <div class="mb-2 d-flex align-items-center">
                                                            <h6>100%</h6>
                                                        </div>
                                                        <div class="shadow-none progress bg-soft-success w-100"
                                                            style="height: 4px">
                                                            <div class="progress-bar bg-success"
                                                                data-toggle="progress-bar" role="progressbar"
                                                                aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                                src="../assets/images/shapes/04.png" alt="profile">
                                                            <h6>Community First</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="iq-media-group iq-media-group-1">
                                                            <a href="#" class="iq-media-1">
                                                                <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>$9,800</td>
                                                    <td>
                                                        <div class="mb-2 d-flex align-items-center">
                                                            <h6>75%</h6>
                                                        </div>
                                                        <div class="shadow-none progress bg-soft-primary w-100"
                                                            style="height: 4px">
                                                            <div class="progress-bar bg-primary"
                                                                data-toggle="progress-bar" role="progressbar"
                                                                aria-valuenow="75" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card credit-card-widget" data-aos="fade-up" data-aos-delay="900">
                                <div class="pb-4 border-0 card-header">
                                    <div class="p-4 border border-white rounded primary-gradient-card">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h5 class="font-weight-bold">VISA </h5>
                                                <P class="mb-0">PREMIUM ACCOUNT</P>
                                            </div>
                                            <div class="master-card-content">
                                                <svg class="master-card-1" width="60" height="60"
                                                    viewBox="0 0 24 24">
                                                    <path fill="#ffffff"
                                                        d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                </svg>
                                                <svg class="master-card-2" width="60" height="60"
                                                    viewBox="0 0 24 24">
                                                    <path fill="#ffffff"
                                                        d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="my-4">
                                            <div class="card-number">
                                                <span class="fs-5 me-2">5789</span>
                                                <span class="fs-5 me-2">****</span>
                                                <span class="fs-5 me-2">****</span>
                                                <span class="fs-5">2847</span>
                                            </div>
                                        </div>
                                        <div class="mb-2 d-flex align-items-center justify-content-between">
                                            <p class="mb-0">Card holder</p>
                                            <p class="mb-0">Expire Date</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>Mike Smith</h6>
                                            <h6 class="ms-5">06/11</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="flex-wrap mb-4 d-flex align-itmes-center justify-content-between">
                                        <div class="d-flex align-itmes-center me-0 me-md-4">
                                            <div>
                                                <div class="p-3 mb-2 rounded bg-soft-primary">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16.9303 7C16.9621 6.92913 16.977 6.85189 16.9739 6.77432H17C16.8882 4.10591 14.6849 2 12.0049 2C9.325 2 7.12172 4.10591 7.00989 6.77432C6.9967 6.84898 6.9967 6.92535 7.00989 7H6.93171C5.65022 7 4.28034 7.84597 3.88264 10.1201L3.1049 16.3147C2.46858 20.8629 4.81062 22 7.86853 22H16.1585C19.2075 22 21.4789 20.3535 20.9133 16.3147L20.1444 10.1201C19.676 7.90964 18.3503 7 17.0865 7H16.9303ZM15.4932 7C15.4654 6.92794 15.4506 6.85153 15.4497 6.77432C15.4497 4.85682 13.8899 3.30238 11.9657 3.30238C10.0416 3.30238 8.48184 4.85682 8.48184 6.77432C8.49502 6.84898 8.49502 6.92535 8.48184 7H15.4932ZM9.097 12.1486C8.60889 12.1486 8.21321 11.7413 8.21321 11.2389C8.21321 10.7366 8.60889 10.3293 9.097 10.3293C9.5851 10.3293 9.98079 10.7366 9.98079 11.2389C9.98079 11.7413 9.5851 12.1486 9.097 12.1486ZM14.002 11.2389C14.002 11.7413 14.3977 12.1486 14.8858 12.1486C15.3739 12.1486 15.7696 11.7413 15.7696 11.2389C15.7696 10.7366 15.3739 10.3293 14.8858 10.3293C14.3977 10.3293 14.002 10.7366 14.002 11.2389Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <h5>1153</h5>
                                                <small class="mb-0">Products</small>
                                            </div>
                                        </div>
                                        <div class="d-flex align-itmes-center">
                                            <div>
                                                <div class="p-3 mb-2 rounded bg-soft-info">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M14.1213 11.2331H16.8891C17.3088 11.2331 17.6386 10.8861 17.6386 10.4677C17.6386 10.0391 17.3088 9.70236 16.8891 9.70236H14.1213C13.7016 9.70236 13.3719 10.0391 13.3719 10.4677C13.3719 10.8861 13.7016 11.2331 14.1213 11.2331ZM20.1766 5.92749C20.7861 5.92749 21.1858 6.1418 21.5855 6.61123C21.9852 7.08067 22.0551 7.7542 21.9652 8.36549L21.0159 15.06C20.8361 16.3469 19.7569 17.2949 18.4879 17.2949H7.58639C6.25742 17.2949 5.15828 16.255 5.04837 14.908L4.12908 3.7834L2.62026 3.51807C2.22057 3.44664 1.94079 3.04864 2.01073 2.64043C2.08068 2.22305 2.47038 1.94649 2.88006 2.00874L5.2632 2.3751C5.60293 2.43735 5.85274 2.72207 5.88272 3.06905L6.07257 5.35499C6.10254 5.68257 6.36234 5.92749 6.68209 5.92749H20.1766ZM7.42631 18.9079C6.58697 18.9079 5.9075 19.6018 5.9075 20.459C5.9075 21.3061 6.58697 22 7.42631 22C8.25567 22 8.93514 21.3061 8.93514 20.459C8.93514 19.6018 8.25567 18.9079 7.42631 18.9079ZM18.6676 18.9079C17.8282 18.9079 17.1487 19.6018 17.1487 20.459C17.1487 21.3061 17.8282 22 18.6676 22C19.4969 22 20.1764 21.3061 20.1764 20.459C20.1764 19.6018 19.4969 18.9079 18.6676 18.9079Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <h5>81K</h5>
                                                <small class="mb-0">Order Served</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="flex-wrap d-flex justify-content-between">
                                            <h2 class="mb-2">$405,012,300</h2>
                                            <div>
                                                <span class="badge bg-success rounded-pill">YoY 24%</span>
                                            </div>
                                        </div>
                                        <p class="text-info">Life time sales</p>
                                    </div>
                                    <div class="grid-cols-2 d-grid gap-card">
                                        <button class="p-2 btn btn-primary text-uppercase">SUMMARY</button>
                                        <button class="p-2 btn btn-info text-uppercase">ANALYTICS</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="500">
                                <div class="text-center card-body d-flex justify-content-around">
                                    <div>
                                        <h2 class="mb-2">750<small>K</small></h2>
                                        <p class="mb-0 text-secondary">Website Visitors</p>
                                    </div>
                                    <hr class="hr-vertial">
                                    <div>
                                        <h2 class="mb-2">7,500</h2>
                                        <p class="mb-0 text-secondary">New Customers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="card" data-aos="fade-up" data-aos-delay="600">
                                <div class="flex-wrap card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="mb-2 card-title">Activity overview</h4>
                                        <p class="mb-0">
                                            <svg class="me-2" width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="#17904b"
                                                    d="M13,20H11V8L5.5,13.5L4.08,12.08L12,4.16L19.92,12.08L18.5,13.5L13,8V20Z" />
                                            </svg>
                                            16% this month
                                        </p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mb-2  d-flex profile-media align-items-top">
                                        <div class="mt-1 profile-dots-pills border-primary"></div>
                                        <div class="ms-4">
                                            <h6 class="mb-1 ">$2400, Purchase</h6>
                                            <span class="mb-0">11 JUL 8:10 PM</span>
                                        </div>
                                    </div>
                                    <div class="mb-2  d-flex profile-media align-items-top">
                                        <div class="mt-1 profile-dots-pills border-primary"></div>
                                        <div class="ms-4">
                                            <h6 class="mb-1 ">New order #8744152</h6>
                                            <span class="mb-0">11 JUL 11 PM</span>
                                        </div>
                                    </div>
                                    <div class="mb-2  d-flex profile-media align-items-top">
                                        <div class="mt-1 profile-dots-pills border-primary"></div>
                                        <div class="ms-4">
                                            <h6 class="mb-1 ">Affiliate Payout</h6>
                                            <span class="mb-0">11 JUL 7:64 PM</span>
                                        </div>
                                    </div>
                                    <div class="mb-2  d-flex profile-media align-items-top">
                                        <div class="mt-1 profile-dots-pills border-primary"></div>
                                        <div class="ms-4">
                                            <h6 class="mb-1 ">New user added</h6>
                                            <span class="mb-0">11 JUL 1:21 AM</span>
                                        </div>
                                    </div>
                                    <div class="mb-1  d-flex profile-media align-items-top">
                                        <div class="mt-1 profile-dots-pills border-primary"></div>
                                        <div class="ms-4">
                                            <h6 class="mb-1 ">Product added</h6>
                                            <span class="mb-0">11 JUL 4:50 AM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Section Start -->
            <footer class="footer">
                <div class="footer-body">
                    <div class="right-panel">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Sistem Manajemen Pengetahuan SBPE
                        <span class="text-gray">
                        </span>, by <a href="https://diskominfo.sukoharjokab.go.id/" target="_blank">Kominfo
                            Sukoharjo</a>.
                    </div>
                </div>
            </footer>
            <!-- Footer Section End -->
    </main>
    <a class="btn btn-fixed-end btn-warning btn-icon btn-setting" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <svg width="24" viewBox="0 0 24 24" class="animated-rotate" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M20.8064 7.62361L20.184 6.54352C19.6574 5.6296 18.4905 5.31432 17.5753 5.83872V5.83872C17.1397 6.09534 16.6198 6.16815 16.1305 6.04109C15.6411 5.91402 15.2224 5.59752 14.9666 5.16137C14.8021 4.88415 14.7137 4.56839 14.7103 4.24604V4.24604C14.7251 3.72922 14.5302 3.2284 14.1698 2.85767C13.8094 2.48694 13.3143 2.27786 12.7973 2.27808H11.5433C11.0367 2.27807 10.5511 2.47991 10.1938 2.83895C9.83644 3.19798 9.63693 3.68459 9.63937 4.19112V4.19112C9.62435 5.23693 8.77224 6.07681 7.72632 6.0767C7.40397 6.07336 7.08821 5.98494 6.81099 5.82041V5.82041C5.89582 5.29601 4.72887 5.61129 4.20229 6.52522L3.5341 7.62361C3.00817 8.53639 3.31916 9.70261 4.22975 10.2323V10.2323C4.82166 10.574 5.18629 11.2056 5.18629 11.8891C5.18629 12.5725 4.82166 13.2041 4.22975 13.5458V13.5458C3.32031 14.0719 3.00898 15.2353 3.5341 16.1454V16.1454L4.16568 17.2346C4.4124 17.6798 4.82636 18.0083 5.31595 18.1474C5.80554 18.2866 6.3304 18.2249 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6516 8.2191 17.7822C8.70725 17.9128 9.12299 18.233 9.37392 18.6717C9.53845 18.9489 9.62686 19.2646 9.63021 19.587V19.587C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5001 14.7053 20.6491 14.7103 19.5962V19.5962C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6807 16.6233 17.6831C16.9449 17.6917 17.2594 17.7798 17.5387 17.9394V17.9394C18.4515 18.4653 19.6177 18.1544 20.1474 17.2438V17.2438L20.8064 16.1454C21.0615 15.7075 21.1315 15.186 21.001 14.6964C20.8704 14.2067 20.55 13.7894 20.1108 13.5367V13.5367C19.6715 13.284 19.3511 12.8666 19.2206 12.3769C19.09 11.8873 19.16 11.3658 19.4151 10.928C19.581 10.6383 19.8211 10.3982 20.1108 10.2323V10.2323C21.0159 9.70289 21.3262 8.54349 20.8064 7.63277V7.63277V7.62361Z"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <circle cx="12.1747" cy="11.8891" r="2.63616" stroke="currentColor" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round"></circle>
        </svg>
    </a>
    <!-- Wrapper End-->
    <!-- offcanvas start -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" data-bs-scroll="true"
        data-bs-backdrop="true" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <div class="d-flex align-items-center">
                <h3 class="offcanvas-title me-3" id="offcanvasExampleLabel">Settings</h3>
            </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body data-scrollbar">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="mb-3">Scheme</h5>
                    <div class="d-grid gap-x-3 grid-cols-3 mb-4">
                        <div class="btn-border" data-setting="color-mode" data-name="color" data-value="auto">
                            <svg width="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor" d="M7,2V13H10V22L17,10H13L17,2H7Z" />
                            </svg>
                            <span class="ms-2 "> Auto </span>
                        </div>
                        <div class="btn-border" data-setting="color-mode" data-name="color" data-value="dark">
                            <svg width="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M9,2C7.95,2 6.95,2.16 6,2.46C10.06,3.73 13,7.5 13,12C13,16.5 10.06,20.27 6,21.54C6.95,21.84 7.95,22 9,22A10,10 0 0,0 19,12A10,10 0 0,0 9,2Z" />
                            </svg>
                            <span class="ms-2 "> Dark </span>
                        </div>
                        <div class="btn-border active" data-setting="color-mode" data-name="color"
                            data-value="light">
                            <svg width="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31L23.31,12L20,8.69Z" />
                            </svg>
                            <span class="ms-2 "> Light</span>
                        </div>
                    </div>
                    <hr class="hr-horizontal">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="mt-4 mb-3">Color Customizer</h5>
                        <button class="btn btn-transparent p-0" data-value="theme-color-default" data-info="#079aa2"
                            data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="" data-bs-original-title="Default">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z"
                                    fill="#31BAF1" />
                                <path
                                    d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z"
                                    fill="#0169CA" />
                            </svg>
                        </button>
                    </div>
                    <div class="grid-cols-5 mb-4 d-grid gap-x-2">
                        <div class="btn-border" data-value="theme-color-blue" data-info="#573BFF"
                            data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="" data-bs-original-title="Theme-1">
                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                width="32" height="32">
                                <circle cx="12" cy="12" r="10" fill="#00C3F9" />
                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#573BFF" />
                            </svg>
                        </div>
                        <div class="btn-border" data-value="theme-color-gray" data-info="#FD8D00"
                            data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="" data-bs-original-title="Theme-2">
                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                width="32" height="32">
                                <circle cx="12" cy="12" r="10" fill="#91969E" />
                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#FD8D00" />
                            </svg>
                        </div>
                        <div class="btn-border" data-value="theme-color-red" data-info="#366AF0"
                            data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="" data-bs-original-title="Theme-3">
                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                width="32" height="32">
                                <circle cx="12" cy="12" r="10" fill="#DB5363" />
                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#366AF0" />
                            </svg>
                        </div>
                        <div class="btn-border" data-value="theme-color-yellow" data-info="#6410F1"
                            data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="" data-bs-original-title="Theme-4">
                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                width="32" height="32">
                                <circle cx="12" cy="12" r="10" fill="#EA6A12" />
                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#6410F1" />
                            </svg>
                        </div>
                        <div class="btn-border" data-value="theme-color-pink" data-info="#25C799"
                            data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="" data-bs-original-title="Theme-5">
                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                width="32" height="32">
                                <circle cx="12" cy="12" r="10" fill="#E586B3" />
                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#25C799" />
                            </svg>
                        </div>

                    </div>
                    <hr class="hr-horizontal">
                    <h5 class="mb-3 mt-4">Scheme Direction</h5>
                    <div class="d-grid gap-x-3 grid-cols-2 mb-4">
                        <div class="text-center">
                            <img src="../assets/images/settings/dark/01.png" alt="ltr"
                                class="mode dark-img img-fluid btn-border p-0 flex-column active"
                                data-setting="dir-mode" data-name="dir" data-value="ltr">
                            <img src="../assets/images/settings/light/01.png" alt="ltr"
                                class="mode light-img img-fluid btn-border p-0 flex-column active"
                                data-setting="dir-mode" data-name="dir" data-value="ltr">
                            <span class=" mt-2"> LTR </span>
                        </div>
                        <div class="text-center">
                            <img src="../assets/images/settings/dark/02.png" alt=""
                                class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="dir-mode"
                                data-name="dir" data-value="rtl">
                            <img src="../assets/images/settings/light/02.png" alt=""
                                class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="dir-mode"
                                data-name="dir" data-value="rtl">
                            <span class="mt-2 "> RTL </span>
                        </div>
                    </div>
                    <hr class="hr-horizontal">
                    <h5 class="mt-4 mb-3">Sidebar Color</h5>
                    <div class="d-grid gap-x-3 grid-cols-2 mb-4">
                        <div class="btn btn-border mb-4" data-setting="sidebar" data-name="sidebar-color"
                            data-value="sidebar-dark">
                            <i class="text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <circle cx="12" cy="12" r="8" fill="currentColor">
                                    </circle>
                                </svg>
                            </i>
                            <span class="ms-2 "> Dark </span>
                        </div>
                        <div class="btn btn-border mb-4" data-setting="sidebar" data-name="sidebar-color"
                            data-value="sidebar-color">
                            <i class="text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <circle cx="12" cy="12" r="8" fill="currentColor">
                                    </circle>
                                </svg>
                            </i>
                            <span class="ms-2 "> Color </span>
                        </div>
                        <div class="btn btn-border active" data-setting="sidebar" data-name="sidebar-color"
                            data-value="sidebar-white">
                            <i class="text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <circle cx="12" cy="12" r="8" fill="currentColor"
                                        stroke="black" stroke-width="3">
                                    </circle>
                                </svg>
                            </i>
                            <span class="ms-2 "> White </span>
                        </div>
                        <div class="btn btn-border " data-setting="sidebar" data-name="sidebar-color"
                            data-value="sidebar-transparent">
                            <i class="text-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <circle cx="12" cy="12" r="8" fill="#F5F6FA"
                                        stroke="black" stroke-width="3">
                                    </circle>
                                </svg>
                            </i>
                            <span class="ms-2 "> Transparent </span>
                        </div>
                    </div>
                    <hr class="hr-horizontal">
                    <h5 class="mt-4 mb-3">Sidebar Types</h5>
                    <div class="d-grid gap-x-3 grid-cols-3 mb-4">
                        <div class="text-center">
                            <img src="../assets/images/settings/dark/03.png" alt="mini"
                                class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                                data-name="sidebar-type" data-value="sidebar-mini">
                            <img src="../assets/images/settings/light/03.png" alt="mini"
                                class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                                data-name="sidebar-type" data-value="sidebar-mini">
                            <span class="mt-2">Mini</span>
                        </div>
                        <div class="text-center">
                            <img src="../assets/images/settings/dark/04.png" alt="hover"
                                class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                                data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
                            <img src="../assets/images/settings/light/04.png" alt="hover"
                                class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                                data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
                            <span class="mt-2">Hover</span>
                        </div>
                        <div class="text-center">
                            <img src="../assets/images/settings/dark/05.png" alt="boxed"
                                class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                                data-name="sidebar-type" data-value="sidebar-boxed">
                            <img src="../assets/images/settings/light/05.png" alt="boxed"
                                class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                                data-name="sidebar-type" data-value="sidebar-boxed">
                            <span class="mt-2">Boxed</span>
                        </div>
                    </div>
                    <hr class="hr-horizontal">
                    <h5 class="mt-4 mb-3">Sidebar Active Style</h5>
                    <div class="d-grid gap-x-3 grid-cols-2 mb-4">
                        <div class="mb-4 text-center">
                            <img src="../assets/images/settings/dark/06.png" alt="rounded-one-side"
                                class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                                data-name="sidebar-item" data-value="navs-rounded">
                            <img src="../assets/images/settings/light/06.png" alt="rounded-one-side"
                                class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                                data-name="sidebar-item" data-value="navs-rounded">
                            <span class="mt-2">Rounded One Side</span>
                        </div>
                        <div class="mb-4 text-center">
                            <img src="../assets/images/settings/dark/07.png" alt="rounded-all"
                                class="mode dark-img img-fluid btn-border p-0 flex-column active"
                                data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded-all">
                            <img src="../assets/images/settings/light/07.png" alt="rounded-all"
                                class="mode light-img img-fluid btn-border p-0 flex-column active"
                                data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded-all">
                            <span class="mt-2">Rounded All</span>
                        </div>
                        <div class="mb-4 text-center">
                            <img src="../assets/images/settings/dark/08.png" alt="pill-one-side"
                                class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                                data-name="sidebar-item" data-value="navs-pill">
                            <img src="../assets/images/settings/light/09.png" alt="pill-one-side"
                                class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                                data-name="sidebar-item" data-value="navs-pill">
                            <span class="mt-2">Pill One Side</span>
                        </div>
                        <div class="mb-4 text-center">
                            <img src="../assets/images/settings/dark/09.png" alt="pill-all"
                                class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                                data-name="sidebar-item" data-value="navs-pill-all">
                            <img src="../assets/images/settings/light/08.png" alt="pill-all"
                                class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                                data-name="sidebar-item" data-value="navs-pill-all">
                            <span class="mt-2">Pill All</span>
                        </div>
                    </div>
                    <hr class="hr-horizontal">
                    <h5 class="mt-4 mb-3">Navbar Style</h5>
                    <div class="d-grid gap-x-3 grid-cols-2">
                        <div class="mb-4 text-center">
                            <img src="../assets/images/settings/dark/11.png" alt="image"
                                class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar"
                                data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
                            <img src="../assets/images/settings/light/10.png" alt="image"
                                class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar"
                                data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
                            <span class="mt-2">Glass</span>
                        </div>
                        <div class="mb-4 text-center">
                            <img src="../assets/images/settings/dark/10.png" alt="color"
                                class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar"
                                data-target=".iq-navbar-header" data-name="navbar-type"
                                data-value="navs-bg-color">
                            <img src="../assets/images/settings/light/11.png" alt="color"
                                class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar"
                                data-target=".iq-navbar-header" data-name="navbar-type"
                                data-value="navs-bg-color">
                            <span class="mt-2">Color</span>
                        </div>
                        <div class="mb-4 text-center">
                            <img src="../assets/images/settings/dark/12.png" alt="sticky"
                                class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar"
                                data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
                            <img src="../assets/images/settings/light/12.png" alt="sticky"
                                class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar"
                                data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
                            <span class="mt-2">Sticky</span>
                        </div>
                        <div class="mb-4 text-center">
                            <img src="../assets/images/settings/dark/13.png" alt="transparent"
                                class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar"
                                data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
                            <img src="../assets/images/settings/light/13.png" alt="transparent"
                                class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar"
                                data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
                            <span class="mt-2">Transparent</span>
                        </div>
                        <div class="btn btn-border active col-span-full" data-setting="navbar"
                            data-name="navbar-default" data-value="default">
                            <i class="text-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <circle cx="12" cy="12" r="8" fill="#F5F6FA"
                                        stroke="black" stroke-width="3">
                                    </circle>
                                </svg>
                            </i>
                            <span class="ms-2 "> Default Navbar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Library Bundle Script -->
    <script src="../assets/js/core/libs.min.js"></script>

    <!-- External Library Bundle Script -->
    <script src="../assets/js/core/external.min.js"></script>

    <!-- Widgetchart Script -->
    <script src="../assets/js/charts/widgetcharts.js"></script>

    <!-- mapchart Script -->
    <script src="../assets/js/charts/vectore-chart.js"></script>
    <script src="../assets/js/charts/dashboard.js"></script>

    <!-- fslightbox Script -->
    <script src="../assets/js/plugins/fslightbox.js"></script>

    <!-- Settings Script -->
    <script src="../assets/js/plugins/setting.js"></script>

    <!-- Slider-tab Script -->
    <script src="../assets/js/plugins/slider-tabs.js"></script>

    <!-- Form Wizard Script -->
    <script src="../assets/js/plugins/form-wizard.js"></script>

    <!-- AOS Animation Plugin-->
    <script src="../assets/vendor/aos/dist/aos.js"></script>

    <!-- App Script -->
    <script src="../assets/js/hope-ui.js" defer></script>
    </body>

    </html>
