@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Bievenue dans la section des membres de l'équipe</h2>
@stop

@section('content')

@if(session()->has('messageTeam'))
    <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('messageTeam')}}</div>
@endif

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody>
            <tr>
              <th>ID</th>
              <th>Nom de la personne</th>
              <th>Photo de la personne</th>
              <th>Poste de la personne</th>
            </tr>
            @foreach($teams as $team)
                <tr>
                    <td>{{$team->id}}</td>
                    <td>{{$team->name}}</td>
                    <td><img src="/{{$team->photo}}" alt=""></td>
                    <td><p>{{$team->post}}</p></td>
                    <td><a href="/admin/team/{{$team->id}}/delete" class="btn btn-danger">Supprimer</a></td>
                    <td><a href="/admin/team/{{$team->id}}/edit" class="btn btn-primary">Modifier</a></td>
                </tr>
            @endforeach
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
  <a href="/admin/team/newTeam" class="btn btn-warning">Rajouter un nouveau service</a>
@stop