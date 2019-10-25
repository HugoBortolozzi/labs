@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Partie admin du site</h1>
@stop

@section('content')
    <p>Vous êtes connecté en temps que <strong>{{$role}}</strong></p>
@stop
