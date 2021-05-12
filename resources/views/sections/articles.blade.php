@guest
<!-- Articles -->
    <div id="articles" class="techynaf-testiominal mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Say About Me</span>
                    <div class="row">
                        <h2 class="techynaf-heading animate-box ml-4" data-animate-effect="fadeInLeft">Articles</h2> 
                    </div>
                    <div class="col text-center">
                        @foreach($cats as $category)
                            <a class="btn btn btn-outline-primary btn-category ml-2 mb-4" href="{{route('article.index', ['category_id'=>$category->id])}}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>

                    <div class="row">
                        @if($selected_category)
                            <h4 class="themed-color ml-5">{{$selected_category->name}}</h4>
                        @else
                            <h4 class="themed-color ml-5">Recent Articles</h4>
                        @endif
                    </div>
                    
            </div>
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="techynaf-quote-card"> <img src="frontend/images/quote.png" alt="" class="techynaf-quote-2">    
                            <h5>{{ $article->title }}</h5>
                            <p>{{ $article->description }}</p>
                            <a target="_blank" href="{{ $article->url }}" class="btn btn btn-outline-primary btn-category ml-2 mb-4">Visit</a>
                        </div>
                    </div>
                @endforeach
                
            </div>
            <div class="row mt-2">
                <a href="{{route('article.index')}}" class="btn btn-category btn-outline-primary ml-3">See More</a>
            </div>
        </div>
    </div>
@endguest

@auth
<div id="articles" class="techynaf-testiominal mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Say About Me</span>
                    <div class="row">
                        <h2 class="techynaf-heading animate-box ml-4" data-animate-effect="fadeInLeft">Articles</h2> 
                    </div>
                    <div class="col text-center">
                        @foreach($cats as $category)
                            <a class="btn btn btn-outline-primary btn-category ml-2 mb-4" href="{{route('article.index', ['category_id'=>$category->id])}}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>

                    <div class="row">
                        @if($selected_category)
                            <h4 class="themed-color ml-5">{{$selected_category->name}}</h4>
                        @else
                            <h4 class="themed-color ml-5">Recent Articles</h4>
                        @endif
                    </div>
                    
            </div>
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="techynaf-quote-card"> <img src="frontend/images/quote.png" alt="" class="techynaf-quote-2">    
                            <h5>{{ $article->title }}</h5>
                            <p>{{ $article->description }}</p>
                            <a target="_blank" href="{{ $article->url }}" class="btn btn btn-outline-primary btn-category ml-2 mb-4">Visit</a>
                            <a href="{{route('article.edit', ['article' => $article->id])}}" class="btn btn btn-outline-primary btn-category ml-2 mb-4">Edit</a>
                        </div>
                    </div>
                @endforeach
                
            </div>
            <div class="row mt-2">
                <a href="{{route('article.index')}}" class="btn btn-category btn-outline-primary ml-3">See More</a>
            </div>
            <div class="row mt-2">
                <a class="btn btn-category btn-outline-primary ml-3" href="{{ route('article.create') }}">Create New Article</a>
            </div>
        </div>
    </div>
@endauth
