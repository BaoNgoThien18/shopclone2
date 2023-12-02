<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class IndexController extends Controller
{
    public function index(Request $request) {

        $body['title'] = 'Trang chủ';
        $body['header'] = '';
        $body['footer'] = '';

        $user = User::find(session('user'));

        return view('frontend.pages.home')->with(compact('body', 'user'));
    }
}
