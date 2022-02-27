<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employees::all();
        return  response()->json([
            'status' => 'success',
            'data' => $employee
        ]);
    }

    public function show($id)
    {
        $employee = Employees::findOrFail($id);
        return  response()->json([
            'status' => 'success',
            'data' => $employee
        ]);
    }

    public function destroy($id)
    {
        $employee = Employees::findOrFail($id);
        $employee->delete();
        return  response()->json([
            'status' => 'success',
            'message' => "employee data successfully deleted"
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'fullname' => 'required|string',
            'phone' => 'required|integer',
            'email' => 'required|unique:employees|email',
            'password' => 'required|string|min:6'
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ]);
        }

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('employees');
        }

        $password = Hash::make($request->password);
        $data['password'] = $password;
        Employees::create($data);

        return response()->json([
            'status' => 'success',
            'message' => 'employee data successfully saved',
        ]);
    }

    public function change(Request $request, $id)
    {
        $employee = Employees::findOrFail($id);

        $rules = [
            'fullname' => 'string',
            'phone' => 'integer',
            'email' => 'email',
            'password' => 'string|min:6',
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

        $employee->fill($data);
        $employee->save();

        return response()->json([
            'status' => 'success',
            'message' => 'employee data successfully changed',
        ]);
    }
}
