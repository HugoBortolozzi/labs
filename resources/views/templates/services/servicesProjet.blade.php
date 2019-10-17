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
					@foreach($lastServices as $service)
					<!-- feature item -->
					<div class="icon-box light left">
							<div class="service-text">
								<h2>{{$service->title}}</h2>
								<p>{{$service->text}}</p>
							</div>
							<div class="icon">
								<i class="{{$service->logo}}"></i>
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
					@foreach($firstServices as $service)
					<!-- feature item -->
					<div class="icon-box light left">
							<div class="service-text">
								<h2>{{$service->title}}</h2>
								<p>{{$service->text}}</p>
							</div>
							<div class="icon">
								<i class="{{$service->logo}}"></i>
							</div>
						</div>
					@endforeach
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