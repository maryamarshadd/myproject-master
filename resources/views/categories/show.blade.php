@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Category Details</h1>
        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <th>Parent</th>
                <td>{{ $category->parent ? $category->parent->name : 'None' }}</td>
            </tr>
        </table>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
