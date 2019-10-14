<!-- Promotion section -->
<div class="promotion-section">
    <div class="container">
        <div class="row">
            @foreach($templates as $template)
                @if($template->id == 21)
                    <div class="col-md-9">
                        <h2>{{$template->contain}}</h2>
                @endif
                @if($template->id == 22)
                        <p>{{$template->contain}}</p>
                    </div>
                    @endif
                    @if($template->id == 23)
                    <div class="col-md-3">
                        <div class="promo-btn-area">
                            <a href="" class="site-btn btn-2">{{$template->contain}}</a>
                        </div>
                    </div>
                    @endif
            @endforeach              
        </div>
    </div>
</div>
<!-- Promotion section end-->