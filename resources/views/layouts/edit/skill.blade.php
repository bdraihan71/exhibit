@extends('layouts.main')
@section('content')
    <form class="col-10" method="post" action="{{ route('skill.update', $skill->id) }}">
        @csrf
        @method('patch')
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Skill Name</label>
                <input type="text" name="skill_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $skill->skill_name }}">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">skill Value</label>
                <input type="number" max="100" name="skill_value" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $skill->skill_value}}">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $skill->description }}</textarea>
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
