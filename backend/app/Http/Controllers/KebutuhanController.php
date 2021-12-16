<?php

namespace App\Http\Controllers;

use App\Models\Necessities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KebutuhanController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'data' => Necessities::all()
        ]);
    }

    public function show($id)
    {
        return response()->json([
            'status' => 'success',
            'data' => Necessities::find($id)
        ]);
    }

    public function store(Request $request)
    {
        $rule = [
            'necessity' => 'required',
            'cost' => 'required|integer',
            'tanggal' => 'required',
            'pcs' => 'required|integer'
        ];

        $data = $request->all();

        $validate = Validator::make($data, $rule);

        if ($validate->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validate->errors()
            ]);
        }
        $data['total'] = $request['cost'] * $request['pcs'];

        Necessities::create($data);

        return response()->json([
            'status' => 'success',
            'message' => 'data saved successfully'
        ]);
    }

    public function change(Request $request, $id)
    {
        $kebutuhan = Necessities::findOrFail($id);

        $data = $request->all();
        $data['total'] = $request['cost'] * $request['pcs'];

        $kebutuhan->fill($data);
        $kebutuhan->save();

        return response()->json([
            'status' => 'success',
            'message' => 'data changed successfully'
        ]);
    }

    public function destroy($id)
    {
        $kebutuhan = Necessities::findOrFail($id);

        $kebutuhan->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'data deleted successfully'
        ]);
    }
}
