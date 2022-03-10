<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
  session_start();
}

if (!isset($_SESSION["username"])) {
  header("location:index.php");
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
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <!-- <li><a href="">Account</a></li> -->

                <?php
                if (isset($_SESSION['username'])) {
                  echo '<li><a href="account.php">My Account</a></li>';
                  echo '<li><a href="logout.php">Log Out</a></li>';
                } else {
                  echo '<li><a href="login.php">Log In</a></li>';
                  echo '<li><a href="register.php">Register</a></li>';
                }
                ?>
                <li>Welcom <?php echo $_SESSION['fname'] ?></li>


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
      <h3>My COD Orders</h3>
      <hr>

      <?php
      $user = $_SESSION["username"];
      $result = $mysqli->query("SELECT * from orders where email='" . $user . "'");
      if ($result) {
        while ($obj = $result->fetch_object()) {
          //echo '<div class="large-6">';
          echo '<p><h4>Order ID ->' . $obj->id . '</h4></p>';
          echo '<p><strong>Date of Purchase</strong>: ' . $obj->date . '</p>';
          echo '<p><strong>Product Code</strong>: ' . $obj->product_code . '</p>';
          echo '<p><strong>Product Name</strong>: ' . $obj->product_name . '</p>';
          echo '<p><strong>Price Per Unit</strong>: ' . $obj->price . '</p>';
          echo '<p><strong>Units Bought</strong>: ' . $obj->units . '</p>';
          echo '<p><strong>Total Cost</strong>: ' . $currency . $obj->total . '</p>';
          //echo '</div>';
          //echo '<div class="large-6">';
          //echo '<img src="images/products/sports_band.jpg">';
          //echo '</div>';


          // if (isset($_SESSION['cart'])) {
          //   $total = 0;
          //   foreach ($_SESSION['cart'] as $product_id => $quantity) {
          //     $result = $mysqli->query("SELECT categories_id, name, description, qty, price FROM product WHERE id = " . $product_id);
          //     if ($result) {
          //       while ($obj = $result->fetch_object()) {
          //         $prod_name = $obj->name;
          //         // echo '<div>' . $obj->name . '</div>';

          //       }
          //     }
          //   }
          // }

          // $value = $_SESSION['fname'];
          // $data = $mysqli->query("SELECT * from address where email='" . $value . "'");
          // if ($data) {
          //   while ($obj = $data->fetch_object()) {
          //     echo '<p><strong>Customer Name</strong>: ' . $obj->fname . $obj->lname .'</p>';
          //     echo '<p><strong>Delivery Address</strong>: ' . $obj->address . '</p>';
          //     echo '<p><strong>Contact No</strong>: ' . $obj->number . '</p>';
          //   }
          // }

          // echo '<p><hr></p>';

        }
      }
      ?>



    </div>
  </div>




  <div class="row" style="margin-top:10px;">
    <div class="small-12">

      <footer style="margin-top:10px;">
        <p style="text-align:center; font-size:0.8em;">&copy; Eyes optical. All Rights Reserved.</p>
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