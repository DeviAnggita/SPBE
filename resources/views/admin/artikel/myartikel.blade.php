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

    <script src="../assets/js/superadmin/artikel.js"></script>

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
                        <a class="nav-link" href="{{ route('pegawaiadmin.index') }}">
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
                                <a class="nav-link active" href="{{ route('artikeladmin.myartikel') }}">
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
                                <a class="nav-link " href="{{ route('artikeladmin.index') }}">
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
    @section('judul_tabel', 'List Artikel')
    {{-- @section('add')
    <a href="#" class=" text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3 text-end" title="Add" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <i class="btn-inner">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
        </i>
        <!-- <span>Add</span> -->
    </a>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <form action="{{ route('jenisopd.store') }}" method="POST">
    @csrf
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Jenis OPD</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="jenisopd" class="form-label">Jenis OPD</label>
                    <input type="text" class="form-control @error('nama_jenis_unit') is-invalid @enderror" id="inovasi"
                        aria-describedby="inovasi" name="nama_jenis_unit" value="{{ old('nama_jenis_unit') }}" required>
                    @error('nama_jenis_unit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    </form>
    </div>
    <!-- <div class="add-link"> -->
    <!-- <a class="btn btn-sm btn-icon text-success" data-bs-toggle="tooltip" title="Add" style="float: right; margin: 20px;" href="../dashboard/index-horizontal.html">
            <svg width="40" viewBox="0 0 24 24" style="color: green;" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33 2H16.66C20.06 2 22 3.92 22 7.33V16.67C22 20.06 20.07 22 16.67 22H7.33C3.92 22 2 20.06 2 16.67V7.33C2 3.92 3.92 2 7.33 2ZM12.82 12.83H15.66C16.12 12.82 16.49 12.45 16.49 11.99C16.49 11.53 16.12 11.16 15.66 11.16H12.82V8.34C12.82 7.88 12.45 7.51 11.99 7.51C11.53 7.51 11.16 7.88 11.16 8.34V11.16H8.33C8.11 11.16 7.9 11.25 7.74 11.4C7.59 11.56 7.5 11.769 7.5 11.99C7.5 12.45 7.87 12.82 8.33 12.83H11.16V15.66C11.16 16.12 11.53 16.49 11.99 16.49C12.45 16.49 12.82 16.12 12.82 15.66V12.83Z" fill="currentColor"></path>
            </svg>
        </a> -->
    <!-- </div> -->
    @endsection --}}
    @section('konten')
    <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>Judul Artikel</th>
            <th>OPD</th>
            <th>Kategori</th>
            <th>Sub Kategori</th>
            <th>Status</th>
            <th>Approval</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach ($Artikels as $artikel)
            <tr>
                <td class="no">{{ $no++ }}</td>
                <td class="judul_artikel">{{ $artikel->judul_artikel }}</td>
                <td class="nama_unit">{{ $artikel->nama_unit }}</td>
                <td class="nama_kategori">{{ $artikel->nama_kategori }}</td>
                <td class="nama_sub_kategori">{{ $artikel->nama_sub_kategori }}</td>
                <td class="status text-center">
                    @if ($artikel->status == 'Public')
                        <span class="badge rounded-pill bg-primary">Public</span>
                    @else
                        <span class="badge rounded-pill bg-danger">Private</span>
                    @endif
                </td>
                <td class="appproved text-center">

                    @if ($artikel->approved == 'Yes')
                        <span class="badge rounded-pill bg-success">Approved</span>
                    @elseif ($artikel->approved == '-')
                        <div>
                            <span class="badge rounded-pill bg-warning">Request</span>
                        </div>
                        <div class="approve">
                            <a href=" {{ route('artikeladmin.myapproved', $artikel->id_artikel) }} " role="button"
                                class="btn btn-sm btn-icon text-success flex-end" title="Approve">
                                <span class="btn-inner">
                                    <svg width="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.67 2H16.34C19.73 2 22 4.38 22 7.92V16.091C22 19.62 19.73 22 16.34 22H7.67C4.28 22 2 19.62 2 16.091V7.92C2 4.38 4.28 2 7.67 2ZM11.43 14.99L16.18 10.24C16.52 9.9 16.52 9.35 16.18 9C15.84 8.66 15.28 8.66 14.94 9L10.81 13.13L9.06 11.38C8.72 11.04 8.16 11.04 7.82 11.38C7.48 11.72 7.48 12.27 7.82 12.62L10.2 14.99C10.37 15.16 10.59 15.24 10.81 15.24C11.04 15.24 11.26 15.16 11.43 14.99Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </a>
                            <a onclick="handleReject( {{ $artikel->id_artikel }} )"
                                class="btn btn-sm btn-icon text-danger flex-end" title="Reject">
                                <span class="btn-inner">
                                    <svg width="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.67 1.99927H16.34C19.73 1.99927 22 4.37927 22 7.91927V16.0903C22 19.6203 19.73 21.9993 16.34 21.9993H7.67C4.28 21.9993 2 19.6203 2 16.0903V7.91927C2 4.37927 4.28 1.99927 7.67 1.99927ZM15.01 14.9993C15.35 14.6603 15.35 14.1103 15.01 13.7703L13.23 11.9903L15.01 10.2093C15.35 9.87027 15.35 9.31027 15.01 8.97027C14.67 8.62927 14.12 8.62927 13.77 8.97027L12 10.7493L10.22 8.97027C9.87 8.62927 9.32 8.62927 8.98 8.97027C8.64 9.31027 8.64 9.87027 8.98 10.2093L10.76 11.9903L8.98 13.7603C8.64 14.1103 8.64 14.6603 8.98 14.9993C9.15 15.1693 9.38 15.2603 9.6 15.2603C9.83 15.2603 10.05 15.1693 10.22 14.9993L12 13.2303L13.78 14.9993C13.95 15.1803 14.17 15.2603 14.39 15.2603C14.62 15.2603 14.84 15.1693 15.01 14.9993Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    @else
                        <span class="badge rounded-pill bg-danger">Rejected</span>
                    @endif

                    <div class="modal fade" id="reject" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="rejectLabel" aria-hidden="true">
                        <form action="{{ route('artikeladmin.myreject', $artikel->id_artikel) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <h5 class="modal-title" id="staticBackdropLabel" style="color: white;">
                                            Reject</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="color: black;">
                                        <div class="form-group">
                                            <label for="alasan_reject" class="form-label">Alasan Reject</label>
                                            <textarea class="form-control @error('alasan_reject') is-invalid @enderror" id="alasan_reject"
                                                aria-describedby="alasan_reject" name="alasan_reject" rows="4" value="{{ old('alasan_reject') }}" required> </textarea>
                                            @error('alasan_reject')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="id_artikel" id="id_artikel_put">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary"
                                                data-bs-dismiss="modal">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </td>
                <td style="margin-left: auto; margin-right: auto;" class="d-flex">
                    <a role="button" class="btn btn-sm btn-icon text-primary flex-end"
                        href="{{ route('artikeladmin.myshow', $artikel->id_artikel) }}" title="Detail Artikel">
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
                    </a>

                    <a role="button" class="btn btn-sm btn-icon text-primary flex-end"
                        href="{{ route('artikeladmin.myedit', $artikel->id_artikel) }}" title="Edit Artikel">
                        <span class="btn-inner">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                </path>
                                <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </a>
                    <button onclick="handleDeleteArtikel('{{ $artikel->id_artikel }}')"
                        class="btn btn-sm btn-icon text-danger flex-end" data-bs-toggle="tooltip"
                        title="Delete Artikel">
                        <span class="btn-inner">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                stroke="currentColor">
                                <path
                                    d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                </path>
                                <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                </path>
                            </svg>
                        </span>
                    </button>
                    <div class="modal fade" id="deleteartikel" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="editartikelLabel" aria-hidden="true">
                        <form action="{{ route('artikeladmin.mydelete') }}" method="post">
                            @csrf
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close btn-close-black" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="text-align: center;">
                                        <h3 class="judul mb-3">Delete Artikel</h3>
                                        <input type="text"
                                            class="form-control @error('id_artikel') is-invalid @enderror"
                                            id="id_artikel_delete" aria-describedby="id_artikel" name="id_artikel"
                                            required hidden>
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
    <tfoot>
        <tr hidden>
            <th class="text-center">No</th>
            <th class="text-center">Judul Artikel</th>
            <th class="text-center">Kategori</th>
            <th class="text-center">Sub Kategori</th>
            <th class="text-center">Author</th>
            <th class="text-center">Status</th>
            <th class="text-center">Approval</th>
            <th class="text-center">Action</th>
        </tr>
    </tfoot>
    @endsection