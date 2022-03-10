<?php
if (session_id() == '' || !isset($_SESSION)) {
	session_start();
  }
include 'config.php';


            if (isset($_SESSION['cart'])) {
              $total = 0;
              foreach ($_SESSION['cart'] as $product_id => $quantity) {
                $result = $mysqli->query("SELECT categories_id, name, description, qty, price FROM product WHERE id = " . $product_id);
                if ($result) {
                  while ($obj = $result->fetch_object()) {
                    $prod_name = $obj->name;
                    // echo '<div>' . $obj->name . '</div>';

                  }
                }
              }
            }
            

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$pin = $_POST["pin"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];

if($mysqli->query("INSERT INTO address (fname, lname, address, city, number, email) VALUES('$fname', '$lname', '$address', '$city', $pin, '$prod_name')")){
	echo 'Data inserted';
	echo '<br/>';
}

header ("location:done.php");
