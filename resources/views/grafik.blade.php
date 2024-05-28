@extends('layouts.page')
@section('page')

<section class="py-5">
	<div class="container pt-5">
		<div class="justify-content-center">
			<div class="col-md-12">
				<div class="text-center">
					<span class="text-muted">GRAFIK</span>
					<h2 class="display-5 fw-bold">GRAFIK INFORMASI KUNJUNGAN PASIEN</h2>
					{{-- <p class="lead">Lorem ipsum dolor, sit amet elit Quamnitm veniam dicta architecto, quos id nemo minima nulla ducimus officii nulla ducimus officiis! Lorem ipsum dolor, sit amet elit Quamnitm veniam dicta architecto.</p> --}}
                    <div class="container mt-2">
                        <div class="justify-content-center">
                            <div class="col-md-12">
                                <div class="card mx-auto mt-5">
                                    <div class="card-header">{{ __('Kunjungan Pasien per Bulan') }}</div>
                                    <div class="card-body">
                                        <div class="mt-1">
                                            <canvas id="visitChart" width="950" height="300"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var visitData = @json($visitData);
var visitChartCanvas = document.getElementById('visitChart').getContext('2d');
var visitChart = new Chart(visitChartCanvas, {
    type: 'line',
    data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets: [{
            label: 'Jumlah Kunjungan Pasien per Bulan',
            data: visitData,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 2,
            pointRadius: 5,
            pointBackgroundColor: 'rgba(54, 162, 235, 1)',
            pointBorderColor: 'rgba(54, 162, 235, 1)',
            pointHoverRadius: 8,
            pointHoverBackgroundColor: 'rgba(54, 162, 235, 1)',
            pointHoverBorderColor: 'rgba(54, 162, 235, 1)'
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        },
        plugins: {
            legend: {
                display: true,
                position: 'bottom',
                labels: {
                    font: {
                        size: 14
                    }
                }
            }
        }
    }
});
</script>
@endsection