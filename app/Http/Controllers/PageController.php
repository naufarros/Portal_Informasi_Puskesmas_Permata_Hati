<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view ('dashboard');
    }

    public function hubungi(){
        return view ('hubungi');
    }

    public function galeri(){
        return view ('galeri');
    }
}
