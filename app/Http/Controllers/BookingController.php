<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Carbon\Carbon;

class BookingController extends Controller
{
    // Form Booking
    public function index(int $id, string $nama)
    {
        return view('booking.index', [
            'room_id' => $id,
            'nama_kamar' => $nama
        ]);
    }

    // Simpan Booking
    public function store(Request $request)
    {
        if ($request->room_id == 1) {
            $hargaPerMalam = 1500000;
        } elseif ($request->room_id == 2) {
            $hargaPerMalam = 950000;
        } else {
            $hargaPerMalam = 2500000;
        }

        $checkin = Carbon::parse($request->checkin);
        $checkout = Carbon::parse($request->checkout);

        $durasi = $checkin->diffInDays($checkout);

        if ($durasi < 1) {
            $durasi = 1;
        }

        $harga = $hargaPerMalam * $durasi;
        $pajak = $harga * 0.11;
        $total = $harga + $pajak;

        Booking::create([
            'room_id' => $request->room_id,
            'nama_kamar' => $request->nama_kamar,

            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,

            'email' => $request->email,
            'telepon' => $request->telepon,

            'permintaan' => $request->permintaan,

            'checkin' => $request->checkin,
            'checkout' => $request->checkout,

            'jumlah_tamu' => $request->jumlah_tamu,

            'durasi' => $durasi,
            'harga' => $harga,
            'pajak' => $pajak,
            'total' => $total,

            'metode_pembayaran' => 'Transfer Bank',
            'status_pembayaran' => 'Pending',
            'kode_transaksi' => 'TRX-' . rand(100000, 999999)
        ]);

        return redirect()->route('payment');
    }

    // Halaman Pembayaran
    public function payment()
    {
        $booking = Booking::orderBy('id', 'desc')->first();

        return view('booking.payment', compact('booking'));
    }
}
