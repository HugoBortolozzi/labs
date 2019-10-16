<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                @foreach($randomServices as $service)
                <!-- single card -->
                <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="{{$service->logo}}"></i>
                            </div>
                            <h2>{{$service->title}}</h2>
                            <p>{{$service->text}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- card section end-->


    @foreach($templates as $template)
    <!-- About contant -->
    @if($template->id ==5 )
    <div class="about-contant">
            <div class="container">
                <div class="section-title">
                    <h2>{{$template->contain}} @endif 
                        @if($template->id ==6 )
                        <span>{{$template->contain}}</span>
                        @endif
                        @if($template->id ==7 )
                    {{$template->contain}}</h2>
                </div>
    @endif
                @if($template->id == 8)
                <div class="row">
                    <div class="col-md-6">
                        <p>{{$template->contain}}</p>
                    </div>
                @endif
                @if($template->id == 9)
                    <div class="col-md-6">
                        <p>{{$template->contain}}</p>
                    </div>
                </div>
                @endif
                @if($template->id == 10)
                <div class="text-center mt60">
                    <a href="" class="site-btn">{{$template->contain}}</a>
                </div>
                @endif
                @if($template->id == 11)
                <!-- popup video -->
                <div class="intro-video">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <img src="{{$template->contain}}" alt="">
                @endif
                @if($template->id == 12)
                            <a href="{{$template->contain}}" class="video-popup">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif
    @endforeach
</div>
<!-- About section end -->