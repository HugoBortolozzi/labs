@extends('templates/inscription/indexInscription');

@section('head')
	@include('templates/home/head')
@endsection

@section('preloader')
	@include('templates/home/preloader')
@endsection

@section('inscriptionHeader')
	@include('templates/inscription/inscriptionHeader')
@endsection

@section('inscriptionForm')
	@include('templates/inscription/inscriptionForm')
@endsection

@section('footer')
	@include('templates/home/footer')
@endsection