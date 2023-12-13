@extends('backend.layouts.master')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm thông tin liên hệ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('infor.index') }}">Danh sách thông tin liên hệ</a></li>
                        <li class="breadcrumb-item active">Thêm thông tin liên hệ</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-6 connectedSortable">
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-file-import mr-1"></i>
                                THÊM THÔNG TIN LIÊN HỆ
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
                            <!-- Hiển thị thông báo lỗi/success nếu có -->
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
                        <form action="{{ route('infor.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <!-- Các trường thông tin liên hệ -->
                                <div class="form-group">
                                    <label for="name">Tên</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên" required>
                                </div>
                                <div class="form-group">
                                    <label for="zalo">Zalo</label>
                                    <input type="text" class="form-control" id="zalo" name="zalo" placeholder="Nhập Zalo">
                                </div>
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Nhập Facebook">
                                </div>
                                <div class="form-group">
                                    <label for="telegram">Telegram</label>
                                    <input type="text" class="form-control" id="telegram" name="telegram" placeholder="Nhập Telegram">
                                </div>
                                <!-- Các trường khác tùy theo yêu cầu của bạn -->
                            </div>
                            <div class="card-footer clearfix">
                                <button name="AddInfo" class="btn btn-info btn-icon-left m-b-10" type="submit"><i
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
