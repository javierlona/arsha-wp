<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arsha
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Bootstrap -->
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive-slider.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/animate.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/font-awesome.min.css" rel="stylesheet">



	<?php wp_head(); ?>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body <?php body_class(); ?>>

	<header>
    <div class="container">
      <div class="row">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button class="navbar-toggle" data-target=".navbar-collapse"
              	data-toggle="collapse" type="button">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
	            <div class="navbar-brand">
	              <a href="<?php echo get_home_url(); ?>">
	              	<h1><?php bloginfo('name')?></h1>
								</a>
	            </div>
            </div>

						<?php
							wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'container'			 => 'nav',
							'container_class'=> 'navbar-collapse collapse',
							'menu_class'		 => 'nav navbar-nav navbar-right'
							));

						?>

          </div>
        </nav>
      </div>
    </div>
  </header><!-- Header -->
