<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/elements/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>BROTH</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/linearicons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
  </head>
  <body>

    <header id="header" id="home">
      <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="index.html"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" title="" /></a>
          </div>
        </div>
      </div>
    </header><!-- #header -->

    <section class="generic-banner relative">
      <div class="container">
        <div class="row height align-items-center justify-content-center">
          <div class="col-lg-10">
            <div class="generic-banner-content">
              <h2 class="text-white">BROTH</h2>
              <p class="text-white">Website ini diperuntukan bagi pelanggan agar dapat mengetahui informasi yang aktual sistematis dan massif.
                <br><br>Since 21th Century.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->

  <!-- About Generic Start -->
  <div class="main-wrapper">

    <!-- Start about Area -->
    <section class="about-area section-gap">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 about-left">
            <form action="<?php echo base_url('home/cek'); ?>" method="post">
            <h1>
              Silahkan Masukkan Nomor Nota
            </h1>
            <input type="text" name="nota" placeholder="NOTA">
            <br><br>
            <button type="submit" name="button" class='btn btn-info'>Cek Barang</button>
          </div>
        </form>
          <div class="col-lg-6 about-right">
            <?php
            function tgl_indo($tanggal){
	             $bulan = array (
		            1 =>   'Januari',
		            'Februari',
		            'Maret',
		            'April',
		            'Mei',
		            'Juni',
		            'Juli',
		            'Agustus',
		            'September',
		            'Oktober',
		            'November',
		            'Desember' );
	              $pecahkan = explode(',', $tanggal);
	              return $pecahkan[0] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[2];
                }
						if(isset($_GET['pesan'])){
						if($_GET['pesan'] == "belum"){
              echo "<div class='alert alert-info'> Tanggal Barang Masuk ";
              echo tgl_indo($this->session->userdata('tanggal_masuk').','.$this->session->userdata('bulan_masuk').','.$this->session->userdata('tahun_masuk'));
              echo ".</div>";
						echo "
            <div class='alert alert-danger'>Barang Belum Selesai ! Mohon Tunggu Sebentar.</div>";
          }else if($_GET['pesan'] == "sudah"){
            echo "<div class='alert alert-info'> Tanggal Barang Masuk ";
            echo tgl_indo($this->session->userdata('tanggal_masuk').','.$this->session->userdata('bulan_masuk').','.$this->session->userdata('tahun_masuk'));
            echo ".</div>";
						echo "<div class='alert alert-success'>Barang Sudah Selesai ! Sudah Dapat Diambil di Toko.</div>";
          }else if($_GET['pesan'] == "salah"){
						echo "<div class='alert alert-warning'>Nota Tidak Ada ! Silahkan Cek Kembali Nota Anda.</div>";
						}
						}
						?>
          </div>
        </div>
      </div>
    </section>
    <!-- End about Area -->

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6 col-sm-6">
            <div class="single-footer-widget">
            <a href="https://brothco.business.site/" style="color:white">  <h6>About Us</h6></a>
              </p>
            </div>
          </div>
          <div class="col-lg-5  col-md-6 col-sm-6">

          </div>
          <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
            <div class="single-footer-widget">
              <h6>Follow Us</h6>
              <div class="footer-social d-flex align-items-center">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End footer Area -->

    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script src="<?php echo base_url(); ?>assets/js/easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/hoverIntent.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/superfish.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.sticky.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/parallax.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/mail-script.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  </body>
</html>
