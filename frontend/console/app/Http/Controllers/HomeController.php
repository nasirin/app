<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $data = [
            'summary' => $summary
        ];
        return view('pages.home', $data);
    }
}
