<?php

namespace App\Http\Controllers;

use App\Models\Jemaat;
use App\Http\Requests\StoreJemaatRequest;
use App\Http\Requests\UpdateJemaatRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.jemaat.addJemaat');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
   
    }

    /**
     * Store a newly created resource in storage.
     */
    function store(StoreJemaatRequest $request)
    {
    //    dd($request);
       Jemaat::create([
            'nama'=>$request->namaLengkap,
            'jenisKelamin'=>$request->jenisKelamin,
            'alamat'=>$request->alamat,
            'noHp'=>$request->noHp,
            'tanggalLahir'=>$request->tanggalLahir,
            'tempatLahir'=>$request->tempatLahir,
       ]);

       return redirect('/jemaat');
    }

    // function add(Request $request){

    //     $validatedData = $request->validate([
    //         'namaLengkap'=>'required',
    //         'jenisKelamin'=>'required',
    //         'alamat'=>'required',
    //         'noHp'=>'required',
    //         'tempatLahir'=>'required',
    //         'tanggalLahir'=>'required',
    //     ]);
    //     dd('testt');
    // }
    
    /**
     * Display the specified resource.
     */
    public function show(Jemaat $jemaat)
    {
        $jemaats = DB::table('jemaats')->paginate(5);
        return view('admin.jemaat.jemaatShow',["jemaats"=>$jemaats]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jemaat $jemaat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJemaatRequest $request, Jemaat $jemaat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jemaat $jemaat)
    {
        //
    }
}
