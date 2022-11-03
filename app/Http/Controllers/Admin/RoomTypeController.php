<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Mockery\Matcher\Type;

class RoomTypeController extends Controller
{
    public function index()
    {
        $roomtype = RoomType::orderBy('name')->get();

        return view('admin.roomtype.index', [
            'title' => 'Room Type',
            'nvb' => 'roomtype',
            'roomtype' => $roomtype
        ]);
    }

    public function create()
    {
        return view('admin.roomtype.create', [
            'title' => 'Room Type',
            'nvb' => 'roomtype'
        ]);
    }

    public function store(Request $request)
    {
        $roomtype = new RoomType;
        $roomtype->name = $request->name;
        $roomtype->save();

        return redirect('/admin/roomtype');
    }

    public function edit($id)
    {
        $roomtype = RoomType::find($id);

        return view('admin.roomtype.edit', [
            'title' => 'Room Type',
            'nvb' => 'roomtype',
            'roomtype' => $roomtype
        ]);
    }

    public function update(Request $request)
    {
        $roomtype = RoomType::find($request->id);
        $roomtype->name = $request->name;
        $roomtype->save();

        return redirect('/admin/roomtype');
    }

    public function remove($id)
    {
        $roomtype = RoomType::find($id);
        $roomtype->delete();

        return redirect('/admin/roomtype');
    }
}
