@extends('templates/services/indexService')

@section('head')
	@include('templates/home/head')
@endsection

@section('servicesHeader')
	@include('templates/services/servicesHeader')
@endsection

@section('servicesSection')
	@include('templates/services/servicesSection')
@endsection

@section('servicesFeatures')
	@include('templates/services/servicesFeatures')
@endsection

@section('servicesFeatures')
	@include('templates/services/servicesFeatures')
@endsection

@section('servicesCard')
	@include('templates/services/servicesCard')
@endsection

{{-- @section('servicesNewletter')
	@include('templates/services/servicesNewletter')
@endsection --}}

@section('newsletter')
	@include('templates/home/newsletter')
@endsection

@section('footer')
	@include('templates/home/footer')
@endsection