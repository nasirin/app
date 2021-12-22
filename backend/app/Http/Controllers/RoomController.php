<?php

namespace App\Http\Controllers;

use App\Models\Fasilities;
use App\Models\RoomFasility;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    public function index()
    {
        $room = Rooms::with('RoomFasilities.fasilities')->get();

        return response()->json([
            'status' => 'success',
            'data' => $room
        ]);
    }

    public function show($id)
    {
        $room = Rooms::findOrFail($id);

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
            'data' => "Room data successfully deleted"
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
            "gallery" => 'required',
            "price_monthly" => 'required|integer',
            "thumbnail" => "required",
            // 'fasilities_id' => 'required|integer'
        ];

        $room = $request->all();

        $validate = Validator::make($room, $rule);

        if ($validate->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validate->errors()
            ]);
        }

        if ($request->hasfile('gallery')) {
            foreach ($request->file('gallery') as $key => $file) {
                $path = $file->store('/gallery');
                $insert[$key]['path'] = $path;
            }
        }
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $store = $thumbnail->store('/gallery/thumbnail');
            $img = $store;
        }

        $room['gallery'] = $insert;
        $room['thumbnail'] = $img;

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
            'data' => $result
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
}
