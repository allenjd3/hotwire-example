<div class="flex gap-2 border p-4">
    <div><a href="{{ route('messages.show', $message) }}">{{ $message->content }}</a></div>
    <div><a href="{{ route('messages.edit', $message) }}">Edit</a></div>
    <div>
        <form action="{{ route('messages.destroy', $message) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
    </div>
</div>
