<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Profile;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        $data = [
            'welcome' => 'Selamat Datang'
        ];
        return view('dashboard')->with($data);
    }

    function profile(){
        $data = Profile::all();
        return view('profile')->with('data', $data);


        // $data = [
        //     'judul_profile' => 'Halaman Profile',
        //     'tentang_saya' => 'Tentang Saya',
        //     'profile' => [
        //         'nama' => 'Muhammad Alvi Fikri',
        //         'email' => 'alvifikri1@gmail.com',
        //         'status' => 'Mahasiswa',
        //         'kampus' => 'Jl. Soekarno Hatta No.9, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141',
        //         'alamat' => 'JL KH Hasyim Asyari, Kepanjen, Malang',
        //         'skill1' => 'PHP',
        //         'skill2' => 'Java'
        //     ]
        //     ];
        //     return view('profile')->with($data);
    }

    function experience(){
        $data = Experience::all();
        return view('experience')->with('data', $data);
    }

    function contactus(){
        return view('contact-us');
    }
}
