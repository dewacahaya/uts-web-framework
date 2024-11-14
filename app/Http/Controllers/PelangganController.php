<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Mengambil kata kunci pencarian
        $search = $request->input('search');

        // Mengambil data barang dengan pencarian
        $pelanggan = Pelanggan::when($search, function ($query, $search) {
            return $query->where('kode', 'like', "%{$search}%")
                ->orWhere('nama', 'like', "%{$search}%")
                ->orWhere('alamat', 'like', "%{$search}%")
                ->orWhere('jenis_kelamin', 'like', "%{$search}%")
                ->orWhere('tanggal_lahir', 'like', "%{$search}%");
        })->paginate(10);

        // Mengirimkan data barang ke view
        return view('pages.pelanggan.indexp', compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.pelanggan.createp');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelanggan::create([
            "kode" => $request->kode,
            "nama" => $request->nama,
            "alamat" => $request->alamat,
            "jenis_kelamin" => $request->jenis_kelamin,
            "tanggal_lahir" => $request->tanggal_lahir,
        ]);
        return redirect()->route("pelanggan.index")->with('created', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($pelanggan_id)
    {
        $pelanggan = Pelanggan::where('id', $pelanggan_id)->first();

        return view('pages.pelanggan.showp', compact('pelanggan'));
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
