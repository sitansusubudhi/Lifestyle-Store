<?php
require "includes/common.php";
?>
<?php
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: login.php?email_error=Enter a valid Email address');
}
$password = $_POST['password'];

/*if (strlen($password) < 6) {
  header('location: login.php?password_error=enter correct password');
}*/
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
$password = md5($password);
$validate_users_query = "SELECT  id,email FROM users WHERE email = '$email' AND password = '$password'";
$validate_users_result = mysqli_query($con, $validate_users_query);
$result = mysqli_num_rows($validate_users_result);

if($result == 0) {
    header('location: login.php?password_error=Incorrect combination of email address or password');
} else {
    $row = mysqli_fetch_array($select_query_result);
    $_SESSION['email'] = $row['email'];
    $_SESSION['user_id'] = $row['id'];
    header('location: products.php');
}
?>
<?php

function validate_user($con, $e_mail, $p_wd) {
  $validate_users_query = "SELECT  id,email FROM users WHERE email = '$e_mail' AND password = '$p_wd'";
  $validate_users_result = mysqli_query($con, $validate_users_query);
  $number_of_rows = mysqli_num_rows($validate_users_result);
  return $number_of_rows;
}
?>