<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\CoreController;
use App\Models\Infor;
use App\Models\User;

class InforController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $core = new CoreController();

        $body = [
            'title' => 'Danh sách chuyên mục',
            'desc'   => 'CMSNT Panel',
            'keyword' => 'cmsnt, CMSNT, cmsnt.co,'
        ];
        $body['header'] = '
            <link rel="stylesheet" href="'.asset('tempalte/public/AdminLTE3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css').'">
            <link rel="stylesheet" href="'.asset('tempalte/public/AdminLTE3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css').'">
            <link rel="stylesheet" href="'.asset('tempalte/public/AdminLTE3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css').'">
        ';
        $body['footer'] = '
            <script src="'.asset('tempalte/public/AdminLTE3/plugins/datatables/jquery.dataTables.min.js').'"></script>
            <script src="'.asset('tempalte/public/AdminLTE3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js').'"></script>
            <script src="'.asset('tempalte/public/AdminLTE3/plugins/datatables-responsive/js/dataTables.responsive.min.js').'"></script>
            <script src="'.asset('tempalte/public/AdminLTE3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js').'"></script>
            <script src="'.asset('tempalte/public/AdminLTE3/plugins/datatables-buttons/js/dataTables.buttons.min.js').'"></script>
            <script src="'.asset('tempalte/public/AdminLTE3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js').'"></script>
            <script src="'.asset('tempalte/public/AdminLTE3/plugins/jszip/jszip.min.js').'"></script>
            <script src="'.asset('tempalte/public/AdminLTE3/plugins/pdfmake/pdfmake.min.js').'"></script>
            <script src="'.asset('tempalte/public/AdminLTE3/plugins/pdfmake/vfs_fonts.js').'"></script>
            <script src="'.asset('tempalte/public/AdminLTE3/plugins/datatables-buttons/js/buttons.html5.min.js').'"></script>
            <script src="'.asset('tempalte/public/AdminLTE3/plugins/datatables-buttons/js/buttons.print.min.js').'"></script>
            <script src="'.asset('tempalte/public/AdminLTE3/plugins/datatables-buttons/js/buttons.colVis.min.js').'"></script>
        ';

        $infors = Infor::all();

        return view('backend.infor.index')->with(compact('core', 'body', 'infors'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function edit($id)
    {
        $core = new CoreController();

        $body = [
            'title' => 'Chỉnh sửa thông tin liên hệ',
            'desc'   => 'CMSNT Panel',
            'keyword' => 'cmsnt, CMSNT, cmsnt.co,'
        ];
        $body['header'] = '';
        $body['footer'] = '';

        // Lấy thông tin của thông tin liên hệ cần chỉnh sửa
        $data = Infor::find($id);

        // Kiểm tra xem $data có tồn tại không
        if (!$data) {
            return redirect()->route('infor.index')->with('error', 'Không tìm thấy thông tin liên hệ.');
        }

        // Truyền biến $data vào view
        return view('backend.infor.edit', compact('core', 'body', 'data'));
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'zalo' => 'string|nullable',
            'facebook' => 'string|nullable',
            'telegram' => 'string|nullable',
        ]);

        $inforData = [
            'name' => $request->name,
            'zalo' => $request->zalo,
            'facebook' => $request->facebook,
            'telegram' => $request->telegram,
        ];

        Infor::edit($inforData);

        session()->flash('success', 'Thêm thông tin liên hệ thành công');
        return redirect()->route('infor.edit');
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $this->validate($request, [
            'name' => 'string|required',
            'zalo' => 'string|nullable',
            'facebook' => 'string|nullable',
            'telegram' => 'string|nullable',
        ]);

        // Find the Infor model by ID
        $infor = Infor::find($id);

        // Check if the Infor model exists
        if (!$infor) {
            return redirect()->route('infor.index')->with('error', 'Không tìm thấy thông tin liên hệ.');
        }

        // Update the Infor model with the new data
        $infor->update([
            'name' => $request->name,
            'zalo' => $request->zalo,
            'facebook' => $request->facebook,
            'telegram' => $request->telegram,
        ]);

        // Redirect back to the edit page with a success message
        return redirect()->route('infor.edit', ['infor' => $infor->id])->with('success', 'Cập nhật thông tin liên hệ thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
