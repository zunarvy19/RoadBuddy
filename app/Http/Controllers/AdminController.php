<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jenis_bbm;
use App\Models\vendor;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard', [
            'title' => 'Dashboard'
        ]);
    }

    public function show(){
        return view('admin.data', [
            'title' => 'Data BBM'
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
            'harga_bbm' => 'required|numeric|min:0',
        ]);

    // dd($validateData);

        $jenisBbm = jenis_bbm::findOrFail($id);
        $jenisBbm->harga_bbm = $request->harga_bbm;
        $jenisBbm->save();

        return redirect()->route('admin.data.show')->with('success', 'Data berhasil diupdate');
    }

    public function create(){

        $data =  Jenis_bbm::with('vendor')->get();

        return view('admin.crud.create',[
            'data' => $data,
            'title' => "Tambah Data"
        ]);

    }

    
}
