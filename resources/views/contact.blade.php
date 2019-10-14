@extends('templates/contact/indexContact');

@section('head')
	@include('templates/home/head')
@endsection

@section('preloader')
	@include('templates/home/preloader')
@endsection

@section('contactHeader')
	@include('templates/contact/contactHeader')
@endsection

@section('contact')
	@include('templates/home/contact')
@endsection

@section('footer')
	@include('templates/home/footer')
@endsection