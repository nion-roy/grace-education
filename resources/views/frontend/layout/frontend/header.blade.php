<div class="peru-nav">
	<div class="navbar-area fixed-top">
		<!-- Menu For Mobile Device -->
		<div class="mobile-nav">
			<a href="index.html" class="logo">
				<img src="{{ asset(get_setting('frontend_logo_menu')) }}" alt="" class="img-fluid shadow" style="width: 62px">
			</a>
		</div>

		@php
		$projects = DB::table('projects')
		->where('is_active', 1)
		->get();
		$services = DB::table('services')
		->where('is_active', 1)
		->get();
		@endphp

		<!-- Menu For Desktop Device -->
		<div class="main-nav peru-nav-style-2">
			<nav class="navbar navbar-expand-md navbar-light">
				<div class="container">
					<a class="navbar-brand" href="/">
						<img src="{{ asset(get_setting('frontend_logo_menu')) }}" alt="" class="img-fluid shadow"
							style="width: 62px">
					</a>

					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<ul class="navbar-nav m-auto">
							<li class="nav-item">
								<a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('about.index') }}" class="nav-link {{ request()->is('about*') ? 'active' : '' }}">About Us</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link dropdown-toggle {{ request()->is('study_destination*') ? 'active' : '' }}">Study Destination</a>
								<ul class="dropdown-menu dropdown-style">

									@foreach ($projects as $project)
									<li class="nav-item">
										<a class="nav-link" href="/study_destination/{{ $project->id }}">Study In {{ $project->title }}</a>
									</li>
									@endforeach

								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link dropdown-toggle {{ request()->is('service*') ? 'active' : '' }}">Services </a>
								<ul class="dropdown-menu dropdown-style">

									@foreach ($services as $service)
									<li class="nav-item">
										<a class="nav-link" href="/service/{{ $service->id }}">{{ $service->title }}</a>
									</li>
									@endforeach

								</ul>
							</li>

							<li class="nav-item">
								<a href="/blogs" class="nav-link {{ request()->is('blog*') ? 'active' : '' }}">Blog</a>
							</li>
							<li class="nav-item">
								<a href="/contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
							</li>
						</ul>
						<div class="others-option">
							<a class="default-btn" href="#">
								Login
							</a>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>