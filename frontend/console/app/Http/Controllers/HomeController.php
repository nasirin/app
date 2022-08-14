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

        $summary = Http::get($this->api . 'summary')->json();
        $newBooking = Http::get($this->api . 'booking?status=new')->json();
        $graceBilling = Http::get($this->api . 'billing?status=grace')->json();
        $data = [
            'summary' => $summary,
            'newBooking' => $newBooking['data'],
            'graceBilling' => $graceBilling,
        ];
        return view('pages.home', $data);
    }
}
