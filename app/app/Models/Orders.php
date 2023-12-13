<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable=['trans_id','seller', 'buyer', 'product_id', 'accounts', 'amount', 'pay'];

}
