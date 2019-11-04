@extends('layouts.main')
@section('content')
<body>
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
    @include('sections.informations')

    @include('sections.experience')

    @include('sections.education')

    @include('sections.skills')

    @include('sections.projects')

    @include('sections.testimonials')

    @include('sections.contact')

    @include('sections.footer')
@endsection
<script>
    $('.alert').alert()
</script>
