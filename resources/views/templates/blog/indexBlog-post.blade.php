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
						<li class="active"><a href="/blog">{{$template->contain}}</a></li>
					@endif
					@if($template->id == 51)
						<li><a href="/contact">{{$template->contain}}</a></li>
					@endif
				@endforeach
				{{-- <li><a href="/inscription">Inscription</a></li> --}}
			</ul>
		</nav>
	</header>
	<!-- Header section end -->

	@yield('blogHeader')

	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
							<img src="/{{$article->photo}}" alt="">
							<div class="post-date">
									<h2>{{$article->created_at->day}}</h2>
									<h3>{{$article->created_at->shortEnglishMonth}} {{$article->created_at->year}}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$article->name}}</h2>
							<div class="post-meta">
								@foreach($categories as $categorie)
								@if($article->categorie_id == $categorie->id)
								<a href="">{{$categorie->name}}</a>
								@endif
								@endforeach
								<a href="">
									@foreach($tags as $tag)
										@foreach($links as $link)
											@if($tag->id == $link->tag_id && $link->article_id == $article->id )
											{{$tag->name}} 
											@endif
										@endforeach
									@endforeach
								</a>
								<a href="">{{$count}} Comments</a>
							</div>
							<p>{{$article->text1}}</p>
							<p>{{$article->text2}}</p>
							<p>{{$article->text3}}</p>
						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img src="/{{$user->photo}}" alt="">
							</div>
							<div class="author-info">
								<h2>{{$user->name}}, <span>Author</span></h2>
								<p>{{$article->author_description}}</p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							<h2>Comments ({{$count}})</h2>
							<ul class="comment-list">
								@foreach($comments as $comment)
								<li>
										<div class="avatar">
											<img src="http://lorempixel.com/400/400/people" />
										</div>
										<div class="commetn-text">
											<h3>{{$comment->name}} | 03 nov, 2017 | Reply</h3>
											<p>{{$comment->comment}}</p>
										</div>
									</li>
								@endforeach
							</ul>
						</div>
						<!-- Commert Form -->
						<div class="row">
							<div class="col-md-9 comment-from" id="com_form">
								<h2>Laisser un commentaire</h2>
								<form class="form-class" action="/articles/{{$article->id}}/newComment" method="POST" enctype="multipart/form-data">
									@csrf
									<div class="row">
										<div class="col-sm-6">
											<input type="text" value="{{old('name')}}" name="name" placeholder="Your name">
										</div>
										<div class="col-sm-6">
											<input type="text" value="{{old('email')}}" name="email" placeholder="Your email">
										</div>
										<div class="col-sm-12">
											<input type="text" value="{{old('subject')}}" name="subject" placeholder="Subject">
											<textarea name="comment" value="{{old('comment')}}" placeholder="Message"></textarea>
											<button type="submit" class="site-btn">envoyer</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						@if(count($errors))
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
					</div>
				</div>

	@yield('blogSidebar')

	<!-- page section end-->

	@yield('newsletter')
	
	@yield('footer')
	
</body>
</html>
