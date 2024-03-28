<?php

namespace App\Http\Controllers;

use App\Models\Bkeluar;
use App\Models\Bmasuk;
use Illuminate\Http\Request;

class RecapController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tgl_mulai      = $request->tgl_mulai;
        $tgl_selesai    = $request->tgl_selesai;
        if ($tgl_mulai or $tgl_selesai) {
            $bmasuk  = Bmasuk::whereBetween('tglf', [$tgl_mulai, $tgl_selesai])->get();
            $bkeluar  = Bkeluar::whereBetween('ktglf', [$tgl_mulai, $tgl_selesai])->get();
            $sum_total  = Bkeluar::whereBetween('ktglf', [$tgl_mulai, $tgl_selesai])->sum('subtotal');

            return view('recap.recap',  compact('bkeluar', 'bmasuk'));
        } else {

            $bmasuk = Bmasuk::all();
            $bkeluar = Bkeluar::all();
            $sum_total  = Bkeluar::sum('subtotal');
            return view('recap.recap',  compact('bkeluar', 'bmasuk'));
        }
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
