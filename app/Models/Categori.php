<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'categori',
        'slug'
    ];
}
