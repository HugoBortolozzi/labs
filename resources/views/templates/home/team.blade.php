<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            @foreach($templates as $template)
                @if($template->id == 18)
                    <h2>{{$template->contain}}
                @endif
                @if($template->id == 19)
                    <span>{{$template->contain}}</span>
                @endif
                @if($template->id == 20)
                    {{$template->contain}}</h2>
                @endif
            @endforeach
            
        </div>
        <div class="row">
            @foreach($teams as $team)
            <!-- single member -->
            <div class="col-sm-4">
                    <div class="member">
                        <img src="{{$team->photo}}" alt="">
                        <h2>{{$team->name}}</h2>
                        <h3>{{$team->post}}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team Section end-->
