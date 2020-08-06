@extends('layouts.app')

@section('content')
    <br><br><br><br><br>
    <div class="container-fluid">
        <form action="/media/video/edit" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    @foreach (App\Video::get() as $video)
                        <div class="col-md-4">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" width="560" height="315" src={!!$video->url!!} frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                            <br>
                            <input type="text" name="url[]" value="{{ old('url'.$loop->index) == null ? $video->url : old('url'.$loop->index) }}" class="form-control">
                            <br>
                            <a href="/media/video/delete/{{$video->id}}" class="btn black-button w-100">Delete</a>
                            <br><br><br>
                        </div>
                    @endforeach
                </div>
            <h4 class="text-center">PLEASE PASTE THE YOUTUBE EMBED LINK</h4>
            <br>

            <div class="form-group row">
                <div class="col-md-2 pl-5">
                    <label for="all" class="form-label-control">Add video</label>
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="new" placeholder="Embed link">
                </div>
            </div>

            <button class="btn btn-danger w-100" type="submit">Submit</button>
        </form>
    </div>
@endsection