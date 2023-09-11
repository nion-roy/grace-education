@extends('frontend.layout.app')

@section('title' , '| Study Destination')

@section('main_content')

@push('css')
<style>
	.about-us-area {
		background-color: #fff;
	}

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

	/* .partner-area{
		background-color: #f2f2f9;
	} */
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
<div class="page-title-area item-bg-1" style="background-image:url({{ asset('/setting/banner/' . $project->banner) }})">
	<div class="container">
		<div class="page-title-content">
			<h2>Study in {{ $project->title }}</h2>
			<ul>
				<li>
					<a href="/">
						Home
						<i class="fa fa-chevron-right"></i>
					</a>
				</li>
				<li>{{ $project->title }}</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Page Title Area -->

<!-- Start About Us Area -->
<section class="about-us-area about-us-area-2 ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center mb-3">
				<h2> {{ $project->details_title }}</h2>
			</div>
			<div class="col-12 mb-5">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<p>{!! $project->short_details !!}</p>
					</div>
					<div class="col-lg-5">
						@if (isset($project->video))
						<video class="w-100 my-auto d-block rounded" controls autoplay>
							<source src="{{ asset('/setting/banner/' . $project->video) }}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						@endif
					</div>
				</div>
			</div>

			<div class="col-12">
				<div class="row mb-5 align-items-center">
					<div class="col-md-5">
						@if (isset($project->image))
						<img src="{{ asset('/setting/banner/' . $project->image) }}" class="rounded" alt="About Us">
						@endif
					</div>
					<div class="col-md-7">
						<p>{!! $project->details !!}</p>
					</div>
				</div>

				<div class="row mb-5">
					<div class="col-md-7">
						{!! $project->details_description !!}
					</div>
					<div class="col-md-5">
						@if (isset($project->image2))
						<img src="{{ asset('/setting/banner/' . $project->image2) }}" class="rounded" alt="About Us">
						@endif
					</div>
				</div>

				<div class="row">
					<div class="col-md-5">
						@if (isset($project->image3))
						<img src="{{ asset('/setting/banner/' . $project->image3) }}" class="rounded" alt="About Us">
						@endif
					</div>
					<div class="col-md-7">
						{!! $project->details_description2 !!}
					</div>
				</div>

			</div>

		</div>


	</div>
</section>
<!-- End About Us Area -->

<!-- Start Partner Area -->
<div class="partner-area ptb-100">
	<div class="container">
		<div class="section-title">
			<span>Partner</span>
			<h2>Our Partner Universities</h2>
		</div>
		<div class="partner-wrap owl-carousel owl-theme">
			@foreach ($university as $uni)
			<div class="single-logo">
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

<!-- Start FAQ Area -->
{{-- <section class="questions-area ptb-100">
	<div class="container">
		<div class="section-title">
			<span>FAQ</span>
			<h2>Frequently Asked Questions</h2>
		</div>
		<div class="row align-items-center">
			<div class="col-md-6 offset-md-3">
				<div class="questions-bg-area">
					<div class="row">
						<div class="col-12">
							<div class="faq-accordion">
								<ul class="accordion">

									@foreach ($faqs as $key => $faq)
									<li class="accordion-item">
										<a class="accordion-title active" href="javascript:void(0)">
											<i class="fa fa-arrow-right"></i>
											{{ $faq->question ?? 'FAQ' }}
										</a>
										<p class="accordion-content">{{ $faq->answer ?? 'N/A' }}</p>
									</li>
									@endforeach

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}
<!-- End FAQ Area -->

@endsection