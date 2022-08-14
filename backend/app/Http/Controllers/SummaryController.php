<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\BookingAdditional;
use App\Models\Bookings;
use App\Models\Customers;
use App\Models\Necessities;
use Illuminate\Http\Request;

class SummaryController extends Controller
{

    private function CheckDueDate()
    {
        // tenggang = -7 hari
        // telat = +1 hari
        $billing = Billing::all();
        foreach ($billing as $value) {
            $tenggang = date('Y-m-d', strtotime('-7day', strtotime($value['payment_due'])));
            $telat = date('Y-m-d', strtotime('+1day', strtotime($value['payment_due'])));

            // tenggang 

            if (date('Y-m-d') >= $tenggang && date('Y-m-d') <= $value['payment_due']) {

                $statusTenggang['payment_status'] = 'grace';
                $billingTenggang = Billing::find($value['id']);
                $billingTenggang->fill($statusTenggang);
                $billingTenggang->save();
            }
            if (date('Y-m-d') <= $telat && date('Y-m-d') >= $value['payment_due']) {

                $statusTenggang['payment_status'] = 'late';
                $billingTenggang = Billing::find($value['id']);
                $billingTenggang->fill($statusTenggang);
                $billingTenggang->save();
            }
        }
    }


    public function index()
    {
        $this->CheckDueDate();
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

    public function totalCost($id)
    {
        // ambil data booking
        $booking = Bookings::withSum('BookingAdditional', 'cost')->find($id);

        $total = $booking['cost'] + $booking['booking_additional_sum_cost'];

        return response()->json(['total' => $total, 'check due date' => $this->CheckDueDate()], 200);
    }
}
