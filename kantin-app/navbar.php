<?php
session_start();
if ($_SESSION['status_login'] != true) {
  header('location: login.php');
}
?>
<?php
include 'style.php';
?>

</head>

<body>
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="home.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.svg" alt="">
        <h1>Kantin<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <b style="color: #fff">Saldo:
              <?= $_SESSION['saldo_siswa']; ?>
            </b>
          </li>
          <li><a href="home.php">Home</a></li>
          <li><a href="keranjang.php">Keranjang <i class="bi bi-basket"></i></a></li>
          <li><a href="transaksi.php">Transaksi <i class="bi bi-cart"></i></a></li>
          <li class="dropdown"><a href="#"><span>Profile</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="tambah_saldo.php">Tambah Saldo</a></li>
              <li><a href="logout.php">Log Out</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->