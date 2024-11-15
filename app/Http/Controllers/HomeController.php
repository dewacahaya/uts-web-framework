<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pelanggan2301010032;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::paginate(10);

        // Menghitung jumlah total data barang
        $jumlahBarang = Barang::count();
        $jumlahPelanggan = Pelanggan2301010032::count();

        // Mengirimkan data ke view home
        return view('pages.home', compact('barang', 'jumlahBarang', 'jumlahPelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
