@guest
    <!-- Timeline Experience -->
    <div id="experience" class="techynaf-techynaf-timeline mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Resume</span>
                    <h2 class="techynaf-heading animate-box" data-animate-effect="fadeInLeft">Experience</h2> </div>
            </div>
            <div class="row">
                <div class="col-md-12 animate-box text-justify" data-animate-effect="fadeInLeft">
                    <ul class="techynaf-timeline">
                        @foreach ($experiences as $experience)
                            <li>
                                <div class="techynaf-timeline-content"><span class="techynaf-timeline-date">{{ $experience->join}} TO {{ $experience->disjoin == null ? 'Present' : $experience->disjoin  }}</span>
                                    <h5>{{ $experience->company_name }}</h5>
                                    <h4>{{ $experience->designation }}</h4>
                                    <p>{{ $experience->description }}</p>
                                </div>
                            </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endguest
@auth
    <div id="experience" class="techynaf-techynaf-timeline mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Resume</span>
                    <h2 class="techynaf-heading animate-box" data-animate-effect="fadeInLeft">Experience</h2> </div>
            </div>
            <div class="row">
                <div class="col-md-12 animate-box text-justify" data-animate-effect="fadeInLeft">
                    <ul class="techynaf-timeline">
                        @foreach ($experiences as $experience)
                            <li>
                                <div class="techynaf-timeline-content"><span class="techynaf-timeline-date">{{ $experience->join}} TO {{ $experience->disjoin == null ? 'Present' : $experience->disjoin  }}</span>
                                    <h5>{{ $experience->company_name }}</h5>
                                    <h4>{{ $experience->designation }}</h4>
                                    <p>{{ $experience->description }}</p>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('experience.edit', $experience->id)}}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('experience.delete', $experience->id)}}" onclick="return confirm('Are you sure, you want to delete ?')" method="post" style="display: inline;">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <form class="col-10" method="post" action="{{ route('experience.store') }}">
                @csrf
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Joining Date</label>
                  <input type="date" name="join" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('join')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Leaving Date</label>
                    <input type="date" name="disjoin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('disjoin')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" name="company_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('company_name')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Designation</label>
                    <input type="text" name="designation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('designation')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{old('description')}}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endauth
