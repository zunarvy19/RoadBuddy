<?php

namespace App\Http\Controllers;


use App\Models\Calculate;
use App\Models\jenis_bbm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $totalData = Calculate::where('user_id', auth()->user()->id)->count();

        return view('user.dashboardUser',['title' => 'Home'], compact('totalData'));
    }

    public function index(){

        $dataUser = Calculate::where('user_id', auth()->user()->id)->with('bbm')->get();

        

        return view('user.history', ['title' => 'History',], compact('dataUser'));
    }

}


