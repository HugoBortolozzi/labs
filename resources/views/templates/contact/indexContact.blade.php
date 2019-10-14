<!DOCTYPE html>
<html lang="en">

	@yield('head')
	
<body>

	@yield('preloader')


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="img/logo.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
					@foreach($templates as $template)
					@if($template->id == 1)
						<li><a href="/">{{$template->contain}}</a></li>
					@endif
					@if($template->id == 37)
						<li><a href="/services">{{$template->contain}}</a></li>
					@endif
					@if($template->id == 42)
						<li><a href="/blog">{{$template->contain}}</a></li>
					@endif
					@if($template->id == 51)
						<li class="active"><a href="/contact">{{$template->contain}}</a></li>
					@endif
				@endforeach
			</ul>
		</nav>
	</header>
	<!-- Header section end -->

	@yield('contactHeader')

	@yield('contact')

	@yield('footer')
</body>
</html>
