<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main">

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	
	<div class="main-conte">
		<h1><?php the_title(); ?></h1>
		<div>
			<?php the_content(); ?>
		</div>
	</div><!-- end_main-conte -->
	
	<?php endwhile; ?>
	
	<?php else : ?>
	<p>記事がないよ</p>
	<?php endif; ?>

</div><!-- end_main -->


<?php get_footer(); ?>