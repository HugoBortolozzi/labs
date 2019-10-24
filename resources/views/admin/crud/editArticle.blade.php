@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Modification de l'article : {{$article->name}}</h2>
@stop

@section('css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
@endsection
@section('js')
   <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
@endsection

@section('content')
<section>
        @if(session()->has('message'))
        <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('message')}}</div>
    @endif
        <form action="/admin/articles/{{$article->id}}/update" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <div class="form-group">
                <label for=""><h4>Choisir le nom de l'article</h4></label>
                <input class="form-control" value="{{$article->name}}" name='article_name' type="text">
            </div>

            <div class="form-group">
                <label for=""><h4>Choisir la photo de l'article</h4></label>
                <input class="form-control" name='article_photo' type="file">
            </div>

            <div class="form-group">
                <label for=""><h4>Choisir la catégorie de l'article</h4></label>
                <select class="selectpicker" name="article_categorie" id="">
                    @foreach($categories as $categorie)
                <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                    @endforeach
                </select>
                <a href="/admin/articles/categories" class="btn btn-primary">Créer une nouvelle catégorie</a>
            </div>

            {{-- <div class="form-group">
                <label for="">Choisir les tags de l'article</label><br>
                @foreach($tags as $tag)
                <br>
                <input type="checkbox" value="{{$tag->id}}" name="tag_{{$tag->id}}" id="">
                <label for="">{{$tag->name}}</label>
                @endforeach
            </div> --}}

            <div class="form-group">
                <label for=""><h4>Ecrire le contenu du premier paragraphe de l'article</h4></label><br>
                <textarea name="article_text1" id="" cols="120" rows="10">{{$article->text1}}</textarea>
            </div>

            <div class="form-group">
                <label for=""><h4>Ecrire le contenu du second paragraphe de l'article</h4></label><br>
                <textarea name="article_text2" id="" cols="120" rows="10">{{$article->text2}}</textarea>
            </div>

            <div class="form-group">
                <label for=""><h4>Ecrire le contenu du troisième paragraphe de l'article</h4></label><br>
                <textarea name="article_text3" id="" cols="120" rows="10">{{$article->text3}}</textarea>
            </div>


            <div class="form-group">
                <label for=""><h4>Choisir la photo pour la description de l'auteur de l'article</h4></label>
                <input class="form-control" name='author_photo' type="file">
            </div>

            <div class="form-group">
                <label for=""><h4>Ecrire la description de l'auteur de l'article</h4></label><br>
                <textarea name="author_description" id="" cols="120" rows="10">{{$article->author_description}}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Créer</button>
        </form>
    </section>
@stop