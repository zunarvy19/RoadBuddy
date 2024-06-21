<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculate;

class HomeController extends Controller
{

    public function home(){
        $totalData = Calculate::where('user_id', auth()->user()->id)->count();

        return view('user.dashboardUser',['title' => 'Home'], compact('totalData'));

    }

    /**
     * Display a listing of the resource.
     */
    public function index(){

        $calculate = Calculate::where('user_id', auth()->user()->id)->with('bbm')->get();

        return view('user.history', ['title' => 'History',], compact('calculate'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calculate $id)
    {
        $calculate = Calculate::find($id);
        $calculate -> delete();
        return redirect('/user/history')->with('success', 'Data berhasil dihapus');
    }
}
