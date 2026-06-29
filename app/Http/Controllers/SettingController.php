<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        return view('setting.index', compact('setting'));
    }

    public function update(Request $request)
    {
        /** @var \Illuminate\Http\Request $request */
        $request->validate([
            'nama_hotel' => 'required',
            'email'      => 'nullable',
            'telepon'    => 'nullable',
            'website'    => 'nullable',
            'alamat'     => 'nullable'
        ]);

        /** @var \App\Models\Setting $setting */
        $setting = Setting::first();

        if ($setting) {
            $setting->update([
                'nama_hotel' => $request->nama_hotel,
                'email'      => $request->email,
                'telepon'    => $request->telepon,
                'website'    => $request->website,
                'alamat'     => $request->alamat
            ]);
        } else {
            Setting::create([
                'nama_hotel' => $request->nama_hotel,
                'email'      => $request->email,
                'telepon'    => $request->telepon,
                'website'    => $request->website,
                'alamat'     => $request->alamat
            ]);
        }

        return redirect()
            ->route('setting.index')
            ->with('success', 'Pengaturan berhasil disimpan');
    }

    public function updatePassword(Request $request)
    {
        /** @var \Illuminate\Http\Request $request */
        $request->validate([
            'password' => 'required|min:6'
        ]);

        // Menggunakan Facade Auth secara eksplisit agar dikenali VS Code
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return back()->with(
            'success',
            'Password berhasil diperbarui'
        );
    }
}
