@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Mettre à jour le témoignage de  : {{$testimonial->name}}</h2>
@stop

@section('content')
<section>
        <form action="/admin/testimonials/{{$testimonial->id}}/update" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <div class="form-group">
                <label for=""><h4>Changer le nom du témoin</h4></label>
                <input class="form-control" type="text" name="testimonial_name" value="{{$testimonial->name}}" id="">
            </div>
            
            <div class="form-group">
                <label for=""><h4>Changer la photo</h4></label>
                <input class="form-control" name='testimonial_photo' type="file">
            </div>

            <div class="form-group">
                <label for=""><h4>Changer la description du service</h4></label><br>
                <textarea name="service_text" id="" cols="75" rows="5">{{$testimonial->text}}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Validez les modifications</button>
        </form>
    </section>
@stop
