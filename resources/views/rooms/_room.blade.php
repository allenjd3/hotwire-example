<div class="border p-4">
    <div><a href="{{ route('rooms.show', $room) }}">{{ $room->name }}</a></div>
    <div><a href="{{ route('rooms.edit', $room) }}">Edit</a></div>
    @if (! request()->routeIs('rooms.index'))
        <div><a href="{{ route('rooms.index') }}">Back</a></div>
    @endif
</div>
