<!DOCTYPE html>
<html lang="en">
<head>
    <title>Warung Page</title>

<?php
    include 'navbar.php';
    include 'server.php';
    $qry_detail_warung=mysqli_query($conn,"select * from warung where id_warung = '".$_GET['id_warung']."'");
    $dt_warung=mysqli_fetch_array($qry_detail_warung);
?>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Warung <?=$dt_warung['nama_warung']?></h2>
          <p>Selamat datang silahkan pilih menu</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-app">Makanan</li>
              <li data-filter=".filter-product">Minuman</li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="#" data-gallery="portfolio-gallery-app" class="glightbox"><img src="#" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="#" title="More Details">App 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="#" data-gallery="portfolio-gallery-app" class="glightbox"><img src="#" class="img-fluid"  alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="#" title="More Details">Product 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->
<?php include 'footer.php'?>