@extends('layouts.seodash')

@section('content')
<div class="card">
    <div class="card-body">

        <div class="d-flex justify-content-between mb-4">
            <h4>Detail Product</h4>
            <a href="{{ route('products.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>
        </div>

        <div class="row">
            <div class="col-md-4">
                @if($product->image)
                    <img src="{{ asset('storage/'.$product->image) }}"
                         class="img-fluid rounded shadow-sm">
                @else
                    <div class="border p-5 text-center">
                        Tidak ada gambar
                    </div>
                @endif
            </div>

            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                        <th width="200">Nama Product</th>
                        <td>{{ $product->name }}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{ $product->category->name ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>Rp {{ number_format($product->price) }}</td>
                    </tr>
                    <tr>
                        <th>Stock</th>
                        <td>{{ $product->stock }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $product->description ?? '-' }}</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection