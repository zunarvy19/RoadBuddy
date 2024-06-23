<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jenis_bbm;

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
        $vivo = Jenis_bbm::with('vendor')->where('vendor_id', 2)->get();
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

    
}
