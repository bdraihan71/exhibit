@extends('layouts.mail-edit')
@section('content')
<div class="card">
    <div class="card-header">
        {{$education->institution_name}}
    </div>
    <div class="card-body">
        <form class="col-10" method="post" action="{{ route('education.update', $education->id) }}">
            @csrf
            @method('patch')
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Start Date</label>
                <input type="date" name="start" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $education->start }}">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">End Date</label>
                <input type="date" name="end" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $education->end }}">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Institution Name</label>
                <input type="text" name="institution_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $education->institution_name }}">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Degree</label>
                <input type="text" name="degree" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $education->degree }}">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $education->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
