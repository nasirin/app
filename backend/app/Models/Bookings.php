<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'room_id', 'code', 'check_in', 'check_out', 'guest', 'payment_type', 'payment_status', 'cost', 'rental_type', 'note'];
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
        return $this->hasMany(BookingAdditional::class,'booking_id');
    }

    public function billing()
    {
        return $this->hasMany(Billing::class,'booking_id');
    }
}
