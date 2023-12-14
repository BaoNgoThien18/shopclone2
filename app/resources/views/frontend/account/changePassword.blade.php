@extends('frontend.layouts.master')

@section('content')
<div style="padding-top:90px">

    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between pb-0">
                            <div class="header-title">
                                <h4 class="card-title mb-0">Thay đổi mật khẩu</h4>
                            </div>
                        </div>
                        <div class="alert ">
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
                        <div class="card-body">
                            <div class="card-body">
                             
                                <form action="{{route('saveAccountChangePassword')}}" method="POST">
                                    @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Mật khẩu hiện tại</label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="password" name="password"
                                            class="form-control"
                                            placeholder="Vui lòng nhập mật khẩu hiện tại"  />
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label  fw-bold fs-6">Mật khẩu mới</label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="password"name="newpassword"
                                            class="form-control"
                                            placeholder="Vui lòng nhập mật khẩu mới"  />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label  fw-bold fs-6">Nhập lại mật khẩu mới</label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="password" name="renewpassword"
                                            class="form-control"
                                            placeholder="Vui lòng nhập lại mật khẩu mới"  />
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" id="btnSaveProfile" class="btn btn-primary">Lưu Thay Đổi</button>
                                </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    </div>
    </div>

@endsection
