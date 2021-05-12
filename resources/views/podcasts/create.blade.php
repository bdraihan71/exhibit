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

    <div id="podcasts" class="techynaf-testiominal mb-4">
        <a href="{{route('podcast.index')}}" class="btn btn-primary" type="submit">See Podcasts</a>
        <h3 class="pl-4">Add a new podcast</h3>
        
        <form method="post" action="{{route('podcast.save')}}">
            @csrf
            <div class="container-fluid">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="add a title of your podcast">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Description</label>
                    <input name="description" type="text" class="form-control" id="exampleFormControlInput1" placeholder="add one online description of the podcast">
                </div>  
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">URL</label>
                    <input name="url" type="text" class="form-control" id="exampleFormControlInput1" placeholder="add a URL that gets opened in a new tab when View Podcast button is clicked">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Created At</label>
                    <input name="created_at" value="" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Showing today's date by default, change to any past date if required">
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>

    @include('sections.footer')
@endsection
<script>
    $('.alert').alert()
</script>
