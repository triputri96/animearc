<?php
// TODO: bikin autoload lah, biar start sessionnya bisa langsung dijalannin
  include 'services/cek-login.php';
?>
<header>
  <nav id="navbar" class="d-flex w-100 ">
    <!-- TODO: tambahkan efek ketika hover -->
    <div class="col-4">
      <img src="assets/imgs/anime-arcadia-logo.png" alt="Anime Arcadia Logo" width="160">
    </div>
    <ul class="d-flex justify-content-center col-4 align-center">
      <li class="col-4 "><a href="/anime-arcadia">Home</a></li>
      <li class="col-4">
        <div id="menuDropdown" class="">
          <!-- TODO: ketika close dropdown efeknya nggak muncul -->
          <button type="button" href="" onclick="dropMenu()">Menu</button>
        </div>
        <!-- d-none -->
        <div id="menuList" class="absolute menu-list d-none overflow-hidden">
          <ul class="p-3">
            <!-- TODO: tambahkan smooth scroll -->
            <li class="mb-2"><a href="#videoTrailer">Video Multimedia</a></li>
            <li class="mb-2"><a href="input-array.php">Array</a></li>
            <li class="mb-2"><a href="">Pengakses File</a></li>
          </ul>
        </div>
      </li>
      <li class="col-4 "><a href="">About Us</a></li>
    </ul>
    <div class="col-4 d-flex justify-content-end align-center">
      <div>
        <?php if(!isset($_SESSION['username'])) {?>
        <a href="login.php" class="btn login-btn">Log In</a>
        <?php } else {?>
          <form action="services/logout.php" method="post">
            <button type="submit" class="btn logout">Log Out</button>
          </form>
        <?php }?>
      </div>
    </div>
  </nav>
</header>