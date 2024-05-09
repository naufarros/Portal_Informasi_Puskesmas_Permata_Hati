@extends('layouts.app')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="container mt-2">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">{{ __('Jenis Kelamin') }}</div>
                            <div class="card-body">
                                <div class="mt-2">
                                    <canvas id="genderChart" width="200" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">{{ __('Umur') }}</div>
                            <div class="card-body">
                                <div class="mt-2">
                                    <canvas id="ageChart" width="200" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">{{ __('Instalasi') }}</div>
                            <div class="card-body">
                                <div class="mt-2">
                                    <canvas id="instalasiChart" width="200" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mt-4">
                            <div class="card-header">{{ __('10 Besar Penyakit') }}</div>
                            <div class="card-body">
                                <div class="mt-2">
                                    <canvas id="penyakitChart" width="200" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Chart untuk jenis kelamin
    var genderData = @json($genderData);
    var genderChartCanvas = document.getElementById('genderChart').getContext('2d');
    var genderChart = new Chart(genderChartCanvas, {
        type: 'pie',
        data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                data: [genderData['male'], genderData['female']],
                backgroundColor: ['#007bff', '#dc3545'],
            }]
        },
        options: {
            responsive: true,
        }
    });

    // Chart untuk umur
    var ageData = @json($ageData);
    var ageChartCanvas = document.getElementById('ageChart').getContext('2d');
    var ageChart = new Chart(ageChartCanvas, {
        type: 'line',
        data: {
            labels: ['0-10', '10-20', '20-30', '30-40', '40-50', '50-60', '60-70', '70-80', '80-90'],
            datasets: [{
                label: 'Jumlah Pasien',
                data: ageData,
                borderColor: '#007bff',
                borderWidth: 2,
                fill: false
            }]
        },
        options: {
            responsive: true,
        }
    });

    // Chart untuk instalasi
    var instalasiData = @json($instalasiData);
    var instalasiChartCanvas = document.getElementById('instalasiChart').getContext('2d');
    var instalasiChart = new Chart(instalasiChartCanvas, {
        type: 'pie',
        data: {
            labels: ['Gawat Darurat', 'Rawat Jalan', 'Rawat Inap'],
            datasets: [{
                data: [instalasiData['gawatdarurat'], instalasiData['rawatjalan'], instalasiData['rawatinap']],
                backgroundColor: ['#ffc107', '#28a745', '#dc3545'],
            }]
        },
        options: {
            responsive: true,
        }
    });

    var diseaseData = @json($diseaseData);
var diseaseChartCanvas = document.getElementById('penyakitChart').getContext('2d');

// Definisikan palet warna yang ingin Anda gunakan
var colors = [
    '#ff9999',
    '#99ff99',
    '#9999ff',
    '#ffcc99',
    '#cc99ff',
    '#99ccff',
    '#ffff99',
    '#99ffff',
    '#ff99ff',
    '#ccccff'
];

var diseaseChart = new Chart(diseaseChartCanvas, {
    type: 'bar',
    data: {
        labels: diseaseData.labels,
        datasets: [{
            label: '',
            data: diseaseData.counts,
            backgroundColor: colors,
        }]
    },
    options: {
        responsive: true,
    }
});

</script>
@endsection