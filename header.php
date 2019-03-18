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
    <div class="menu">
        <div class="container">
            <nav class="menu-nav">
				<a class="menu-nav-logo" href="#"><img src="#">image logo</a>
                <a class="menu-nav-item active" href="#">Home</a>
                <a class="menu-nav-item" href="#">About</a>  
                <a class="menu-nav-item" href="#">Blog</a>      
            </nav>
        </div>
	</div>