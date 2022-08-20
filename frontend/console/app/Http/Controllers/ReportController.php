<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReportController extends Controller
{
    protected $api;
    public function __construct()
    {
        $this->api = env('API_BACKEND');
    }

    public function index(Request $request)
    {
        if ($request->has('bulanan')) {
            $laporan = Http::get($this->api . 'report?bulanan')->json();
            $return = 'LaporanBulanan';
        }
        if ($request->has('tahunan')) {
            $laporan = Http::get($this->api . 'report?tahunan')->json();
            $return = 'LaporanTahunan';
        }

        return view('pages.' . $return, $laporan);
    }
}
