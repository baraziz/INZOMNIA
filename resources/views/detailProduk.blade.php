@extends('layout.navbar')

@section('content')
<style>
    .btn-primary {
        background-color: rgb(209, 136, 0);
        outline-color: none 
    }
    .btn-primary:hover{
        background-color: burlywood
    }
    .btn-secondary {
        background-color: rgb(32, 212, 23)
    }
    .btn-secondary:hover {
        background-color: rgb(124, 255, 118)
    }
</style>
<p style="margin-top: -20px; font-family: 'Poppins'; font-style: italic; font-weight: 300; font-size: 18px; line-height: 27px; color: rgba(0, 0, 0, 0.5)" class="text-center">insomniazero.com/detailProduk</p>

<section>
    <div class="container" style="display: flex; justify-content:center; padding-top: 20px" >
        <div class="card" style="width: 18rem;">
            <img src="img/pria/1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p>stok : 100</p>
                
              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum, eos!</p>
              <a href="cekout"><button type="button" class="btn btn-primary">Beli</button></a>
              <button type="button" class="btn btn-secondary">Hubungi Kami</button>
            </div>
          </div>
    </div>
</section>

@endsection
