<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experience')->insert([
            'title' => 'Pengalaman Kuliah',
            'content' => 'Sejak berkuliah di POLINEMA dengan memilih Jurusan Teknik Informasi Prodi D4 Teknik Informatika, Saya sangat senang sekali dikarenakan tugas yang diberikan oleh para dosen sangatlah mudah dan pemberian deadlinenya juga panjang. Oleh karena itu, saya sangat termotivasi untuk selalu rajin mengikuti perkuliahan dan mengerjakan tugas tepat waktu'
        ]);
    }
}
