<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class supplier extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('supplier.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => ['required'],
                'nomor' => ['required'],
                'alamat' => ['required',],
            ],
            [
                'nama.required' => 'Nama kosong',
                'nomor.required' => 'Nomor kosong',
                'alamat.required' => 'Alamat kosong',
            ]
        );

        $sup = new Supplier;
        $sup-> nama=$request ['nama'];
        $sup-> nomor=$request ['nomor'];
        $sup-> alamat=$request ['alamat'];
        $sup-> save();

        if($sup){
            return redirect('/supplier')->with('status', 'Data telah ditambahkan');
        } else {
            return redirect('/tambahsupplier')->with('status', 'Data telah ditambahkan');
        }
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
    public function destroy(string $id)
    {
        //
    }
}
