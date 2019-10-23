@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Bievenue dans la section mes articles</h2>
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
              <th>Nom de l'article</th>
              <th>Photo de l'article</th>
              <th>catégorie de l'article</th>
              <th>Auteur de l'article</th>
            </tr>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->name}}</td>
                    <td><img src="/{{$article->photo}}" alt=""></td>
                    <td>{{$article->categorie()->get()[0]->name}}</td>
                    <td>{{$user->name}}</td>
                    <td><a href="/admin/articles/{{$article->id}}/delete" class="btn btn-danger">Supprimer</a></td>
                    <td><a href="/admin/articles/{{$article->id}}/edit" class="btn btn-primary">Modifier</a></td>
                </tr>
            @endforeach
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
  <div class="page-pagination">
      {{$articles->links()}}
    </div>
  <a href="/admin/articles/newArticle" class="btn btn-warning">Créer un nouvel article</a>
@stop