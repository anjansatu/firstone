@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')
<div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow">
    <h1 class="text-3xl font-bold mb-6 text-indigo-700">Admin Dashboard</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-indigo-50">
                <tr>
                    <th class="px-4 py-2 text-left text-xs font-medium text-indigo-600 uppercase tracking-wider">
                        Podcast Name
                    </th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-indigo-600 uppercase tracking-wider">
                        Duration
                    </th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-indigo-600 uppercase tracking-wider">
                        Category
                    </th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-indigo-600 uppercase tracking-wider">
                        Latest Episode
                    </th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-indigo-600 uppercase tracking-wider">
                        Average Duration
                    </th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-indigo-600 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($podcasts as $podcast)
                <tr>
                    <td class="px-4 py-2 whitespace-nowrap">{{ $podcast['name'] }}</td>
                    <td class="px-4 py-2">{{ $podcast['duration'] }}</td>
                    <td class="px-4 py-2">{{ $podcast['category'] }}</td>
                    <td class="px-4 py-2">{{ $podcast['latest'] }}</td>
                    <td class="px-4 py-2">{{ $podcast['average'] }}</td>
                    <td class="px-4 py-2"><a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
