<!DOCTYPE html>
  <html>
  <head>
      <title>Home</title>    
  <?php include 'navbar.php'?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Selamat Datang <?=$_SESSION['nama']?></h2>
          <p>Kami Menyediakan Layanan Kantin Sekolah SMK Telkom Malang.</p>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="https://www.smktelkom-mlg.sch.id/" class="stretched-link">Profil Sekolah</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-facebook"></i></div>
              <h4 class="title"><a href="https://www.facebook.com/smktelkommalang" class="stretched-link">Facebook</a></h4>
            </div>
          </div><!--End Icon Box -->
          
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
            <div class="icon"><i class="bi bi-instagram"></i></div>
            <h4 class="title"><a href="https://www.instagram.com/smktelkommalang/" class="stretched-link">Instagram</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="https://www.google.com/maps/place/Sekolah+Menengah+Kejuruan+Telkom+Malang/@-7.9708726,112.6455361,15.13z/data=!4m6!3m5!1s0x2dd6285c5c1b44e3:0xf6c889ac7452dc3a!8m2!3d-7.976862!4d112.659016!16s%2Fg%2F1wjspsfl?entry=ttu" class="stretched-link">Lokasi Sekolah</a></h4>
            </div>
          </div><!--End Icon Box -->
        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

      <!-- ======= Our Services Section ======= -->
      
      <section id="services" class="services sections-bg" >
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Warung</h2>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
         
        <?php 
          include "server.php";
          $qry_warung=mysqli_query($conn,"select * from warung");
          while($dt_warung=mysqli_fetch_array($qry_warung)){
        ?>
        <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-chat-square-text"></i>
              </div>
              <h3><?=$dt_warung['nama_warung']?></h3>
              <p><?=$dt_warung['deskripsi']?></p>
              <a href="warung.php?id_warung=<?=$dt_warung['id_warung']?>" class="readmore stretched-link">Order<i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        <?php } ?>

        </div>

      </div>
    </section><!-- End Our Services Section -->

  <?php include 'footer.php'?>