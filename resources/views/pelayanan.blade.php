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
        <section class="py-5">
            <div class="container">
                <!--- Heading -->
                <div class="row text-center mb-4">
                    <div class="col-12 col-lg-10 col-xl-8 mx-auto text-center">
                        <p class="text-muted mb-0 fw-light">Persyaratan Pelayanan</p>
                        <h2>PASIEN UMUM</h2>
                        <p class="lead mb-4"></p>
                    </div>
                </div><!--- Steps Wrap -->
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="row">
                            <!-- Step -->
                            <div class="col-lg-4">
                                <div class="text-center position-relative">
                                    <!-- Step Icon -->
                                    <div class="step-icon mx-auto d-flex align-items-center justify-content-center" style="width:200px;height:200px">
                                        <img alt="" class="img-fluid" src="{{asset('assets/step1.png')}}">
                                    </div>
                                    <h4 class="mt-3 fs-5">Step 1</h4>
                                    <p class="text-muted mt-4 fs-6 px-lg-3 mb-5 mb-lg-0">Membawa Kartu Identitas (KTP, SIM, atau KK).</p><!-- Arrow Icon -->
                                    <div class="arrow-icon position-absolute d-none d-lg-block" style="top:85px; right:-25px">
                                        <svg class="bi bi-arrow-right" height="30" viewbox="0 0 16 16" width="30" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" fill-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </div><!-- Step -->
                            <div class="col-lg-4">
                                <div class="text-center position-relative">
                                    <!-- Step Icon -->
                                    <div class="step-icon mx-auto d-flex align-items-center justify-content-center" style="width: 200px;height: 200px;">
                                        <img alt="" class="img-fluid" src="{{asset('assets/step2.png')}}">
                                    </div>
                                    <h4 class="mt-3 fs-5">Step 2</h4>
                                    <p class="text-muted mt-4 fs-6 px-lg-3 mb-5 mb-lg-0">Membawa Kartu Indeks Berobat (untuk pasien lama).</p><!-- Arrow Icon -->
                                    <div class="arrow-icon d-none d-lg-block position-absolute" style="top:85px; right:-25px">
                                        <svg class="bi bi-arrow-right" height="30" viewbox="0 0 16 16" width="30" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" fill-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </div><!-- Step -->
                            <div class="col-lg-4">
                                <div class="text-center position-relative">
                                    <!--- Step Icon -->
                                    <div class="step-icon mx-auto d-flex align-items-center justify-content-center" style="width: 200px;height: 200px;">
                                        <img alt="" class="img-fluid" src="{{asset('assets/step3.png')}}">
                                    </div>
                                    <h4 class="mt-3 fs-5">Step 3</h4>
                                    <p class="text-muted mt-4 fs-6 px-lg-3 mb-5 mb-lg-0">Mengambil Nomor Antrian di Loket.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <div class="container">
                <!--- Heading -->
                <div class="row text-center mb-4">
                    <div class="col-12 col-lg-10 col-xl-8 mx-auto text-center">
                        <p class="text-muted mb-0 fw-light">Persyaratan Pelayanan</p>
                        <h2>PASIEN JKN (BPJS Kesehatan KIS)</h2>
                        <p class="lead mb-4"></p>
                    </div>
                </div><!--- Steps Wrap -->
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="row">
                            <!-- Step -->
                            <div class="col-lg-3">
                                <div class="text-center position-relative">
                                    <!-- Step Icon -->
                                    <div class="step-icon mx-auto d-flex align-items-center justify-content-center" style="width:200px;height:200px">
                                        <img alt="" class="img-fluid" src="{{asset('assets/bpjs.png')}}">
                                    </div>
                                    <h4 class="mt-3 fs-5">Step 1</h4>
                                    <p class="text-muted mt-4 fs-6 px-lg-3 mb-5 mb-lg-0">Membawa Kartu BPJS Kes-KIS.</p><!-- Arrow Icon -->
                                    <div class="arrow-icon position-absolute d-none d-lg-block" style="top:85px; right:-25px">
                                        <svg class="bi bi-arrow-right" height="30" viewbox="0 0 16 16" width="30" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" fill-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </div><!-- Step -->
                            <div class="col-lg-3">
                                <div class="text-center position-relative">
                                    <!-- Step Icon -->
                                    <div class="step-icon mx-auto d-flex align-items-center justify-content-center" style="width: 200px;height: 200px;">
                                        <img alt="" class="img-fluid" src="{{asset('assets/step2.png')}}">
                                    </div>
                                    <h4 class="mt-3 fs-5">Step 2</h4>
                                    <p class="text-muted mt-4 fs-6 px-lg-3 mb-5 mb-lg-0">Membawa Kartu Indeks Berobat (untuk pasien lama).</p><!-- Arrow Icon -->
                                    <div class="arrow-icon d-none d-lg-block position-absolute" style="top:85px; right:-25px">
                                        <svg class="bi bi-arrow-right" height="30" viewbox="0 0 16 16" width="30" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" fill-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </div><!-- Step -->
                            <div class="col-lg-3">
                                <div class="text-center position-relative">
                                    <!--- Step Icon -->
                                    <div class="step-icon mx-auto d-flex align-items-center justify-content-center" style="width: 200px;height: 200px;">
                                        <img alt="" class="img-fluid" src="{{asset('assets/step3.png')}}">
                                    </div>
                                    <h4 class="mt-3 fs-5">Step 3</h4>
                                    <p class="text-muted mt-4 fs-6 px-lg-3 mb-5 mb-lg-0">Mengambil Nomor Antrian di Loket.</p>
                                    <div class="arrow-icon position-absolute d-none d-lg-block" style="top:85px; right:-25px">
                                        <svg class="bi bi-arrow-right" height="30" viewbox="0 0 16 16" width="30" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" fill-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="text-center position-relative">
                                    <!--- Step Icon -->
                                    <div class="step-icon mx-auto d-flex align-items-center justify-content-center" style="width: 200px;height: 200px;">
                                        <img alt="" class="img-fluid" src="{{asset('assets/nopeople.png')}}">
                                    </div>
                                    <h4 class="mt-3 fs-5">Step 4</h4>
                                    <p class="text-muted mt-4 fs-6 px-lg-3 mb-5 mb-lg-0">Tidak Boleh Diwakilkan Orang Lain Untuk Berobat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <div class="container">
                <!--- Heading -->
                <div class="row text-center mb-4">
                    <div class="col-12 col-lg-10 col-xl-8 mx-auto text-center">
                        <p class="text-muted mb-0 fw-light">Persyaratan Pelayanan</p>
                        <h2>PASIEN RUJUKAN</h2>
                        <p class="lead mb-4"></p>
                    </div>
                </div><!--- Steps Wrap -->
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="row">
                            <!-- Step -->
                            <div class="col-lg-3">
                                <div class="text-center position-relative">
                                    <!-- Step Icon -->
                                    <div class="step-icon mx-auto d-flex align-items-center justify-content-center" style="width:200px;height:200px">
                                        <img alt="" class="img-fluid" src="{{asset('assets/bpjs.png')}}">
                                    </div>
                                    <h4 class="mt-3 fs-5">Step 1</h4>
                                    <p class="text-muted mt-4 fs-6 px-lg-3 mb-5 mb-lg-0">Membawa Kartu BPJS Kes-KIS bagi Peserta JKN.</p><!-- Arrow Icon -->
                                    <div class="arrow-icon position-absolute d-none d-lg-block" style="top:85px; right:-25px">
                                        <svg class="bi bi-arrow-right" height="30" viewbox="0 0 16 16" width="30" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" fill-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </div><!-- Step -->
                            <div class="col-lg-3">
                                <div class="text-center position-relative">
                                    <!-- Step Icon -->
                                    <div class="step-icon mx-auto d-flex align-items-center justify-content-center" style="width: 200px;height: 200px;">
                                        <img alt="" class="img-fluid" src="{{asset('assets/step1.png')}}">
                                    </div>
                                    <h4 class="mt-3 fs-5">Step 2</h4>
                                    <p class="text-muted mt-4 fs-6 px-lg-3 mb-5 mb-lg-0">Pasien Umum Membawa Kartu Identitas (KTP, SIM, atau KK).</p><!-- Arrow Icon -->
                                    <div class="arrow-icon d-none d-lg-block position-absolute" style="top:85px; right:-25px">
                                        <svg class="bi bi-arrow-right" height="30" viewbox="0 0 16 16" width="30" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" fill-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </div><!-- Step -->
                            <div class="col-lg-3">
                                <div class="text-center position-relative">
                                    <!--- Step Icon -->
                                    <div class="step-icon mx-auto d-flex align-items-center justify-content-center" style="width: 200px;height: 200px;">
                                        <img alt="" class="img-fluid" src="{{asset('assets/nopeople.png')}}">
                                    </div>
                                    <h4 class="mt-3 fs-5">Step 3</h4>
                                    <p class="text-muted mt-4 fs-6 px-lg-3 mb-5 mb-lg-0">Tidak Boleh Diwakilkan Orang Lain Untuk Berobat.</p>
                                    <div class="arrow-icon position-absolute d-none d-lg-block" style="top:85px; right:-25px">
                                        <svg class="bi bi-arrow-right" height="30" viewbox="0 0 16 16" width="30" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" fill-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="text-center position-relative">
                                    <!--- Step Icon -->
                                    <div class="step-icon mx-auto d-flex align-items-center justify-content-center" style="width: 200px;height: 200px;">
                                        <img alt="" class="img-fluid" src="{{asset('assets/rujuk.png')}}">
                                    </div>
                                    <h4 class="mt-3 fs-5">Step 4</h4>
                                    <p class="text-muted mt-4 fs-6 px-lg-3 mb-5 mb-lg-0">Dirujuk Sesuai Indikasi Medis dan Alur Pelayanan Rujukan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	</div>
</section>
@endsection