@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Mise à jour de : {{$team->name}}</h2>
@stop

@section('content')
<section>
        <form action="/admin/team/{{$team->id}}/update" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <div class="form-group">
                <label for=""><h4>Changer le nom du membre d'équipe</h4></label>
                <input class="form-control" type="text" name="team_name" value="{{$team->name}}" id="">
            </div>
            
            <div class="form-group">
                <label for=""><h4>Changer la photo</h4></label>
                <input value="{{$team->photo}}" class="form-control" name='team_photo' type="file">
            </div>

            <div class="form-group">
                    <label for=""><h4>Changer le poste du membre d'équipe</h4></label>
                    <input class="form-control" type="text" name="team_post" value="{{$team->post}}" id="">
                </div>

            <button type="submit" class="btn btn-success">Validez les modifications</button>
        </form>
    </section>
@stop
