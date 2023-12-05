<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Account;
use App\Models\Orders;

class IndexController extends Controller
{
    public function index(Request $request) {

        $body['title'] = 'Trang chủ';
        $body['header'] = '';
        $body['footer'] = '';

        $user = User::find(session('user'));

        $categories = Category::all();

        $product = new Product();

        $historyOrder = Orders::orderBy('id', 'desc')->limit(10)->get();

        return view('frontend.pages.home')->with(compact('body', 'user', 'product', 'categories', 'historyOrder'));
    }

    public function getProductOnCategory(Request $resquest) {

        $product = new Product();

        $result = $product->getProductOnCategory($resquest->categoryId);


        $html = '
        <style>
        .ribbon-wrapper.ribbon-lg .ribbon {
            right: 0;
            top: 26px;
            width: 150px;
        }

        .ribbon-wrapper .ribbon {
            box-shadow: 0 0 3px rgb(0 0 0 / 30%);
            font-size: .8rem;
            line-height: 100%;
            padding: 0.375rem 0;
            position: relative;
            right: -2px;
            text-align: center;
            text-shadow: 0 -1px 0 rgb(0 0 0 / 40%);
            text-transform: uppercase;
            top: 10px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            width: 90px;
        }

        .ribbon-wrapper.ribbon-lg {
            height: 120px;
            width: 120px;
        }

        .ribbon-wrapper {
            height: 70px;
            overflow: hidden;
            position: absolute;
            right: 12px;
            top: -2px;
            width: 70px;
            z-index: 10;
        }
    </style>
    <style>
        .ribbon-wrapper.ribbon-lg .ribbon {
            right: 0;
            top: 26px;
            width: 150px;
        }

        .ribbon-wrapper .ribbon {
            box-shadow: 0 0 3px rgb(0 0 0 / 30%);
            font-size: .8rem;
            line-height: 100%;
            padding: 0.375rem 0;
            position: relative;
            right: -2px;
            text-align: center;
            text-shadow: 0 -1px 0 rgb(0 0 0 / 40%);
            text-transform: uppercase;
            top: 10px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            width: 90px;
        }

        .ribbon-wrapper.ribbon-lg {
            height: 120px;
            width: 120px;
        }

        .ribbon-wrapper {
            height: 70px;
            overflow: hidden;
            position: absolute;
            right: 12px;
            top: -2px;
            width: 70px;
            z-index: 10;
        }
    </style>
    <style>
        .thumbnail-mobile {
            width: 32px;
            height: 24px;
            overflow: hidden;
            border: 1px solid #e5e5e5;
        }

        .thumbnail-mobile img {
            width: 100%;
            height: 100%;
            transition-duration: 0.1s;
        }

        .thumbnail-mobile img:hover {
            position: absolute;
            width: 350px;
            height: 210px;
            right: -20px;
            border: 3px solid #00ac15;
            border-radius: 9px;
            z-index: 1000;
        }
    </style>
    <div class="row">
    <style>
        /* CSS cho các thiết bị có chiều rộng màn hình nhỏ hơn hoặc bằng 600px */

        @media only screen and (max-width: 600px) {
            .hidemobile {
                display: none;
            }
        }
    </style>
    <div class="col-sm-12 col-md-12 col-lg-12 mt-12 mt-md-3 p-0 ">
    <div class="table-responsive">
        <table class="table table-striped table-hover mb-0">
            <thead class="table-color-heading" style="background:#12214E;color:white;">
                <tr>
                    <th><img src="https://cdn.divineshop.vn/image/catalog/Anh/Icon%20svg/giaitri-25627.svg?hash=1640449820" width="30px" class="mr-2" />Giải trí</th>
                    <!--  -->
                    <th class="text-center hidemobile" width="10%">Hiện có</th>
                    <th class="text-center hidemobile" width="10%">Đã bán</th>
                    <th class="text-center hidemobile" width="10%">Giá</th>
                    <th class="text-center hidemobile" width="10%">Thao tác</th>
                </tr>
            </thead>
            <tbody>
        ';

        foreach ($result as $row) {
            $html .= '


                            <tr>
                                <td>
                                    <div class="col-product-name">
                                        <img style="    width: 200px;" class="mr-1 py-1 d-none-600" src="'.asset($row['preview']).'">
                                        <div class="name-product">
                                            <h3>'.$row['name'].'</h3>
                                            <div class="content-mota">
                                                '.$row['content'].'
                                            </div>
                                            <div class="d-none-more-than-601">
                                                <div class="col-md-12 p-0 mt-2">
                                                    <span class="btn mb-1 btn-sm btn-outline-danger">
                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                <b>'.$row['cost'].'</b>
                                            </span>
                                                    <span class="btn mb-1 btn-sm btn-outline-info">
                                                Còn lại:                                                <b>'.Account::Where('product_id', $row['id'])->Where('buyer', null)->count().'</b>
                                            </span>
                                                    <span class="btn mb-1 btn-sm btn-outline-info">
                                                Đã bán:                                                <b>27</b>
                                            </span>
                                                </div>
                                                <div class="col-md-12 p-0 mt-2">
                                                    <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy(120, 1000,`'.$row['name'].'`)">
                                                <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                                            </button>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                Còn lại:                                <b>'.Account::Where('product_id', $row['id'])->Where('buyer', null)->count().'</b>
                                            </span></td>
                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-info">
                                                Đã bán:                                <b>'.Account::Where('product_id', $row['id'])->Where('buyer', '!=', null)->count().'</b>
                                            </span></td>
                                <td class="text-center d-none-600"><span class="btn mb-1 btn-sm btn-outline-danger">
                                                <i class="far fa-money-bill-alt mr-1"></i>
                                                <b>'.number_format($row['cost']).'đ</b>
                                            </span>
                                </td>
                                <td class="text-center d-none-600">
                                    <button class="btn btn-block btn-sm btn-primary" onclick="modalBuy('.$row['id'].', `'.number_format($row['cost']).'`, `'.$row['name'].'`)">
                                                <i class="fas fa-shopping-cart mr-1"></i>MUA NGAY                            </button>
                                </td>
                            </tr>



            ';
        }

        $html .= '
                </tbody>
                </table>
            </div>
        </div>
        ';

        return json_encode(['status'=>1, 'content'=>$html]);
    }

    public function totalPayment(Request $request) {

        $product = Product::findOrFail($request->productId);

        $total = $product['cost'] * $request->amount;

        die(number_format($total));
    }


}
