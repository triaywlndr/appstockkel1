<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stock = Stock::all();
        return view('stock.stock', compact('stock'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stock.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama'=>['required'],
                'nomor'=>['required'],
                'alamat'=>['required']
            ],
            [
                'nama.required'=>'Nama kosong',
                'nomor.required'=>'Nomor kosong',
                'alamat.required'=>'Alamat kosong'
            ]
        );

        $stock = new Stock;
        $stock-> kode=$request ['kode'];
        $stock-> namab=$request ['namab'];
        $stock-> harga=$request ['harga'];
        $stock-> stock=$request ['stock'];
        $stock-> supplier_id=$request ['supplier'];
        $stock-> save();

        if ($supplier) {
            return redirect('/supplier')->with('status', 'Data telah ditambahkan');
        } else {
            return redirect('/tambahsupplier')->with('status', 'Data Gagal');
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
