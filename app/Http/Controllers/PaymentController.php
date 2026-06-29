<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class PaymentController extends Controller
{
    public function show(int|string $id)
    {
        $booking = Booking::findOrFail($id);

        return view('booking.payment-details', compact('booking'));
    }

    public function confirm(Request $request, int|string $id)
    {
        $booking = Booking::findOrFail($id);

        $booking->metode_pembayaran = $request->metode_pembayaran;
        $booking->status_pembayaran = 'Success';

        $booking->save();

        return redirect()->route('payment.success', $booking->id);
    }

    public function success(int|string $id)
    {
        $booking = Booking::findOrFail($id);

        return view('booking.success', compact('booking'));
    }

    public function downloadPdf(int|string $id)
    {
        $booking = Booking::findOrFail($id);

        // Menggunakan helper app('dompdf.wrapper') agar Intelephense tidak error
        $pdf = app('dompdf.wrapper')->loadView(
            'booking.receipt-pdf',
            compact('booking')
        );

        return $pdf->download(
            'Resi-Pembayaran-' . $booking->kode_transaksi . '.pdf'
        );
    }
}
