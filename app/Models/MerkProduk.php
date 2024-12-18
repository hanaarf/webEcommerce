<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MerkProduk extends Model
{
    protected $table = 'merk_produks';

    protected $fillable = [
        'merk_produk',
        'slug'
    ];
}
