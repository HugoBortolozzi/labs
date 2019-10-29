@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Bievenue dans la section projet</h2>
@stop

@section('content')

@if(session()->has('messageProjet'))
    <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('messageProjet')}}</div>
@endif

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody>
            <tr>
              <th>Nom du projet</th>
              <th>Image du projet</th>
              <th>Description du projet</th>
            </tr>
            @foreach($projets as $projet)
                <tr>
                    <td><i class="{{$projet->name}}"></i></td>
                    <td><img src="/{{$projet->photo}}" alt=""></td>
                    <td><p>{{$projet->text}}</p></td>
                    <td><a href="/admin/projets/{{$projet->id}}/delete" class="btn btn-danger">Supprimer</a></td>
                    <td><a href="/admin/projets/{{$projet->id}}/edit" class="btn btn-primary">Modifier</a></td>
                </tr>
            @endforeach
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
  <a href="/admin/projets/newProjet" class="btn btn-warning">Rajouter un nouveau projet</a>
@stop