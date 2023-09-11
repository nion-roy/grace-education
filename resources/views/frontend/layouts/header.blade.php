<div class="full-width-header">
	<!--Header Start-->
	<header id="rs-header" class="rs-header style3 modify3 home14-style header-transparent">
		<!-- Menu Start -->
		<div class="menu-area menu-sticky">
			<div class="container">
				<div class="row-table">
					<div class="cell-col">
						<div class="logo-part">
							<a href="/">
								<img class="normal-logo" src="{{ asset(get_setting('frontend_logo_menu')) }}" alt="logo" style="height: 100px">
								<img class="sticky-logo" src="{{ asset(get_setting('frontend_logo_menu')) }}" alt="logo" style="height: 100px">
							</a>
						</div>
						<div class="mobile-menu">
							<a href="#" class="rs-menu-toggle rs-menu-toggle-close">
								<i class="fa fa-bars"></i>
							</a>
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
					<div class="cell-col">
						<div class="rs-menu-area">
							<div class="main-menu">
								<nav class="rs-menu">
									<ul class="nav-menu">
										<li><a href="/">Home</a></li>

										<li><a href="{{ route('about.index') }}">About Us</a></li>
										<li class="menu-item-has-children">
											<a href="#">Study Destination</a>
											<ul class="sub-menu">
												@foreach ($projects as $project)
												<li>
													<a href="/study_destination/{{ $project->id }}">Study In
														{{ $project->title }}</a>
												</li>
												@endforeach
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Services</a>
											<ul class="sub-menu">
												@foreach ($services as $service)
												<li><a href="/service/{{ $service->id }}">{{ $service->title }}</a>
												</li>
												@endforeach

											</ul>
										</li>


										<li>
											<a href="/blogs">Blog</a>
										</li>
										<li>
											<a href="#">Blog</a>
										</li>

										<li>
											<a href="/contact">Contact Us</a>
										</li>
									</ul> <!-- //.nav-menu -->
								</nav>
							</div> <!-- //.main-menu -->
						</div>
					</div>
					<div class="cell-col">
						<div class="expand-btn-inner search-icon hidden-md">

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Menu End -->
	</header>
	<!--Header End-->


</div>
<!--Full width header End-->