<?php
require "includes/common.php";
?>
<?php 
    if (isset($_SESSION['email'])) {
        header('location: products.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Lifestyle Store</title>
<link href="css/index.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <!--
    <div class="header">
        <div class="inner-header">
            <div class="logo">
                <a href="#">
                    Lifestyle Store
                </a>
            </div>
            
            <div class="header-link">
                <a href="#">
                    Login
                </a>
            </div>
            
            <div class="header-link">
                <a href="#">
                    Sign Up
                </a>
            </div>
        </div>
    </div>
    -->
    <?php 
    include 'includes/header.php';
    ?>
    <div class="content">
        <div id="banner_image">
            
            <div class="container">
                <div id="banner_content">
                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands</p>
                    <a href="products.php" class="btn btn-danger btn-lg active">
                        Shop Now
                    </a>
                </div>
            </div>
            
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="products.php#cameras" ><div class="thumbnail">
                            <img src="img/1.jpg" alt="">
                            <div class="caption">
                                <h3>Cameras</h3>
                                <p>Choose among the best available in the world.</p>
                            </div>
                        </div> 
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="products.php#watches" ><div class="thumbnail">
                            <img src="img/t_titan-REGALIA.jpg" alt="">
                            <div class="caption">
                                <h3>Watches</h3>
                                <p>Original watches from the best brands.</p>
                            </div>
                        </div> 
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="products.php#shirts" ><div class="thumbnail">
                            <img src="img/2.jpg" alt="">
                            <div class="caption">
                                <h3>Shirts</h3>
                                <p>Our exquisite collection of shirts.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--
            <div class="items">
                <center>
                <a href="#">
                    <img src="./img/camerath.jpg" class="thumbnail">
                    <div class="caption">
                        <h2>Cameras</h2>
                        <p>Choose among the best available in the world.</p>
                    </div>
                    </center>
                </a>
            </div>
            <div class="items">
                <center>
                <a href="#">
                    <img src="./img/watchth.jpg" class="thumbnail">
                    <div class="caption">
                        <h2>Watches</h2>
                        <p>Original watches from the best brands.</p>
                    </div>
                </a>
                </center>
            </div>
            <div class="items">
                <center>
                    <a href="#">
                    <img src="./img/shirtth2.jpg" class="thumbnail">
                    <div class="caption">
                        <h2>Shirts</h2>
                        <p>Our exquisite collection of shirts.</p>
                    </div>
                    </a>
                </center>
            </div>
            -->
        </div>
    </div>
    <?php 
    include 'includes/footer.php';
    ?>
</body>
</html>

