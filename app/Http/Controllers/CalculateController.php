<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\Calculate;
use Illuminate\Http\Request;
use App\Models\jenis_bbm;
use App\Helper\DateHelper;
use App\Helpers\CurrencyHelper;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class CalculateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBBM = jenis_bbm::with('vendor')->get()->sortBy('jenis_bbm');
        $brand = brand::get();

        // dd($brand);
        return view('user.calculate',[
            'title' => 'Hitung BBM'] , compact('dataBBM', 'brand')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'namaKendaraan' => 'required|string|max:255',
            'kilometer_awal' => 'required|numeric',
            'kilometer_akhir' => 'required|numeric',
            'brand_id' => 'required|string',
            'bbm_awal' => 'required|numeric',
            'bbm_akhir' => 'required|numeric',
            'jenis_bbm' => 'required|integer',
            'harga_bbm' => 'required|numeric',
            'total_jarak' => 'required|numeric',
            'total_bbm' => 'required|numeric',
            'konsumsi_bbm' => 'required|numeric',
            'total_biaya' => 'required|numeric',
        ]);




        // Simpan ke database
        $validatedData['user_id'] = auth()->user()->id;

                // dd($validatedData);


        try{
            $pengisianBbm = new Calculate();
            $pengisianBbm->tanggal = $validatedData['tanggal'];  // Tanggal tetap dalam format asli untuk penyimpanan
            $pengisianBbm->namaKendaraan = $validatedData['namaKendaraan'];
            $pengisianBbm->kilometer_awal = $validatedData['kilometer_awal'];
            $pengisianBbm->kilometer_akhir = $validatedData['kilometer_akhir'];
            $pengisianBbm->brand_id = $validatedData['brand_id'];  
            $pengisianBbm->bbm_awal = $validatedData['bbm_awal'];
            $pengisianBbm->bbm_akhir = $validatedData['bbm_akhir'];
            $pengisianBbm->bbm_id = $validatedData['jenis_bbm'];
            $pengisianBbm->harga_bbm = $validatedData['harga_bbm'];
            $pengisianBbm->total_jarak = $validatedData['total_jarak'];
            $pengisianBbm->total_bbm = $validatedData['total_bbm'];
            $pengisianBbm->konsumsi_bbm = $validatedData['konsumsi_bbm'];
            $pengisianBbm->total_biaya = $validatedData['total_biaya'];
            $pengisianBbm->user_id = $validatedData['user_id']; // Menambahkan user_id ke instance Calculate
            $pengisianBbm->save();

            return redirect()->route('calculate.index')->with('success', 'Data berhasil disimpan!');
        } catch(\Exception $e){
            return redirect()->route('calculate.index')->with('error', 'Terjadi kesalahan saat menyimpan data!');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Calculate $calculate)
    {
        $calculate = Calculate::where('user_id', auth()->user()->id)
                                ->with(['bbm', 'brand'])
                                ->get();
        // dd($calculate);
        return view('user.history', ['title' => 'History'], compact('calculate'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calculate $calculate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    public function print(){
        $calculate = Calculate::where('user_id', auth()->user()->id)
                                ->with(['bbm', 'brand'])
                                ->get();

        $pdf = Pdf::loadView('rekap.print', compact('calculate'));
        return $pdf->download('rekap.pdf');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calculate $calculate)
    {
        $calculate->delete();
        return redirect('/user/history')->with('success', 'Data berhasil dihapus');
    }

}
