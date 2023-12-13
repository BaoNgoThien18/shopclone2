<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\CoreController;
use App\Models\Category;

class CategoryController extends Controller
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

        $categories = Category::orderBy('stt', 'asc')->get();


        return view('backend.category.index')->with(compact('core', 'body', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $core = new CoreController();

        $body = [
            'title' => 'Thêm chuyên mục',
            'desc'   => 'CMSNT Panel',
            'keyword' => 'cmsnt, CMSNT, cmsnt.co,'
        ];
        $body['header'] = '
        ';
        $body['footer'] = '
        ';

        return view('backend.category.create')->with(compact('core', 'body'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'stt'=>'integer|required',
            'name'=>'string|required',
            'status'=>'required',
        ]);

        $core = new CoreController();


        $data = $request->all();


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $data['image'] = 'uploads/' . $imageName;
        }

        $status = Category::create($data);

        if($status){
            $status = ['success', 'Thêm danh mục thành công'];
        }

        else {
            $status = ['error', 'Thêm danh mục bị lỗi, vui lòng thử lại'];
        }

        request()->session()->flash($status[0],$status[1]);
        return redirect()->back();
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
        $core = new CoreController();

        $category = Category::findOrFail($id);

        $body = [
            'title' => 'Chỉnh sửa chuyên mục',
            'desc'   => 'CMSNT Panel',
            'keyword' => 'cmsnt, CMSNT, cmsnt.co,'
        ];
        $body['header'] = '
        ';
        $body['footer'] = '
        ';

        return view('backend.category.edit')->with(compact('core', 'body', 'category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
           $category=Category::findOrFail($id);
           $this->validate($request,[
            'stt'=>'integer|required',
            'name'=>'string|required',
            'status'=>'required',
           ]);

            $data = $request->all();


            // delete old img
            $image_path = $category['image'];
            if (file_exists(asset(''.$image_path))) {
                @unlink($image_path);
            }

            // up new img
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $data['image'] = 'uploads/' . $imageName;
            }

           $status=$category->fill($data)->save();
           if($status){
               request()->session()->flash('success','Cập nhật thành công');
           }
           else{
               request()->session()->flash('error','Error occurred, Please try again!');
           }
           return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        $status=$category->delete();

        if($status){
            request()->session()->flash('success','Xóa danh mục thành công');
        }
        else{
            request()->session()->flash('error','Error while deleting category');
        }
        return redirect()->back();
    }
}
