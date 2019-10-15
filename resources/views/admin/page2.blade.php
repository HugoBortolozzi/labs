@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Configuration du template de la page 2</h2>
@stop

@section('content')
<section>
    <form action="/admin/template/editPage2Title" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
    
        @foreach($templates as $template)

        @if($template->id == 37)
        <h2>Page 2</h2>
        <br>
        @if(session()->has('messageTitle'))
        <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('messageTitle')}}</div>
        @endif
        <br>
        <h3>Titre de la page</h3>
        <br>
        <br>
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="page2_title" value="{{$template->contain}}" id="">
        </div>
        @endif

        @endforeach
        
        <button type="submit" class="btn btn-warning">Validez les modifications</button>
    </form>

    <form action="/admin/template/editPage2Sec2" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        
        @if(session()->has('messageSec2'))
        <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('messageSec2')}}</div>
        @endif

        @foreach($templates as $template)

        @if($template->id == 38)
        <br>
        <h3>Section 2</h3>
        <br>
        <br>
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="page2_sec2_title_part1" value="{{$template->contain}}" id="">
        </div>
        @endif

        @if($template->id == 39)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="page2_sec2_title_span" value="{{$template->contain}}" id="">
        </div>
        @endif

        @if($template->id == 40)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="page2_sec2_title_part2" value="{{$template->contain}}" id="">
        </div>
        @endif

        @if($template->id == 41)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="page2_sec2_button" value="{{$template->contain}}" id="">
        </div>
        @endif

        @endforeach
        
        <button type="submit" class="btn btn-warning">Validez les modifications</button>
    </form>

</section>
@stop