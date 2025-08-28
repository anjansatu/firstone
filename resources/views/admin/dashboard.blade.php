<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white/70 overflow-hidden shadow-xl sm:rounded-lg backdrop-blur">
                <div class='p-6 text-gray-900'>
                    {{ __("You're logged in as admin!") }}
                    <a href='{{ route('admin.profile') }}' class='text-blue-600 underline ml-2'>{{ __('View Profile') }}</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
