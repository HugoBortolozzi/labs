<!-- services card section-->
<div class="services-card-section spad">
		<div class="container">
			<div class="row">
				@foreach($projets as $projet)
					<!-- Single Card -->
					<div class="col-md-4 col-sm-6">
						<div class="sv-card">
							<div class="card-img">
								<img src="{{$projet->photo}}" alt="">
							</div>
							<div class="card-text">
								<h2>{{$projet->name}}</h2>
								<p>{{$projet->text}}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- services card section end-->