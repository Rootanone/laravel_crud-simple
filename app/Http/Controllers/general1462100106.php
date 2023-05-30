<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class general1462100106 extends Controller
{
    public function home()
    {   
        return view('home');
    }

    public function product()
    {
        return view('product');
    }

    public function about()
    {
        return view('about');
    }
}
