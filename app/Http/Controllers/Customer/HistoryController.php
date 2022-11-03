<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $order = Order::where('user_id', auth()->user()->id)->get();

        return view('customers.history.index', [
            'title' => 'History',
            'nvb' => 'history',
            'order' => $order
        ]);
    }

    public function invoice($id)
    {
        $order = Order::find($id);

        return view('customers.history.invoice', [
            'title' => $order->room->name,
            'order' => $order
        ]);
    }
}
