<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Bookings;
use App\Models\Customers;
use App\Models\Necessities;
use Illuminate\Http\Request;

class SummaryController extends Controller
{
    public function index()
    {
        $billingSuccess = Billing::where('payment_status', 'success')->whereMonth('payment_date', date('m'))->sum('total');
        $pelanggan = Customers::count();
        $totalPengeluaran = Necessities::whereMonth('tanggal', date('m'))->sum('total');
        $totalItem = Necessities::whereMonth('tanggal', date('m'))->sum('pcs');

        return response()->json([
            'kebutuhan' => [
                'totalPengeluaran' => intval($totalPengeluaran),
                'totalItem' => intval($totalItem)
            ],
            'pendapatan' => intval($billingSuccess - $totalPengeluaran),
            'totalCustomer' => intval($pelanggan)
        ]);
    }
}
