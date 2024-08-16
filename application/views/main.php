<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/STYLE.CSS">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/STYLE copy.CSS">
    <script src="<?php echo base_url(); ?>assets/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Sewa Lapangan</title>
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

            <a href="<?php echo base_url(); ?>Loginuser/logout">
                <button type="button" class="btn btn-outline-primary me-2 float-end mt-lg-1">Logout</button>
            </a>

        </div>
    </div>
    <br><br><br> 
    <div class="container bener text-center">
        <h3 class="display-1 textimg1 ">Mulai Booking</h3>
    </div>


    <div class="container col-5 border shadow-lg p-lg-5 mt-5 mb-5">
        <div class="row">
            <div class="container">
                <h3 class="display-6 textimg1 pt-4">Laniang Badminton Hall</h3>
                <a href="https://wa.me/6282151984232?text=Hi+Laniang.+Saya+ingin+booking+lapangan+%3F"><img src="wa.png" alt="" width="60px" class="pt-4 imgfl"></a>
                <a href=""><img src="ig.png" alt="" width="60px" class="pt-4 imgfl border-bottom-0"></a>
                <br>
                <h5 class="pt-3">Schedule</h5>
            </div>

            <br>

            <div class="container">
                <form action="<?php echo base_url(); ?>User/index" method="post" class="col-11">
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
            </div>
        </div>
    </div>

    <div class="container border shadow-lg p-lg-5 text-center">
        <div class="row">
            <h3 class="display-6 testi mb-1">Ketersediaan Jadwal</h3>
            <h4 class="testi mb-5">
                <?php echo 'Lapangan : ', $this->input->post('id_lapangan'); ?>
                <br>
                <?php echo 'Tanggal : ', $this->input->post('tanggal'); ?>
            </h4>
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Jam</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>               
                <?php 
                    foreach($jadwal as $row){
                        echo '
                        <tr>
                            <td>'.$row['jam'].'</td>
                            <td>'.$row['stat'].'</td> '?>
                            <td> <?php if(isset($row['stat']) && ($row['stat'])=="Terbooking" or ($row['stat'])=="Menunggu Pembayaran")
                            {
                               echo '<a href="#">
                                    <button class="btn btn-danger me-2 disabled">
                                    Booking
                                    </button>
                                </a>';
                            }else{
                                echo '<a href="'.base_url().'User/keranjang?id_lapangan='.$row['id_lapangan'].
                                    '&tanggal='.$row['tanggal'].'&jam='.$row['jam'].'">
                                        <button class="btn btn-outline-primary me-2">
                                        Booking
                                        </button>
                                </a>
                            </td> ';
                            }}?>
            </table>
            <a href="<?php echo base_url(); ?>Keranjang">
                <br><br>
                <button type="button" class="btn btn-outline-primary me-2 col-12">
                    Konfirmasi Pesanan
                </button>
            </a>
        </div>
    </div>
</body>

</html>