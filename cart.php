<?php
require "includes/common.php";
error_reporting(E_ERROR | E_PARSE);
?>
<?php 
    if (!isset($_SESSION['email'])) {
        header('location: login.php');
   }
?>
<!DOCTYPE html>
<html>
<head>
<title>Cart Page</title>
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
    $user_id = $_SESSION['user_id'];
    $select_items_query = "SELECT up.id, up.user_id, up.item_id, p.name, p.price from users_items up INNER JOIN users u ON u.id = up.user_id INNER JOIN items p ON p.id = up.item_id WHERE up.user_id = '$user_id'";
    $select_items_result = mysqli_query($con, $select_items_query);
    $result = mysqli_num_rows($select_items_result);
    $sum = 0;
    $id = '';
    if($result == 0) {
    ?>
    <div class="content">
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <table class="table table-striped">
                    <thead>
                        <tr><th>Item Number </th> <th>Item Name </th> <th>Price </th> <th> </th></tr>
                    </thead>
                    <tbody>
     
        <tr><td colspan="4"> <?php echo '<p class="text-warning col-xs-offset-1">Add items to the cart first!</p>'; ?> </td></tr> 
    <?php } else { 
        
        while($result > 0) {
            $row = mysqli_fetch_array($select_items_result);
            $sum = $sum + $row['price'];
            $id = $id + ','. $row['item_id'];
            $result = $result - 1;
    ?>
        <tr><td><?php echo $row['item_id']; ?></td> <td><?php echo $row['name']; ?></td> <td><?php echo $row['price']; ?></td> 
            <td><a href='cart-remove.php?id={$row[\'item_id\']}' class='remove_item_link'>Remove</a></td></tr>
    <?php
        }
        $id = substr($id, 1);   //Item_ids ordered by the user separated by commas
    ?>
                        <tr><td> </td> <td>Total </td> <td><?php echo 'Rs '.$sum.' /-'; ?></td> <td><a href='success.php?orderID={$id}' class="btn btn-primary">Confirm Order</a></td></tr>
                   <?php
        }
    ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    
     <?php 
    include 'includes/footer.php';
    ?>
</body>
</html>