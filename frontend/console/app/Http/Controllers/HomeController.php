<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    protected $api;
    public function __construct()
    {
        $this->api = env('API_BACKEND');
    }

    public function index()
    {
        // dd(session()->all());
        $summary = Http::get($this->api . 'summary')->json();
        $newBooking = Http::get($this->api . 'new-booking')->json();
        $graceBilling = Http::get($this->api . 'grace-billing')->json();
        // dd($summary);
        $data = [
            'summary' => $summary,
            'newBooking' => $newBooking['data'],
            'graceBilling' => $graceBilling['data'],
        ];
        return view('pages.home', $data);
    }
}
