<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kamar;
use Carbon\Carbon;

class RreportController extends Controller
{
    public function index()
    {
        $today = Carbon::today();

        $dailyRevenue =
            Booking::whereDate(
                'created_at',
                $today
            )
            ->where(
                'status_pembayaran',
                'Success'
            )
            ->sum('total');

        $totalRoom = Kamar::count();

        $occupied =
            Kamar::where(
                'status',
                'Terisi'
            )->count();

        $occupancy =
            $totalRoom > 0
            ? round(
                ($occupied/$totalRoom)*100
            )
            : 0;

        $avgNightRate =
            Booking::where(
                'status_pembayaran',
                'Success'
            )
            ->avg('harga');

        $pending =
            Booking::where(
                'status_pembayaran',
                'Pending'
            )
            ->count();

        $transactions =
            Booking::latest()
            ->take(10)
            ->get();

        return view(
            'resepsionis.reports',
            compact(
                'dailyRevenue',
                'occupancy',
                'avgNightRate',
                'pending',
                'transactions',
                'totalRoom',
                'occupied'
            )
        );
    }
}
