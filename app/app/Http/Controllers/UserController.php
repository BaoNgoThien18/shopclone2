<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CoreController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function register() {
        return view('frontend.pages.register');
    }
    public function login() {
        return view('frontend.pages.login');
    }

    public function logout() {
        session()->forget('user');
        return view('frontend.pages.login');
    }


    public function postRegister(Request $request) {

        $core = new CoreController();

        $username = $request->username;
        $password = $request->password;
        $email = $request->email;
        $repassword = $request->repassword;

        if (empty($_POST['username'])) {
            die(json_encode(['status' => 'error', 'msg' => __('Username không được để trống')]));
        }
        if (empty($_POST['email'])) {
            die(json_encode(['status' => 'error', 'msg' => __('Email không được để trống')]));
        }
        if (empty($_POST['password'])) {
            die(json_encode(['status' => 'error', 'msg' => __('Mật khẩu không được để trống')]));
        }
        if (empty($_POST['repassword'])) {
            die(json_encode(['status' => 'error', 'msg' => __('Nhập lại mật khẩu không đúng')]));
        }

        if ($password != $repassword) {
            die(json_encode(['status' => 'error', 'msg' => __('Nhập lại mật khẩu không đúng')]));
        }
        if ($core->check_email($email) != true) {
            die(json_encode(['status' => 'error', 'msg' => __('Định dạng Email không đúng')]));
        }

        if (User::where('username', $username)->count() > 1) {
            die(json_encode(['status' => 'error','msg' => __('Tên đăng nhập đã tồn tại trong hệ thống')]));
        }
        if (User::where('email', $email)->count() > 1) {
            die(json_encode(['status' => 'error', 'msg' => __('Địa chỉ email đã tồn tại trong hệ thống')]));
        }

        $request->merge(['password' => Hash::make($password)]);

        User::create($request->all());

        die(json_encode(['status' => 'success', 'msg' => __('Đăng ký thành công')]));
    }

    public function postLogin(Request $request) {

        $core = new CoreController();

        if (empty($request->username)) {
            die(json_encode(['status' => 'error', 'msg' => __('Username không được để trống')]));
        }
        if (empty($request->password)) {
            die(json_encode(['status' => 'error', 'msg' => __('Mật khẩu không được để trống')]));
        }

        $username = $request->username;
        $password = $request->password;

        $user = User::where('username', $username)->first();

        if ($user) {

            if (Hash::check($password, $user['password'])) {



                session()->put('user', $user['id']);
                session()->save();

                die(json_encode(['status' => 'success', 'msg' => __('Đăng nhập thành công')]));

            } else {
                die(json_encode(['status' => 'error', 'msg' => __('Thông tin tài khoản hoặc mật khẩu không đúng')]));
            }

        } else {
            die(json_encode(['status' => 'error', 'msg' => __('Thông tin tài khoản hoặc mật khẩu không đúng')]));
        }

    }
}
