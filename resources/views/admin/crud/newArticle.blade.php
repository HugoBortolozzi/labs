@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Création d'un nouvel article</h2>
@stop

@section('css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
@endsection
@section('js')
   <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
@endsection

@section('content')
<section>
        <form action="/admin/articles/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for=""><h4>Choisir le nom de l'article</h4></label>
                <input class="form-control" value="{{old('article_name')}}" name='article_name' type="text">
            </div>

            <div class="form-group">
                    <label for=""><h4>Choisir la catégorie de l'article</h4></label>
                    <select class="selectpicker" name="article_categorie" id="">
                            @foreach($categories as $categorie)
                                <option value="">{{$categorie->name}}</option>
                            @endforeach
                        </select>
                </div>

            <div class="form-group">
                <label for=""><h4>Choisir le contenu de l'article</h4></label>
                <textarea name="article_text" id="" cols="75" rows="10">{{old('article_text')}}</textarea>
            </div>

            <div class="form-group">
                <label for=""><h4>Choisir la photo</h4></label>
                <input class="form-control" name='projet_photo' type="file">
            </div>

            <button type="submit" class="btn btn-success">Créer</button>
        </form>
    </section>
@stop