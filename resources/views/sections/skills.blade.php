@guest
<!-- Skills -->
    <div id="skills" class="techynaf-skills mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Abilities</span>
                    <h2 class="techynaf-heading animate-box" data-animate-effect="fadeInLeft">My Skills</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 animate-box text-justify" data-animate-effect="fadeInLeft">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="col-md-7 animate-box" data-animate-effect="fadeInLeft">
                    <p class="bar-title">JavaScript<span class="percent align-right">90%</span></p>
                    <div class="bar">
                        <div class="bar-fill bar-fill-developer start"></div>
                    </div>
                    <p class="bar-title">PHP<span class="percent align-right">80%</span></p>
                    <div class="bar">
                        <div class="bar-fill bar-fill-photoshop start"></div>
                    </div>
                    <p class="bar-title">HTML / CSS<span class="percent align-right">95%</span></p>
                    <div class="bar">
                        <div class="bar-fill bar-fill-webdesign start"></div>
                    </div>
                    <p class="bar-title">jQuery<span class="percent align-right">85%</span></p>
                    <div class="bar">
                        <div class="bar-fill bar-fill-socialmedia start"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endguest

@auth
    <div id="skills" class="techynaf-skills mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Abilities</span>
                    <h2 class="techynaf-heading animate-box" data-animate-effect="fadeInLeft">My Skills</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 animate-box text-justify" data-animate-effect="fadeInLeft">
                    @foreach ($skills as $skill)
                        <p>{{ $skill->description }}</p>
                    @endforeach
                </div>
                <div class="col-md-7 animate-box" data-animate-effect="fadeInLeft">
                    @foreach ($skills as $skill)
                        <p class="bar-title">{{ $skill->skill_name }}<span class="percent align-right">{{ $skill->skill_value }}%</span></p>
                        <div class="bar">
                            <div class="bar-fill bar-fill-developer start"></div>
                        </div>
                            <a href="{{ route('skill.edit', $skill->id)}}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('skill.delete', $skill->id)}}" onclick="return confirm('Are you sure, you want to delete ?')" method="post" style="display: inline;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                    @endforeach

                </div>
            </div>
            <form class="col-10" method="post" action="{{ route('skill.store') }}">
                @csrf
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Skill Name</label>
                    <input type="text" name="skill_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('skill_name')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">skill Value</label>
                    <input type="number" name="skill_value" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('skill_value')}}">
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
