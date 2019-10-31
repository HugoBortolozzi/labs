<!DOCTYPE html>
<html lang="en">

	@yield('head')
	
<body>

	@yield('preloader')


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
				@foreach($templates as $template)
				@if($template->id == 2)
				<img src="{{$template->contain}}" alt=""><!-- Logo -->
				@endif
			@endforeach
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
				{{-- <li><a href="/inscription">Inscription</a></li> --}}
			</ul>
		</nav>
	</header>
	<!-- Header section end -->

	@yield('contactHeader')

	<!-- Google map -->
	<div class="map" id="map-area"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.7002623040325!2d4.338740651543461!3d50.85523456589536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c38c20e33ca9%3A0x34eb0c02b7c73b01!2sPlace%20de%20la%20Minoterie%2C%201080%20Molenbeek-Saint-Jean!5e0!3m2!1sfr!2sbe!4v1572532500612!5m2!1sfr!2sbe" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>

	@yield('contact')

	@yield('footer')
</body>
</html>
