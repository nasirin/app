<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookingController extends Controller
{
    protected $api;
    protected $apiCust;
    public function __construct()
    {
        $this->api = env('API_BACKEND');
        $this->apiCust = env('URL_CUSTOMER');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = Http::get($this->api . 'booking')->json();
        $data['booking'] = $booking['data'];
        return view('pages.booking.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = Http::get($this->api . 'customer')->json();
        $room = Http::get($this->api . 'room')->json();
        $data = [
            'customers' => $customer['data'],
            'rooms' => $room['data']
        ];
        return view('pages.booking.tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Http::get($this->api . 'booking/' . $id)->json();
        $additional = Http::get($this->api . 'additional/booking/' . $id)->json();
        $totalCost = Http::get($this->api . 'additional/total/' . $id)->json();
        $data = [
            'booking' => $booking['data'],
            'additional' => $additional['data'],
            'totalCost' => $totalCost['data']
        ];
        return view('pages.booking.detail', $data);
    }

    public function destroy($id)
    {
        $booking = Http::delete($this->api . 'booking/' . $id)->json();
        return redirect()->back()->with('msg', $booking);
    }

    public function confirm($id)
    {
        $confirm = Http::patch($this->api . 'confirmByadmin/' . $id)->json();
        return redirect()->back();
    }

    public function additional(Request $request)
    {
        Http::post($this->api . 'additional', $request->all());
        return redirect()->back();
    }

    public function additionalDestroy($id)
    {
        Http::delete($this->api . 'additional/' . $id);
        return redirect()->back();
    }
}
