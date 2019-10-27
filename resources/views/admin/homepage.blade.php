@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h2>Bienvenue, ici vous allez pouvoir configurer votre page d'acceuil</h2>
@stop

@section('content')
<section>
    {{-- @if(session()->has('message'))
        <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('message')}}</div>
    @endif --}}

    {{-- Page 1 En-tête --}}

    <form action="/admin/template/editBanner" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        
        

        @foreach($templates as $template)


        @if($template->id == 1)
        <h2>Page principale</h2>
        <br>
        @if(session()->has('messageBanner'))
        <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('messageBanner')}}</div>
        @endif
        <br>
        <h3>Section en-tête</h3>
        <br>
        <br>
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="main_title" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("main_title"))
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

        @if($template->id == 2)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="file" name="nav_logo" value="" id="">
        </div>
        @if($errors->has("nav_logo"))
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

        @if($template->id == 3)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="file" name="banner_logo" value="" id="">
        </div>
        @if($errors->has("banner_logo"))
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

        @if($template->id == 4)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="banner_text" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("banner_text"))
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
        <br>
    </form>

    {{-- Page 1 Section 1  --}}

    <form action="/admin/template/editSec1" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        
        @if(session()->has('messageSec1'))
        <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('messageSec1')}}</div>
        @endif

        @foreach($templates as $template)

        

        @if($template->id == 5)
        <br>
        <h3>Section 1 </h3>
        <br>
        <br>
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec1_title_part1" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec1_title_part1"))
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

        @if($template->id == 6)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec1_title_span" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec1_title_span"))
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

        @if($template->id == 7)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec1_title_part2" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec1_title_part2"))
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

        @if($template->id == 8)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec1_text1" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec1_text1"))
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

        @if($template->id == 9)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec1_text2" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec1_text2"))
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

        @if($template->id == 10)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec1_button" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec1_button"))
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

        @if($template->id == 11)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec1_video" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec1_video"))
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

        @if($template->id == 12)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="file" name="sec1_video_img" value="" id="">
        </div>
        @if($errors->has("sec1_video_img"))
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

    {{-- Page 1 Section 2  --}}

    <form action="/admin/template/editSec2" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        
        @if(session()->has('messageSec2'))
        <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('messageSec2')}}</div>
        @endif

        @foreach($templates as $template)

        @if($template->id == 13)
        <br>
        <h3>Section 2</h3>
        <br>
        <br>
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec2_title" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec2_title"))
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
        <br>
    </form>

    {{-- Page 1 Section 3  --}}

    <form action="/admin/template/editSec3" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        
        @if(session()->has('messageSec3'))
        <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('messageSec3')}}</div>
        @endif

        @foreach($templates as $template)

        @if($template->id == 14)
        <br>
        <h3>Section 3</h3>
        <br>
        <br>
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec3_title_part1" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec3_title_part1"))
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

        @if($template->id == 15)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec3_title_span" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec3_title_span"))
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

        @if($template->id == 16)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec3_title_part2" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec3_title_part2"))
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

        @if($template->id == 17)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec3_button" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec3_button"))
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

    {{-- Page 1 Section 4  --}}

    <form action="/admin/template/editSec4" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        
        @if(session()->has('messageSec4'))
        <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('messageSec4')}}</div>
        @endif

        @foreach($templates as $template)

        @if($template->id == 18)
        <br>
        <h3>Section 4</h3>
        <br>
        <br>
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec4_title_part1" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec4_title_part1"))
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

        @if($template->id == 19)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec4_title_span" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec4_title_span"))
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

        @if($template->id == 20)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec4_title_part2" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec4_title_part2"))
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

    {{-- Page 1 Section 5  --}}

    <form action="/admin/template/editSec5" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        
        @if(session()->has('messageSec5'))
        <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('messageSec5')}}</div>
        @endif

        @foreach($templates as $template)

        @if($template->id == 21)
        <br>
        <h3>Section 5</h3>
        <br>
        <br>
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec5_title" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec5_title"))
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

        @if($template->id == 22)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec5_text" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec5_text"))
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

        @if($template->id == 23)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="Sec6" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("Sec6"))
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

    {{-- Page 1 Section 6  --}}

    <form action="/admin/template/editSec6" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        
        @if(session()->has('messageSec6'))
        <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('messageSec6')}}</div>
        @endif

        @foreach($templates as $template)

        @if($template->id == 24)
        <br>
        <h3>Section 6</h3>
        <br>
        <br>
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec6_title" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec6_title"))
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

        @if($template->id == 25)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec6_text" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec6_text"))
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

        @if($template->id == 26)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec6_sub_title" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec6_sub_title"))
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

        @if($template->id == 27)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec6_string1" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec6_string1"))
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

        @if($template->id == 28)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec6_string2" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec6_string2"))
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

        @if($template->id == 29)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec6_string3" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec6_string3"))
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

        @if($template->id == 30)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="sec6_string4" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("sec6_string4"))
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

    {{-- Page 1 Formulaire --}}

    <form action="/admin/template/editForm" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        
        @if(session()->has('messageForm'))
        <div class="alert alert-info alert-dismissible" role="alert">{{session()->get('messageForm')}}</div>
        @endif

        @foreach($templates as $template)

        @if($template->id == 31)
        <br>
        <h3>Formulaire</h3>
        <br>
        <br>
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="contactform_name" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("contactform_name"))
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

        @if($template->id == 32)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="contactform_mail" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("contactform_mail"))
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

        @if($template->id == 33)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="contactform_subject" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("contactform_subject"))
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

        @if($template->id == 34)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="contactform_message" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("contactform_message"))
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

        @if($template->id == 35)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="contactform_button" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("contactform_button"))
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

        @if($template->id == 36)
        <div class="form-group">
            <label for="">{{$template->name}}</label>
            <input class="form-control" type="text" name="contactform_target" value="{{$template->contain}}" id="">
        </div>
        @if($errors->has("contactform_target"))
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
