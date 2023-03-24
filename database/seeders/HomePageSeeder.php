<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('homepage')->insert([
            'title' => 'Muhammad Alvi Fikri | 2H-D4 Teknik Informatika',
            'content' => 'Selamat Datang Muhammad Alvi Fikri'
        ]);
    }
}
