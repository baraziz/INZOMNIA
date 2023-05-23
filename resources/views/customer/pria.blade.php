@extends('customer.layout.layout')

@section('navbar')
   @parent
@endsection

@section('content')
   {{-- Header --}}
   <header class="text-center text-white d-flex masthead" style="background-image: url('img/bgpria.jpg')">
      <div class="container my-auto">
         <div class="row">
            <div class="col-lg-10 mx-auto">
               <h1 class="text-uppercase"><strong>Kategori Pria</strong></h1>
               <hr />
            </div>
         </div>
         <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5" style="font-size: 20px">It's Nice To Meet You</p>
            <a class="btn btn-primary btn-xl" role="button" href="#pilPria">Find Out More</a>
         </div>
      </div>
   </header>

   {{-- Item --}}
   <section id="pilPria">
      <h2 class="text-center pb-4">Pilihan Pria</h2>
      <div class="container text-center">
         @foreach ($products as $product)
            <div class="row">
               <div class="col-md-4"><a href="detailProduk1"><img src="img/pria/1.png" alt=""></a></div>
               <div class="col-md-4"><img src="img/pria/1.png" alt=""></div>
               <div class="col-md-4"><img src="img/pria/1.png" alt=""></div>
            </div>
         @endforeach
         <div class="row pt-4 mt-3">
            <div class="col-md-4"><a href="detailProduk1"><img src="img/pria/1.png" alt=""></a></div>
            <div class="col-md-4"><img src="img/pria/1.png" alt=""></div>
            <div class="col-md-4"><img src="img/pria/1.png" alt=""></div>
         </div>
      </div>
   </section>
@endsection
