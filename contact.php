<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

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




    <div class="row" style="margin-top:30px;">
      <div class="small-12">

        <!-- Start Contact Area -->
        <section class="htc__contact__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="map-contacts--2">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                         
                </div>
                <div class="row">
                    <div class="contact-form-wrap mt--60">
                        <div class="col-xs-12">
                            <div class="contact-title">
                                <h2 class="title__line--6">SEND A MAIL</h2>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <form id="contact-form" action="#" method="post">
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="text" id="name" name="name" placeholder="Your Name*">
                                        <input type="email" id="email" name="email" placeholder="Email*">
										<input type="email" id="mobile" name="mobile" placeholder="Mobile*">
                                    </div>
                                </div>
                                
                                <div class="single-contact-form">
                                    <div class="contact-box message">
                                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button type="button" onclick="send_message()" class="fv-btn">Send MESSAGE</button>
                                </div>
                            </form>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- End Contact Area -->

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; Eyes optical. All Rights Reserved.</p>
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/main.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
