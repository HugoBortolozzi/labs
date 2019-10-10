<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <h2>{{$about->testimonial_title}}</h2>
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    
                    @foreach($testimonials as $testimonial)
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>{{$testimonial->text}}</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="{{$testimonial->photo}}" alt="">
                            </div>
                            <div class="client-name">
                                <h2>{{$testimonial->post}}</h2>
                                <p>{{$testimonial->name}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->