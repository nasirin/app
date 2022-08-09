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

    public function index(Request $request)
    {
        $query = $request->query('status');
        switch ($query) {
            case 'new':
                $booking = Http::get($this->api . 'booking')->json();
                break;
            case 'grace':
                $booking = Http::get($this->api . 'booking')->json();
                break;
            case 'late':
                $booking = Http::get($this->api . 'booking')->json();
                break;
            case 'normal':
                $booking = Http::get($this->api . 'booking')->json();
                break;
            default:
                $booking = Http::get($this->api . 'booking')->json();
                break;
        }
        // dd($booking);
        $data['booking'] = $booking['data'];
        return view('pages.booking.index', $data);
    }

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

    public function show($id)
    {
        $booking = Http::get($this->api . 'booking/' . $id)->json();
        $total = Http::get($this->api . 'total-cost/' . $id)->json();

        $data = [
            'booking' => $booking['data'],
            'customer' => $booking['data']['customer'],
            'additional' => $booking['data']['booking_additional'],
            'totalCost' => $total
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
        $confirm = Http::patch($this->api . 'booking-confirm-admin/' . $id)->json();
        return redirect()->back();
    }

    public function additional(Request $request)
    {
        Http::post($this->api . 'badd', $request->all());
        return redirect()->back();
    }

    public function additionalDestroy($id)
    {
        Http::delete($this->api . 'badd/' . $id);
        return redirect()->back();
    }
}
