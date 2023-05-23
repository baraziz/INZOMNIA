@extends('customer.layout.layout')

@section('navbar')
   @parent
@endsection

@section('content')
   <header class="text-center text-white d-flex masthead" style="background-image: url('img/bg.png')">
      <div class="container my-auto">
         <div class="row">
            <div class="col-lg-10 mx-auto">
               <h1 class="text-uppercase"><strong>Welcome To Our Market!</strong></h1>
               <hr />
            </div>
         </div>
         <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5" style="font-size: 20px">It's Nice To Meet You</p>
            <a class="btn btn-primary btn-xl" role="button" href="#services">Find Out More</a>
         </div>
      </div>
   </header>
   <section id="about" class="bg-primary">
      <div class="container">
         <div class="row">
            <div class="col offset-lg-8 text-center mx-auto">
               <h2 class="text-white section-heading">Who we are?</h2>
               <hr class="light my-4" />
               <p class="text-faded mb-4">INSOMNIA ZERO is an innovative fashion shopping website that offers a unique shopping experience for users.</p>
               <a class="btn btn-light btn-xl" role="button" href="aboutUs">Learn More</a>
            </div>
         </div>
      </div>
   </section>

   <!-- Servis -->
   <section id="services">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 text-center">
               <h2 class="section-heading pt-5">At Your Service</h2>
               <hr class="my-4" />
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-lg-3 text-center">
               <div class="mx-auto service-box mt-5">
                  <i class="fa fa-diamond fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-once="true"></i>
                  <h3 class="mb-3">Free Shipping</h3>
                  <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center">
               <div class="mx-auto service-box mt-5">
                  <i class="fa fa-paper-plane fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="200" data-aos-once="true"></i>
                  <h3 class="mb-3">100% Satisfaction</h3>
                  <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center">
               <div class="mx-auto service-box mt-5">
                  <i class="fa fa-newspaper-o fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="400" data-aos-once="true"></i>
                  <h3 class="mb-3">Up to Date</h3>
                  <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center">
               <div class="mx-auto service-box mt-5">
                  <i class="fa fa-heart fa-4x text-primary mb-3 sr-icons" data-aos="fade" data-aos-duration="200" data-aos-delay="600" data-aos-once="true"></i>
                  <h3 class="mb-3">Easy Return</h3>
                  <p class="text-muted mb-0">You have to make your websites with love these days!</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Kategori -->
   <section>
      <h2 id="category" class="text-center" style="padding-top: 100px">Category</h2>
      <div class="containerCard">
         <div class="wrapper">
            <div class="card2">
               <img src="img/pria/1.png" alt="" />
               <div class="info">
                  <h1>Pria</h1>
                  <p>PAKAIAN PRIA</p>
                  <a href="/pria" class="btn">Read More</a>
               </div>
            </div>
            <div class="card2">
               <img src="img/wanita/6.png" alt="" />
               <div class="info">
                  <h1>Wanita</h1>
                  <p>PAKAIAN WANITA</p>
                  <a href="/wanita" class="btn">Read More</a>
               </div>
            </div>
            {{-- <div class="card2">
               <img src="img/pria/3.png" alt="" />
               <div class="info">
                  <h1>Unggulan</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, et.</p>
                  <a href="#" class="btn">Read More</a>
               </div>
            </div> --}}
         </div>
      </div>
   </section>

   <!-- Our Team -->
   <section class="teamm" id="team">
      <h1 class="text-center pt-5" style="color: white">Our Team</h1>
      <div class="team-content">
         <div class="box">
            <img src="img/Team/1.jpg" width="200px" alt="" />
            <h3>Farah Diva Ayuningtyas</h3>
            <h5>NIM : 4612421021</h5>
            <div class="icons">
               <a href="#"><i class="ri-instagram-line"></i></a>
               <a href="#"><i class="ri-linkedin-fill"></i></a>
            </div>
         </div>
         <div class="box">
            <img src="img/Team/2.jpg" width="200px" alt="" />
            <h3>Nadhifah Nur Annisa Reska</h3>
            <h5>NIM : 4612421027</h5>
            <div class="icons">
               <a href="#"><i class="ri-instagram-line"></i></a>
               <a href="#"><i class="ri-linkedin-fill"></i></a>
            </div>
         </div>
         <div class="box">
            <img src="img/Team/5.jpg" width="200px" alt="" />
            <h3>Baharudin Bariq Aziz</h3>
            <h5>NIM : 4612421030</h5>
            <div class="icons">
               <a href="#"><i class="ri-instagram-line"></i></a>
               <a href="#"><i class="ri-linkedin-fill"></i></a>
            </div>
         </div>
         <div class="box">
            <img src="img/Team/4.jpg" width="200px" alt="" />
            <h3>Naufal Darma Yuda Pratama</h3>
            <h5>NIM : 4612421038</h5>
            <div class="icons">
               <a href="#"><i class="ri-instagram-line"></i></a>
               <a href="#"><i class="ri-linkedin-fill"></i></a>
            </div>
         </div>
         <div class="box">
            <img src="img/Team/3.jpg" width="200px" alt="" />
            <h3>Ichrima Aura Qoshirotu Thorfi</h3>
            <h5>NIM : 4612421043</h5>
            <div class="icons">
               <a href="#"><i class="ri-instagram-line"></i></a>
               <a href="#"><i class="ri-linkedin-fill"></i></a>
            </div>
         </div>
      </div>
   </section>

   <!-- contact -->
   <section>
      <h2 class="text-center pb-4" id="contact" style="padding-top: 100px">Contact Us</h2>
      <!-- contact -->
      <div class="contact-container">
         <!-- Form -->
         <div class="form-container">
            <h3 style="color: white">Message</h3>
            <form action="" class="contact-form">
               <input type="text" placeholder="Your Name" required />
               <input type="email" name="" id="" placeholder="Enter Your Email..." required />
               <textarea name="" id="" cols="30" rows="10" placeholder="Write Message Here..." required></textarea>
               <input type="submit" value="Send" class="send-button" />
            </form>
         </div>

         <!-- Map -->
         <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.6475577928227!2d110.39242279999999!3d-7.0506356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b3a1e3a1529%3A0x4cda1f81771c5e97!2sUniversitas%20Negeri%20Semarang%20(UNNES)!5e0!3m2!1sid!2sid!4v1683365432652!5m2!1sid!2sid" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
   </section>

   <!-- Footer -->
   <footer>
      <div class="footerContainer">
         <div class="social">
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
         </div>
         <div class="footerNav">
            <ul>
               <li><a href="">Home</a></li>
               <li><a href="">News</a></li>
               <li><a href="">About</a></li>
               <li><a href="">Contact Us</a></li>
               <li><a href="">Our Team</a></li>
            </ul>
         </div>
      </div>
      <div class="footerBottom">
         <p>Copyright &copy;2023;</p>
      </div>
   </footer>
@endsection
