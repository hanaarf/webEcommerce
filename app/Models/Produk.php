<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';

    protected $fillable = [
        'nama_produk',
        'categori_id',
        'merk_produk_id',
        'harga',
        'deskripsi',
        'slug'
    ];

    public function kategori()
    {
        return $this->belongsTo(Categori::class, 'categori_id', 'id');
    }

    public function merk()
    {
        return $this->belongsTo(MerkProduk::class, 'merk_produk_id', 'id');
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'produk_id');
    }

    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }
}
