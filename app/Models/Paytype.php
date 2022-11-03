<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paytype extends Model
{
    use HasFactory;

    protected $table = 'paytype';

    public function payment()
    {
        return $this->hasOne(Payment::class, 'paytype_id');
    }
}
