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
<title>Login Page</title>
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
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form method="post" action="login_submit.php" >
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    <div><?php echo $_GET['email_error']; ?></div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true" >
                                    <div><?php echo $_GET['password_error']; ?></div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                            </form><br/>
                        </div>
                        <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
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