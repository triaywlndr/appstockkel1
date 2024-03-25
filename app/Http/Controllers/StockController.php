<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
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
                'kode'=>['required'],
                'namab'=>['required'],
                'harga'=>['required', 'numeric'],
                'stocka'=>['required', 'numeric'],
            ],
            [
                'kode'=>'Kode Kosong',
                'namab'=>'Nama Kosong',
                'harga'=>'Harga Kosong', 'Harga Harus Nomor',
                'stocka'=>'Kode Kosong', 'Stock Harus Nomor',
            ]
        );

        $stock = new Stock;
        $stock-> kode=$request ['kode'];
        $stock-> namab=$request ['namab'];
        $stock-> harga=$request ['harga'];
        $stock-> stocka=$request ['stocka'];
        $stock-> save();

        if ($stock) {
            return redirect('/stock')->with('status', 'Data telah ditambahkan');
        } else {
            return redirect('/tambahstock')->with('status', 'Data Gagal');
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
        $stock = Stock::find($id);
        return view('stock.edit', compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
        [
            'kode'=>['required'],
            'namab'=>['required'],
            'harga'=>['required', 'numeric'],
            'stocka'=>['required', 'numeric'],
        ],
        [
            'kode'=>'Kode Kosong',
            'namab'=>'Nama Kosong',
            'harga'=>'Harga Kosong', 'Harga Harus Nomor',
            'stocka'=>'Kode Kosong', 'Stock Harus Nomor',
        ]
    );

    $stock = Stock::find($id);
    $stock-> kode=$request ['kode'];
    $stock-> namab=$request ['namab'];
    $stock-> harga=$request ['harga'];
    $stock-> stocka=$request ['stocka'];
    $stock-> save();

    if ($stock) {
        return redirect('/stock')->with('status', 'Data telah ditambahkan');
    } else {
        return redirect('/updatestock')->with('status', 'Data Gagal');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Stock::destroy('id',$id);
        return redirect('/stock');
    }
}
