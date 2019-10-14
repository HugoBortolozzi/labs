


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
						<li class="active"><a href="/home">{{$template->contain}}</a></li>
					@endif
					@if($template->id == 37)
						<li><a href="/services">{{$template->contain}}</a></li>
					@endif
					@if($template->id == 42)
						<li><a href="/blog">{{$template->contain}}</a></li>
					@endif
					@if($template->id == 51)
						<li><a href="/contact">{{$template->contain}}</a></li>
					@endif
				@endforeach
			</ul>
		</nav>
	</header>
	<!-- Header section end -->