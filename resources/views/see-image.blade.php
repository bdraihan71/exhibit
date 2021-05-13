@extends('layouts.main')
@section('content')

<body>
    <a class="btn btn-category btn-outline-primary ml-3 float-right" href="/">Back</a><br><br>
    <img src="{{$image}}"></img>
</body>
@include('sections.footer')
@endsection
