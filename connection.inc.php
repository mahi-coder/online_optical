<?php
session_start();
$con=mysqli_connect("localhost","root","","bolt");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'https://onlineoptical.herokuapp.com/');
define('SITE_PATH','https://onlineoptical.herokuapp.com/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>
