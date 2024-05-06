@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tambah Pasien') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pasien.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" class="form-control" id="nik" required>
                            <span id="nik-error" class="text-danger"></span>
                        </div>

                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" required>
                        </div>

                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="number" name="umur" class="form-control" id="umur" required>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" id="alamat" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="nomor_telepon">Nomor Telepon</label>
                            <input type="text" name="nomor_telepon" class="form-control" id="nomor_telepon" required>
                        </div>

                        <div class="form-group">
                            <label for="instalasi">Instalasi</label>
                            <select name="instalasi" id="instalasi" class="form-control" required>
                                <option value="Gawat Darurat">Gawat Darurat</option>
                                <option value="Rawat Inap">Rawat Inap</option>
                                <option value="Rawat Jalan">Rawat Jalan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="penyakit">Penyakit</label>
                            <input type="text" name="penyakit" class="form-control" id="penyakit" required>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('nik').addEventListener('input', function() {
    var nikInput = this.value;
    var errorSpan = document.getElementById('nik-error');
    
    if (nikInput.length !== 16) {
        errorSpan.textContent = 'NIK harus terdiri dari 16 digit.';
    } else {
        errorSpan.textContent = '';
    }
});
</script>
@endsection