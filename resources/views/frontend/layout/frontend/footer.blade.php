<!-- Start Footer Top Area -->
<section class="footer-top-area pt-100 pb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-widget">
					<a href="index.html">
						<img src="{{ asset(get_setting ('frontend_logo_footer')) }} " alt="White-Logo" style="width: 70px">
					</a>
					<p>{{ get_setting('footer_description') }}</p>
					<ul class="address">
						<li>
							<i class="fa fa-map-marker"></i>
							{{ get_setting('office_address') }}
						</li>
						<li>
							<i class="fa fa-phone"></i>
							<a href="{{ get_setting('office_phone') }}">{{ get_setting('office_phone') }}</a>
						</li>
						<li>
							<i class="fa fa-envelope"></i>
							<a href="{{ get_setting('office_email') }}">{{ get_setting('office_email') }}</a>
						</li>
						<div class="widget widget_email mt-0">
							<form>
								<label>
									<input type="email" name="EMAIL" placeholder="Your email address" class="form-control" required="">
									<button type="submit" class="submit"><i class="fa fa-paper-plane"></i></button>
								</label>
							</form>
						</div>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-6">
				<div class="single-widget">
					<h3>Links</h3>
					<ul class="links">
						<li>
							<a href="/">Home</a>
						</li>
						<li>
							<a href="/about">About Us</a>
						</li>
						<li>
							<a href="/blogs">Blog</a>
						</li>
						<li>
							<a href="/contact">Contact Us</a>
						</li>
					</ul>
				</div>
			</div>

			@php
			$projects = DB::table('projects')
			->where('is_active', 1)
			->get();
			$services = DB::table('services')
			->where('is_active', 1)
			->get();
			@endphp

			<div class="col-lg-3 col-md-6">
				<div class="single-widget">
					<h3>Study Destination</h3>
					<ul class="links">
						@foreach ($projects as $project)
						<li>
							<a href="/study_destination/{{ $project->id }}">Study In {{ $project->title }}</a>
						</li>
						@endforeach
					</ul>

				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-widget">
					<h3>Our Services</h3>
					<ul class="links">
						@foreach ($services as $service)
						<li><a href="/service/{{ $service->id }}"> {{ $service->title }} </a> </li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Footer Top Area -->

<!-- Start Footer Bottom Area -->
<footer class="footer-bottom-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div>
					<p>
						{{ get_setting('copyright_text') }} | Developed by <a href="https://www.techwebdit.com" target="_blank">Techweb BD IT</a>
					</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<ul class="social-icon">
					<li>
						<a href="{{ get_setting('facebook') }}" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li>
						<a href="{{ get_setting('twitter') }}" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="{{ get_setting('instagram') }}" target="_blank">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
					<li>
						<a href="{{ get_setting('youtube') }}" target="_blank">
							<i class="fa fa-youtube"></i>
						</a>
					</li>
					<li>
						<a href="{{ get_setting('linkedin') }}" target="_blank">
							<i class="fa fa-linkedin"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- End Footer Bottom Area -->