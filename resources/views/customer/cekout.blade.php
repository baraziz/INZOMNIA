@extends('layout.navbar')

@section('content')

<style>
    img {
        width: 15%;
        height: auto;
    }
</style>
<p style="margin-top: -20px; font-family: 'Poppins'; font-style: italic; font-weight: 300; font-size: 18px; line-height: 27px; color: rgba(0, 0, 0, 0.5)" class="text-center">insomniazero.com/cekout</p>

<section class="pt-4 mt-4">
    <div class="container" style="display: flex; justify-content:center; padding-top: 20px" >
        <img src="img/cekout/mastercard.png" alt="">
        <img src="img/cekout/paypal.png" alt="">
        <img src="img/cekout/whatsapp.png" alt="">
    </div>
</section>

@endsection