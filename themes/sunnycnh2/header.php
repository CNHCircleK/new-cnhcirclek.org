<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cnh2122
 */

?>
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
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="header" class="banner">
       <div class="masthead-container">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/Navy Masthead (1) 2.png" alt="CNH Masthead" class="masthead">
       </div>

       <div id ="cnh-main-menu" class="container container-no-padding">
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
					<nav id="site-navigation" class="cnh-main-menu">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sunnycnh' ); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
		</nav><!-- #site-navigation -->
				
	</header><!-- #masthead -->
