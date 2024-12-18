<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdukImage extends Model
{
    protected $table = 'produk_image';

    protected $fillable = [
        'produk_id',
        'color_id',
        'image'
    ];

    public function baju()
    {
        return $this->belongsTo(Produk::class, 'produk_id', 'id');
    }
    
    public function warna()
    {
        return $this->belongsTo(Colors::class, 'color_id', 'id');
    }
}
