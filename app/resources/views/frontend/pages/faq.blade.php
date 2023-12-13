@extends('frontend.layouts.master')

@section('content')
    <div style="padding-top:100px">
        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card pt-5">
                            <div class="card-body">
                                <h3 class="text-center">FAQ</h3>
                                <p>&nbsp;</p>

                               <?= $faq['value'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
