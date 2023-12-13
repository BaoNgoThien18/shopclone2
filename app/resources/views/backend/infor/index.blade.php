@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh sách thông tin liên hệ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Danh sách thông tin liên hệ</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-6">
                </section>
                <section class="col-lg-6 text-right">
                    <div class="mb-3">
                        <a class="btn btn-primary btn-icon-left m-b-10" href="{{ route('infor.edit', ['infor' => 1]) }}" type="button">
                            <i class="fas fa-edit mr-1"></i>Chỉnh sửa thông tin liên hệ
                        </a>
                    </div>
                </section>
                
                
                <section class="col-lg-12 connectedSortable">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-luggage-cart mr-1"></i>
                                DANH SÁCH THÔNG TIN LIÊN HỆ
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
                            <table id="datatable1" class="table table-striped table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>Tên</th>
                                        <th>Zalo</th>
                                        <th>Facebook</th>
                                        <th>Telegram</th>
                                        <th>Ngày tạo</th>
                                        <th>Ngày cập nhật</th>
                                        <th style="width: 20%">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($infors as $infor)
                                        <tr>
                                            <td>{{ $infor->name }}</td>
                                            <td>{{ $infor->zalo }}</td>
                                            <td>{{ $infor->facebook }}</td>
                                            <td>{{ $infor->telegram }}</td>
                                            <td>{{ $infor->created_at }}</td>
                                            <td>{{ $infor->updated_at }}</td>
                                            <td>
                                                <a aria-label="" href="{{ route('infor.edit', ['infor' => $infor->id]) }}"
                                                    style="color:white;" class="btn btn-info btn-sm btn-icon-left m-b-10"
                                                    type="button">
                                                    <i class="fas fa-edit mr-1"></i><span class="">Chỉnh sửa thông tin liên hệ</span>
                                                </a>
                                                <form action="{{ route('infor.destroy', $infor->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    {{-- <button type="submit" class="btn btn-danger btn-sm btn-icon-left m-b-10"  >Delete</button> --}}
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                
