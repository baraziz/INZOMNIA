<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Order;
use App\Models\User;
use Faker\Provider\Base;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class OrderController extends Controller
{
    public function order(Request $request, Barang $barang)
    {

        $validatedData = $request->validate([
            'ukuran' => 'String',
            'jumlah' => 'Integer'
        ]);

        $validatedData['totalHarga'] = (int)$validatedData['jumlah'] * $barang->harga;
        $validatedData['uuid'] = (string) Uuid::uuid4();

        $update = array();
        switch ($validatedData['ukuran']) {
            case 'S':
                $update['ukuran_s'] = $barang->ukuran_s - $validatedData['jumlah'];
                break;
            case 'M':
                $update['ukuran_m'] = $barang->ukuran_m - $validatedData['jumlah'];
                break;
            case 'L':
                $update['ukuran_l'] = $barang->ukuran_l - $validatedData['jumlah'];
                break;
            case 'XL':
                $update['ukuran_xl'] = $barang->ukuran_xl - $validatedData['jumlah'];
                break;
        }

        DB::transaction(function () use ($barang, $validatedData, $update) {
            $barang->ordered()->attach(
                Auth::id(),
                $validatedData
            );
            $barang->touch();
            $barang->update($update);
        });

        // $order = Order::where('uuid', '=', (string)$validatedData['uuid'])->get();


        return $this->orderDetail((string)$validatedData['uuid']);
    }

    public function orderDetail($id)
    {
        $data = collect(
            DB::table('order')
                ->join('barangs', 'barangs.id', '=', 'order.barang_id')
                ->join('users', 'users.id', '=', 'order.user_id')
                ->select(
                    'order.*',
                    'barangs.nama as nama_barang',
                    'barangs.foto as foto_barang',
                    'users.name',
                    'users.email'
                )
                ->where('order.uuid', $id)
                ->first()
        );

        return view('orderDetail', $data);
    }

    public function orderList()
    {
        $data = collect(
            DB::table('order')
                ->join('barangs', 'barangs.id', '=', 'order.barang_id')
                ->join('users', 'users.id', '=', 'order.user_id')
                ->select(
                    'order.*',
                    'barangs.nama as nama_barang',
                    'barangs.foto as foto_barang',
                    'users.name',
                    'users.email'
                )
                ->where('order.user_id', Auth::id())
                ->get()
        );

        return view('orderList', ['data' => $data]);
    }
}
