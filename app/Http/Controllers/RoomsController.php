<?php

namespace App\Http\Controllers;

use App\Models\Room;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index',[
            'rooms' => $rooms
        ]);
    }

    public function show(Room $room)
    {
        return view('rooms.chat', [
            'room' => $room,
        ]);
    }
}
