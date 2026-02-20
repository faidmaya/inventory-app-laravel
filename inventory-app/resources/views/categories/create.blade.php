@extends('layouts.seodash')

@section('content')
<div class="card">
    <div class="card-body">
        <h4>Tambah Category</h4>

        <form method="POST" action="{{ route('categories.store') }}">
            @csrf

            <div class="mb-3">
                <label>Nama Category</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <button class="btn btn-primary">Simpan</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                Kembali
            </a>
        </form>
    </div>
</div>
@endsection