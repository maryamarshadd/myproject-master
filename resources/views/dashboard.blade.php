<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <p>Welcome to the dashboard. Use the navigation links to manage categories and products.</p>
    <a href="{{ route('categories.index') }}" class="btn btn-primary">Manage Categories</a>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Manage Products</a>
</div>
@endsection
