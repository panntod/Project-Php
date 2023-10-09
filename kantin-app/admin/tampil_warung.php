<!DOCTYPE html>
<html>

<head>
    <title>Tampil Siswa</title>
    <?php include 'navbar.php' ?>

    <style>
        .section-warung {
            display: flex;
            justify-content: space-between;
        }

        .container {
            margin-top: 1rem;
        }

        .table td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 280px;
        }
    </style>

    <section class="container">
        <?php
        include "server.php";
        $qry_warung = mysqli_query($conn, "SELECT * FROM warung");

        while ($data_warung = mysqli_fetch_array($qry_warung)) {
            ?>
            <div class="section-warung mt-5 mb-3">
                <h2>
                    <?= $data_warung['nama_warung'] ?>
                </h2>
                <a href="#" class="btn btn-success tombol">Tambah</a>
            </div>

            <table class="table table-hover table-striped border">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Menu</th>
                        <th>Jenis</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $id_warung = $data_warung['id_warung'];
                    $qry_menu = mysqli_query($conn, "SELECT * FROM menu WHERE id_warung = '$id_warung'");

                    while ($data_menu = mysqli_fetch_array($qry_menu)) {
                        ?>
                        <tr>
                            <td>
                                <?= $data_menu['id_menu'] ?>
                            </td>
                            <td>
                                <?= $data_menu['nama_menu'] ?>
                            </td>
                            <td>
                                <?= $data_menu['jenis'] ?>
                            </td>
                            <td>
                                <?= $data_menu['gambar'] ?>
                            </td>
                            <td>
                                <?= $data_menu['deskripsi_menu'] ?>
                            </td>
                            <td>
                                <?= $data_menu['harga'] ?>
                            </td>
                            <td>
                                <a href="#" class="btn btn-warning text-white"><i class="bi bi-pencil-square"></i></a>
                                <a href="#" onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                                    class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        <?php } ?>
        <a href="#" class="btn btn-primary tombol">TAMBAH WARUNG</a>

        <?php include 'link.scripts.php' ?>
    </section>


</html>