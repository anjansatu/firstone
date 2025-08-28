<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-8 space-y-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <div class="text-sm text-gray-500 dark:text-gray-400">{{ __('Users') }}</div>
                <div class="mt-2 text-2xl font-bold text-gray-800 dark:text-gray-100">1,200</div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <div class="text-sm text-gray-500 dark:text-gray-400">{{ __('Revenue') }}</div>
                <div class="mt-2 text-2xl font-bold text-gray-800 dark:text-gray-100">$9,750</div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <div class="text-sm text-gray-500 dark:text-gray-400">{{ __('Orders') }}</div>
                <div class="mt-2 text-2xl font-bold text-gray-800 dark:text-gray-100">320</div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <div class="text-sm text-gray-500 dark:text-gray-400">{{ __('Tickets') }}</div>
                <div class="mt-2 text-2xl font-bold text-gray-800 dark:text-gray-100">24</div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">{{ __('Analytics') }}</h3>
                <div class="h-48 flex items-center justify-center text-gray-400 dark:text-gray-500">{{ __('Chart Placeholder') }}</div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">{{ __('Recent Activity') }}</h3>
                <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                    <li class="py-2 text-gray-600 dark:text-gray-300">{{ __('No recent activity.') }}</li>
                </ul>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">{{ __('Quick Actions') }}</h3>
            <div class="flex space-x-4">
                <a href="#" class="px-4 py-2 bg-indigo-600 text-white rounded-md">{{ __('Add User') }}</a>
                <a href="#" class="px-4 py-2 bg-green-600 text-white rounded-md">{{ __('Generate Report') }}</a>
                <a href='{{ route('admin.profile') }}' class='px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 rounded-md'>{{ __('View Profile') }}</a>
            </div>
        </div>
    </div>
</x-app-layout>
