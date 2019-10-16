@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Configuer le carousel</h2>
@stop

@section('content')
    <section>
        @foreach($carousels as $carousel)
        <form action="/admin/team/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for=""><h4>Choisir le nom du membre de l'équipe</h4></label>
                <input class="form-control" type="text" name="team_name" value="{{old('team_name')}}" id="">
            </div>
            
            <div class="form-group">
                <label for=""><h4>Choisir la photo</h4></label>
                <input class="form-control" name='{{old('team_photo')}}' type="file">
            </div>

            <div class="form-group">
                    <label for=""><h4>Choisir le poste du témoin</h4></label>
                    <input class="form-control" type="text" name="team_post" value="{{old('team_post')}}" id="">
                </div>

            <button type="submit" class="btn btn-success">Validez les modifications</button>
        </form>
        @endforeach
    </section>
@stop
