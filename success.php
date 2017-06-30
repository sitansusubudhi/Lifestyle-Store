<?php
require "includes/common.php";
error_reporting(E_ERROR | E_PARSE);
if (!isset($_SESSION['email'])) {
        header('location: index.php');
} 
$user_id = $_SESSION['user_id'];
$item_id_string = $_GET['orderID'];
$item_id_Array = explode(',', $item_id_string);
foreach($item_id_Array as $item_id){
    $updation_query = "UPDATE users_items SET status = 'Confirmed' WHERE user_id = '$user_id' AND item_id = '$item_id'"; 
    $updation_query_result = mysqli_query($con, $updation_query) or die(mysqli_error($con));   
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Order Success Page</title>
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

            <div class="jumbotron">
                <h3><center>Your order is confirmed. Thank you for shopping with us. <br>
                        <a href='products.php'>Click here</a> to purchase any other item.
                    </center></h3>
            
            </div>
        </div>
    </div>
    
     <?php 
    include 'includes/footer.php';
    ?>
</body>
</html>