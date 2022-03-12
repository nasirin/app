<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request, $id)
    {
        $data = [
            "request" => $request->all(),
            'id' => $id
        ];
        dd($data);
    }
}
