<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

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

    public function layanan(){
        return view ('pelayanan');
    }

    public function alur(){
        return view ('alur');
    }

    public function poliumum(){
        return view ('poliumum');
    }

    public function poligigi(){
        return view ('poligigi');
    }

    public function artikel(){
        $artikels = Artikel::all();
        return view('artikel', ['artikels' => $artikels]);
    }
    
}
