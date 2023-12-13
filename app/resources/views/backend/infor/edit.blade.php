@extends('backend.layouts.master')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">CẬP NHẬT THÔNG TIN LIÊN HỆ</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-6">
                </section>
                <section class="col-lg-12 connectedSortable">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-info-circle mr-1"></i>
                                CẬP NHẬT THÔNG TIN LIÊN HỆ
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn bg-success btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn bg-warning btn-sm" data-card-widget="maximize">
                                    <i class="fas fa-expand"></i>
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

                        <form action="{{ route('infor.update', $data['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Tên</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $data['name'] }}" placeholder="Nhập tên" required>
                                </div>
                                <div class="form-group">
                                    <label for="zalo">Zalo</label>
                                    <input type="text" class="form-control" id="zalo" name="zalo" value="{{ $data['zalo'] }}" placeholder="Nhập Zalo">
                                </div>
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $data['facebook'] }}" placeholder="Nhập Facebook">
                                </div>
                                <div class="form-group">
                                    <label for="telegram">Telegram</label>
                                    <input type="text" class="form-control" id="telegram" name="telegram" value="{{ $data['telegram'] }}" placeholder="Nhập Telegram">
                                </div>
                            </div>
                            <div class="card-footer clearfix">
                                <button name="UpdateInfo" class="btn btn-info btn-icon-left m-b-10" type="submit"><i class="fas fa-edit mr-1"></i>Cập nhật</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

@endsection
