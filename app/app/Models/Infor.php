<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infor extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = ['name', 'zalo', 'facebook', 'telegram']; 
    protected $attributes = [
        'name' => '',
        'zalo' => '',
        'facebook' => '',
        'telegram' => '',
    ];

}
