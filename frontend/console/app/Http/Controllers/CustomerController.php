<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $api;
    public function __construct()
    {
        $this->api = env('API_BACKEND');
    }

    public function index()
    {
        $res = Http::get($this->api . 'customer')->json();
        $data['customer'] = $res['data'];

        return view('pages.customer.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.customer.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            "first_name" => "required|string|min:3",
            "last_name" => "required|string|min:3",
            "nick_name" => "required|string|min:3",
            "avatar" => 'mimes:jpg,jpeg,png|max:1024',
            "address" => "required|string|min:3",
            "phone" => "required|string|min:11|max:16",
            "email" => "required|email",
            "identity" => 'mimes:jpg,jpeg,png|max:1024',
            "password" => "required|string|min:6",
            "gender" => "required|in:male,female",
            "status" => "required|in:single,married",
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('customers');
        }
        if ($request->hasFile('identity')) {
            $data['identity'] = $request->file('identity')->store('customers');
        }

        $customer = Http::post($this->api . 'customer', $data)->json();
        // dd($customer);
        return redirect('/customer')->with('message', $customer['message']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $res = Http::get($this->api . 'customer/' . $id)->json();
        $data = [
            'customer' => $res['data'],
            'booking' => $res['data']['booking']
        ];

        return view('pages.customer.profil', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = Http::get($this->api . 'customer/' . $id)->json();
        $data['customer'] = $res['data'];

        return view('pages.customer.ubah', $data);
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
        $rules = [
            "first_name" => "required|string|min:3",
            "last_name" => "required|string|min:3",
            "nick_name" => "required|string|min:3",
            "avatar" => 'mimes:jpg,jpeg,png|max:1024',
            "address" => "required|string|min:3",
            "phone" => "required|string|min:11|max:16",
            "email" => "required|email",
            "identity" => 'mimes:jpg,jpeg,png|max:1024',
            "gender" => "required|in:male,female",
            "status" => "required|in:single,married",
            // 'password' => 'string|min:6',
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $img = Http::get($this->api . 'customer/' . $id)->json();

        if ($request->hasFile('avatar')) {
            Storage::delete($img['data']['avatar']);
            $data['avatar'] = $request->file('avatar')->store('customers');
        }
        if ($request->hasFile('identity')) {
            Storage::delete($img['data']['identity']);
            $data['identity'] = $request->file('identity')->store('customers');
        }

        $customer = Http::patch($this->api . 'customer/' . $id, $data);
        return redirect('/customer')->with('message', $customer['message']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img = Http::get($this->api . 'customer/' . $id)->json();

        if ($img['data']['avatar']) {
            Storage::delete($img['data']['avatar']);
        }
        if ($img['data']['identity']) {
            Storage::delete($img['data']['identity']);
        }


        $customer = Http::delete($this->api . 'customer/' . $id);
        return redirect('/customer')->with('message', $customer['message']);
    }
}
