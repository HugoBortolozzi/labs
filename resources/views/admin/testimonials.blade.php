@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Bievenue dans la section témoignage</h2>
@stop

@section('content')

@if(session()->has('messageTestimonial'))
    <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('messageTestimonial')}}</div>
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
              <th>Témoignage</th>
              <th>Poste de la personne</th>
            </tr>
            @foreach($testimonials as $testimonial)
                <tr>
                    <td>{{$testimonial->id}}</td>
                    <td>{{$testimonial->name}}</td>
                    <td><img src="{{$testimonial->photo}}" alt=""></td>
                    <td><p>{{$testimonial->text}}</p>
                    <td><p>{{$testimonial->post}}</p></td>
                    <td><a href="/admin/testimonials/{{$testimonial->id}}/delete" class="btn btn-danger">Supprimer</a></td>
                    <td><a href="/admin/testimonials/{{$testimonial->id}}/edit" class="btn btn-primary">Modifier</a></td>
                </tr>
            @endforeach
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
  <a href="/admin/services/newService" class="btn btn-warning">Rajouter un nouveau service</a>
@stop