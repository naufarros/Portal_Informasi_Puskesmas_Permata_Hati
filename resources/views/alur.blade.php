@extends('layouts.page')
@section('page')
<section class="bg-light text-center py-5">
    <div class="container pb-5 pt-5">
		<div class="pb-5 pt-5 row align-items-center justify-content-center">
			<div class="col-md-6">
				<h1 class="display-3 fw-bold"><span class="text-success">Layanan Puskesmas </span> Permata Hati </h1>
			</div>
            <div class="col-md-6">
				<img alt="" class="img-fluid" src="{{asset('assets/pelayanan.png')}}">
			</div>
		</div>
	<div class="container pb-5 pt-5">
		<div class="pb-5 pt-5 row">
			<div class="col-lg-9 col-xl-8 ms-auto me-auto pb-5 pt-5">
				<span></span>
				<h1 class="display-3 fw-bold mb-3">ALUR PELAYANAN</h1>
				<p class="lead mb-4"></p>
                <img alt="" class="img-fluid" src="{{asset('assets/alur.jpg')}}">
			</div>
		</div>
	</div>
</section>
@endsection