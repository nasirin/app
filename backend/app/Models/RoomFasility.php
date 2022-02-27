<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomFasility extends Model
{
    use HasFactory;

    protected $fillable = ['rooms_id', 'fasilities_id'];
    protected $hidden = ['created_at', 'updated_at'];

    public function fasilities()
    {
        return $this->belongsTo(Fasilities::class);
    }

    public function room()
    {
        return $this->belongsTo(Rooms::class);
    }
}
