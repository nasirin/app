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
        "price",
        "thumbnail",
        "url",
    ];

    protected $hidden = ['created_at', 'updated_at'];
    protected $casts = ['gallery' => 'array'];

    public function RoomFasilities()
    {
        return $this->hasMany(RoomFasility::class);
    }

    public function fasilites()
    {
        return $this->hasMany(Fasilities::class);
    }
}
