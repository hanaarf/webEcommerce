<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(array(
            array(
                'categori' => 'Gamis',
                'slug' => 'gamis'
            ),
            array(
                'categori' => 'Kemeja',
                'slug' => 'kemeja'
            ),
            array(
                'categori' => 'Celana',
                'slug' => 'celana'
            ),
            array(
                'categori' => 'rok',
                'slug' => 'rok'
            ),
            array(
                'categori' => 'kerudung',
                'slug' => 'kerudung'
            ),
            array(
                'categori' => 'kaos',
                'slug' => 'kaos'
            ),
            array(
                'categori' => 'jaket',
                'slug' => 'jaket'
            ),
            array(
                'categori' => 'hoodie',
                'slug' => 'hoodie'
            ),
        ));
    }
}
