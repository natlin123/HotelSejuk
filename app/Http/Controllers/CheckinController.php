<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kamar;
use Illuminate\Http\Request;


class CheckinController extends Controller
{

    public function index()
    {

        $bookings = Booking::where(
            'status_checkin',
            'Belum Check In'
        )->get();


        $kamar = Kamar::where(
            'status',
            'Tersedia'
        )->get();


        return view(
            'resepsionis.checkin',
            compact(
                'bookings',
                'kamar'
            )
        );

    }



    public function store(Request $request)
    {


        $booking = Booking::findOrFail(
            $request->booking_id
        );


        $booking->update([
            'status_checkin'=>'Menginap'
        ]);



        Kamar::where(
            'id',
            $booking->room_id
        )
        ->update([
            'status'=>'Terisi'
        ]);



        return redirect()
        ->route('resepsionis.checkin')
        ->with(
            'success',
            'Check In berhasil'
        );

    }


}