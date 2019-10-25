@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Mettre à jour votre profil</h2>
@stop

@section('content')
<section>
        @if(session()->has('message'))
        <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('message')}}</div>
    @endif
        <form action="/user/profil/update" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for=""><h4>Changer votre nom</h4></label>
                <input class="form-control" type="text" name="user_name" value="{{$user->name}}" id="">
            </div>
            
            <div class="form-group">
                <label for=""><h4>Changer votre mail</h4></label>
                <input class="form-control" name='user_email' value="{{$user->email}}" type="text">
            </div>

            <div class="form-group">
                <label for=""><h4>Vous ne pouvez pas changer votre propre role</h4></label>
                <p>Rôle : <strong>{{$user->role}}</strong></p>
            </div>

            <div class="form-group">
                <label for=""><h4>Votre mot de passe de l'utilisateur</h4></label>
                <input class="form-control" type="password" name="user_password" value="" id="">
            </div>

            <div class="form-group">
                <label for=""><h4>Confirmez le mot de passe</h4></label>
                <input class="form-control" type="password" name="confirm_password" value="" id="">
            </div>

            <button type="submit" class="btn btn-success">Validez les modifications</button>
        </form>
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
    </section>
@stop
