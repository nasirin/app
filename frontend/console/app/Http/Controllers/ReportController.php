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
        $laporan = Http::get($this->api . 'LaporanBulanan')->json();

        return view('pages.LaporanBulanan', $laporan);
    }
    public function LaporanTahunan()
    {
        $laporan = Http::get($this->api . 'LaporanTahunan')->json();

        return view('pages.LaporanTahunan', $laporan);
    }
}
