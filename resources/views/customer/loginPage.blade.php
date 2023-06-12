<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="{{asset('style1.css')}} " />
   <link rel="stylesheet" href="{{asset('assets/boxicons-master/css/boxicons.css')}} " />
    
    <title>Login</title>
    <style>
        body {
        background-image: url(https://img.freepik.com/free-photo/abstract-futuristic-background-with-3d-design_1361-3532.jpg?w=740&t=st=1686468631~exp=1686469231~hmac=bbb3881f343054033b55d4cb8753c65b539f174844e58c732fe34c32cb76e4e6);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        }
        .box {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 90vh;
        }

        .container {
        width: 350px;
        display: flex;
        flex-direction: column;
        padding: 0 15px 0 15px;
        }
        span {
        font-size: small;
        color: #fff;
        display: flex;
        justify-content: center;
        padding: 10px 0 10px 0;
        }
        header {
        color: #fff;
        font-size: 30px;
        display: flex;
        justify-content: center;
        padding: 10px 0 10px 0;
        }
        .input {
        height: 45px;
        width: 87%;
        border: none;
        outline: none;
        border-radius: 30px;
        color: #fff;
        padding: 0 0 0 42px;
        background: rgb(45, 45, 45);
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        -ms-border-radius: 30px;
        -o-border-radius: 30px;
        }
        .input-field {
        display: flex;
        flex-direction: column;
        }
        i {
        position: relative;
        top: -31px;
        left: 17px;
        color: #fff;
        }
        ::-webkit-input-placeholder {
        color: #fff;
        }
        .submit {
        border: none;
        border-radius: 30px;
        font-size: 15px;
        height: 45px;
        outline: none;
        width: 100%;
        background: rgb(255, 255, 255, 0.7);
        cursor: pointer;
        transition: 0.3s;
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        -ms-border-radius: 30px;
        -o-border-radius: 30px;
        -webkit-transition: 0.3s;
        -moz-transition: 0.3s;
        -ms-transition: 0.3s;
        -o-transition: 0.3s;
        }
        .submit:hover {
        box-shadow: 1px 5px 7 1px rgba(0, 0, 0, 0.2);
        }

        .bottom {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        font-size: small;
        color: #fff;
        margin-top: 10px;
        }
        .left {
        display: flex;
        }
        label a {
        color: #fff;
        text-decoration: none;
        }

    </style>
  </head>
  <body>
    <div class="box">
      {{--  --}}
      <form action="/login" method="post">
        @csrf
        <div class="container">
          <div class="top-header">
            
            <header>Login</header>
          </div>
  
          <div class="input-field">
            <input type="text" class="input" placeholder="Email" required name="email"/>
            <i class="bx bx-user"></i>
          </div>
          <div class="input-field">
            <input type="password" class="input" placeholder="password" required name="password"/>
            <i class="bx bx-lock-alt"></i>
          </div>
  
          <div class="input-field">
            <input type="submit" class="submit" value="Login" name="login_btn"/>
          </div>
  
          <div class="bottom">
            <div class="left">
              <input type="checkbox" id="check" />
              <label for="check"> Remember Me</label>
            </div>
            <div class="right">
              <label><a href="regis">Registrasi</a></label>
            </div>
          </div>
        </div>
      </form>
      {{--  --}}
    </div>
  </body>
</html>