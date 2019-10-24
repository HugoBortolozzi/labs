@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Création d'un nouveau tag</h2>
@stop

@section('content')
<section>
        <form action="/admin/articles/tags/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for=""><h4>Choisir le nom du tag</h4></label>
                <input class="form-control" value="{{old('tag_name')}}" name='tag_name' type="text">
            </div>

            <button type="submit" class="btn btn-success">Créer</button>
        </form>
    </section>
@stop