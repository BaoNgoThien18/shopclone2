@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh sách sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Danh sách sản phẩm</li>
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
                        <a class="btn btn-primary btn-icon-left m-b-10" href="{{ route('product.create') }}"
                            type="button"><i class="fas fa-plus-circle mr-1"></i>Thêm sản phẩm</a>
                    </div>
                </section>
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
                <section class="col-lg-12 connectedSortable">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-shopping-cart mr-1"></i>
                                DANH SÁCH SẢN PHẨM HỆ THỐNG
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
                        <div class="card-body">
                            <table id="datatable1" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 5px;">STT</th>
                                        <th>Username</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Flag</th>
                                        <th>Price</th>
                                        <th>Content</th>
                                        <th>Status</th>
                                        <th>Account</th>
                                        <th style="width: 20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $row)

                                    <tr>
                                        <td><?=$row['stt'];?></td>
                                        <td><a
                                                href="{{ url('admin/user-edit/'.$row['user_id']) }}">{{ \App\Models\User::find($row['user_id'])['username'] }}</a>
                                        </td>
                                        <td><?=$row['name'];?></td>
                                        <td>{{ \App\Models\Category::find($row['category_id'])['name'] }}</td>
                                        <td><?=$core->display_flag($row['flag']);?></td>
                                        <td>{{ $row['cost'] }} </td>
                                        <td><textarea class="form-control" readonly><?=$row['content'];?></textarea>
                                        </td>
                                        <td><?=$core->display_status_product($row['status']);?></td>
                                        <td>
                                            <ul>
                                                <li>Đang bán:  <b style="color: green;">Xem</a></li>
                                                <li>Đã bán:  <b style="color:blue;">Xem</a></li>
                                                <li>Die: <b style="color: red;">Xem</b></li>
                                            </ul>
                                           </td>
                                        <td>
                                            <a aria-label="" href="{{ url('admin/accounts/'.$row['id']) }}"
                                                style="color:white;" class="btn btn-dark btn-sm btn-icon-left m-b-10"
                                                type="button">
                                                <i class="fas fa-tasks mr-1"></i><span class="">Quản lý tài khoản</span>
                                            </a>
                                            <a aria-label="" href="{{ route('product.edit', $row['id']) }}"
                                                style="color:white;" class="btn btn-info btn-sm btn-icon-left m-b-10"
                                                type="button">
                                                <i class="fas fa-edit mr-1"></i><span class="">Edit</span>
                                            </a>
                                            <form action="{{ route('product.destroy', $row['id']) }}" method="post" class="mt-1">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"  class="btn btn-danger btn-sm btn-icon-left m-b-10"  >Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

@endsection
