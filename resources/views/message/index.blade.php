@extends('layouts.mail-edit')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Messsage List</h4>
    </div>
        @if($mails->count()>0)
        <table class="table table-hover table-bordered border table-sm custom-table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($mails as $mail)
                <tr>
                    <td>{{ $mail->name }}</td>
                    <td>{{ $mail->email }}</td>
                    <td>{{ $mail->body }}</td>
                    </tr>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No Message Available</p>
    @endif
    <a class="btn btn-info" href="/edit">Home</a>
    </div>
</div>
@endsection
