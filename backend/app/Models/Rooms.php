<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;
    protected $fillable = [
        "no_room",
        'location',
        'type',
        "status",
        "room_size",
        "map",
        "gallery",
        "price_monthly",
        "price_years",
        "thumbnail",
        "url",
    ];

    protected $hidden = ['created_at', 'updated_at'];
    protected $casts = ['gallery' => 'array', 'price' => 'array'];

    public function RoomFasilities()
    {
        return $this->hasMany(RoomFasility::class);
    }
}
