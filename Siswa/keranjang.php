<?php 
    include "header.php";
?>
<h2>Daftar Buku di Keranjang</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th><th>Nama Buku</th><th>Jumlah</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach (@$_SESSION['cart'] as $key_produk => $val_produk): ?>
            <tr>
                <td><?=($key_produk+1)?></td><td><?=$val_produk['nama_buku']?></td><td><?=$val_produk['qty']?></td><td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>

        <?php endforeach ?>
    </tbody>
</table>
<a href="checkout.php" class="btn btn-primary" style="margin-left: 20px; pading-left: 5px; pading-right: 5px; border-radius: 10px">Check Out</a>
<a href="buku.php" class="btn btn-secondary" style="margin-left: 20px; pading-left: 5px; pading-right: 5px; border-radius: 10px">Pinjam Lagi</a>
<?php 
    include "footer.php";
?>
