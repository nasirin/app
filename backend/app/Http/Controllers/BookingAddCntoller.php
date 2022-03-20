<?php

namespace App\Http\Controllers;

use App\Models\BookingAdditional;
use App\Models\Bookings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingAddCntoller extends Controller
{
    public function store(Request $request)
    {
        $rule = [
            'booking_id' => 'required|integer',
            'additional' => 'required|unique:booking_additionals',
            'cost' => 'required|integer'
        ];

        $data = $request->all();

        $validate = Validator::make($data, $rule);

        if ($validate->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validate->errors()
            ]);
        }

        Bookings::findOrFail($request->booking_id);
        BookingAdditional::create($data);

        return response()->json([
            'status' => 'success',
            'message' => 'Your addition has been saved'
        ]);
    }

    public function update(Request $request, $id)
    {
        $rule = [
            'cost' => 'integer'
        ];

        $data = $request->all();

        $validate = Validator::make($data, $rule);

        if ($validate->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validate->errors()
            ]);
        }

        $badd = BookingAdditional::findOrFail($id);
        $badd->fill($data);
        $badd->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Your addition has been updated'
        ]);
    }

    public function destroy($id)
    {
        $badd = BookingAdditional::findOrFail($id);
        $badd->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Your addition has been deleted'
        ]);
    }

    public function show($id)
    {
        $add = BookingAdditional::find($id);
        return response()->json([
            'data' => $add
        ]);
    }

    public function getBybooking($id)
    {
        $add = BookingAdditional::where('booking_id', $id)->get();
        return response()->json([
            'data' => $add
        ]);
    }
}
