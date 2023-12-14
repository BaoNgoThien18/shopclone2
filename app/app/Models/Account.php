<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable=['product_id','trans_id','seller','buyer', 'account'];


    public function getAccountOnProduct($categoryId) {

        if ($categoryId == -1) {
            $products = $this::All();
        } else {
            $products = $this::Where('product_id', $categoryId)->Where('buyer', null)->get();
        }

        return $products;
    }


}
