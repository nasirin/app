<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;
    protected $fillable = ['booking_id', 'payment_date', 'payment_due', 'payment_status', 'payment_type', 'total'];

    public function booking()
    {
        return $this->belongsTo(Bookings::class, 'booking_id', 'id');
    }
}
