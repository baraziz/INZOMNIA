<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Barang::all('id', 'nama', 'kategori', 'harga');
        return view('admin.produk.index', [
            'products' => $products
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

        return redirect()->route('produk.index');
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
            $validatedData['foto'] = $request->file('foto')->store('barang');
        }

        dd($validatedData);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
