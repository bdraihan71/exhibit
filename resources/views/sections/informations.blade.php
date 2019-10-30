@guest
    <!-- About Me -->
    <div id="introduction" class="techynaf-about mb-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7"> <img src="{{ url($profile->image) }}" class="img-fluid mb-15 animate-box fadeInLeft animated rounded" data-animate-effect="fadeInLeft" alt=""> </div>
                    <div class="col-md-5 animate-box fadeInLeft animated text-justify" data-animate-effect="fadeInLeft"> <span class="heading-meta style-1">Informations</span>
                        <h3 class="techynaf-about-heading">I'm {{ $profile->name }}</h3>
                        {{ $profile->description }}
                        <div class="cardvisit rounded">
                            <h3>{{ $profile->name }}</h3>
                            <span>{{ $profile->designation }}</span>
                            <div class="divider1"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    @if ($profile->dob)
                                        <p><i class="ti-calendar"></i> <a href="#">{{ $profile->dob }}</a></p>
                                    @endif
                                    @if ($profile->phone)
                                        <p><i class="ti-mobile"></i> <a href="#">{{ $profile->phone }}</a></p>
                                    @endif
                                    @if ($profile->email)
                                        <p><i class="ti-email"></i> <a href="#">{{ $profile->email }}</a></p>
                                    @endif
                                    @if ($profile->skype)
                                        <p><i class="ti-skype"></i> <a href="skype:{{ $profile->skype }}?call">{{ $profile->skype }}</a></p>
                                    @endif
                                    @if ($profile->website)
                                        <p><i class="ti-world"></i> <a target="_blank" href="{{ $profile->website }}">{{ $profile->website }}</a></p>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    @if ($profile->linkedin)
                                        <p><i class="ti-linkedin"></i> <a target="_blank" href="{{ 'https://www.linkedin.com/'.$profile->linkedin }}">{{ $profile->linkedin }}</a></p>
                                    @endif
                                    @if ($profile->facebook)
                                        <p><i class="ti-facebook"></i> <a target="_blank" href="{{ 'https://www.facebook.com/'. $profile->facebook }}">{{ $profile->facebook }}</a></p>
                                    @endif
                                    @if ($profile->twitter)
                                        <p><i class="ti-twitter"></i> <a target="_blank" href="{{ 'https://twitter.com/'.$profile->twitter }}">{{ $profile->twitter }}</a></p>
                                    @endif
                                    @if ($profile->youtube)
                                        <p><i class="ti-youtube"></i> <a target="_blank" href="{{ 'https://www.youtube.com/'.$profile->youtube }}">{{ $profile->youtube }}</a></p>
                                    @endif
                                    @if ($profile->instagram)
                                        <p><i class="ti-instagram"></i> <a target="_blank" href="{{ 'http://instagram.com/'.$profile->instagram }}">{{ $profile->instagram }}</a></p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endguest
@auth
     <!-- About Me -->
     <div id="introduction" class="techynaf-about mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7"> <img src="{{ url($profile->image) }}" class="img-fluid mb-15 animate-box fadeInLeft animated rounded" data-animate-effect="fadeInLeft" alt=""> </div>
                <div class="col-md-5 animate-box fadeInLeft animated text-justify" data-animate-effect="fadeInLeft"> <span class="heading-meta style-1">Informations</span>
                    <h3 class="techynaf-about-heading">I'm {{ $profile->name }}</h3>
                    {{ $profile->description }}
                    <div class="cardvisit rounded">
                        <h3>{{ $profile->name }}</h3>
                        <span>{{ $profile->designation }}</span>
                        <div class="divider1"></div>
                        <div class="row">
                            <div class="col-md-6">
                                @if ($profile->dob)
                                    <p><i class="ti-calendar"></i> <a href="#">{{ $profile->dob }}</a></p>
                                @endif
                                @if ($profile->phone)
                                    <p><i class="ti-mobile"></i> <a href="#">{{ $profile->phone }}</a></p>
                                @endif
                                @if ($profile->email)
                                    <p><i class="ti-email"></i> <a href="#">{{ $profile->email }}</a></p>
                                @endif
                                @if ($profile->skype)
                                    <p><i class="ti-skype"></i> <a href="skype:{{ $profile->skype }}?call">{{ $profile->skype }}</a></p>
                                @endif
                                @if ($profile->website)
                                    <p><i class="ti-world"></i> <a target="_blank" href="{{ $profile->website }}">{{ $profile->website }}</a></p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                @if ($profile->linkedin)
                                    <p><i class="ti-linkedin"></i> <a target="_blank" href="{{ 'https://www.linkedin.com/'.$profile->linkedin }}">{{ $profile->linkedin }}</a></p>
                                @endif
                                @if ($profile->facebook)
                                    <p><i class="ti-facebook"></i> <a target="_blank" href="{{ 'https://www.facebook.com/'. $profile->facebook }}">{{ $profile->facebook }}</a></p>
                                @endif
                                @if ($profile->twitter)
                                    <p><i class="ti-twitter"></i> <a target="_blank" href="{{ 'https://twitter.com/'.$profile->twitter }}">{{ $profile->twitter }}</a></p>
                                @endif
                                @if ($profile->youtube)
                                    <p><i class="ti-youtube"></i> <a target="_blank" href="{{ 'https://www.youtube.com/'.$profile->youtube }}">{{ $profile->youtube }}</a></p>
                                @endif
                                @if ($profile->instagram)
                                    <p><i class="ti-instagram"></i> <a target="_blank" href="{{ 'http://instagram.com/'.$profile->instagram }}">{{ $profile->instagram }}</a></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form class="col-10" method="post" action="{{ route('profile.update') }} " enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Date of Birth</label>
                <input type="date" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{  $profile->dob}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1"> Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{  $profile->name}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Designation</label>
                    <input type="text" name="designation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{  $profile->designation}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{  $profile->description }}</textarea>
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1"> Phone</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{  $profile->phone }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1"> Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{  $profile->email }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1"> Skype</label>
                    <input type="text" name="skype" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{  $profile->skype }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1"> Website</label>
                    <input type="text" name="website" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{  $profile->website}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1"> Linkedin</label>
                    <input type="text" name="linkedin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{  $profile->linkedin}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1"> Facebook</label>
                    <input type="text" name="facebook" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{  $profile->facebook}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1"> Twitter</label>
                    <input type="text" name="twitter" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{  $profile->twitter}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1"> Youtube</label>
                    <input type="text" name="youtube" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{  $profile->youtube}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Instagram</label>
                    <input type="text" name="instagram" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{  $profile->instagram }}">
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
