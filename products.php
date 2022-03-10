<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
  session_start();
}
include 'config.php';
// require('top.inc.php');

define('SERVER_PATH', $_SERVER['DOCUMENT_ROOT'] . '/online_optical/');
define('SITE_PATH', 'http://127.0.0.1/online_optical/');

define('PRODUCT_IMAGE_SERVER_PATH', SERVER_PATH . 'media/product/');
define('PRODUCT_IMAGE_SITE_PATH', SITE_PATH . 'media/product/');

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
    <div class="small-12">
      <?php
      $i = 0;
      $product_id = array();
      $product_quantity = array();
      $result = $mysqli->query('SELECT * FROM product');
      if ($result === FALSE) {
        die(mysqli_error($result));
      }
      if ($result) {
        while ($obj = $result->fetch_object()) {
          echo '<div class="large-4 columns">';
          // echo '';
          echo '<p><h3>' . $obj->name . '</h3></p>';
          // echo PRODUCT_IMAGE_SITE_PATH.$row['image'];
      ?>


            <img style="height: 180px" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $obj->image ?>" />

          <?php ?>
      <?php
          // echo '<img src="images/products/' . $obj->image . '"/>';
          echo '<p><strong>Product Code</strong>: ' . $obj->categories_id . '</p>';
          echo '<p><strong>Description</strong>: ' . $obj->description . '</p>';
          echo '<div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>';
          echo '<p><strong>Units Available</strong>: ' . $obj->qty . '</p>';
          echo '<p><strong>Price (Per Unit)</strong>: ' . $currency . $obj->price . '</p>';
          if ($obj->qty > 0) {
            echo '<p>
                        <a href="update-cart.php?action=add&id=' . $obj->id . '">
                        <input type="submit" value="Add To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" />
                        </a>
                      </p>';
          } else {
            echo 'Out Of Stock!';
          }
          echo '</div>';
          $i++;
        }
      }
      $_SESSION['product_id'] = $product_id;
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