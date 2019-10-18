@extends('layouts.mail-edit')
@section('content')
<div class="card">
    <div class="card-header">
        {{$project->name}}
    </div>
    <div class="card-body">
        <form class="col-10" method="post" action="{{ route('project.update', $project->id) }}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group col-md-6">
                    <label for="exampleInputEmail1"> Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $project->name }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $project->description }}</textarea>
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleFormControlFile1">Profile Picture</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
