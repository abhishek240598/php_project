<?php

require("mysqli_connect.php");

session_start();

    $query = "select * from bookinventory";

    $result = @mysqli_query($conn, $query);

    $num = mysqli_num_rows($result);

    if($num > 0){
        echo "<h1> Books for sale </h1><hr>";
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            echo "<h2>Book Name : <a href='checkout.php?title=".$row['book_name']."'>" .$row['book_name']."</a> Available Copies: ".$row['quntity']."</h2><hr>";
        }
    }

    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    //     $_SESSION['id'] = $_POST['name'];
    //     $_SESSION['address'] = $_POST['address'];
    //     header("Location: checkout.php");
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>book store</title>
</head>
<body>
</body>
</html>