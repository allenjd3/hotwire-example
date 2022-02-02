<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index()
    {
        return view('rooms.index', ['rooms' => Room::latest()->get()]);
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $room = Room::create($validated);
        return redirect()->route('rooms.index');
    }

    public function show(Room $room)
    {
        $messages = $room->messages;
        return view('rooms.show', [
            'room' => $room,
            'messages' => $messages,
        ]);
    }

    public function edit(Room $room)
    {
        return view('rooms.edit', ['room' => $room]);
    }

    public function update(Request $request, Room $room)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $room->update($validated);

        return redirect()->route('rooms.index');
    }

    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms.index');
    }
}
