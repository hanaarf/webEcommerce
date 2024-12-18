<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerkProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('merk_produks')->insert(array(
            array(
                'merk_produk' => 'rabbani',
                'slug' => 'rabbani'
            ),
            array(
                'merk_produk' => 'puma',
                'slug' => 'puma'
            ),
            array(
                'merk_produk' => 'guccah',
                'slug' => 'guccah'
            ),
            array(
                'merk_produk' => 'Adidas',
                'slug' => 'Adidas'
            ),
            array(
                'merk_produk' => 'Nevada',
                'slug' => 'Nevada'
            ),
            array(
                'merk_produk' => 'Dior',
                'slug' => 'Dior'
            ),
            array(
                'merk_produk' => 'Prada',
                'slug' => 'Prada'
            ),
            array(
                'merk_produk' => 'zara',
                'slug' => 'zara'
            ),
        ));
    }
}
