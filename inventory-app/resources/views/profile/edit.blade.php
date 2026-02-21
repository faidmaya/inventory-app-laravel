@extends('layouts.seodash')

@section('content')
<div class="card">
    <div class="card-body">
        <h4>Edit Profile</h4>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('user.profile.update') }}">
            @csrf

            <div class="mb-3">
                <label>Age</label>
                <input type="number"
                       name="age"
                       class="form-control"
                       value="{{ old('age', $profile->age ?? '') }}">
            </div>

            <div class="mb-3">
                <label>Biodata</label>
                <textarea name="biodata"
                          class="form-control"
                          rows="4">{{ old('biodata', $profile->biodata ?? '') }}</textarea>
            </div>

            <button class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection