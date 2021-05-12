@guest

<!-- Subscribers -->
    <div id="subscribe" class="techynaf-testiominal">

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Subscribe to me</span>
                    <div class="row">
                        <h2 class="techynaf-heading animate-box ml-4" data-animate-effect="fadeInLeft">Subscribers</h2> 
                    </div>
                </div>

            <div id="subscribers" class="techynaf-testiominal ">
                <h3 class="techynaf-heading ml-3">Be a subscriber</h3>
                <form method="post" action="{{route('subscriber.save')}}">
                    @csrf
                    <div class="container-fluid">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="please type your name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="and email 😋">
                        </div>
                        <button class="btn btn-category btn-outline-primary ml-3" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endguest

@auth

<!-- Subscribers -->
    <div id="subscribe" class="techynaf-testiominal mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Subscribe to me</span>
                    <div class="row">
                        <h2 class="techynaf-heading animate-box ml-4" data-animate-effect="fadeInLeft">Subscribers</h2> 
                    </div>
                </div>

                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{$error}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                @endif

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

            <div id="subscribers" class="techynaf-testiominal mb-4">
                <a href="{{route('subscriber.index')}}" class="btn btn-category btn-outline-primary ml-3" type="submit">See Subscribers</a>
                <h3 class="techynaf-heading ml-3">Be a subscriber</h3>
                
                <form method="post" action="{{route('subscriber.save')}}">
                    @csrf
                    <div class="container-fluid">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="email">
                        </div>
                        <button class="btn btn-category btn-outline-primary ml-3" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endauth 