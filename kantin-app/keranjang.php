<!DOCTYPE html>
<html>

<head>
    <title>Keranjang</title>
    <?php include 'navbar.php'; ?>

    <main class="container">
        <div>
            <div class="section-header">
                <h2>Keranjang <span style="color: var(--color-primary)">
                        <?= $_SESSION['nama'] ?>
                    </span></h2>
            </div>
        </div>

        <table class="table table-hover table-striped"
            style="height: 100%; padding: 20px; border-radius: 10px;box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA MENU</th>
                    <th>JUMLAH</th>
                    <th>TOTAL</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach (@$_SESSION['cart'] as $key_produk => $val_produk):
                    $qty = $val_produk['qty'];
                    $harga = $val_produk['harga'];
                    $total = $qty * $harga;
                    ?>
                    <tr>
                        <td>
                            <?= ($key_produk + 1) ?>
                        </td>
                        <td>
                            <?= $val_produk['nama_menu'] ?>
                        </td>
                        <td>
                            <?= $val_produk['qty'] ?>
                        </td>
                        <td>
                            <?= $total ?>
                        </td>
                        <td>
                            <a href="hapus.php?id_siswa=<?= $data_siswa['id_siswa'] ?>"
                                onclick="return confirm('Apakah anda yakin pesanan data ini?')"
                                class="btn btn-danger tombol tombol-kecil">Hapus</a>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody>
        </table>
        <a href="checkout.php" class="btn btn-primary"
            style="margin-left: 20px; pading-left: 5px; pading-right: 5px; border-radius: 10px">Check Out</a>

        <?php include 'scripts.php' ?>
    </main>
    <?php include "footer.php" ?>