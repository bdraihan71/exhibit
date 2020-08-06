@guest
    <!-- Projects -->
    <div id="videos" class="techynaf-projects mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Watch and enjoy</span>
                    <h2 class="techynaf-heading animate-box" data-animate-effect="fadeInLeft">My Videos</h2> </div>
            </div>
            <div class="row">
                @if(count($videos)>0)
                    @foreach ($videos as $video)
                        @if ($loop->index % 3 == 0 && $loop->index != 0)
                            </div>
                            <div class="row">
                        @endif
                        <div class="col-md-4 p-3">
                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="560" height="315" src={!!$video->url!!} frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endguest

@auth
    <div id="videos" class="techynaf-projects mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Watch and enjoy</span>
                    <h2 class="techynaf-heading animate-box" data-animate-effect="fadeInLeft">My Videos</h2> </div>
            </div>
            <div class="row">
                @if(count($videos)>0)
                    @foreach ($videos as $video)
                        @if ($loop->index % 3 == 0 && $loop->index != 0)
                            </div>
                            <div class="row">
                        @endif
                        <div class="col-md-4 p-3">
                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="560" height="315" src={!!$video->url!!} frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <h1><a class="btn btn-primary" href="{{ route('video-manager') }}">Video Manager</a></h1>
        </div>
    </div>
@endauth
