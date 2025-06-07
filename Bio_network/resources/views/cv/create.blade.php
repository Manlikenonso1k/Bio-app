<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Create Your CV</h2>
    </x-slot>

    <div class="p-4">
        <form method="POST" action="{{ route('cv.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block">Full Name</label>
                <input type="text" name="name" class="w-full border rounded p-2" required>
            </div>

            <div class="mb-4">
                <label class="block">Email</label>
                <input type="email" name="email" class="w-full border rounded p-2" required>
            </div>

            <div class="mb-4">
                <label class="block">Summary</label>
                <textarea name="summary" class="w-full border rounded p-2" required></textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save CV</button>
        </form>
    </div>
</x-app-layout>
