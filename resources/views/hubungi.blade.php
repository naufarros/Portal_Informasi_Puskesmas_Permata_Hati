@extends('layouts.page')
@section('page')
<section class="py-5">
	<div class="container pt-5 ">
		<div class="row justify-content-center text-center mb-2 mb-lg-4">
			<div class="col-lg-8 col-xxl-7">
				<span class="text-muted">Let's Talk</span>
				<h2 class="display-5 fw-bold mb-3">Contact Us</h2>
				<p class="lead mb-0">Lorem ipsum dolor, sit amet elit Quamnitm veniam dicta, quos nemo minima nulla ducimus officii nulla ducimus officiis! Lorem ipsum dolor, sit amet elit Quamnitm.</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-6">
				<form>
					<div class="row justify-content-center">
						<div class="col-md-6">
							<div class="mb-3">
								<input class="form-control bg-light" placeholder="First name" type="text">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<input class="form-control bg-light" placeholder="Last name" type="text">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<textarea class="form-control bg-light" placeholder="Your message" rows="4"></textarea>
							</div>
						</div>
						<div class="col-md-4">
							<div class="d-grid">
								<button class="btn btn-primary" type="submit">Send message</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="mt-5"><img alt="" class="img-fluid" src="https://freefrontend.dev/assets/map-img-2.png"></div>
</section>
@endsection