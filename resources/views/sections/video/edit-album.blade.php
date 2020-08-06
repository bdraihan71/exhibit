@extends('layouts.app')

@section('content')
    <br><br><br><br><br>
    <div class="container-fluid">
        <h3 class="page-title"><a href="/home/#top"><i class="fas fa-arrow-alt-circle-left"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ALBUM</h3>
        <form action="/media/photo/edit" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="name" class="form-control" value="{{ old('name') == null ? ($event == null ? "Eventless" : $event->name) : old('name') }}" placeholder="Album Name" required>
            </div>

            <script>
                var featured = '{{ 'img'.$event->featured_id }}';

                function changeStatus (id) {
                    document.getElementById(featured).classList.remove('btn-danger');
                    document.getElementById(featured).classList.add('btn-success');
                    document.getElementById(id).classList.remove('btn-success');
                    document.getElementById(id).classList.add('btn-danger');
                    featured = id;
                }
            </script>

            <input type="hidden" name="id" value="{{$event == null ? 0 : $event->id}}">
            @csrf
            <div class="row">
                @if ($event == null)
                    @foreach (App\Album::where('event_id', 0)->get() as $album)
                        @include('templates.album-photo')
                    @endforeach
                @else
                    @foreach ($event->photos as $album)
                        @include('templates.album-photo')
                    @endforeach
                @endif
            </div>

            <h4 class="text-center">ALL IMAGES HAVE TO BE OF 3:2 RATIO (376 x 195) AND OF MAX SIZE 2 MB</h4>
            <br>

            <div class="form-group row">
                <div class="col-md-2 pl-5">
                    <label for="all" class="form-label-control">Add file</label>
                </div>
                <div class="col-md-10">
                    <input type="file" class="form-control" name="all" accept="image/*">
                    <br>
                    <input type="text" class="form-control" name="cap" maxlength="30" value="{{ old('cap') }}" placeholder="Image caption">
                </div>
            </div>

            <button class="btn btn-danger w-100" type="submit">Save Changes</button>
        </form>
    </div>
@endsection