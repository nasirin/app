<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Necessities;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function LaporanBulanan()
    {
        $month = date('m');
        $income = Billing::with('booking', 'booking.BookingAdditional')->whereMonth('created_at', $month)->get();
        $outcome = Necessities::whereMonth('created_at', $month)->get();

        return response()->json(['income' => $income, 'outcome' => $outcome]);
    }
    public function LaporanTahunan()
    {
        $year = date('Y');
        $income = Billing::with('booking', 'booking.BookingAdditional')->whereYear('created_at', $year)->get();
        $outcome = Necessities::whereYear('created_at', $year)->get();

        return response()->json(['income' => $income, 'outcome' => $outcome]);
    }
}
