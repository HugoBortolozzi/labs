<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="{{$banner->bigLogo}}" alt="">
            <p>{{$banner->sub_title}}</p>
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