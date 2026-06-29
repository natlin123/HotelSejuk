<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Booking;
use Carbon\Carbon;


class RdashboardController extends Controller
{

    public function index()
    {

        $totalKamar = Kamar::count();


        $kamarTerisi = Booking::whereIn('status_pembayaran',[
            'Success',
            'Lunas'
        ])
        ->distinct('room_id')
        ->count('room_id');


        $kamarTersedia = $totalKamar - $kamarTerisi;



        $checkOutHariIni = Booking::whereDate(
            'check_out',
            Carbon::today()
        )->count();



        $bookingTerbaru = Booking::latest()
            ->take(5)
            ->get();



        return view('resepsionis.dashboard',
        compact(
            'totalKamar',
            'kamarTerisi',
            'kamarTersedia',
            'checkOutHariIni',
            'bookingTerbaru'
        ));

    }

}
