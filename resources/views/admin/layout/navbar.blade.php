<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <title>SIDE | ADMIN</title>
   
</head>

<body>
   @section('side-navbar')
      <nav class="navbar navbar-dark text-white" style="background: #f05f40">
         <div class="container">
            <a class="navbar-brand" href="#">@yield('nav-title', 'ADMIN')</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
               <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">ADMIN</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
               </div>
               <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                     <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/home">HOME</a>
                        <a class="nav-link" aria-current="page" href="/admin/produk">Produk</a>
                     </li>
                     {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Dropdown
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                           <li><a class="dropdown-item" href="#">Action</a></li>
                           <li><a class="dropdown-item" href="#">Another action</a></li>
                           <li>
                              <hr class="dropdown-divider">
                           </li>
                           <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                     </li> --}}
                  </ul>
                  <hr>
                  <form class="d-flex mt-3" action="/logout" method="post">
                     {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> --}}
                     @csrf
                     <button class="btn btn-danger container-fluid" type="submit">LOGOUT</button>
                  </form>
               </div>
            </div>
         </div>
      </nav>
   @show

   <div class="container">
      @yield('content')
   </div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
