<x-app-layout>
    {{-- Custom full header outside the slot for proper styling --}}
    {{-- Optional page header slot for smaller header text --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- Main dashboard content --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}

                    <div class="mt-4">
                        <a href="{{ route('cv.index') }}" 
                           class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                            View Saved CVs
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
