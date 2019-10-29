@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Bievenue dans la section services</h2>
@stop

@section('css')
  <link rel="stylesheet" href="/css/flaticon.css">
@endsection

@section('content')

@if(session()->has('messageService'))
    <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('messageService')}}</div>
@endif

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody>
            <tr>
              <th>Logo</th>
              <th>Nom du Service</th>
              <th>Description</th>
            </tr>
            @foreach($services as $service)
                <tr>
                    <td><i class="{{$service->logo}}"></i></td>
                    <td>{{$service->title}}</td>
                    <td><p>{{$service->text}}</p></td>
                    <td><a href="/admin/services/{{$service->id}}/delete" class="btn btn-danger">Supprimer</a></td>
                    <td><a href="/admin/services/{{$service->id}}/edit" class="btn btn-primary">Modifier</a></td>
                </tr>
            @endforeach
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
  <a href="/admin/services/newService" class="btn btn-warning">Rajouter un nouveau service</a>
@stop
