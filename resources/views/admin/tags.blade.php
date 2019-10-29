@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Bievenue dans la section tags</h2>
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
              <th>Nom du tag</th>
            </tr>
            @foreach($tags as $tag)
                <tr>
                    <form action="/admin/tags/{{$tag->id}}/edit" method="POST" enctype="multipart/form-data"><td>
                        @csrf
                        @method("PATCH")
                        <input type="text" value="{{$tag->name}}" name="tag_name" id="">
                        <td><button class="btn btn-primary" type="submit">Modifier</button></td>  
                                  </td></form>
                    <td><a href="/admin/tags/{{$tag->id}}/delete" class="btn btn-danger">Supprimer</a></td>
                </tr>
            @endforeach
          </tbody></table>
          {{-- <td><a href="/admin/articles/categories" class="btn btn-success">Créer une nouvelle catégorie</a></td> --}}
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    @if($errors->has("tag_name"))
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
  </div>
@stop