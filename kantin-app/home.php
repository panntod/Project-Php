<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <?php 
    session_start();
        if($_SESSION['status_login']!=true){
            header('location: login.php');
        }
    ?>
    <?php include 'style.php'?>
</head>
<body>
      <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.svg" alt="">
        <h1>Kantin<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">Transaksi</a></li>

          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Tambah Saldo</a></li>
              <li><a href="logout.php">Log Out</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <h2>Selamat datang <?=$_SESSION['nama']?> di website Kantin Online.</h2>

    <?php include 'scripts.php'?>
</body>
</html>
