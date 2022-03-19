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
        return redirect()->to('checkout/' . $booking['id']);
    }

    public function checkout($id)
    {
        $booking = Http::get($this->apibe . 'booking/' . $id)->json();
        $data = ['checkout' => $booking['data']];
        return view('pages.checkout', $data);
    }

    public function confirm(Request $request, $id)
    {
        if ($request->hasFile('struck')) {
            $img = $request->file('struck')->store('confirm');
            $data['file_payment'] = url('storage') . '/' . $img;
            $confirm = Http::patch($this->apibe . 'confirm/' . $id, $data)->json();
            return redirect()->to('/')->with('success', $confirm['message']);
        }
    }
}
