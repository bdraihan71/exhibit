@extends('layouts.mail-edit')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Change Password</h3>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('password.newpassword', $user->id) }}">
            @method('patch')
            @csrf
            <div class="form-group row mb-2">
              <label class="col-12 col-form-label">Current Password:<span class="text-danger">*</span> </label>
              <div class="col-12">
                <input type="password" id="current_password" class="form-control rounded-0 mb-2" name="old_password" required>
              </div>
            </div>
            <div class="form-group row mb-2">
              <label class="col-12 col-form-label">New Password:<span class="text-danger">*</span> </label>
              <div class="col-12">
                <input type="password" id="new_password" class="form-control rounded-0 mb-2" name="new_password" required>
              </div>
            </div>
            <div class="form-group row mb-2">
              <label class="col-12 col-form-label">Retype New Password:<span class="text-danger">*</span> </label>
              <div class="col-12">
                <input type="password" id="retype_password" class="form-control rounded-0 mb-2" name="retype_password" required>
              </div>
            </div>
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
    </div>
</div>
@endsection
