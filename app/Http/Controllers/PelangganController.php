<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('pelanggan.pelanggan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'namap'=>['required'],
                'no'=>['required'],
                'jenisk'=>['required'],
                'alamat'=>['required'],
                'kota'=>['required'],
                'provinsi'=>['required'],
            ],
            [
                'namap.required'=>'Nama kosong',
                'no.required'=>'Nomor kosong',
                'jenisk.required'=>'Alamat kosong',
                'alamatt.required'=>'Alamat kosong',
                'kota.required'=>'Kota kosong',
                'provinsi.required'=>'Provinsi kosong'
            ]
        );

        $pelanggan = new Pelanggan;
        $pelanggan-> namap=$request ['namap'];
        $pelanggan-> no=$request ['no'];
        $pelanggan-> jenisk=$request ['jenisk'];
        $pelanggan-> alamatt=$request ['alamatt'];
        $pelanggan-> kota=$request ['kota'];
        $pelanggan-> provinsi=$request ['provinsi'];
        $pelanggan-> save();

        if ($pelanggan) {
            return redirect('/pelanggan')->with('status', 'Data telah ditambahkan');
        } else {
            return redirect('/tambahpelanggan')->with('status', 'Data Gagal');
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
