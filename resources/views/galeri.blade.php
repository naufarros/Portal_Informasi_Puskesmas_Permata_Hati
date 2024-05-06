@extends('layouts.page')
@section('page')
<section class="py-5">
	<div class="container pt-5 ">
		<div class="row justify-content-center text-center mb-3 mb-md-5">
			<div class="col-lg-8 col-xxl-7">
				<span class="text-muted">Galeri</span>
				<h2 class="display-5 fw-bold mb-3">Galeri Puskesmas</h2>
				<p class="lead"></p>
			</div>
		</div>
		<div class="carousel slide container pointer-event" data-bs-ride="carousel" id="galleryCarouse1">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row gy-4">
						<div class="col-md-3"><img alt="" class="img-fluid rounded-1" src="{{asset('assets/poliumum.jpg')}}"></div>
						<div class="col-md-3"><img alt="" class="img-fluid rounded-1" src="{{asset('assets/poligigi.jpg')}}"></div>
						<div class="col-md-3"><img alt="" class="img-fluid rounded-1" src="{{asset('assets/loket.jpg')}}"></div>
						<div class="col-md-3"><img alt="" class="img-fluid rounded-1" src="{{asset('assets/tunggu.jpg')}}"></div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row gy-4">
						<div class="col-md-3"><img alt="" class="img-fluid rounded-1" src="https://freefrontend.dev/assets/square.png"></div>
						<div class="col-md-3"><img alt="" class="img-fluid rounded-1" src="https://freefrontend.dev/assets/square.png"></div>
						<div class="col-md-3"><img alt="" class="img-fluid rounded-1" src="https://freefrontend.dev/assets/square.png"></div>
						<div class="col-md-3"><img alt="" class="img-fluid rounded-1" src="https://freefrontend.dev/assets/square.png"></div>
					</div>
				</div>
			</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#galleryCarouse1" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#galleryCarouse1" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
		</div>
	</div>
</section>
@endsection