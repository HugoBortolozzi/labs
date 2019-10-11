<!-- services section -->
<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>{{$secservice->title_part1}}<span>{{$secservice->span}}</span>{{$secservice->title_part2}}</h2>
			</div>
			<div class="row">
				@foreach($services as $service)
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
						<div class="service">
							<div class="icon">
								<i class="{{$service->logo}}"></i>
							</div>
							<div class="service-text">
								<h2>{{$service->title}}</h2>
								<p>{{$service->text}}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			<div class="text-center">
				<a href="" class="site-btn">{{$secservice->button}}</a>
			</div>
		</div>
	</div>
	<!-- services section end -->