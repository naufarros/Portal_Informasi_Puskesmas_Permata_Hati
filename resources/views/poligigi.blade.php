@extends('layouts.page')
@section('page')
<div class="container pb-5 pt-5">
    <div class="pb-5 pt-5 row align-items-center justify-content-center">
        <div class="col-md-6">
            <h1 class="display-3 fw-bold"><span class="text-success">Layanan Puskesmas </span> Permata Hati </h1>
        </div>
        <div class="col-md-6">
            <img alt="" class="img-fluid" src="{{asset('assets/pelayanan.png')}}">
        </div>
    </div>
    <div class="container pt-5">
		<div class="row justify-content-center text-center mb-2 mb-lg-4">
			<div class="col-12 col-lg-8 col-xxl-7 text-center mx-auto">
				<span class="text-muted"></span>
				<h2 class="display-6 fw-bold">JADWAL PELAYANAN POLI GIGI</h2>
				<p class="lead"></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="card text-center border-0 mb-3">
					<div class="card-body p-3 d-flex flex-column justify-content-center align-items-center">
						<div class="mb-4 mx-xl-5"><img class="img-fluid rounded-circle" src="{{asset('assets/dg1.png')}}"></div>
						<h5 class="fw-bold">dr. Nadia Sari, S.KG</h5>
						<div class="text-muted mb-3">
							Dokter Gigi
						</div>
						<div class="text-start">
							<li>Hari: Senin - Rabu</li> 
                            <li>Jam: 08.00 - 14.00</li>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card text-center border-0 mb-3">
					<div class="card-body p-3 d-flex flex-column justify-content-center align-items-center">
						<div class="mb-4 mx-xl-5"><img class="img-fluid rounded-circle" src="{{asset('assets/dg2.png')}}"></div>
						<h5 class="fw-bold">dr. Anisa Rahmawati, M.G., Sp.KG</h5>
						<div class="text-muted mb-3">
							Dokter Gigi
						</div>
						<div class="text-start">
							<li>Hari: Senin - Rabu</li> 
                            <li>Jam: 14.00 - 19.00</li>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card text-center border-0 mb-3">
					<div class="card-body p-3 d-flex flex-column justify-content-center align-items-center">
						<div class="mb-4 mx-xl-5"><img class="img-fluid rounded-circle" src="{{asset('assets/dg3.png')}}"></div>
						<h5 class="fw-bold">dr. Farhan Putra, S.KG</h5>
						<div class="text-muted mb-3">
							Dokter Gigi
						</div>
						<div class="text-start">
							<li>Hari: Kamis - Minggu</li> 
                            <li>Jam: 08.00 - 14.00</li>
						</div>
					</div>
				</div>
			</div>
            <div class="col-md-4">
				<div class="card text-center border-0 mb-3">
					<div class="card-body p-3 d-flex flex-column justify-content-center align-items-center">
						<div class="mb-4 mx-xl-5"><img class="img-fluid rounded-circle" src="{{asset('assets/dg4.png')}}"></div>
						<h5 class="fw-bold">dr. Rizky Firmansyah, M.G., Sp.KG</h5>
						<div class="text-muted mb-3">
							Dokter Gigi
						</div>
						<div class="text-start">
							<li>Hari: Kamis - Minggu</li> 
                            <li>Jam: 14.00 - 19.00</li>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection