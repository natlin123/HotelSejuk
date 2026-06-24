<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'room_id',
        'nama_kamar',

        'nama_depan',
        'nama_belakang',
        'email',
        'telepon',
        'permintaan',

        'checkin',
        'checkout',
        'jumlah_tamu',
        'durasi',

        'harga',
        'pajak',
        'total',

        'metode_pembayaran',
        'status_pembayaran',
        'kode_transaksi'
    ];
}
