<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;
use App\Models\Setting;
use App\Models\Category;
class FaqController extends Controller
{
    public function index() {
        $body = [
            'title' => 'Trang chủ',
            'header' => '',
            'footer' => '',
        ];

        $user = User::find(session('user'));
        $setting = new Setting();
        $categories = Category::all();
        $faq = Setting::Where('name', 'faq')->first();

        return view('frontend.pages.faq', compact('body', 'user', 'faq', 'categories', 'setting' ));
    }


}
