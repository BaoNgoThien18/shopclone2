<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $body['title'] }}</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('template/public/AdminLTE3/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/public/AdminLTE3/dist/css/adminlte.min.css') }}">
    
 
    <!-- Cute Alert -->
    <link class="main-stylesheet" href="{{ asset('template/public/cute-alert/style.css') }}" rel="stylesheet"
        type="text/css">
    <script src="{{ asset('template/public/cute-alert/cute-alert.js') }}"></script>
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('template/public/AdminLTE3/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('template/public/AdminLTE3/plugins/summernote/summernote-bs4.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('template/public/AdminLTE3/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- Sparkline -->
    <script src="{{ asset('template/public/AdminLTE3/plugins/sparklines/sparkline.js')}} "></script>
    <!-- jQuery -->
    <script src="{{ asset('template/public/js/jquery-3.6.0.js') }}"></script>
    <script src="https://use.fontawesome.com/99c3653b8b.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js')}}" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css') }}" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://www.google.com/recaptcha/api.js')}}" async defer></script>

    {{ $body['header'] }}

</head>

<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
     
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{ url('admin/') }}" class="brand-link">
               <center> <img width="100%" src="{{ asset('template/assets/img/logo_dark.png') }}" alt="CMSNT.CO"></center>
            </a>
            <div class="sidebar">
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item has-treeview">
                            <a href="{{ url('admin/');?>"
                                class="nav-link <?=$core->active_sidebar(['', '']);?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item has-treeview">
                            <a href="{{ url('admin/security');?>"
                                class="nav-link <?=$core->active_sidebar(['security']);?>">
                                <i class="nav-icon fas fa-shield-alt"></i>
                                <p>
                                    Bảo mật
                                </p>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item has-treeview">
                            <a href="{{ url('admin/ip-black');?>"
                                class="nav-link <?=$core->active_sidebar(['ip-black']);?>">
                                <i class="nav-icon fa-solid fa-lock"></i> 
                                <p>
                                    IP Black
                                </p>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item has-treeview">
                            <a href="{{ url('admin/addons');?>"
                                class="nav-link <?=$core->active_sidebar(['addons']);?>">
                                <i class="nav-icon fas fa-puzzle-piece"></i>
                                <p>
                                    Addons
                                </p>
                            </a>
                        </li> -->
                        <li class="nav-item <?=$core->menuopen_sidebar(['product-add', 'account-view', 'connect-api-edit', 
                        'product-list', 'connect-api', 'connect-api-add', 'product-edit', 'accounts', 'product-order','category-list','category-edit','category-add', 'backup-list', 'account-sold'
                        ]);?>">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cart-plus"></i>
                                <p>
                                    Bán Tài Khoản
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/category-list');?>"
                                        class="nav-link <?=$core->active_sidebar(['category-list', 'category-add', 'category-edit']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Chuyên mục</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/product-list');?>"
                                        class="nav-link <?=$core->active_sidebar(['product-list','product-edit','accounts','product-add', 'account-sold', 'account-view']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sản phẩm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('index.php?module=admin&action=product-order');?>"
                                        class="nav-link <?=$core->active_sidebar(['product-order']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Đơn hàng</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/backup-list');?>"
                                        class="nav-link <?=$core->active_sidebar(['backup-list']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>File backup</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/connect-api');?>"
                                        class="nav-link <?=$core->active_sidebar(['connect-api', 'connect-api-add', 'connect-api-edit']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kết nối API</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item <?=$core->menuopen_sidebar(['document-add',
                        'document-list', 'document-edit', 'document-order',
                        'category-document-list', 'category-document-add', 
                        'category-document-edit'
                        ]);?>">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Bán Tài Liệu (TUT)
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/category-document-list');?>"
                                        class="nav-link <?=$core->active_sidebar(['category-document-list','category-document-edit','category-document-add']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Chuyên mục TUT</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/document-list');?>"
                                        class="nav-link <?=$core->active_sidebar(['document-list','document-edit','document-add']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách TUT</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/document-order');?>"
                                        class="nav-link <?=$core->active_sidebar(['document-order']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Đơn hàng mua TUT</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?=$core->menuopen_sidebar(['config-rate-service', 'service-order']);?>">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-thumbs-up"></i>
                                <p>
                                    Bán Tương Tác
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/service-order');?>"
                                        class="nav-link <?=$core->active_sidebar(['service-order']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Đơn hàng</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url_admin('config-rate-service');?>"
                                        class="nav-link <?=$core->active_sidebar(['config-rate-service']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cấu hình</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?=$core->menuopen_sidebar(['otp-config', 'otp-history']);?>">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-sim-card"></i>
                                <p>
                                    Thuê SIM
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/otp-history');?>"
                                        class="nav-link <?=$core->active_sidebar(['otp-history']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Đơn hàng</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url_admin('otp-config');?>"
                                        class="nav-link <?=$core->active_sidebar(['otp-config']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cấu hình</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?=$core->menuopen_sidebar(['store-fanpage', 'store-fanpage-edit', 'store-fanpage-config', 'store-fanpage-orders']);?>">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fab fa-facebook-square"></i>
                                <p>
                                    Bán Fanpage/Group
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url_admin('store-fanpage');?>"
                                        class="nav-link <?=$core->active_sidebar(['store-fanpage', 'store-fanpage-edit']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Quản lý sản phẩm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/store-fanpage-orders');?>"
                                        class="nav-link <?=$core->active_sidebar(['store-fanpage-orders']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Đơn hàng</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/store-fanpage-config');?>"
                                        class="nav-link <?=$core->active_sidebar(['store-fanpage-config']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cấu hình</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        <!--
                        <li class="nav-item <?=$core->menuopen_sidebar(['service-add',
                        'services', 'service-edit', 'service-order', 'service-order-edit']);?>">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fab fa-shopify"></i>
                                <p>
                                    Dịch Vụ Khác
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/service-add');?>"
                                        class="nav-link <?=$core->active_sidebar(['service-add']);?>">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        <p>Thêm dịch vụ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/services');?>"
                                        class="nav-link <?=$core->active_sidebar(['services','service-edit']);?>">
                                        <i class="fas fa-shopping-cart nav-icon"></i>
                                        <p>Danh sách dịch vụ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/service-order');?>"
                                        class="nav-link <?=$core->active_sidebar(['service-order','service-order-edit']);?>">
                                        <i class="fas fa-chart-area nav-icon"></i>
                                        <p>Đơn hàng dịch vụ</p>
                                    </a>
                                </li>
                            </ul>
                        </li>-->
                        <li class="nav-item <?=$core->menuopen_sidebar(['flutterwave','crypto','sv2-autobank', 'logs', 'dong-tien', 'nap-the', 'paypal', 'spin-history', 'perfectmoney']);?>">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-history"></i>
                                <p>
                                    Lịch Sử
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('index.php?module=admin&action=logs');?>"
                                        class="nav-link <?=$core->active_sidebar(['logs']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Nhật ký hoạt động</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('index.php?module=admin&action=dong-tien');?>"
                                        class="nav-link <?=$core->active_sidebar(['dong-tien']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Biến động số dư</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/nap-the');?>"
                                        class="nav-link <?=$core->active_sidebar(['nap-the']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lịch sử Nạp Thẻ</p>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="{{ url('admin/paypal');?>"
                                        class="nav-link <?=$core->active_sidebar(['paypal']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lịch sử Nạp PayPal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/perfectmoney');?>"
                                        class="nav-link <?=$core->active_sidebar(['perfectmoney']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lịch sử Nạp PM</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/crypto');?>"
                                        class="nav-link <?=$core->active_sidebar(['crypto']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lịch sử Nạp Crypto old</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/sv2-autobank');?>"
                                        class="nav-link <?=$core->active_sidebar(['sv2-autobank']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lịch sử Nạp Auto SV2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/spin-history');?>"
                                        class="nav-link <?=$core->active_sidebar(['spin-history']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lịch sử Vòng Quay</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/toyyibpay');?>"
                                        class="nav-link <?=$core->active_sidebar(['toyyibpay']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Toyyibpay History</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/flutterwave');?>"
                                        class="nav-link <?=$core->active_sidebar(['flutterwave']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Flutterwave History</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/squadco');?>"
                                        class="nav-link <?=$core->active_sidebar(['squadco']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Squadco History</p>
                                    </a>
                                </li> -->
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('index.php?module=admin&action=users');?>"
                                class="nav-link <?=$core->active_sidebar(['users', 'user-edit']);?>">
                                <i class="nav-icon fas fa-user-alt"></i>
                                <p>
                                    Thành Viên
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="{{ url('admin/email-campaigns');?>"
                                class="nav-link <?=$core->active_sidebar(['email-campaigns', 'email-campaign-add', 'email-campaign-edit', 'email-sending-view']);?>">
                                <i class="nav-icon fa-solid fa-envelope"></i>
                                <p>
                                    <?=__('Email Campaigns');?>
                                </p>
                            </a>
                        </li> -->
                        <li class="nav-item <?=$core->menuopen_sidebar(['affiliates', 'log-ref', 'withdraw']);?>">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Affiliates
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url_admin('withdraw');?>"
                                        class="nav-link <?=$core->active_sidebar(['rwithdraw']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Đơn rút tiền</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/log-ref');?>"
                                        class="nav-link <?=$core->active_sidebar(['log-ref']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lịch sử hoa hồng</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/affiliates');?>"
                                        class="nav-link <?=$core->active_sidebar(['affiliates']);?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cấu hình</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/bank-list');?>"
                                class="nav-link <?=$core->active_sidebar(['bank-list', 'bank-edit']);?>">
                                <i class="nav-icon fas fa-university"></i>
                                <p>
                                    Ngân Hàng
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url_admin('recharge-crypto');?>"
                                class="nav-link <?=$core->active_sidebar(['recharge-crypto']);?>">
                                <i class="nav-icon fas fa-coins"></i>
                                <p>
                                    Crypto
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/blog-list');?>"
                                class="nav-link <?=$core->active_sidebar(['blog-list', 'blog-edit', 'blog-add']);?>">
                                <i class="nav-icon fab fa-blogger-b"></i>
                                <p>
                                    Bài Viết
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('index.php?module=admin&action=invoices');?>"
                                class="nav-link <?=$core->active_sidebar(['invoices', 'invoice-edit']);?>">
                                <i class="nav-icon fas fa-file-invoice-dollar"></i>
                                <p>
                                    Hoá Đơn
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/coupon-list');?>"
                                class="nav-link <?=$core->active_sidebar(['coupon-list', 'coupon-edit', 'coupon-add', 'coupon-log']);?>">
                                <i class="nav-icon fas fa-percent"></i>
                                <p>
                                    Mã Giảm Giá
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/discount-list');?>"
                                class="nav-link <?=$core->active_sidebar(['discount-list', 'discount-edit', 'discount-add']);?>">
                                <i class="nav-icon fa-solid fa-tag"></i>
                                <p>
                                    Giảm giá
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="{{ url('admin/promotion-list');?>"
                                class="nav-link <?=$core->active_sidebar(['promotion-list', 'promotion-edit', 'promotion-add', 'promotion-log']);?>">
                                <i class="nav-icon fas fa-dollar"></i>
                                <p>
                                    Khuyến Mãi Nạp Tiền
                                </p>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a href="{{ url('admin/domain-list');?>"
                                class="nav-link <?=$core->active_sidebar(['domain-list']);?>">
                                <i class="nav-icon fas fa-list"></i>
                                <p>
                                    Quản lý website con
                                </p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="{{ url('admin/notification');?>"
                                class="nav-link <?=$core->active_sidebar(['notification']);?>">
                                <i class="nav-icon fas fa-bell"></i>
                                <p>
                                    Thông Báo
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="{{ url('admin/spin-list');?>"
                                class="nav-link <?=$core->active_sidebar(['spin-list', 'spin-add', 'spin-edit']);?>">
                                <i class="nav-icon fas fa-gamepad"></i>
                                <p>
                                    Vòng Quay
                                </p>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a href="{{ url('admin/giftbox-list');?>"
                                class="nav-link <?=$core->active_sidebar(['giftbox-list']);?>">
                                <i class="nav-icon fas fa-gift"></i>
                                <p>
                                    Gift Box
                                </p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="{{ url('admin/question-list');?>"
                                class="nav-link <?=$core->active_sidebar(['question-list', 'question-edit', 'question-add']);?>">
                                <i class="nav-icon fas fa-question-circle"></i>
                                <p>
                                    FAQ
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="{{ url('admin/feedback-list');?>"
                                class="nav-link <?=$core->active_sidebar(['feedback-list']);?>">
                                <i class="nav-icon fas fa-comment-dots"></i>
                                <p>
                                    Đánh Giá
                                </p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="{{ url('admin/menu-list');?>"
                                class="nav-link <?=$core->active_sidebar(['menu-list', 'menu-add', 'menu-edit']);?>">
                                <i class="nav-icon fas fa-bars"></i>
                                <p>
                                    Menu
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="{{ url('admin/language-list');?>"
                                class="nav-link <?=$core->active_sidebar(['language-list','language-add', 'language-edit', 'translate-list']);?>">
                                <i class="nav-icon fas fa-language"></i>
                                <p>
                                    Ngôn Ngữ
                                </p>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a href="{{ url('admin/currency-list');?>"
                                class="nav-link <?=$core->active_sidebar(['currency-list','currency-add', 'currency-edit']);?>">
                                <i class="nav-icon fas fa-wallet"></i>
                                <p>
                                    Tiền Tệ
                                </p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="{{ url('admin/theme');?>"
                                class="nav-link <?=$core->active_sidebar(['theme']);?>">
                                <i class="nav-icon fas fa-image"></i>
                                <p>
                                    Giao Diện
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/settings');?>"
                                class="nav-link <?=$core->active_sidebar(['settings']);?>">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Cài Đặt
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        
<nav class="main-header navbar navbar-expand navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('') }}" class="nav-link">TRANG KHÁCH</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="" target="_blank" class="nav-link">LIÊN HỆ</a>
        </li>
    
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>

@yield('content')

<script type="text/javascript">
 $(function() {
    $('#datatable').DataTable({
        "lengthMenu": [[10, 50, 100, 500, 1000, 2000, 5000, 10000 -1], [10, 50, 100, 500, 1000, 2000, 5000, 10000, "All"]]
    });
    $('#datatable1').DataTable({
        "lengthMenu": [[10, 50, 100, 500, 1000, 2000, 5000, 10000 -1], [10, 50, 100, 500, 1000, 2000, 5000, 10000, "All"]]
    });
    $('#datatable2').DataTable({
        "lengthMenu": [[10, 50, 100, 500, 1000, 2000, 5000, 10000 -1], [10, 50, 100, 500, 1000, 2000, 5000, 10000, "All"]]
    });

});

</script>

<footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
        
        <div id="google_translate_element"></div>
        <script type="text/javascript">
        // <![CDATA[
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'vi',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
        // ]]>
        </script>
        <script src="//translate.google.com/translate_a/element.js') }}?cb=googleTranslateElementInit"
            type="text/javascript"></script>

    </div>
    <b>Version</b> <b style="color:red;">1.0.0</b> - <strong>Powered By <a
            href="" target="_blank">Group 5</a></strong>
</footer>
</div>
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "101939031161934");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v16.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>


<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('template/public/AdminLTE3/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template/public/AdminLTE3/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/public/AdminLTE3/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template/public/AdminLTE3/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('template/public/AdminLTE3/dist/js/pages/dashboard.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('template/public/AdminLTE3/plugins/chart.js') }}/Chart.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js') }}/2.0.6/clipboard.min.js') }}"></script>
 <!-- daterangepicker -->
<script src="{{ asset('template/public/AdminLTE3/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('template/public/AdminLTE3/plugins/daterangepicker/daterangepicker.js') }}"></script>

{{ $body['footer'] }}

</body>

</html>
 