<?php

namespace App\Http\Controllers;

use App\Models\Renungan;
use Illuminate\Http\Request;

class RenunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.renungan.addRenungan');
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
       // dd($request);

       $request->validate([
        'ayat'=>'required',
        'isiRenungan'=>'required',
        'pembuat'=>'required',
        'tanggal'=>'required',
       ]);
       
        Renungan::create([
            'ayat'=>$request->ayat,
            'isiRenungan'=>$request->isiRenungan,
            'pembuat'=>$request->pembuat,
            'tanggal'=>$request->tanggal,
        ]);

        return redirect('/admin/renungan');
    }
    /**
     * Display the specified resource.
     */
    public function show(Renungan $renungan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Renungan $renungan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Renungan $renungan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Renungan $renungan)
    {
        //
    }
}
