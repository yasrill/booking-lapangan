<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin - Laniang Badminton Hall</title>>
 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                <h3 class="display-6 testi mb-5">Pembayaran</h3>
                <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Id Pembayaran</th>
                                <th>Id User</th>
                                <th>Nama</th>
                                <th>Telepon</th>
                                <th>Keterangan</th>
                                <th>Tanggal</th>
                                <th>Bukti</th>
                            </tr>
                        </thead>
                        <?php 
                            foreach($pembayaran as $row){
                              $id = $row['id_pembayaran'];
                              $modal = 'BuktiBayar';
                              $id_modal = $modal.$id;

                              $img_file = $row['bukti'];
                                echo '
                                <tr>
                                    <td>'.$row['id_pembayaran'].'</td>
                                    <td>'.$row['id_user'].'</td>
                                    <td>'.$row['nama'].'</td>
                                    <td>'.$row['telepon'].'</td>
                                    <td>'.$row['keterangan'].'</td>
                                    <td>'.$row['tanggal'].'</td>
                                    <td>
                                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#'.$id_modal.'">
                                        View Image
                                      </button>
                                    </td>
                                </tr>

                                <div class="modal fade" style="margin-top:80px; padding-bottom: 80px;" id="'.$id_modal.'" tabindex="-1" role="dialog" aria-labelledby="SelengkapModal" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="SelengkapModal">Bukti Pembayaran</h5>
                                          </div>
                                          <div class="modal-body">
                                              <div>
                                                <img src="'.base_url('bukti/').$img_file.'" alt="" width="400px">
                                              </div>
                                          </div>
                                          <div class="modal-footer">
                                              <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                              ';
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