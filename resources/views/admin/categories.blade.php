@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Bievenue dans la section catégorie</h2>
@stop

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
              <th>Nom de la catégorie</th>
            </tr>
            @foreach($categories as $categorie)
                <tr>
                    <td>{{$categorie->id}}</td>
                    <form action="/admin/categories/{{$categorie->id}}/edit" method="POST" enctype="multipart/form-data"><td>
                        @csrf
                        @method("PATCH")
                        <input type="text" value="{{$categorie->name}}" name="categorie_name" id="">
                        <td><button class="btn btn-primary" type="submit">Modifier</button></td>
                        @if($errors->has("categorie_name"))
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
                    </td></form>
                    <td><a href="/admin/categories/{{$categorie->id}}/delete" class="btn btn-danger">Supprimer</a></td>
                </tr>
            @endforeach
          </tbody></table>
          {{-- <td><a href="/admin/articles/categories" class="btn btn-success">Créer une nouvelle catégorie</a></td> --}}
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
@stop