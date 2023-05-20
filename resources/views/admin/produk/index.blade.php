@extends('admin.layout.navbar')

@section('sidebar')
   @parent
@endsection

@section('content')
   <div class="container mt-5 border rounded-3 pt-3">

      <div class="container text-end">
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
                     <a class="btn btn-sm bg-info text-dark" href="#" role="button"><i class="bi bi-eye"></i></a>
                     <a class="btn btn-sm bg-warning text-dark" href="/admin/produk/{{ $product->id }}/edit " role="button"><i class="bi bi-pencil-square"></i></a>
                     <a class="btn btn-sm bg-danger text-white" href="#" role="button"><i class="bi bi-trash"></i></a>
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>

   </div>
@endsection
