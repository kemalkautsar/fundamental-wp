<?php get_header(); ?>
	
	<section class="banner">
		<div class="container d-flex justify-content-center">
			<h1 class="page-title"><?php bloginfo('name'); ?></h1>
		</div>
	</section>

    <section class="content">
        <div class="container">
			<div class="col-lg-8 offset-lg-2 main-content">

				<?php 
					if (have_posts()) :
						while (have_posts()) : the_post();
				?>
				<div class="content-post">
					<h2 class="content-post-title">Content Title</h2>
					<div class="content-post-meta">
						<span class="content-post-date">11 January 2019</span> by <span class="content-post-author">Kemal</span>
					</div>
					<p>wait a minute, this is supposed to be a placeholder text. How is it passed through QA? the heck?</p>

					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

					<section class="blockquote">
						Those who make peaceful revolution impossible will make violent revolution inevitable.
					</section>

					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>

				<?php 
					endwhile;
					else : 
				?>
					<p><?php __('no posts found'); ?></p>
					<?php endif; ?>
			</div>
        </div>
    </section>
	
	<?php get_footer(); ?>