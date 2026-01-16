<?php
//menyertakan code dari file koneksi
include "koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zona Obrolan K-Drama</title>
    <meta
        name="description"
        content="Zona Obrolan K-Drama untuk pencinta drama Korea mulai dari ngobrol seru, berbagi review, dan temukan rekomendasi drama favoritmu di sini."
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="img/logo.webp"/>
    <link 
        rel="stylesheet"  
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    />
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
        crossorigin="anonymous"
    />
    <style>
      .accordion-button:not(.collapsed) {
        background-color: #da6a73;
        color: white;
      }
    </style>
  </head>
  <body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky top">
      <div class="container">
        <a class="navbar-brand" href="#">Zona Obrolan K-Drama</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Schedule</a>
            </li><li class="nav-item">
              <a class="nav-link" href="#aboutme">About Me</a>
            </li>
            </li><li class="nav-item">
              <a class="nav-link" href="login.php" target="_blank">Login</a>
            </li>
           <li class="nav-item ms-3">
              <button id="darkBtn" style="width:40px;height:40px;border:none;border-radius:7px;background-color:#1e1f23;color:white;font-size:20px;cursor:pointer;margin-right:5px;"><i class="bi bi-moon-fill"></i></button>
              <button id="lightBtn" style="width:40px;height:40px;border:none;border-radius:7px;background-color:#e2424b;color:white;font-size:20px;cursor:pointer;"><i class="bi bi-sun-fill"></i></button>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav end -->
    <!-- hero begin -->
    <section id="hero" class="text-center p-5 bg-primary-subtle text-sm-start">
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
          <img src="img/banner.png" class="img-fluid" width="300">
          <div>
            <h1 class="fw-bold display-4">
              Tempat Seru Ngobrolin Drama Korea Favorit Kamu!
            </h1>
            <h4 class="lead display-6">
              Tempat nyaman buat cerita, ketawa, dan nostalgia bareng drama kesayangan
            </h4>
            <span id="tanggal"></span>
            <span id="jam"></span>
          </div>
        </div>
      </div>
    </section>
    <!-- hero end -->
    <!-- article begin -->
    <section id="article" class="text-center p-5">
        <div class="container">
          <h1 class="fw-bold display-4 pb-3">article</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <?php
            $sql = "SELECT * FROM article ORDER BY tanggal DESC";
            $hasil = $conn->query($sql); 

            while($row = $hasil->fetch_assoc()) {
            ?>
            <!-- col begin -->
              <div class="col">
                <div class="card h-100">
                  <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="drama Korea Queen Mantis bergenre misteri psikologis">
                  <div class="card-body">
                    <h5 class="card-title"><?= $row["judul"]?></h5>
                    <p class="card-text"><?= $row["isi"]?></p>
                  </div>
                  <div class="card-footer">
                    <small class="text-body-secondary"><?= $row["tanggal"]?></small>
                  </div>
                </div>
              </div>
            <!-- col end -->
            <?php
            }
            ?>
            </div>
        </div>
    </section>
    <!-- article end -->
    <!-- gallery begin -->
    <section id="gallery" class="text-center p-5">
        <div class="container">
          <h1 class="fw-bold display-4 pb-3">gallery</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <?php
            $sql = "SELECT * FROM article ORDER BY tanggal DESC";
            $hasil = $conn->query($sql); 

            while($row = $hasil->fetch_assoc()){
            ?>
            <!-- col begin -->
              <div class="col">
                <div class="card h-100">
                  <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="drama Korea Queen Mantis bergenre misteri psikologis">
                  <div class="card-body">
                    <h5 class="card-title"><?= $row["judul"]?></h5>
                  </div>
                  <div class="card-footer">
                    <small class="text-body-secondary"><?= $row["tanggal"]?></small>
                  </div>
                </div>
              </div>
            <!-- col end -->
            <?php
            }
            ?>
            </div>
        </div>
    </section>
    <!-- gallery end -->
    <!-- schedule begin -->
      <section id="schedule" class="text-center p-5">
      <h1 class="fw-bold display-4 pb-3">schedule</h1>
      <div
        class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 g-4 justify-content-center"
      >
        <div class="col">
          <div class="p-4 border rounded shadow-sm h-100">
            <i class="bi bi-book text-danger fs-1"></i>
            <h5 class="mt-3">Membaca</h5>
            <p>Menambah wawasan setiap pagi sebelum beraktivitas.</p>
          </div>
        </div>
        <div class="col">
          <div class="p-4 border rounded shadow-sm h-100">
            <i class="bi bi-laptop text-danger fs-1"></i>
            <h5 class="mt-3">Menulis</h5>
            <p>Mencatat setiap pengalaman harian di jurnal pribadi.</p>
          </div>
        </div>
        <div class="col">
          <div class="p-4 border rounded shadow-sm h-100">
            <i class="bi bi-people text-danger fs-1"></i>
            <h5 class="mt-3">Diskusi</h5>
            <p>Bertukar ide dengan teman dalam kelompok belajar.</p>
          </div>
        </div>
        <div class="col">
          <div class="p-4 border rounded shadow-sm h-100">
            <i class="bi bi-bicycle text-danger fs-1"></i>
            <h5 class="mt-3">Olahraga</h5>
            <p>Menjaga kesehatan dengan bersepeda sore hari.</p>
          </div>
        </div>
        <div class="col">
          <div class="p-4 border rounded shadow-sm h-100">
            <i class="bi bi-film text-danger fs-1"></i>
            <h5 class="mt-3">Movie</h5>
            <p>Menonton film yang bagus di bioskop.</p>
          </div>
        </div>
        <div class="col">
          <div class="p-4 border rounded shadow-sm h-100">
            <i class="bi bi-bag text-danger fs-1"></i>
            <h5 class="mt-3">Belanja</h5>
            <p>Membeli kebutuhan bulanan di supermarket.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- schedule end -->
    <!-- about me begin -->
      <section id="aboutme" class="bg-danger-subtle text-center p-5">
      <h1 class="fw-bold display-4 pb-3">about me</h1>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOne"
              aria-expanded="true"
              aria-controls="collapseOne"
            >
              Universitas Dian Nuswantoro Semarang (2024-Now)
            </button>
          </h2>
          <div
            id="collapseOne"
            class="accordion-collapse collapse show"
            data-bs-parent="#accordionExample"
          >
            <div class="accordion-body">
              <strong>This is the first item’s accordion body.</strong> It is
              shown by default, until the collapse plugin adds the appropriate
              classes that we use to style each element. These classes control
              the overall appearance, as well as the showing and hiding via CSS
              transitions. You can modify any of this with custom CSS or
              overriding our default variables. It’s also worth noting that just
              about any HTML can go within the <code>.accordion-body</code>,
              though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwo"
              aria-expanded="false"
              aria-controls="collapseTwo"
            >
              SMA Negeri 1 Semarang (2024–2021)
            </button>
          </h2>
          <div
            id="collapseTwo"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample"
          >
            <div class="accordion-body">
              <strong>This is the second item’s accordion body.</strong> It is
              hidden by default, until the collapse plugin adds the appropriate
              classes that we use to style each element. These classes control
              the overall appearance, as well as the showing and hiding via CSS
              transitions. You can modify any of this with custom CSS or
              overriding our default variables. It’s also worth noting that just
              about any HTML can go within the <code>.accordion-body</code>,
              though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseThree"
              aria-expanded="false"
              aria-controls="collapseThree"
            >
              SMP Negeri 2 Semarang (2021–2018)
            </button>
          </h2>
          <div
            id="collapseThree"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample"
          >
            <div class="accordion-body">
              <strong>This is the third item’s accordion body.</strong> It is
              hidden by default, until the collapse plugin adds the appropriate
              classes that we use to style each element. These classes control
              the overall appearance, as well as the showing and hiding via CSS
              transitions. You can modify any of this with custom CSS or
              overriding our default variables. It’s also worth noting that just
              about any HTML can go within the <code>.accordion-body</code>,
              though the transition does limit overflow.
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about me end -->
    <!-- footer begin -->
    <footer class="text-center p-5">
      <div>
        <a href="https://www.instagram.com/aufa.nadia"><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
        <a href="https://x.com/nad_faa29"><i class="bi bi-twitter-x h2 p-2 text-dark"></i></a>
        <a href="https://wa.me/+6281542025228"><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
      </div>
      <div>
        Nadia Aufa &copy; 2025
      </div>
    </footer>
    <!-- footer end -->
    <!-- tombol back to top -->
    <button
      id="backToTop"
      class="btn btn-danger rounded-circle position-fixed bottom-0 end-0 m-3 d-none"
    >
      <i class="bi bi-arrow-up" title="Back to Top"></i>
    </button>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
        crossorigin="anonymous"
    ></script>
    <script type="text/javascript">
      function tampilWaktu(){
        var waktu = new Date();
        var tanggal = waktu.getDate();
        var bulan = waktu.getMonth();
        var tahun = waktu.getFullYear();
        var jam = waktu.getHours();
        var menit = waktu.getMinutes();
        var detik = waktu.getSeconds();

        var arrBulan = ["1", "2", "3", "4","5","6","7","8","9","10","11","12"];

        var tanggal_full = tanggal + "/" + arrBulan[bulan] + "/" + tahun;
        var jam_full = jam + ":" + menit + ":" + detik;
    
        document.getElementById("tanggal").innerHTML=tanggal_full;
        document.getElementById("jam").innerHTML=jam_full;
      }
      setInterval(tampilWaktu, 1000);
    </script>
    <script type="text/javascript"> 
      const backToTop = document.getElementById("backToTop");

      window.addEventListener("scroll", function () {
        if (window.scrollY > 300) {
          backToTop.classList.remove("d-none");
          backToTop.classList.add("d-block");
        } else {
          backToTop.classList.remove("d-block");
          backToTop.classList.add("d-none");
        }
      });

      backToTop.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
      });
    </script>
    <script>
      const darkBtn = document.getElementById("darkBtn");
      const lightBtn = document.getElementById("lightBtn");

      darkBtn.addEventListener("click", function () {
        document.body.style.backgroundColor = "black";
        document.body.style.color = "white";
      });

      lightBtn.addEventListener("click", function () {
        document.body.style.backgroundColor = "white";
        document.body.style.color = "black";
      });
    </script>
  </body>
</html>