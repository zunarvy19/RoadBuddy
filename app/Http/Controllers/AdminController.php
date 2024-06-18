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

    
}
