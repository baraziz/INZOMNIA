<!DOCTYPE html>
<html>

<head>

   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
   <title>Home - Brand</title>
   <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" />
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic" />
   <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


   <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="57">

   @section('navbar')

      <!-- Navbar -->
      <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
         <div class="container">
            <a class="navbar-brand" href="/home#page-top" style="font-family: 'Baskervville'; font-style: normal; font-weight: 400; font-size: 34px; text-align: center">INSOMNIA ZERO</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
               <i class="fa fa-align-justify"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ms-auto">
                  <li class="nav-item"><a class="nav-link" href="/home#about">About</a></li>
                  <li class="nav-item"><a class="nav-link" href="/home#services">Services</a></li>
                  <li class="nav-item"><a class="nav-link" href="/home#category">category</a></li>
                  <li class="nav-item"><a class="nav-link" href="/home#team">Our Team</a></li>
                  <li class="nav-item"><a class="nav-link" href="/home#contact">Contact</a></li>
                  @auth
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           MENU
                        </a>
                        <ul class="dropdown-menu">
                           @can('admin')
                              <li><a class="dropdown-item" href="/admin/produk">Admin</a></li>
                              <hr>
                           @endcan
                           <form action="/logout" method="post">
                              @csrf
                              <input type="submit" class="dropdown-item" value="Logout">
                           </form>
                        </ul>
                     </li>
                  @else
                     <li class="nav-item"><a class="nav-link" href="/login">LOGIN</a></li>
                  @endauth

               </ul>
            </div>
         </div>
      </nav>

   @show

   @yield('content')

   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
   <script src="assets/js/script.min.js"></script>
   <!-- asset2 -->
   {{-- <script src="assets2/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets2/js/script.min.js"></script> --}}
</body>

</html>
