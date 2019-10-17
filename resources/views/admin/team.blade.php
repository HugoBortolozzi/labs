@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Bievenue dans la section des membres de l'équipe</h2>
@stop

@section('css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
@endsection

@section('js')
   <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
@endsection

@section('content')

@if(session()->has('messageTeam'))
    <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('messageTeam')}}</div>
@endif

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody>
            <tr>
              <th>ID</th>
              <th>Nom de la personne</th>
              <th>Photo de la personne</th>
              <th>Poste de la personne</th>
              <th>Rôle de la personne</th>
            </tr>
            @foreach($teams as $team)
                <tr>
                    <td>{{$team->id}}</td>
                    <td>{{$team->name}}</td>
                    <td><img src="/{{$team->photo}}" alt=""></td>
                    <td><p>{{$team->post}}</p></td>
                    <td>{{$team->leader}}</td>
                    <td><a href="/admin/team/{{$team->id}}/delete" class="btn btn-danger">Supprimer</a></td>
                    <td><a href="/admin/team/{{$team->id}}/edit" class="btn btn-primary">Modifier</a></td>
                </tr>
            @endforeach
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
  <form action="/admin/team/leader" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PATCH")
    <div class="form-group">
        <label for=""><h3>Changer le leader de l'équipe</h3></label>
        <select class="selectpicker" name="team_leader" id="">
          @foreach ($teams as $team)
              <option value="{{$team->id}}">{{$team->name}}</option>
          @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-success">Validez le changement de leader</button>
</form>
<br>
  <a href="/admin/team/newTeam" class="btn btn-warning">Rajouter un nouveau membre d'équipe</a>
@stop