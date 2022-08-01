<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RoomController extends Controller
{
    protected $apibe;
    protected $apiconsole;
    public function __construct()
    {
        $this->apibe = env('API_BACKEND');
        $this->apiconsole = env('API_CONSOLE');
    }

    public function index()
    {
        $query['status'] = 'available';
        $room = Http::get($this->apibe . 'room', $query);
        $fasility = Http::get($this->apibe . 'fasility');
        $data = [
            'room' => $room['data'],
            'fasilities' => $fasility['data']
        ];

        return view('pages.list', $data);
    }

    public function show($id)
    {
        $room = Http::get($this->apibe . 'room/' . $id)->json();
        // dd($room);
        $fasility = Http::get($this->apibe . 'fasility');
        $data = ['room' => $room['data'], 'fasilities' => $fasility['data']];
        return view('pages.detail-kos', $data);
    }
    
    public function search(Request $request)
    {
        $search = $request->all();
        $room = Http::get($this->apibe . 'search', $search)->json();
        $fasility = Http::get($this->apibe . 'fasility');
        $data = ['room' => $room['data'], 'fasilities' => $fasility['data']];
        return view('pages.list', $data);
    }
}
