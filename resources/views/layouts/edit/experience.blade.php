@extends('layouts.mail-edit')
@section('content')
<div class="card">
    <div class="card-header">
        {{ $experience->company_name}}
    </div>
    <div class="card-body">

        <form class="col-10" method="post" action="{{ route('experience.update', $experience->id) }}">
            @csrf
            @method('patch')
            <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Joining Date</label>
                    <input type="date" name="join" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $experience->join }}">
                </div>

                <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Leaving Date</label>
                        <input type="date" name="disjoin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $experience->disjoin }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Company Name</label>
                        <input type="text" name="company_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $experience->company_name}}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Designation</label>
                        <input type="text" name="designation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $experience->designation }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $experience->description }}</textarea>
                    </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
