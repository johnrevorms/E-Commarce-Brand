<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DESTINASI</title>
    <link rel="stylesheet" href="{{ asset('css/styles4.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/pratikum5.css') }}">
    <script src="https://cdn.tailwindcss.com/3.4.1"></script>
  </head>
  <body>
    <header>
      <div class="navbar">
        <img src="{{ asset('images/Oceara pUTIH.png') }}" alt="Logo" class="logo" />
        <nav>
          <a href="/home">HOME</a>
          <a href="/destinasi">DESTINASI</a>
          <a href="/promo">PROMO</a>
        </nav>
        <a href="/login" id="user">
          <img src="{{ asset('images/user-circle-fill.png') }}" alt="User Icon" />
        </a>
      </div>
    </header>



    <form>

      <div class="container" >
        <h1>Ini Judul Berwarna Merah</h1>


        <!-- Gambar Senja -->
        <div class="image-wrapper">
          <img src="{{ asset('images/senja.jpg') }}" alt="Senja" style="width: 300px;" />
        </div>

        <!-- Gambar Sunset -->
        <div class="image-wrapper">
          <img src="{{ asset('images/sunset.jpg') }}" alt="Sunset" style="width: 300px;" />
        </div>
      </div>
    </form>

    <div class="bg-blue-500 p-4 m-4 text-white">
     Ini kotak dengan Tailwind
    </div>

    <footer class="footer">
      <div class="container">
        <p>&copy; 2024 All rights reserved.</p>
        <ul class="social-links">
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Instagram</a></li>
        </ul>
      </div>
    </footer>
  </body>
</html>
