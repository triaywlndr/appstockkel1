<?php

namespace App\Http\Controllers;

use App\Models\Bmasuk;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BmasukController extends Controller
{
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
<<<<<<< HEAD
        
=======
        $supplier = Supplier::all();
        return view('barangmasuk.insert', compact('supplier'));
>>>>>>> 58e21f20cadb92a5e552486092cd3733abf9ba9b
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
