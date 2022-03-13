<?php

namespace App\Http\Controllers;

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
        $booking = Bookings::find($id);

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
            // 'payment_status' => 'required|in:pending,success,cancel',
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
        Customers::findOrFail($request->customers_id);
        Rooms::findOrFail($request->rooms_id);

        $data['code'] = uniqid();
        // simpan data booking 
        $booking  = Bookings::create($data);

        // cek ada tambahan apa tidak
        if ($request->additional) {
            BookingAdditional::create([
                'booking_id' => $booking->id,
                'additional' => $request->additional,
                'cost' => $request->cost
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'The order has been saved, immediately make a payment at least 1 hour after ordering.'
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
        $data = [
            'payment_status' => 'waiting confirm',
            'file_payment' => $request->file_payment
        ];
        $booking = Bookings::findOrfail($id);
        $booking->fill($data);
        $booking->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Payment Success'
        ]);
    }
}
