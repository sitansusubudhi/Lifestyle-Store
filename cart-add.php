<?php
require "includes/common.php";
$item_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

?>

<?php 

$insertion_query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$insertion_query_submit = mysqli_query($con, $insertion_query) or die(mysqli_error($con));
header('location: products.php');

?>