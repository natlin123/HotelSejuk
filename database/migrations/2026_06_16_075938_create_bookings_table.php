<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {

            $table->id();

            // DATA KAMAR
            $table->integer('room_id');

            $table->string('nama_kamar');

            // DATA TAMU
            $table->string('nama_depan');

            $table->string('nama_belakang');

            $table->string('email');

            $table->string('telepon');

            $table->text('permintaan')->nullable();

            // DETAIL BOOKING
            $table->date('checkin');

            $table->date('checkout');

            $table->integer('jumlah_tamu');

            $table->integer('durasi');

            // HARGA
            $table->bigInteger('harga');

            $table->bigInteger('pajak');

            $table->bigInteger('total');

            // PEMBAYARAN
            $table->string('metode_pembayaran')->nullable();

            $table->string('status_pembayaran')
                  ->default('Pending');

            $table->string('kode_transaksi')
                  ->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
