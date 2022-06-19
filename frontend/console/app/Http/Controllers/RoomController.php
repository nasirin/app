<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    protected $api;
    protected $url;
    protected $customer;

    public function __construct()
    {
        $this->api = env("API_BACKEND");
        $this->url = url('/storage') . '/';
        $this->customer = env('URL_CUSTOMER');
    }

    public function index(Request $request)
    {
        $status = $request->query('status');
        if ($status) {
            $res = Http::get($this->api . 'room?status=' . $status)->json();
        } else {
            $res = Http::get($this->api . 'room')->json();
        }

        $data = [
            'rooms' => $res['data'],
            'status' => $status,
            'customer' => $this->customer
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
        $res = Http::get($this->api . 'fasility')->json();

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
        $rule = [
            "no_room" => 'required',
            'location' => 'required',
            'type' => 'required|in:male,female',
            "status" => 'required|in:available,unavailable',
            "room_size" => 'required',
            "map" => 'required',
            "price" => 'required|integer',
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png|max:1024|dimensions:min_width=600,min_height=800',
            'gallery.*' => 'required|mimes:jpg,jpeg,png|max:1024|dimensions:min_width=500,min_height=300',
            'fasilities_id' => 'required'
        ];

        $data = $request->all();
        // dd($data);

        $validate = Validator::make($data, $rule);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }

        if ($request->hasfile('gallery')) {
            foreach ($request->file('gallery') as $key => $file) {
                $path = $file->store('gallery');
                $insert[$key]['path'] = $path;
            }
            $data['gallery'] = $insert;
        }
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $store = $thumbnail->store('/gallery/thumbnail');
            $img = $store;
            $data['thumbnail'] = $img;
            $data['url'] = url('/storage') . '/';
        }

        $room = Http::post($this->api . 'room', $data);
        if ($room['status'] == 'error') {
            return redirect()->back()->withErrors($room['message'])->withInput();
        }
        return redirect('/room')->with('message', $room['message']);
    }

    public function edit($id)
    {
        $fasilities = Http::get($this->api . 'fasility')->json();
        $room = Http::get($this->api . 'room/' . $id)->json();
        $data = [
            'fasilities' => $fasilities['data'],
            'rooms' => $room['data'],
        ];
        return view('pages.rooms.ubah', $data);
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
        $rule = [
            "no_room" => 'required',
            'location' => 'required',
            'type' => 'required|in:male,female',
            "status" => 'required|in:available,unavailable',
            "room_size" => 'required',
            "map" => 'required',
            "price" => 'required|integer',
            'thumbnail' => 'image|file|mimes:jpg,jpeg,png|max:1024',
            'gallery' => 'mimes:jpg,jpeg,png|max:1024',
        ];

        $data = $request->all();

        $validate = Validator::make($data, $rule);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }

        $gallery = Http::get($this->api . 'room/' . $id)->json();

        if ($request->hasfile('gallery')) {

            foreach ($gallery['data']['gallery'] as $key => $value) {
                Storage::delete($value['path']);
            }

            foreach ($request->file('gallery') as $key => $file) {
                $path = $file->store('gallery');
                $insert[$key]['path'] = $path;
            }
            $data['gallery'] = $insert;
            $data['url'] = $this->url;
        }

        if ($request->hasFile('thumbnail')) {
            Storage::delete($gallery['data']['thumbnail']);
            $thumbnail = $request->file('thumbnail');
            $store = $thumbnail->store('/gallery/thumbnail');
            $img = $store;
            $data['thumbnail'] = $img;
        }

        $room = Http::patch($this->api . 'room/' . $id, $data);

        if ($room['status'] == 'error') {
            return redirect()->back()->withErrors($room['message'])->withInput();
        }
        return redirect('/room')->with('message', $room['message']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Http::get($this->api . 'room/' . $id)->json();

        foreach ($gallery['data']['gallery'] as $key => $value) {
            Storage::delete($value['path']);
        }

        Storage::delete($gallery['data']['thumbnail']);

        $res = Http::delete($this->api . 'room/' . $id);
        return redirect('/room')->with('message', $res['message']);
    }
}
