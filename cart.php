<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
  session_start();
}
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  </meta>
  <title> Online Optical </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/foundation.css" />
  <script src="js/vendor/modernizr.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="final.png" width="125px">
          <div>
            <nav>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Product</a></li>
                <li><a href="cart.php">View Cart</a></li>
                <li><a href="orders.php">My Orders</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <!-- <li><a href="">Account</a></li> -->

                <?php
                if (isset($_SESSION['username'])) {
                  echo '<li><a href="account.php">My Account</a></li>';
                  echo '<li><a href="logout.php">Log Out</a></li>';
                  echo  '<li>Welcom '.$_SESSION['fname'].'</li>';
                } else {
                  echo '<li><a href="login.php">Log In</a></li>';
                  echo '<li><a href="register.php">Register</a></li>';
                }
                ?>
   

              </ul>
              <!-- <img src="cart.png" width="30" height="30px"> -->
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>




  <div class="row" style="margin-top:10px;">
    <div class="large-12">
      <?php

      echo '<p><h3>Your Shopping Cart</h3></p>';

      if (isset($_SESSION['cart'])) {

        $total = 0;
        echo '<table>';
        echo '<tr>';
        echo '<th>Code</th>';
        echo '<th>Name</th>';
        echo '<th>Quantity</th>';
        echo '<th>Cost</th>';
        echo '</tr>';
        foreach ($_SESSION['cart'] as $product_id => $quantity) {

          $result = $mysqli->query("SELECT categories_id, name, description, qty, price FROM product WHERE id = " . $product_id);


          if ($result) {

            while ($obj = $result->fetch_object()) {
              $cost = $obj->price * $quantity; //work out the line cost
              $total = $total + $cost; //add to the total cost

              echo '<tr>';
              echo '<td>' . $obj->categories_id . '</td>';
              echo '<td>' . $obj->name . '</td>';
              echo '<td>' . $quantity . '&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id=' . $product_id . '">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id=' . $product_id . '">-</a></td>';
              echo '<td>' . $cost . '</td>';
              echo '</tr>';
            }
          }
        }



        echo '<tr>';
        echo '<td colspan="3" align="right">Total</td>';
        echo '<td>' . $total . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td colspan="4" align="right"><a href="update-cart.php?action=empty" class="button alert">Empty Cart</a>&nbsp;<a href="products.php" class="button [secondary success alert]">Continue Shopping</a>';
        if (isset($_SESSION['username'])) {
          echo '<a href="orders-update.php"><button style="float:right;">Order Now</button></a>';
        } else {
          echo '<a href="login.php"><button style="float:right;">Login</button></a>';
        }

        echo '</td>';

        echo '</tr>';
        echo '</table>';
      } else {
        echo "You have no items in your shopping cart.";
      }





      echo '</div>';
      echo '</div>';
      ?>



      <div class="row" style="margin-top:10px;">
        <div class="small-12">




          <footer style="margin-top:10px;">
            <p style="text-align:center; font-size:0.8em;clear:both;">&copy; Eyes optical. All Rights Reserved.</p>
          </footer>

        </div>
      </div>





      <script src="js/vendor/jquery.js"></script>
      <script src="js/foundation.min.js"></script>
      <script>
        $(document).foundation();
      </script>
</body>

</html>