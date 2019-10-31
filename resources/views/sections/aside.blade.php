<a href="#" class="js-techynaf-nav-toggle techynaf-nav-toggle"><i></i></a>
<!-- Sidebar Section -->
<aside id="techynaf-aside">
    <!-- Logo -->
    <h1 id="techynaf-logo">
        <div class="circular">
            <img src="{{ url($profile->image) }}" alt="">
        </div>
        <br />
        <a href="#introduction">{{ $profile->name }}<span>{{ $profile->designation }}</span></a>
    </h1>
    <!-- Menu -->
    <nav id="techynaf-main-menu">
        <ul>
            <li class="techynaf-active"><a href="#introduction">Introduction</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#testimonial">Testimonial</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <a class="btn btn-info w-100" href="{{$footer->cv}}" download="{{$footer->cv}}">Download CV</a>
    <!-- Sidebar Footer -->
    <div class="techynaf-footer">
        <ul>
            <li><a target="_blank" href="mailto:{{ $profile->email }}"><i class="ti-email font-14px gray-icon"></i></a></li>
            <li><a target="_blank" href="https://linkedin.com/{{ $profile->linkedin }}"><i class="ti-linkedin font-14px gray-icon"></i></a></li>
            <li><a target="_blank" href="http://facebook.com/{{ $profile->facebook }}"><i class="ti-facebook font-14px gray-icon"></i></a></li>
            <li><a target="_blank" href="https://www.instagram.com/{{ $profile->instagram }}"><i class="ti-instagram font-14px gray-icon"></i></a></li>
        </ul>
        <p><small>&copy; <a target="_blank" href="https://techynaf.com/">Techynaf</a></small></p>
    </div>
</aside>
