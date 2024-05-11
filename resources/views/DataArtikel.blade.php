@extends('layouts.app')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="container mt-2">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">{{ __('Data Artikel') }}</div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a href="{{ route('artikel.create') }}" class="btn btn-primary">Tambah Data Artikel</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Kategori</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Tanggal Upload</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1 @endphp
                                            @foreach ($DataArtikels as $DataArtikel)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td><img src="{{ $DataArtikel->gambar }}" alt="Gambar Artikel" style="width: 250px; height: 150px; object-fit: cover;"></td>
                                                <td>{{ $DataArtikel->kategori }}</td>
                                                <td>{{ $DataArtikel->judul }}</td>
                                                <td>{{ $DataArtikel->deskripsi }}</td>
                                                <td>{{ $DataArtikel->tanggal_upload }}</td>
                                                <td>
                                                    <a href="{{ route('artikel.edit', $DataArtikel->id) }}" class="btn btn-primary mb-2">Edit</a>
                                                    <form action="{{ route('artikel.destroy', $DataArtikel->id) }}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {!! $DataArtikels->withQueryString()->links('pagination::bootstrap-5') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection