<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Mengambil data pasien dari model
        $patients = Pasien::all();

        // Memformat data untuk chart jenis kelamin
        $genderData = $this->formatGenderChartData($patients);

        // Memformat data untuk chart umur
        $ageData = $this->formatAgeChartData($patients);

        // Memformat data untuk chart instalasi
        $instalasiData = $this->formatInstalasiChartData($patients);

        $diseaseData = $this->formatDiseaseChartData($patients);

        $visitData = $this->formatVisitChartData($patients);

        return view('home', compact('genderData', 'ageData', 'instalasiData', 'diseaseData', 'visitData'));
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

    private function formatDiseaseChartData($patients) {
        $diseaseData = $patients->groupBy('penyakit')->map(function ($group) {
            return $group->count();
        });
    
        $topDiseases = $diseaseData->sortDesc()->take(10);
    
        $diseaseLabels = $topDiseases->keys();
        $diseaseCounts = $topDiseases->values();
    
        return [
            'labels' => $diseaseLabels,
            'counts' => $diseaseCounts,
        ];
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
}