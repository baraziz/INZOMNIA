<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;

class PakaianController extends Controller
{
    public function pria()
    {
        $products = Barang::all()->where('kategori', '=', 'pria');
        return view('customer.pria', ['products' => $products]);
    }
    public function wanita()
    {
        $products = Barang::all()->where('kategori', '=', 'wanita');
        return view('customer.wanita1', ['products' => $products]);
    }
}
