@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit Pasien') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pasien.update', $pasien->nik) }}">
                        @csrf
                        @method('PUT')

                        @if($pasien)
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" class="form-control" id="nik" value="{{ $pasien->nik }}" required readonly>
                            </div>

                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="{{ $pasien->nama_lengkap }}" required>
                            </div>

                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="number" name="umur" class="form-control" id="umur" value="{{ $pasien->umur }}" required>
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                    <option value="Laki-laki" @if($pasien->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                                    <option value="Perempuan" @if($pasien->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" class="form-control" id="alamat" required>{{ $pasien->alamat }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="nomor_telepon">Nomor Telepon</label>
                                <input type="text" name="nomor_telepon" class="form-control" id="nomor_telepon" value="{{ $pasien->nomor_telepon }}" required>
                            </div>

                            <div class="form-group">
                                <label for="instalasi">Instalasi</label>
                                <select name="instalasi" id="instalasi" class="form-control" required>
                                    <option value="Gawat Darurat" @if($pasien->instalasi == 'Gawat Darurat') selected @endif>Gawat Darurat</option>
                                    <option value="Rawat Inap" @if($pasien->instalasi == 'Rawat Inap') selected @endif>Rawat Inap</option>
                                    <option value="Rawat Jalan" @if($pasien->instalasi == 'Rawat Jalan') selected @endif>Rawat Jalan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="penyakit">Penyakit</label>
                                <input type="text" name="penyakit" class="form-control" id="penyakit" value="{{ $pasien->penyakit }}" required readonly>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                        @else
                            <div class="alert alert-danger mt-3" role="alert">
                                Data Pasien tidak ditemukan.
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection