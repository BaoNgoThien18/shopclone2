@extends('backend.layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Lịch sử đơn hàng</h1>
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

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table data-table table-hover datatable mb-0">
                                    <thead class="table-color-heading">
                                        <tr>
                                            <th width="5%">#</th>
                                            <th>Mã giao dịch</th>
                                            <th>Người bán</th>
                                            <th>TNgười mua</th>
                                            <th>Tài khoản</th>
                                            <th>Sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Thanh toán</th>
                                            <th>Thời gian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=0 @endphp
                                        @foreach ($orders as $row)
                                            @php $sp = $product::find($row['product_id']);
                                             $i++; @endphp

                                            <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$row['trans_id']}}</td>
                                            <td>{{$row['seller']}}</td>
                                            <td>{{$row['buyer']}}</td>
                                            <td>
                                                @foreach (explode(PHP_EOL, $row['accounts']) as $acc)
                                                    <p>{{$acc}}</p>
                                                @endforeach
                                            </td>
                                            <td><b>{{$sp['name']}}</b></td>
                                            <td><b style="color:blue;">{{ $row['amount'] }}</b></td>
                                            <td><b style="color:red;">{{number_format($row['pay'])}} đ</b></td>
                                            <td><i>{{$row['created_at']}}</i></td>

                                        </tr>
                                        @endforeach
                                                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

@endsection
