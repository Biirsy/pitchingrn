<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ragam Nusantara</title>
    <link rel="stylesheet" href="Pitching/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <style>
      .bg-dark {
        background-color: #e48f45 !important;
      }
      .image-container {
        position: relative;
        display: inline-block;
      }
      /* The image */
      .image-container img {
        display: block;
        max-width: 100%;
        height: auto;
        transition: filter 0.3s ease;
      }

      /* The text overlay */
      .overlay-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 20px;
        font-weight: bold;
        opacity: 0;
        transition: opacity 0.3s ease;
      }

      /* Darken the image on hover */
      .image-container:hover img {
        filter: brightness(70%);
      }

      /* Show the text on hover */
      .image-container:hover .overlay-text {
        opacity: 1;
      }
    </style>
  </head>
  <body>
   <nav
      class="navbar fixed-top navbar-expand-lg  p-md-3"
    >
      <div class="container">
        <a class="navbar-brand" href="/index"
          ><img src="Pitching/images/logob.png" style="width: 353px; height: 67px;"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul
            class="navbar-nav ms-auto"
            style="font-family: 'Alegreya', serif;"
          >
            <li class="nav-item">
              <a class="nav-link text-black" href="/index" style="font-size: 24px; font-weight: 700;"
                >Beranda</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="/artikel" style="font-size: 24px; font-weight: 700;"
                >Artikel</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="/budaya" style="font-size: 24px; font-weight: 700;"
                >Budaya</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" style="font-size: 24px; font-weight: 700;" href="/tentang">Tentang</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Pitching/images/bg1.jpg" class="d-block w-100" alt="paolo-nicolello-zb3b08nJlww-unsplash">
    </div>
    <div class="carousel-item">
      <img src="Pitching/images/bg2.jpg" class="d-block w-100" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div><br><br><br>
<section style="font-family: 'Poppins', sans-serif;
">
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3 style="margin-top: 8px; font-weight: 600;">Artikel Seputar Budaya Indonesia</h3>
    </div>
    <div class="col-md-6 d-flex justify-content-end" >
      <a style="font-weight: 500; font-size: 22px; text-decoration: none; color: black;" href="/artikel">Lihat Selengkapnya<span><img src="Pitching/icons/arrow.png" style="width: 33px;
height: 33px;"></span></a>
    </div><hr style="width: 1285px; border: 2px solid black;">
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <img src="Pitching/images/artikel1.jpg" style="margin-bottom: 15px;">
      <a style="width: 398px; font-size: 22px; font-weight: 500; text-decoration: none; color:black">Gamelan dan Wayang Menjadi Media Pembelajaran yang Diminati Sekolah di London</a><hr style="width: 398px; border: 1px solid black;">
      <p style="font-size: 22px; font-weight: 300; color: rgba(0, 0, 0, 0.75);">Senin, 27 November 2023</p>
    </div>
     <div class="col-md-4">
      <img src="Pitching/images/artikel2.jpg" style="margin-bottom: 15px;">
      <a style="width: 398px; font-size: 22px; font-weight: 500; color: black; text-decoration: none;" href="/isi-a">Sekelompok Siswa Sekolah di Bogor Pamerkan Budaya Indonesia di Amerika</a><hr style="width: 398px; border: 1px solid black;">
      <p style="font-size: 22px; font-weight: 300; color: rgba(0, 0, 0, 0.75);">Senin, 27 November 2023</p>
    </div>
     <div class="col-md-4">
      <img src="Pitching/images/artikel3.jpg" style="margin-bottom: 15px;">
      <a style="width: 398px; font-size: 22px; font-weight: 500; color: black;">St. Mary College Australia Selami Kekayaan Budaya Indonesia Bersama KJRI Sydney</a><hr style="width: 398px; border: 1px solid black;">
      <p style="font-size: 22px; font-weight: 300; color: rgba(0, 0, 0, 0.75);">Senin, 27 November 2023</p>
    </div>
  </div>
</div><br><br><br>
</section>
<section style="font-family: 'Poppins', sans-serif;
">
    <div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3 style="margin-top: 8px; font-weight: 600;">Budaya Indonesia</h3>
    </div>
    <div class="col-md-6 d-flex justify-content-end" >
      <a style="font-weight: 500; font-size: 22px; text-decoration: none; color: black;" href="/budaya">Lihat Selengkapnya<span><img src="Pitching/icons/arrow.png" style="width: 33px;
height: 33px;"></span></a>
    </div><hr style="width: 1285px; border: 2px solid black;">
  </div>
</div><br>
 <div class="container text-center">
      <div class="row">
        <div class="col image-container">
          <img src="Pitching/images/gambuh.jpg" />
          <div class="overlay-text" style="font-family: 'Alegreya', serif; text-decoration: none; color: white;"><a href="/isi-b" style="text-decoration: none; color: white;">Gambuh</a></div>
        </div>
        <div class="col image-container">
          <img src="Pitching/images/makyong.jpg" />
          <div class="overlay-text" style="font-family: 'Alegreya', serif;">Mak Yong</div>
        </div>
        <div class="col image-container">
          <img src="Pitching/images/Mamanda.jpg" />
          <div class="overlay-text" style="font-family: 'Alegreya', serif;">Mamanda</div>
        </div>
        <div class="col image-container">
          <img src="Pitching/images/reog.jpg" />
          <div class="overlay-text" style="font-family: 'Alegreya', serif;">Reog</div>
        </div>
      </div>
      <br /><br />
      <div class="row">
        <div class="col-8 image-container">
          <img src="Pitching/images/wayang.jpg" style="margin-right: 40px" />
          <div class="overlay-text" style="font-family: 'Alegreya', serif;">Wayang Kulit</div>
        </div>
        <div class="col-4 image-container">
          <img src="Pitching/images/ondel.jpg" />
          <div class="overlay-text" style="font-family: 'Alegreya', serif;">Ondel - Ondel</div>
        </div>
      </div>
    </div>
</section>
  <footer class="text-center text-white" style="background-color: #000000;">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Links -->
      <section class="mt-5">
        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5" style="padding-left: 140px; padding-right: 140px;">
          <!-- Grid column -->
          <div class="col-md-3">
            <h6 class="text-uppercase font-weight-bold">
              <a href="/index" class="text-white" style="text-decoration: none; font-family: 'Alegreya', serif; font-size: 18px; font-weight: 700;">Beranda</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3">
            <h6 class="text-uppercase font-weight-bold">
              <a href="/artikel" class="text-white" style="text-decoration: none; font-family: 'Alegreya', serif; font-size: 18px; font-weight: 700;">Artikel</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3">
            <h6 class="text-uppercase font-weight-bold">
              <a href="/budaya" class="text-white" style="text-decoration: none; font-family: 'Alegreya', serif; font-size: 18px; font-weight: 700;">Budaya</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3">
            <h6 class="text-uppercase font-weight-bold">
              <a href="/tentang" class="text-white" style="text-decoration: none; font-family: 'Alegreya', serif; font-size: 18px; font-weight: 700;">Tentang</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-5" />

      <!-- Section: Text -->
      <section class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p>
              Website ini dirancang sebagai platform interaktif yang memungkinkan pengguna untuk mengakses informasi, gambar, dan konten multimedia terkait berbagai aspek budaya Indonesia. Terdapat sejumlah modul edukatif yang mencakup seni, tradisi, bahasa, dan cerita rakyat. Pengguna dapat belajar dengan cara yang menyenangkan melalui video, gambar, dan narasi interaktif.
            </p>
          </div>
        </div>
      </section>
      <!-- Section: Text -->
    </div>
    <!-- Grid container -->
<hr class="my-5" />
    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
        © 2023 Copyright: De Ontdekkers
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>
 <script>
      var nav = document.querySelector("nav");
      window.addEventListener("scroll", function () {
        if (window.pageYOffset > 100) {
          nav.classList.add("bg-dark");
        } else {
          nav.classList.remove("bg-dark");
        }
      });
    </script>
</body>
</html>
