<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Manajemen Pengetahuan SPBE Sukoharjo</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/brands/sukoharjo.png" width="30" height="35" class=""
        viewBox="0 0 30 30" fill="none" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="../assets/css/core/libs.min.css" />

    <!-- Aos Animation Css -->
    <link rel="stylesheet" href="../assets/vendor/aos/dist/aos.css" />

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="../assets/css/hope-ui.min.css?v=1.2.0" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/css/custom.min.css?v=1.2.0" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="../assets/css/dark.min.css" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="../assets/css/customizer.min.css" />

    <!-- RTL Css -->
    <link rel="stylesheet" href="../assets/css/rtl.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="../assets/js/admin/pegawai.js"></script>
    <style>
        .dropdown-menu-end[data-bs-popper] {
            right: auto;
            left: auto;
        }
    </style>

</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->

    <aside class="sidebar sidebar-default navs-rounded-all ">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="{{ route('dashboardadmin.index') }}" class="navbar-brand">
                <!--Logo start-->
                <img src="../assets/images/brands/sukoharjo.png" width="30" height="35" class="" viewBox="0 0 30 30"
                    fill="none">
                <!-- <svg width="30" class="" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                    <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                    <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                    <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                </svg> -->
                <!--logo End-->
                <h3 class="logo-title">SPBE</h3>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body pt-0 data-scrollbar">
            <div class="sidebar-list">
                <!-- Sidebar Menu Start -->
                <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled" href="#" tabindex="-1">
                            <span class="default-icon">Home</span>
                            <span class="mini-icon">-</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('dashboardadmin.index') }}">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z"
                                        fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z"
                                        fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <hr class="hr-horizontal">
                    </li>
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled" href="#" tabindex="-1">
                            <span class="default-icon">Pages</span>
                            <span class="mini-icon">-</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('pegawaiadmin.index') }}">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z"
                                        fill="currentColor"></path>
                                    <path opacity="0.4"
                                        d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z"
                                        fill="currentColor"></path>
                                    <path opacity="0.4"
                                        d="M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z"
                                        fill="currentColor"></path>
                                    <path opacity="0.4"
                                        d="M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z"
                                        fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Pegawai</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-bs-toggle="collapse" href="#utilities-error" role="button"
                            aria-expanded="false" aria-controls="utilities-error">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M11.9912 18.6215L5.49945 21.864C5.00921 22.1302 4.39768 21.9525 4.12348 21.4643C4.0434 21.3108 4.00106 21.1402 4 20.9668V13.7087C4 14.4283 4.40573 14.8725 5.47299 15.37L11.9912 18.6215Z"
                                        fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.89526 2H15.0695C17.7773 2 19.9735 3.06605 20 5.79337V20.9668C19.9989 21.1374 19.9565 21.3051 19.8765 21.4554C19.7479 21.7007 19.5259 21.8827 19.2615 21.9598C18.997 22.0368 18.7128 22.0023 18.4741 21.8641L11.9912 18.6215L5.47299 15.3701C4.40573 14.8726 4 14.4284 4 13.7088V5.79337C4 3.06605 6.19625 2 8.89526 2ZM8.22492 9.62227H15.7486C16.1822 9.62227 16.5336 9.26828 16.5336 8.83162C16.5336 8.39495 16.1822 8.04096 15.7486 8.04096H8.22492C7.79137 8.04096 7.43991 8.39495 7.43991 8.83162C7.43991 9.26828 7.79137 9.62227 8.22492 9.62227Z"
                                        fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Inovasi</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="utilities-error" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('inovasiadmin.create') }}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                            fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> A </i>
                                    <span class="item-name">Add Inovasi</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('inovasiadmin.myinovasi') }}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                            fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> M </i>
                                    <span class="item-name">My Inovasi</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('inovasiadmin.index') }}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                            fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">List Inovasi</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-widget" role="button"
                            aria-expanded="false" aria-controls="sidebar-widget">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.81 2H16.191C19.28 2 21 3.78 21 6.83V17.16C21 20.26 19.28 22 16.191 22H7.81C4.77 22 3 20.26 3 17.16V6.83C3 3.78 4.77 2 7.81 2ZM8.08 6.66V6.65H11.069C11.5 6.65 11.85 7 11.85 7.429C11.85 7.87 11.5 8.22 11.069 8.22H8.08C7.649 8.22 7.3 7.87 7.3 7.44C7.3 7.01 7.649 6.66 8.08 6.66ZM8.08 12.74H15.92C16.35 12.74 16.7 12.39 16.7 11.96C16.7 11.53 16.35 11.179 15.92 11.179H8.08C7.649 11.179 7.3 11.53 7.3 11.96C7.3 12.39 7.649 12.74 8.08 12.74ZM8.08 17.31H15.92C16.319 17.27 16.62 16.929 16.62 16.53C16.62 16.12 16.319 15.78 15.92 15.74H8.08C7.78 15.71 7.49 15.85 7.33 16.11C7.17 16.36 7.17 16.69 7.33 16.95C7.49 17.2 7.78 17.35 8.08 17.31Z"
                                        fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Artikel</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-widget" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('artikeladmin.create') }}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                            fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> A </i>
                                    <span class="item-name">Add Artikel</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('artikeladmin.myartikel') }}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                            fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> M </i>
                                    <span class="item-name">My Artikel</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('artikeladmin.index') }}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                            fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">List Artikel</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('forum-diskusi.index') }}" target="_blank">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.0714 19.0699C16.0152 22.1263 11.4898 22.7867 7.78642 21.074C7.23971 20.8539 6.79148 20.676 6.36537 20.676C5.17849 20.683 3.70117 21.8339 2.93336 21.067C2.16555 20.2991 3.31726 18.8206 3.31726 17.6266C3.31726 17.2004 3.14642 16.7602 2.92632 16.2124C1.21283 12.5096 1.87411 7.98269 4.93026 4.92721C8.8316 1.02443 15.17 1.02443 19.0714 4.9262C22.9797 8.83501 22.9727 15.1681 19.0714 19.0699Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M15.9393 12.4131H15.9483" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M11.9306 12.4131H11.9396" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M7.92128 12.4131H7.93028" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>                            
                            </i>
                            <span class="item-name">Forum Diskusi</span>
                        </a>
                    </li>

                </ul>
                <!-- Sidebar Menu End -->
            </div>
        </div>
        <div class="sidebar-footer"></div>
    </aside>
    @extends('layout.table')
    @section('judul_tabel', 'List Pegawai')
    @section('add')
    <a href="#" class=" text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3 text-end" title="Add OPD"
        data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <i class="btn-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
        </i>
        <!-- <span>Add</span> -->
    </a>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <form action="{{ route('pegawaiadmin.store') }}" method="POST">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="staticBackdropLabel" style="color: white;">Add Pegawai</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="color: black;">
                        <div class="form-group">
                            <label for="nip_create" class="form-label">NIP</label>
                            <input type="text" class="form-control @error('nip') is-invalid @enderror"
                                id="nip_create" aria-describedby="nip" name="nip"
                                value="{{ old('nip') }}" required>
                            @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_pegawai_create" class="form-label">Nama Pegawai</label>
                            <input type="text" class="form-control @error('nama_pegawai') is-invalid @enderror"
                                id="nama_pegawai_create" aria-describedby="nama_pegawai" name="nama_pegawai"
                                value="{{ old('nama_pegawai') }}" required>
                            @error('nama_pegawai')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email_pegawai_create" class="form-label">Email Pegawai</label>
                            <input type="email" class="form-control @error('email_pegawai') is-invalid @enderror"
                                id="email_pegawai_create" aria-describedby="email_pegawai" name="email_pegawai"
                                value="{{ old('email_pegawai') }}" required>
                            @error('email_pegawai')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_create" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password_create" aria-describedby="password" name="password"
                                value="{{ old('password') }}" required>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @endsection
    @section('konten')
    <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>OPD</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach($pegawais as $pegawai)


        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $pegawai->nip }}</td>
            <td>{{ $pegawai->nama_pegawai }}</td>
            <td>{{ $pegawai->nama_unit }}</td>
            <td>{{ $pegawai->role }}</td>
            <td class="d-flex">
                    <button onclick="handleShowPegawai('{{ $pegawais }}', '{{$pegawai->id_user}}')"
                        class="btn btn-sm btn-icon text-primary flex-end" title="Detail Pegawai">
                    <span class="btn-inner">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z"
                                stroke="#130F26"></path>
                            <circle cx="12" cy="12" r="5" stroke="#130F26"></circle>
                            <circle cx="12" cy="12" r="3" fill="#130F26"></circle>
                            <mask mask-type="alpha" maskUnits="userSpaceOnUse" x="9" y="9" width="6" height="6">
                                <circle cx="12" cy="12" r="3" fill="#130F26"></circle>
                            </mask>
                            <circle opacity="0.89" cx="13.5" cy="10.5" r="1.5" fill="white"></circle>
                        </svg>
                    </span>
                </button>
                <div class="modal fade" id="showpegawai" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="showpegawai" aria-hidden="true">
                        <form action="{{ route('pegawaiadmin.update', $pegawai->id_user) }}" method="post">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title" id="staticBackdropLabel" style="color: white;">Detail Pegawai
                                    </h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="color: black;">
                                    <div class="form-group d-flex align-items-baseline gap-3">
                                        <label class="control-label mb-0" style="color: black; width: 25%;"
                                            for="nip_show">NIP</label>
                                        <div>:</div>
                                        <div>
                                            <input type="text" class="form-control-plaintext"
                                                style="color: black; width: 300px;" id="nip_show" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-baseline gap-3">
                                        <label class="control-label mb-0" style="color: black; width: 25%;"
                                            for="nama_unit_show">OPD</label>
                                        <div>:</div>
                                        <div>
                                            <input type="text" class="form-control-plaintext"
                                                style="color: black; width: 300px;" id="nama_unit_show" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-baseline gap-3">
                                        <label class="control-label mb-0" style="color: black; width: 25%;"
                                            for="nama_pegawai_show">Nama Pegawai</label>
                                        <div>:</div>
                                        <div>
                                            <input type="text" class="form-control-plaintext"
                                                style="color: black; width: 300px;" id="nama_pegawai_show" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-baseline gap-3">
                                        <label class="control-label mb-0" style="color: black; width: 25%;"
                                            for="email_pegawai_show">Email Pegawai</label>
                                        <div>:</div>
                                        <div>
                                            <input type="text" class="form-control-plaintext"
                                                style="color: black; width: 300px;" id="email_pegawai_show" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-baseline gap-3">
                                        <label class="control-label mb-0" style="color: black; width: 25%;" style="color: black;"
                                             for="role_show">Role</label>
                                        <div>:</div>
                                        <div>
                                            <input type="text" name="role" class="form-control-plaintext" style="color: black;" id="role_show" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <button onclick="handleEditPegawai('{{ $pegawais }}', '{{ $pegawai->id_user }}')"
                    class="btn btn-sm btn-icon text-primary flex-end" title="Edit Pegawai">
                    <span class="btn-inner">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>
                <div class="modal fade" id="editpegawai" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="editpegawaiLabel" aria-hidden="true">
                    <form action="{{ route('pegawaiadmin.update', '$pegawai->id_user') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title" id="staticBackdropLabel" style="color: white;">Edit Pegawai</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="color: black;">
                                    <div class="form-group">
                                        <label for="nip_put" class="form-label" style="color: black">NIP</label>
                                        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip_put"
                                            aria-describedby="nip" name="nip" value="" required>
                                        @error('nip')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_pegawai_put" class="form-label">Nama Pegawai </label>
                                        <input type="text" class="form-control @error('nama_pegawai') is-invalid @enderror"
                                            id="nama_pegawai_put" aria-describedby="nama_pegawai" name="nama_pegawai" value="" required>
                                        @error('nama_pegawai')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email_pegawai_put" class="form-label">Email Pegawai</label>
                                        <input type="email" class="form-control @error('email_pegawai') is-invalid @enderror"
                                            id="email_pegawai_put" aria-describedby="email_pegawai" name="email_pegawai" value="" required>
                                        @error('email_pegawai')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="id_user" id="id_user_put">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <button onclick="handleDeletePegawai('{{ $pegawai->id_user }}')"
                    class="btn btn-sm btn-icon text-danger flex-end" data-bs-toggle="tooltip" title="Delete Pegawai">
                    <span class="btn-inner">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            stroke="currentColor">
                            <path
                                d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                                d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </span>
                </button>
                <div class="modal fade" id="deletepegawai" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="editpegawaiLabel" aria-hidden="true">
                    <form action="{{ route('pegawaiadmin.delete') }}" method="post">
                        @csrf
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close btn-close-black" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="text-align: center;">
                                    <h3 class="judul mb-3">Delete Pegawai</h3>
                                    <input type="text" class="form-control @error('id_user') is-invalid @enderror"
                                        id="id_user_delete" aria-describedby="id_user" name="id_user" required hidden>
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
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot hidden>
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>OPD</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </tfoot>
    @endsection