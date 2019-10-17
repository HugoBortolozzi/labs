<!-- Page header -->
<div class="page-top-section">
        <div class="overlay"></div>
        <div class="container text-right">
            <div class="page-info">
                        <h2>Inscription</h2>
    
                @foreach($templates as $template)
                    @if($template->id == 1)
                    <div class="page-links">
                            <a href="/">{{$template->contain}}</a>
                    @endif
                @endforeach
                        <span>Inscription</span>
                    </div>               
            </div>
        </div>
    </div>
    <!-- Page header end -->