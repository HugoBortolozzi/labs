<!-- Page Preloder -->
<div id="preloder">
		<div class="loader">
            @foreach($templates as $template)
                @if($template->id == 2)
                    <img src="{{$template->contain}}" alt="">
                @endif
            @endforeach
			<h2>Loading.....</h2>
		</div>
	</div>