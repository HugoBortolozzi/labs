<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{{$secteam->title_part1}}<span>{{$secteam->span}}</span>{{$secteam->title_part2}}</h2>
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
