<?php
require 'includes/common.php';
?>
<?php
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: signup.php?email_error=enter correct email');
}
$password = $_POST['password'];
if (strlen($password) < 6) {
  header('location: signup.php?password_error=enter correct password');
}

$name = $_POST['name'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];
//use insert query and store the data in the database.

$name = mysqli_real_escape_string($con, $name);
$email = mysqli_real_escape_string($con, $email);

$password = mysqli_real_escape_string($con, $password);
$password = md5($password);

$contact = mysqli_real_escape_string($con, $contact);
$city = mysqli_real_escape_string($city);
$address = mysqli_real_escape_string($address);

$select_users_query = "SELECT  id FROM users WHERE email = '$email'";
$select_users_result = mysqli_query($con, $select_users_query);
$result = mysqli_num_rows($select_users_result);

if($result > 0) {
    header('location: signup.php?register_error=User already registered!');
} else {
    $user_registration_query = "insert into users(name, email, password, contact, city, address) values ('$name', '$email', '$password', '$contact', '$city', '$address')";
    $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    echo "User successfully inserted";
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = mysqli_insert_id($con);
    header('location: products.php');
}
?>