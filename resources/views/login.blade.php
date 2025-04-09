<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/styles2.css') }}" />
  </head>
  <body>
    <div class="container">
      <strong><h1>SIGN IN</h1></strong>
      <input type="email" placeholder="Username" />
      <input type="password" placeholder="Password" />
      <span>Forgot password?</span>
      <input type="submit" value="LOG IN" />
      <br />
      <div class="or">---------</div>
      <a href="#">
        <img src="{{ asset('images/Oceara.png') }}" alt="Oceara Logo" />
      </a>
    </div>
  </body>
</html>
