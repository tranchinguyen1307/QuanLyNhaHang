<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone',
        'guest_count',
        'reservation_time',
        'status',
        'deposit',
        'total_amount',
    ];

    public function items()
    {
        return $this->hasMany(ReservationItem::class);
    }
}
