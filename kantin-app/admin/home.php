<!DOCTYPE html>
<html>

<head>
    <title>Admin Home</title>
    <?php include 'navbar.php' ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Selamat Datang
                        <?= $_SESSION['nama'] ?>
                    </h2>
                    <p>dipusat kontrol dari database siswa dan warung.</p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="../assets/img/hero-bg.svg" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="100">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Kontrol Panel</h2>
            </div>

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                <!-- Section Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-database-gear"></i>
                        </div>
                        <h3>
                            Tampil Siswa
                        </h3>
                        <p>
                            Digunakan untuk mengkontrol data siswa
                        </p>
                        <a href="tampil_siswa.php" class="readmore stretched-link">Check<i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Section Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-database-gear"></i>
                        </div>
                        <h3>
                            Tampil Warung
                        </h3>
                        <p>
                            Digunakan untuk mengkontrol data Warung
                        </p>
                        <a href="tampil_warung.php" class="readmore stretched-link">Check<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <?php include 'footer.php' ?>