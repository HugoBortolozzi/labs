@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Bievenue dans la section utilisateurs</h2>
@stop

@section('css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
@endsection
@section('js')
   <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
@endsection

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
              <th>Nom</th>
              <th>E-mail</th>
              <th>Role</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</i></td>
                    <td>{{$user->email}}</td>
                    <td><p>{{$user->role}}</p></td>
                    <td><form action="/admin/users/{{$user->id}}/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <select class="selectpicker" name="user_role" id="">
                            <option>guest</option>
                            <option>editeur</option>
                            <option>admin</option>
                        </select>
                        <button class="btn btn-primary" type="submit">Valider</button>
                    </form></td>
                    <td><a href="/admin/users/{{$user->id}}/delete" class="btn btn-danger">Supprimer</a></td>
                </tr>
            @endforeach
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      <a href="/admin/users/newUser" class="btn btn-success">Créer un nouvel utilisateur</a>

      <!-- /.box -->
    </div>
  </div>
@stop
