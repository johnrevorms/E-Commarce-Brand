<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DESTINASI</title>
    <link rel="stylesheet" href="{{ asset('css/styles3.css') }}" />
    <style>
      .destination-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        padding: 50px 20px;
      }

      .card {
        background: white;
        width: 300px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        text-align: center;
        transition: 0.3s ease-in-out;
      }

      .card:hover {
        transform: scale(1.03);
      }

      .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
      }

      .card h3 {
        margin: 15px 0 5px;
        font-size: 20px;
        color: #333;
      }

      .card p {
        padding: 0 15px 15px;
        font-size: 14px;
        color: #666;
      }

      .footer {
        background-color: #f1f1f1;
        text-align: center;
        padding: 20px;
        margin-top: 50px;
      }
    </style>
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

    <section class="destination-grid">
      <div class="card">
        <img src="{{ asset('images/bali.jpg') }}" alt="Bali">
        <h3>Bali</h3>
        <p>Temukan keindahan pantai, budaya, dan suasana tropis di Pulau Dewata.</p>
      </div>

      <div class="card">
        <img src="{{ asset('images/labuan.jpg') }}" alt="Labuan Bajo">
        <h3>Labuan Bajo</h3>
        <p>Destinasi eksotis untuk menjelajahi Komodo dan keindahan bawah laut.</p>
      </div>

      <div class="card">
        <img src="{{ asset('images/raja.jpg') }}" alt="Raja Ampat">
        <h3>Raja Ampat</h3>
        <p>Surga tersembunyi bagi para pecinta diving dan fotografi alam laut.</p>
      </div>
    </section>

    <footer class="footer">
      <p>&copy; 2024 All rights reserved. Oceara</p>
    </footer>
  </body>
</html>
