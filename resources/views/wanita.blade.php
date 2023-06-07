@extends('customer.layout.layout')

@section('navbar')
   @parent
@endsection
<link rel="stylesheet" href="assets/css/card.css" />
@section('content')
   {{-- Header --}}
   <header class="text-center text-white d-flex masthead" style="background-image: url('img/bg.png')">
      <div class="container my-auto">
         <div class="row">
            <div class="col-lg-10 mx-auto">
               <h1 class="text-uppercase"><strong>Kategori Wanita</strong></h1>
               <hr />
            </div>
         </div>
         <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5" style="font-size: 20px">
               It's Nice To Meet You
            </p>
            <a class="btn btn-primary btn-xl" role="button" href="#pilPria">Find Out More</a>
         </div>
      </div>
   </header>

   {{-- Item --}}
   <section id="pilPria">
      <h2 class="text-center" style="margin-bottom: -100px">Pilihan Wanita</h2>
      <div class="container">
         {{-- Kolom 1 --}}
         <div class="row">
            {{-- 1 --}}
            @foreach ($products as $product)
               <div class="col-lg-4 col-md-12" style="display: flex; justify-content: center">
                  <div class="containerCard">
                     <div class="products">
                        <div class="product">
                           <div>
                              <img class="image" style="height: 20rem; width: 19rem" src="{{ asset('storage/' . $product->foto) }}" alt="" />
                           </div>
                           <div class="namePrice">
                              <h3>{{ $product->nama }}</h3>
                              <span>Rp {{ $product->harga }}</span>
                           </div>
                           {{-- <p>
                              Lorem, ipsum dolor sit amet consectetur
                              adipisicing elit. Accusamus, iusto.
                           </p> --}}
                           <div class="stars">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                           </div>
                           <div class="bay">
                              <a href="detailProduk/{{ $product->id }}"><button>buy now</button></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            @endforeach
            {{-- kolom 2
            <div class="row" style="margin-top: -120px">
                1


               2
               <div class="col-lg-4 col-md-12" style="display: flex; justify-content: center">
                  <div class="containerCard">
                     <div class="products">
                        <div class="product">
                           <div class="image">
                              <img src="img/pria/2.png" alt="" />
                           </div>
                           <div class="namePrice">
                              <h3>earphone</h3>
                              <span>$ 15.99</span>
                           </div>
                           <p>
                              Lorem, ipsum dolor sit amet consectetur
                              adipisicing elit. Accusamus, iusto.
                           </p>
                           <div class="stars">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                           </div>
                           <div class="bay">
                              <button>buy now</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               3
            <div class="col-lg-4 col-md-12" style="display: flex; justify-content: center">
               <div class="containerCard">
                  <div class="products">
                     <div class="product">
                        <div class="image">
                           <img src="img/pria/1.png" alt="" />
                        </div>
                        <div class="namePrice">
                           <h3>earphone</h3>
                           <span>$ 15.99</span>
                        </div>
                        <p>
                           Lorem, ipsum dolor sit amet consectetur
                           adipisicing elit. Accusamus, iusto.
                        </p>
                        <div class="stars">
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="bay">
                           <button>buy now</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </div> --}}
   </section>
@endsection
