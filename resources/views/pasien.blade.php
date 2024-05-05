@extends('layouts.app')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="container mt-2">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">{{ __('Data Pasien') }}</div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a href="{{ route('pasien.create') }}" class="btn btn-primary">Tambah Data Pasien</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIK</th>
                                                <th>Nama Lengkap</th>
                                                <th>Umur</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Alamat</th>
                                                <th>Nomor Telepon</th>
                                                <th>Instalasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1 @endphp
                                            @foreach ($pasiens as $pasien)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $pasien->nik }}</td>
                                                <td>{{ $pasien->nama_lengkap }}</td>
                                                <td>{{ $pasien->umur }}</td>
                                                <td>{{ $pasien->jenis_kelamin }}</td>
                                                <td>{{ $pasien->alamat }}</td>
                                                <td>{{ $pasien->nomor_telepon }}</td>
                                                <td>{{ $pasien->instalasi }}</td>
                                                <td>
                                                    <a href="{{ route('pasien.edit',$pasien->nik) }}" class="btn btn-primary">Edit</a>
                                                    <form action="{{ route('pasien.destroy', $pasien->nik) }}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {!! $pasiens->withQueryString()->links('pagination::bootstrap-5') !!}
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