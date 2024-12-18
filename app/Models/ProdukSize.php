<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdukSize extends Model
{
    protected $table = 'produk_size';

    protected $fillable = [
        'produk_id',
        'size',
        'harga',
    ];

    public function baju()
    {
        return $this->belongsTo(Produk::class, 'produk_id', 'id');
    }
}
