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




                <div class="col-lg-12 mt-3">
                    <div>

                        <div>

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
                                                        <th><img src="{{asset($category['image'])}}" width="30px" class="mr-2" />{{$category['name']}}</th>
                                                        <!--  -->
                                                        <th class="text-center hidemobile" width="10%">Hiện có</th>
                                                        <th class="text-center hidemobile" width="10%">Đã bán</th>
                                                        <th class="text-center hidemobile" width="10%">Giá</th>
                                                        <th class="text-center hidemobile" width="10%">Thao tác</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                            @foreach ($productFindCategory as $row)


                                                                <tr>
                                                                    <td>
                                                                        <div class="col-product-name">
                                                                            <img style="    width: 200px;" class="mr-1 py-1 d-none-600" src="{{ asset($row['preview'])}}">
                                                                            <div class="name-product">
                                                                                <h3>{{ $row['name']}}</h3>
                                                                                <div class="content-mota">
                                                                                    {{ $row['content']}}
                                                                                </div>
                                                                                <div class="d-none-more-than-601">
                                                                                    <div class="col-md-12 p-0 mt-2">
                                                                                        <span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                    <i class="far fa-money-bill-alt mr-1"></i>
                                                                                    <b>{{ $row['cost']}}</b>
                                                                                </span>
                                                                                        <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                    Còn lại:                                                <b>{{ App\Models\Account::Where('product_id', $row['id'])->Where('buyer', null)->count()}}</b>
                                                                                </span>
                                                                                        <span class="btn mb-1 btn-sm btn-outline-info">
                                                                                    Đã bán:                                                <b>27</b>
                                                                                </span>
                                                                                    </div>
                                                                                    <div class="col-md-12 p-0 mt-2">
                                                                                        <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(120, 1000,`{{ $row['name']}}`)">
                                                                                    <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                                            </button>


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                    Còn lại:                                <b>{{ App\Models\Account::Where('product_id', $row['id'])->Where('buyer', null)->count()}}</b>
                                                                                </span></td>
                                                                    <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                                                    Đã bán:                                <b>{{ App\Models\Account::Where('product_id', $row['id'])->Where('buyer', '!=', null)->count()}}</b>
                                                                                </span></td>
                                                                    <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-danger">
                                                                                    <i class="far fa-money-bill-alt mr-1"></i>
                                                                                    <b>{{ number_format($row['cost'])}}đ</b>
                                                                                </span>
                                                                    </td>
                                                                    <td class="text-center d-none-600">
                                                                        <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy({{ $row['id']}}, `{{ number_format($row['cost'])}}`, `{{ $row['name']}}`)">
                                                                                    <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                            </button>
                                                                    </td>
                                                                </tr>



                                            @endforeach

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





                <div class="modal fade" id="modalBuy" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content" style="background-image:url('{{asset('template/resources/images/bg-buy.png')}}');">
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
                                    <input type="number" class="form-control form-control-solid" onchange="totalPayment()" onkeyup="totalPayment()" value="1" placeholder="Nhập số lượng cần mua" id="amount" />
                                    <input type="hidden" value="" readonly class="form-control" id="modal-id">
                                    <input type="hidden" value="" readonly class="form-control" id="price">
                                    <input type="hidden" value="" readonly class="form-control" id="productId">
                                    <input class="form-control" type="hidden" id="token" value="dde2a73ed5f1ebdbc5237ae1dc3430ab">
                                </div>
                                {{-- <div class="form-group mb-3" id="showDiscountCode">
                                    <label>Mã giảm giá:</label>
                                    <input type="text" class="form-control" onchange="totalPayment()" onkeyup="totalPayment()" placeholder="Nhập mã giảm giá của bạn" id="coupon" />
                                </div> --}}
                                {{-- <div class="mb-3 text-right"><button id="btnshowDiscountCode"="btn btn-danger btn-sm">Nhập mã giảm giá</button></div> --}}
                                <div class="mb-3 text-center" style="font-size: 20px;">Tổng tiền cần thanh toán: <b id="total" style="color:red;"> </b>đ</div>
                                <div class="text-center mb-3">
                                    <button type="submit" id="btnBuy" onclick="buyProduct()" class="btn btn-primary btn-block"><i
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
                                    @foreach ($historyOrder as $row)

                                    <tr>

                                        <td style="height:20px;">
                                            <lord-icon src="https://cdn.lordicon.com/cllunfud.json" trigger="hover" style="width:30px;height:30px">
                                            </lord-icon> <b style="color: green;">***{{substr($row['buyer'], -3, 3)}}</b> Mua <b style="color: red;">{{$row['amount']}}</b>
                                            <b>{{ \App\Models\Product::find($row->product_id)->name }}</b> - <b style="color:blue;">{{number_format($row['pay'])}}đ</b>
                                        </td>
                                        <td><span class="badge badge-primary">{{$row['created_at']->diffForHumans()}}</span>
                                        </td>
                                    </tr>
                                    @endforeach

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

