<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilities extends Model
{
    use HasFactory;
    protected $fillable = ['fasility', 'icon'];
    protected $hidden = ['created_at', 'updated_at'];
}
