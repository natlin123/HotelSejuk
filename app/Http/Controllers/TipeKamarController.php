<?php

namespace App\Http\Controllers;

use App\Models\TipeKamar;
use Illuminate\Http\Request;

class TipeKamarController extends Controller
{
    public function index()
    {
        $tipe = TipeKamar::all();

        $total = $tipe->count();

        $termurah = TipeKamar::min('harga');

        $termahal = TipeKamar::max('harga');

        return view('tipe.index', compact(
            'tipe',
            'total',
            'termurah',
            'termahal'
        ));
    }

    public function create()
    {
        return view('tipe.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_tipe' => 'required',
            'kapasitas' => 'required',
            'harga' => 'required',
            'fasilitas' => 'required'
        ]);

       TipeKamar::create([
    'nama_tipe' => $request->nama_tipe,
    'kapasitas' => $request->kapasitas,
    'harga' => $request->harga,
    'fasilitas' => $request->fasilitas
]);

        return redirect()
            ->route('tipe.index')
            ->with('success', 'Tipe kamar berhasil ditambahkan');
    }

    public function edit($id)
    {
        $tipe = TipeKamar::findOrFail($id);

        return view('tipe.edit', compact('tipe'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_tipe' => 'required',
            'kapasitas' => 'required',
            'harga' => 'required',
             'harga' => 'required'
        ]);

        $tipe = TipeKamar::findOrFail($id);

       $tipe->update([
    'nama_tipe' => $request->nama_tipe,
    'kapasitas' => $request->kapasitas,
    'harga' => $request->harga,
    'fasilitas' => $request->fasilitas
]);

        return redirect()
            ->route('tipe.index')
            ->with('success', 'Tipe kamar berhasil diperbarui');
    }

    public function destroy($id)
    {
        TipeKamar::destroy($id);

        return redirect()
            ->route('tipe.index')
            ->with('success', 'Tipe kamar berhasil dihapus');
    }
}
