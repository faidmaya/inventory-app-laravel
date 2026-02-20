@extends('layouts.seodash')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="mb-3">Edit Product</h4>

        <form action="{{ route('products.update', $product) }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Category</label>
                <select name="category_id" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $product->category_id == $category->id ? 'selected' : '' }}>
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
                       value="{{ $product->name }}"
                       required>
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description"
                          class="form-control"
                          rows="3">{{ $product->description }}</textarea>
            </div>

            <div class="mb-3">
                <label>Price</label>
                <input type="number"
                       name="price"
                       class="form-control"
                       value="{{ $product->price }}"
                       required>
            </div>

            <div class="mb-3">
                <label>Stock</label>
                <input type="number"
                       name="stock"
                       class="form-control"
                       value="{{ $product->stock }}"
                       required>
            </div>

            <div class="mb-3">
                <label>Image</label>
                <input type="file"
                       name="image"
                       class="form-control">
            </div>

            @if($product->image)
                <div class="mb-3">
                    <img src="{{ asset('storage/'.$product->image) }}"
                         width="120"
                         class="rounded">
                </div>
            @endif

            <button class="btn btn-warning">Update</button>
            <a href="{{ route('products.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>
        </form>
    </div>
</div>
@endsection