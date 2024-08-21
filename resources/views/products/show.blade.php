@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>
    <div class="card">
        <div class="card-header">
            Product Details
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $product->name }}</p>
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Price:</strong> ${{ $product->price }}</p>
            <p><strong>Category:</strong> {{ $product->category->name }}</p>
            <p>
                <strong>Image:</strong>
                @if ($product->logo)
                    <img src="{{ asset('uploads/products/' . $product->logo) }}" alt="Product Image" width="100">
                @else
                    No Image
                @endif
            </p>
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Products</a>
        </div>
    </div>
</div>
@endsection

