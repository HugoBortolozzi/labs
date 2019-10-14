@extends('templates/services/indexService')

@section('head')
	@include('templates/home/head')
@endsection

@section('preloader')
	@include('templates/home/preloader')
@endsection

@section('servicesHeader')
	@include('templates/services/servicesHeader')
@endsection

@section('services')
	@include('templates/home/services')
@endsection

@section('servicesProjet')
	@include('templates/services/servicesProjet')
@endsection

@section('servicesCard')
	@include('templates/services/servicesCard')
@endsection

@section('contact')
	@include('templates/home/contact')
@endsection

@section('newsletter')
	@include('templates/home/newsletter')
@endsection

@section('footer')
	@include('templates/home/footer')
@endsection