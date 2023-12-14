@extends('frontend.layouts.master')

@section('content')
    <div style="padding-top:130px">
        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card pt-5">
                            <div class="card-body">
                                <h3 class="text-center">Thông tin liên hệ</h3>
                                <p>&nbsp;</p>

                               <?= $lienhe['value'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
