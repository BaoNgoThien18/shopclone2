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
}
