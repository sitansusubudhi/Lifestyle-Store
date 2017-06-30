<?php
require "includes/common.php";
error_reporting(E_ERROR | E_PARSE);
if (!isset($_SESSION['email'])) {
        header('location: index.php');
} 
?>
<!DOCTYPE html>
<html>
<head>
<title>Settings Page</title>
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
        <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>Change Password</h2>
                        <form method="post" action="settings_script.php">
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="Old Password"  name="oldpassword" required = "true" pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="New Password" name="newpassword" required = "true" pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="Re-type New Password" name="contact" required = "true" pattern=".{6,}">
                                <div><?php echo $_GET['pass_error']; ?></div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Change</button>
                        </form>
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