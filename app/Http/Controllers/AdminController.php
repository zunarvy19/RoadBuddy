<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jenis_bbm;
use App\Models\vendor;

class AdminController extends Controller
{
    public function index(){

        $totalVendor = Vendor::count();

        $totalBbm = jenis_bbm::count();

        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'totalVendor' => $totalVendor,
            'totalBbm' => $totalBbm
        ]);
    }

    public function show(){

        $data = Jenis_bbm::with('vendor')->get();
        // dd($data);
        return view('admin.data', [
            'title' => 'Data BBM',
            'data' => $data
        ]);
    }

    public function pertamina(){
        $pertamina = Jenis_bbm::with('vendor')->where('vendor_id', 1)->get();
        // dd($pertamina);
        return view('admin.pertamina',[
            'title' => 'Pertamina'
        ], compact('pertamina'));
    }
    public function shell(){
        $shell = Jenis_bbm::with('vendor')->where('vendor_id', 2)->get();
        return view('admin.shell',[
            'title' => 'Shell'
        ], compact('shell'));
    }
    public function vivo(){
        $vivo = Jenis_bbm::with('vendor')->where('vendor_id', 3)->get();
        return view('admin.vivo',[
            'title' => 'Vivo'
        ], compact('vivo'));
    }
    public function bp(){
        $bp = Jenis_bbm::with('vendor')->where('vendor_id', 4)->get();
        return view('admin.bp',[
            'title' => 'BP'
        ], compact('bp'));
    }

    public function edit($id){

        // $jenis_bbm->load('vendor');
        $data = jenis_bbm::find($id);
        // dd($data);

        return view('admin.crud.edit', [
            'data' => $data,
            'title' => 'Edit BBM',
        ]);
    }   

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'jenis_bbm' => 'required|string|max:20',
            'harga_bbm' => 'required|numeric|min:0',
        ]);

    // dd($validateData);

        $jenisBbm = jenis_bbm::findOrFail($id);
        $jenisBbm->jenis_bbm = $request->jenis_bbm;
        $jenisBbm->harga_bbm = $request->harga_bbm;
        $jenisBbm->save();

        return redirect()->route('admin.data.show')->with('success', 'Data berhasil diupdate');
    }

    public function create($id){

        $data =  Jenis_bbm::find($id);

        return view('admin.crud.create',[
            'data' => $data,
            'title' => "Tambah Data"
        ]);

    }

    public function store(Request $request, $id)
    {
        // Validasi input
        $inputData = $request->validate([
            'vendor_id' => 'required|exists:vendors,id',
            'jenis_bbm' => 'required|string|max:20',
            'harga_bbm' => 'required|numeric',
        ]);

        // dd($inputData);

        // Simpan data ke dalam model Jenis_bbm
        Jenis_bbm::create([
            'vendor_id' => $request->vendor_id,
            'jenis_bbm' => $request->jenis_bbm,
            'harga_bbm' => $request->harga_bbm,
        ]);

        // Redirect ke halaman yang diinginkan dengan pesan sukses
        return redirect()->route('admin.data.show')->with('success', 'Data berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        // Temukan data berdasarkan ID
        $data = Jenis_bbm::findOrFail($id);

        // Hapus data
        $data->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.data.show')->with('success', 'Data berhasil dihapus.');
    }

    
}
