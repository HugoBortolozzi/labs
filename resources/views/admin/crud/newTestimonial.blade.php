@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Création d'un nouveau témoignage</h2>
@stop

@section('content')
<section>
        <form action="/admin/testimonials/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for=""><h4>Choisir le nom du témoin</h4></label>
                <input class="form-control" type="text" name="testimonial_name" value="{{old('testimonial_name')}}" id="">
            </div>
            
            <div class="form-group">
                <label for=""><h4>Choisir la photo</h4></label>
                <input class="form-control" name='testimonial_photo' type="file">
            </div>

            <div class="form-group">
                <label for=""><h4>Choisir la description du service</h4></label><br>
                <textarea name="" id="" cols="75" rows="5">{{old('testimonial_text')}}</textarea>
            </div>

            <div class="form-group">
                    <label for=""><h4>Choisir le poste du témoin</h4></label>
                    <input class="form-control" type="text" name="testimonial_post" value="{{old('testimonial_post')}}" id="">
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
