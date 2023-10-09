<?php
session_start();
if ($_SESSION['status_login'] != true) {
    header('location: ../login.php');
} else if ($_SESSION['role'] != 'admin') {
    header('location: ../home.php');
}
?>

<?php include 'link.style.php' ?>
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
                    <li><a href="home.php">Home</a></li>
                    <li><a href="tampil_siswa.php">Tampil Siswa</a></li>
                    <li><a href="#">Tampil Warung</a></li>
                    <li class="dropdown"><a href="#"><span>Profile</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="../home.php">Home Siswa</a></li>
                            <li><a href="logout.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>
    </header>