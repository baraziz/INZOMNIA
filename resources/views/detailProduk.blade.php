<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}">
   <title>Detail Produk</title>
   <style>
      select {
         appearance: none;
         outline: 0;
         box-shadow: none;
         border: 0 !important;
         background: #000;
         background-image: none;
         flex: 1;
         padding: 0 .5em;
         color: #fff;
         cursor: pointer;
      }

      select::-ms-expand {
         display: none;
      }

      .select {
         position: relative;
         display: flex;
         width: 20em;
         height: 3em;
         line-height: 3;
         background: #5c6664;
         overflow: hidden;
         border-radius: .25em;
      }

      .select::after {
         content: '\25BC';
         position: absolute;
         top: 0;
         right: 0;
         padding: 0 1em;
         background: #000;
         cursor: pointer;
         pointer-events: none;
         transition: .25s all
      }

      .select:hover::after {
         color: #23b499;
      }
   </style>
</head>

<body>
   <nav class="navbar bg-light">
      <div class="container">
         <a class="navbar-brand" href="/">
            <p style="font-family: 'Baskervville'; font-style: normal;font-weight: 400;font-size: 30px;text-align: center;color: #000000;">INSOMNIA ZERO</p>
            <p style="margin-top: -20px;font-family: 'Poppins'; font-style: italic; font-weight: 300; font-size: 18px; line-height: 27px; color: rgba(0, 0, 0, 0.5)" class="text-center">insomniazero.com/detailProduk</p>
         </a>
      </div>
   </nav>

   <div class="main-wrapper" style="margin-top: -80px">
      <div class="container">
         <div class="product-div">
            <div class="product-div-left">
               <div class="container ">
                  <img class=" col-6" src="{{ asset('storage/' . $foto) }}" alt="watch" />
               </div>
            </div>
            <div class="product-div-right">
               <span class="product-name">(New) Analog Watch - For Men</span>
               <span class="product-price">$ 50.25</span>
               <p class="product-description">
                  {{-- {!! $deskripsi !!} --}}
               </p>
               <div class="row">
                  <div class="col">
                     <p>S: {{ $ukuran_s }}</p>
                  </div>
                  <div class="col">
                     <p>M: {{ $ukuran_m }}</p>
                  </div>
                  <div class="col">
                     <p>L: {{ $ukuran_l }}</p>
                  </div>
                  <div class="col">
                     <p>XL: {{ $ukuran_xl }}</p>
                  </div>
               </div>
               <select name="format" id="format" class="mt-1" style="">
                  <option>Select Size</option>
                  <option value="XL">XXL</option>
                  <option value="L">XL</option>
                  <option value="M">L</option>
                  <option value="S">M</option>
               </select>
               <input type="number" value="1" name="" id="" />
               <div class="btn-groups">
                  {{-- <button type="button" class="add-cart-btn"><i class="fas fa-shopping-cart"></i>add to cart</button> --}}
                  <button type="button" class="buy-now-btn"><i class="fas fa-wallet"></i>buy now</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script src="assets/js/detail.js"></script>
</body>

</html>
