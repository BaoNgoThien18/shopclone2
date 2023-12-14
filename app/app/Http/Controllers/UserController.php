<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CoreController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;


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

    public function info() {
        $body['title'] = 'Trang cá nhân';
        $body['header'] = '';
        $body['footer'] = '';

        $user = User::find(session('user'));

        $categories = Category::all();

        return view('frontend.account.info')->with(compact('body', 'user', 'categories'));
    }

    public function changePassword() {
        $body['title'] = 'Thay đổi mật khẩu';
        $body['header'] = '';
        $body['footer'] = '';

        $user = User::find(session('user'));

        $categories = Category::all();

        return view('frontend.account.changePassword')->with(compact('body', 'user', 'categories'));
    }

    public function saveAccountChangePassword(Request $rq) {

        $this->validate($rq,[
            'password'=>'required|min:6|max:12',
            'newpassword'=>'required',
            'renewpassword'=>'required',
        ]);

        $user = User::find(session('user'));
            
            if (Hash::check($rq->password, $user['password'])) {

                if($rq->newpassword == $rq->renewpassword){
                   $user->update(['password' => Hash::make($rq->newpassword)]);
                    request()->session()->flash('success','Đổi mật khẩu thành công');
                }else{
                    request()->session()->flash('error','Mật khẩu nhập lại không đúng');
                }
            } else {
                request()->session()->flash('error','Nhập mật khẩu cũ không đúng');
            }
        

        return redirect()->back();

       
    }
}
