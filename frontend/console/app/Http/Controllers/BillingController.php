<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BillingController extends Controller
{
    protected $api;
    protected $apiCust;
    public function __construct()
    {
        $this->api = env('API_BACKEND');
        $this->apiCust = env('URL_CUSTOMER');
    }

    public function index()
    {
        $billing = Http::get($this->api . 'billing')->json();
        $data = [
            'billing' => $billing
        ];
        return view('pages.billing.index', $data);
    }

    public function show($id)
    {
        $booking = Http::get($this->api . 'billing/' . $id)->json();
        $billing = Http::get($this->api . 'getByBooking/' . $booking['data']['booking_id'])->json();
        $data = ['billing' => $booking['data'], 'allBilling' => $billing['data']];
        return view('pages.billing.detail', $data);
    }

    public function destroy($id)
    {
        Http::delete($this->api . 'billing/' . $id)->json();
        return redirect()->back();
    }

    public function confirm($id)
    {
        $billing = Http::post($this->api . 'billing/' . $id)->json();
        return redirect()->back();
    }
}
