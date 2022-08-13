<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\BookingAdditional;
use App\Models\Bookings;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function index(Request $request)
    {
        $billing = Billing::with('booking.customer', 'booking.room');

        if ($request->has('status')) {
            $billing->where('payment_status', $request['status']);
        }

        if ($request->has('checkin')) {
            $billing->where('payment_type', $request['checkin']);
        }

        return response()->json($billing->get(), 200);
    }

    public function show($id)
    {
        $billing = Billing::with('booking.customer', 'booking.room', 'booking.BookingAdditional')->find($id);
        $booking = Bookings::with('customer', 'BookingAdditional', 'billing', 'room')->find($billing['booking_id']);
        $totalcost = Bookings::withSum('BookingAdditional', 'cost')->find($billing['booking_id']);
        $total = $totalcost['cost'] + $totalcost['booking_additional_sum_cost'];

        return response()->json([
            'booking' => $booking,
            'total' => $total
        ], 200);
    }

    public function destroy($id)
    {
        $billing = Billing::findOrFail($id);
        $billing->delete();

        return response()->json('data terhapus', 200);
    }
}
