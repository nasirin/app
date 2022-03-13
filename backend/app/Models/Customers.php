<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'nick_name', 'avatar', 'address', 'phone', 'email', 'identity', 'password', 'gender', 'status', 'jobs'];
    protected $hidden = ['created_at', 'updated_at', 'password'];

    public function booking()
    {
        return $this->hasMany(Bookings::class);
    }
}
