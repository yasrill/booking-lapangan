<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/STYLE.CSS">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/STYLE copy.CSS">
    <script src="<?php echo base_url(); ?>assets/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Pembayaran</title>
</head>

<body>
    <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card pb-5">
            <a href="<?php echo base_url(); ?>home" class="w3-bar-item w3-button"><b>Laniang Badminton Hall</b></a>

            <div class="w3-left w3-hide-small">
                <a href="<?php echo base_url(); ?>about"
                    class="w3-bar-item w3-button">About Us</a>
            </div>
            
            <div class="w3-left w3-hide-small">
                <a href="https://wa.me/6285349617881?text=Hi+Laniang.+Saya+ingin+bertanya+mengenai+Laniang+Badminton+Hall+bisa+dibantu+%3F"
                    class="w3-bar-item w3-button">Contact</a>
            </div>          
    
            <a id="getwebsitebtn" class="w3-button w3-bar-item w3-hover-white w3-hover-text-green w3-hide-small"
                href="<?php echo base_url(); ?>user" target="_blank">Sewa<span class="w3-hide-medium">
                </span> Lapangan</a>
        </div>
    </div>

    <br><br>
    <div class="container border shadow-lg p-lg-5 text-center">
    <div class="row">
            <h3 class="display-6 testi mb-1">Pesanan anda:</h3>
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Nama</th>
                        <th>Lapangan</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>               
                <?php 
                    foreach($keranjang as $row){
                        echo '
                        <tr>
                            <td>'.$row['nama'].'</td>
                            <td>'.$row['id_lapangan'].'</td>
                            <td>'.$row['tanggal'].'</td>
                            <td>'.$row['jam'].'</td>
                            <td>'.$row['harga'].'</td>
                            <td>
                            <a href="'.base_url().'Pembayaran/batal?nama='.$row['nama'].'&id_lapangan='.$row['id_lapangan'].'&jam='.$row['jam'].'">
                                <button class="btn btn-outline-primary me-2">
                                    Batal
                                </button>
                            </a>
                            </td>
                        </tr>';
                    }
                ?>
            </table>
        </div>
    </div>
    <div class="container col-6 border shadow-lg p-lg-5 mt-5 mb-5 float-start ms-lg-5">
        <div class="row">
            <div class="container">
                <h3 class="display-6 textimg1 pt-4">Detail Pembayaran</h3>
                <form action="Pembayaran/bayar_book" class="col-11" method="POST" enctype="multipart/form-data">  
                <input type="hidden" name="tanggal" class="col-12" value="" >
                    <div class="float-start">
                        <p class="mt-4 ">Nama:</p>
                        <input type="text" name="nama" class="col-12" value="" >
                    </div>
                    <div class="float-start mx-lg-5">
                        <p class="mt-4">Nomer Telepon:</p>
                        <input type="text" name="telepon" class="col-12">
                    </div>
                    <div>
                        <p class="mt-4 float-start me-lg-5">Catatan:</p>
                        <input type="text" name="keterangan" class="col-12">
                    </div>
                    <div>
                        <p class="mt-4">Bukti Pembayaran:</p>
                        <input type="file" name="gambar" class="col-12">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary mt-3 col-12">Konfirmasi Pembayaran</button>                  
                </form>
            </div>
        </div>

        
    </div>
    <div class="container col-5 border shadow-lg p-lg-5 mt-5 mb-5 float-end me-lg-5">
        <div class="row">
            <div class="container float-start">
                <h3 class="display-6 textimg1 pt-4">Pembayaran Dapat Melalui:</h3>
                <div class="col-12">
                    <img src="<?php echo base_url(); ?>img/dana.png" alt="" width="60px" class="pt-4 imgfl border-bottom-0 float-start">
                    <p class="pt-4 imgfl border-bottom-0 float-start ms-lg-3 mt-lg-3"> 0853-4961-7881 </p>
                </div>
                <br><br><br><br>
                <div class="col-12">
                    <img src="<?php echo base_url(); ?>img/shopee.png" alt="" width="60px" class="pt-4 imgfl border-bottom-0 float-start">
                    <p class="pt-4 imgfl border-bottom-0 float-start ms-lg-3"> 0853-4961-7881 </p>
                </div>
                <br><br><br>
                <div class="col-12">
                    <img src="<?php echo base_url(); ?>img/ovo.png" alt="" width="60px" class="pt-4 imgfl border-bottom-0 float-start">
                    <p class="pt-4 imgfl border-bottom-0 float-start ms-lg-3"> 0853-4961-7881 </p>
                </div>
                <br><br><br>
                <div class="col-12">
                    <img src="<?php echo base_url(); ?>img/bri.png" alt="" width="60px" class="pt-4 imgfl border-bottom-0 float-start">
                    <p class="pt-4 imgfl border-bottom-0 float-start ms-lg-3"> 1111 2222 3333 4444 </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>