
<!-- code to get data for website into database -->
<?php
    require("mysqli_connect.php");

    session_start();

    // if(isset($_SESSION['id'])){
    //     $name = $_SESSION['id'];
    //     $address = $_SESSION['address'];
    //     $payment_type = $_SESSION['payment'];
    //     $query = "select * from checkout where name = $name";

    //     $result = @mysqli_query($conn, $query);

    //     $num = mysqli_num_rows($result);

    //     $totalquantity = 0;

    //     if($num > 0){
    //         while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    //             echo "<p>Name : ".$row['name']."</p>".
    //             "<p>Address : ".$row['address']."</p>".
    //             "<p>payment_type :".$row['payment']."</p>".
    //             "<p>Price : ".$row['price']."</p>".
    //             "<p>Total Price : ".($row['price'] * $quantity)."</p>".
    //             "<p>Order Placed Thank You for Shopping</p>"; 
    //             $totalquantity = $row['quantity'] - $quantity;        
    //         }
    //     }

    //     $query = "update books set quantity = $totalquantity where name = $name";

    //     $result = @mysqli_query($conn, $query);
    // }
    $_SESSION['book_name'] = $_GET['title'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout Page</title>
</head>
<body>
  <h1>Checkout page</h1>
  <form action="handle.php" method="post">
  <label for="name" name="name">Name</label> <br>
    <input type="text" id="name" name="name"><br>
<label for="address" name="address">Address</label> <br>
    <input type="text" id="address" name="address"><br>
<label for="payment" name="payment">Choose a payment method</label> <br>
     <select name="payment" id="payment">
      <option value="none" selected disabled hidden>Select</option>
      <option value="visa">Visa Card</option>
      <option value="debit">Debit Card</option>
      <option value="paypal">Paypal </option>
      <option value="master">Master Card</option>
    </select>
<br>
<br>
    <button type="submit" name="submit" value="Submit">Submit</button>
<br>
<br>
<a href="index.php">Move to home page</a>
    
  </form>
</body>
</html>