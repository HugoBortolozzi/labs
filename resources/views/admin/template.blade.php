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
        <h3>Modifier la page <span class="text-success">deux</span></h3>
        <a class="btn btn-success" href="/admin/template/page2">Cliquer</a>
    </div>
    <div>
        <h3>Modifier la page <span class="text-warning">trois</span></h3>
        <a class="btn btn-warning" href="/admin/template/page3">Cliquer</a>
    </div>
    <div>
        <h3>Modifier la page <span class="text-danger">quatre</span></h3>
        <a class="btn btn-danger" href="/admin/template/page4">Cliquer</a>
    </div>
</div>
@stop


    

    

    

    