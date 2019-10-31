<!-- newsletter section -->
@if(session()->has('messageNewsletter'))
<div class="alert alert-info alert-dismissible" role="alert">{{session()->get('messageNewsletter')}}</div>
@endif
<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form class="nl-form" action="/newsletter/newUser" method="POST" enctype="multipart/form-data">
						@csrf
						<input type="text" name="newsletter_email" placeholder="Your e-mail here">
						<button type="submit" class="site-btn btn-2">Newsletter</button>
						@if($errors->has("newsletter_email"))
        					<div class="col-md-6">
        					    <div class="alert alert-danger rounded">
        					        <ul>
        					            @foreach($errors->all() as $error)
        					                <li>{{$error}}</li>
        					            @endforeach
        					        </ul>
        					    </div>
        					</div>
    					@endif
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<!-- newsletter section end-->