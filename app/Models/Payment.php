<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function paytype()
    {
        return $this->belongsTo(Paytype::class, 'paytype_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function total_rp()
    {
        $hasil_rupiah = "Rp " . number_format($this->total, 0, ',', '.');
        return $hasil_rupiah;
    }

    public function total_tax_rp()
    {
        $hasil_rupiah = "Rp " . number_format($this->total + 5000, 0, ',', '.');
        return $hasil_rupiah;
    }
}
