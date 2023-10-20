<?php
include "header.php";
?>
<style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css");

    .background-section {
        background: url('https://lib.itspku.ac.id/wp-content/uploads/2021/12/fungsi-perpustakaan.jpg') no-repeat center center fixed;
        background-size: cover;
        text-align: center;
        height: 80vh;
        padding: 200px 0;
        color: #fff;
    }

    h1 {
        font-size: 3rem;
        font-weight: 700;
    }

    p {
        font-weight: 300;
    }
</style>
<!-- landing page -->
<section class="background-section">
    <div class="container">
        <h1 class="">Selamat datang
            <?= $_SESSION['nama_siswa'] ?> di website Perpus Online.
        </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, rerum sint? Modi, delectus. Maiores
            tempora rerum quas in minima, esse nisi, expedita voluptatem odit quaerat recusandae quasi eligendi tempore
            illum temporibus repellendus dolore! Ducimus, quam odio assumenda aperiam praesentium facere.</p>
    </div>
</section>

<!-- card -->
<section class="container mt-5">
    <div class="row g-4">

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Card Bootstrap -->
            <div class="col">
                <div class="card">
                    <!-- Ikon menggunakan Bootstrap Icons -->
                    <div class="card-body text-center">
                        <i class="bi bi-book-half" style="font-size: 2em; color: blue;"></i>
                        <h5 class="card-title">Pinjam Buku</h5>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, temporibus!
                        </p>
                        <!-- Tautan ke halaman profil -->
                        <div class="d-flex justify-content-center">
                            <a href="buku.php" class="btn btn-primary">PINJAM <i class="bi bi-journal-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Bootstrap -->
            <div class="col">
                <div class="card">
                    <!-- Ikon menggunakan Bootstrap Icons -->
                    <div class="card-body text-center">
                        <i class="bi bi-basket-fill" style="font-size: 2em; color: blue;"></i>
                        <h5 class="card-title">Keranjang</h5>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, temporibus!
                        </p>
                        <!-- Tautan ke halaman profil -->
                        <div class="d-flex justify-content-center">
                            <a href="buku.php" class="btn btn-primary">LIHAT <i
                                    class="bi bi-arrow-up-right-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Bootstrap -->
            <div class="col">
                <div class="card">
                    <!-- Ikon menggunakan Bootstrap Icons -->
                    <div class="card-body text-center">
                        <i class="bi bi-clipboard-fill" style="font-size: 2em; color: blue;"></i>
                        <h5 class="card-title">Transaksi</h5>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, temporibus!
                        </p>
                        <!-- Tautan ke halaman profil -->
                        <div class="d-flex justify-content-center">
                            <a href="histori_peminjaman.php" class="btn btn-primary">LIHAT <i
                                    class="bi bi-arrow-up-right-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php
include "footer.php";
?>