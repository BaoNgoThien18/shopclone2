
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng Nhập</title>

    <link rel="shortcut icon" href="{{ asset('template/assets/storage/images/favicon_0MU.png')}}" />
    <link rel="stylesheet" href="{{ asset('template/public/datum/assets/css/backend-plugin.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template/resources/css/responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('template/resources/css/backend.css') }}?v=1.0.0">
    <link rel="stylesheet" href="{{ asset('template/resources/css/customize.css') }}">
    <script src="{{ asset('template/resources/js/jquery.js') }}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css') }}" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- sweetalert2-->
    <link class="main-stylesheet" href="{{ asset('template/public/sweetalert2/default.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('template/public/sweetalert2/sweetalert2.js') }}"></script>
    <!-- Cute Alert -->
    <link class="main-stylesheet" href="{{ asset('template/public/cute-alert/style.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('template/public/cute-alert/cute-alert.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('template/public/js/jquery-3.6.0.js') }}"></script>
    <script src="https://cdn.lordicon.com/xdjxvujz.js') }}"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .card-product {
            color: white;
            background-image: linear-gradient(to right, #13214E, #13214E, #10091A);
        }

        #loading-center {
            background: url('template/assets/storage/images/gif_loaderYVU.png') no-repeat scroll 50%;
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


    <!-- Script Header -->
</head>
<!-- Dev By CMSNT.CO | FB.COM/CMSNT.CO | ZALO.ME/0947838128 | MMO Solution -->
<style>
    .bg-image {
        background-position: 0 50%;
        background-size: cover;
    }
</style>

<body class="bg-image" style="background-image: url({{ asset('template/assets/storage/images/bg_login0XZ.png')}})">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <div class="wrapper">
        <section class="login-content">
            <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-md-5">
                        <div class="card p-3">
                            <div class="card-body">
                                <div class="auth-logo">
                                    <img src="https://mailngonre.site/assets/storage/images/logo_dark_BCE.png" class="img-fluid  rounded-normal  darkmode-logo" alt="logo">
                                    <img src="https://mailngonre.site/assets/storage/images/logo_light_3YR.png" class="img-fluid rounded-normal light-logo" alt="logo">
                                </div>
                                <h3 class="mb-3 font-weight-bold text-center">Đăng Nhập </h3>
                                <!-- <p class="text-center text-secondary mb-4">
                                    Chọn phương tiện truyền thông xã hội của bạn để tạo tài khoản</p>
                                <div class="social-btn d-flex justify-content-around align-items-center mb-4">
                                    <button class="btn btn-outline-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="88.428 12.828 107.543 207.085">
                                            <path
                                                d="M158.232 219.912v-94.461h31.707l4.747-36.813h-36.454V65.134c0-10.658 2.96-17.922 18.245-17.922l19.494-.009V14.278c-3.373-.447-14.944-1.449-28.406-1.449-28.106 0-47.348 17.155-47.348 48.661v27.149H88.428v36.813h31.788v94.461l38.016-.001z"
                                                fill="#3c5a9a" />
                                        </svg>
                                    </button>
                                    <button class="btn btn-outline-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 256 262" preserveAspectRatio="xMidYMid">
                                            <path
                                                d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"
                                                fill="#4285F4" />
                                            <path
                                                d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"
                                                fill="#34A853" />
                                            <path
                                                d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"
                                                fill="#FBBC05" />
                                            <path
                                                d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"
                                                fill="#EB4335" />
                                        </svg>
                                    </button>
                                    <button class="btn btn-outline-light">
                                        <svg width="20" height="20" viewBox="328 355 335 276"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M 630, 425 A 195, 195 0 0 1 331, 600 A 142, 142 0 0 0 428, 570A  70,  70 0 0 1 370, 523A  70,  70 0 0 0 401, 521A  70,  70 0 0 1 344, 455A  70,  70 0 0 0 372, 460A  70,  70 0 0 1 354, 370A 195, 195 0 0 0 495, 442A  67,  67 0 0 1 611, 380A 117, 117 0 0 0 654, 363A  65,  65 0 0 1 623, 401A 117, 117 0 0 0 662, 390A  65,  65 0 0 1 630, 425Z"
                                                style="fill:#3BA9EE;" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="mb-5">
                                    <p class="line-around text-secondary mb-0"><span
                                            class="line-around-1">hoặc</span></p>
                                </div> -->
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="text-secondary">Tên đăng nhập</label>
                                                <input class="form-control" type="text" id="username" placeholder="Enter Username">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mt-2">
                                            <div class="form-group">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label class="text-secondary">Mật khẩu</label>
                                                </div>
                                                <input class="form-control" type="password" id="password" placeholder="Vui lòng nhập mật khẩu">
                                            </div>
                                        </div>

                                    </div>
                                    <button type="button" id="btnLogin" class="btn btn-primary btn-block mt-2">Đăng Nhập    </button>
                                    <div class="col-lg-12 mt-3">
                                        <p class="mb-0 text-center">Bạn chưa có tài khoản? <a href="{{ route('register') }}">Đăng Ký</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('template/public/datum/assets/js/backend-bundle.min.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('template/public/datum/assets/js/customizer.js') }}"></script>
    <script src="{{ asset('template/public/datum/assets/js/sidebar.js') }}"></script>
    <!-- Flextree Javascript-->
    <script src="{{ asset('template/public/datum/assets/js/flex-tree.min.js') }}"></script>
    <script src="{{ asset('template/public/datum/assets/js/tree.js') }}"></script>
    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('template/public/datum/assets/js/table-treeview.js') }}"></script>
    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('template/public/datum/assets/js/sweetalert.js') }}"></script>
    <!-- Vectoe Map JavaScript -->
    <script src="{{ asset('template/public/datum/assets/js/vector-map-custom.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('template/public/datum/assets/js/chart-custom.js') }}"></script>
    <script src="{{ asset('template/public/datum/assets/js/charts/01.js') }}"></script>
    <script src="{{ asset('template/public/datum/assets/js/charts/02.js') }}"></script>
    <!-- slider JavaScript -->
    <script src="{{ asset('template/public/datum/assets/js/slider.js') }}"></script>
    <!-- Emoji picker -->
    <script src="{{ asset('template/public/datum/assets/vendor/emoji-picker-element/index.js') }}" type="module"></script>
    <!-- app JavaScript -->
    <script src="{{ asset('template/public/datum/assets/js/app.js') }}"></script>
</body>

</html>


<script type="text/javascript">
$("#btnLogin").on("click", function() {
    $('#btnLogin').html('<i class="fa fa-spinner fa-spin"></i> <?=__('Đang xử lý...');?>').prop('disabled',
        true);
    $.ajax({
        url: "{{  url('/ajax/auth/login') }}",
        method: "POST",
        dataType: "JSON",
        data: {
            _token: "{{ csrf_token() }}",
            username: $("#username").val(),
            password: $("#password").val(),
            recaptcha: $("#g-recaptcha-response").val()
        },
        success: function(respone) {
            if (respone.status == 'success') {
                cuteToast({
                    type: "success",
                    message: respone.msg,
                    timer: 5000
                });
                setTimeout("location.href = '{{  url('') }}';", 100);
            } else {
                Swal.fire(
                    '<?=__('Thất bại');?>',
                    respone.msg,
                    'error'
                );
            }
            $('#btnLogin').html('<?=__('Đăng Nhập   ');?>').prop('disabled', false);
        },
        error: function() {
            cuteToast({
                type: "error",
                message: 'Không thể xử lý',
                timer: 5000
            });
            $('#btnLogin').html('<?=__('Đăng Nhập   ');?>').prop('disabled', false);
        }

    });
});
</script>
