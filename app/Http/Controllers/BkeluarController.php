<?php

namespace App\Http\Controllers;

use App\Models\Bkeluar;
use App\Models\Stock;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class BkeluarController extends Controller
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
        
        $bkeluar = Bkeluar::all();
        return view('barangkeluar.bkeluar', compact('bkeluar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $stock = Stock::all();
        return view('barangkeluar.insert', compact('stock', 'pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate(
            [
                'ktglf'=>['required'],
                'stock_id'=>['required'],
                'kjumlah'=>['required'],
                'pelanggan_id'=>['required'],
                'pembayaran'=>['required'],
            ],
            [
                'ktglf.required'=>'Tanggal Faktur Kosong',
                'stock_id.required'=>'Barang kosong',
                'kjumlah.required'=>'Jumlah kosong',
                'pelanggan_id.required'=>'pelanggan kosong',
                'pembayaran.required'=>'pembayaran kosong',

            ]
        );

        $bkeluar = new bkeluar;
        $bkeluar-> ktglf=$request ['ktglf'];
        $bkeluar-> stock_id=$request ['stock_id'];
        $bkeluar-> kjumlah=$request ['kjumlah'];
        $bkeluar-> pelanggaan_id=$request ['pelanggan_id'];
        $bkeluar-> pembayaran=$request ['pembayaran'];
        $bkeluar-> save();

        if ($bkeluar) {
            return redirect('/bkeluar')->with('status', 'Data telah ditambahkan');
        } else {
            return redirect('/tambahbkeluar')->with('status', 'Data Gagal');
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
        
        $bkeluar = Bkeluar::find($id);
        return view('barangkeluar.edit', compact('bkeluar'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { 
        $request->validate(
            [
                'stock_id'=>['required'],
                'faktur'=>['required'],
                'tempo'=>['required'],
                'pelanggan_id'=>['required'],
                'pembayaran'=>['required'],
               
            ],
            [
                'stock_id.required'=>'stock kosong',
                'faktur.required'=>'faktor kosong',
                'tempo.required'=>'tempo kosong',
                'pelanggan_id.required'=>'pelanggan kosong',
                'pembayaran.required'=>'pembayaran kosong',
                
            ]
        );

        $bkeluar =  Bkeluar::find($id);
        $bkeluar -> stock_id=$request ['stock_id'];
        $bkeluar -> faktur=$request ['faktur'];
        $bkeluar -> tempo=$request ['tempo'];
        $bkeluar -> pelanggan_idt=$request ['pelanggan_id'];
        $bkeluar-> pembayaran=$request ['pembayaran'];
        $pelanggan-> save();

        if ($bkeluar) {
            return redirect('/bkeluar')->with('status', 'Data telah ditambahkan');
        } else 
        {
            return redirect('/tambahbkeluar')->with('status', 'Data Gagal');
        }
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        Bkeluar::destroy('id',$id);
        return redirect('/bkeluar');
    }
 }
