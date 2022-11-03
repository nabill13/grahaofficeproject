<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function type()
    {
        return $this->belongsTo(RoomType::class, 'type_id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'id');
    }

    public function price_rp()
    {
        $hasil_rupiah = "Rp " . number_format($this->price, 0, ',', '.');
        return $hasil_rupiah; 
    }
}
