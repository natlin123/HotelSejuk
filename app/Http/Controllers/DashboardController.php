<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Booking;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totalKamar = Kamar::count();

        // Kamar terisi
        $kamarTerisi = Booking::whereIn('status_pembayaran', [
            'Success',
            'Lunas'
        ])
        ->distinct('room_id')
        ->count('room_id');

        $kamarTersedia = $totalKamar - $kamarTerisi;

        // Pendapatan hari ini
        $pendapatanHariIni = Booking::whereIn('status_pembayaran', [
            'Success',
            'Lunas'
        ])
        ->whereDate('created_at', Carbon::today())
        ->sum('total');

        $bookingTerbaru = Booking::latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalKamar',
            'kamarTerisi',
            'kamarTersedia',
            'pendapatanHariIni',
            'bookingTerbaru'
        ));
    }
}
