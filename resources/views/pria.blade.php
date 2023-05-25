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
      <div class="container">
         {{-- @foreach ($products as $product) --}}
            <div class="row">
               <div class="col-md-4" style="display: flex; justify-content: center">
                  <div class="card" style="width: 18rem;">
                     <a href="img/pria/1.png"><img src="img/pria/1.png" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                       <p class="card-text" style="font-weight: 800">Nama Barang</p>
                       <p class="card-text">Lorem ipsum dolor sit amet.</p>
                       <p class="card-text">Harga :</p>
                       <button class="btn btn-primary"><a href="detailProduk1" style="color: white; text-decoration: none;">Lihat Detail</a></button>
                     </div>
                   </div>
               </div>
               <div class="col-md-4" style="display: flex; justify-content: center">
                  <div class="card" style="width: 18rem;">
                     <a href="img/pria/2.png"><img src="img/pria/2.png" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                        <p class="card-text" style="font-weight: 800">Nama Barang</p>
                        <p class="card-text">Lorem ipsum dolor sit amet.</p>
                        <p class="card-text">Harga :</p>
                       <button class="btn btn-primary">Lihat Detail</button>
                     </div>
                   </div>
               </div>
               <div class="col-md-4" style="display: flex; justify-content: center">
                  <div class="card" style="width: 18rem;">
                     <a href="img/pria/3.png"><img src="img/pria/3.png" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                        <p class="card-text" style="font-weight: 800">Nama Barang</p>
                        <p class="card-text">Lorem ipsum dolor sit amet.</p>
                        <p class="card-text">Harga : </p>
                       <button class="btn btn-primary">Lihat Detail</button>
                     </div>
                   </div>
               </div>
               
               
               
            </div>
         {{-- @endforeach --}}
         <div class="row pt-4 mt-3">
            <div class="col-md-4" style="display: flex; justify-content: center">
               <div class="card" style="width: 18rem;">
                  <a href="img/pria/4.png"><img src="img/pria/4.png" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="btn btn-primary">Lihat Detail</button>
                  </div>
                </div>
            </div>
            <div class="col-md-4" style="display: flex; justify-content: center">
               <div class="card" style="width: 18rem;">
                  <a href="img/pria/5.png"><img src="img/pria/5.png" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="btn btn-primary">Lihat Detail</button>
                  </div>
                </div>
            </div>
            <div class="col-md-4" style="display: flex; justify-content: center">
               <div class="card" style="width: 18rem;">
                  <a href="img/pria/3.png"><img src="img/pria/3.png" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="btn btn-primary">Lihat Detail</button>
                  </div>
                </div>
            </div>
            
            
            
         </div>
      </div>
   </section>
@endsection
