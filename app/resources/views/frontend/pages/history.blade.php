@extends('frontend.layouts.master')
@section('content')

<div style="padding-top:90px">
<div class="content-page">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 text-right">
                <!-- <div class="mb-3">
                    <button class="btn btn-primary btn-sm btn-icon-left m-b-10" data-toggle="modal"
                        data-target="#modal-default" type="button"><i
                            class="fas fa-cloud-download-alt mr-1"></i>Tải Về File Backup VIA</button>
                </div> -->
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Lịch Sử Mua Hàng</h4>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table data-table table-hover mb-0">
                                <thead class="table-color-heading">
                                    <tr>
                                        <th width="5%">#</th>
                                        <th>Mã giao dịch</th>
                                        <th>Tài khoản</th>
                                        <th>Sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Thanh toán</th>
                                        <th>Thời gian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=0 @endphp
                                    @foreach ($history as $row)
                                        @php $sp = $product::find($row['product_id']);
                                         $i++; @endphp

                                        <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$row['trans_id']}}</td>
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
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tải Về File Backup VIA</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>UID VIA</label>
                        <input type="text" id="uid_via" class="form-control"
                            placeholder="Nhập UID VIA cần tải về file backup">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                    <button type="button" onclick="downloadBackup()" class="btn btn-primary">Tải Về</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

</div>
</div>

@endsection

