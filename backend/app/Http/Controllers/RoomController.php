<?php

namespace App\Http\Controllers;

use App\Models\Fasilities;
use App\Models\RoomFasility;
use App\Models\Rooms;
use Illuminate\Database\Query\Builder;
// use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    public function index(Request $request)
    {
        $room = Rooms::with('RoomFasilities.fasilities');

        if ($request->has('status')) {
            $room->where('status', $request['status']);
        }

        if ($request->has('city')) {
            $room->where('location', $request['city']);
        }

        if ($request->has('minPrice')) {
            $room->where('price', '<=', $request['minPrice']);
        }
        if ($request->has('gender')) {
            $room->where('type', $request['gender']);
        }

        if ($request->has('fasility')) {
            $room->whereRelation('RoomFasilities.fasilities', 'fasilities_id', '=', $request['fasility']);
        }

        return response()->json([
            'status' => 'success',
            'data' => $room->get()
        ]);
    }

    public function show($id)
    {
        $room = Rooms::where('id', $id)->with( 'RoomFasilities.fasilities')->first();

        return response()->json([
            'status' => 'success',
            'data' => $room
        ]);
    }

    public function destroy($id)
    {
        $room = Rooms::findOrFail($id);
        $room->delete();

        return response()->json([
            'status' => 'success',
            'message' => "Room data successfully deleted"
        ]);
    }

    public function store(Request $request)
    {
        $rule = [
            "no_room" => 'required|unique:rooms',
            'location' => 'required',
            'type' => 'required|in:male,female',
            "status" => 'required|in:available, unavailable',
            "room_size" => 'required',
            "map" => 'required',
            "price" => 'required|integer',
            'thumbnail' => 'required',
            'gallery.*' => 'required',
            'fasilities_id' => 'required'
        ];

        $room = $request->all();

        $validate = Validator::make($room, $rule);

        if ($validate->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validate->errors()
            ]);
        }

        $result = Rooms::create($room);

        foreach ($request->fasilities_id as $key => $value) {
            $fasility = [
                'rooms_id' => $result->id,
                'fasilities_id' => $value
            ];

            RoomFasility::create($fasility);
        }


        return response()->json([
            'status' => 'success',
            'message' => 'Room data successfully created',
            // 'data' => $result
        ]);
    }

    public function change(Request $request, $id)
    {
        $room = Rooms::findOrFail($id);
        $rule = [
            "type" => 'in:male,female',
            "status" => 'in:available,unavailable',
        ];

        $data = $request->all();

        $validate = Validator::make($data, $rule);

        if ($validate->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validate->errors()
            ]);
        }

        $room->fill($data);
        $room->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Room data successfully updated'
        ]);
    }

    // public function search(Request $request)
    // {
    //     $room = Rooms::with('RoomFasilities.fasilities');

    //     if ($request->has('status')) {
    //         $room->where('status', $request['status']);
    //     }

    //     if ($request->has('city')) {
    //         $room->where('location', $request['city']);
    //     }

    //     if ($request->has('minPrice')) {
    //         $room->where('price', '<=', $request['minPrice']);
    //     }

    //     return response()->json([
    //         'request' => $request->all(),
    //         'room' => $room->get(),
    //     ]);
    // }
}
