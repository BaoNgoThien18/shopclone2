<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\CoreController;
use App\Models\Setting;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $body = [
            'title' => 'Trang chủ',
        ];


        $core = new CoreController();

        $setting = new Setting();

        return view('backend.pages.home')->with(compact('core', 'body', 'setting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function settings() {
        $body = [
            'title' => 'Trang chủ',
        ];

        $core = new CoreController();
        $setting = new Setting();


        return view('backend.pages.setting')->with(compact('body', 'core', 'setting'));
    }

    public function saveSetting(Request $rq) {

        $dataKeys = $rq->keys();
        // dd($dataKeys);


        $setting = new Setting();

        // $status = $setting::fill($rq)->save($rq);

        foreach ($dataKeys as $key => $row) {


            // Tìm bản ghi với điều kiện 'name' = $row
            $s = Setting::where('name', $row)->first();

            if ($s) {
                // Nếu bản ghi tồn tại, thực hiện cập nhật
                $s->update(['value' => $rq[$row]]);
            } else {
                // Nếu không tìm thấy bản ghi, bạn có thể xử lý tùy thuộc vào yêu cầu của bạn
                // Ví dụ: tạo bản ghi mới hoặc thông báo lỗi, vv.
                // Đối với mục đích minh họa, ở đây tôi sẽ tạo một bản ghi mới:
                Setting::create(['name' => $row, 'value' => $rq[$row]]);
            }


        }

        request()->session()->flash('success','Cập nhật thành công');
        return redirect()->back();

    }

    public function saveSettingLienHe(Request $rq) {

        $setting = Setting::Where('name', 'lienhe')->first();

        if ($setting) {
            $setting->update(['value' => $rq->lienhe]);
            request()->session()->flash('success','Cập nhật thành công');
        } else {
            request()->session()->flash('success','Cập nhật thất bại');
        }

        return redirect()->back();

    }

    public function saveSettingFaq(Request $rq) {

        $setting = Setting::Where('name', 'faq')->first();

        if ($setting) {
            $setting->update(['value' => $rq->faq]);
            request()->session()->flash('success','Cập nhật thành công');
        } else {
            request()->session()->flash('success','Cập nhật thất bại');
        }

        return redirect()->back();

    }
}
