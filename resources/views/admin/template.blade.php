@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Configuration du template de base</h1>
@stop

@section('content')
<div>
    <div>
        <h3>Modifier la page <span class="text-primary">d'acceuil</span></h3>
        <a class="btn btn-primary" href="/admin/template/home">Cliquer</a>
    </div>
    <div>
        <h3>Modifier la page <span class="text-success">une</span></h3>
        <a class="btn btn-success" href="/admin/template/one">Cliquer</a>
    </div>
    <div>
        <h3>Modifier la page <span class="text-warning">deux</span></h3>
        <a class="btn btn-warning" href="/admin/template/two">Cliquer</a>
    </div>
    <div>
        <h3>Modifier la page <span class="text-danger">trois</span></h3>
        <a class="btn btn-danger" href="/admin/template/three">Cliquer</a>
    </div>
</div>
@stop


    

    

    

    