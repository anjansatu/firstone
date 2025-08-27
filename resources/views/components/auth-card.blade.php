<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white/70 backdrop-blur shadow-xl overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
