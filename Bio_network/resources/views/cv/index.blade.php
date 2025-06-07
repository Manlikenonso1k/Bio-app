<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Your Saved CVs</h2>
    </x-slot>

    <div class="p-4">
        @if($cvs->isEmpty())
            <p>You have not created any CVs yet.</p>
        @else
            <ul class="space-y-2">
                @foreach($cvs as $cv)
                    <li class="border p-3 rounded">
                        <strong>{{ $cv->name }}</strong><br>
                        <small>{{ $cv->email }}</small><br>
                        <p class="mt-1">{{ $cv->summary }}</p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</x-app-layout>
