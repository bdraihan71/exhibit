@guest
<!-- Contact -->
    <div id="contact" class="techynaf-contact mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Location</span>
                    <h2 class="techynaf-heading animate-box" data-animate-effect="fadeInLeft">Contact Me</h2> </div>
            </div>
            <div class="row">
                <!-- Contact Info -->
                <div class="col-md-6 mb-30 animate-box text-justify" data-animate-effect="fadeInLeft">
                    <h3 class="techynaf-about-heading">Contact Details</h3>
                    <p>{{$contact->description}}</p>
                    <p>Phone: {{ $profile->phone }} </p>
                    <p>Email: {{$profile->email}}</p>
                    <p>Address: {{$contact->address}}</p>
                </div>
                <!-- Contact Form -->
                {{-- <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <h3 class="techynaf-about-heading">How Can I Help You?</h3>
                    <p>I would like to hear from you</p>
                    <form method="post" class="row" action="{{ route('contact.mail') }}">
                        @csrf
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required> </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="email"lass="form-control" placeholder="Email"> </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea name="body" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="submit" class="btn btn-contact border-0" value="Say Hello!"> </div>
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
@endguest

@auth

    <div id="contact" class="techynaf-contact mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> <span class="heading-meta style-1">Location</span>
                    <h2 class="techynaf-heading animate-box" data-animate-effect="fadeInLeft">Contact Me</h2> </div>
            </div>
            <div class="row">
                <!-- Contact Info -->
                <div class="col-md-6 mb-30 animate-box text-justify" data-animate-effect="fadeInLeft">
                    <h3 class="techynaf-about-heading">Contact Details</h3>
                    <p>{{$contact->description}}</p>
                    <p>Phone: {{ $profile->phone }} </p>
                    <p>Email: {{$profile->email}}</p>
                    <p>Address: {{$contact->address}}</p>
                </div>
                <!-- Contact Form -->
                {{-- <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <h3 class="techynaf-about-heading">How Can I Help You?</h3>
                    <p>I would like to hear from you</p>
                    <form method="post" class="row" action="{{ route('contact.mail') }}">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required> </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email"> </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea name="message" name="body" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="submit" class="btn btn-contact border-0" value="Say Hello!"> </div>
                        </div>
                    </form>
                </div> --}}
            </div>
            <form class="col-10" method="post" action="{{ route('contact.update') }}">
                @csrf
                @method('patch')

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('address')}}">
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
