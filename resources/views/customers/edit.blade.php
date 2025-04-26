@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white rounded shadow mt-6">
    <h1 class="text-2xl font-bold mb-6">Edit Customer</h1>

    <form action="{{ route('customers.update', $customer) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block font-medium text-sm text-gray-700">Name</label>
                <input type="text" name="name" value="{{ old('name', $customer->name) }}" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
            </div>

            <div>
                <label class="block font-medium text-sm text-gray-700">Email</label>
                <input type="email" name="email" value="{{ old('email', $customer->email) }}" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
            </div>

            <div>
                <label class="block font-medium text-sm text-gray-700">Phone</label>
                <input type="text" name="phone" value="{{ old('phone', $customer->phone) }}" class="form-input rounded-md shadow-sm mt-1 block w-full">
            </div>

            <div>
                <label class="block font-medium text-sm text-gray-700">Company</label>
                <input type="text" name="company" value="{{ old('company', $customer->company) }}" class="form-input rounded-md shadow-sm mt-1 block w-full">
            </div>
        </div>

        <div class="flex justify-end mt-6">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                Update Customer
            </button>
        </div>
    </form>
</div>
@endsection
