@extends('frontend.layout.app')

@section('title' , '| Blog Details')

@section('main_content')

@push('css')
<style>
	.map iframe {
		width: 100%;
		height: 800px;
	}
	.article-image img{
		height: 680px;
	}
</style>
@endpush


<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1" style="background-image:url({{ asset('/setting/blog/' . $blog->banner) }});">
	<div class="container">
		<div class="page-title-content">
			<h2>{{ $blog->title }}</h2>
			<ul>
				<li>
					<a href="/">
						Home
						<i class="fa fa-chevron-right"></i>
					</a>
				</li>
				<li>Blog Details</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Details Area -->
<section class="blog-details-area ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="blog-details-desc">
					<div class="article-image">
						<img src="{{ asset('/setting/blog/' . $blog->image1) }}" alt="image" class="img-fluid">
					</div>

					<div class="article-content">
						<div class="entry-meta">
							<ul>
								<li><span>Posted On:</span> <a href="#">{{ $blog->created_at->format('M d, Y') }}</a></li>
							</ul>
						</div>

						<h3>{{ $blog->title }}</h3>

						<p> {!! $blog->details1 !!}</p>

						<div class="article-image">
							<img src="{{ asset('/setting/blog/' . $blog->image2) }}" alt="image">
						</div>

						<p> {!! $blog->details2 !!}</p>
					</div>

				</div>
			</div>

			{{-- <div class="col-lg-4 col-md-12">
				<aside class="widget-area" id="secondary">
					<div class="widget widget_search">
						<form class="search-form">
							<label>
								<span class="screen-reader-text">Search for:</span>
								<input type="search" class="search-field" placeholder="Search...">
							</label>
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>

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
			</div> --}}
		</div>
	</div>
</section>
<!-- End Blog Details Area -->


@endsection