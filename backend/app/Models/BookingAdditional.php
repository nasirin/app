<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingAdditional extends Model
{
    use HasFactory;
    protected $fillable = ['booking_id', 'additional', 'cost'];
    protected $hidden = ['created_at', 'updated_at'];
}
