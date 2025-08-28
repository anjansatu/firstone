<aside class="hidden sm:block w-64 bg-white dark:bg-gray-900 border-r border-gray-100 dark:border-gray-700 min-h-screen">
    <nav class="mt-6 space-y-1">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">
            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M3 9h18M3 15h18M3 21h18" />
            </svg>
            <span>{{ __('Dashboard') }}</span>
        </a>
        <a href="{{ route('admin.users') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">
            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m9-4.13a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <span>{{ __('Users') }}</span>
        </a>
        <a href="{{ route('admin.analytics') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">
            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19V10M7 19V4M15 19V14M19 19V7" />
            </svg>
            <span>{{ __('Analytics') }}</span>
        </a>
        <a href="{{ route('admin.settings') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">
            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-1.14 1.961-1.14 2.26 0a1.724 1.724 0 002.592 1.01c1.03-.594 2.217.593 1.623 1.623a1.724 1.724 0 001.01 2.592c1.14.3 1.14 1.961 0 2.26a1.724 1.724 0 00-1.01 2.592c.594 1.03-.593 2.217-1.623 1.623a1.724 1.724 0 00-2.592 1.01c-.3 1.14-1.961 1.14-2.26 0a1.724 1.724 0 00-2.592-1.01c-1.03.594-2.217-.593-1.623-1.623a1.724 1.724 0 00-1.01-2.592c-1.14-.3-1.14-1.961 0-2.26a1.724 1.724 0 001.01-2.592c-.594-1.03.593-2.217 1.623-1.623a1.724 1.724 0 002.592-1.01z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span>{{ __('Settings') }}</span>
        </a>
    </nav>
</aside>
