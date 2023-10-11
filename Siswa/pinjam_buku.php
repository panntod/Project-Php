<?php
include "header.php";
include "connect.php";
$qry_detail_buku = mysqli_query($conn, "select * from buku where id_buku = '" . $_GET['id_buku'] . "'");
$dt_buku = mysqli_fetch_array($qry_detail_buku);
?>
<div class="container" style="min-height: 87vh; padding-top: 5rem;">
    <h2 class="text-center pb-3">Pinjam Buku</h2>
    <div class="row justify-content-between">
        <div class="col-md-4">
            <img src="foto_produk/<?= $dt_buku['foto'] ?>" class="card-img-top" style="height: 240px">
        </div>
        <div class="col-md-7">
            <form action="masukan_keranjang.php?id_buku=<?= $dt_buku['id_buku'] ?>" method="post">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <td>Nama Buku</td>
                            <td>
                                <?= $dt_buku['nama_buku'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>
                                <?= $dt_buku['deskripsi'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Pinjam</td>
                            <td><input type="number" name="jumlah_pinjam" value="1"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input class="btn btn-success" type="submit" value="PINJAM"></td>
                        </tr>
                    </thead>
                </table>
            </form>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>