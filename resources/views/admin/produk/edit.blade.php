@extends('admin.layout.navbar')

@section('sidebar')
   @parent
@endsection

@section('content')
   <div class="container col-11 mt-5 mb-5 border border-3 rounded-3 py-5">
      <form class="container col-11" action="/admin/produk/{{ $id }}" method="post" enctype="multipart/form-data">
         @method('PUT')
         @csrf

         <div class="mb-3">
            <label for="Barang" class="form-label">Nama Barang</label>
            <input name="nama" type="text" value="{{ $nama }}" class="form-control border-black" id="Barang" placeholder="">
         </div>

         <p class="mb-1">Jumlah Barang | Ukuran</p>
         <div class="container mb-3 pb-2 border border-dark-subtle rounded-2">
            <div class="row text-center">
               <div class="col">
                  <div class="">
                     <label for="ukuran-s" class="form-label">S</label>
                     <input name="ukuran_s" type="number" value="{{ $ukuran_s }}" class="form-control border-black" id="ukuran-s" placeholder="">
                  </div>
               </div>
               <div class="col">
                  <div class="">
                     <label for="ukuran-m" class="form-label">M</label>
                     <input name="ukuran_m" type="number" value="{{ $ukuran_m }}" class="form-control border-black" id="ukuran-m" placeholder="">
                  </div>
               </div>
               <div class="col">
                  <div class="">
                     <label for="ukuran-l" class="form-label">L</label>
                     <input name="ukuran_l" type="number" value="{{ $ukuran_l }}" class="form-control border-black" id="ukuran-l" placeholder="">
                  </div>
               </div>
               <div class="col">
                  <div class="">
                     <label for="ukuran-XL" class="form-label">XL</label>
                     <input name="ukuran_xl" type="number" value="{{ $ukuran_xl }}" class="form-control border-black" id="ukuran-XL" placeholder="">
                  </div>
               </div>
            </div>
         </div>

         <div class="mb-3">
            <label for="Harga" class="form-label">Harga</label>
            <input name="harga" type="number" value="{{ $harga }}" min="0" class="form-control border-black " id="Harga">
         </div>

         <div class="mb-3">
            <label for="formFile" class="form-label">Foto Barang</label>
            <img class="img-fluid mb-2 col-4 d-block" src="{{ asset('storage/' . $foto) }}" id="output" />
            <input name="foto" class="form-control border-black" type="file" id="formFile" onchange="loadFile(event)">
         </div>

         <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori" class="form-select border-black" id="kategori" aria-label="select">
               <option value="pria" @if ($kategori === 'pria') selected @endif>Pria</option>
               <option value="wanita" @if ($kategori === 'wanita') selected @endif>Wanita</option>
            </select>
         </div>


         <div class="mb-3">
            <label for="editor" class="form-label">Deskripsi Barang</label>
            <textarea name="deskripsi" id="editor" class="form-control" rows="3">
               {{ $deskripsi }}
            </textarea>
         </div>

         <div class="text-end">
            <input class="btn btn-primary" type="submit" value="UBAH">
         </div>

      </form>
   </div>


   <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

   <script>
      ClassicEditor
         .create(document.querySelector('#editor'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList']
         })
         .catch(error => {
            console.error(error);
         });

      var loadFile = function(event) {
         var output = document.getElementById('output');
         output.src = URL.createObjectURL(event.target.files[0]);
         output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
         }
      };
   </script>
@endsection
