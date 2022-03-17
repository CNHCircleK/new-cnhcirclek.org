<!-- responsible for top head  of the site -->
<!DOCTYPE html>
<html lang="en">
<head> 
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CNH Website">   
    <!-- <link rel="shortcut icon" href="images/logo.png">  -->
	<link rel="stylesheet" href="https://use.typekit.net/zfl2zoi.css">
	
    <?php
		wp_head();
	?>

</head>  
<body>
   <header id="header" class="banner">
       <div class="masthead-container">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/Navy Masthead (1) 2.png" alt="CNH Masthead" class="masthead">
       </div>
       <div class="container container-no-padding">
           <nav class="navbar nav-default navbar-expand-custom">
               <!-- Container wrapper -->
               <div class="container-fluid">
                   <!-- Toggle button -->
                   <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
                       <i class="fas fa-bars"></i>
                    </button>
                    <!-- Collapsible wrapper -->
                    <div class="collapse navbar-collapse justify-content-center" style="margin-bottom: 20px;">
                        <!-- Left links -->
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item" id="nav-li">
                                <a class="nav-link" aria-current="page" href="#">HOME</a>
                            </li>
                            <li class="nav-item" id="nav-li">
                                <a class="nav-link" href="test.php">ABOUT</a>
                            </li>
                            <li class="nav-item" id="nav-li">
                                <a class="nav-link" href="#">LEADERSHIP</a>
                            </li>
                            <li class="nav-item" id="nav-li">
                                <a class="nav-link" href="#">COMMITTEES</a>
                            </li>
                            <li class="nav-item" id="nav-li">
                                <a class="nav-link" href="#">DIVISION</a>
                            </li>
                            <li class="nav-item" id="nav-li">
                                <a class="nav-link" href="#">EVENTS</a>
                            </li>
                            <li class="nav-item" id="nav-li">
                                <a class="nav-link" href="#">MEDIA</a>
                            </li>
                            <li class="nav-item" style="padding-right: 0px;">
                                <a class="nav-link" href="#">RESOURCES</a>
                            </li>
                            <!-- Navbar dropdown
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">Dropdown</a>
                                dropdown menu
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider" /></li>
                                    <li>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </li>
                                </ul>
                            </li> -->
                        </ul>
                        <!-- Left links -->
                    </div>
                    <!-- Collapsible wrapper -->
                </div>
                <!-- Container wrapper -->
            </nav>
       </div>
   </header>
