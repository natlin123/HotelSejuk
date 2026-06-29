<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $bookings = Booking::latest()->get();

        return view('resepsionis.checkout.index', compact('bookings'));
    }
}
