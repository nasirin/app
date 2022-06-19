<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function graceBilling()
    {
        $graceBilling = Billing::where('payment_status', 'grace')->with('booking.customer','booking.room')->get();
        return response()->json([
            'data' => $graceBilling
        ]);
    }
}
