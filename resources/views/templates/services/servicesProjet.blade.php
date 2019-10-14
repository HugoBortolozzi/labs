<!-- features section -->
<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				@foreach($templates as $template)
					@if($template->id == 38)
					<h2>{{$template->contain}}
					@endif
					@if($template->id == 39)
					<span>{{$template->contain}}</span>
					@endif
					@if($template->id == 40)
					{{$template->contain}}</h2>
					@endif
				@endforeach
				
			</div>
			<div class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach($projets as $projet)
					<!-- feature item -->
					<div class="icon-box light left">
							<div class="service-text">
								<h2>{{$projet->name}}</h2>
								<p>{{$projet->text}}</p>
							</div>
							<div class="icon">
								<i class="{{$projet->icon}}"></i>
							</div>
						</div>
					@endforeach
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					<div class="icon-box light">
						<div class="icon">
							<i class="flaticon-037-idea"></i>
						</div>
						<div class="service-text">
							<h2>Get in the lab</h2>
							<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
						</div>
					</div>
					<!-- feature item -->
					<div class="icon-box light">
						<div class="icon">
							<i class="flaticon-025-imagination"></i>
						</div>
						<div class="service-text">
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
						</div>
					</div>
					<!-- feature item -->
					<div class="icon-box light">
						<div class="icon">
							<i class="flaticon-008-team"></i>
						</div>
						<div class="service-text">
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center mt100">
				@foreach($templates as $template)
					@if($template->id == 41)
					<a href="" class="site-btn">{{$template->contain}}</a>
					@endif
				@endforeach
			</div>
		</div>
	</div>
	<!-- features section end-->