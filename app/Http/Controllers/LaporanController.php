<?php

namespace App\Http\Controllers;

use App\Models\Booking;


class LaporanController extends Controller
{

    public function index()
    {


        $totalPendapatan = Booking::where(
            'status_pembayaran',
            'Success'
        )
        ->sum('total');



        $totalBooking = Booking::count();



        $bookingSelesai = Booking::where(
            'status_pembayaran',
            'Success'
        )
        ->count();



        $hunian = 0;


        if ($totalBooking > 0) {

            $hunian = round(
                ($bookingSelesai / $totalBooking) * 100
            );

        }



        $tipePopuler = Booking::select('nama_kamar')
            ->selectRaw('COUNT(*) as jumlah')
            ->groupBy('nama_kamar')
            ->orderByDesc('jumlah')
            ->limit(4)
            ->get();




        $laporan = Booking::where(
            'status_pembayaran',
            'Success'
        )
        ->selectRaw("
            strftime('%m', checkin) as bulan,
            COUNT(*) as total_booking,
            SUM(durasi) as kamar_terisi,
            SUM(total) as pendapatan
        ")
        ->groupByRaw(
            "strftime('%m', checkin)"
        )
        ->orderByRaw(
            "strftime('%m', checkin)"
        )
        ->get();




        return view('laporan.index', compact(

            'totalPendapatan',
            'bookingSelesai',
            'hunian',
            'tipePopuler',
            'laporan'

        ));

    }

}
