@extends('customer.layout.layout')
<div class="bg-primary">
   @section('navbar')
      @parent
   @endsection
</div>

<body class="bg-primary text-white">
   <div class="container my-5 pt-5">
      @foreach ($data as $info)
         <div class="container bg-secondary border rounded-3 px-5 py-3">
            <div class="row">
               <div class="container col-2 align-middle text-center">
                  <img class="img-thumbnail col-8" src="{{ asset('storage/' . $info->foto_barang) }}" alt="">
               </div>
               <div class="col align-middle">
                  <div class="row">
                     <div class="col-2">
                        <p>Code</p>
                     </div>
                     <div class="col-6">
                        <p>: {{ $info->uuid }}</p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-2">
                        <p>Nama Barang</p>
                     </div>
                     <div class="col-6">
                        <p>: {{ $info->nama_barang }}</p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-2">
                        <p>Harga</p>
                     </div>
                     <div class="col-6">
                        <p>: {{ $info->totalHarga }}</p>
                     </div>
                  </div>

               </div>
            </div>

         </div>
      @endforeach
   </div>

</body>
@section('content')
@endsection
