<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('user.tutorial', ['title' => 'Tutorial']);
    }

    public function home(){
        return view('user.history',['title' => 'History']);
    }
}


