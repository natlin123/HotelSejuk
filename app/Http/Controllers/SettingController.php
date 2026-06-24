<?php


namespace App\Http\Controllers;


use App\Models\Setting;
use Illuminate\Http\Request;



class SettingController extends Controller
{



public function index()
{


    $setting = Setting::first();



    return view('setting.index',compact('setting'));


}






public function update(Request $request)
{



    $request->validate([


        'nama_hotel'=>'required',
        'email'=>'nullable',
        'telepon'=>'nullable',
        'website'=>'nullable',
        'alamat'=>'nullable'


    ]);





    $setting = Setting::first();




    if($setting){


        $setting->update([


            'nama_hotel'=>$request->nama_hotel,
            'email'=>$request->email,
            'telepon'=>$request->telepon,
            'website'=>$request->website,
            'alamat'=>$request->alamat


        ]);



    }else{



        Setting::create([


            'nama_hotel'=>$request->nama_hotel,
            'email'=>$request->email,
            'telepon'=>$request->telepon,
            'website'=>$request->website,
            'alamat'=>$request->alamat


        ]);



    }





    return redirect()
        ->route('setting.index')
        ->with('success','Pengaturan berhasil disimpan');



}

public function updatePassword(Request $request)
{

    $request->validate([

        'password'=>'required|min:6'

    ]);



    $user = auth()->user();



    $user->update([

        'password'=>$request->password

    ]);



    return back()->with(
        'success',
        'Password berhasil diperbarui'
    );

}


}
