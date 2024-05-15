<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Pasien;

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

        // Memformat data untuk chart jenis kelamin
        $genderData = $this->formatGenderChartData($patients);

        // Memformat data untuk chart umur
        $ageData = $this->formatAgeChartData($patients);

        // Memformat data untuk chart instalasi
        $instalasiData = $this->formatInstalasiChartData($patients);

        $diseaseData = $this->formatDiseaseChartData($patients);

        return view('grafik', compact('genderData', 'ageData', 'instalasiData', 'diseaseData'));
    }

    // Metode untuk memformat data jenis kelamin
    private function formatGenderChartData($patients)
    {
        $maleCount = $patients->where('jenis_kelamin', 'Laki-laki')->count();
        $femaleCount = $patients->where('jenis_kelamin', 'Perempuan')->count();

        return [
            'male' => $maleCount,
            'female' => $femaleCount
        ];
    }
    
    // Metode untuk memformat data instalasi
    private function formatInstalasiChartData($patients)
    {
        $gawatdaruratCount = $patients->where('instalasi', 'Gawat Darurat')->count();
        $rawatjalanCount = $patients->where('instalasi', 'Rawat Jalan')->count();
        $rawatinapCount = $patients->where('instalasi', 'Rawat Inap')->count();
    
        return [
            'gawatdarurat' => $gawatdaruratCount,
            'rawatjalan' => $rawatjalanCount,
            'rawatinap' => $rawatinapCount
        ];
    }

    // Metode untuk memformat data umur
    private function formatAgeChartData($patients)
    {
        $ageData = [];

        // Menghitung jumlah pasien berdasarkan rentang umur
        $ageGroups = [0, 10, 20, 30, 40, 50, 60, 70, 80, 90];
        foreach ($ageGroups as $index => $age) {
            if ($index < count($ageGroups) - 1) {
                $count = $patients->whereBetween('umur', [$age, $ageGroups[$index + 1] - 1])->count();
                array_push($ageData, $count);
            }
        }

        return $ageData;
    }

    // Metode untuk memformat data penyakit
private function formatDiseaseChartData($patients)
{
    // Mengelompokkan data berdasarkan penyakit dan menghitung jumlah pasien untuk setiap penyakit
    $diseaseData = $patients->groupBy('penyakit')->map(function ($group) {
        return $group->count();
    });

    // Memisahkan nama penyakit dan total pasien
    $diseaseLabels = $diseaseData->keys();
    $diseaseCounts = $diseaseData->values();

    return [
        'labels' => $diseaseLabels,
        'counts' => $diseaseCounts,
    ];
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