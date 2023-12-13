@extends('frontend.layouts.master')

@section('content')
    <div style="padding-top:90px">
        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-center">Thông tin liên hệ</h3>
                                <p>&nbsp;</p>

                                @foreach($contacts as $contact)
                                    <p><strong>Facebook:&nbsp;<a href="{{ $contact->facebook }}">{{ $contact->name }}</a></strong></p>
                                    <p><strong>Zalo:&nbsp;<a href="{{ $contact->zalo }}">{{ $contact->name }}</a></strong></p>
                                    <p><strong>Telegram:&nbsp;<a href="{{ $contact->telegram }}">{{ $contact->name }}</a></strong></p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
