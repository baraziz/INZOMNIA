@extends('customer.layout.layout') @section('navbar') @parent @endsection
<link rel="stylesheet" href="assets/css/card.css" />
@section('content') {{-- Header --}}
<header
    class="text-center text-white d-flex masthead"
    style="background-image: url('img/bgpria.jpg')"
>
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase"><strong>Kategori Pria</strong></h1>
                <hr />
            </div>
        </div>
        <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5" style="font-size: 20px">
                It's Nice To Meet You
            </p>
            <a class="btn btn-primary btn-xl" role="button" href="#pilPria"
                >Find Out More</a
            >
        </div>
    </div>
</header>

{{-- Item --}}
<section id="pilPria">
    <h2 class="text-center" style="margin-bottom: -100px">Pilihan Pria</h2>
    <div class="container">
      {{-- Kolom 1 --}}
        <div class="row">
         {{-- 1 --}}
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
                                <a href="detailProduk"><button>buy now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 2 --}}
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

            {{-- 3 --}}
            <div
                class="col-lg-4 col-md-12"
                style="display: flex; justify-content: center"
            >
            <div class="containerCard">
               <div class="products">
                   <div class="product">
                       <div class="image">
                           <img
                               src="img/pria/1.png"
                               alt=""
                           />
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
        </div>

        {{-- kolom 2 --}}
        <div class="row" style="margin-top: -120px">
         {{-- 1 --}}
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
                                <a href="detailProduk"><button>buy now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 2 --}}
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

            {{-- 3 --}}
            <div
                class="col-lg-4 col-md-12"
                style="display: flex; justify-content: center"
            >
            <div class="containerCard">
               <div class="products">
                   <div class="product">
                       <div class="image">
                           <img
                               src="img/pria/1.png"
                               alt=""
                           />
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
        </div>
</section>
@endsection
