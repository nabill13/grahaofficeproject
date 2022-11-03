<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $rooms = Room::orderBy('name')->limit(6)->get();

        return view('customers.index', [
            'title' => 'Booking Meeting Rooms',
            'nvb' => 'home',
            'rooms' => $rooms
        ]);
    }
}
