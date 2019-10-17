@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Bievenue dans la section messages</h2>
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
              <th>Nom</th>
              <th>E-mail</th>
              <th>Sujet</th>
              <th>Contenu</th>
            </tr>
            @foreach($msgs as $msg)
                <tr>
                    <td>{{$msg->id}}</td>
                    <td>{{$msg->name}}</i></td>
                    <td>{{$msg->email}}</td>
                    <td>{{$msg->subject}}</td>
                    <td><p>{{$msg->contain}}</p></td>
                    <td><a href="/admin/messages/{{$msg->id}}/delete" class="btn btn-danger">Supprimer</a></td>
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
