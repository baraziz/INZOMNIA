@extends('admin.layout.navbar')

@if (isset($title))
   @section('nav-title', 'Tambah Produk')
@endif


@section('sidebar')
   @parent
@endsection


@section('content')
   <div class="container mt-5 border rounded-3 pt-3">
      @if (session('status'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      @endif
      
      
      <div class="container text-start">
         <a class="btn btn-primary mb-3" href="/admin/produk/create">Tambah Barang</a>
      </div>

      <table class="table table-striped table-bordered table-light">
         <thead>
            <tr>
               <th class="col-1 text-center" scope="col">#</th>
               <th scope="col">Barang</th>
               <th class="col-2 text-center" scope="col">Kategori</th>
               <th class="col" style="width: 120px" scope="col"></th>
            </tr>
         </thead>
         <tbody class="">
            @foreach ($products as $product)
               <tr>
                  <th class="text-center align-middle" scope="row">{{ $loop->iteration }}</th>
                  <td class="align-middle">{{ $product->nama }}</td>
                  <td class="text-center align-middle">{{ $product->kategori }}</td>
                  <td class="text-center align-middle">
                     <a class="btn btn-sm bg-info text-dark" href="/admin/produk/{{ $product->id }}" role="button"><i class="bi bi-eye"></i></a>
                     <a class="btn btn-sm bg-warning text-dark" href="/admin/produk/{{ $product->id }}/edit " role="button"><i class="bi bi-pencil-square"></i></a>
                     <form class="d-inline" action="/admin/produk/{{ $product->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm bg-danger text-white" type="submit" onclick="return confirm('APA ANDA YAKIN HAPUS DATA?')"><i class="bi bi-trash"></i></button>
                        {{-- <a class="btn btn-sm bg-danger text-white" href="#" role="button"></a> --}}
                     </form>
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>

   </div>
@endsection
