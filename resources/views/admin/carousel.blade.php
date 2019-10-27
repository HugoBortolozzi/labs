@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Configuer le carousel</h2>
@stop

@php
    $count = 0;   
@endphp

@section('content')
    <section>
        @foreach($carousels as $carousel)
        @php
            $count = $count + 1;
        @endphp
        <form action="/admin/template/carousel/{{$carousel->id}}/update" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <div class="form-group">
                <label for=""><h4>Changer la photo {{$count}} du carousel</h4></label>
                <input class="form-control" type="file" name="img" value="" id="">
            </div>
            <div><img src="/{{$carousel->img}}" alt=""></div>
            <br>
            <br>
            
            <button type="submit" class="btn btn-success">Valider la modifications</button>
            @if($errors->has("img"))
                        <div class="col-md-6">
                            <div class="alert alert-danger rounded">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif    
        </form>
        <br>
        <form action="/admin/template/carousel/{{$carousel->id}}/delete" method="POST" enctype="multipart/form-data">
            @csrf
            @method("GET")
            <button type="submit" class="btn btn-danger">Supprimer la photo</button>
        </form>
        @endforeach
    </section>
    <br>
    <br>
    <a href="/admin/template/carousel/newCarousel" class="btn btn-warning">Rajouter une image</a>
@stop
