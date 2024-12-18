<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    protected $fillable = [
        'user_id',
        'provinsi_id',
        'invoice',
        'nama_kurir',
        'layanan_kurir',
        'ongkir',
        'berat',
        'alamat',
        'total_pembelian',
        'status',
    ];
}
