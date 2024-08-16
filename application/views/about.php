<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/STYLE.CSS">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/STYLE copy.CSS">
    <script src="<?php echo base_url(); ?>assets/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>About Us</title>
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

    <!-- Carousel -->
    <div id="demo" class="carousel slide container slap" data-bs-ride="carousel">
        <div>
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner slap">
                <div class="carousel-item active">
                    <img src="<?php echo base_url(); ?>img/lap2.jpg" alt="Los Angeles" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3 class="textimg3">Selamat Datang Di Laniang Badminton Hall</h3>
                        <p>MEN SANA IN CORPORE SANO</p>
                        <p>Didalam tubuh yang sehat ada jiwa yang santuy</p>
                      </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>img/lap6.jpg" alt="Chicago" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3 class="textimg3">Selamat Datang Di Laniang Badminton Hall</h3>
                        <p>MEN SANA IN CORPORE SANO</p>
                        <p>Didalam tubuh yang sehat ada jiwa yang santuy</p>
                      </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>img/lap7.jpg" alt="New York" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3 class="textimg3">Selamat Datang Di Laniang Badminton Hall</h3>
                        <p>MEN SANA IN CORPORE SANO</p>
                        <p>Didalam tubuh yang sehat ada jiwa yang santuy</p>
                      </div>
                </div>
            </div>
            

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

    <div class="container hal2 text-center" id="adakah">
        <div class="row">
            <h3 class="textimg2">Fasilitas</h3>

            <div class="col p-3 text-black">
                <img src="<?php echo base_url(); ?>img/motor.png" alt="" width="400px" class="foto2">
                <h5 class="mt-3 font1">Parkiran Motor</h5>
            </div>

            <div class="col p-3 text-black">
                <img src="<?php echo base_url(); ?>img/mesjid.png" alt="" width="400px" class="foto2">
                <h5 class="mt-3 font1">Mesjid</h5>
            </div>

            <div class="col p-3 text-black">
                <img src="<?php echo base_url(); ?>img/mobil.png" alt="" width="400px " class="foto2">
                <h5 class="mt-3 font1">Parkiran Mobil</h5>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col p-3 text-black">
                <img src="<?php echo base_url(); ?>img/minuman.png" alt="" width="400px" class="foto2">
                <h5 class="mt-3 font1">Jual Minuman</h5>
            </div>

            <div class="col p-3 text-black">
                <img src="<?php echo base_url(); ?>img/lapbultang (2).png" alt="" width="300px" class="foto2">
                <h5 class="mt-3 font1">Lapangan Ada 6</h5>
            </div>

            <div class="col p-3 text-black">
                <img src="<?php echo base_url(); ?>img/toilet-removebg-preview.png" alt="" width="400px " class="foto2">
                <h5 class="mt-3 font1">Parkiran Mobil</h5>
            </div>
        </div>

    </div>

    <div class="container aos-init aos-animate rounded-3 border shadow-lg p-lg-5" data-aos="fade-up" id="contact">
        <div class="section-titlea">
            <p id="adakah">My Location</p>
        </div>

        <div>
            <iframe style="border:0; width: 100%; height: 270px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.8044514524026!2d119.51416931484971!3d-5.135166996273364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefbf19d176511%3A0x1d8e77ddd3c3ff61!2sLaniang%20Badminton%20Hall!5e0!3m2!1sid!2sid!4v1667493057101!5m2!1sid!2sid"
                frameborder="0" allowfullscreen="">
            </iframe>
        </div>
    </div>

    <div class="container pt-5">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-muted">© 2022 Laniang. Badminton Hall</span>
            </div>
        </footer>
    </div>
</body>

</html>