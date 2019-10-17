<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                @foreach($templates as $template)
                @if($template->id == 24)
                <div class="section-title left">
                    <h2>{{$template->contain}}</h2>
                </div>
                @endif
                @if($template->id == 25)
                <p>{{$template->contain}}</p>
                @endif
                @if($template->id == 26)
                <h3 class="mt60">{{$template->contain}}</h3>
                @endif
                @if($template->id == 27)
                <p class="con-item">{{$template->contain}}</p>
                @endif
                @if($template->id == 28)
                <p class="con-item">{{$template->contain}}</p>
                @endif
                @if($template->id == 29)
                <p class="con-item">{{$template->contain}}</p>
                @endif
                @if($template->id == 30)
                <p class="con-item">{{$template->contain}}</p>
                @endif                   
                @endforeach
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form class="form-class" id="con_form" action="/contact/newMessage" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">                        
                        @foreach($templates as $template)
                            @if($template->id == 31)
                                <div class="col-sm-6">
                                    <input type="text" name="name" placeholder="{{$template->contain}}">
                                </div>
                            @endif
                            @if($template->id == 32)
                                <div class="col-sm-6">
                                    <input type="text" name="email" placeholder="{{$template->contain}}">
                                </div>
                            @endif
                            @if($template->id == 33)
                                <div class="col-sm-12">
                                    <input type="text" name="subject" placeholder="{{$template->contain}}">
                            @endif
                            @if($template->id == 34)
                                <textarea name="message" placeholder="{{$template->contain}}"></textarea>
                            @endif
                            @if($template->id == 35)
                                <button type="submit" class="site-btn">{{$template->contain}}</button>
                            </div>
                            @endif
                        @endforeach                        
                    </div>
                </form>
            </div>
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
        </div>
    </div>
</div>
<!-- Contact section end-->
