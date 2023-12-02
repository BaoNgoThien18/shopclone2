@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh sách chuyên mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ ('admin/') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Danh sách chuyên mục</li>
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
                        <a class="btn btn-primary btn-icon-left m-b-10" href="{{ route('category.create') }}"
                            type="button"><i class="fas fa-plus-circle mr-1"></i>Thêm chuyên mục</a>
                    </div>
                </section>

                <section class="col-lg-12 connectedSortable">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-luggage-cart mr-1"></i>
                                DANH SÁCH CHUYÊN MỤC
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
                                        <th style="width: 5px;">STT</th>
                                        <th>Tên chuyên mục</th>
                                        <th>Ảnh</th>
                                        <th>Trạng thái</th>
                                        <th style="width: 20%">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $row)
                                    <tr>
                                        <td><?=$row['stt'];?></td>
                                        <td><?=$row['name'];?></td>
                                        <td><img src="{{ asset(''.$row['image'].'') }}" width="40px"></td>
                                        <td><?=$core->display_status_product($row['status']);?></td>
                                        <td>
                                            <a aria-label="" href="{{ route('category.edit', $row['id']) }}"
                                                style="color:white;" class="btn btn-info btn-sm btn-icon-left m-b-10"
                                                type="button">
                                                <i class="fas fa-edit mr-1"></i><span class="">Edit</span>
                                            </a>
                                            <form action="{{ route('category.destroy', $row['id']) }}" method="post">
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
