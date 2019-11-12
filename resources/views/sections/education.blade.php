@guest
    <!-- Timeline Education -->
    <div id="education" class="techynaf-techynaf-timeline mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Resume</span>
                    <h2 class="techynaf-heading animate-box" data-animate-effect="fadeInLeft">Education</h2> </div>
            </div>
            <div class="row">
                <div class="col-md-12 animate-box text-justify" data-animate-effect="fadeInLeft">
                    <ul class="techynaf-timeline">
                        @foreach ($educations as $education)
                            <li>
                                <div class="techynaf-timeline-content"><span class="techynaf-timeline-date">{{ $education->start}} TO {{ $education->end == null ? 'Present' : $education->end  }}</span>
                                    <h4>{{ $education->institution_name }}</h4>
                                    <h4>{{ $education->degree }}</h4>
                                    <p>{{ $education->description }}</p>
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
    <div id="education" class="techynaf-techynaf-timeline mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Resume</span>
                    <h2 class="techynaf-heading animate-box" data-animate-effect="fadeInLeft">Education</h2> </div>
            </div>
            <div class="row">
                <div class="col-md-12 animate-box text-justify" data-animate-effect="fadeInLeft">
                    <ul class="techynaf-timeline">
                        @foreach ($educations as $education)
                            <li>
                                <div class="techynaf-timeline-content"><span class="techynaf-timeline-date">{{ $education->start}} TO {{ $education->end == null ? 'Present' : $education->end  }}</span>
                                    <h4>{{ $education->institution_name }}</h4>
                                    <h4>{{ $education->degree }}</h4>
                                    <p>{{ $education->description }}</p>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('education.edit', $education->id)}}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('education.delete', $education->id)}}" onclick="return confirm('Are you sure, you want to delete ?')" method="post" style="display: inline;">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger auth-delete-btn">Delete</button>
                                </form>
                            </li>

                        @endforeach
                    </ul>
                </div>
            </div>
            <form class="col-10" method="post" action="{{ route('education.store') }}">
                @csrf
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Start Date</label>
                  <input type="date" name="start" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('start')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">End Date</label>
                    <input type="date" name="end" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('end')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Institution Name</label>
                    <input type="text" name="institution_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('institution_name')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Degree</label>
                    <input type="text" name="degree" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('degree')}}">
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
