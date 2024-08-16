<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin - Laniang Badminton Hall</title>>
 
  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets-admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo base_url(); ?>assets-admin/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class=" align-items-center justify-content-between">
      <a href="index.html" class="logo align-items-center">
        <span class="d-none d-lg-block">Admin - Laniang Badminton Hall</span>
      </a>
    </div><!-- End Logo -->
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url(); ?>admin">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?php echo base_url(); ?>admin_jadwal">
            <i class="bi bi-layout-text-window-reverse"></i>
            <span>Tabel Informasi Jadwal</span>
          </a> 
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url(); ?>admin_lapangan">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Tabel Informasi Lapangan</span>
        </a> 
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url(); ?>admin_pembayaran">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Tabel Informasi Pembayaran</span>
        </a> 
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url(); ?>admin_detail">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Tabel Informasi Detail Pembayaran</span>
        </a> 
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url(); ?>login/keluar">
          <i class="bi bi-box-arrow-in-right"></i>
          <span >Log out </span>
        </a>
      </li><!-- End Login Page Nav -->

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tabel Informasi Pembayaran</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="container border shadow-lg p-lg-5 text-center">
                <div class="row">
                <h3 class="display-6 testi mb-5">Detail Pembayaran</h3>
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Id Detail</th>
                                <th>Id Pembayaran</th>
                                <th>Id User</th>
                                <th>Nama</th>
                                <th>Lapangan</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                            </tr>
                        </thead>
                        <?php 
                            foreach($detail as $row1){
                                echo '
                                <tr>
                                    <td>'.$row1['id_detail'].'</td>
                                    <td>'.$row1['id_pembayaran'].'</td>
                                    <td>'.$row1['id_user'].'</td>
                                    <td>'.$row1['nama'].'</td>
                                    <td>'.$row1['id_lapangan'].'</td>
                                    <td>'.$row1['tanggal'].'</td>
                                    <td>'.$row1['jam'].'</td>
                                </tr>';
                            }
                        ?>               
                    </table>
                </div>
            </div>
        </div><!-- End Left side columns -->
       
      </div>
    </section>

  </main><!-- End #main -->

  

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

</body>

</html>