<!DOCTYPE html>
<html lang="en">

<head>
  <title>Warung Page</title>

  <?php
  include 'navbar.php';
  include 'server.php';
  $qry_detail_warung = mysqli_query($conn, "select * from warung where id_warung = '" . $_GET['id_warung'] . "'");
  $dt_warung = mysqli_fetch_array($qry_detail_warung);
  ?>

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio sections-bg min-height">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Warung
          <?= $dt_warung['nama_warung'] ?>
        </h2>
        <p>Selamat datang silahkan pilih menu</p>
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
        data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

        <div>
          <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active">Semua</li>
            <li data-filter=".filter-app">Makanan</li>
            <li data-filter=".filter-product">Minuman</li>
          </ul><!-- End Portfolio Filters -->
        </div>

        <div class="row gy-4 portfolio-container">

          <?php
          include "server.php";
          $qry_menu = mysqli_query($conn, "select * from menu where jenis = 'makanan' and id_warung = " . $_GET['id_warung'] . " ");
          while ($dt_menu_makanan = mysqli_fetch_array($qry_menu)) {
            ?>
            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="<?= $dt_menu_makanan['gambar'] ?>" class="img-fluid" style="width: 100%" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="#" title="More Details">
                      <?= $dt_menu_makanan['nama_menu'] ?>
                    </a></h4>
                  <p>
                    <?= $dt_menu_makanan['deskripsi_menu'] ?>
                  </p>
                  <div style="margin-top: 10px">
                    <a href="detail_menu.php?id_menu=<?= $dt_menu_makanan['id_menu'] ?>"
                      class="readmore stretched-link">Order<i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?> <!-- End Portfolio Item -->

          <?php
          include "server.php";
          $qry_menu = mysqli_query($conn, "select * from menu where jenis = 'minuman' and id_warung = " . $_GET['id_warung'] . " ");
          while ($dt_menu_minuman = mysqli_fetch_array($qry_menu)) {
            ?>
            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <img src="<?= $dt_menu_minuman['gambar'] ?>" class="img-fluid" style="width: 100%" alt="">
                <div class="portfolio-info">
                  <h4><a href="#" title="More Details">
                      <?= $dt_menu_minuman['nama_menu'] ?>
                    </a></h4>
                  <p>
                    <?= $dt_menu_minuman['deskripsi_menu'] ?>
                  </p>
                  <div style="margin-top: 10px">
                    <a href="detail_menu.php?id_menu=<?= $dt_menu_minuman['id_menu'] ?>"
                      class="readmore stretched-link">Order<i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?> <!-- End Portfolio Item -->

        </div><!-- End Portfolio Container -->

      </div>

    </div>
  </section><!-- End Portfolio Section -->
  <?php include 'footer.php' ?>