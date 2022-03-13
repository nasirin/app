<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    protected $fillable = ['customers_id', 'rooms_id', 'code', 'check_in', 'check_out', 'guest', 'payment_type', 'payment_status', 'cost', 'rental_type', 'note', 'file_payment'];
    protected $hidden = ['created_at', 'updated_at'];

    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }

    public function room()
    {
        return $this->belongsTo(Rooms::class);
    }

    public function BookingAdditional()
    {
        return $this->hasMany(BookingAdditional::class, 'booking_id');
    }

    public function billing()
    {
        return $this->hasMany(Billing::class, 'booking_id');
    }
}
