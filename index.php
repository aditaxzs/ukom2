<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jurusan</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <header>
        <h1>Dashboard Informasi Jurusan RPL</h1>
        <div class="auth-links">
            <a href="#login" onclick="openLoginOverlay()">Login</a>
        </div>
    </header>
    <nav>
        <a href="#home">Home</a>
        <a href="#nilai">Nilai Siswa</a>
        <a href="#mapel">Jadwal Mapel</a>
        <a href="#guru">Data Guru</a>
        <a href="#siswa">Data Siswa</a>
    </nav>
    
    <section id="event">

    </section>
    <section id="mapel">

    </section>
    <section id="guru">

    </section>
    <section id="siswa">

    </section>
    <footer>
        &copy; 2024 SMK Negeri 5 Kota Bekasi
    </footer>

    <form class="overlay" id="LoginOverlay">
        <div class="login-form">
            <label for="loginLevel">Login Sebagai :</label>
            <button id="level" name="siswa" ><a href="logsiswa.php">Siswa</button>
            <button id="level" name="admin"><a href ="logadmin.php">Admin</button>
            <br>
            <br>
            <br>
            <button onclick="closeLoginOverlay()">Kembali</button>
        </div>
    </form>
    <script src="index.js"></script>
</body>
</html>