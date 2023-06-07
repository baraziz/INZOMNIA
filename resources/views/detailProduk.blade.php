<nav class="navbar bg-light">
   <div class="container">
      <a class="navbar-brand" href="/">
         <p style="font-family: 'Baskervville'; font-style: normal;font-weight: 400;font-size: 30px;text-align: center;color: #000000;">INSOMNIA ZERO</p>
         <p style="margin-top: -20px;font-family: 'Poppins'; font-style: italic; font-weight: 300; font-size: 18px; line-height: 27px; color: rgba(0, 0, 0, 0.5)" class="text-center">insomniazero.com/detailProduk</p>
      </a>
   </div>
</nav>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/detail.css">
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
<div class="main-wrapper" style="margin-top: -80px">
   <div class="container">
      <div class="product-div">
         <div class="product-div-left">
            <div class="img-container">
               @if (isset($foto))
                  <img src="" alt="watch" />
               @endif
               <img src="img/pria/1.png" alt="watch" />
            </div>
            <div class="hover-container">
               <div><img src="img/pria/2.png" /></div>
               <div><img src="img/pria/3.png" /></div>
               <div><img src="img/pria/4.png" /></div>
               <div><img src="img/pria/5.png" /></div>
               <div><img src="img/pria/2.png" /></div>
            </div>
         </div>
         <div class="product-div-right">
            <span class="product-name">(New) Analog Watch - For Men</span>
            <span class="product-price">$ 50.25</span>
            <p class="product-description">
               {{-- {!! $deskripsi !!} --}}
            </p>
            <select name="format" id="format" class="mt-1" style="">
               <option>Select Size</option>
               <option value="XXL">XXL</option>
               <option value="XL">XL</option>
               <option value="L">L</option>
               <option value="M">M</option>
            </select>
            <input type="number" value="1" name="" id="" />
            <div class="btn-groups">
               <button type="button" class="add-cart-btn"><i class="fas fa-shopping-cart"></i>add to cart</button>
               <button type="button" class="buy-now-btn"><i class="fas fa-wallet"></i>buy now</button>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="assets/js/detail.js"></script>
