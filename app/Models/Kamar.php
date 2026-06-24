<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $fillable = [
        'nomor_kamar',
        'tipe_kamar_id',
        'status',
        'keterangan',
        'kapasitas',
        'harga',
    ];

    public function tipeKamar()
    {
        return $this->belongsTo(TipeKamar::class, 'tipe_kamar_id');
    }
}
