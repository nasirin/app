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

        return response()->json($total, 200);
    }

    private function contEveryYears($month)
    {
        $billing = Billing::where('payment_status', 'success')->whereMonth('created_at', $month)->whereYear('created_at', date('Y'))->sum('total');
        $additional = BookingAdditional::whereMonth('created_at', $month)->whereYear('created_at', date('Y'))->sum('cost');
        $kebutuhan = Necessities::whereMonth('created_at', $month)->whereYear('created_at', date('Y'))->sum('total');
        $totalBooking = $billing + $additional;

        $data = [
            'booking' => $totalBooking,
            'kebutuhan' => $kebutuhan,
        ];

        return $data;
    }

    public function report(Request $request)
    {
        if ($request->has('bulanan')) {
            $billing = Billing::where('payment_status', 'success')->whereMonth('created_at', date('m'))->sum('total');
            $additional = BookingAdditional::whereMonth('created_at', '08')->sum('cost');
            $kebutuhan = Necessities::whereMonth('created_at', '08')->sum('total');
            $totalBooking = $billing + $additional;
            $data = [
                'booking' => $totalBooking,
                'kebutuhan' => $kebutuhan,
                'total' => $totalBooking - $kebutuhan
            ];
        }
        if ($request->has('tahunan')) {

            $januari = $this->contEveryYears('01');
            $februari = $this->contEveryYears('02');
            $maret = $this->contEveryYears('03');
            $april = $this->contEveryYears('04');
            $mei = $this->contEveryYears('05');
            $juni = $this->contEveryYears('06');
            $juli = $this->contEveryYears('07');
            $agustus = $this->contEveryYears('08');
            $september = $this->contEveryYears('09');
            $oktober = $this->contEveryYears('10');
            $november = $this->contEveryYears('11');
            $desember = $this->contEveryYears('12');
            $total = [
                'booking' => $januari['booking'] + $februari['booking'] + $maret['booking'] + $april['booking'] + $mei['booking'] + $juni['booking'] + $juli['booking'] + $agustus['booking'] + $september['booking'] + $oktober['booking'] + $november['booking'] + $desember['booking'],
                'pengeluaran' => $januari['kebutuhan'] + $februari['kebutuhan'] + $maret['kebutuhan'] + $april['kebutuhan'] + $mei['kebutuhan'] + $juni['kebutuhan'] + $juli['kebutuhan'] + $agustus['kebutuhan'] + $september['kebutuhan'] + $oktober['kebutuhan'] + $november['kebutuhan'] + $desember['kebutuhan'],
            ];


            $data = [
                'januari' => $januari,
                'februari' => $februari,
                'maret' => $maret,
                'april' => $april,
                'mei' => $mei,
                'juni' => $juni,
                'juli' => $juli,
                'agustus' => $agustus,
                'september' => $september,
                'oktober' => $oktober,
                'november' => $november,
                'desember' => $desember,
                'total' => $total
            ];
        }
        return response()->json($data, 200);
    }
}
