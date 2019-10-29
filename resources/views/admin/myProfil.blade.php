@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Bievenue dans la section de votre profil</h2>
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
              <th>Nom</th>
              <th>email</th>
              <th>rôle</th>
            </tr>          
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
            </tr>           
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      <a href="/user/profil/edit" class="btn btn-primary">Modifier votre profil</a>

      <!-- /.box -->
    </div>
  </div>
  
@stop
