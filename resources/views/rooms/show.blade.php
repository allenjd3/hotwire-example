<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Room {$room->name}") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col gap-2">
                    @include('rooms._room', ['room' => $room])

                    @foreach ($messages as $message)
                        @include('messages._message', [ 'message' => $message ])
                    @endforeach

                    <div class="my-2">
                        <a href="{{ route('rooms.messages.create', $room) }}" class="py-2 px-4 bg-gray-800 text-white">Create New Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
