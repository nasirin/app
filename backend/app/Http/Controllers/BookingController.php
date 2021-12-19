<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $booking = Bookings::all();

        return response()->json([
            'status' => 'success',
            'data' => $booking
        ]);
    }
}
