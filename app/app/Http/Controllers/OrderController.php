<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Orders;
use App\Models\Account;

class OrderController extends Controller
{
    public function buy(Request $request) {

        $order = new Orders();

        $amount = $request->amount;

        $product = Product::findOrFail($request->productId);
        $user = User::find(session('user'));
        $totalPay = $product['cost'] * $amount;

        // check money user
        if ($user['money'] < $totalPay) {
            die(json_encode(['status' => 0, 'msg' => 'Bạn không đủ tiền']));
        }

        $user->decrement('money', $totalPay);

        $total = $product['cost'] * $amount;

        $accounts = Account::Where('buyer', null)->orderBy('id', 'asc')->limit($amount)->get();

        if (count($accounts) < $amount) {
            die(json_encode(['status' => 0, 'msg' => 'Chúng tôi chỉ còn '.count($accounts).' account']));
        }

        $accountsForOrder = '';

        foreach($accounts as $row) {

            $account = Account::find($row['id']);
            $account->update(['buyer' => $user['username']]);
            $accountsForOrder .= $row['account'] . PHP_EOL;

        }


        $data = [
            'accounts' => $accountsForOrder,
            'trans_id' => rand(1000000, 9999999),
            'seller' =>  User::find($product['user_id'])['username'],
            'buyer' => $user['username'],
            'product_id' => $product['id'],
            'amount' => $amount,
            'pay' => $totalPay,
        ];


        $order->fill($data)->save();

        die(json_encode(['status' => 'success', 'msg' => 'Thanh toán thành công']));
    }

    public function index() {

        $core = new CoreController();

        $body = [
            'title' => 'Lịch sử đơn hàng',
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


        $orders = Orders::all();

        $product = new Product();

        return view('backend.order.index')->with(compact('core', 'body', 'orders', 'product'));
    }
}
