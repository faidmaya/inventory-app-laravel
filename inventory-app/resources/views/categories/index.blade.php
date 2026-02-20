@extends('layouts.seodash')

@section('content')
<div class="card">
    <div class="card-body">

        <div class="d-flex justify-content-between mb-3">
            <h4>Category List</h4>
            <a href="{{ route('categories.create') }}" class="btn btn-primary">
                Tambah Category
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th width="180">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category) }}"
                           class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('categories.destroy', $category) }}"
                              method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin hapus?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection