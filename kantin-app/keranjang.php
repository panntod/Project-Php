<!DOCTYPE html>
<html>

<head>
    <title>Keranjang</title>
    <?php
    include 'navbar.php';
    ?>

    <style>
        ol {
            padding: 0 0 0 24px;
        }

        table {
            height: 100%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
        }

        .tombol-a {
            padding: 10px;
        }
        .checkout{
            background: var(--color-primary);
        }
    </style>

    <section class="container jarak">
        <div>
            <div class="section-header">
                <h2>Keranjang <span style="color: var(--color-primary)">
                        <?= $_SESSION['nama'] ?>
                    </span></h2>
            </div>
        </div>

        <h5 class="tombol-a"><a href="home.php#services" title="More Details"><i class="bi bi-arrow-left"></i> Pesan
                Lagi</a>
        </h5>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA MENU</th>
                    <th>WARUNG</th>
                    <th>JUMLAH</th>
                    <th>HARGA</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $totalBelanja = 0;

                // Periksa apakah session 'cart' sudah ada dan tidak kosong
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key_produk => $val_produk):
                        // Hitung total untuk setiap item dan tambahkan ke total belanja
                        $totalItem = $val_produk['total'];
                        $totalBelanja += $totalItem;
                        ?>
                        <tr>
                            <td>
                                <?= ($key_produk + 1) ?>
                            </td>
                            <td>
                                <?= $val_produk['nama_menu'] ?>
                            </td>
                            <td>
                                <?= $val_produk['nama_warung'] ?>
                            </td>
                            <td>
                                <?= $val_produk['qty'] ?>
                            </td>
                            <td>
                                <?= $val_produk['total'] ?>
                            </td>
                            <td>
                                <a href="hapus_cart.php?id=<?= $key_produk ?>"
                                    onclick="return confirm('Apakah anda yakin pesanan data ini?')"
                                    class="btn btn-danger tombol tombol-kecil">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach;
                } else {
                    // Tampilkan pesan jika keranjang kosong
                    echo '<tr><td></td><td colspan="5">Keranjang Anda kosong.</td></tr>';
                }
                ?>
                <tr>
                    <td></td>
                    <td colspan="1">Total Belanja Anda:</td>
                    <td colspan="4">
                        <?= $totalBelanja ?>
                    </td>
                </tr>

        </table>
        <a href="checkout.php" class="btn tombol checkout" style="">Check
            Out</a>
    </section>

    <?php include 'scripts.php' ?>
</body>
</html>