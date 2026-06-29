<?php

namespace App\Http\Controllers\Reportst;

use App\Http\Controllers\Controller;

class RreportController extends Controller
{
    public function index()
    {
        return view(
            'resepsionis.reports.index',
            [
                'checkin'=>0,
                'checkout'=>0,
                'reservasi'=>0,
                'pembayaran'=>0,
                'tersedia'=>0,
                'total'=>0,
                'terisi'=>0
            ]
        );
    }
}
