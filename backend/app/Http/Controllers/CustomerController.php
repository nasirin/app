<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customers::all();
        return  response()->json([
            'status' => 'success',
            'data' => $customer
        ]);
    }

    public function show($id)
    {
        $customer = Customers::find($id)->with('booking', 'booking.BookingAdditional', 'booking.room', 'booking.billing')->first();
        return  response()->json([
            'status' => 'success',
            'data' => $customer
        ]);
    }

    public function destroy($id)
    {
        $customer = Customers::findOrFail($id);
        $customer->delete();
        return  response()->json([
            'status' => 'success',
            'message' => "customer data successfully deleted"
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            "first_name" => "required|string|min:3",
            "last_name" => "required|string|min:3",
            "nick_name" => "required|string|min:3",
            // "avatar"=> "kangsunat",
            "address" => "required|string|min:3",
            "phone" => "required|string|min:11|max:16",
            "email" => "required|email|unique:customers",
            // "identotity"=>"dfaaf",
            "password" => "required|string|min:6",
            "gender" => "required|in:male,female",
            "status" => "required|in:single,married",
            // "jobs"=>"student"
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ]);
        }

        // return "ok";

        $password = Hash::make($request->password);
        $data['password'] = $password;
        Customers::create($data);

        return response()->json([
            'status' => 'success',
            'message' => 'customer data successfully saved'
        ]);
    }

    public function change(Request $request, $id)
    {
        $customer = Customers::findOrFail($id);

        $rules = [
            "first_name" => "string|min:3",
            "last_name" => "string|min:3",
            "nick_name" => "string|min:3",
            // "avatar"=> "kangsunat",
            "address" => "string|min:3",
            "phone" => "string|min:11|max:16",
            // "email" => "email|unique:customers",
            // "identotity"=>"dfaaf",
            // 'password' => 'string|min:6',
            "gender" => "in:male,female",
            "status" => "in:single,married",
            // "jobs"=>"student"
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ]);
        }

        if ($request->password) {
            $password = Hash::make($request->password);
            $data['password'] = $password;
        }

        $customer->fill($data);
        $customer->save();

        return response()->json([
            'status' => 'success',
            'message' => 'customer data successfully changed',
        ]);
    }
}
