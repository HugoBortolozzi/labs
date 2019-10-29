@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Création d'un nouveau membre d'équipe</h2>
@stop

@section('content')
<section>
        <form action="/admin/team/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for=""><h4>Choisir le nom du membre de l'équipe</h4></label>
                <input class="form-control" type="text" name="team_name" value="{{old('team_name')}}" id="">
            </div>
            
            <div class="form-group">
                <label for=""><h4>Choisir la photo</h4></label>
                <input class="form-control" name='team_photo' type="file">
            </div>

            <div class="form-group">
                    <label for=""><h4>Choisir le poste du membre de l'équipe</h4></label>
                    <input class="form-control" type="text" name="team_post" value="{{old('team_post')}}" id="">
                </div>

            <button type="submit" class="btn btn-success">Validez les modifications</button>
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