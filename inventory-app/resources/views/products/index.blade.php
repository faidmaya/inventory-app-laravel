@extends('layouts.seodash')

@section('content')
<div class="card">
    <div class="card-body">

        <div class="d-flex justify-content-between mb-3">
            <h4>Product List</h4>

            @if(auth()->user()->role === 'admin')
                <a href="{{ url('/products/create') }}" class="btn btn-primary">
                    Tambah Product
                </a>
            @endif
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-hover align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Nama</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>

                    @if(auth()->user()->role === 'admin')
                        <th width="180">Action</th>
                    @endif
                </tr>
            </thead>

            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>

                    <td>
                        @if($product->image)
                            <img src="{{ asset('storage/'.$product->image) }}"
                                 width="60" class="rounded">
                        @else
                            -
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('products.show', $product) }}"
                            class="text-primary fw-semibold">
                            {{ $product->name }}
                        </a>
                    </td>
                    <td>{{ $product->category->name ?? '-' }}</td>
                    <td>Rp {{ number_format($product->price) }}</td>
                    <td>{{ $product->stock }}</td>

                    @if(auth()->user()->role === 'admin')
                        <td>
                            <a href="{{ route('products.edit', $product) }}"
                               class="btn btn-sm btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('products.destroy', $product) }}"
                                  method="POST"
                                  class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Yakin hapus?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection