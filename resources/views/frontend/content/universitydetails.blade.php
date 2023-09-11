@extends('frontend.layout.app')

@section('title' , '| University About Us')

@section('main_content')

@push('css')
<style>
	.uni-title-area {
		background-color: #f2f2f9;
		text-align: center;
	}

	.uni-title-area a {
		padding: 18px 44px;
		border-radius: 8px;
		background-image: linear-gradient(to right, #8fd913, #39ae38);
		color: #fff;
	}

	.uni-title-area a:hover{
		background-image: linear-gradient(to left, #8fd913, #39ae38);
	}

	.uni-title-area a img {
		height: 80px;
		opacity: .8 !important;
	}

	.uni-title-area small {
		text-align: center;
		display: block;
		color: #fff;
		padding-top: 12px;
		font-size: 14px;
	}


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

	.partner-area {
		background-color: #f2f2f9;
	}

	.partner-area .single-logo {
		background-color: #ffffff;
	}

	.partner-area .single-logo a {
		display: flex;
	}

	.partner-area .single-logo a img {
		padding: 12px;
		height: 80px;
		opacity: .8 !important;
	}

	.partner-area .single-logo small {
		text-align: center;
		padding: 12px 0;
		display: block;
		color: #3aae36;
	}
</style>
@endpush


<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1" style="background-image:url({{ asset('/setting/university/' . $university->banner) }})">
	<div class="container">
		<div class="page-title-content">
			<h2>Study in {{ $university->university_name }}</h2>
			<ul>
				<li>
					<a href="/">
						Home
						<i class="fa fa-chevron-right"></i>
					</a>
				</li>
				<li>{{ $university->university_name }}s</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Page Title Area -->


<!-- Start University Header Area -->
<div class="uni-title-area item-bg-1 ptb-100">
	<div class="container">
		<div class="uni-title-content">
			<a href="{{ $university->website }}">
				<img class="main-logo" src="{{ asset('/setting/university/' . $university->logo) }}" alt="" class="img-fluid">
				</br>
				<small>{{ $university->university_name ?? null }}</small>
			</a>
		</div>
	</div>
</div>
<!-- End University Header Area -->

<!-- Start University About Us Area -->
<section class="about-us-area about-us-area-2 ptb-100 bg-white">
	<div class="container">

		@if ($university->details1)
		<div class="row">
			<div class="col-lg-6">
				<div class="about-title">
					<p>{!! $university->details1 !!}</p>
				</div>
			</div>
			<div class="col-lg-6 my-auto">
				<div class="about-us-img">
					<img src="{{ asset('/setting/university/' . $university->image1) }}" alt="">
				</div>
			</div>
		</div>
		@endif

		@if ($university->details2)
		<div class="row">
			<div class="col-lg-6">
				<div class="about-title">
					<p>{!! $university->details2 !!}</p>
				</div>
			</div>
			<div class="col-lg-6 my-auto">
				<div class="about-us-img">
					<img src="{{ asset('/setting/university/' . $university->image2) }}" alt="">
				</div>
			</div>
		</div>
		@endif

		@if ($university->details3)
		<div class="row">
			<div class="col-lg-6">
				<div class="about-title">
					<p>{!! $university->details3 !!}</p>
				</div>
			</div>
			<div class="col-lg-6 my-auto">
				<div class="about-us-img">
					<img src="{{ asset('/setting/university/' . $university->image3) }}" alt="">
				</div>
			</div>
		</div>
		@endif

	</div>
</section>
<!-- End University About Us Area -->


<!-- Start Partner Area -->
<div class="partner-area ptb-100">
	<div class="container">
		<div class="section-title">
			<span>Partner</span>
			<h2>Our Partner Universities</h2>
		</div>
		<div class="partner-wrap owl-carousel owl-theme">
			@foreach ($universities as $uni)
			<div class="single-logo border rounded">
				<a href="/universities/{{ $uni->id }}">
					<img src="{{ asset('/setting/university/' . $uni->logo) }}" alt="Partner" class="img-fluid text-center">
				</a>
				<small>{{ $uni->university_name ?? null }}</small>
			</div>
			@endforeach
		</div>
		<div class="text-center">
			<a href="{{ route('universities') }}" class="default-btn mt-5">Read More</a>
		</div>
	</div>
</div>
<!-- End Partner Area -->

@endsection