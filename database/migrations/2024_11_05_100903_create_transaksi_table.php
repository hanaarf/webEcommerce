<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('provinsi_id')->constrained('provinsi');
            $table->string('invoice');
            $table->string('nama_kurir');
            $table->string('layanan_kurir');
            $table->string('ongkir');
            $table->string('berat');
            $table->longText('alamat');
            $table->string('total_pembelian');
            $table->enum('status', array('unpaid', 'paid', 'expired', 'cancel'))->default('unpaid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
