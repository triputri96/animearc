<?php
if(isset($_POST['submit'])) {
  $target_dir = dirname(__DIR__) . '/public/uploads/';
  $target_file = $target_dir . basename($_FILES['file']['name']);
  $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  if($file_type !== 'txt'){
    echo 'Only txt file is allowed! ';
    return;
  }

  if(file_exists($target_dir)) {
    echo 'File already exists! Try to Upload another file!';
    return;
  }

  if($_FILES['file']['size'] >= 1000000) {
    echo 'File cannot be greater than 1mb!';
    return;
  }

  if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
    $converted_html = file_get_contents($target_file);
    echo $converted_html;
  } else {
    echo 'Failed convert txt file!';
  }
}

// TODO: convert web ke file belum nih:v