@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto p-6 mt-6 bg-white rounded shadow">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Customers</h1>
        <a href="{{ route('customers.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            + Add Customer
        </a>
    </div>

    <table class="min-w-full bg-white">
        <thead class="bg-gray-100">
            <tr>
                <th class="py-2 px-4 border-b text-left">Name</th>
                <th class="py-2 px-4 border-b text-left">Email</th>
                <th class="py-2 px-4 border-b text-left">Phone</th>
                <th class="py-2 px-4 border-b text-left">Company</th>
                <th class="py-2 px-4 border-b text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr class="border-b hover:bg-gray-50">
                <td class="py-2 px-4">{{ $customer->name }}</td>
                <td class="py-2 px-4">{{ $customer->email }}</td>
                <td class="py-2 px-4">{{ $customer->phone }}</td>
                <td class="py-2 px-4">{{ $customer->company }}</td>
                <td class="py-2 px-4">
                    <a href="{{ route('customers.edit', $customer) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>

                    <form action="{{ route('customers.destroy', $customer) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="text-red-600 hover:text-red-900">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
