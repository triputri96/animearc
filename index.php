<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/main.css">
  <title>Document</title>
</head>

<body>
  <header>
    <nav id="navbar" class="d-flex w-100 ">
      <div class="col-4">
        <img src="assets/imgs/anime-arcadia-logo.png" alt="Anime Arcadia Logo" width="160">
      </div>
      <ul class="d-flex justify-content-center col-4 align-center">
        <li class="col-4 "><a href="">Home</a></li>
        <li class="col-4">
          <div id="menuDropdown" class="">
            <!-- TODO: ketika close dropdown efeknya nggak muncul -->
            <button type="button" href="" onclick="dropMenu()">Menu</button>
          </div>
          <!-- d-none -->
          <div id="menuList" class="absolute menu-list d-none">
            <ul class="p-3">
              <!-- TODO: tambahkan smooth scroll -->
              <li class="mb-2"><a href="#videoTrailer">Video Multimedia</a></li>
              <li class="mb-2"><a href="">Array</a></li>
              <li class="mb-2"><a href="">Pengakses File</a></li>
            </ul>
          </div>
        </li>
        <li class="col-4 "><a href="">About Us</a></li>
      </ul>
      <div class="col-4 d-flex justify-content-end align-center">
        <div>
          <button class="btn login-btn">Log In</button>
        </div>
      </div>
    </nav>
  </header>

  <section id="heroSection" class="h-v-full d-flex align-center mb-5">
    <div class="d-flex">
      <div class="col-6 d-flex align-center">
        <div>
          <div class="mb-3">
            <h1 class="hero-title mb-3">Frieren: Beyond Journey's End</h1>
            <p class="hero-description">Raja iblis telah dikalahkan, dan grup para pahlawan kembali ke rumah
              sebelum
              dibubarkan. Frieren si
              penyihir,
              Himmel sang pahlawan, Pendeta Heiter, dan Eisen sang pejuang mengenang perjalanan panjang mereka sembari
              tibanya momen untuk saling mengucapkan selamat tinggal. Tapi, alur waktu berjalan berbeda untuk ras elf,
              dan
              Frieren harus menyaksikan teman-temannya perlahan meninggal satu per satu.</p>
          </div>
          <button class="btn hero-btn">Read More</button>
        </div>
      </div>
      <div class="col-6 d-flex justify-content-center">
        <img src="assets/imgs/hero-image.png" alt="" height="500">
      </div>
    </div>
  </section>

  <section class="ptb-4 mb-5">
    <h2 class="mb-1">Main Character</h2>
    <div class="d-flex">
      <div class="col-5">
        <div class="info-img mb-2"></div>
        <div class="d-flex justify-content-between">
          <img src="assets/imgs/frieren.png" alt="" width="135" height="135" class="fit-cover">
          <img src="assets/imgs/frieren.png" alt="" width="135" height="135" class="fit-cover">
          <img src="assets/imgs/frieren.png" alt="" width="135" height="135" class="fit-cover">
        </div>
      </div>
      <div class="col-7 ml-5">
        <div class="mb-3">
          <h3 class="mb-2">Frieren</h3>
          <p>Protagonis utama dalam "Frieren: Beyond Journey's End" adalah Mage dari Kelompok Pahlawan dan melakukan
            perjalanan bersama Hero Himmel, Warrior Eisen, dan Priest Heiter dalam perjalanan sepuluh tahun untuk
            mengalahkan Raja Iblis.</p>
        </div>
        <div class="d-flex mb-2">
          <div class="col-3">
            <p class="bio-text">Jenis Kelamin </p>
          </div>
          <div class="col-3">
            <p class="bio-text">Perempuan</p>
          </div>
        </div>
        <div class="d-flex mb-2">
          <div class="col-3">
            <p class="bio-text">Usia</p>
          </div>
          <div class="col-3">
            <p class="bio-text">1000+</p>
          </div>
        </div>
        <div class="d-flex mb-2">
          <div class="col-3">
            <p class="bio-text">Spesies</p>
          </div>
          <div class="col-3">
            <p class="bio-text">Elf</p>
          </div>
        </div>
        <div class="d-flex mb-2">
          <div class="col-3">
            <p class="bio-text">Kelas</p>
          </div>
          <div class="col-3">
            <p class="bio-text">Mage</p>
          </div>
        </div>
        <div class="d-flex mb-2">
          <div class="col-3">
            <p class="bio-text">Ranking</p>
          </div>
          <div class="col-3">
            <p class="bio-text">Back-Alley Mage</p>
          </div>
        </div>
        <div class="d-flex mb-2">
          <div class="col-3">
            <p class="bio-text">Keahlian</p>
          </div>
          <div class="col-3">
            <p class="bio-text">Hero Party</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="videoTrailer" class="ptb-4 mb-5 d-flex justify-content-center">
    <video src="assets/videos/frieren-trailer.mp4" type="video/mp4" controls autoplay muted loop class="w-90"></video>
  </section>
  <script src="assets/js/script.js"></script>
</body>

</html>