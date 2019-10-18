@extends('layouts.mail-edit')
@section('content')
<div class="card">
    <div class="card-header">
        {{ $testimonial->company }}
    </div>
        <form class="col-10" method="post" action="{{ route('testimonial.update', $testimonial->id) }}">
            @csrf
            @method('patch')

            <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $testimonial->name }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Designation</label>
                    <input type="text" name="designation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $testimonial->designation }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Company</label>
                    <input type="text" name="company" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $testimonial->company }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $testimonial->description }}</textarea>
                </div>

            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </form>
    </div>
</div>
@endsection
