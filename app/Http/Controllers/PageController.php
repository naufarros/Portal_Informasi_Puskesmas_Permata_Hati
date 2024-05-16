<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Pasien;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function hubungi(){
        return view('hubungi');
    }

    public function galeri(){
        return view('galeri');
    }

    public function layanan(){
        return view('pelayanan');
    }

    public function alur(){
        return view('alur');
    }

    public function poliumum(){
        return view('poliumum');
    }

    public function poligigi(){
        return view('poligigi');
    }

    public function grafik(){
        
        $patients = Pasien::all();

        $visitData = $this->formatVisitChartData($patients);

        return view('grafik', compact('visitData'));
    }

    private function formatVisitChartData($patients)
    {
        $monthlyVisits = array_fill(0, 12, 0); // Array untuk menyimpan jumlah kunjungan per bulan

        foreach ($patients as $patient) {
            $month = Carbon::parse($patient->tanggal_kunjungan)->month;
            $monthlyVisits[$month - 1]++; // Menambah jumlah kunjungan pada bulan yang sesuai
        }

        return $monthlyVisits;
    }

    public function tren(){
        return view('tren');
    }

    public function jumlahtt(){
        return view('jumlahtt');
    }

    public function artikel(){
        $artikels = Artikel::all();
        return view('artikel', ['artikels' => $artikels]);
    }
}