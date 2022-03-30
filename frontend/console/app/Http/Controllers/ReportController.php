<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Http;

class ReportController extends Controller
{
    protected $api;
    public function __construct()
    {
        $this->api = env('API_BACKEND');
    }

    public function LaporanBulanan()
    {
        $laporan = Http::get($this->api . 'booking')->json();
        dd($laporan);
        // $pdf = PDF::loadview('laporan_bulanan', ['laporan' => $laporan]);
        // return $pdf->download('laporan-bulanan-pdf');
    }
}
