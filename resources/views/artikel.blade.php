@extends('layouts.page')

@section('page')
<section class="py-5">
    <div class="container pt-5">
        <div class="row justify-content-center text-center mb-4 mb-md-5">
            <div class="col-xl-9 col-xxl-8">
                <span class="text-muted"></span>
                <h2 class="display-5 fw-bold">ARTIKEL KESEHATAN</h2>
                <p class="lead">Menyediakan Informasi Seputar Kesehatan dari Sumber yang Terpercaya</p>
            </div>
        </div>
        <div class="row">
            @foreach($artikels as $artikel)
            <div class="col-md-6">
                <div class="card border-0">
                    <a href="{{$artikel->link_artikel}}" target="_blank"><img alt="" class="img-fluid rounded" style="width: 550px; height: 350px; object-fit: cover;" src="{{ $artikel->gambar }}"></a>
                    <div class="card-body px-0 mb-3">
                        <div class="d-flex">
                            <p class="text-primary fw-semibold text-decoration-none me-3">{{ $artikel->kategori }}</p>
                            <p class="text-muted">{{ $artikel->tanggal_upload}}</p>
                        </div>
                        <h3 class="fw-semibold my-2"><a class="text-dark text-decoration-none" href="#">{{ $artikel->judul }}</a></h3>
                        <p>{{ $artikel->deskripsi }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection