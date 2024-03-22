<?php
include 'partials/header.php';
?>
<section class="h-v-full d-flex align-center justify-content-center">
  <form action="services/pengakses-file.php" method="post" enctype="multipart/form-data">
    <div class="mb-2">
      <label for="file" class="d-block mb-1">Input File Anda</label>
      <input type="file" name="file" id="file" class="input-form">
    </div>
    <button type="submit" name="submit" class="btn submit-btn">Submit</button>
  </form>
</section>