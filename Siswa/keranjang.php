<?php
include "header.php";
?>
<div class="container" style="min-height: 87vh; padding-top: 5rem;">
    <h2 class="text-center pb-3">Daftar Buku di Keranjang</h2>
    <table class="table table-hover striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Buku</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach (@$_SESSION['cart'] as $key_produk => $val_produk): ?>
                <tr>
                    <td>
                        <?= ($key_produk + 1) ?>
                    </td>
                    <td>
                        <?= $val_produk['nama_buku'] ?>
                    </td>
                    <td>
                        <?= $val_produk['qty'] ?>
                    </td>
                    <td><a href="hapus_cart.php?id=<?= $key_produk ?>" class="btn btn-danger"><strong>X</strong></a></td>
                </tr>

            <?php endforeach ?>
        </tbody>
    </table>
    <a href="buku.php" class="btn btn-secondary">Pinjam Lagi</a>
    <a href="checkout.php" class="btn btn-primary">Check Out</a>
</div>
<?php
include "footer.php";
?>