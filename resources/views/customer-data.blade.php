@extends('layouts.main')
@section('page-title', 'All Customers Data')
@section('main-container')
<x-app-layout>
    <x-slot name="header">
        <x-auth-session-status :status="session('message')" />
    </x-slot>
    <div class="container pb-5">
        <h1 class="text-capitalize text-center py-5 h1">customer data</h1>
        <div class="overflow-scroll" style="max-height: 80vh">
            <table class="table table-striped bg-light table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Action</th>
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
                        <td class="text-center"><a href="{{ url('delete-customer/' . $customer->id) }}" class="text-danger h5" title="Delete this customer info"><i class="bi bi-trash3-fill"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $customers->links() }}
    </div>
</x-app-layout>
@endsection