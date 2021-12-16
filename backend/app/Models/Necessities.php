<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Necessities extends Model
{
    use HasFactory;

    protected $fillable = ['necessity', 'cost', 'tanggal', 'pcs', 'total', 'file'];
    protected $hidden =['created_at','updated_at'];
}
