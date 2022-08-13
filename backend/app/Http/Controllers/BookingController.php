<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\BookingAdditional;
use App\Models\Bookings;
use App\Models\Customers;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function index()
    {
        $booking = Bookings::with(['customer', 'room', 'BookingAdditional', 'billing'])->get();

        return response()->json([
            'status' => 'success',
            'data' => $booking
        ]);
    }

    public function show($id)
    {
        $booking = Bookings::with(['room', 'BookingAdditional', 'customer'])->find($id);

        return response()->json([
            'status' => 'success',
            'data' => $booking
        ]);
    }

    public function store(Request $request)
    {
        $rule = [
            'customers_id' => 'required|integer',
            'rooms_id' => 'required|integer',
            'check_in' => 'required',
            'guest' => 'required',
            'payment_type' => 'required|in:on check in,transfer',
            'cost' => 'required|integer',
            'rental_type' => 'required|in:month, years'
        ];

        $data = $request->all();

        $validate = Validator::make($data, $rule);

        if ($validate->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validate->errors()
            ]);
        }

        // cek ketersediaan data
        Customers::findOrFail($request['customers_id']);
        Rooms::findOrFail($request['rooms_id']);

        $data['code'] = uniqid();
        // simpan data booking 
        $booking  = Bookings::create($data);

        // cek ada tambahan apa tidak
        if ($request->tambahan) {
            BookingAdditional::create([
                'booking_id' => $booking->id,
                'additional' => $request->tambahan,
                'cost' => $request->cost
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'The order has been saved, immediately make a payment at least 1 hour after ordering.',
            'id' => $booking['id']
        ]);
    }

    public function newBooking()
    {
        $newbooking = Bookings::where('payment_status', 'waiting confirm')->with(['customer', 'room'])->get();

        return response()->json([
            'data' => $newbooking
        ]);
    }

    public function confirm(Request $request, $id)
    {
        $data = $request->all();
        $data['payment_status'] = 'waiting confirm';

        $booking = Bookings::find($id);
        $booking->fill($data);
        $booking->save();

        return response()->json([
            'res' => $booking,
            'message' => 'Booking terkonfirmasi, admin akan memproses pesanan anda'
        ], 200);
    }

    public function adminConfirmPayment($id)
    {
        $data = ['payment_status' => 'success'];
        $booking = Bookings::find($id);
        $booking->fill($data);
        $booking->save();

        $payment_due = '';
        if ($booking['rental_type'] == 'month') {
            $payment_due = '+1 month';
        } else {
            $payment_due = '+1 year';
        }

        $billing = [
            'booking_id' => $id,
            'payment_date' => date('ymd', strtotime($booking['check_in'])),
            'payment_due' => date('ymd', strtotime($payment_due, strtotime($booking['check_in']))),
            'payment_status' => 'success',
            'payment_type' => $booking['payment_type'],
            'total' => $booking['cost']
        ];

        $billing = Billing::create($billing);

        return response()->json([
            'res' => $booking,
            'message' => 'Booking terkonfirmasi',
            'booking' => $booking,
            'billing' => $billing
        ], 200);
    }
}
