@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit Artikel') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('artikel.update', $artikel->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="gambar">Link Gambar</label>
                            <input type="text" name="gambar" class="form-control" id="gambar" value="{{ $artikel->gambar }}" required>
                            <span id="gambar-error" class="text-danger"></span>
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" name="kategori" class="form-control" id="kategori" value="{{ $artikel->kategori }}" required>
                        </div>

                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control" id="judul" value="{{ $artikel->judul }}" required>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="deskripsi" required>{{ $artikel->deskripsi }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_upload">Tanggal Upload</label>
                            <input type="date" name="tanggal_upload" class="form-control" id="tanggal_upload" value="{{ $artikel->tanggal_upload }}" required>
                        </div>

                        <div class="form-group">
                            <label for="link_artikel">Link Artikel</label>
                            <input type="text" name="link_artikel" class="form-control" id="link_artikel" value="{{ $artikel->link_artikel }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Update Artikel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection