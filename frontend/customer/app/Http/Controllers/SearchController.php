<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    protected $apibe;
    protected $apiconsole;
    public function __construct()
    {
        $this->apibe = env('API_BACKEND');
        $this->apiconsole = env('API_CONSOLE');
    }

    public function room(Request $request)
    {
        $search = $request->all();

        $room = Http::get($this->apibe . 'search?' . $search);

        dd($room);
    }
}
