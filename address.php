<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["username"])) {
    header("location:index.php");
}


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

    hjsdkkjdrd ob_iconv_handler]
    hjsdkkjdrd\\a ijjfjjjdlo
    ndhdh
    hbdhdj

    hfdhj
    fclosejfdjh
    jasuye
    hash_hkdfhhkja

    <a href="a
    a
    "></a>

    ckjsd,magic_quotes_runtime

    lklm





    <form method="POST" action="address_store.php" style="margin-top:30px;">
        <div class="row">
            <div class="small-8">

                <div class="row">
                    <div class="small-4 columns">
                        <label for="right-label" class="right inline">First Name</label>
                    </div>
                    <div class="small-8 columns">
                        <input type="text" id="right-label" placeholder="Nayan" name="fname">
                    </div>
                </div>
                <div class="row">
                    <div class="small-4 columns">
                        <label for="right-label" class="right inline">Last Name</label>
                    </div>
                    <div class="small-8 columns">
                        <input type="text" id="right-label" placeholder="Seth" name="lname">
                    </div>
                </div>
                <div class="row">
                    <div class="small-4 columns">
                        <label for="right-label" class="right inline">Address</label>
                    </div>
                    <div class="small-8 columns">
                        <input type="text" id="right-label" placeholder="Infinite Loop" name="address">
                    </div>
                </div>
                <div class="row">
                    <div class="small-4 columns">
                        <label for="right-label" class="right inline">City</label>
                    </div>
                    <div class="small-8 columns">
                        <input type="text" id="right-label" placeholder="Mumbai" name="city">
                    </div>
                </div>
                <div class="row">
                    <div class="small-4 columns">
                        <label for="right-label" class="right inline">Mo.No.</label>
                    </div>
                    <div class="small-8 columns">
                        <input type="number" id="right-label" placeholder="400056" name="pin">
                    </div>
                </div>
                <div class="row">
                    <div class="small-4 columns">
                        <label for="right-label" class="right inline">E-Mail</label>
                    </div>
                    <div class="small-8 columns">
                        <input type="email" id="right-label" placeholder="nayantronix@gmail.com" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="small-4 columns">
                        <label for="right-label" class="right inline">Password</label>
                    </div>
                    <div class="small-8 columns">
                        <input type="password" id="right-label" name="pwd">
                    </div>
                </div>
                <div class="row">
                    <div class="small-4 columns">

                    </div>
                    <div class="small-8 columns">
                        <input type="submit" id="right-label" value="Register" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
                        <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
                    </div>
                </div>
            </div>
        </div>
    </form>


    <div class="row" style="margin-top:10px;">
        <div class="small-12">

            <footer>
                <p style="text-align:center; font-size:0.8em;">&copy; BOLT Sports Shop. All Rights Reserved.</p>
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