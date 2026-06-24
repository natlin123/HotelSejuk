<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Barryvdh\DomPDF\Facade\Pdf;

class PaymentController extends Controller
{
    public function show($id)
    {
        $booking = Booking::findOrFail($id);

        return view('booking.payment-details', compact('booking'));
    }

    public function confirm(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $booking->metode_pembayaran = $request->metode_pembayaran;
        $booking->status_pembayaran = 'Success';

        $booking->save();

        return redirect()->route('payment.success', $booking->id);
    }

    public function success($id)
    {
        $booking = Booking::findOrFail($id);

        return view('booking.success', compact('booking'));
    }

    public function downloadPdf($id)
    {
        $booking = Booking::findOrFail($id);

        $pdf = Pdf::loadView(
            'booking.receipt-pdf',
            compact('booking')
        );

        return $pdf->download(
            'Resi-Pembayaran-' . $booking->kode_transaksi . '.pdf'
        );
    }
}
