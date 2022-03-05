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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query['status'] = 'available';
        $room = Http::get($this->apibe . 'best', $query);
        $fasility = Http::get($this->apibe . 'fasility');
        $data = [
            'room' => $room['data'],
            'fasilities' => $fasility['data']
        ];

        return view('pages.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Http::get($this->apibe . 'room/' . $id)->json();
        $fasility = Http::get($this->apibe . 'fasility');
        $data = ['room' => $room['data'], 'fasilities' => $fasility['data']];
        return view('pages.detail-kos', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
