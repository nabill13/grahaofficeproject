<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::orderBy('name')->get();

        return view('customers.rooms.index', [
            'title' => 'Rooms',
            'nvb' => 'rooms',
            'rooms' => $rooms
        ]);
    }

    public function detail($id)
    {
        $room = Room::find($id);

        return view('customers.rooms.detail', [
            'title' => $room->name,
            'nvb' => 'rooms',
            'room' => $room
        ]);
    }
}
