<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view('supplier.supplier', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.insert');
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

        $supplier = new Supplier;
        $supplier-> nama=$request ['nama'];
        $supplier-> nomor=$request ['nomor'];
        $supplier-> alamat=$request ['alamat'];
        $supplier-> save();

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
        Supplier::destroy('id',$id);
        return redirect('/supplier');
    }
}
