<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title(''); ?></title>
	
	<link href="https://fonts.googleapis.com/css?family=Lora|Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_stylesheet_uri(); ?>">
    <script src="main.js"></script>
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
	
	<section class="banner">
		<div class="container d-flex justify-content-center">
			<h1 class="page-title">Page Title</h1>
		</div>
	</section>

    <section class="content">
        <div class="container">
			<div class="col-lg-8 offset-lg-2 main-content">
				<p>wait a minute, this is supposed to be a placeholder text. How is it passed through QA? the heck?</p>

				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

				<section class="blockquote">
					Those who make peaceful revolution impossible will make violent revolution inevitable.
				</section>

				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>
        </div>
    </section>
    
    <footer class="footer">
        <div class="container">
            footer
        </div>
    </footer>
</body>

</html>