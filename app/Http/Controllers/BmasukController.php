<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Bmasuk;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BmasukController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bmasuk = Bmasuk::all();
        return view('barangmasuk.bmasuk', compact('bmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $supplier = Supplier::all();
        $stock = Stock::all();
        return view('barangmasuk.insert', compact('supplier', 'stock'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'tglf'=>['required'],
                'stock_id'=>['required'],
                'supplier_id'=>['required'],
                'mharga'=>['required'],
                'mjumlah'=>['required'],
                'tgld'=>['required'],
            ],
            [
                'tglf'=>'Tanggal Faktur Kosong',
                'stock_id'=>'Nama Barang Kosong',
                'supplier_id'=>'Supplier Kosong',
                'mharga'=>'Harga Kosong',
                'mjumlah'=>'Jumlah Kosong',
                'tgld'=>'Tanggal Dibuat Kosong',
            ]
        );

        $bmasuk = new Bmasuk;
        $bmasuk-> tglf=$request ['tglf'];
        $bmasuk-> stock_id=$request ['stock_id'];
        $bmasuk-> supplier_id=$request ['supplier_id'];
        $bmasuk-> mharga=$request ['mharga'];
        $bmasuk-> mjumlah=$request ['mjumlah'];
        $bmasuk-> tgld=$request ['tgld'];
        $bmasuk-> save();

        if ($bmasuk) {
            return redirect('/bmasuk')->with('status', 'Data telah ditambahkan');
        } else {
            return redirect('/tambahbmasuk')->with('status', 'Data Gagal');
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
        $supplier = Supplier::all();
        $stock = Stock::all();
        $bmasuk = Bmasuk::find($id);
        return view('barangmasuk.edit', compact('bmasuk','supplier','stock'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'tglf'=>['required'],
                'stock_id'=>['required'],
                'supplier_id'=>['required'],
                'mharga'=>['required'],
                'mjumlah'=>['required'],
                'tgld'=>['required'],
            ],
            [
                'tglf'=>'Tanggal Faktur Kosong',
                'stock_id'=>'Nama Barang Kosong',
                'supplier_id'=>'Supplier Kosong',
                'mharga'=>'Harga Kosong',
                'mjumlah'=>'Jumlah Kosong',
                'tgld'=>'Tanggal Dibuat Kosong',
            ]
        );

        $bmasuk = Bmasuk::find($id);
        $bmasuk-> tglf=$request ['tglf'];
        $bmasuk-> stock_id=$request ['stock_id'];
        $bmasuk-> supplier_id=$request ['supplier_id'];
        $bmasuk-> mharga=$request ['mharga'];
        $bmasuk-> mjumlah=$request ['mjumlah'];
        $bmasuk-> tgld=$request ['tgld'];
        $bmasuk-> save();

        if ($bmasuk) {
            return redirect('/bmasuk')->with('status', 'Data telah ditambahkan');
        } else {
            return redirect('/editbmasuk/{id}')->with('status', 'Data Gagal');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Bmasuk::find($id);
        return redirect('/bmasuk');
    }
}
