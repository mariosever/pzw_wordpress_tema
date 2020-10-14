<?php /* header */ ?>
<!DOCTYPE html>
<html lang="hr">
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="navbar">
    <div class="container">
        <div class="logo"><a href="<?php echo get_option('siteurl'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Programiranje za web"></a></div>

        <div class="navigation">

        	<?php wp_nav_menu( array('menu' => 'Main menu', 'container' => 'nav', 'container_class' => '', 'menu_class' => 'main-nav' )); ?>

        </div>

        <div class="menu-wrapper">
            <div class="hamburger-menu"></div>      
        </div>
    </div>
</div><!-- navbar -->

