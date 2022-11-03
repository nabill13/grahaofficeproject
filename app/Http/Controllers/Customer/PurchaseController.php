<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Paytype;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('id', auth()->user()->id)->first();
        $paytype = Paytype::orderBy('name')->get();
        $room = Room::find($request->room_id);

        $date_in = date_create($request->date_in . ' ' . $request->time_in);
        $date_out = date_create($request->date_end . ' ' . $request->time_end);
        $diff = date_diff($date_in, $date_out);
        $minutes = $diff->days * 24 * 60;
        $minutes += $diff->h * 60;
        $minutes += $diff->i;
        $biaya = (round($minutes/60, 1) * $room->price);
        $biaya_rupiah = "Rp " . number_format($biaya, 0, ',', '.');
        
        return view('customers.purchase.index', [
            'title' => 'Purchase',
            'nvb' => 'rooms',
            'user' => $user,
            'paytype' => $paytype,
            'room_id' => $request->room_id,
            'date_in' => $date_in,
            'date_out' => $date_out,
            'total' => $biaya,
            'total_rp' => $biaya_rupiah,
            'qty' => $request->qtyInput
        ]); 
    }

    public function finish(Request $request)
    {
        DB::beginTransaction();
        $order = new Order;
        $order->user_id = $request->user_id;
        $order->room_id = $request->room_id;
        $order->datetime_in = $request->date_in;
        $order->datetime_out = $request->date_out;
        $order->guest = $request->guest;
        $order->save();

        $payment = new Payment;
        $payment->order_id = $order->id;
        $payment->paytype_id = $request->paytype;
        $payment->total = $request->total;
        $payment->save();
        DB::commit();

        return view('customers.purchase.finish', [
            'title' => 'Purchase',
            'nvb' => 'rooms'
        ]);
    }    
}
