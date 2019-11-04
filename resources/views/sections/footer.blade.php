@guest
<!-- Footer -->
<div id="techynaf-footer2">
    <div class="techynaf-narrow-content">
        <div class="row">
            <div class="col-md-12 animate-box text-center mt-4" data-animate-effect="fadeInLeft">
            <a class="btn btn-info" href="{{$footer->cv}}" download="{{$footer->cv}}">Download CV</a>
            </div>
            <div class="col-md-12 animate-box text-center mt-4" data-animate-effect="fadeInLeft">
                <ul class="social-network">
                    <li><a href="#"><i class="ti-email font-25px mx-2"></i></a></li>
                    <li><a target="_blank" href="{{ 'https://www.linkedin.com/'.$profile->linkedin }}"><i class="ti-linkedin font-25px mx-2"></i></a></li>
                    <li><a target="_blank" href="{{ 'https://www.facebook.com/'. $profile->facebook }}"><i class="ti-facebook font-25px mx-2"></i></a></li>
                    <li><a target="_blank" href="{{ 'https://twitter.com/'.$profile->twitter }}"><i class="ti-twitter-alt font-25px mx-2"></i></a></li>
                    <li><a target="_blank" href="{{ 'http://instagram.com/'.$profile->instagram }}"><i class="ti-instagram font-25px mx-2"></i></a></li>
                </ul>
            </div>
            <div class="col-md-12 animate-box text-center" data-animate-effect="fadeInLeft">
            <p class="techynaf-lead">&copy; <a target="_blank" href="https://techynaf.com/">{{ $footer->copyright }}</a></p>
            </div>
        </div>
    </div>
</div>
@endguest
@auth
    <div id="techynaf-footer2">
        <div class="techynaf-narrow-content">
            <div class="row">
                <div class="col-md-12 animate-box text-center mt-4" data-animate-effect="fadeInLeft">
                    <a class="btn btn-info" href="{{$footer->cv}}" download="{{$footer->cv}}">Download CV</a>
                </div>
                <div class="col-md-12 animate-box text-center mt-4" data-animate-effect="fadeInLeft">
                    <ul class="social-network">
                        <li><a href="#"><i class="ti-email font-25px mx-2"></i></a></li>
                        @if ($profile->linkedin)
                            <li><a target="_blank" href="{{ 'https://www.linkedin.com/'.$profile->linkedin }}"><i class="ti-linkedin font-25px mx-2"></i></a></li>
                        @endif
                        @if ($profile->facebook)
                            <li><a target="_blank" href="{{ 'https://www.facebook.com/'. $profile->facebook }}"><i class="ti-facebook font-25px mx-2"></i></a></li>
                        @endif
                        @if ($profile->twitter)
                            <li><a target="_blank" href="{{ 'https://twitter.com/'.$profile->twitter }}"><i class="ti-twitter-alt font-25px mx-2"></i></a></li>
                        @endif
                        @if ($profile->instagram)
                            <li><a target="_blank" href="{{ 'http://instagram.com/'.$profile->instagram }}"><i class="ti-instagram font-25px mx-2"></i></a></li>
                        @endif
                    </ul>
                </div>
                <div class="col-md-12 animate-box text-center" data-animate-effect="fadeInLeft">
                    <p class="techynaf-lead">&copy; <a target="_blank" href="https://techynaf.com/">{{ $footer->copyright }}</a></p>
                </div>
            </div>
            <form class="col-10" method="post" action="{{ route('footer.update') }} " enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1"> Copyright Text</label>
                    <input type="text" name="copyright" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('copyright')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleFormControlFile1">Upload CV</label>
                    <input type="file" name="cv" class="form-control-file" id="exampleFormControlFile1">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endauth
