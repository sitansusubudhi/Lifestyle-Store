<?php
require "includes/common.php";
error_reporting(E_ERROR | E_PARSE);
?>

<?php

if (!isset($_SESSION['email'])) {
        header('location: index.php');
} 
   $email = $_SESSION['email'];
   $user_id = $_SESSION['user_id'];
   $old = $_POST['oldpassword'];
   $new = $_POST['newpassword'];
   $new_f = $_POST['contact'];
   if (strlen($new) != strlen($new_f) ) { //md5($new) != md5($new_f)
        header('location: setting.php?pass_error=enter same password in both fields');
   }
   $old = mysqli_real_escape_string($con, $old);
   $old = md5($old);
   $new = mysqli_real_escape_string($con, $new);
   $new = md5($new);
   $new_f = mysqli_real_escape_string($con, $new_f);
   $new_f = md5($new_f);
    
    
    $pass_query = "SELECT id FROM users WHERE email = '$email' and password = '$old'";
    $pass_query_result = mysqli_query($con, $pass_query);
    $result = mysqli_num_rows($pass_query_result);
    if($result == 0) {
        header('location: setting.php?pass_error=Incorrect old password entered');
    } else {
        $new_pass_query = "UPDATE users SET password = '$new' WHERE email = '$email'";
        $new_pass_query_result = mysqli_query($con, $new_pass_query);
    }
?>