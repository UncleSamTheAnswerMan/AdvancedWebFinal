<?php
/**
 * Created by PhpStorm.
 * User: lecl1ste
 * Date: 3/31/16
 * Time: 2:23 PM
 */
$pageString= <<<EOT
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Mike Anderson</title>
    <link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="../js/jquery.poptrox-1.0.js"></script>

</head>
<body>
<div id="header" class="container">
    <div id="logo">
        <h1><a href="#">Mike Anderson Art</a></h1>
    </div>
</div>
<div id="menu">
    <ul>
        <li class="current_page_item"><a href="index.php">Home</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="account.php">My Account</a></li>
        <li><a href="cart.php">My Cart</a></li>
    </ul>
</div>
<!-- end #header -->
EOT;
echo($pageString);
?>