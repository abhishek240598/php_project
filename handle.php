<?php
 require("mysqli_connect.php");

 session_start();
 $book_name = mysqli_real_escape_string($conn, $_SESSION['book_name']);
 

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['payment'])) {

      $name = mysqli_real_escape_string($conn, trim($_POST['name']));
      $address = mysqli_real_escape_string($conn, trim($_POST['address']));
      $payment = mysqli_real_escape_string($conn, trim($_POST['payment']));
    
      $q = "SELECT quntity FROM bookinventory WHERE book_name = '$book_name'";
      $result = mysqli_query($conn, $q);

      if($result) {
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        $q1 = "INSERT INTO orderhistory (first_name, last_name, payment_option) VALUES ('$name', '$address', '$payment')";
        $totalquantity = $row[0] - 1;
        $q2 = "UPDATE bookinventory set quntity = $totalquantity where book_name = '$book_name'";
        $res = mysqli_query($conn, $q1);
        if($res) {
            $res1 = mysqli_query($conn, $q2);
            if($res1) {
                echo "success";
                header('Location: index.php');
            } else{
                echo '<p>'. mysqli_error($conn). '</p>';
                echo "Fail";
            }
        } else{
            echo '<p>'. mysqli_error($conn). '</p>';
            echo "Fail";
        }
        
    } else{
        echo '<p>'. mysqli_error($conn). '</p>';
        echo "Fail";
    }

    }

 }
?>