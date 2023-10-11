<?php
session_start();
if ($_SESSION['status_login'] != true) {
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
<link href="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Perpustakaan_Nasional_Republik_Indonesia_insignia.svg/1200px-Perpustakaan_Nasional_Republik_Indonesia_insignia.svg.png" rel="icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Perpustakaan Online</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed w-100" style="z-index: 99;">
    <div class="container">
      <a class="navbar-brand" href="#">Perpustakaan Online</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="buku.php">Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="histori_peminjaman.php">Transaksi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>