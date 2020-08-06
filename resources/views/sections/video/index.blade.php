@extends('layouts.app')

@section('content')
<section id="media" class="media">
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center media-text py-5">YOUTUBE VIDEOS</h1>
        </div>
    </div>
    <div class="row">
        @foreach ($videos as $video)
            @if ($loop->index % 3 == 0 && $loop->index != 0)
                </div>
                <div class="row">
            @endif
            <div class="col-md-4 p-3">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="560" height="315" src="{!!$video->url!!}"></iframe"
                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center">{{ $videos->links() }}</div>
    @if (auth()->user() != null)
            <div class="row">
                <div class="col-md-12">
                    <a href="/media/video/add" class="btn black-button w-100">Add Videos</a>
                </div>
            </div>
            <br>
    @endif
</div>
</section>

@endsection