<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookingController extends Controller
{
    protected $apibe;
    protected $apiconsole;
    public function __construct()
    {
        $this->apibe = env('API_BACKEND');
        $this->apiconsole = env('API_CONSOLE');
    }

    public function store(Request $request, $id, $cost)
    {
        $data = $request->all();
        $data["customers_id"] = session('user.id');
        $data["rooms_id"] = $id;
        $data["guest"] = 1;
        $data["cost"] = $cost;

        $booking = Http::post($this->apibe . 'booking', $data);
        return redirect()->with('success', $booking['message'])->to('/checkout');
    }

    public function checkout($id)
    {
        return view('pages.checkout');
    }

    public function confirm(Request $request, $id)
    {
        $data['file_payment'] = 'dfa';
        $confirm = Http::patch($this->apibe . 'cofirm/' . $id, $data);

        if ($confirm) {
            return redirect()->to('/')->with('success', $confirm['message']);
        }
    }
}
