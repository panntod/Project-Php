<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Page</title>
        <?php include 'style.php'?>
    </head>

    <body>
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <h2>Update Page</h2>
            </div>

            <div class="row gx-lg-0 gy-4">

            <div class="col-lg-4">

                <div class="info-container d-flex flex-column align-items-center justify-content-center">
                <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
                </div>

            </div>

            <?php 
                include "server.php";
                $qry_get_siswa=mysqli_query($conn,"select * from siswa where id_siswa = '{$_GET['id_siswa']}'");
                $dt_siswa=mysqli_fetch_array($qry_get_siswa);
            ?>

            <div class="col-lg-8">
                <form action="proses_ubah_siswa.php" method="post" class="php-email-form">
                <input type="hidden" name="id_siswa" value="<?= $dt_siswa['id_siswa'] ?>">
                <div class="row">
                    <div class="form-group mt-3">
                        <input type="text" name="nama" value="<?=$dt_siswa['nama']?>" class="form-control" style="height: 50px; border-radius: 10px;" placeholder="Masukan Nama" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" value="<?=$dt_siswa['kelas']?>" name="kelas" style="height: 50px; border-radius: 10px;" placeholder="Masukan Kelas" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="number" class="form-control" value="<?=$dt_siswa['saldo_siswa']?>" name="saldo_siswa" style="height: 50px; border-radius: 10px;" placeholder="Masukan Saldo" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="email" class="form-control" value="<?=$dt_siswa['email']?>" name="email" id="email" style="height: 50px; border-radius: 10px;" placeholder="Masukan Email" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="password" class="form-control" name="password" id="password" style="height: 50px; border-radius: 10px;" placeholder="Masukan Password Baru">
                </div>

                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message" style="background-color: green; border-radius:11px"></div>
                    <div class="sent-message">Your regristate is succesfully. Thank you!</div>
                </div>
                <div class="text-center">
                    <button type="submit" onclick="validateAndPindah()">Ubah</button>
                </div>
                </form>
            </div><!-- End Contact Form -->

            </div>

        </div>
        </section><!-- End Contact Section -->
        </div>

        <script>
            function validateAndPindah() {
                var nama = document.getElementsByName("nama")[0].value;
                var kelas = document.getElementsByName("kelas")[0].value;
                var email = document.getElementById("email").value;
                var password = document.getElementById("password").value;

                if (nama === "" || kelas === "" || email === "") {
                    var errorMessage = document.querySelector(".error-message");
                    errorMessage.textContent = "Please fill in all fields.";
                    errorMessage.style.backgroundColor = "red";
                    errorMessage.style.borderRadius = "11px";
                    errorMessage.style.display = "block";
                } else {
                    // Semua field terisi, pindah ke halaman berikutnya
                    window.location.href = "tampil_siswa.php";
                }
            }
        </script>
         <?php include "scripts.php"; ?>
    </body>
</html>