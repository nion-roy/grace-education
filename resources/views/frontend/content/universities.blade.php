@extends('frontend.layout.app')

@section('title' , '| Our Partner Universities')

@section('main_content')

@push('css')
<style>

	.box-area .single-box a img {
		height: 80px;
		opacity: .8 !important;
	}

	.box-area .single-box small {
		text-align: center;
		display: block;
		color: #3aae36;
		padding-top: 12px;
		font-size: 14px;
	}
</style>
@endpush


<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1" style="background-image:url({{ asset('/setting/university/' . $banner->banner) }})">
	<div class="container">
		<div class="page-title-content">
			<h2>Our Partner Universities</h2>
			<ul>
				<li>
					<a href="/">
						Home
						<i class="fa fa-chevron-right"></i>
					</a>
				</li>
				<li>Our Partner Universities</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Page Title Area -->


<!-- Start Partner Area -->
<section class="box-area m-0 pt-100 pb-70">
	<div class="container">
		<div class="row">

			@foreach ($university as $uni)
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-box single-box-2 bg-4">
					<a href="/universities/{{ $uni->id }}">
						<img src="{{ asset('/setting/university/' . $uni->logo) }}" alt="Partner" class="img-fluid">
						<small>{{ $uni->university_name ?? null }}</small>
					</a>
				</div>
			</div>
			@endforeach

		</div>
	</div>
</section>
<!-- End Partner Area -->

@endsection