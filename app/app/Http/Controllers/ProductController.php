<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Setting;
use App\Models\Orders;
use App\Models\Account;

use Illuminate\Http\Request;

class ProductController extends Controller
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

        $product = Product::orderBy('id', 'desc')->get();

        return view('backend.product.index')->with(compact('core', 'body', 'product'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $core = new CoreController();

        $body = [
            'title' => 'Chỉnh sửa chuyên mục',
            'desc'   => 'CMSNT Panel',
            'keyword' => 'cmsnt, CMSNT, cmsnt.co,'
        ];
        $body['header'] = '
        ';
        $body['footer'] = '
        ';

        $allCategory = Category::all();


        return view('backend.product.create')->with(compact('allCategory', 'body', 'core'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $core = new CoreController();

        $this->validate($request,[
            'stt'=>'integer|required',
            'name'=>'string|required',
            'category_id'=>'integer|required',
            'cost'=>'integer|required',
            'flag'=>'string|required',
            'status'=>'integer|required',
        ]);

        $data = $request->all();

        if ($request->hasFile('preview')) {
            $image = $request->file('preview');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $data['preview'] = 'uploads/' . $imageName;
        }

        $data['user_id'] = session('user');

        $status = Product::create($data);

        if($status){
            $status = ['success', 'Thêm sản phẩm thành công'];
        }

        else {
            $status = ['error', 'Thêm sản phẩm bị lỗi, vui lòng thử lại'];
        }

        request()->session()->flash($status[0],$status[1]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $body['title'] = 'Trang chủ';
        $body['header'] = '';
        $body['footer'] = '';

        $user = User::find(session('user'));

        $categories = Category::all();

        $category = Category::find($id);

        $product = new Product();

        $productFindCategory = Product::where('category_id', $id)->get();


        $setting = new Setting();

        $historyOrder = Orders::orderBy('id', 'desc')->limit(10)->get();

        return view('frontend.pages.product')->with(compact('body', 'user', 'product', 'categories', 'historyOrder', 'setting', 'productFindCategory', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $core = new CoreController();

        $row = Product::findOrFail($id);

        $body = [
            'title' => 'Chỉnh sửa chuyên mục',
            'desc'   => 'CMSNT Panel',
            'keyword' => 'cmsnt, CMSNT, cmsnt.co,'
        ];
        $body['header'] = '
        ';
        $body['footer'] = '
        ';

        return view('backend.product.edit')->with(compact('core', 'body', 'row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product=Product::findOrFail($id);
        $this->validate($request,[
            'stt'=>'integer|required',
            'name'=>'string|required',
            'category_id'=>'integer|required',
            'cost'=>'integer|required',
            'flag'=>'string|required',
            'status'=>'integer|required',
        ]);

         $data = $request->all();


        // delete old img
         $image_path = $product['preview'];
        if (file_exists(asset(''.$image_path))) {
            @unlink($image_path);
        }

         // up new img
         if ($request->hasFile('preview')) {
            $image = $request->file('preview');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $data['preview'] = 'uploads/' . $imageName;
        }

        $status=$product->fill($data)->save();
        if($status){
            request()->session()->flash('success','Cập nhật thành công');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Product::findOrFail($id);
        $status=$row->delete();
        if($status){
            request()->session()->flash('success','Xóa thành công');
        }
        else{
            request()->session()->flash('error','Error');
        }
        return redirect()->back();
    }
}
