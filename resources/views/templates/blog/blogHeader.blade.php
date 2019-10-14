<!-- Page header -->
<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				@foreach($templates as $template)
					@if($template->id == 42)
						<h2>{{$template->contain}}</h2>
					@endif
				@endforeach

				@foreach($templates as $template)
					@if($template->id == 1)
					<div class="page-links">
							<a href="/">{{$template->contain}}</a>
					@endif
					@if($template->id == 42)
						<span>{{$template->contain}}</span>
					</div>
					@endif
				@endforeach
			</div>
		</div>
	</div>
	<!-- Page header end-->