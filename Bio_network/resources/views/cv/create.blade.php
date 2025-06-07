<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Create Your CV</h2>
    </x-slot>

    <div class="p-4 max-w-md mx-auto">
        @if(session('success'))
            <div class="mb-4 p-3 bg-green-200 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('cv.store') }}">
            @csrf

            <div class="mb-4">
                <label for="name" class="block font-medium mb-1">Full Name</label>
                <input id="name" type="text" name="name" class="w-full border rounded p-2" value="{{ old('name') }}" required>
                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block font-medium mb-1">Email</label>
                <input id="email" type="email" name="email" class="w-full border rounded p-2" value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="summary" class="block font-medium mb-1">Summary</label>
                <textarea id="summary" name="summary" class="w-full border rounded p-2" required>{{ old('summary') }}</textarea>
                @error('summary')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Save CV
            </button>
        </form>
    </div>
</x-app-layout>
