<?php

namespace App\Http\Controllers;

use App\Models\Bkeluar;
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
        
        return view('barangkeluar.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate(
            [
                'stock_id'=>['required'],
                'faktur'=>['required'],
                'tempo'=>['required'],
                'pelanggan_id'=>['required'],
                'kota'=>['required'],
                'pembayaran'=>['required'],
            ],
            [
                'stock_id.required'=>'stock kosong',
                'faktur'=>'faktor kosong',
                'tempo.required'=>'tempo kosong',
                'pelanggan_id.required'=>'pelanggan kosong',
                'pembayaran.required'=>'pembayaran kosong',

            ]
        );

        $bkeluar = new bkeluar;
        $bkeluar-> namap=$request ['stock_id'];
        $bkeluar-> no=$request ['faktur'];
        $bkeluar-> jenisk=$request ['tempo'];
        $bkeluar-> alamatt=$request ['pelanggan_id'];
        $bkeluar-> kota=$request ['pembayaran'];
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
