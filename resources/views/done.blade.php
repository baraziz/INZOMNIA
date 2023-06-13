@extends('customer.layout.layout')
@section('content')
<div class="tengah" style="justify-content: center; display: flex; padding-top: 50px">
    <img src="img/ceklis.png" alt="" />
  </div>
  <div class="tengah" style="justify-content: center; display: flex">
    <p>Pembayaran Berhasil</p>
  </div>
  <div class="tengah" style="justify-content: center; display: flex; ">
    <a class="btn btn-primary" style="text-decoration:none; color: white; padding: 10px" href="/home" role="button">HOME</a>
    <a class="btn btn-primary" style="text-decoration:none; color: white; padding: 10px;" href="/home#category" role="button">Lanjut Belanja </a>   
  </div>
  @endsection
  