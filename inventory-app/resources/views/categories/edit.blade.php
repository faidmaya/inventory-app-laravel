@extends('layouts.seodash')

@section('content')
<div class="card">
    <div class="card-body">
        <h4>Edit Category</h4>

        <form method="POST" action="{{ route('categories.update', $category) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama Category</label>
                <input type="text" name="name"
                       class="form-control"
                       value="{{ $category->name }}" required>
            </div>

            <button class="btn btn-warning">Update</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                Kembali
            </a>
        </form>
    </div>
</div>
@endsection