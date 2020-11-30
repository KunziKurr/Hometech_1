<?php 
DEFINE('ROOT_URL', 'http://localhost/back-end'); 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN DASHBOARD</title>
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>/stylesheets/master.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>/stylesheets/styles.css">

</head>
<body>
   <div class="grid">
   <div class="dashboard">
       <div class="dashboard_container">
       <ul class="dashboard_sudo_ul">
            <li class="dashboard_sudo_li"><a href="#" class="dashboard_sudo_a"> <i class="icon-basic-home"></i> Dashboard</a></li>
            
                <ul class="dashboard_ul">
                <li class="dashboard_li"><a href="<?php echo ROOT_URL ?>/" class="dashboard_a">Dashboard</a></li>
               
                    <li class="dashboard_li"><a href="<?php echo ROOT_URL ?>/include/pages/analytics.php" class="dashboard_a">Analytics</a></li>
                </ul>

            <li class="dashboard_sudo_li"><a href="#" class="dashboard_sudo_a">Apps</a></li>
                    <ul class="dashboard_ul">
                            <li class="dashboard_li"><a href="<?php echo ROOT_URL ?>/include/pages/mail.php" class="dashboard_a"> <i class="icon-basic-mail"></i> Email</a></li>
                            <li class="dashboard_li"><a href="<?php echo ROOT_URL ?>/include/pages/calender.php" class="dashboard_a"> <i class="icon-basic-calendar"></i>Calender</a></li>
                            <li class="dashboard_li"><a href="<?php echo ROOT_URL ?>/include/pages/invoice.php" class="dashboard_a">Invoices</a></li>
                    </ul>

            <li class="dashboard_sudo_li"><a href="#" class="dashboard_sudo_a">  <i class="icon-basic-sheet"></i> Pages</a></li>
                    <ul class="dashboard_ul">
                            <li class="dashboard_li"><a href="<?php echo ROOT_URL ?>/include/pages/contact-us.php" class="dashboard_a"> <i class="icon-basic-diamonds"> </i>Contact us</a></li>
                            <li class="dashboard_li"><a href="<?php echo ROOT_URL ?>/include/pages/authentication.php" class="dashboard_a"> <i class="icon-basic-diamonds"> </i>Authentication</a></li>
                    </ul>

            <li class="dashboard_sudo_li"><a href="#" class="dashboard_sudo_a">Products & Services</a></li>
                    <ul class="dashboard_ul">
                            <li class="dashboard_li"><a href="<?php echo ROOT_URL ?>/include/pages/internetservices.php" class="dashboard_a"><i class="icon-basic-diamonds"> </i>Internet Services</a></li>
                            <li class="dashboard_li"><a href="<?php echo ROOT_URL ?>/include/pages/surveillance.php" class="dashboard_a"><i class="icon-basic-diamonds"> </i>Surveillance and CCTV</a></li>
                            <li class="dashboard_li"><a href="<?php echo ROOT_URL ?>/include/pages/biometrics.php" class="dashboard_a"><i class="icon-basic-diamonds"> </i>Biometric Services</a></li>
                            <li class="dashboard_li"><a href="<?php echo ROOT_URL ?>/include/pages/softwares.php" class="dashboard_a"><i class="icon-basic-diamonds"> </i>Software Development</a></li>
                            
                    </ul>
                    <li class="dashboard_sudo_li"><a href="#" class="dashboard_sudo_a">Users</a></li>
                    <ul class="dashboard_ul">
                            <li class="dashboard_li"><a href="<?php echo ROOT_URL ?>/include/pages/users.php" class="dashboard_a"><i class="icon-basic-diamonds"> </i>Users</a></li>
                            <li class="dashboard_li"><a href="<?php echo ROOT_URL ?>/include/pages/logout.php" class="dashboard_a"><i class="icon-basic-diamonds"> </i>Log out</a></li>
                            
                    </ul>
       </ul>
       </div>
    
   </div>
        <div class="content-box-header">
                <div class="content-box-brand">
                    <img src="<?php echo ROOT_URL ?>/images/ovie-white.png" alt="Ovie Dashboard" class="content-box-brand_img">
      
                </div>

                <h2 class="brand-name">Hometech Contractors</h2>


                <div class="content-box-brand-avatar_block">
                    <div class="content-box-brand-avatar">
                        Avatart
                    </div>
                    <div class="content-box-brand-avatar-info">
                    <h6 class="content-box-brand-name">
                    John Doe
            
                    </h6>
                    <h6 class="content-box-brand-role">
                        Administrator
                    </h6>
                    </div>
                </div>


        </div>
            <div class="content-box">
               
            </div>
            


       </div>
     </body>
</html>