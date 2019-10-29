@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  @if(auth()->user()->role == "editeur")
  <h2>Bievenue dans la section mes articles</h2>
  @endif
  @if(auth()->user()->role == "admin" && auth()->user()->id != $user->id)
  <h2>Bievenue dans la section articles de : {{$user->name}}</h2>
  @endif
  @if(auth()->user()->role == "admin" && auth()->user()->id == $user->id)
  <h2>Bievenue dans la section mes articles</h2>
  @endif
@stop

@section('content')

@if(session()->has('message'))
    <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('message')}}</div>
@endif
<h2>Articles Validés</h2>
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody>
            <tr>
              <th>Nom de l'article</th>
              <th>Photo de l'article</th>
              <th>catégorie de l'article</th>
              <th>Tags de l'article</th>
              <th>Auteur de l'article</th>
            </tr>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->name}}</td>
                    <td><img src="/{{$article->photo}}" alt=""></td>
                    <td>{{$article->categorie()->get()[0]->name}}</td>
                    <td>@foreach($tags as $tag)
                        @foreach($links as $link)
                          @if($tag->id == $link->tag_id && $link->article_id == $article->id )
                          {{$tag->name}} 
                          @endif
                        @endforeach
                      @endforeach</td>
                    <td>{{$user->name}}</td>
                    @if(auth()->user()->role == "admin")
                    <form action="/admin/articles/{{$article->id}}/unvalid" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PATCH")
                    <td><button type="submit" class="btn btn-success">Dévalider</button></td>
                    <form action=""></form>
                    @endif
                    @if(auth()->user()->role == "editeur" && auth()->user()->id == $user->id)
                    <form action="/admin/articles/{{$article->id}}/unvalid" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PATCH")
                    <td><button type="submit" class="btn btn-success">Dévalider</button></td>
                    <form action=""></form>
                    @endif
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
  <a href="/editeur/articles/{{$user->id}}/notValid" class="btn btn-success">Voir les articles non validés</a>
@stop
