<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\Service;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::orderBy('name')->get();

        return view('admin.rooms.index', [
            'title' => 'Rooms',
            'nvb' => 'rooms',
            'rooms' => $rooms
        ]);
    }

    public function create()
    {
        $services = Service::orderBy('name')->get();
        $roomtype = RoomType::orderBy('name')->get();

        return view('admin.rooms.create', [
            'title' => 'Rooms',
            'nvb' => 'rooms',
            'services' => $services,
            'roomtype' => $roomtype
        ]);
    }

    public function store(Request $request)
    {
        $image = '';
        $image = $request->file('image')->store('room-images');

        $room = new Room;
        $room->service_id = $request->service;
        $room->type_id = $request->roomtype;
        $room->name = $request->name;
        $room->facilities = $request->facilities;
        $room->description = $request->description;
        $room->ammount = $request->ammount;
        $room->price = $request->price;
        $room->image = $image;
        $room->save();

        return redirect('/admin/rooms');
    }

    public function edit($id)
    {
        $room = Room::find($id);
        $services = Service::orderBy('name')->get();
        $roomtype = RoomType::orderBy('name')->get();

        return view('admin.rooms.edit', [
            'title' => 'Rooms',
            'nvb' => 'rooms',
            'room' => $room,
            'services' => $services,
            'roomtype' => $roomtype
        ]);
    }

    public function update(Request $request)
    {
        $image = '';
        
        $room = Room::find($request->room_id);
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('room-images');
            
            if($room->image != null){
                Storage::delete($room->image);
            }

            $room->image = $image;
        }

        $room->name = $request->name;
        $room->facilities = $request->facilities;
        $room->description = $request->description;
        $room->ammount = $request->ammount;
        $room->price = $request->price;
        $room->service_id = $request->service;
        $room->type_id = $request->roomtype;
        $room->save();

        return redirect('/admin/rooms');
    }

    public function remove($id)
    {
        $room = Room::find($id);
        if ($room->image != null){
            Storage::delete($room->image);
        }
        $room->delete();

        return redirect('/admin/rooms');
    }
}
