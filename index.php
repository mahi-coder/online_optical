<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
  session_start();
}

?>

<!-- <!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BOLT Sports Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">BOLT Sports Shop</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>
      <section class="top-bar-section">
     Right Nav Section
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li> -->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  </meta>
  <title> Online Optical </title>
  <link rel="stylesheet" href="style.css">
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

          <div class="row">
            <div class="col-2">
              <h1>Welcome to <br>Eyes optical !!!</h1>
              <p> The eyes are the window of the soul.<br>Keep you eyes on the stars, and keep your feet on the ground
              </p>
              <a href="products.php" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col-2">
              <img src="final.png">
            </div>
          </div>
        </div>
      </div>

      <!----------featured categories---------->
      <div class="categories">
        <div class="small-container">
          <div class="row">
            <div class="col-3">
              <img src="category2.jpg">
            </div>
            <div class="col-3">
              <img src="category1.jpg">
            </div>
            <div class="col-3">
              <img src="category3.jpg">
            </div>
          </div>
        </div>
      </div>
      <!----------featured products---------->

      <div class="small-container">
        <h2 class="title">Feature Product</h2>
        <div class="row">
          <div class="col-4">
            <img src="first.jpg">
            <h4> Black Rimless Rectangle</h4>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <p>₹901.00</p>
            </div>
          </div>
          <div class="col-4">
            <img src="second (2).jpg">
            <h4>UV protection wayfarer</h4>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
              <p>₹420.00</p>
            </div>
          </div>
          <div class="col-4">
            <img src="third.jpg">
            <h4>Gradient,UV protection</h4>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
              <p>₹449.00</p>
            </div>
          </div>
          <div class="col-4">
            <img src="four.jpg">
            <h4>Polarized wayfarer</h4>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
              <p>₹888.00</p>
            </div>

          </div>
          <h2 class="title">Latest Product</h2>
          <div class="row">
            <div class="col-4">
              <img src="five2.jpg">
              <h4> Maroon Full Rim </h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <p>₹389.00</p>
              </div>
            </div>
            <div class="col-4">
              <img src="six2.jpg">
              <h4> Gunmetal Half Rim</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
                <p>₹555.00</p>
              </div>
            </div>
            <div class="col-4">
              <img src="seven2.jpg">
              <h4>Lenskart Air LA </h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <p>₹799.00</p>
              </div>
            </div>
            <div class="col-4">
              <img src="eight2.jpg">
              <h4>Lenskart Air AQ </h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <p>₹249.00</p>
              </div>

            </div>
            <div class="row">
              <div class="col-4">
                <img src="transporant.jpg">
                <h4>Clear Transporant </h4>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <p>₹226.00</p>
                </div>
              </div>
              <div class="col-4">
                <img src="cat.jpg">
                <h4>John Jacobs Cat eyes </h4>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>

                  <p>₹313.00</p>
                </div>
              </div>
              <div class="col-4">
                <img src="secondlast2.jpg">
                <h4>Vincent Glassess</h4>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <p>₹999.00</p>
                </div>
              </div>
              <div class="col-4">
                <img src="last2.jpg">
                <h4> Polarized Glassess</h4>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                  <p>₹444.00</p>
                </div>
              </div>
            </div>


            <!------offer------>
            <!--  *//* <div class="offer">
                      <div class="small-container">
                        <div class="col-2">
                          <img src="png2.png" class="offer-img">
                        </div>
                        <div class="col-2">
                    <p>Exclusively Avilable on Eyes Hospital</p>
                    <h1>Smart Band 4</h1>
                    <small> ab yaha pe product k bare me bahot sari information likna hain</small> *//* -->

            <a href="products.php" class="btn"> Buy Now &#8594;</a>
          </div>
        </div>
      </div>

      <!--------testimonial-------->
      <!-- <div class="testimonial">
            <div class="small-container">
            <div class="row">
              <div class="col-3"></div>
              <p> yaha bahot sara likna hai bt main ne comment krdiya <p>
                <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i> -->
    </div>



    <!------footer-------->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3> Download Our App</h3>
            <p> Download App for Android and IOS mobile phone...
            <P>

              <!-- <div class="app-logo">
              <img src="play.png">
              <img src="play.png"> -->
          </div>
          <div class="footer-col-3">
            <h3> Usefull link</h3>
            <ul>
              <li>Coupons</li>
              <li> Blog post</li>
              <li> Return Policy</li>
              <li> Join Affiliate</li>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3> Follow us on</h3>
            <ul>
              <li>Facebook</li>
              <li> Instagram</li>
              <li> Twitter</li>
              <li> YouTube</li>
            </ul>
          </div>
        </div>
        <hr>
        <p> this website developed by Aaqib Jamil Shaikh
        </P>
      </div>
    </div>
  </div>
  </div>

  <!-- 
                // if (isset($_SESSION['username'])) {
                // echo '<li><a href="account.php">My Account</a></li>';
                // echo '<li><a href="logout.php">Log Out</a></li>';
                // } else {
                // echo '<li><a href="login.php">Log In</a></li>';
                // echo '<li><a href="register.php">Register</a></li>';
                // }
                // -->


  <!-- </ul>
                </section>
                </nav> -->










  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>

</html>