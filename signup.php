<?php
require "includes/common.php";
error_reporting(E_ERROR | E_PARSE);
?>
<?php 
    if (isset($_SESSION['email'])) {
        header('location: products.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>SignUp Page</title>
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
    ?>
    <div class="content">
   <div class="container">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>SIGN UP</h2>
                        <form method="post" action="signup_script.php">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                <div><?php echo $_GET['email_error']; ?></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{6,}">
                                <div><?php echo $_GET['password_error']; ?></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" name="contact" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
     <?php 
    include 'includes/footer.php';
    ?>
</body>
</html>