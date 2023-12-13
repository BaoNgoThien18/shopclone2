@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-12">
                    <div class="card card-dark card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                                        href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home"
<<<<<<< HEAD
                                        aria-selected="true">THÔNG TIN CHUNG</a>
=======
                                        aria-selected="true">THÔNG TIN CHUNG **</a>
>>>>>>> 3c26c070cdfa3d209bd216e8d39a69b1d7532ff6
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="google-reCAPTCHA-tab" data-toggle="pill" href="#google-reCAPTCHA"
                                        role="tab" aria-controls="google-reCAPTCHA" aria-selected="false">Liên hệ</a>
                                </li>

                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="alert p-3">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if(session()->has('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                </div>
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel"
                                    aria-labelledby="custom-tabs-three-home-tab">
                                    <form action="{{route('saveSetting')}}" method="POST">
                                        @csrf
                                        <div class="row">

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Description</label>
                                                    <input type="text" class="form-control" name="description"
                                                        value="<?=$setting::where('name', 'description')->first()['value']?>"
                                                        placeholder="VD: Hệ thống bán mã nguồn website MMO uy tín">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Keywords</label>
                                                    <input type="text" class="form-control" name="keywords"
                                                        value="<?=$setting::where('name', 'keywords')->first()['value']?>"
                                                        placeholder="VD: cmsnt, bán code, source code mmo">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Author</label>
                                                    <input type="text" class="form-control" name="author"
                                                        value="<?=$setting::where('name', 'author')->first()['value']?>" placeholder="VD: CMSNT">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control select2bs4" name="status">
                                                        <option <?=$setting::where('name', 'status')->first()['value'] == '1' ? 'selected' : '';?>
                                                            value="1">ON
                                                        </option>
                                                        <option <?=$setting::where('name', 'status')->first()['value'] == '0' ? 'selected' : '';?>
                                                            value="0">
                                                            OFF
                                                        </option>
                                                    </select>
                                                    <i>Chọn OFF website sẽ bật chế độ bảo trì, ADMIN truy cập bình
                                                        thường.</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Status Update</label>
                                                    <select class="form-control select2bs4" name="status_update">
                                                        <option
                                                            <?=$setting::where('name', 'status_update')->first()['value'] == '1' ? 'selected' : '';?>
                                                            value="1">ON
                                                        </option>
                                                        <option
                                                            <?=$setting::where('name', 'status_update')->first()['value'] == '0' ? 'selected' : '';?>
                                                            value="0">
                                                            OFF
                                                        </option>
                                                    </select>
                                                    <i>Chọn OFF website sẽ tắt chế độ cập nhật phiên bản tự động</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Status Captcha</label>
                                                    <select class="form-control select2bs4" name="status_captcha">
                                                        <option
                                                            <?=$setting::where('name', 'status_captcha')->first()['value'] == '1' ? 'selected' : '';?>
                                                            value="1">ON
                                                        </option>
                                                        <option
                                                            <?=$setting::where('name', 'status_captcha')->first()['value'] == '0' ? 'selected' : '';?>
                                                            value="0">
                                                            OFF
                                                        </option>
                                                    </select>
                                                    <i>Chọn OFF website sẽ tắt Captcha chống SPAM</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Hotline</label>
                                                    <input type="text" class="form-control" name="hotline"
                                                        value="<?=$setting::where('name', 'hotline')->first()['value']?>"
                                                        placeholder="Số điện thoại liên hệ">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" class="form-control" name="email"
                                                        value="<?=$setting::where('name', 'email')->first()['value']?>" placeholder="Email liên hệ">
                                                </div>
                                            </div>


                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>ON/OFF Login Trước Khi Xem Sản Phẩm</label>
                                                    <select class="form-control select2bs4" name="sign_view_product">
                                                        <option
                                                            <?=$setting::where('name', 'sign_view_product')->first()['value'] == '1' ? 'selected' : '';?>
                                                            value="1">ON</option>
                                                        <option
                                                            <?=$setting::where('name', 'sign_view_product')->first()['value'] == '0' ? 'selected' : '';?>
                                                            value="0">OFF</option>
                                                    </select>
                                                    <i>Nếu bạn chọn ON, khách sẽ phải đăng nhập vào mới có thể xem được
                                                        sản phẩm bạn đang bán.</i>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Thời Gian Xoá Đơn Hàng</label>
                                                    <input type="number" class="form-control" name="time_delete_orders"
                                                        value="<?=$setting::where('name', 'time_delete_orders')->first()['value']?>">
                                                    <i>Hệ thống thực hiện xoá đơn hàng đã mua sau khi đủ thời gian bạn
                                                        điều chỉnh, thời gian tính bằng giây 1 = 1 giây, SET thành 0 để
                                                        tắt chức năng này.</i>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Duyệt thành viên khi đăng ký</label>
                                                    <select class="form-control select2bs4" name="status_active_member">
                                                        <option
                                                            <?=$setting::where('name', 'status_active_member')->first()['value'] == '1' ? 'selected' : '';?>
                                                            value="1">Bật</option>
                                                        <option
                                                            <?=$setting::where('name', 'status_active_member')->first()['value'] == '0' ? 'selected' : '';?>
                                                            value="0">Tắt</option>
                                                    </select>
                                                    <i>Nếu chọn ON, các thành viên khi đăng ký sẽ phải cần BQT duyệt mới
                                                        có thể sử dụng.</i>
                                                </div>
                                            </div>



                                        </div>
                                        <button name="SaveSettings" class="btn btn-info btn-block btn-icon-left m-b-10"
                                            type="submit"><i class="fas fa-save mr-1"></i>Lưu Ngay</button>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="google-reCAPTCHA" role="tabpanel"
                                    aria-labelledby="google-reCAPTCHA-tab">
                                    <form action="" method="POST">
                                        <textarea name="lienhe" id="lienhe" cols="30" rows="10">{{$setting::where('name', 'lienhe')->first()['value']}}</textarea>
                                        <button name="SaveSettings" class="btn btn-info btn-icon-left btn-block m-b-10"
                                            type="submit"><i class="fas fa-save mr-1"></i>Lưu Ngay</button>
                                    </form>
                                </div>



                            </div>
                        </div>
                    </div>
                </section>



            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

@endsection
