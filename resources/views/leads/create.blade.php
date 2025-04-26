@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white rounded shadow mt-6">
    <h1 class="text-2xl font-bold mb-6">Add Lead</h1>

    <form action="{{ route('leads.store') }}" method="POST">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block font-medium text-sm text-gray-700">Lead Name</label>
                <input type="text" name="lead_name" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
            </div>

            <div>
                <label class="block font-medium text-sm text-gray-700">Customer</label>
                <select name="customer_id" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block font-medium text-sm text-gray-700">Source</label>
                <input type="text" name="source" class="form-input rounded-md shadow-sm mt-1 block w-full">
            </div>

            <div>
                <label class="block font-medium text-sm text-gray-700">Status</label>
                <input type="text" name="status" class="form-input rounded-md shadow-sm mt-1 block w-full" value="New">
            </div>

            <div class="md:col-span-2">
                <label class="block font-medium text-sm text-gray-700">Notes</label>
                <textarea name="notes" rows="3" class="form-input rounded-md shadow-sm mt-1 block w-full"></textarea>
            </div>
        </div>

        <div class="flex justify-end mt-6">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                Save Lead
            </button>
        </div>
    </form>
</div>
@endsection
