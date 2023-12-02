<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=['stt','name', 'category_id', 'user_id', 'cost', 'content', 'preview', 'flag', 'status', 'sold'];

}