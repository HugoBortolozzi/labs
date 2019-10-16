@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Configuration du template de la page 4</h2>
@stop

@section('content')
    <section>
        <form action="/admin/template/editPage4Title" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")

            <h2>Page 4</h2>
            <br>
            @if(session()->has('messageTitle'))
            <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('messageTitle')}}</div>
            @endif
            <br>
            <h3>Titre de la page</h3>
            <br>
            <br>
            <div class="form-group">
                <label for="">{{$template->name}}</label>
                <input class="form-control" type="text" name="page4_title" value="{{$template->contain}}" id="">
            </div>
            
            <button type="submit" class="btn btn-warning">Validez les modifications</button>
        </form>
    </section>
@stop