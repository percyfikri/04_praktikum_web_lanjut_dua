<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profile')->insert([
            'image' => asset('\public\dist\img\PasPhoto.png'),
            'nama' => 'Muhammad Alvi Fikri',
            'nim' => '2141720190',
            'kelas' => 'TI-2H',
            'absen' => '21'
        ]);
    }
}
