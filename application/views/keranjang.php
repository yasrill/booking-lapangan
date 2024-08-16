<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/STYLE.CSS">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/STYLE copy.CSS">
    <script src="<?php echo base_url(); ?>assets/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Keranjang</title>
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
    <br><br><br>

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
                            <a href="'.base_url().'Keranjang/batal?nama='.$row['nama'].'&id_lapangan='.$row['id_lapangan'].'&jam='.$row['jam'].'">
                                <button class="btn btn-outline-primary me-2">
                                    Batal
                                </button>
                            </a>
                            </td>
                        </tr>';
                    }
                ?>
            </table>
            <a href="<?php echo base_url(); ?>pembayaran">
                <br><br>
                <button type="button" class="btn btn-outline-primary me-2 col-12">
                    Lanjutkan pemabayaran
                </button>
            </a>
        </div>
    </div>
</body>

</html>