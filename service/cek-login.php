<?php
// Kredensial palsu untuk demonstrasi
$dummyUsername = 'putri';
$dummyPassword = '123';
$countFailed = 0;

// Periksa apakah formulir dikirimkan
if (isset($_POST['btnLogin'])) {
    // Dapatkan input pengguna
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $countFailed++;
    echo $countFailed;

    // Periksa apakah input cocok dengan kredensial palsu
    if ($username === $dummyUsername && $password === $dummyPassword) {
			// Redirect ke halaman sukses atau lakukan tindakan lainnya
			header('Location: ../index.php');
			$jsonData = json_encode($countFailed);
			echo $jsonData;
			exit();
    } elseif ($username !== $dummyUsername) {
			// Redirect kembali ke halaman login dengan pesan kesalahan untuk username yang salah
			header('Location: ../login.php?pesan=Username Salah');
			$jsonData = json_encode($countFailed);
			echo $jsonData;
			exit();
    } elseif ($password !== $dummyPassword) {
			// Redirect kembali ke halaman login dengan pesan kesalahan untuk password yang salah
			header('Location: ../login.php?pesan=Password Salah');
			$jsonData = json_encode($countFailed);
			echo $jsonData;
			exit();
    }
} elseif (isset($_POST['btnBatal'])) {
    // Redirect untuk pembatalan atau tindakan lainnya
    header('Location: login.php');
    exit();
}