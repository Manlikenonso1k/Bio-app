<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Edit CV</h2>
    </x-slot>

    <div class="p-4">
        <form method="POST" action="{{ route('cv.update', $cv) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block">Full Name</label>
                <input type="text" name="name" value="{{ old('name', $cv->name) }}" class="w-full border rounded p-2" required>
            </div>

            <div class="mb-4">
                <label class="block">Email</label>
                <input type="email" name="email" value="{{ old('email', $cv->email) }}" class="w-full border rounded p-2" required>
            </div>

            <div class="mb-4">
                <label class="block">Summary</label>
                <textarea name="summary" class="w-full border rounded p-2" required>{{ old('summary', $cv->summary) }}</textarea>
            </div>

            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update CV</button>
        </form>

        <form method="POST" action="{{ route('cv.destroy', $cv) }}" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded" onclick="return confirm('Are you sure?')">Delete CV</button>
        </form>
    </div>
</x-app-layout>
