@guest
<!-- Other Medias -->
    <div id="othermedia" class="techynaf-testiominal mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Checkout my other medias</span>
                    <h2 class="techynaf-heading animate-box" data-animate-effect="fadeInLeft">Other Media</h2> </div>
            </div>
            <div class="row">
                @foreach ($othermedias as $othermedia)
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="techynaf-quote-card"> <img src="frontend/images/quote.png" alt="" class="techynaf-quote-2">
                            <p>{{ $othermedia->description }}</p>
                            <h5>{{ $othermedia->title }}</h5>
                            <a target="_blank" href="{{ $othermedia->url }}" class="btn btn btn-outline-primary btn-category ml-2 mb-4">Visit</a>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="row">
                    <a href="{{route('othermedia.index')}}" class="btn btn btn-outline-primary btn-category ml-2 mb-4">See More</a>
                    <a href="/" class="btn btn-category btn-outline-primary ml-3">Home</a>
                </div>
        </div>
    </div>
@endguest

@auth

<!-- Other Medias -->
<div id="othermedia" class="techynaf-testiominal mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Checkout my other medias</span>
                    <h2 class="techynaf-heading animate-box" data-animate-effect="fadeInLeft">Other Media</h2> </div>

                    
            </div>
            <div class="row">
                @foreach ($othermedias as $othermedia)
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="techynaf-quote-card"> <img src="frontend/images/quote.png" alt="" class="techynaf-quote-2">
                            <p>{{ $othermedia->description }}</p>
                            <h5>{{ $othermedia->title }}</h5>
                            <a target="_blank" href="{{ $othermedia->url }}" class="btn btn btn-outline-primary btn-category ml-2 mb-4">Visit</a>
                            <a href="{{route('othermedia.edit', ['othermedia' => $othermedia->id])}}" class="btn btn btn-outline-primary btn-category ml-2 mb-4">Edit</a>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="row">
                    <a href="{{route('othermedia.index')}}" class="btn btn btn-outline-primary btn-category ml-2 mb-4">See More</a>
                    <a class="btn btn btn-outline-primary btn-category ml-2 mb-4" href="{{ route('othermedia.create') }}">Create New Other Media</a>
                </div>
        </div>
    </div>
@endauth
