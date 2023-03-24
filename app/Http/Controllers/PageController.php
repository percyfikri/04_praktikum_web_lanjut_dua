<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use App\Models\Experience;
use App\Models\Profile;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        $data = Homepage::all();
        // $data1 = 
        return view('dashboard')->with('data', $data);
    }

    function profile(){
        $data = Profile::all();
        return view('profile')->with('data', $data);
    }

    function experience(){
        $data = Experience::all();
        return view('experience')->with('data', $data);
    }

    function contactus(){
        return view('contact-us');
    }
}
