<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pemesanan Page</title>

    <?php
    include "navbar.php";
    include "server.php";
    $qry_detail_menu = mysqli_query($conn, "select * from menu where id_menu = '" . $_GET['id_menu'] . "'");
    $dt_menu = mysqli_fetch_array($qry_detail_menu);
    ?>

    <style>
        input, input[type="number"]:focus {
            border: none;
            outline: none;
        }
    </style>
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about jarak">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Pemesanan</h2>
            </div>

            <section id="stats-counter" class="stats-counter">
                <div class="container" data-aos="fade-up">

                    <div class="row gy-4 align-items-center">

                        <div class="col-lg-6">
                            <img src="<?= $dt_menu['gambar'] ?>" class="img-fluid rounded-2 mb-4" alt="" style="width: 500px; height: 500px;">
                            <h4><a href="warung.php?id_warung=<?= $dt_menu['id_warung'] ?>" title="More Details"><i class="bi bi-arrow-left"></i> Kembali</a></h4>
                        </div>

                        <div class="col-lg-6">

                            <form action="masuk_keranjang.php?id_menu=<?= $dt_menu['id_menu'] ?>" method="post">
                                <div class="stats-item d-flex align-items-center">
                                    <h4><strong>
                                            Menu:
                                        </strong>
                                        <?= $dt_menu['nama_menu'] ?>
                                    </h4>
                                </div><!-- End Stats Item -->

                                <div class="stats-item d-flex align-items-center">
                                    <h4 style="margin-right: 10px"><strong>Harga:</strong></h4>
                                    <h4><span data-purecounter-start="0" data-purecounter-end="<?= $dt_menu['harga'] ?>"
                                            data-purecounter-duration="1" class="purecounter"
                                            style="font-size: 30px"></span></h4>
                                </div><!-- End Stats Item -->

                                <div class="stats-item d-flex align-items-center">
                                    <h4><strong>Deskripsi: </strong>
                                        <?= $dt_menu['deskripsi_menu'] ?>
                                    </h4>
                                </div><!-- End Stats Item -->

                                <div class="stats-item d-flex align-items-center">
                                    <h4><strong>Jumlah: </strong><input type="number" name="qty" value="1"
                                             min="1"></h4>
                                </div><!-- End Stats Item -->

                                <input class="btn btn-success tombol" type="submit" value="PESAN"
                                    style="margin-top: 10px">
                            </form>
                        </div>

                    </div>

                </div>
            </section><!-- End Stats Counter Section -->
        </div>
    </section>
    <?php
    include "footer.php";
    ?>