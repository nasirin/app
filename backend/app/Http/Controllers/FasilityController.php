<?php

namespace App\Http\Controllers;

use App\Models\Fasilities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FasilityController extends Controller
{
    public function index()
    {
        $fasilty = Fasilities::all();
        return response()->json([
            'status' => 'success',
            'data' => $fasilty
        ]);
    }

    public function show($id)
    {
        $fasilty = Fasilities::findOrFail($id);
        return response()->json([
            'status' => 'success',
            'data' => $fasilty
        ]);
    }

    public function destroy($id)
    {
        $fasilty = Fasilities::findOrFail($id);
        $fasilty->delete();
        return response()->json([
            'status' => 'success',
            'message' => "Data has been deleted"
        ]);
    }

    public function store(Request $request)
    {
        $rule = ['fasility' => 'required|unique:fasilities', 'icon' => 'required'];
        $data = $request->all();
        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ]);
        }

        Fasilities::create($data);
        return response()->json([
            'status' => 'success',
            'message' => 'fasilities data successfully created',
        ]);
    }

    public function change(Request $request, $id)
    {
        $fasilty = Fasilities::findOrFail($id);
        $data = $request->all();
        $fasilty->fill($data);
        $fasilty->save();

        return response()->json([
            'status' => 'success',
            'message' => 'fasilities data successfully updated',
        ]);
    }
}
