<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Necessities;

class ReportController extends Controller
{
    public function LaporanBulanan()
    {
        $month = date('m');
        $income = Billing::whereMonth('created_at', $month)->where('payment_status', 'success')->sum('total');
        $outcome = Necessities::whereMonth('created_at', $month)->sum('total');

        return response()->json(['income' => $income, 'outcome' => $outcome]);
    }
    public function LaporanTahunan()
    {
        $year = date('Y');
        $income = Billing::whereYear('created_at', $year)->where('payment_status', '=', 'success')->sum('total');
        $januari = Billing::whereYear('created_at', $year)->where('payment_status', '=', 'success')->whereMonth('created_at', '01')->sum('total');
        $februari = Billing::whereYear('created_at', $year)->where('payment_status', '=', 'success')->whereMonth('created_at', '02')->sum('total');
        $maret = Billing::whereYear('created_at', $year)->where('payment_status', '=', 'success')->whereMonth('created_at', '03')->sum('total');
        $april = Billing::whereYear('created_at', $year)->where('payment_status', '=', 'success')->whereMonth('created_at', '04')->sum('total');
        $mei = Billing::whereYear('created_at', $year)->where('payment_status', '=', 'success')->whereMonth('created_at', '05')->sum('total');
        $juni = Billing::whereYear('created_at', $year)->where('payment_status', '=', 'success')->whereMonth('created_at', '06')->sum('total');
        $juli = Billing::whereYear('created_at', $year)->where('payment_status', '=', 'success')->whereMonth('created_at', '07')->sum('total');
        $agustus = Billing::whereYear('created_at', $year)->where('payment_status', '=', 'success')->whereMonth('created_at', '08')->sum('total');
        $september = Billing::whereYear('created_at', $year)->where('payment_status', '=', 'success')->whereMonth('created_at', '09')->sum('total');
        $oktober = Billing::whereYear('created_at', $year)->where('payment_status', '=', 'success')->whereMonth('created_at', '10')->sum('total');
        $november = Billing::whereYear('created_at', $year)->where('payment_status', '=', 'success')->whereMonth('created_at', '11')->sum('total');
        $desember = Billing::whereYear('created_at', $year)->where('payment_status', '=', 'success')->whereMonth('created_at', '12')->sum('total');

        $outcome = Necessities::whereYear('created_at', $year)->sum('total');
        $outcome01 = Necessities::whereYear('created_at', $year)->whereMonth('created_at', '01')->sum('total');;
        $outcome02 = Necessities::whereYear('created_at', $year)->whereMonth('created_at', '02')->sum('total');;
        $outcome03 = Necessities::whereYear('created_at', $year)->whereMonth('created_at', '03')->sum('total');;
        $outcome04 = Necessities::whereYear('created_at', $year)->whereMonth('created_at', '04')->sum('total');;
        $outcome05 = Necessities::whereYear('created_at', $year)->whereMonth('created_at', '05')->sum('total');;
        $outcome06 = Necessities::whereYear('created_at', $year)->whereMonth('created_at', '06')->sum('total');;
        $outcome07 = Necessities::whereYear('created_at', $year)->whereMonth('created_at', '07')->sum('total');;
        $outcome08 = Necessities::whereYear('created_at', $year)->whereMonth('created_at', '08')->sum('total');;
        $outcome09 = Necessities::whereYear('created_at', $year)->whereMonth('created_at', '09')->sum('total');;
        $outcome10 = Necessities::whereYear('created_at', $year)->whereMonth('created_at', '10')->sum('total');;
        $outcome11 = Necessities::whereYear('created_at', $year)->whereMonth('created_at', '11')->sum('total');;
        $outcome12 = Necessities::whereYear('created_at', $year)->whereMonth('created_at', '12')->sum('total');;

        return response()->json([
            'income' => [
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
                'total' => $income
            ],
            'outcome' => [
                'januari' => $outcome01,
                'februari' => $outcome02,
                'maret' => $outcome03,
                'april' => $outcome04,
                'mei' => $outcome05,
                'juni' => $outcome06,
                'juli' => $outcome07,
                'agustus' => $outcome08,
                'september' => $outcome09,
                'oktober' => $outcome10,
                'november' => $outcome11,
                'desember' => $outcome12,
                'total' => $outcome
            ]
        ]);
    }
}
