<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\TipeKamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $kamars = Kamar::with('tipeKamar')->get();

        return view('kamar.index', [
            'kamars' => $kamars,
            'totalKamar' => Kamar::count(),
            'tersedia' => Kamar::where('status', 'Tersedia')->count(),
            'terisi' => Kamar::where('status', 'Terisi')->count(),
        ]);
    }

    public function create()
    {
        return view('kamar.create', [
            'tipeKamars' => TipeKamar::all()
        ]);
    }

  public function store(Request $request)
{
    $request->validate([
        'nomor_kamar' => 'required',
        'tipe_kamar_id' => 'required',
        'status' => 'required',
    ]);

    Kamar::create([
        'nomor_kamar' => $request->nomor_kamar,
        'tipe_kamar_id' => $request->tipe_kamar_id,
        'status' => $request->status,
        'keterangan' => $request->keterangan,

        // WAJIB FIX (BIAR TIDAK ERROR LAGI)
        'kapasitas' => $request->kapasitas ?? 1,
        'harga' => $request->harga ?? 100000,
    ]);

    return redirect()->route('kamar.index')
        ->with('success', 'Kamar berhasil ditambahkan');
}

    public function edit($id)
{
    $kamar = Kamar::findOrFail($id);

    return view('kamar.edit', [
        'kamar' => $kamar,
        'tipeKamars' => TipeKamar::all()
    ]);
}

public function update(Request $request, $id)
{
    $request->validate([
        'nomor_kamar' => 'required',
        'tipe_kamar_id' => 'required',
        'status' => 'required',
        'kapasitas' => 'required',
        'harga' => 'required',
    ]);

    $kamar = Kamar::findOrFail($id);

    $kamar->update([
        'nomor_kamar' => $request->nomor_kamar,
        'tipe_kamar_id' => $request->tipe_kamar_id,
        'status' => $request->status,
        'keterangan' => $request->keterangan,
        'kapasitas' => $request->kapasitas,
        'harga' => $request->harga,
    ]);

    return redirect()->route('kamar.index')
        ->with('success', 'Kamar berhasil diperbarui');
}

    public function destroy($id)
    {
        Kamar::destroy($id);

        return redirect()->route('kamar.index')
            ->with('success', 'Kamar berhasil dihapus');
    }
}
