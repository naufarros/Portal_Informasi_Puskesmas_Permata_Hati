@extends('layouts.page')
@section('page')
<section class="py-5">
	<div class="container pt-5">
		<div class="justify-content-center">
			<div class="col-md-12">
				<div class="text-center">
					<span class="text-muted">GRAFIK</span>
					<h2 class="display-5 fw-bold">GRAFIK TREN PENYAKIT 2024</h2>
					{{-- <p class="lead">Lorem ipsum dolor, sit amet elit Quamnitm veniam dicta architecto, quos id nemo minima nulla ducimus offici nulla ducimus officiis! Lorem ipsum dolor, sit amet elit Quamnitm veniam dicta architecto.</p> --}}
                    <div class="container mt-2">
                        <div class="justify-content-center">
                            <div class="col-md-12">
                                <div class="card mx-auto mt-5">
                                    <div class="card-header">{{ __('Tren Penyakit di Puskesmas Permata Hati') }}</div>
                                    <div class="card-body">
                                        <div class="mt-1">
                                            <canvas id="penyakitChart" width="950" height="300"></canvas>
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
    var diseaseData = @json($diseaseData);
    var diseaseChartCanvas = document.getElementById('penyakitChart').getContext('2d');

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