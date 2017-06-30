<?php
require "includes/common.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Products Page</title>
<link href="css/index.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style>
    body { 
        padding-top: 70px; 
    }
</style>
</head>
<body>
    
    <?php 
    include 'includes/header.php';
    include 'includes/check-if-added.php';
    ?>
    <div class="content">
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place.</p>
            </div>
            
            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/t_canon_eos_750d.jpg" alt="">
                            <div class="caption">
                                <h3>Canon EOS 750d</h3>
                                <p>Price: Rs. 48,995.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart($item_id) != 0)
                                
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                    }
                                }
                                ?>
                            </div>
                        </div> 
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/t_Finepix HS20.jpg" alt="">
                            <div class="caption">
                                <h3>Finepix HS20</h3>
                                <p>Price: Rs. 54,365.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                
                                    if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart($item_id) != 0)
                                
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                    }
                                }
                                ?>
                            </div>
                        </div> 
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/t_sonyalpha3000.jpg" alt="">
                            <div class="caption">
                                <h3>Sony Alpha 3000</h3>
                                <p>Price: Rs. 53,185.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                
                                    if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart($item_id) != 0)
                                
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                    }
                                }
                                ?>
                            </div>
                        </div> 
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/t_nikon-d3100.jpg" alt="">
                            <div class="caption">
                                <h3>Nikon D3100</h3>
                                <p>Price: Rs. 54,990.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                
                                    if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart($item_id) != 0)
                                
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                    }
                                }
                                ?>
                            </div>
                        </div> 
                </div>
            </div>
            
            <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/t_Heuer Autavia 1163.jpg" alt="">
                            <div class="caption">
                                <h3>Heuer Autavia #1163</h3>
                                <p>Price: Rs. 533,436.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                
                                    if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart($item_id) != 0)
                                
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                    }
                                }
                                ?>
                            </div>
                        </div> 
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/t_Hublot-Watches-1303427182_tn.jpg" alt="">
                            <div class="caption">
                                <h3>Hublot #1303</h3>
                                <p>Price: Rs. 12,222.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                
                                    if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart($item_id) != 0)
                                
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                    }
                                }
                                ?>
                            </div>
                        </div> 
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/t_omega s0986.jpg" alt="">
                            <div class="caption">
                                <h3>Omega S0986</h3>
                                <p>Price: Rs. 8,000.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                
                                    if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart($item_id) != 0)
                                
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                    }
                                }
                                ?>
                            </div>
                        </div> 
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/t_titan-REGALIA.jpg" alt="">
                            <div class="caption">
                                <h3>Titan Regalia</h3>
                                <p>Price: Rs. 9,036.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                
                                    if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart($item_id) != 0)
                                
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                    }
                                }
                                ?>
                            </div>
                        </div> 
                </div>
            </div>
            
            <div class="row text-center" id="shirts">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/2.jpg" alt="">
                            <div class="caption">
                                <h3>Camisa Hombre</h3>
                                <p>Price: Rs. 1,465.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                
                                    if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart($item_id) != 0)
                                
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                    }
                                }
                                ?>
                            </div>
                        </div> 
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/t_sky twill.jpg" alt="">
                            <div class="caption">
                                <h3>Sky Twill</h3>
                                <p>Price: Rs. 1,674.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                
                                    if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart($item_id) != 0)
                                
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                    }
                                }
                                ?>
                            </div>
                        </div> 
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/t_charles-tyrwhitt.jpg" alt="">
                            <div class="caption">
                                <h3>Charles Tyrwhitt</h3>
                                <p>Price: Rs. 2,038.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                
                                    if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart($item_id) != 0)
                                
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                    }
                                }
                                ?>
                            </div>
                        </div> 
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/t_G11256.jpg" alt="">
                            <div class="caption">
                                <h3>Luis Phil</h3>
                                <p>Price: Rs. 1,500.00</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                
                                    if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart($item_id) != 0)
                                
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                ?>
                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php 
                                    }
                                }
                                ?>
                            </div>
                        </div> 
                </div>
            </div>
        </div>
    </div>
    
     <?php 
    include 'includes/footer.php';
    ?>
</body>
</html>