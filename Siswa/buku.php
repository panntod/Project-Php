<?php
include "header.php";
?>
<div class="container" style="min-height: 100vh; padding-top: 5rem">
    <h2 class="text-center pb-3">Daftar Buku</h2>
    <div class="row g-5">
        <?php
        include "connect.php";
        $qry_buku = mysqli_query($conn, "select * from buku");
        while ($dt_buku = mysqli_fetch_array($qry_buku)) {
            ?>
            <div class="col-lg-3 col-12">
                <div class="card shadow">
                    <img src="foto_produk/<?= $dt_buku["foto"] ?>" class="card-img-top" style="height: 200px">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <?= $dt_buku['nama_buku'] ?>
                        </h5>
                        <p class="card-text text-center">
                            <?= substr($dt_buku['deskripsi'], 0, 20) ?>
                        </p>
                        <a href="pinjam_buku.php?id_buku=<?= $dt_buku['id_buku'] ?>" class="btn btn-primary w-100">Pinjam</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<?php
include "footer.php";
?>