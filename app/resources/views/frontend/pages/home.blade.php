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

                                @foreach ($product->topProduct() as $row)


                                <li class="col-lg-4">
                                    <img src="{{$row['preview']}}" alt="">
                                    <a href="javascript:void(0);" type="button">
                                        <b>{{$row['name']}}</b> -
                                        <b style="color: red;">{{ number_format($row['cost']) }}đ</b></a>
                                </li>

                                @endforeach

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
                                <li class="nav-item category " data-category-id="-1">
                                    <a class="nav-link active" id="pills-home-tab-fill" data-toggle="pill" href="#pills-home-fill" role="tab" aria-controls="pills-home" aria-selected="true"><i
                                    class="fas fa-shopping-cart mr-1"></i>TẤT CẢ SẢN PHẨM</a>
                                </li>
                                @foreach ($categories as $row)
                                <li class="nav-item category " data-category-id="{{$row['id']}}">
                                    <a class="nav-link" id="pills-home-tab-fill" data-toggle="pill" href="#pills-home-fill" role="tab" aria-controls="pills-home" aria-selected="true"><img src="{{$row['image']}}" width="25px" />{{$row['name']}}</a>
                                </li>
                                @endforeach

                            </ul>
                            <div class="tab-content" id="pills-tabContent-1">
                                <div class="tab-pane fade show active" id="pills-home-fill" role="tabpanel" aria-labelledby="pills-home-tab-fill">
                                    <div id="showProduct">

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
<<<<<<< HEAD
                                            <b>{{ \App\Models\Product::find($row->product_id)->name }}</b> - <b style="color:blue;">{{number_format($row['pay'])}}đ</b>
=======
                                            <b>@if($product = \App\Models\Product::find($row->product_id))
                                                {{ $product->name }}
                                            @endif
                                            </b> - <b style="color:blue;">{{number_format($row['pay'])}}đ</b>
>>>>>>> 3c26c070cdfa3d209bd216e8d39a69b1d7532ff6
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


<script type="text/javascript">
$(".category").on("click", function() {
    var categoryId = $(this).attr('data-category-id');
    console.log(categoryId);
    $.ajax({
        url: "{{  url('/ajax/getProductOnCategory') }}",
        method: "POST",
        dataType: "JSON",
        data: {
            _token: "{{ csrf_token() }}",
            categoryId: categoryId,
        },
        success: function(respone) {
            $('#showProduct').html(respone.content)
        },
        error: function() {
            cuteToast({
                type: "error",
                message: 'Không thể xử lý',
                timer: 5000
            });
        }
    });
});
</script>

<script type="text/javascript">

    $.ajax({
        url: "{{  url('/ajax/getProductOnCategory') }}",
        method: "POST",
        dataType: "JSON",
        data: {
            _token: "{{ csrf_token() }}",
            categoryId: -1,
        },
        success: function(respone) {
            $('#showProduct').html(respone.content)
        },
        error: function() {
            cuteToast({
                type: "error",
                message: 'Không thể xử lý',
                timer: 5000
            });
        }
    });

</script>


@endsection

