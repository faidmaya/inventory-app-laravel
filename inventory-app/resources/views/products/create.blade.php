@extends('layouts.seodash')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="mb-3">Tambah Product</h4>

        <form action="{{ route('products.store') }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Category</label>
                <select name="category_id" class="form-control" required>
                    <option value="">-- Pilih Category --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Nama Product</label>
                <input type="text"
                       name="name"
                       class="form-control"
                       required>
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description"
                          class="form-control"
                          rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label>Price</label>
                <input type="number"
                       name="price"
                       class="form-control"
                       required>
            </div>

            <div class="mb-3">
                <label>Stock</label>
                <input type="number"
                       name="stock"
                       class="form-control"
                       required>
            </div>

            <div class="mb-3">
                <label>Image</label>
                <input type="file"
                       name="image"
                       class="form-control">
            </div>

            <button class="btn btn-primary">Simpan</button>
            <a href="{{ route('products.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>
        </form>
    </div>
</div>
@endsection