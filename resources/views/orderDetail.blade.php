@extends('customer.layout.layout')

@section('content')

   <div class="container border rounded-3 my-5 px-5 py-3">

      <div class="container">
         <div class="row">
            <div class="col-3">
               <p>Kode Transaksi</p>
            </div>
            <div class="col">
               <p>: {{ $uuid }}</p>
            </div>
         </div>

         <div class="row">
            <div class="col-3">
               <p>Nama Pembeli</p>
            </div>
            <div class="col">
               <p>: {{ $name }}</p>
            </div>
         </div>
         <div class="row">
            <div class="col-3">
               <p>Nama Barang</p>
            </div>
            <div class="col">
               <p>: {{ $nama_barang }}</p>
            </div>
         </div>
         <div class="row">
            <div class="col-3">
               <p>Foto Barang</p>
            </div>
            <div class="col">
               <img class="img col-2" src="{{ asset('/storage/' . $foto_barang) }}" alt="">
            </div>
         </div>
         <div class="row">
            <div class="col-3">
               <p>Jumlah Barang</p>
            </div>
            <div class="col">
               <p>: {{ $jumlah }}</p>
            </div>
         </div>
         <div class="row">
            <div class="col-3">
               <p>Total Harga</p>
            </div>
            <div class="col">
               <p>: {{ $totalHarga }}</p>
            </div>
         </div>
         <div class="row">
            <div class="col">
               <p>PEMBAYARAN MELALUI REK: *****, KIRIM BUKTI PEMBAYARAN PADA LINK  <a href="https://wa.me/6285799857403.">BERIKUT</a></p>
            </div>
         </div>
      </div>
      <a class="btn btn-primary" href="/home" role="button">HOME</a>
      <a class="btn btn-primary" href="/home#category" role="button">Lanjut Belanja</a>
   </div>
@endsection
