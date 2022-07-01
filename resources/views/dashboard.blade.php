@extends('layouts.main')
@section('page-title', 'Dashboard')
@section('main-container')
<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="container text-center py-5 bg-light mt-5">
        <a class="btn btn-lg fw-bold text-light btn-success text-capitalize" href="{{ url('customers-data') }}">all customers data</a>
        <a class="btn btn-lg fw-bold text-light btn-warning text-capitalize" href="{{ url('customers-api') }}">customers data API</a>
    </div>
</x-app-layout>
@endsection
