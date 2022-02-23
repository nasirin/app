<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Torann\GeoIP\Facades\GeoIP;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
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
        $location = GeoIP::getLocation($_SERVER['REMOTE_ADDR']);
        $room = Http::get($this->apibe . '/api/room')->json();
        if ($room['status'] == 'success') {
            $roomDefault = Http::get($this->apibe . '/api/room?status=available')->json();
        }

        $data = [
            'location' => $location->city,
            'carousel' => $room
        ];
        return view('pages.home', $data);
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
        //
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
}
