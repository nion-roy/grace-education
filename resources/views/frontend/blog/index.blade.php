@extends('frontend.layout.app')

@section('title' , '| Blog')

@section('main_content')

@push('css')
<style>
	.map iframe {
		width: 100%;
		height: 800px;
	}
</style>
@endpush



<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1" style="background-image:url({{ asset('/setting/blog/' . $banner->banner) }});">
	<div class="container">
		<div class="page-title-content">
			<h2>Blog</h2>
			<ul>
				<li>
					<a href="/">
						Home
						<i class="fa fa-chevron-right"></i>
					</a>
				</li>
				<li>Blog</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Details Area -->
<div class="blog-details-area pt-100 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-12">
				<aside class="widget-area" id="secondary">
					<section class="widget widget-peru-posts-thumb">
						<h3 class="widget-title">Latest Posts</h3>

						@foreach ($recent as $blog)
						<article class="item">
							<a href="/blog/details/{{ $blog->id }}" class="thumb">
								<span class="fullimage cover bg1 img-fluid" role="img" style="background-image:url({{ asset('/setting/blog/' . $blog->image1) }});"></span>
							</a>
							<div class="info">
								<time datetime="2019-06-30">{{ $blog->created_at->format('M d, Y') }}</time>
								<h4 class="title usmall">
									<a href="/blog/details/{{ $blog->id }}">{{ $blog->title }}</a>
								</h4>
							</div>

							<div class="clear"></div>
						</article>
						@endforeach

					</section>

					<section class="widget widget_categories">
						<h3 class="widget-title">Study Destination</h3>
						<ul>

							@foreach ($destination as $study)
							<li>
								<a href="/study_destination/{{ $study->id }}">Study in {{ $study->title }}</a>
							</li>
							@endforeach

						</ul>
					</section>

				</aside>
			</div>
			<div class="col-lg-8 col-md-12">
				<div class="blog-details-wrap">
					<div class="row">
						
						@foreach ($blogs as $blog)
						<div class="col-lg-6 col-md-6">
							<div class="single-blog-post">
								<div class="post-image">
									<a href="/blog/details/{{ $blog->id }}"><img src="{{ asset('/setting/blog/' . $blog->image1) }}" alt="" class="img-fluid"></a>
								</div>
								<div class="post-content">
									<div class="date">
										<i class="fa fa-calendar"></i>
										<span>{{ ($blog->created_at->format('d M Y')) }}</span>
									</div>
									<h3>
										<a href="/blog/details/{{ $blog->id }}">{{ $blog->title ?? null }}</a>
									</h3>
									<p>	{{ Str::limit($blog->short_details, 140) }}</p>
								</div>
							</div>
						</div>
						@endforeach


						{{-- <div class="col-lg-12">
							<div class="pagenavigation-area">
								<nav aria-label="Page navigation example text-center">
									<ul class="pagination">
										<li class="page-item">
											<a class="page-link page-links" href="#">
												<i class="fa fa-angle-double-left"></i>
											</a>
										</li>
										<li class="page-item active">
											<a class="page-link" href="#">1</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">2</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">3</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">
												<i class="fa fa-angle-double-right"></i>
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</div> --}}

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Blog Details Area -->


@endsection