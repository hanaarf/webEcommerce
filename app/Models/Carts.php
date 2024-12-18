<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    protected $table = 'carts';

    protected $fillable = [
        'user_id',
        'produk_id',
        'produk_image',
        'color',
        'color_image',
        'size',
        'price',
        'qty',
        'weight'
    ];
}
