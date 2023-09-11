@extends('frontend.layout.app')

@section('title' , '| Admission Guidance')

@section('main_content')



<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1" style="background-image:url({{ asset('/setting/service/' . $service->banner) }})">
	<div class="container">
		<div class="page-title-content">
			<h2>{{ $service->title }}</h2>
			<ul>
				<li>
					<a href="/">
						Home
						<i class="fa fa-chevron-right"></i>
					</a>
				</li>
				<li>{{ $service->title }}</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Page Title Area -->


<section class="best-services-area ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">

				<div class="tab-content">
					<div class="row align-items-center">
						<div class="col-lg-4">
							<div class="best-service-img">
								<img src="{{ asset('/setting/service/' . $service->image1) }}" alt="{{ $service->title }}" class="img-fluid">
							</div>
						</div>
						<div class="col-lg-8">
							<div class="best-service-area">
								<h3>{{ $service->title }}</h3>
								<p>{!! $service->details1 !!}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

@endsection