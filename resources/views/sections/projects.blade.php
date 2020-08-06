@guest
    <!-- Projects -->
    <div id="books" class="techynaf-projects mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Take a Look at</span>
                    <h2 class="techynaf-heading animate-box" data-animate-effect="fadeInLeft">My Books</h2> </div>
            </div>
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                        <a href="#" class="desc">
                            <div class="project"> <img src="{{ $project->image }}" class="img-fluid" alt="">
                                <div class="desc">
                                    <div class="con">
                                    <h3>{{ $project->name }}</h3> <span>{{ $project->description }}</span> </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endguest

@auth
    <div id="books" class="techynaf-projects mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Take a Look at</span>
                    <h2 class="techynaf-heading animate-box" data-animate-effect="fadeInLeft">My Books</h2> </div>
            </div>
            <div class="row">
                @foreach ($projects as $project)
                <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                    <a href="#" class="desc">
                        <div class="project"> <img src="{{ $project->image }}" class="img-fluid" alt="">
                            <div class="desc">
                                <div class="con">
                                <h3>{{ $project->name }}</h3> <span>{{ $project->description }}</span> </div>
                            </div>
                        </div>
                    </a>
                    <div>
                        <a href="{{ route('project.edit', $project->id)}}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('project.delete', $project->id)}}" onclick="return confirm('Are you sure, you want to delete ?')" method="post" style="display: inline;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger auth-delete-btn">Delete</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
            <form class="col-10" method="post" action="{{ route('project.store') }} " enctype="multipart/form-data">
                @csrf

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1"> Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('name')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{old('description')}}</textarea>
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleFormControlFile1">Profile Picture</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endauth
