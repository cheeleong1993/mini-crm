@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto p-6 mt-6 bg-white rounded shadow">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Leads</h1>
        <a href="{{ route('leads.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            + Add Lead
        </a>
    </div>

    <table class="min-w-full bg-white">
        <thead class="bg-gray-100">
            <tr>
                <th class="py-2 px-4 border-b text-left">Lead Name</th>
                <th class="py-2 px-4 border-b text-left">Customer</th>
                <th class="py-2 px-4 border-b text-left">Source</th>
                <th class="py-2 px-4 border-b text-left">Status</th>
                <th class="py-2 px-4 border-b text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($leads as $lead)
            <tr class="border-b hover:bg-gray-50">
                <td class="py-2 px-4">{{ $lead->lead_name }}</td>
                <td class="py-2 px-4">{{ $lead->customer->name }}</td>
                <td class="py-2 px-4">{{ $lead->source }}</td>
                <td class="py-2 px-4">{{ $lead->status }}</td>
                <td class="py-2 px-4">
                    <a href="{{ route('leads.edit', $lead) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>

                    <form action="{{ route('leads.destroy', $lead) }}" method="POST" class="inline">
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
