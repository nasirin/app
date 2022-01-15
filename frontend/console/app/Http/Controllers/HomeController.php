<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    protected $api;
    protected $url;
    public function __construct(UrlGenerator $url)
    {
        $this->api = env('API_BACKEND');
        $this->url = $url;
    }

    public function index()
    {
        $summary = Http::get($this->api . 'summary')->json();
        $newBooking = Http::get($this->api . 'new-booking')->json();
        $graceBilling = Http::get($this->api . 'grace-billing')->json();
        $data = [
            'summary' => $summary,
            'newBooking' => $newBooking['data'],
            'graceBilling' => $graceBilling['data'],
            'baseURL' => $this->url->to('/') . '/storage/'
        ];
        return view('pages.home', $data);
    }
}
