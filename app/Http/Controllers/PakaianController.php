<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;

class PakaianController extends Controller
{
    public function pria()
    {
        $products = Barang::all('id', 'nama', 'harga', 'deskripsi', 'foto', 'kategori')->where('kategori', '=', 'pria');

        // return $products;
        return view('pria', ['products' => $products]);
    }

    public function wanita()
    {
        $products = Barang::all()->where('kategori', '=', 'wanita');
        return view('wanita', ['products' => $products]);
    }

    public function detailProduk(Barang $barang)
    {
        // return [$barang, 'title' => 'Detail Produk'];
        return view('detailProduk', $barang);
    }
}
