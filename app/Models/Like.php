<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';

    protected $fillable = [
        'user_id',
        'produk_id'
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
