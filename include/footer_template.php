<?php  DEFINE('ROOT_URL', 'http://localhost:80'); ?>

<footer class="footer">
    <div class="footer_brand">
         
         <h1 class="header_heading-brand light-color">Hometech Contractors | &copy; All Rights Reserverd</h1>
    </div>
    <div class="footer_nav">
        <ul class="footer_nav_ul">
            <li class="footer_nav_li"><a href="<?php echo ROOT_URL; ?>/" class="footer_nav_a">Home</a></li>
            <li class="footer_nav_li"><a href="<?php echo ROOT_URL; ?>/pages/services.php" class="footer_nav_a">Services</a></li>
            <li class="footer_nav_li"><a href="<?php echo ROOT_URL; ?>/pages/products.php" class="footer_nav_a">Products</a></li>
            <li class="footer_nav_li"><a href="<?php echo ROOT_URL; ?>/pages/about_us.php" class="footer_nav_a">About Us</a></li>
            <li class="footer_nav_li"><a href="<?php echo ROOT_URL; ?>/pages/contact_us.php" class="footer_nav_a">Contact us</a></li>
            <li class="footer_nav_li"><a href="<?php echo ROOT_URL; ?>/pages/support.php" class="footer_nav_a">Support</a></li>
        </ul>
    </div>
</footer>

    <script src="<?php echo ROOT_URL; ?>/assets/jquery.min1.js"></script>
    <script src="<?php echo ROOT_URL; ?>/assets/bootstrap.min.js"></script>
    <script src="<?php echo ROOT_URL; ?>/assets/util.js"></script>
    <script>
         <script src="<?php echo ROOT_URL; ?>/assets/popper.min.js"></script>
    <script>
   $('.carousel').carousel({
            interval: 3000,
            pause:"hover",
            // wrap:true
})

    </script>
</body>
</html>
