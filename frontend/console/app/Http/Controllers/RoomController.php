<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = Http::get('http://localhost:8000/api/room')->json();
        // dd($res);
        $message = null;

        if ($res['status'] == 'error') {
            $message = $res['message'];
        }

        $data = [
            'message' => $message,
            'rooms' => $res['data']
        ];

        return view('pages.rooms.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $res = Http::get('http://localhost:8000/api/fasility')->json();

        $data = [
            'fasilities' => $res['data'],
        ];

        return view('pages.rooms.tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $room = Http::attach($request->file('thumbnail'), file_get_contents($request['thumbnail']))->post('http://localhost:8000/api/room', $data);

        dd($room->json());
        // attach('image', file_get_contents($request->file('profile_image')->getRealPath()))->

        // if ($room['status'] == 'error') {
        //     return redirect()->back()->withErrors($room['message'])->withInput();
        // }

        // dd($room);

        // return redirect('/room')->withSuccess();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.rooms.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd('halaman ubah');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Http::delete('http://localhost:8000/api/room/' . $id);
        dd($res->json());
    }
}
