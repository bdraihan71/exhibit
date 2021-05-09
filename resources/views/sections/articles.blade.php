@guest
<!-- Articles -->
    <div id="articles" class="techynaf-testiominal mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Say About Me</span>
                    <h2 class="techynaf-heading animate-box" data-animate-effect="fadeInLeft">Articles</h2> </div>

                    @foreach($cats as $category)
                        <a class="btn btn-primary" href="{{route('article.index', ['category_id'=>$category->id])}}">{{ $category->name }}</a>
                    @endforeach
                    
                    @if($selected_category)
                    <p>{{$selected_category->name}}</p>
                    @else
                    <p>Recent Articles</p>
                    @endif
                    <a class="btn btn-primary" href="{{ route('article.create') }}">Create New Article</a>
            </div>
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="techynaf-quote-card"> <img src="frontend/images/quote.png" alt="" class="techynaf-quote-2">
                            <p>{{ $article->description }}</p>
                            <h5>{{ $article->title }}</h5>
                            <a target="_blank" href="{{ $article->url }}" class="occupation">Visit</a>
                        </div>
                    </div>
                @endforeach

                <a href="{{route('article.index')}}" class="btn btn-primary">See More</a>
            </div>
        </div>
    </div>
@endguest
<!-- 
@auth
    <div id="articles" class="techynaf-testiominal mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Say About Me</span>
                    <h2 class="techynaf-heading animate-box" data-animate-effect="fadeInLeft">Testimonials</h2> </div>
            </div>
            <div class="row">
                @foreach ($testimonials as $testimonial)
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="techynaf-quote-card"> <img src="frontend/images/quote.png" alt="" class="techynaf-quote-2">
                        <p>{{ $testimonial->description }}</p>
                        <h5>{{ $testimonial->name }}</h5>
                        <p class="occupation">{{ $testimonial->designation }}, {{ $testimonial->company }}</p>
                    </div>
                    <a href="{{ route('testimonial.edit', $testimonial->id)}}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('testimonial.delete', $testimonial->id)}}" onclick="return confirm('Are you sure, you want to delete ?')" method="post" style="display: inline;">
                        @csrf
                        @method('delete')
                       <button type="submit" class="btn btn-danger auth-delete-btn">Delete</button>
                    </form>
                </div>
                @endforeach
            </div>
            <form class="col-10" method="post" action="{{ route('testimonial.store') }}">
                    @csrf

                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('name')}}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Designation</label>
                        <input type="text" name="designation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('designation')}}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Company</label>
                        <input type="text" name="company" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('company')}}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Comment</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{old('description')}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
@endauth -->
