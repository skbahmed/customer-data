@extends('layouts.main')
@section('page-title', 'Home')
@section('main-container')
    <div class="container text-center py-5 bg-light mt-5">
        @if (Route::has('login'))
            <div class="hidden bg-white py-3 mb-3 mx-5">
                @auth
                    <a class="btn btn-lg fw-bold text-light btn-success text-capitalize px-5" href="{{ url('/dashboard') }}">dashboard</a>
                @else
                    <a class="btn btn-lg fw-bold text-light btn-success text-capitalize px-5" href="{{ route('login') }}">log in</a>
                    
                    @if (Route::has('register'))
                        <a class="btn btn-lg fw-bold text-light btn-warning text-capitalize px-5" href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
@endsection