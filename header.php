<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="shortcut icon" href="<?php echo get_site_url(); ?>/favicon.png" />
	<title>
		<?php bloginfo('name'); ?> |
		<?php is_front_page() ? bloginfo('description') : wp_title(); ?>
	</title>
	
	<link href="https://fonts.googleapis.com/css?family=Lora|Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_stylesheet_uri(); ?>">
	<script src="main.js"></script>
	
	<?php wp_head(); ?>
</head>

<body>
    <div class="menu sticky-top">
        <div class="container">
            <nav class="menu-nav">
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'primary',
						'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
						'container'       => 'div',
						'container_id'    => 'bs-example-navbar-collapse-1',
						'menu_class'      => 'navbar-nav mr-auto',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					) );
				?>
            </nav>
        </div>
	</div>