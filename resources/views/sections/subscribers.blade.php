@auth

<!-- Subscribers -->
    <div id="subscribe" class="techynaf-testiominal mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Say About Me</span>
                    <div class="row">
                        <h2 class="techynaf-heading animate-box ml-4" data-animate-effect="fadeInLeft">Subscribers</h2> 
                    </div>
                </div>

                    <div class="row">
                        @if($selected_category)
                            <h4 class="themed-color ml-5">{{$selected_category->name}}</h4>
                        @else
                            <h4 class="themed-color ml-5">Recent Subscribers</h4>
                        @endif
                    </div>
                    
            </div>
            <div class="row">
                @foreach ($subscribers as $subscriber)
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="techynaf-quote-card"> <img src="frontend/images/quote.png" alt="" class="techynaf-quote-2">
                            <p>{{ $subscriber->name }}</p>
                            <h5>{{ $subscriber->email }}</h5>
                        </div>
                    </div>
                @endforeach
                
            </div>
            
        </div>
    </div>
@endauth