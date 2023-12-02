@extends('frontend.layouts.master')
@section('content')
<div style="padding-top:90px">
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <!--                 <div class="col-lg-12">
                    <div class="alert bg-white alert-danger" role="alert">
                        <div class="iq-alert-icon">
                            <i class="ri-alert-line"></i>
                        </div>
                        <a href="../client/security" class="iq-alert-text">Vui lòng bật xác minh 2 bước Google 2FA để bảo vệ tài khoản của bạn.</a>
                    </div>
                </div>
            -->

                <div class="col-lg-12">
                    <div class="alert bg-white alert-primary" role="alert">
                        <div class="iq-alert-icon">
                            <i class="ri-alert-line"></i>
                        </div>
                        <div class="iq-alert-text">
                            <p>Chào mừng bạn đến với trang web của chúng tôi! Chúng tôi tự hào mang đến cho bạn trải nghiệm mua sắm tài khoản chất lượng cao và an toàn. Dễ dàng sở hữu tài khoản ưa thích của bạn ngay hôm nay. Cùng chúng tôi khám phá
                                thế giới giải trí không giới hạn!</p>


                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <i>Gợi ý sản phẩm cho bạn:</i>
                            <br><br>
                            <ol class="row">
                                <li class="col-lg-4">
                                    <img src="https://cdn.divineshop.vn/image/catalog/Anh-SP/Netflix/Divine-Shop-NETFLIX-1-thang-23298.jpg?hash=1658829694" alt="">
                                    <a href="javascript:void(0);" type="button">
                                        <b>Tài Khoản Netflix Premium 1 tháng - Xem phim chất lượng 4k và Full HD</b> -
                                        <b style="color: red;">1.430đ</b></a>
                                </li>
                                <li class="col-lg-4">
                                    <img src="https://cdn.divineshop.vn/image/catalog/Anh-SP/Spotify/Divine-Shop-Goi-Gia-Han-Spotify-1-Nam-40567.jpg?hash=1658742748" alt="">
                                    <a href="javascript:void(0);" type="button">
                                        <b>Gói gia hạn Spotify Premium 01 năm</b> -
                                        <b style="color: red;">1.430đ</b></a>
                                </li>
                                <li class="col-lg-4">
                                    <img src="https://cdn.divineshop.vn/image/catalog/Anh-SP/Zoom/Divine-Shop-Nang-cap-Zoom-Pro-1-thang-80331.jpg?hash=1658975559" alt="">
                                    <a href="javascript:void(0);" type="button">
                                        <b>Nâng cấp Tài khoản Zoom Pro 1 tháng</b> -
                                        <b style="color: red;">1.430đ</b></a>
                                </li>
                                <li class="col-lg-4">
                                    <img src="https://cdn.divineshop.vn/image/catalog/Anh-SP/Windows/Divine-shop-windows-10-pro-55555.jpg?hash=1658743921" alt="">
                                    <a href="javascript:void(0);" type="button">
                                        <b>Tài Khoản Netflix Premium 1 tháng - Xem phim chất lượng 4k và Full HD</b> -
                                        <b style="color: red;">1.430đ</b></a>
                                </li>
                                <li class="col-lg-4">
                                    <img src="https://cdn.divineshop.vn/image/catalog/Anh-SP/Youtube/Divine-Shop-YOUTUBE-NO-ADS-1-NAM-53447.jpg?hash=1658743452" alt="">
                                    <a href="javascript:void(0);" type="button">
                                        <b>Gia hạn YouTube Premium + YouTube Music (1 Năm)</b> -
                                        <b style="color: red;">1.430đ</b></a>
                                </li>
                                <li class="col-lg-4">
                                    <img src="https://cdn.divineshop.vn/image/catalog/Discord%20Nitro%203%20thang-71170.jpg?hash=1672370038" alt="">
                                    <a href="javascript:void(0);" type="button">
                                        <b>Discord Nitro 3 tháng (Đăng kí lần đầu)</b> -
                                        <b style="color: red;">1.430đ</b></a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12">
                    <div class="alert text-white bg-dark" role="alert">
                        <marquee>HỆ THỐNG CHÚNG TÔI BÁN MỌI THỨ TRÊN ĐỜI !!!</marquee>
                    </div>
                </div>




                <div class="col-lg-12 mt-3">
                    <div>

                        <div>
                            <ul class="nav nav-pills mb-1 nav-fill" id="pills-tab-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab-fill" data-toggle="pill" href="#pills-home-fill" role="tab" aria-controls="pills-home" aria-selected="true"><i
                    class="fas fa-shopping-cart mr-1"></i>TẤT CẢ SẢN PHẨM</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-home-tab-fill" data-toggle="pill" href="#pills-home-fill" role="tab" aria-controls="pills-home" aria-selected="true"><img src="https://cdn.divineshop.vn/image/catalog/Anh/Icon%20svg/giaitri-25627.svg?hash=1640449820" width="25px" />Giải trí</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-home-tab-fill" data-toggle="pill" href="#pills-home-fill" role="tab" aria-controls="pills-home" aria-selected="true"><img src="https://cdn.divineshop.vn/image/catalog/Anh/Icon%20svg/hoctap-68990.svg?hash=1640449820" width="25px" />Học tập</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-home-tab-fill" data-toggle="pill" href="#pills-home-fill" role="tab" aria-controls="pills-home" aria-selected="true"><img src="https://cdn.divineshop.vn/image/catalog/Anh/Icon%20svg/hoctap-68990.svg?hash=1640449820" width="25px" />Làm việc</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-home-tab-fill" data-toggle="pill" href="#pills-home-fill" role="tab" aria-controls="pills-home" aria-selected="true"><img src="https://cdn.divineshop.vn/image/catalog/Banner/Icon/Xbox%20Logo-88261.svg?hash=1640449899" width="25px" />Game</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent-1">
                                <div class="tab-pane fade show active" id="pills-home-fill" role="tabpanel" aria-labelledby="pills-home-tab-fill">
                                    <div id="showProduct">
                                        <style>
                                            .ribbon-wrapper.ribbon-lg .ribbon {
                                                right: 0;
                                                top: 26px;
                                                width: 150px;
                                            }

                                            .ribbon-wrapper .ribbon {
                                                box-shadow: 0 0 3px rgb(0 0 0 / 30%);
                                                font-size: .8rem;
                                                line-height: 100%;
                                                padding: 0.375rem 0;
                                                position: relative;
                                                right: -2px;
                                                text-align: center;
                                                text-shadow: 0 -1px 0 rgb(0 0 0 / 40%);
                                                text-transform: uppercase;
                                                top: 10px;
                                                -webkit-transform: rotate(45deg);
                                                transform: rotate(45deg);
                                                width: 90px;
                                            }

                                            .ribbon-wrapper.ribbon-lg {
                                                height: 120px;
                                                width: 120px;
                                            }

                                            .ribbon-wrapper {
                                                height: 70px;
                                                overflow: hidden;
                                                position: absolute;
                                                right: 12px;
                                                top: -2px;
                                                width: 70px;
                                                z-index: 10;
                                            }
                                        </style>
                                        <style>
                                            .ribbon-wrapper.ribbon-lg .ribbon {
                                                right: 0;
                                                top: 26px;
                                                width: 150px;
                                            }

                                            .ribbon-wrapper .ribbon {
                                                box-shadow: 0 0 3px rgb(0 0 0 / 30%);
                                                font-size: .8rem;
                                                line-height: 100%;
                                                padding: 0.375rem 0;
                                                position: relative;
                                                right: -2px;
                                                text-align: center;
                                                text-shadow: 0 -1px 0 rgb(0 0 0 / 40%);
                                                text-transform: uppercase;
                                                top: 10px;
                                                -webkit-transform: rotate(45deg);
                                                transform: rotate(45deg);
                                                width: 90px;
                                            }

                                            .ribbon-wrapper.ribbon-lg {
                                                height: 120px;
                                                width: 120px;
                                            }

                                            .ribbon-wrapper {
                                                height: 70px;
                                                overflow: hidden;
                                                position: absolute;
                                                right: 12px;
                                                top: -2px;
                                                width: 70px;
                                                z-index: 10;
                                            }
                                        </style>
                                        <style>
                                            .thumbnail-mobile {
                                                width: 32px;
                                                height: 24px;
                                                overflow: hidden;
                                                border: 1px solid #e5e5e5;
                                            }

                                            .thumbnail-mobile img {
                                                width: 100%;
                                                height: 100%;
                                                transition-duration: 0.1s;
                                            }

                                            .thumbnail-mobile img:hover {
                                                position: absolute;
                                                width: 350px;
                                                height: 210px;
                                                right: -20px;
                                                border: 3px solid #00ac15;
                                                border-radius: 9px;
                                                z-index: 1000;
                                            }
                                        </style>

                                        <div class="row">





                                            <style>
                                                /* CSS cho các thiết bị có chiều rộng màn hình nhỏ hơn hoặc bằng 600px */

                                                @media only screen and (max-width: 600px) {
                                                    .hidemobile {
                                                        display: none;
                                                    }
                                                }
                                            </style>

                                            <div class="col-sm-12 col-md-12 col-lg-12 mt-12 mt-md-3 p-0 ">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-hover mb-0">
                                                        <thead class="table-color-heading" style="background:#12214E;color:white;">
                                                            <tr>
                                                                <th><img src="https://cdn.divineshop.vn/image/catalog/Anh/Icon%20svg/giaitri-25627.svg?hash=1640449820" width="30px" class="mr-2" />Giải trí</th>
                                                                <!--  -->
                                                                <th class="text-center hidemobile" width="10%">Hiện có</th>
                                                                <th class="text-center hidemobile" width="10%">Đã bán</th>
                                                                <th class="text-center hidemobile" width="10%">Giá</th>
                                                                <th class="text-center hidemobile" width="10%">Thao tác</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>


                                                            <tr>
                                                                <td>
                                                                    <div class="col-product-name">
                                                                        <img style="    width: 200px;" class="mr-1 py-1 d-none-600" src="https://cdn.divineshop.vn/image/catalog/GearUp%20Booster%201%20thang-17003.jpg?hash=1695604377">
                                                                        <div class="name-product">
                                                                            <h3>Tài khoản Quizlet Plus (1 tháng)</h3>
                                                                            <div class="content-mota">
                                                                                <ul>
                                                                                    <li>Thể loại: <b>Giải trí</b></li>
                                                                                    <li>Tình trạng: <b>Còn hàng</b></li>
                                                                                    <li>Thời gian: <b>3/6/12 tháng</b></li>

                                                                                </ul>
                                                                            </div>
                                                                            <div class="d-none-more-than-601">
                                                                                <div class="col-md-12 p-0 mt-2">
                                                                                    <span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                                <b>1.000đ</b>
                                                                            </span>
                                                                                    <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Còn lại:                                                <b>291</b>
                                                                            </span>
                                                                                    <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Đã bán:                                                <b>27</b>
                                                                            </span>
                                                                                </div>
                                                                                <div class="col-md-12 p-0 mt-2">
                                                                                    <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(120, 1000,`Clone Việt - Die Ads + CP về Email ✔️`)">
                                                                                <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                                            </button>


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Còn lại:                                <b>291</b>
                                                                            </span></td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Đã bán:                                <b>27</b>
                                                                            </span></td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                                <b>1.000đ</b>
                                                                            </span>
                                                                </td>
                                                                <td class="text-center d-none-600">
                                                                    <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(120, 1000,`Clone Việt - Die Ads + CP về Email ✔️`)">
                                                                                <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                            </button>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td>
                                                                    <div class="col-product-name">
                                                                        <img style="    width: 200px;" class="mr-1 py-1 d-none-600" src="https://cdn.divineshop.vn/image/catalog/GearUp%20Booster%201%20thang-17003.jpg?hash=1695604377">
                                                                        <div class="name-product">
                                                                            <h3>Tài khoản Quizlet Plus (1 tháng)</h3>
                                                                            <div class="content-mota">
                                                                                <ul>
                                                                                    <li>Thể loại: <b>Giải trí</b></li>
                                                                                    <li>Tình trạng: <b>Còn hàng</b></li>
                                                                                    <li>Thời gian: <b>3/6/12 tháng</b></li>

                                                                                </ul>
                                                                            </div>
                                                                            <div class="d-none-more-than-601">
                                                                                <div class="col-md-12 p-0 mt-2">
                                                                                    <span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                                <b>1.000đ</b>
                                                                            </span>
                                                                                    <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Còn lại:                                                <b>291</b>
                                                                            </span>
                                                                                    <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Đã bán:                                                <b>27</b>
                                                                            </span>
                                                                                </div>
                                                                                <div class="col-md-12 p-0 mt-2">
                                                                                    <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(120, 1000,`Clone Việt - Die Ads + CP về Email ✔️`)">
                                                                                <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                                            </button>


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Còn lại:                                <b>291</b>
                                                                            </span></td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Đã bán:                                <b>27</b>
                                                                            </span></td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                                <b>1.000đ</b>
                                                                            </span>
                                                                </td>
                                                                <td class="text-center d-none-600">
                                                                    <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(120, 1000,`Clone Việt - Die Ads + CP về Email ✔️`)">
                                                                                <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                            </button>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="col-product-name">
                                                                        <img style="    width: 200px;" class="mr-1 py-1 d-none-600" src="https://cdn.divineshop.vn/image/catalog/GearUp%20Booster%201%20thang-17003.jpg?hash=1695604377">
                                                                        <div class="name-product">
                                                                            <h3>Tài khoản Quizlet Plus (1 tháng)</h3>
                                                                            <div class="content-mota">
                                                                                <ul>
                                                                                    <li>Thể loại: <b>Giải trí</b></li>
                                                                                    <li>Tình trạng: <b>Còn hàng</b></li>
                                                                                    <li>Thời gian: <b>3/6/12 tháng</b></li>

                                                                                </ul>
                                                                            </div>
                                                                            <div class="d-none-more-than-601">
                                                                                <div class="col-md-12 p-0 mt-2">
                                                                                    <span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                                <b>1.000đ</b>
                                                                            </span>
                                                                                    <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Còn lại:                                                <b>291</b>
                                                                            </span>
                                                                                    <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Đã bán:                                                <b>27</b>
                                                                            </span>
                                                                                </div>
                                                                                <div class="col-md-12 p-0 mt-2">
                                                                                    <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(120, 1000,`Clone Việt - Die Ads + CP về Email ✔️`)">
                                                                                <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                                            </button>


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Còn lại:                                <b>291</b>
                                                                            </span></td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Đã bán:                                <b>27</b>
                                                                            </span></td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                                <b>1.000đ</b>
                                                                            </span>
                                                                </td>
                                                                <td class="text-center d-none-600">
                                                                    <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(120, 1000,`Clone Việt - Die Ads + CP về Email ✔️`)">
                                                                                <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                            </button>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="col-product-name">
                                                                        <img style="    width: 200px;" class="mr-1 py-1 d-none-600" src="https://cdn.divineshop.vn/image/catalog/GearUp%20Booster%201%20thang-17003.jpg?hash=1695604377">
                                                                        <div class="name-product">
                                                                            <h3>GearUp Booster giảm lag khi chơi game (Windows - 1 Tháng)</h3>
                                                                            <div class="content-mota">
                                                                                <ul>
                                                                                    <li>Thể loại: <b>Giải trí</b></li>
                                                                                    <li>Tình trạng: <b>Còn hàng</b></li>
                                                                                    <li>Thời gian: <b>3/6/12 tháng</b></li>

                                                                                </ul>
                                                                            </div>
                                                                            <div class="d-none-more-than-601">
                                                                                <div class="col-md-12 p-0 mt-2">
                                                                                    <span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                                <b>1.000đ</b>
                                                                            </span>
                                                                                    <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Còn lại:                                                <b>291</b>
                                                                            </span>
                                                                                    <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Đã bán:                                                <b>27</b>
                                                                            </span>
                                                                                </div>
                                                                                <div class="col-md-12 p-0 mt-2">
                                                                                    <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(120, 1000,`Clone Việt - Die Ads + CP về Email ✔️`)">
                                                                                <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                                            </button>


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Còn lại:                                <b>291</b>
                                                                            </span></td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Đã bán:                                <b>27</b>
                                                                            </span></td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                                <b>1.000đ</b>
                                                                            </span>
                                                                </td>
                                                                <td class="text-center d-none-600">
                                                                    <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(120, 1000,`Clone Việt - Die Ads + CP về Email ✔️`)">
                                                                                <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                            </button>
                                                                </td>
                                                            </tr>





                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12 mt-12 mt-md-3 p-0 ">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-hover mb-0">
                                                        <thead class="table-color-heading" style="background:#12214E;color:white;">
                                                            <tr>
                                                                <th><img src="https://cdn.divineshop.vn/image/catalog/Anh/Icon%20svg/hoctap-68990.svg?hash=1640449820" width="30px" class="mr-2" />Học tập</th>
                                                                <!--  -->
                                                                <th class="text-center hidemobile" width="10%">Hiện có</th>
                                                                <th class="text-center hidemobile" width="10%">Đã bán</th>
                                                                <th class="text-center hidemobile" width="10%">Giá</th>
                                                                <th class="text-center hidemobile" width="10%">Thao tác</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>


                                                            <tr>
                                                                <td>
                                                                    <div class="col-product-name">
                                                                        <img style="    width: 200px;" class="mr-1 py-1 d-none-600" src="https://cdn.divineshop.vn/image/catalog/Anh%201406/Quizlet%20Plus.png?hash=1623640491">
                                                                        <div class="name-product">
                                                                            <h3>GearUp Booster giảm lag khi chơi game (Windows - 1 Tháng)</h3>
                                                                            <div class="content-mota">
                                                                                <ul>
                                                                                    <li>Thể loại: <b>Giải trí</b></li>
                                                                                    <li>Tình trạng: <b>Còn hàng</b></li>
                                                                                    <li>Thời gian: <b>3/6/12 tháng</b></li>

                                                                                </ul>
                                                                            </div>
                                                                            <div class="d-none-more-than-601">
                                                                                <div class="col-md-12 p-0 mt-2">
                                                                                    <span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                                <b>1.000đ</b>
                                                                            </span>
                                                                                    <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Còn lại:                                                <b>291</b>
                                                                            </span>
                                                                                    <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Đã bán:                                                <b>27</b>
                                                                            </span>
                                                                                </div>
                                                                                <div class="col-md-12 p-0 mt-2">
                                                                                    <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(120, 1000,`Clone Việt - Die Ads + CP về Email ✔️`)">
                                                                                <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                                            </button>


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Còn lại:                                <b>291</b>
                                                                            </span></td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Đã bán:                                <b>27</b>
                                                                            </span></td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                                <b>1.000đ</b>
                                                                            </span>
                                                                </td>
                                                                <td class="text-center d-none-600">
                                                                    <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(120, 1000,`Clone Việt - Die Ads + CP về Email ✔️`)">
                                                                                <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                            </button>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td>
                                                                    <div class="col-product-name">
                                                                        <img style="    width: 200px;" class="mr-1 py-1 d-none-600" src="https://cdn.divineshop.vn/image/catalog/Anh-SP/Kh%C3%A1c/Skillshare%20premium%202%20month-56292.jpg?hash=1678939149">
                                                                        <div class="name-product">
                                                                            <h3>GearUp Booster giảm lag khi chơi game (Windows - 1 Tháng)</h3>
                                                                            <div class="content-mota">
                                                                                <ul>
                                                                                    <li>Thể loại: <b>Giải trí</b></li>
                                                                                    <li>Tình trạng: <b>Còn hàng</b></li>
                                                                                    <li>Thời gian: <b>3/6/12 tháng</b></li>

                                                                                </ul>
                                                                            </div>
                                                                            <div class="d-none-more-than-601">
                                                                                <div class="col-md-12 p-0 mt-2">
                                                                                    <span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                                <b>1.000đ</b>
                                                                            </span>
                                                                                    <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Còn lại:                                                <b>291</b>
                                                                            </span>
                                                                                    <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Đã bán:                                                <b>27</b>
                                                                            </span>
                                                                                </div>
                                                                                <div class="col-md-12 p-0 mt-2">
                                                                                    <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(120, 1000,`Clone Việt - Die Ads + CP về Email ✔️`)">
                                                                                <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                                            </button>


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Còn lại:                                <b>291</b>
                                                                            </span></td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Đã bán:                                <b>27</b>
                                                                            </span></td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                                <b>1.000đ</b>
                                                                            </span>
                                                                </td>
                                                                <td class="text-center d-none-600">
                                                                    <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(120, 1000,`Clone Việt - Die Ads + CP về Email ✔️`)">
                                                                                <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                            </button>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="col-product-name">
                                                                        <img style="    width: 200px;" class="mr-1 py-1 d-none-600" src="https://cdn.divineshop.vn/image/catalog/Anh-SP/Kh%C3%A1c/Skillshare%20premium%202%20month-56292.jpg?hash=1678939149">
                                                                        <div class="name-product">
                                                                            <h3>GearUp Booster giảm lag khi chơi game (Windows - 1 Tháng)</h3>
                                                                            <div class="content-mota">
                                                                                <ul>
                                                                                    <li>Thể loại: <b>Giải trí</b></li>
                                                                                    <li>Tình trạng: <b>Còn hàng</b></li>
                                                                                    <li>Thời gian: <b>3/6/12 tháng</b></li>

                                                                                </ul>
                                                                            </div>
                                                                            <div class="d-none-more-than-601">
                                                                                <div class="col-md-12 p-0 mt-2">
                                                                                    <span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                                <b>1.000đ</b>
                                                                            </span>
                                                                                    <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Còn lại:                                                <b>291</b>
                                                                            </span>
                                                                                    <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Đã bán:                                                <b>27</b>
                                                                            </span>
                                                                                </div>
                                                                                <div class="col-md-12 p-0 mt-2">
                                                                                    <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(120, 1000,`Clone Việt - Die Ads + CP về Email ✔️`)">
                                                                                <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                                            </button>


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Còn lại:                                <b>291</b>
                                                                            </span></td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Đã bán:                                <b>27</b>
                                                                            </span></td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                                <b>1.000đ</b>
                                                                            </span>
                                                                </td>
                                                                <td class="text-center d-none-600">
                                                                    <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(120, 1000,`Clone Việt - Die Ads + CP về Email ✔️`)">
                                                                                <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                            </button>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="col-product-name">
                                                                        <img style="    width: 200px;" class="mr-1 py-1 d-none-600" src="https://cdn.divineshop.vn/image/catalog/Anh%201406/Quizlet%20Plus.png?hash=1623640491">
                                                                        <div class="name-product">
                                                                            <h3>Tài khoản Quizlet Plus (1 tháng)</h3>
                                                                            <div class="content-mota">
                                                                                <ul>
                                                                                    <li>Thể loại: <b>Giải trí</b></li>
                                                                                    <li>Tình trạng: <b>Còn hàng</b></li>
                                                                                    <li>Thời gian: <b>3/6/12 tháng</b></li>

                                                                                </ul>
                                                                            </div>
                                                                            <div class="d-none-more-than-601">
                                                                                <div class="col-md-12 p-0 mt-2">
                                                                                    <span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                                <b>1.000đ</b>
                                                                            </span>
                                                                                    <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Còn lại:                                                <b>291</b>
                                                                            </span>
                                                                                    <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Đã bán:                                                <b>27</b>
                                                                            </span>
                                                                                </div>
                                                                                <div class="col-md-12 p-0 mt-2">
                                                                                    <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(120, 1000,`Clone Việt - Die Ads + CP về Email ✔️`)">
                                                                                <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                                            </button>


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Còn lại:                                <b>291</b>
                                                                            </span></td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                Đã bán:                                <b>27</b>
                                                                            </span></td>
                                                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                                                <b>1.000đ</b>
                                                                            </span>
                                                                </td>
                                                                <td class="text-center d-none-600">
                                                                    <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(120, 1000,`Clone Việt - Die Ads + CP về Email ✔️`)">
                                                                                <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                            </button>
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
                        </div>

                    </div>
                </div>





                <div class="modal fade" id="modalBuy" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content" style="background-image:url('../resources/images/bg-buy.png');">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thanh toán đơn hàng</h5>
                                <button type="button" class="close" style="color: red;" data-dismiss="modal" aria-label="Close">
            <i class="fas fa-window-close"></i>
        </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label>Tên sản phẩm:</label>
                                    <input type="text" class="form-control" id="name" readonly />
                                </div>
                                <div class="form-group mb-3">
                                    <label>Số lượng cần mua:</label>
                                    <input type="number" class="form-control form-control-solid" onchange="totalPayment()" onkeyup="totalPayment()" placeholder="Nhập số lượng cần mua" id="amount" />
                                    <input type="hidden" value="" readonly class="form-control" id="modal-id">
                                    <input type="hidden" value="" readonly class="form-control" id="price">
                                    <input class="form-control" type="hidden" id="token" value="dde2a73ed5f1ebdbc5237ae1dc3430ab">
                                </div>
                                <div class="form-group mb-3" id="showDiscountCode">
                                    <label>Mã giảm giá:</label>
                                    <input type="text" class="form-control" onchange="totalPayment()" onkeyup="totalPayment()" placeholder="Nhập mã giảm giá của bạn" id="coupon" />
                                </div>
                                <div class="mb-3 text-right"><button id="btnshowDiscountCode"="btn btn-danger btn-sm">Nhập mã giảm giá</button></div>
                                <div class="mb-3 text-center" style="font-size: 20px;">Tổng tiền cần thanh toán: <b id="total" style="color:red;">0</b></div>
                                <div class="text-center mb-3">
                                    <button type="submit" id="btnBuy"="btn btn-primary btn-block"><i
                    class="fas fa-credit-card mr-1"></i>Thanh toán</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row p-2 mt-4">
            <div class="col-lg-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-header d-flex justify-content-between" style="background: #12214E;">
                        <div class="header-title">
                            <h5 class="card-title" style="color:white;">ĐƠN HÀNG GẦN ĐÂY</h5>
                        </div>
                    </div>
                    <div class="card-body p-0" style="height:500px;overflow-x:hidden;overflow-y:auto;">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <tbody>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...1</b> Mua <b style="color: red;">12</b>
                                            <b>SC3 - VIA VIỆT SIÊU CỔ GIỚI TÍNH NỮ...</b> - <b style="color:blue;">1.080.000đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...2k6</b> Mua <b style="color: red;">9</b>
                                            <b>...</b> - <b style="color:blue;">198.000đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...hrd</b> Mua <b style="color: red;">28</b>
                                            <b>VIA ẤN - PAKISTAN 2FA | RANDOM NEW/CỔ - R...</b> - <b style="color:blue;">215.600đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...gwf</b> Mua <b style="color: red;">17</b>
                                            <b>SC4 - VIA VIỆT SIÊU CỔ GIỚI TÍNH NAM ...</b> - <b style="color:blue;">1.360.000đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...115</b> Mua <b style="color: red;">7</b>
                                            <b>...</b> - <b style="color:blue;">154.000đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...ang</b> Mua <b style="color: red;">21</b>
                                            <b>BloxFruit Max Level + Godhuman +CDK + +90% So...</b> - <b style="color:blue;">378.000đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...tpa</b> Mua <b style="color: red;">27</b>
                                            <b>C1 - CLONE VIỆT 0-100 BẠN BÈ HÀNG REG N...</b> - <b style="color:blue;">270.000đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...xot</b> Mua <b style="color: red;">12</b>
                                            <b>SC2 - VIA VIỆT SIÊU CỔ GIỚI TÍNH NAM ...</b> - <b style="color:blue;">1.200.000đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...ixe</b> Mua <b style="color: red;">10</b>
                                            <b>...</b> - <b style="color:blue;">14.300đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...ydo</b> Mua <b style="color: red;">17</b>
                                            <b>SC3 - VIA VIỆT SIÊU CỔ GIỚI TÍNH NỮ...</b> - <b style="color:blue;">1.530.000đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...g38</b> Mua <b style="color: red;">20</b>
                                            <b>C1 - CLONE VIỆT 0-100 BẠN BÈ HÀNG REG N...</b> - <b style="color:blue;">200.000đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...spm</b> Mua <b style="color: red;">6</b>
                                            <b>C1 - CLONE VIỆT 0-100 BẠN BÈ HÀNG REG N...</b> - <b style="color:blue;">60.000đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...hiv</b> Mua <b style="color: red;">20</b>
                                            <b>SC2 - VIA VIỆT SIÊU CỔ GIỚI TÍNH NAM ...</b> - <b style="color:blue;">2.000.000đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...yxv</b> Mua <b style="color: red;">28</b>
                                            <b>...</b> - <b style="color:blue;">49.280đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...duk</b> Mua <b style="color: red;">1</b>
                                            <b>SC1 - VIA VIỆT SIÊU CỔ GIỚI TÍNH NỮ...</b> - <b style="color:blue;">100.000đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...ita</b> Mua <b style="color: red;">20</b>
                                            <b>Hotmail sống 6-12 tháng...</b> - <b style="color:blue;">7.100đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...u47</b> Mua <b style="color: red;">27</b>
                                            <b>MAX CARE V23.03.06 - DÙNG 1 THÁNG...</b> - <b style="color:blue;">2.970.000đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...irt</b> Mua <b style="color: red;">1</b>
                                            <b>SC1 - VIA VIỆT SIÊU CỔ GIỚI TÍNH NỮ...</b> - <b style="color:blue;">100.000đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...zhd</b> Mua <b style="color: red;">1</b>
                                            <b>Discord Very SDT +Mail Live +Token Live +Avat...</b> - <b style="color:blue;">3.500đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...vhc</b> Mua <b style="color: red;">11</b>
                                            <b>SC3 - VIA VIỆT SIÊU CỔ GIỚI TÍNH NỮ...</b> - <b style="color:blue;">990.000đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-header d-flex justify-content-between" style="background: #12214E;">
                        <div class="header-title">
                            <h5 class="card-title" style="color:white;">NẠP TIỀN GẦN ĐÂY</h5>
                        </div>
                    </div>
                    <div class="card-body p-0" style="height:500px;overflow-x:hidden;overflow-y:auto;">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <tbody>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...sit</b> thực hiện nạp <b style="color:blue;">40.000đ</b> -
                                            <b style="color:red;">MOMO</b>
                                        </td>
                                        <td><span class="badge badge-primary">2 tuần trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...der</b> thực hiện nạp <b style="color:blue;">40.000đ</b> -
                                            <b style="color:red;">MOMO</b>
                                        </td>
                                        <td><span class="badge badge-primary">3 tuần trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...lsp</b> thực hiện nạp <b style="color:blue;">400.000đ</b> -
                                            <b style="color:red;">VPBank</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...ljr</b> thực hiện nạp <b style="color:blue;">70.000đ</b> -
                                            <b style="color:red;">THESIEURE</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...mfq</b> thực hiện nạp <b style="color:blue;">2.000.000đ</b> -
                                            <b style="color:red;">ACB</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...922</b> thực hiện nạp <b style="color:blue;">1.500.000đ</b> -
                                            <b style="color:red;">Techcombank</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...bwf</b> thực hiện nạp <b style="color:blue;">1.500.000đ</b> -
                                            <b style="color:red;">Zalo Pay</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...ncp</b> thực hiện nạp <b style="color:blue;">70.000đ</b> -
                                            <b style="color:red;">TPBank</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...bpy</b> thực hiện nạp <b style="color:blue;">40.000đ</b> -
                                            <b style="color:red;">ACB</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...579</b> thực hiện nạp <b style="color:blue;">50.000đ</b> -
                                            <b style="color:red;">MBBank</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...08a</b> thực hiện nạp <b style="color:blue;">1.000.000đ</b> -
                                            <b style="color:red;">Zalo Pay</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...ang</b> thực hiện nạp <b style="color:blue;">10.000đ</b> -
                                            <b style="color:red;">THESIEURE</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...bwf</b> thực hiện nạp <b style="color:blue;">25.000đ</b> -
                                            <b style="color:red;">ACB</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...ayc</b> thực hiện nạp <b style="color:blue;">400.000đ</b> -
                                            <b style="color:red;">ACB</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...ark</b> thực hiện nạp <b style="color:blue;">200.000đ</b> -
                                            <b style="color:red;">THESIEURE</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...gib</b> thực hiện nạp <b style="color:blue;">65.000đ</b> -
                                            <b style="color:red;">ACB</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...h14</b> thực hiện nạp <b style="color:blue;">300.000đ</b> -
                                            <b style="color:red;">MBBank</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...jdo</b> thực hiện nạp <b style="color:blue;">15.000đ</b> -
                                            <b style="color:red;">THESIEURE</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...usi</b> thực hiện nạp <b style="color:blue;">60.000đ</b> -
                                            <b style="color:red;">Vietcombank</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">

                                            <lord-icon src="https://cdn.lordicon.com/ujmqspux.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">...608</b> thực hiện nạp <b style="color:blue;">1.000.000đ</b> -
                                            <b style="color:red;">MBBank</b>
                                        </td>
                                        <td><span class="badge badge-primary">1 tháng trước</span>
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

</div>
@endsection

