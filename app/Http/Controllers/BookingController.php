<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Carbon\Carbon;


class BookingController extends Controller
{
    // Menampilkan form booking
    public function index($id, $nama)
    {
        return view('booking.index', [
            'room_id' => $id,
            'nama_kamar' => $nama
        ]);
    }

    // Menyimpan booking
    public function store(Request $request)
    {
        // Harga per malam berdasarkan kamar
        if ($request->room_id == 1) {

            $hargaPerMalam = 1500000; // Deluxe King

        } elseif ($request->room_id == 2) {

            $hargaPerMalam = 950000; // Superior Twin

        } else {

            $hargaPerMalam = 2500000; // Executive Suite

        }

        // Hitung durasi menginap
        $checkin = Carbon::parse($request->checkin);
        $checkout = Carbon::parse($request->checkout);

        $durasi = $checkin->diffInDays($checkout);

        if ($durasi < 1) {
            $durasi = 1;
        }

        // Hitung harga
        $harga = $hargaPerMalam * $durasi;

        $pajak = $harga * 0.11;

        $total = $harga + $pajak;

        // Simpan ke database
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
            'kode_transaksi' => 'TRX-' . rand(100000,999999)

        ]);

        return redirect('/payment');
    }

    // Halaman pembayaran
    public function payment()
    {
        $booking = Booking::latest()->first();

        return view('booking.payment', compact('booking'));
    }
}
