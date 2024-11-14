<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(Request $request)
    {
        // Mengambil kata kunci pencarian
        $search = $request->input('search');

        // Mengambil data barang dengan pencarian
        $barang = Barang::when($search, function ($query, $search) {
            return $query->where('kode', 'like', "%{$search}%")
                ->orWhere('name', 'like', "%{$search}%")
                ->orWhere('harga', 'like', "%{$search}%");
        })->paginate(10);

        // Mengirimkan data barang ke view
        return view('pages.barang.index', compact('barang'));
    }


    public function create()
    {
        return view("pages.barang.create");
    }

    public function store(Request $request)
    {
        Barang::create([
            "kode" => $request->kode,
            "name" => $request->name,
            "harga" => $request->harga,
        ]);
        return redirect()->route("barang.index")->with('created', 'Data berhasil ditambahkan!');
    }

    public function edit($barang_id)
    {
        // cara 1
        $barang = Barang::findOrFail($barang_id);

        // // cara 2
        // $barang = Barang::find($barang_id);

        // // cara 3
        // $barang = Barang::where('id', $barang_id)->first();

        // cara 4
        // $barang = Barang::where('id', $barang_id)->firstOrFail();

        return view("pages.barang.edit", compact('barang'));
    }

    public function update(Request $request, $barang_id)
    {
        Barang::where('id', $barang_id)->update([
            'kode' => $request->kode,
            'name' => $request->name,
            'harga' => $request->harga,
        ]);

        return redirect()->route('barang.index')->with('updated', 'Data Berhasil Diubah!');
    }

    public function show($barang_id)
    {
        $barang = Barang::where('id', $barang_id)->first();

        return view('pages.barang.show', compact('barang'));
    }

    public function destroy($barang_id)
    {
        $barang = Barang::where('id', $barang_id)->delete();

        return redirect()->route('barang.index')->with('deleted', 'Data Berhasil Dihapus!');
    }
}
