<!-- page section -->
<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					@foreach($articles as $article)
					{{-- @php
						use App\Comment;
						$count = Comment::where('article_id',$article->id)->count();
					@endphp --}}
					<!-- Post item -->
					<div class="post-item">
						<div class="post-thumbnail">
							<img src="{{$article->photo}}" alt="">
							<div class="post-date">
								<h2>03</h2>
								<h3>Nov 2017</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$article->name}}</h2>
							<div class="post-meta">
								<a href="">{{$article->categorie}}</a>
								<a href="">Design, Inspiration</a>
								<a href="">2 Comments</a>
							</div>
							<p>{{$article->text1}}</p>
							<a href="/blog-post/{{$article->id}}/viewPost" class="read-more">Read More</a>
						</div>
					</div>
					@endforeach
					<!-- Pagination -->
					<div class="page-pagination">
						<a class="active" href="">01.</a>
						<a href="">02.</a>
						<a href="">03.</a>
					</div>
				</div>
				
