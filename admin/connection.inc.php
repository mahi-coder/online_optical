<?php
session_start();
$con=mysqli_connect("localhost","root","","bolt");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/online_optical/');
define('SITE_PATH','http://127.0.0.1/online_optical/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>