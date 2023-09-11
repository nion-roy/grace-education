<footer id="rs-footer" class="rs-footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12 footer-widget">
					<div class="footer-logo mb-30">
						<a href="/"><img src="{{ asset(get_setting('frontend_logo_footer')) }}" alt="" style="height: 100px"></a>
					</div>
					<div class=" textwidget pb-30 text-white">
						<p>{{ get_setting('footer_description') }}</p>
					</div>
					<ul class="footer-social md-mb-30">
						<li>
							<a href="{{ get_setting('facebook') }}" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
						</li>
						<li>
							<a href="{{ get_setting('twitter') }}" target="_blank"><span><i class="fa fa-twitter"></i></span></a>
						</li>

						<li>
							<a href="{{ get_setting('instagram') }}" target="_blank"><span><i class="fa fa-instagram"></i></span></a>
						</li>
						<li>
							<a href="{{ get_setting('youtube') }}"><i class="fa fa-youtube"></i></a>
						</li>
						<li>
							<a href="{{ get_setting('linkedin') }}"><i class="fa fa-linkedin"></i></a>
						</li>
					</ul>
					<p>
						<input type="email" name="EMAIL" placeholder="Your email address" required="">
						<em class="paper-plane"><input type="submit" value="Sign up"></em>
						<i class="flaticon-send"></i>
					</p>
				</div>
				@php
				$services = DB::table('services')
				->where('is_active', 1)
				->get();
				@endphp
				<div class="col-lg-4 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
					<h3 class="widget-title text-white">Our Services</h3>
					<ul class="site-map menufooter">
						@foreach ($services as $service)
						<li><a href="/service/{{ $service->id }}">
								<h4 class="hfotli">{{ $service->title }}</h4>
							</a></li>
						@endforeach
					</ul>
				</div>

				<div class="col-lg-4 col-md-12 col-sm-12">
					<h3 class="widget-title text-white">Office Address</h3>
					<ul class="address-widget">

						<li>
							<i class="flaticon-location"></i>
							<div class="desc text-white">
								{{ get_setting('office_address') }}
							</div>
						</li>
						<li>
							<i class="flaticon-call"></i>
							<div class="desc">
								<a href="#">{{ get_setting('office_phone') }}</a>
							</div>
						</li>
						<li>
							<i class="flaticon-email"></i>
							<div class="desc">
								<a href="{{ get_setting('office_email') }}">{{ get_setting('office_email') }}</a>
							</div>
						</li>

					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row y-middle">
				<div class="col-lg-6 text-right md-mb-10 order-last">
					<ul class="copy-right-menu menufooter">
						<li><a href="/">Home</a></li>
						<li><a href="{{ route('about.index') }}">About</a></li>
						<li><a href="/blogs">Blog</a></li>
						<li><a href="/contact">Contact Us</a></li>

					</ul>
				</div>
				<div class="col-lg-6">
					<div class="copyright text-white">
						<p>{{ get_setting('copyright_text') }} | <a href="https://www.techwebdit.com" style="color:aliceblue"> Developed by
								Techweb BD IT</a></p>
					</div>
				</div>

			</div>
		</div>
	</div>
</footer>