<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipeKamar extends Model
{
    protected $fillable = [
        'nama_tipe',
        'kapasitas',
        'harga',
        'fasilitas'
    ];

    public function kamars()
    {
        return $this->hasMany(Kamar::class);
    }
}
