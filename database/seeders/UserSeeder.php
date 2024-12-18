<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(array(
            array(
                'name' => 'Admin Jay',
                'username' => 'Jaylaa',
                'email' => 'admin@gmail.com',
                'phone' => '0891892',
                'role' => '1',
                'password' => bcrypt('123456'),
            ),
            array(
                'name' => 'User Cunu',
                'username' => 'Cunuu',
                'email' => 'user@gmail.com',
                'phone' => '082736',
                'role' => '2',
                'password' => bcrypt('123456'),
            ),
        ));
    }
}
