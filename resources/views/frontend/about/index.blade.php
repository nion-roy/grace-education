@extends('frontend.layout.app')

@section('title' , '| About Us')

@section('main_content')

@push('css')
<style>
	.about-us-area .row .col-lg-6 {
		position: relative;
	}

	.about-us-area .about-title {
		position: absolute;
		top: 50%;
		left: 0;
		transform: translate(-0%, -50%);
	}

	.box-area .single-box img {
		width: 190px;
		height: 190px;
		border-radius: 50%;
		margin-bottom: .75rem;
	}

	.partner-area .single-logo a {
		display: flex;
	}

	.partner-area .single-logo a img {
		padding: 12px;
		height: 80px;
		opacity: .8 !important;
	}
</style>
@endpush


<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1" style="background-image:url({{ asset('/setting/about/' . $about->banner_img) }})">
	<div class="container">
		<div class="page-title-content">
			<h2>About</h2>
			<ul>
				<li>
					<a href="/">
						Home
						<i class="fa fa-chevron-right"></i>
					</a>
				</li>
				<li>About</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Page Title Area -->

<!-- Start About Us Area -->
<section class="about-us-area about-us-area-2 ptb-100">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12 mb-5 text-center">
				<span style="color: #3aae36"><strong>About Us</strong></span>
				<h2> {{ $about->title }}</h2>
				<p>Over 11+ years working in Study Visa services all over the world.</p>
				<p>{{ $about->short_description }}</p>
			</div>
			<div class="col-md-4 mb-3 m-md-0">
				<div class="about-us-img">
					<img src="{{ asset('/setting/about/' . $about->about_image ?? null ) }}" alt="About Us" class="img-fluid">
				</div>
			</div>
			<div class="col-md-4 mb-3 m-md-0">
				<div class="about-us-img">
					<img src="{{ asset('/setting/about/' . $about->about_image_two ?? null ) }}" alt="About Us" class="img-fluid">
				</div>
			</div>
			<div class="col-md-4 mb-3 m-md-0">
				<div class="about-us-img">
					<img src="{{ asset('/setting/about/' . $about->about_image_three ?? null ) }}" alt="About Us" class="img-fluid">
				</div>
			</div>
		</div>

		<div class="row align-items-center">
			<div class="col-lg-12 pl-60 md-pl-15">
				<div class="sec-title mb-30">
					{!! $about->description !!}
				</div>
			</div>
		</div>

	</div>
</section>
<!-- End About Us Area -->

@endsection