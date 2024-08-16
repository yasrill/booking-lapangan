<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../assets/bootstrap.css">
    <link rel="stylesheet" href="../assets/STYLE.CSS">
    <link rel="stylesheet" href="../assets/STYLE copy.CSS">
    <script src="../assets/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Admin</title>
</head>

<body>
    <div class="col-lg-8 mt-5 mt-lg-0 container log col-5">
        <h3 class="display-1 textimg1 col-s-12">Laniang Badminton Hall</h3>
        <?php
        $info = $this->session->flashdata('info');
        if (!empty($info)){
        echo $info;
        }
        ?>        
        <form action="<?php echo base_url(); ?>login/masuk" method="post" role="form" class="php-email-form">
            <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0"> <input type="text" class="form-control"
                        name="username" id="email" placeholder="Username" required=""></div>
            </div>
            <div class="form-group mt-3"> <input type="password" class="form-control" name="password"
                    id="pwd" placeholder="Enter Password" required=""></div>
            <div class="text-left mt-4"><button type="submit" id="anu">Masuk Admin</button></div>
        </form>
    </div>

</body>

</html>