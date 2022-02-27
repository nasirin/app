<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class NecessitiController extends Controller
{
    protected $api;
    protected $url;
    public function __construct()
    {
        $this->api = env('API_BACKEND');
        $this->url = url('/storage') . '/';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $necessities = Http::get($this->api . 'necessities')->json();
        $data['necessities'] = $necessities['data'];
        return view('pages.necessities.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.necessities.tambah');
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
            'necessity' => 'required',
            'cost' => 'required|integer',
            'tanggal' => 'required|date',
            'pcs' => 'required|integer',
            'file' => 'image|file|mimes:jpg,jpeg,png|max:1024'
        ];

        $data = $request->all();

        $validate = Validator::make($data, $rule);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }

        if ($request->hasFile('file')) {
            $note = $request->file('file')->store('necessity');
            $data['file'] = $note;
            $data['url'] = $this->url;
        }

        $necessity = Http::post($this->api . 'necessities', $data)->json();
        return redirect('/necessities')->with('message', $necessity['message']);
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
        $necessities = Http::get($this->api . 'necessities/' . $id)->json();
        $data['necessities'] = $necessities['data'];
        return view('pages.necessities.ubah', $data);
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
            'necessity' => 'required',
            'cost' => 'required|integer',
            'tanggal' => 'required|date',
            'pcs' => 'required|integer',
            'file' => 'image|file|mimes:jpg,jpeg,png|max:1024'
        ];

        $data = $request->all();

        $validate = Validator::make($data, $rule);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }

        $file = Http::get($this->api . 'necessities/' . $id)->json();


        if ($request->hasFile('file')) {
            Storage::delete($file['data']['file']);
            $note = $request->file('file')->store('necessity');
            $data['file'] = $note;
        }

        $necessity = Http::patch($this->api . 'necessities/' . $id, $data)->json();
        return redirect('/necessities')->with('message', $necessity['message']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = Http::get($this->api . 'necessities/' . $id)->json();
        Storage::delete($file['data']['file']);
        $necessities = Http::delete($this->api . 'necessities/' . $id)->json();
        return redirect('/necessities')->with('message', $necessities['message']);
    }
}
