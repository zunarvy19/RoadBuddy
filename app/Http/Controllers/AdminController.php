<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.pertamina',[
            'title' => 'Pertamina'
        ]);
    }
    public function shell(){
        return view('admin.shell',[
            'title' => 'Shell'
        ]);
    }
    public function vivo(){
        return view('admin.vivo',[
            'title' => 'Vivo'
        ]);
    }
    public function bp(){
        return view('admin.bp',[
            'title' => 'BP'
        ]);
    }

    
}
