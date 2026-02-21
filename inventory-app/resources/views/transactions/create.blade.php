@extends('layouts.seodash')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="mb-3">Input Transaction</h4>

        <form method="POST" action="{{ route('transactions.store') }}">
            @csrf

            <div class="mb-3">
                <label>Product</label>
                <select name="product_id" class="form-control" required>
                    <option value="">-- Pilih Product --</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">
                            {{ $product->name }} (Stock: {{ $product->stock }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Type</label>
                <select name="type" class="form-control" required>
                    <option value="in">Product Masuk</option>
                    <option value="out">Product Keluar</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Amount</label>
                <input type="number" name="amount" class="form-control" min="1" required>
            </div>

            <div class="mb-3">
                <label>Notes</label>
                <textarea name="notes" class="form-control"></textarea>
            </div>

            <button class="btn btn-primary">Submit</button>
            <a href="{{ route('transactions.index') }}" class="btn btn-secondary">
                Kembali
            </a>
        </form>
    </div>
</div>
@endsection