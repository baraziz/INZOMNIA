<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>Login Page</title>
   <link rel="stylesheet" href="style1.css" />
   <!-- Font Google -->
   <style>
      body {
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 100vh;
         background: #f05f40;
      }

      .containerLogin {
         width: 100%;
         display: flex;
         max-width: 850px;
         background: #fff;
         border-radius: 15px;
         box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
      }

      .login {
         width: 400px;
      }

      form {
         width: 250px;
         margin: 60px auto;
      }

      h1 {
         margin: 20px;
         text-align: center;
         font-weight: bolder;
         text-transform: uppercase;
      }

      hr {
         border-top: 2px solid #f05f40;
      }

      img {
         width: 450px;
         height: 100%;
         border-top-right-radius: 15px;
         border-bottom-right-radius: 15px;
      }

      form label {
         display: block;
         font-size: 16px;
         font-weight: 600;
      }

      input {
         width: 100%;
         margin: 2px;
         border: none;
         outline: none;
         padding: 8px;
         border-radius: 5px;
         border: 1px solid gray;
      }

      button {
         border: none;
         outline: none;
         padding: 8px;
         width: 252px;
         color: #fff;
         font-size: 16px;
         cursor: pointer;
         margin-top: 20px;
         border-radius: 5px;
         background: orange
      }

      button:hover {
         background: rgba(214, 86, 64, 1)
      }

      @media (max-width: 880px) {
         .containerLogin {
            width: 100%;
            max-width: 750px;
            margin-left: 20px;
            margin-right: 20px;
         }

         form {
            width: 300px;
            margin: 20px auto;
         }

         .login {
            width: 400px;
            padding: 20px;
         }

         button {
            width: 100%;
         }

         .right img {
            width: 100%;
            height: 100%;
         }
      }
   </style>
</head>

<body>
   <div class="containerLogin">
      <div class="login">
         <form action="/login" method="post">
            @csrf
            <div class="">
               <h1>Login</h1>
               <hr>
               <p>INSOMNIAZERO</p>
               <label for="">Email</label>
               <input type="text" placeholder="example@gmail.com" name="email">
               <label for="">Password</label>
               <input type="password" placeholder="Password" name="password">

               <button type="submit" style="" value="login" name="login_btn">Login</button>



               <div class="container" style="">
                  <div class="text-center">
                     <p style="display: flex; justify-content: center">or</p>
                     <a href="#" style="display: flex; justify-content: center">Forgot account</a>
                     <a href="#" style="display: flex; justify-content: center">Create an account</a>
                  </div>

               </div>
            </div>

            <p>

         </form>
      </div>
      {{-- Right --}}
      <div class="right">
         <img src="img/pria/login.jpg" alt="">
      </div>
   </div>
</body>

</html>
