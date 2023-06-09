<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    private const PAGE = "PRODUK";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Barang::all('id', 'nama', 'kategori', 'harga');
        return view('admin.produk.index', [
            'products' => $products,
            'title' => ProdukController::PAGE
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->foto);
        $validatedData = $request->validate([
            'nama'      => 'required',
            'ukuran_s'  => 'nullable|integer',
            'ukuran_m'  => 'nullable|integer',
            'ukuran_l'  => 'nullable|integer',
            'ukuran_xl' => 'nullable|integer',
            'harga'     => 'required|integer',
            'kategori'  => 'required',
            'deskripsi' => 'required',
            'foto'      => 'required|file|image'
        ]);

        $validatedData['foto'] = $request->file('foto')->store('barang');

        Barang::create([
            'nama' => $validatedData['nama'],
            'ukuran_s' => $validatedData['ukuran_s'],
            'ukuran_m' => $validatedData['ukuran_m'],
            'ukuran_l' => $validatedData['ukuran_l'],
            'ukuran_xl' => $validatedData['ukuran_xl'],
            'kategori' => $validatedData['kategori'],
            'harga' => $validatedData['harga'],
            'deskripsi' => $validatedData['deskripsi'],
            'foto' => $validatedData['foto']
        ]);

        return redirect()->route('produk.index')->with('status', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        $barang->foto = asset('storage/' . $barang->foto);
        $barang->harga = number_format($barang->harga, 0, ',', '.');
        return view('admin.produk.show', $barang);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        return view('admin.produk.edit', $barang);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $validatedData = $request->validate([
            'nama'      => 'required',
            'ukuran_s'  => 'nullable|integer',
            'ukuran_m'  => 'nullable|integer',
            'ukuran_l'  => 'nullable|integer',
            'ukuran_xl' => 'nullable|integer',
            'harga'     => 'required|integer',
            'kategori'  => 'required',
            'deskripsi' => 'required',
            'foto'      => 'file|image'
        ]);

        if ($request->file('foto')) {
            Storage::delete($barang->foto);
            $validatedData['foto'] = $request->file('foto')->store('barang');
        } else {
            $validatedData['foto'] = $barang->foto;
        }

        $barang->update([
            'nama' => $validatedData['nama'],
            'ukuran_s' => $validatedData['ukuran_s'],
            'ukuran_m' => $validatedData['ukuran_m'],
            'ukuran_l' => $validatedData['ukuran_l'],
            'ukuran_xl' => $validatedData['ukuran_xl'],
            'kategori' => $validatedData['kategori'],
            'harga' => $validatedData['harga'],
            'deskripsi' => $validatedData['deskripsi'],
            'foto' => $validatedData['foto']
        ]);

        return redirect()->route('produk.index')->with('status', "Data Berhasil Diubah");

        // dd($validatedData);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        Storage::delete($barang->foto);
        $barang->delete();

        return redirect()->route('produk.index');
    }
}
