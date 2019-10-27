@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Création d'un nouveau projet</h2>
@stop

@section('content')
<section>
        <form action="/admin/projets/create" method="POST" enctype="multipart/form-data">
            @csrf
            @method("POST")
            <div class="form-group">
                <label for=""><h4>Choisir le nom du projet</h4></label>
                <input class="form-control" value="{{old('projet_name')}}" name='projet_name' type="text">
            </div>

            <div class="form-group">
                <label for=""><h4>Choisir la description</h4></label><br>
                <textarea name="projet_text" id="" cols="75" rows="5">{{old('projet_text')}}</textarea>
            </div>

            <div class="form-group">
                <label for=""><h4>Choisir la photo</h4></label>
                <input class="form-control" name='projet_photo' type="file">
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