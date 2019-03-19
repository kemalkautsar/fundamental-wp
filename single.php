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
					<h2 class="content-post-title"><?php the_title(); ?></h2>
					<div class="content-post-meta">
						<?php the_time('j F Y'); ?> by <span class="content-post-author"><?php the_author(); ?></span>
					</div>

					<?php if(has_post_thumbnail()) : ?>
					<div class="content-post-featured-image" style="	background-image: url('<?php echo the_post_thumbnail_url(); ?>');">
					</div>
					<?php endif; ?>
					<?php the_content(); ?>

				</div>

				<?php comments_template(); ?>

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