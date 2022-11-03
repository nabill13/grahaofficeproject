<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $order = Order::orderBy('created_at', 'desc')->get();

        return view('admin.bookings.index', [
            'title' => 'Bookings',
            'nvb' => 'bookings',
            'order' => $order
        ]);
    }

    public function approve($id)
    {
        $payment = Payment::find($id);
        $payment->status = 1;
        $payment->save();

        return redirect('/admin/bookings');
        
    }

    public function cancel($id)
    {
        $payment = Payment::find($id);
        $payment->status = 2;
        $payment->save();

        return redirect('/admin/bookings');
    }
}
