<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;
use App\Models\Contact;
use App\Models\Setting;
use App\Models\Category;
class ContactController extends Controller
{
    public function index() {
        $body = [
            'title' => 'Trang chủ',
            'header' => '',
            'footer' => '',
        ];

        $user = User::find(session('user'));
        $categories = Category::all();
        $lienhe = Setting::Where('name', 'lienhe')->first();
        $setting = new Setting();

        return view('frontend.pages.contact', compact('body', 'user', 'lienhe', 'categories', 'setting' ));
    }


}
