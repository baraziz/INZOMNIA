@extends('admin.layout.navbar')

@section('sidebar')
   @parent
@endsection

@section('content')
   <div class="container my-5 border px-3 py-3">

      <div class="row justify-content-around">  
         <div class="row">
            <div class="col-6" style="display: flex; justify-content: center">
               <img class="col-6 img-thumbnail rounded" src="{{ $foto }}" alt="">
            </div>
            <div class="col pt-3">
               <div class="container">
                  <h1 class="mb-3">{{ $nama }}</h1>
   
                  <h5 class="mb-3">IDR {{ $harga }}</h5>
   
                  <table class="table table-borderless table-striped-columns text-center border">
                     <thead>
                        <tr>
                           <th scope="col">Ukuran</th>
                           <th scope="col">S</th>
                           <th scope="col">M</th>
                           <th scope="col">L</th>
                           <th scope="col">XL</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">Stok</th>
                           <td>{{ $ukuran_s }}</td>
                           <td>{{ $ukuran_m }}</td>
                           <td>{{ $ukuran_l }}</td>
                           <td>{{ $ukuran_xl }}</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="container mt-3 col-8">
            <h5>Deskripsi</h5>
            {!! $deskripsi !!}
         </div>
         </div>
         
   </div>
@endsection
