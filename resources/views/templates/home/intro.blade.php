<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            @foreach($templates as $template)
                @if($template->id ==3)
                <img src="{{$template->contain}}" alt="">
                @endif
                @if($template->id == 4)
                <p>{{$template->contain}}</p>
                @endif
            @endforeach
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach($carousels as $carousel)
        <div class="item hero-item" data-bg="{{$carousel->img}}"></div>
        @endforeach
    </div>
</div>
<!-- Intro Section -->