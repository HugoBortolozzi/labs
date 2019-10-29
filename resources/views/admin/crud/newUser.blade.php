@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Création d'un nouvel utilisateur</h2>
@stop

@section('content')
<section>
        @if(session()->has('message'))
        <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('message')}}</div>
    @endif
        <form action="/admin/users/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for=""><h4>Nom de L'utilisateur</h4></label>
                <input class="form-control" type="text" name="user_name" value="{{old('user_name')}}" id="">
            </div>
            
            <div class="form-group">
                <label for=""><h4>Email de L'utilisateur</h4></label>
                <input class="form-control" type="text" name="user_email" value="{{old('user_email')}}" id="">
            </div>

            <div class="form-group">
                <label for=""><h4>Mot de passe de l'utilisateur</h4></label>
                <input class="form-control" type="password" name="user_password" value="" id="">
            </div>

            <div class="form-group">
                <label for=""><h4>Confirmez le mot de passe</h4></label>
                <input class="form-control" type="password" name="confirm_password" value="" id="">
            </div>

            <div class="form-group">
                <label for=""><h4>Choisir la photo</h4></label>
                <input class="form-control" name='user_photo' type="file">
            </div>

            <button type="submit" class="btn btn-success">Créer l'utilisateur</button>
        </form>
    </section>
    <br>
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
@stop