@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Rajout d'une photo au carousel</h2>
@stop

@section('content')
<section>
        <form action="/admin/template/carousel/create" method="POST" enctype="multipart/form-data">
            @csrf
            @method("POST")
            <div class="form-group">
                <label for=""><h4>Choisir la photo</h4></label>
                <input class="form-control" name='img' type="file">
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