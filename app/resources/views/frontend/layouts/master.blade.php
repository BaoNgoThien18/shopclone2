<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $body['title'] }}</title>
    <link rel="canonical" href="../" />
    <meta name="description" content="Những Thứ Bạn Cần Hệ Thống Chúng Tôi Đều Bán" />
    <meta name="keywords" content="Mail Ngon Giá Rẻ, Shop Mail Giá Rẻ, Mail Cổ Rẻ, Via Giá Rẻ,Mua HotMail, Mail Cổ, Shop Mail Cổ, Bán Mail">
    <meta name="copyright" content="CMSNT.CO - THIẾT KẾ WEBSITE MMO" />
    <meta name="author" content="MNR" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('template/assets/storage/images/favicon_0MU.png') }} " />
    <link rel="stylesheet" href="{{ asset('template/public/datum/assets/css/backend-plugin.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template/resources/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('template/resources/css/backend.css') }}">
    <link rel="stylesheet" href="{{ asset('template/resources/css/customize.css') }}">
    <script src="{{ asset('template/resources/js/jquery.js') }} "></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- sweetalert2-->
    <link class="main-stylesheet" href="{{ asset('template/public/sweetalert2/default.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('template/public/sweetalert2/sweetalert2.js') }} "></script>
    <!-- Cute Alert -->
    <link class="main-stylesheet" href="{{ asset('template/public/cute-alert/style.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('template/public/cute-alert/cute-alert.js') }} "></script>
    <!-- jQuery -->
    <script src="{{ asset('template/public/js/jquery-3.6.0.js') }} "></script>
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .card-product {
            color: white;
            background-image: linear-gradient(to right, #13214E, #13214E, #10091A);
        }

        #loading-center {

            background: url({{ asset('template/assets/storage/images/gif_loaderYVU.png') }}) no-repeat scroll 50%;
            background-size: 20%;
            width: 100%;
            height: 100%;
            position: relative;
        }

        .change-mode .custom-switch.custom-switch-icon label.custom-control-label:after {
            top: 0;
            left: 0;
            width: 35px;
            height: 30px;
            border-radius: 5px 0 0 5px;
            background-color: #13214E;
            border-color: #13214E;
            z-index: 0;
        }
    </style>
</head>
<style>
    .iq-sidebar {
        background: linear-gradient(#13214E, #13214E, #10091A);
    }

    .change-mode .custom-switch.custom-switch-icon label.custom-control-label:after {
        top: 0;
        left: 0;
        width: 35px;
        height: 30px;
        border-radius: 5px 0 0 5px;
        background-color: #13214E;
        border-color: #13214E;
        z-index: 0;
    }

    img {
        max-width: 100%;
    }
</style>

<body class="color-light ">
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <div class="wrapper">
        <div class="iq-sidebar sidebar-default">

            <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
                <a href="#" class="header-logo">
                    <img src="https://mailngonre.site/assets/storage/images/logo_dark_BCE.png" class="img-fluid rounded-normal light-logo" alt="logo">
                    <img src="https://mailngonre.site/assets/storage/images/logo_dark_BCE.png" class="img-fluid rounded-normal d-none sidebar-light-img" alt="logo">
                </a>
                <div class="side-menu-bt-sidebar-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>

            </div>

            <div class="data-scrollbar" data-scroll="1">
                <nav class="iq-sidebar-menu">

                    <ul id="iq-sidebar-toggle" class="side-menu">
                        <li class="sidebar-layout">

                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="card shadow-none m-0 border-0">
                                    <div class=" p-0 ">
                                        <ul class="dropdown-menu-1 list-group list-group-flush">
                                            <li class="dropdown-item-1 list-group-item px-2">
                                                <a class="p-0" href="#" style="color: #8f9fbc;"><img src="{{ asset('template/assets/storage/flags/flag_Vietnamese.png') }}" alt="img-flaf" class="img-fluid mr-2" style="width: 30px;height: 20px;min-width: 15px;" />Vietnamese</a>
                                            </li>
                                            <li class="dropdown-item-1 list-group-item px-2">
                                                <a class="p-0" href="#" style="color: #8f9fbc;"><img src="{{ asset('template/assets/storage/flags/flag_English.png') }}" alt="img-flaf" class="img-fluid mr-2" style="width: 30px;height: 20px;min-width: 15px;" />English</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="px-3 pt-3 pb-2 ">
                            <span class="text-uppercase small font-weight-bold">Số Dư <span
                                    style="color: yellow;">{{ number_format($user['money']) }}đ</span></span>
                            </span>
                        </li>
                        <!-- <li class=" sidebar-layout">
                            <a href="../" class="svg-icon">
                                <i class="fas fa-home"></i>
                                <span class="ml-2">Bảng Điều Khiển</span>
                            </a>
                        </li> -->
                        <li class=" sidebar-layout">
                            <a href="#menuSanPham" class="svg-icon collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="ml-2">Mua Tài Khoản</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <ul id="menuSanPham" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                                {{-- @foreach ($categories as $row)

                                <li class=" sidebar-layout ">
                                    <a href="{{ route('product.show', $row['id']) }}" class="svg-icon">
                                        <img width="25px" src="{{asset($row['image'])}}" class="mr-2"><span class="">{{$row['name']}}</span>
                                    </a>
                                </li>

                                @endforeach --}}
                                @if(isset($categories))
                                    <ul id="menuSanPham" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                                        @foreach ($categories as $row)
                                            <li class="sidebar-layout">
                                                <a href="{{ route('product.show', $row['id']) }}" class="svg-icon">
                                                    <img width="25px" src="{{ asset($row['image']) }}" class="mr-2">
                                                    <span>{{ $row['name'] }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif


                            </ul>
                        </li>

                        <li class=" sidebar-layout">
                            <a href="{{url('History')}}" class="svg-icon ">
                                <i class="fas fa-history"></i>
                                <span class="ml-2">Lịch Sử Mua Hàng</span>
                            </a>
                        </li>
                        <li class="px-3 pt-3 pb-2 ">
                            <span class="text-uppercase small font-weight-bold">Nạp Tiền</span></span>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="{{url('Recharge')}}" class="svg-icon ">
                                <i class="fas fa-university"></i>
                                <span class="ml-2">Nạp tiền</span>
                            </a>
                        </li>


                        <li class="px-3 pt-3 pb-2 ">
                            <span class="text-uppercase small font-weight-bold">Khác</span></span>
                        </li>

                        <li class=" sidebar-layout">
                            <a href="#" class="svg-icon ">
                                <i class="far fa-question-circle"></i>
                                <span class="ml-2">FAQ</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a target="_blank" href="#" class="svg-icon ">
                                <i class="far fa-file-code"></i>
                                <span class="ml-2">Tài Liệu API</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="{{ route('contact') }}" class="svg-icon ">
                                <i class="fas fa-address-book"></i>
                                <span class="ml-2">Liên Hệ</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="pt-5 pb-5"></div>
            </div>
        </div>
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="side-menu-bt-sidebar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                        <span class="badge badge2 border border-primary text-primary"><i class="fas fa-wallet mr-1"></i>Ví:
                    <b>{{number_format($user['money'])}}đ</b></span>
                        <!--  -->
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="change-mode">
                            <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                                <div class="custom-switch-inner">
                                    <p class="mb-0"> </p>
                                    <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                    <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                <span class="switch-icon-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="h-moon" height="20" width="20"
                                        class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                    </svg>
                                </span>
                                <span class="switch-icon-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="h-sun" height="20" width="20"
                                        class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </span>
                            </label>
                                </div>
                            </div>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="30" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="notification-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" class="h-6 w-6 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="notification-dropdown">
                                        <div class="card shadow-none m-0 border-0">
                                            <div class="p-3 card-header-border">
                                                <h6 class="text-center">
                                                    Notifications </h6>
                                            </div>
                                            <div class="card-body overflow-auto card-header-border p-0 card-body-list" style="max-height: 500px;">
                                                <ul class="dropdown-menu-1 overflow-auto list-style-1 mb-0">
                                                    <li class="dropdown-item-1 float-none p-3">
                                                        <span>
                                                            <div class="list-item d-flex justify-content-start align-items-start">
                                                                <div class="avatar">
                                                                    <div class="avatar-img avatar-danger avatar-20">
                                                                        <i class="far fa-envelope-open"></i> </div>
                                                                </div>
                                                                <div class="list-style-detail ml-2 mr-2">
                                                                    <h6 class="font-weight-bold">Đăng ký tài khoản thành công</h6>
                                                                    <p class="m-0">
                                                                        <small class="text-secondary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="text-secondary mr-1" width="15"
                                                                                fill="none" viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round" stroke-width="2"
                                                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                            </svg>
                                                                            2 năm trước</small>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </li>
                                                    <li class="dropdown-item-1 float-none p-3">
                                                        <span>
                                                            <div class="list-item d-flex justify-content-start align-items-start">
                                                                <div class="avatar">
                                                                    <div class="avatar-img avatar-danger avatar-20">
                                                                        <i class="far fa-envelope-open"></i> </div>
                                                                </div>
                                                                <div class="list-style-detail ml-2 mr-2">
                                                                    <h6 class="font-weight-bold">Mua đơn hàng #2934</h6>
                                                                    <p class="m-0">
                                                                        <small class="text-secondary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="text-secondary mr-1" width="15"
                                                                                fill="none" viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round" stroke-width="2"
                                                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                            </svg>
                                                                            2 năm trước</small>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </li>
                                                    <li class="dropdown-item-1 float-none p-3">
                                                        <a>
                                                            <div class="list-item d-flex justify-content-start align-items-start">
                                                                <div class="avatar">
                                                                    <div class="avatar-img avatar-danger avatar-20">
                                                                        <i class="far fa-envelope-open"></i> </div>
                                                                </div>
                                                                <div class="list-style-detail ml-2 mr-2">
                                                                    <h6 class="font-weight-bold">Nhận được 20đ hoa hồng giới thiệu user ànhn***</h6>
                                                                    <p class="m-0">
                                                                        <small class="text-secondary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="text-secondary mr-1" width="15"
                                                                                fill="none" viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round" stroke-width="2"
                                                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                            </svg>
                                                                            2 năm trước</small>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @if ($user['level'] == 'admin')
                                <li class="dropdown-item d-flex svg-icon">
                                    <svg class="svg-icon mr-0 text-secondary" id="h-02-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    <a href="{{route('admin')}}">Trang quản trị</a>
                                </li>
                                @endif
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="nav-item nav-icon dropdown-toggle pr-0 search-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg style="width: 25px;" class="svg-icon mr-0 text-secondary" id="h-01-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            <span class="mb-0 ml-2 user-name">{{ $user['username'] }}</span>

                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <li class="dropdown-item d-flex svg-icon">
                                            <svg class="svg-icon mr-0 text-secondary" id="h-01-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                        <a href="./Trang-ca-nhan.html">Trang cá nhân</a>
                                </li>
                                <li class="dropdown-item d-flex svg-icon">
                                    <svg class="svg-icon mr-0 text-secondary" id="h-02-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    <a href="./Thay-doi-mat-khau.html">Thay đổi mật khẩu</a>
                                </li>
                                <li class="dropdown-item d-flex svg-icon">
                                    <svg class="svg-icon mr-0 text-secondary" id="h-02-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
                                    </svg>
                                    <a href="./Nhat-khi-hoat-dong.html">Nhật ký hoạt động</a>
                                </li>
                                <li class="dropdown-item d-flex svg-icon">
                                    <svg class="svg-icon mr-0 text-secondary" id="h-02-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path
                                            d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <a href="./Bien-dong-so-du.html">Biến động số dư</a>
                                </li>
                                <li class="dropdown-item d-flex svg-icon">
                                    <svg class="svg-icon mr-0 text-secondary" id="h-04-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    <a href="#">Bảo mật</a>
                                </li>
                                <li class="dropdown-item  d-flex svg-icon border-top">
                                    <svg class="svg-icon mr-0 text-secondary" id="h-05-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    <a href="{{route('logout')}}">Đăng xuất</a>
                                </li>
                            </ul>
                            </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        @yield('content')



    </div>
    </div>



    </div>
    </div>





    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#">Chính sách bảo mật</a></li>
                        <li class="list-inline-item"><a href="#">Điều khoản sử dụng</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <span class="mr-1">

                    Version <b
                        style="color: red;">1.0.0</b> | Powered By <a  href="">Mailgiare</a> </span>
                    </span>
                </div>
            </div>
        </div>
    </footer>

    <div class="switch">
        <div class="circle"></div>
    </div>



    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('template/public/datum/assets/js/backend-bundle.min.js') }} "></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('template/public/datum/assets/js/customizer.js') }} "></script>
    <script src="{{ asset('template/public/datum/assets/js/sidebar.js') }} "></script>
    <!-- Flextree Javascript-->
    <script src="{{ asset('template/public/datum/assets/js/flex-tree.min.js') }} "></script>
    <script src="{{ asset('template/public/datum/assets/js/tree.js') }} "></script>
    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('template/public/datum/assets/js/table-treeview.js') }} "></script>
    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('template/public/datum/assets/js/sweetalert.js') }} "></script>
    <!-- Vectoe Map JavaScript -->
    <script src="{{ asset('template/public/datum/assets/js/vector-map-custom.js') }} "></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('template/public/datum/assets/js/chart-custom.js') }} "></script>
    <script src="{{ asset('template/public/datum/assets/js/charts/01.js') }} "></script>
    <script src="{{ asset('template/public/datum/assets/js/charts/02.js') }} "></script>
    <!-- slider JavaScript -->
    <script src="{{ asset('template/public/datum/assets/js/slider.js') }} "></script>
    <!-- Emoji picker -->
    <script src="{{ asset('template/public/datum/assets/vendor/emoji-picker-element/index.js') }} " type="module"></script>
    <!-- app JavaScript -->
    <script src="{{ asset('template/public/datum/assets/js/app.js') }} "></script>
    <!-- Dev By CMSNT.CO | FB.COM/CMSNT.CO | ZALO.ME/0947838128 | MMO Solution -->
    <!-- Script Footer -->
</body>

</html>



<script type="text/javascript">

    function buyProduct() {

        var productId = $("#productId").val();
        var amount = $("#amount").val();

        $('#btnBuy').html('<i class="fa fa-spinner fa-spin"></i> Loading...').prop('disabled', true);

        $.ajax({
            url: "{{url('/ajax/buy')}}",
            method: "POST",
            dataType: "JSON",
            data: {
                _token: "{{ csrf_token() }}",
                productId: productId,
                amount: amount
            },
            success: function(data) {
                $('#btnBuy').html('<i class="fas fa-credit-card mr-1"></i><?=__('Thanh Toán');?>').prop(
                    'disabled', false);
                if (data.status == 'success') {
                    cuteToast({
                        type: "success",
                        message: data.msg,
                        timer: 5000
                    });
                    $urlReturn = '';
                    setTimeout("location.href = '" + $urlReturn + "';", 1000);
                } else {
                    Swal.fire(
                        '<?=__('Thất bại');?>',
                        data.msg,
                        'error'
                    );
                }
            },
            error: function() {
                $('#btnBuy').html('<i class="fas fa-credit-card mr-1"></i><?=__('Thanh Toán');?>').prop(
                    'disabled', false);
                cuteToast({
                    type: "error",
                    message: 'Không thể xử lý',
                    timer: 5000
                });
            }
        });
    }
    </script>

<script type="text/javascript">
    function modalBuy(id, price, name) {
        $("#productId").val(id);
        $("#name").val(name);
        $("#total").html(price);
        $("#modalBuy").modal();
    }

    document.getElementById('showDiscountCode').style.display = 'none';

    function showDiscountCode() {
        if (document.getElementById('showDiscountCode').style.display == 'none') {
            document.getElementById('btnshowDiscountCode').className = "btn btn-sm btn-dark";
            $('#btnshowDiscountCode').html('<?=__('Huỷ mã giảm giá');?>');
            document.getElementById('showDiscountCode').style.display = 'block';
        } else {
            document.getElementById('btnshowDiscountCode').className = "btn btn-sm btn-danger";
            $('#btnshowDiscountCode').html('<?=__('Nhập mã giảm giá');?>');
            document.getElementById('showDiscountCode').style.display = 'none';
            document.getElementById('coupon').value = '';
            totalPayment();
        }
    }

    function totalPayment() {
        $('#total').html('<i class="fa fa-spinner fa-spin"></i> <?=__('Đang xử lý...');?>');
        $.ajax({
            url: "{{url('/ajax/totalPayment')}}",
            method: "POST",
            data: {
                productId: $("#productId").val(),
                amount: $("#amount").val(),
                _token: "{{ csrf_token() }}",
            },
            success: function(data) {
                $("#total").html(data);
            },
            error: function() {
                cuteToast({
                    type: "error",
                    message: 'Không thể tính kết quả thanh toán',
                    timer: 5000
                });
            }
        });
        //$("#total").html(total.toString().replace(/(.)(?=(\d{3})+$)/g, '$1,'));
    }
</script>
