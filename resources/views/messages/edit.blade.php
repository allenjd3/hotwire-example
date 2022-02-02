<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Message') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('messages.update', $message) }}" method="post">
                        <div class="flex flex-col gap-2">
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="content">Content:</label>
                                <textarea id="content" name="content">{{ $message->content ?? old('content') }}</textarea>
                            </div>
                            <div>
                                <button type="submit" class="bg-gray-800 text-white py-2 px-4">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
