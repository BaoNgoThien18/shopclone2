@extends('backend.layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Thêm sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-6">
                    <div class="mb-3">
                        <a class="btn btn-danger btn-icon-left m-b-10" href="{{ route('product.index') }}"
                            type="button"><i class="fas fa-undo-alt mr-1"></i>Quay Lại</a>
                    </div>
                </section>
                <section class="col-lg-6">
                </section>
                <section class="col-lg-12 connectedSortable">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-cart-plus mr-1"></i>
                                THÊM SẢN PHẨM MỚI
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn bg-success btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn bg-warning btn-sm" data-card-widget="maximize"><i
                                        class="fas fa-expand"></i>
                                </button>
                                <button type="button" class="btn bg-danger btn-sm" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
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
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Số thự tự hiển thị sản phẩm</label>
                                    <input type="number" class="form-control" name="stt" value="0"
                                        placeholder="Nhập số thứ tự hiển thị sản phẩm">
                                    <i>Số càng thấp, sản phẩm càng lên đầu</i>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Loại sản phẩm</label>
                                    <select class="form-control select2bs4" name="category_id" required>
                                        <option value="">Chọn loại sản phẩm</option>
                                        @foreach ($allCategory as $list)
                                        <option value="{{ $list['id'] }}"> {{ $list['name'] }}</option>
                                        @endforeach
                                    </select>
                                    <i>Thêm chuyên mục <a href="{{ route('category.create') }}" target="_blank">tại đây</a></i>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá sản phẩm</label>
                                    <input type="text" class="form-control" name="cost"
                                        placeholder="Nhập giá sản phẩm" required>
                                        <i>Vui lòng nhập giá VND</i>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Chi tiết sản phẩm</label>
                                    <textarea class="form-control" name="content"
                                        placeholder="Nhập chi tiết sản phẩm"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quốc gia</label>
                                    <input type="text" class="form-control" name="flag" value="vn"
                                        placeholder="Nếu là Việt Nam thì ghi vn">
                                    <i>Xem ISO CODE Quốc Gia tại đây: <a target="_blank"
                                            href="https://countrycode.org/">https://countrycode.org/</a>, vui lòng không ghi IN HOA</i>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh xem trước sản phẩm</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="preview">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <i>Không bắt buộc</i>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Trạng thái</label>
                                    <select class="form-control" name="status" required>
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số lượng đã bán</label>
                                    <input type="number" class="form-control" name="sold" value="0"
                                        placeholder="Nhập số lượng đã bán" required>
                                </div>
                            </div>
                            <div class="card-footer clearfix">
                                <button  class="btn btn-info btn-icon-left m-b-10" type="submit"><i
                                        class="fas fa-plus mr-1"></i>Thêm Ngay</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

@endsection
