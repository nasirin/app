<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    protected $api;

    public function __construct()
    {
        $this->api = env("API_BACKEND");
    }

    public function index()
    {
        $res = Http::get($this->api . 'employee')->json();
        $data = [
            'admin' => $res['data']
        ];
        return view('pages.admin.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule = ['avatar' => 'image|file|mimes:jpg,jpeg,png|max:1024'];
        $data = $request->all();
        $validate = Validator::make($data, $rule);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('employees');
        }

        $admin = Http::post($this->api . 'employee', $data);

        if ($admin['status'] == 'error') {
            return redirect()->back()->withErrors($admin['message'])->withInput();
        }

        return redirect('/admin')->with('message', $admin['message']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $res = Http::get($this->api . 'employee/' . $id)->json();
        $data['admin'] = $res['data'];
        return view('pages.admin.profil', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = Http::get($this->api . 'employee/' . $id)->json();
        $data = [
            'admin' => $res['data']
        ];
        return view('pages.admin.ubah', $data);
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
        $rule = ['avatar' => 'image|file|mimes:jpg,jpeg,png|max:1024'];
        $data = $request->all();
        $validate = Validator::make($data, $rule);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }

        $avatar  = Http::get($this->api . 'employee/' . $id)->json();
        $img = $avatar['data'];
        // dd($img['avatar']);

        if ($request->hasFile('avatar')) {
            if ($img) {
                Storage::delete($img['avatar']);
            }
            $data['avatar'] = $request->file('avatar')->store('employees');
        }

        $res = Http::asForm()->patch($this->api . 'employee/' . $id, $data);

        return redirect('/admin')->with('message', $res['message']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $avatar  = Http::get($this->api . 'employee/' . $id)->json();
        $img = $avatar['data'];
        if ($img) {
            Storage::delete($img['avatar']);
        }
        $res = Http::delete($this->api . 'employee/' . $id);
        return back()->with('message', $res['message']);
    }
}
