<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        @foreach($templates as $template)
            @if($template->id ==14)
                <div class="section-title dark">
                    <h2>{{$template->contain}}
            @endif
            @if($template->id == 15)
                <span>{{$template->contain}}</span>
            @endif
            @if($template->id == 16)
                    {{$template->contain}}</h2>
                </div>
            @endif
        @endforeach
        
        <div class="row">
            @foreach($allServices as $service)
            <!-- single service -->
            <div class="col-md-4 col-sm-6">
                    <div class="service" id="services">
                        <div class="icon">
                            <i class="{{$service->logo}}"></i>
                        </div>
                        <div class="service-text">
                            <h2>{{$service->title}}</h2>
                            <p>{{$service->text}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="page-pagination">
                {{$allServices->fragment("services")->links()}}
            </div>
        </div>
        @foreach($templates as $template)
            @if($template->id == 17)
            <div class="text-center">
                    <a href="" class="site-btn">{{$template->contain}}</a>
                </div>
            @endif
        @endforeach
    </div>
</div>
<!-- services section end -->
