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
          <span >Log out</span>
        </a>
      </li><!-- End Login Page Nav -->

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tabel Informasi Jadwal</h1>
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
            <div class="container">
                <form action="<?php echo base_url(); ?>Admin_jadwal/index" method="post" class="col-6">
                    <label for="sel1" class="form-label">Pilih Lapangan:</label>
                    <select class="form-select" id="sel1" name="id_lapangan">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                    <br>
                    <p class="mt-4">Tanggal:</p>
                    <input type="date" name="tanggal" class="col-12">
                    <br><br>
                    <button type="submit" class="btn btn-primary mt-3">Pilih</button>
                </form>
                <br>
            </div>
            <div class="container border shadow-lg p-lg-5 text-center">
                <div class="row">
                <h3 class="display-6 testi mb-5">Ketersediaan Jadwal</h3>
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Lapangan</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php 
                            foreach($jadwal as $row){
                                echo '
                                <tr>
                                    <td>'.$row['id_lapangan'].'</td>
                                    <td>'.$row['tanggal'].'</td>
                                    <td>'.$row['jam'].'</td>
                                    <td>'.$row['stat'].'</td>
                                    <td>
                                    <a href="'.base_url().'admin_jadwal/konfirmasi?id_lapangan='.$row['id_lapangan'].'&jam='.$row['jam'].'"><button class="btn btn-outline-primary me-2">Konfirmasi</button></a>
                                    <a href="'.base_url().'admin_jadwal/hapus?id_lapangan='.$row['id_lapangan'].'&jam='.$row['jam'].'"><button class="btn btn-outline-primary me-2">Batal</button></a>
                                    </td>
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