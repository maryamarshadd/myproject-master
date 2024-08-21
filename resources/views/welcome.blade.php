@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Welcome to the Laravel App</h2>
                    <p>This is the first page designed with Bootstrap CSS and JavaScript.</p>
                </div>
                <div class="card-body text-center">
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

















