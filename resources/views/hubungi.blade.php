@extends('layouts.page')
@section('page')
<section class="py-5">
	<div class="container pt-5">
		<div class="row justify-content-center text-center mb-2 mb-lg-4">
			<div class="col-lg-8 col-xxl-7">
				<span class="text-muted"></span>
				<h2 class="display-5 fw-bold mb-3">Hubungi Kami</h2>
				<p class="lead mb-0">"Berani Lapor! Untuk Pelayanan Kesehatan atau Publik yang Lebih Baik"</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-6">
				<form id="whatsappForm">
					<div class="row justify-content-center">
						<div class="col-md-12">
							<div class="mb-3">
								<input id="namaInput" class="form-control bg-light" placeholder="Masukkan Nama Anda" type="text">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<textarea id="pesanInput" class="form-control bg-light" placeholder="Pesan Anda" rows="4"></textarea>
							</div>
						</div>
						<div class="col-md-4">
							<div class="d-grid">
								<button id="kirimButton" class="btn btn-primary" type="button">Kirim Pesan</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="mt-5 d-flex  mx-auto justify-content-center "><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31593.304466419937!2d113.67707940987664!3d-8.186323878077207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd696eb6773922b%3A0xdb8684c1dcfbbdc2!2sPuskesmas%20Kaliwates!5e0!3m2!1sid!2sid!4v1714829709605!5m2!1sid!2sid" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    const namaInput = document.getElementById('namaInput');
    const pesanInput = document.getElementById('pesanInput');
    const kirimButton = document.getElementById('kirimButton');

    kirimButton.addEventListener('click', function() {
        const nama = namaInput.value.trim();
        const pesan = pesanInput.value.trim();

		if (nama === '' && pesan !== '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Mohon isi nama Anda.'
            });
            return;
        }

        if (nama !== '' && pesan === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Mohon isi pesan Anda.'
            });
            return;
        }

        if (nama === '' && pesan === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Mohon isi nama dan pesan Anda.'
            });
            return;
        }

        const formattedMessage = `Halo, perkenalkan saya ${nama}. ${pesan}`;

        const nomorTujuan = '6285156730320';
        const urlWhatsApp = `https://wa.me/${nomorTujuan}?text=${encodeURIComponent(formattedMessage)}`;

        window.open(urlWhatsApp, '_blank');
    });
</script>
@endsection