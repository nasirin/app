<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomerAuthController extends Controller
{
    public function login(Request $request)
    {
        $rule = ['email' => 'required|email', "password" => 'required'];
        $data = $request->all();
        
        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            return response()->json([
                'stauts' => 'error',
                'message' => $validator->errors()
            ]);
        }

        $email = Customers::where('email', $request['email'])->first();

        if ($email === null) {
            return response()->json([
                'status' => 'error',
                'message' => 'Email or Password Wrong'
            ]);
        }

        $password = Hash::check($request['password'], $email['password']);

        if (!$password) {
            return response()->json([
                'status' => 'error',
                'message' => 'Email or Password Wrong'
            ]);
        }

        return response()->json([
            'status' => 'success',
            'data' => $email
        ]);
    }
}
