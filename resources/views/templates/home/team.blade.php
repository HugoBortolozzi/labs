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
            @if(count($teams)>2)
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="{{$team1->photo}}" alt="">
                        <h2>{{$team1->name}}</h2>
                        <h3>{{$team1->post}}</h3>
                    </div>
                </div>
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="{{$team2->photo}}" alt="">
                        <h2>{{$team2->name}}</h2>
                        <h3>{{$team2->post}}</h3>
                    </div>
                </div>
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="{{$team3->photo}}" alt="">
                        <h2>{{$team3->name}}</h2>
                        <h3>{{$team3->post}}</h3>
                    </div>
                </div>
            @endif
            @if(count($teams)==2)
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/john-doe-m4avhdgd3zuctzyxm1gtdulz1hvck28fatlza51c7k.png" alt="">
                        <h2>John Doe</h2>
                        <h3>Unknown</h3>
                    </div>
                </div>
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="{{$team2->photo}}" alt="">
                        <h2>{{$team2->name}}</h2>
                        <h3>{{$team2->post}}</h3>
                    </div>
                </div>
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="{{$team1[0]->photo}}" alt="">
                        <h2>{{$team1[0]->name}}</h2>
                        <h3>{{$team1[0]->post}}</h3>
                    </div>
                </div>
            @endif
            @if(count($teams)==1)
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/john-doe-m4avhdgd3zuctzyxm1gtdulz1hvck28fatlza51c7k.png" alt="">
                        <h2>John Doe</h2>
                        <h3>Unknown</h3>
                    </div>
                </div>
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="{{$team2->photo}}" alt="">
                        <h2>{{$team2->name}}</h2>
                        <h3>{{$team2->post}}</h3>
                    </div>
                </div>
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/john-doe-m4avhdgd3zuctzyxm1gtdulz1hvck28fatlza51c7k.png" alt="">
                        <h2>John Doe</h2>
                        <h3>Unknown</h3>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Team Section end-->
