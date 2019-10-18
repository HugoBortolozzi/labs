@extends("templates/blog/indexBlog-post");

@section('head')
	@include('templates/home/head')
@endsection

@section('preloader')
	@include('templates/home/preloader')
@endsection

@section('blogHeader')
	@include('templates/blog/blogHeader')
@endsection

@section('blogSidebar')
	@include('templates/blog/blogSidebar')
@endsection

@section('newsletter')
	@include('templates/home/newsletter')
@endsection

@section('footer')
	@include('templates/home/footer')
@endsection

