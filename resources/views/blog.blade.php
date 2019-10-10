@extends('templates/blog/indexBlog')

@section('head')
	@include('templates/home/head')
@endsection

@section('blogHeader')
	@include('templates/blog/blogHeader')
@endsection

@section('blogSection')
	@include('templates/blog/blogSection')
@endsection

@section('newsletter')
	@include('templates/home/newsletter')
@endsection

@section('footer')
	@include('templates/home/footer')
@endsection