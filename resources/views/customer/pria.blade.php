@extends('customer.layout.layout')

@section('navbar')
   @parent
@endsection
<link rel="stylesheet" href="assets/css/card.css">
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
<<<<<<< HEAD
         {{-- @foreach ($products as $product) --}}
            <div class="row">
               <div class="col-md-4"><div class="cardcontainer">
                  <div class="photo">
                      <img src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500">
                      <div class="photos">Photos</div>
                  </div>
                  <div class="content">
                      <p class="txt4">City Lights In Newyork</p>
                      <p class="txt5">A city that never sleeps</p>
                      <p class="txt2">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
                  </div>
                  <div class="footer">
                      <p><a class="waves-effect waves-light btn" href="#">Read More</a><a id="heart"><span class="like"><i class="fab fa-gratipay"></i>Like</span></a></p>
                      <p class="txt3"><i class="far fa-clock"></i>10 Minutes Ago <span class="comments"><i class="fas fa-comments"></i>45 Comments</span></p>
                  </div>
              </div></div>
               <div class="col-md-4"><img src="img/pria/1.png" alt=""></div>
               <div class="col-md-4"><img src="img/pria/1.png" alt=""></div>
            </div>
         {{-- @endforeach --}}
         <div class="row pt-4 mt-3">
=======
         <div class="row">
            @php($num = 1)
            @foreach ($products as $product)
               <div class="col-md-4">
                  <a href="detailProduk1">
                     <img class="col-12 img-thumbnail" style="height: 30rem" src="{{ asset('storage/' . $product->foto) }}" alt="">
                  </a>
               </div>
               @if ($num % 3 === 0)
                  <div class="w-100 mb-4"></div>
                  @php($num = 1)
               @endif
               @php($num++)
            @endforeach
         </div>
         {{-- <div class="col-md-4"><img src="img/pria/1.png" alt=""></div>
            <div class="col-md-4"><img src="img/pria/1.png" alt=""></div> --}}
         {{-- <div class="row pt-4 mt-3">
>>>>>>> 1786bf4c5d81c34dec2f0c4168a713638fad9f87
            <div class="col-md-4"><a href="detailProduk1"><img src="img/pria/1.png" alt=""></a></div>
            <div class="col-md-4"><img src="img/pria/1.png" alt=""></div>
            <div class="col-md-4"><img src="img/pria/1.png" alt=""></div>
         </div> --}}
      </div>
   </section>
@endsection
