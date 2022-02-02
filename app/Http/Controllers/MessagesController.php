<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Room;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function create(Room $room)
    {
        return view('messages.create', ['room' => $room]);
    }

    public function store(Request $request, Room $room)
    {
        $validated = $request->validate([
            'content' => 'required',
        ]);
        $message = $room->messages()->create($validated);

        return redirect()->route('rooms.show', $room);
    }

    public function show(Message $message)
    {
        return view('messages.show', ['message' => $message]);
    }

    public function edit(Message $message)
    {
        return view('messages.edit', ['message' => $message]);
    }

    public function update(Request $request, Message $message)
    {
        $validated = $request->validate([
            'content' => 'required',
        ]);
        $message->update($validated);

        return redirect()->route('rooms.show', $message->room);
    }

    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->route('rooms.show', $message->room);
    }
}
