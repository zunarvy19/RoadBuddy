<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jenis_bbm;


class JenisBbmController extends Controller
{
    //

    public function index(){
        return view('user.tutorial', ['title' => 'Tutorial']);
    }

    public function show()
    {
        // Mengambil data berdasarkan vendor_id
        $pertamina = Jenis_bbm::with('vendor')->where('vendor_id', 1)->get();
        $shell = Jenis_bbm::with('vendor')->where('vendor_id', 2)->get();
        $vivo = Jenis_bbm::with('vendor')->where('vendor_id', 3)->get();
        $bp = Jenis_bbm::with('vendor')->where('vendor_id', 4)->get();

        // dd($pertamina);        // Debugging: tampilkan isi variabel $pertamina


        // Kirim data ke view
        return view('user.jenisBbm',[
            'title' => 'Jenis BBM'
        ], compact('pertamina', 'shell', 'vivo', 'bp'));
    }


    
}
