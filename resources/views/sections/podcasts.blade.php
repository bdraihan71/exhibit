@guest
<!-- Podcasts -->
    <div id="podcast" class="techynaf-testiominal mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Listen to me</span>
                <div class="row">    
                    <h2 class="techynaf-heading animate-box" data-animate-effect="fadeInLeft">Podcast</h2> </div>
                </div>
            </div>
            <div class="row">
                @foreach ($podcasts as $podcast)
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="techynaf-quote-card"> <img src="frontend/images/quote.png" alt="" class="techynaf-quote-2">
                        <p>{{ $podcast->description }}</p>
                        <h5>{{ $podcast->title }}</h5>
                        <div class="row">
                            <div class="col-md-12 p-3">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" width="560" height="315" src="{!!$podcast->url!!}"></iframe"
                                            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                            </div>
                        </div>  
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <a href="{{route('podcast.index')}}" class="btn btn btn-outline-primary btn-category ml-2 mb-4">See More</a>
            </div>
        </div>
    </div>
@endguest

@auth
    
<!-- Podcasts -->
<div id="podcast" class="techynaf-testiominal mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Listen to me</span>
                <div class="row">    
                <h2 class="techynaf-heading animate-box" data-animate-effect="fadeInLeft">Podcast</h2> </div>
            </div>
            <div class="row">
                @foreach ($podcasts as $podcast)
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="techynaf-quote-card"> <img src="frontend/images/quote.png" alt="" class="techynaf-quote-2">
                        <p>{{ $podcast->description }}</p>
                        <h5>{{ $podcast->title }}</h5>
                        <div class="row">
                            <div class="col-md-12 p-3">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" width="560" height="315" src="{!!$podcast->url!!}"></iframe"
                                            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                    <a href="{{route('podcast.edit', ['podcast' => $podcast->id])}}" class="btn btn-danger">Edit</a>
                            </div>
                        </div>  
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <a href="{{route('podcast.index')}}" class="btn btn btn-outline-primary btn-category ml-2 mb-4">See More</a>
                <a class="btn btn btn-outline-primary btn-category ml-2 mb-4" href="{{ route('podcast.create') }}">Create New Podcast</a>
            </div>
        </div>
    </div>
@endauth
