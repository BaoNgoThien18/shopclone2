<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\CoreController;
use App\Models\Account;
use App\Models\User;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)


    {


        $product = Product::findOrFail($request->all()['productId']);

        $accounts = Account::Where('buyer', null)->get();

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

        return view('backend.account.create')->with(compact('core', 'body', 'product', 'accounts'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $this->validate($request,[
            'productId'=>'integer|required',
            'listAccount'=>'string|required',
        ]);

        $product = Product::findOrFail($request->productId);

        foreach (explode(PHP_EOL, $request->listAccount) as $row) {

            $data = [
                'product_id' => $product['id'],
                'seller' => User::find(session('user'))['username'],
                'account' => $row
            ];
            $account = new Account;
            $status = $account->fill($data)->save();
        }

        request()->session()->flash('success','Tải lên thành công');
        return redirect()->route('account.create', 'productId=' . $product['id']);
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
}
