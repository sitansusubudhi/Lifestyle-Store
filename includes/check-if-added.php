<?php

function check_if_added_to_cart($item_id) {
    require "common.php";
    $user_id = $_SESSION['user_id'];
    $check_cart_query = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $check_cart_result = mysqli_query($con, $check_cart_query);
    $result = mysqli_num_rows($check_cart_result);
    if($result >= 1){
        return 1;
    } else {
        return 0;
    }
}

?>