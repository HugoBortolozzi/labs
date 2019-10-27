@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Création d'une nouvelle catégorie</h2>
@stop

@section('content')
<section>
        <form action="/admin/articles/categories/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for=""><h4>Choisir le nom de la catégorie</h4></label>
                <input class="form-control" value="{{old('categorie_name')}}" name='categorie_name' type="text">
            </div>

            <button type="submit" class="btn btn-success">Créer</button>
            @if(count($errors))
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
        </form>
    </section>
@stop