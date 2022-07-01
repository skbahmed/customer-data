@extends('layouts.main')
@section('page-title', 'All Customers Data')
@section('main-container')
<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="container">
        <h1 class="text-capitalize text-center py-5 h1">customer data</h1>
        <table class="table table-striped bg-light table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Mobile</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                    <th scope="row">{{ $customer->id }}</th>
                    <td class="text-capitalize">{{ $customer->name }}</td>
                    <td class="text-lowercase">{{ $customer->email }}</td>
                    <td class="text-capitalize">{{ $customer->address }}</td>
                    <td>{{ date('d-M-Y', strtotime($customer->dob)); }}</td>
                    <td>{{ $customer->mobile }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $customers->links() }}
    </div>
</x-app-layout>
@endsection