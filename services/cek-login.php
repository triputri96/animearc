<?php
session_start();
$dummyUsername = 'putri';
$dummyPassword = '123';
$countFailed = 0;

if (isset($_POST['btnLogin'])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];

		if($_SESSION['failed_login'] % 3 == 0 || !isset($_SESSION['failed_login'])){
			$_SESSION['failed_login'] = 0;
		}

    if ($username === $dummyUsername && $password === $dummyPassword) {
			$_SESSION['failed_login'] = 0;
			$_SESSION['username'] = $username;
			header('Location: ../index.php');
    } else {
			$_SESSION['failed_login']++;
			if ($username !== $dummyUsername && $password) {
				header('Location: ../login.php?pesan=Username Salah');
			} elseif ($password !== $dummyPassword && $username) {
				header('Location: ../login.php?pesan=Password Salah');
			} elseif (!$password && !$username) {
				header('Location: ../login.php?pesan=Silahkan Input Data Dengan Benar!');
			}
		}
} elseif (isset($_POST['btnBatal'])) {
    // Redirect untuk pembatalan atau tindakan lainnya
    header('Location: ../login.php');
    exit();
}