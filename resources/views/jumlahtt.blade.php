@extends('layouts.page')
@section('page')
<section class="py-5">
	<div class="container pt-5">
		<div class="row justify-content-center text-center mb-4 mb-md-5">
			<div class="col-xl-9 col-xxl-8">
				<span class="text-muted"></span>
				<h2 class="display-5 fw-bold">Informasi Jumlah Tempat Tidur & Mobil Ambulans</h2>
				<p class="lead">Memberikan informasi tentang jumlah tempat tidur dan mobil ambulans yang disediakan di Puskesmas Permata Hati</p>
			</div>
		</div>
		<div class="row align-items-center gy-md-3">
			<div class="col-md-6">
				<div class="mt-4 mt-md-0"><img alt="" class="img-fluid rounded my-md-0 my-4" src="{{asset('assets/jumlahtt.jpg')}}"></div>
			</div>
			<div class="col-md-6">
				<a class="text-primary fw-semibold text-decoration-none" href=""></a>
				<h2 class="fw-semibold my-1">15 TEMPAT TIDUR TERSEDIA DI PUSKESMAS PERMATA HATI</h2>
				<p class="my-4"></p>
			</div>
			<div class="col-md-6">
				<div class="mt-4 mt-md-0"><img alt="" class="img-fluid rounded my-md-0 my-4" src="{{asset('assets/ambulance.jpg')}}"></div>
			</div>
			<div class="col-md-6">
				<a class="text-primary fw-semibold text-decoration-none" href=""></a>
				<h2 class="fw-semibold my-1">2 MOBIL AMBULANS TERSEDIA DI PUSKESMAS PERMATA HATI</h2>
				<p class="my-4"></p>
			</div>
		</div>
	</div>
</section>
@endsection