<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function index()
    {
        $billing = Billing::with('booking', 'booking.room', 'booking.customer')->get();
        return response()->json([
            'status' => 'success',
            'data' => $billing
        ]);
    }

    public function graceBilling()
    {
        $graceBilling = Billing::where('payment_status', 'grace')->with('booking.customer', 'booking.room')->get();
        return response()->json([
            'data' => $graceBilling
        ]);
    }

    public function show($id)
    {
        $billing = Billing::with('booking', 'booking.room', 'booking.customer', 'booking.BookingAdditional')->find($id);

        return response()->json([
            'data' => $billing
        ]);
    }

    public function store($id)
    {
        $billing = Billing::with('booking')->find($id);

        if ($billing['booking']['rental_type'] == 'month') {
            $payment_due = date('ymd', strtotime('+1 month', strtotime(date('ymd'))));
        } else {
            $payment_due = date('ymd', strtotime('+1 year', strtotime(date('ymd'))));
        }

        $data = [
            'booking_id' => $billing['booking_id'],
            'payment_date' => date('ymd'),
            'payment_due' => $payment_due,
            'payment_status' => 'success',
            'payment_type' => 'on check in',
            'total' => $billing['booking']['cost']
        ];

        Billing::create($data);

        return response()->json(['msg' => "success"]);
    }

    public function destroy($id)
    {
        Billing::find($id)->delete();
        return response()->json(['msg' => 'success']);
    }

    public function showAllByIdBooking($id)
    {
        $billing = Billing::where('booking_id', $id)->get();
        return response()->json(['data' => $billing]);
    }
}
