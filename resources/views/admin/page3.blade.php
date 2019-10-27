@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Configuration du template de la page 3</h2>
@stop

@section('content')
    <section>
        <form action="/admin/template/editPage3Title" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
        
            @foreach($templates as $template)
    
            @if($template->id == 42)
            <h2>Page 3</h2>
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
                <input class="form-control" type="text" name="page3_title" value="{{$template->contain}}" id="">
            </div>
            @if($errors->has("page3_title"))
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
            @endif
    
            @endforeach
            
            <button type="submit" class="btn btn-warning">Validez les modifications</button>
        </form>

        <form action="/admin/template/editWidget" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            
            @if(session()->has('messageWidget'))
            <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('messageWidget')}}</div>
            @endif
    
            @foreach($templates as $template)
    
            
    
            @if($template->id == 43)
            <br>
            <h3>Section 1 </h3>
            <br>
            <br>
            <div class="form-group">
                <label for="">{{$template->name}}</label>
                <input class="form-control" type="text" name="page3_widget1_name" value="{{$template->contain}}" id="">
            </div>
            @if($errors->has("page3_widget1_name"))
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
            @endif
    
            @if($template->id == 44)
            <div class="form-group">
                <label for="">{{$template->name}}</label>
                <input class="form-control" type="text" name="page3_widget2_name" value="{{$template->contain}}" id="">
            </div>
            @if($errors->has("page3_widget2_name"))
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
            @endif
    
            @if($template->id == 45)
            <div class="form-group">
                <label for="">{{$template->name}}</label>
                <input class="form-control" type="text" name="page3_widget3_name" value="{{$template->contain}}" id="">
            </div>
            @if($errors->has("page3_widget3_name"))
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
            @endif
    
            @if($template->id == 46)
            <div class="form-group">
                <label for="">{{$template->name}}</label>
                <input class="form-control" type="text" name="page3_widget4_name" value="{{$template->contain}}" id="">
            </div>
            @if($errors->has("page3_widget4_name"))
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
            @endif
    
            @if($template->id == 47)
            <div class="form-group">
                <label for="">{{$template->name}}</label>
                <input class="form-control" type="text" name="page3_widget4_contain" value="{{$template->contain}}" id="">
            </div>
            @if($errors->has("page3_widget4_contain"))
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
            @endif
    
            @if($template->id == 48)
            <div class="form-group">
                <label for="">{{$template->name}}</label>
                <input class="form-control" type="text" name="page3_widget5_name" value="{{$template->contain}}" id="">
            </div>
            @if($errors->has("page3_widget5_name"))
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
            @endif
    
            @if($template->id == 49)
            <div class="form-group">
                <label for="">{{$template->name}}</label>
                <input class="form-control" type="file" name="page3_widget5_img" value="" id="">
            </div>
            @if($errors->has("page3_widget5_img"))
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
            @endif
    
            @if($template->id == 50)
            <div class="form-group">
                <label for="">{{$template->name}}</label>
                <input class="form-control" type="text" name="page3_widget5_path_link" value="{{$template->contain}}" id="">
            </div>
            @if($errors->has("page3_widget5_path_link"))
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
            @endif
    
            @endforeach
            
            <button type="submit" class="btn btn-warning">Validez les modifications</button>
        </form>
    </section>
@stop