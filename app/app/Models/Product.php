<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable=['stt','name', 'category_id', 'user_id', 'cost', 'content', 'preview', 'flag', 'status', 'sold'];

    public function getProductOnCategory($categoryId) {

        if ($categoryId == -1) {
            $products = $this::All();
        } else {
            $products = $this::Where('category_id', $categoryId)->get();
        }

        return $products;
    }

    public function topProduct() {
        $products = $this::orderBy('id', 'desc')->limit(6)->get();
        return $products;
    }

}

