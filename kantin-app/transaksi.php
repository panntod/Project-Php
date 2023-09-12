<!DOCTYPE html>
<html>

<head>
    <title>History Pembayaran</title>
    <?php
    include "navbar.php";
    ?>
    <style>
        ol {
            padding: 0 0 0 24px;
        }

        table {
            border-radius: 10px;
            box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
        }
        .jarak-bawah {
            margin-bottom: 20%
        }
    </style>
    <section class="container jarak-bawah jarak">
        <div>
            <div class="section-header">
                <h2>History Transaksi</h2>
            </div>
        </div>

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA MENU</th>
                    <th>NAMA TOKO</th>
                    <th>JUMLAH</th>
                    <th>TOTAL</th>
                    <th>TANGGAL PEMBAYARAN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "server.php";
                $qry_histori = mysqli_query($conn, "SELECT * FROM pembayaran WHERE id_siswa='" . $_SESSION['id_siswa'] . "' ORDER BY id_pembayaran DESC");
                $no = 0;

                while ($dt_histori = mysqli_fetch_array($qry_histori)) {
                    $no++;

                    // Menampilkan nama menu
                    $menu_dipilih = "<ol>";
                    $qry_menu = mysqli_query($conn, "SELECT * FROM detail_pembayaran JOIN menu ON menu.id_menu = detail_pembayaran.id_menu WHERE id_pembayaran = '" . $dt_histori['id_pembayaran'] . "'");
                    while ($dt_menu = mysqli_fetch_array($qry_menu)) {
                        $menu_dipilih .= "<li>" . $dt_menu['nama_menu'] . "</li>";
                    }
                    $menu_dipilih .= "</ol>";

                    // Menampilkan nama toko
                    $warung_dipilih = "<ol>";
                    $qry_warung = mysqli_query($conn, "SELECT * FROM detail_pembayaran JOIN warung ON warung.id_warung = detail_pembayaran.id_warung WHERE id_pembayaran = '" . $dt_histori['id_pembayaran'] . "'");
                    while ($dt_warung = mysqli_fetch_array($qry_warung)) {
                        $warung_dipilih .= "<li>" . $dt_warung['nama_warung'] . "</li>";
                    }
                    $warung_dipilih .= "</ol>";

                    // Menampilkan qty, harga, dan total
                    $qry_detail = mysqli_query($conn, "SELECT SUM(qty) as total_qty, SUM(total) AS total_harga FROM detail_pembayaran WHERE id_pembayaran = '" . $dt_histori['id_pembayaran'] . "'");
                    $dt_detail = mysqli_fetch_array($qry_detail);

                    ?>
                    <tr>
                        <td>
                            <?= $no ?>
                        </td>
                        <td style="padding: 0">
                            <?= $menu_dipilih ?>
                        </td>
                        <td style="padding: 0">
                            <?= $warung_dipilih ?>
                        </td>
                        <td>
                            <?= $dt_detail['total_qty'] ?>
                        </td>
                        <td>
                            <?= $dt_detail['total_harga'] ?>
                        </td>
                        <td>
                            <?= $dt_histori['tanggal_pembayaran'] ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </section>
    <?php
    include "footer.php";
    ?>