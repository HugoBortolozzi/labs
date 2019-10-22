@extends('templates/blog/indexNoArticle')

@section('head')
	@include('templates/home/head')
@endsection

@section('preloader')
	@include('templates/home/preloader')
@endsection

@section('blogHeader')
	@include('templates/blog/blogHeader')
@endsection

@section('noArticleSection')
	@include('templates/blog/noArticleSection')
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