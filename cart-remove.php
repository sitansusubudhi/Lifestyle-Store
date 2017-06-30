<?php
require "includes/common.php";
$item_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

?>

<?php 

$deletion_query = "DELETE FROM users_items WHERE user_id = '$user_id' AND item_id = '$item_id'";
$deletion_query_submit = mysqli_query($con, $deletion_query) or die(mysqli_error($con));
header('location: cart.php');

?>