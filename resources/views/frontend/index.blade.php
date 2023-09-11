@extends('frontend.layout.app')

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

	.box-area .single-box img,
	.visa-wrap .single-box img {
		width: 190px;
		height: 190px;
		border-radius: 50%;
		margin-bottom: .75rem;
		margin: 0 auto;
	}

	.about-us-area,
	.processing-areac,
	.questions-area,
	.partner-area {
		background-color: #f2f2f9;
	}

	.visa-wrap .owl-stage-outer {
		padding: 40px 0 12px 0;
	}

	/*
	.partner-area .single-logo {
		background-color: #ffffff;
	} */

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
		padding: 8px 0;
		display: block;
		color: #3aae36;
	}

	.banner-area {
		position: relative;
		z-index: 999;
	}

	.banner-slider {
		top: 0;
		right: 0;
		width: 70%;
		position: absolute;
		z-index: -9;
	}
</style>
@endpush


<!-- Start Banner Area -->
<section class="banner-area">
	<div class="banner-slider owl-carousel owl-theme">
		@foreach ($sliders as $key => $slider)
		<img src="{{ asset('/setting/banner/' . $slider->image) }}" alt="" class="img-fluid" style="height: 100vh">
		@endforeach
	</div>
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-8 col-md-8">
						<div class="banner-text">
							<span>Research More & More</span>
							<h1>{{ $about->title }}</h1>
							<p>We help you for getting success</p>
							<div class="banner-button">
								<a class="default-btn" href="/about">
									Read More
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="shape shape-1">
		<img src="{{ asset('frontend-new-old') }}/assets/img/shape/1.png" alt="Shape">
	</div>
	<div class="shape shape-3">
		<img src="{{ asset('frontend-new-old') }}/assets/img/shape/3.png" alt="Shape">
	</div>
	<div class="shape shape-4">
		<img src="{{ asset('frontend-new-old') }}/assets/img/shape/4.png" alt="Shape">
	</div>
	<div class="shape shape-5">
		<img src="{{ asset('frontend-new-old') }}/assets/img/shape/5.png" alt="Shape">
	</div>
	<div class="shape shape-9">
		<img src="{{ asset('frontend-new-old') }}/assets/img/shape/5.png" alt="Shape">
	</div>
	<div class="shape shape-6">
		<img src="{{ asset('frontend-new-old') }}/assets/img/shape/6.png" alt="Shape">
	</div>
	<div class="shape shape-10">
		<img src="{{ asset('frontend-new-old') }}/assets/img/shape/6.png" alt="Shape">
	</div>
	<div class="shape shape-7">
		<img src="{{ asset('frontend-new-old') }}/assets/img/shape/7.png" alt="Shape">
	</div>
	<div class="shape shape-11">
		<img src="{{ asset('frontend-new-old') }}/assets/img/shape/7.png" alt="Shape">
	</div>
</section>
<!-- End Banner Area -->

<!-- Start Banner Area -->
{{-- <section class="banner-area">
	<div class="row m-0">
		<div class="col-12 p-0">
			<div class="banner-slider owl-carousel owl-theme">
				@foreach ($sliders as $key => $slider)
				<img src="{{ asset('/setting/banner/' . $slider->image) }}" alt="" class="img-fluid" style="height: 100vh">
				@endforeach
			</div>
		</div>
	</div>
	<div class="shape shape-1">
		<img src="{{ asset('frontend-new-old') }}/assets/img/shape/1.png" alt="Shape">
	</div>
	<div class="shape shape-3">
		<img src="{{ asset('frontend-new-old') }}/assets/img/shape/3.png" alt="Shape">
	</div>
	<div class="shape shape-4">
		<img src="{{ asset('frontend-new-old') }}/assets/img/shape/4.png" alt="Shape">
	</div>
	<div class="shape shape-5">
		<img src="{{ asset('frontend-new-old') }}/assets/img/shape/5.png" alt="Shape">
	</div>
	<div class="shape shape-9">
		<img src="{{ asset('frontend-new-old') }}/assets/img/shape/5.png" alt="Shape">
	</div>
	<div class="shape shape-6">
		<img src="{{ asset('frontend-new-old') }}/assets/img/shape/6.png" alt="Shape">
	</div>
	<div class="shape shape-10">
		<img src="{{ asset('frontend-new-old') }}/assets/img/shape/6.png" alt="Shape">
	</div>
	<div class="shape shape-7">
		<img src="{{ asset('frontend-new-old') }}/assets/img/shape/7.png" alt="Shape">
	</div>
	<div class="shape shape-11">
		<img src="{{ asset('frontend-new-old') }}/assets/img/shape/7.png" alt="Shape">
	</div>
</section> --}}
<!-- End Banner Area -->

<!-- Start Why Us Area -->
<section class="best-services-area ptb-100">
	<div class="container">
		<div class="section-title">
			<h2>Why Us</h2>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="tabs-area">
					<ul class="nav nav-pills d-sm-flex d-block text-center justify-content-between pt-15" id="pills-tab" role="tablist">

						@foreach ($why as $key => $why)
						<li class="nav-item active">
							<i class="flaticon-tracking"></i>
							<a class="nav-link {{ $key==0 ? 'active' : ''}}" id="pills-3-tab" data-bs-toggle="pill" href="#pills_{{ $why->id }}" role="tab" aria-controls="pills-3" aria-selected="false">
								<i class="{{ $why->icon }}"></i>
								{{ $why->title }}
							</a>
						</li>
						@endforeach

					</ul>
				</div>

				<div class="tab-content" id="pills-tabContent">

					@foreach ($why_us as $key => $why_us)
					<div class="tab-pane fade show {{ $key==0 ? 'active' : ''}}" id="pills_{{ $why_us->why_id }}" role="tabpanel" aria-labelledby="pills-3-tab">
						<div class="row align-items-center">

							<div class="col-lg-4">
								<div class="best-service-img">
									<img src="{{ asset('setting/testmony/' . $why_us->photo) }}" alt="">
								</div>
							</div>

							<div class="col-lg-8">
								<div class="best-service-area">
									<h3>{{ $why_us->title }}</h3>
									<p>{{ $why_us->description }}</p>
									<ul>
										<li>
											<i class="flaticon-check-mark"></i>
											{{ $why_us->item1 }}
										</li>
										<li>
											<i class="flaticon-check-mark"></i>
											{{ $why_us->item2 }}
										</li>
										<li>
											<i class="flaticon-check-mark"></i>
											{{ $why_us->item3 }}
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					@endforeach

				</div>
			</div>
		</div>

	</div>
</section>
<!-- End Why Us Area -->

<!-- Start About Us Area -->
{{-- <section class="about-us-area about-us-area-2 ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="about-title">
					<span>About Us</span>
					<h2> {{ $about->title }}</h2>
					<p>{{ $about->short_description }}</p>
					<a class="default-btn" href="{{ route('about.index') }}">Discover More</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="about-us-img">
					<img src="{{ asset('/setting/about/' . $about->about_image) }}" alt="About Us">
				</div>
			</div>
		</div>
	</div>
</section> --}}
<!-- End About Us Area -->

<!-- Start Box Area -->
{{-- <section class="box-area ptb-100 m-0">
	<div class="container">
		<div class="section-title">
			<span>Visa</span>
			<h2>We Are Offering All Kinds of Abroad Study Visa </h2>
		</div>
		<div class="row">

			@foreach ($projects as $project)
			<div class="col-lg-4 col-md-6">
				<div class="single-box single-box-2 bg-4">
					<img src="{{ asset('/setting/banner/' . $project->image) }}" alt="" class="img-fluid">
					<h3><a href="/study_destination/{{ $project->id }}">{{ $project->title }}</a></h3>
					<p>{{ Str::limit($project->short_details, 120, '...') }}</p>
					<a href="/study_destination/{{ $project->id }}" class="default-btn">Read More</a>
				</div>
			</div>
			@endforeach

		</div>
	</div>
</section> --}}
<!-- End Box Area -->

<!-- Start Box Area -->
<section class="blog-area ptb-100">
	<div class="container">
		<div class="section-title">
			<span>Visa</span>
			<h2>We Are Offering All Kinds of Abroad Study Visa </h2>
		</div>

		<div class="row">
			<div class="blog-wrap visa-wrap owl-carousel owl-theme">

				@foreach ($projects as $project)
				<div class="single-box single-box-2 bg-4">
					<img src="{{ asset('/setting/banner/' . $project->image) }}" alt="" class="img-fluid">
					<h3><a href="/study_destination/{{ $project->id }}">{{ $project->title }}</a></h3>
					<p>{{ Str::limit($project->short_details, 120, '...') }}</p>
					<a href="/study_destination/{{ $project->id }}" class="default-btn">Read More</a>
				</div>
				@endforeach

			</div>
		</div>
	</div>
</section>
<!-- End Box Area -->

<!-- Start FAQ Area -->
<section class="questions-area ptb-100">
	<div class="container">
		<div class="section-title">
			<span>FAQ</span>
			<h2>Frequently Asked Questions</h2>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="questions-bg-area">
					<div class="row">
						<div class="col-lg-12">
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
			{{-- <div class="col-lg-6">
				<video width="320" height="240" controls>
					<source src="https://www.youtube.com/watch?v=AZ-BIGbWWyI&ab_channel=DBCNEWS" type="video/mp4">
				</video>
			</div> --}}
			<div class="col-lg-6">
				<div class="choose-img">
					<img src="{{ asset('frontend-new-old') }}/assets/img/choose-img.jpg" alt="">
					<div class="video-wrap">
						<div class="video-btn-wrap">
							<a href="{{ asset('setting/testmony/' . $faq_video->video ?? null ) }}" class="video-btn" data-ilb2-video='{"controls":"controls", "autoplay":false, "sources":[{"src":"{{ asset(' setting/testmony/' . $faq_video->video ?? null ) }}", "type" :"video/mp4"}]}' data-imagelightbox="video">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End FAQ Area -->

<!-- Start Blog Area -->
<section class="blog-area ptb-100">
	<div class="container">
		<div class="section-title">
			<span>News</span>
			<h2>Latest News</h2>
		</div>

		<div class="row">
			<div class="blog-wrap owl-carousel owl-theme">

				@foreach ($blogs as $blog)
				<div class="single-blog-post">
					<div class="post-image">
						<a href="/blog/details/{{ $blog->id }}">
							<img src="{{ asset('/setting/blog/' . $blog->image1) }}" alt="" class="img-fluid" style="height: 280px">
						</a>
					</div>
					<div class="post-content">
						<div class="date">
							<i class="fa fa-calendar"></i>
							<span>{{ $blog->created_at->format('d M Y') }}</span>
						</div>
						<h3>
							<a href="/blog/details/{{ $blog->id }}">Successful Growth In Business 2019</a>
						</h3>
						<p>{{ Str::words($blog->short_details, 26, '...') }}</p>
						<a href="/blog/details/{{ $blog->id }}" class="default-btn">Read More</a>
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</div>
</section>
<!-- End Blog Area -->

<!-- Start Client Area -->
<section class="client-area ptb-100">
	<div class="container">
		<div class="section-title">
			<span>Testimonial</span>
			<h2>What Saying Our Customers</h2>
		</div>
		<div class="row align-items-center client-bg">
			<div class="col-lg-6 p-0">
				<div class="client-img">
					<img src="{{ asset('frontend-new-old') }}/assets/img/client-img/client-img.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-6 p-0">
				<div class="client-details-wrap owl-carousel owl-theme">

					@foreach ($testmonies as $test)
					<div class="client-details">
						<img src="{{ asset('frontend-new-old') }}/assets/img/client-img/1.jpg" alt="">
						<h3>{{ $test->reviewer }}</h3>
						<span>{{ $test->reviewer_job }}</span>
						<i class="flaticon-quote"></i>
						<p>{{ $test->review }}</p>
					</div>
					@endforeach

				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Client Area -->

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

@endsection