<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan2301010032;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Mengambil kata kunci pencarian
        $searchp = $request->input('searchp');

        // Mengambil data barang dengan pencarian
        $pelanggan = Pelanggan2301010032::when($searchp, function ($query, $searchp) {
            return $query->where('kode', 'like', "%{$searchp}%")
                ->orWhere('nama', 'like', "%{$searchp}%")
                ->orWhere('alamat', 'like', "%{$searchp}%")
                ->orWhere('jenis_kelamin', 'like', "%{$searchp}%")
                ->orWhere('tanggal_lahir', 'like', "%{$searchp}%");
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
        Pelanggan2301010032::create([
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
        $pelanggan = Pelanggan2301010032::where('id', $pelanggan_id)->first();

        return view('pages.pelanggan.showp', compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $pelanggan_id)
    {
        $pelanggan = Pelanggan2301010032::findOrFail($pelanggan_id);

        return view("pages.pelanggan.editp", compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $pelanggan_id)
    {
        Pelanggan2301010032::where('id', $pelanggan_id)->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);

        return redirect()->route('pelanggan.index')->with('updated', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $pelanggan_id)
    {
        $pelanggan = Pelanggan2301010032::where('id', $pelanggan_id)->delete();

        return redirect()->route('pelanggan.index')->with('deleted', 'Data Berhasil Dihapus!');
    }
}
