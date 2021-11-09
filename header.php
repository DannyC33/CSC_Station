<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package csc
 * @since csc 1.0
 */

?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script>document.documentElement.className="js";</script>
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>/js/sumoselect/sumoselect.min.css">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>/css/magnific-popup.css?r=<?php echo time(); ?>">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>/css/instslider.css?r=<?php echo time(); ?>">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>/style.css?r=<?php echo time(); ?>">
<link rel="stylesheet" href="<?php echo THEME_PATH; ?>/js/slick/slick.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
	<div>
		<div class="left">
			<a href="/" class="logo"><img src="/wp-content/themes/csc/images/primarylogo_281x35.svg" width="281" height="37"><img src="/wp-content/themes/csc/images/mobilelogo.svg" class="mobile-logo" width="281" height="37"></a>
		</div>
		<div class="right">
			<?php

				$menu = wp_nav_menu(array( 
                    'menu' => 'Main Menu',
                    'container' => false, 
                    'depth' => 1,
                    'echo' => false
                ));

                echo $menu;

            ?>
		</div>
	</div>
	<a href="#" rel="nofollow" class="toggle-nav"></a>
</header>

<header class="fixed">
	<div>
		<div class="left">
			<a href="/" class="logo"><img src="/wp-content/themes/csc/images/primarylogo_281x35.svg" width="281" height="37"></a>
		</div>
		<div class="right">
			<div class="button">
				<a href="#know-more" class="btn">I Want To Know More</a>
			</div>
			<?php echo $menu; ?>
		</div>
	</div>
	<a href="#" rel="nofollow" class="toggle-nav"></a>
</header>

<div class="mob-menu">
	<?php echo $menu; ?>
</div>

<div class="container">