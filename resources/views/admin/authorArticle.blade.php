@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Bievenue dans la section éditeur</h2>
@stop

@section('css')
  <link rel="stylesheet" href="/css/flaticon.css">
@endsection

@section('content')

@if(session()->has('message'))
    <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('message')}}</div>
@endif

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody>
            <tr>
              <th>ID</th>
              <th>Nom de l'auteur</th>
              <th>Articles de l'auteur (nombres)</th>
              <th>Articles en attente de validation (nombres)</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td><p>{{$user->validNumbers()}}</p></td>
                    <td><p>{{$user->noValidNumbers()}}</p></td>
                    <td><a href="/admin/articles/{{$user->id}}/articles" class="btn btn-primary">Voir les articles</a></td>
                </tr>
            @endforeach
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
  
@stop
