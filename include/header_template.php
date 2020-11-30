<?php  DEFINE('ROOT_URL', 'http://localhost:80'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/fonts/styles.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/stylesheets/master.css">
    <title>Hometech Contractors Ltd</title>
    <link rel="shortcut icon" href="<?php echo ROOT_URL; ?>/images/Hometech Logo.png" type="image/x-icon">
</head>
<body>
<header class="header">
    <div class="header_branding">
        <img src="<?php echo ROOT_URL; ?>/images/Hometech Logo.png" alt="Hometech Contractors" class="header_branding_logo" srcset="">
        <h1 class="header_heading-brand header_position">
            Hometech Contractors
        </h1>
            <h6 class="header_heading-sub">
                Quality Service
            </h6>
    </div>
    <div class="header_nav">
        <ul class="header_nav_ul">
            <li class="header_nav_li"><a href="<?php echo ROOT_URL; ?>/" class="header_nav_a">Home</a></li>
            <li class="header_nav_li"><a href="<?php echo ROOT_URL; ?>/pages/services.php" class="header_nav_a">Services</a></li>
            <li class="header_nav_li"><a href="<?php echo ROOT_URL; ?>/pages/products.php" class="header_nav_a">Products</a></li>
            <li class="header_nav_li"><a href="<?php echo ROOT_URL; ?>/pages/about_us.php" class="header_nav_a">About Us</a></li>
            <li class="header_nav_li"><a href="<?php echo ROOT_URL; ?>/pages/contact_us.php" class="header_nav_a">Contact us</a></li>
            <li class="header_nav_li"><a href="<?php echo ROOT_URL; ?>/pages/support.php" class="header_nav_a">Support</a></li>
        </ul>
    </div>
</header>