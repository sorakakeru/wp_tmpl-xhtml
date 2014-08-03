<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main">

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

	<div class="main-conte">
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<span><?php echo get_post_time('Y.m.d(D)'); ?></span>
		<span><?php the_category(' ');?></span>
		<div>
			<?php the_content(); ?>
		</div>
	</div><!-- end_main-conte-->
	
	<?php endwhile; ?>
	
	<?php else : ?>
	<p>記事がないよ</p>
	<?php endif; ?>

	<div id="page">
		<ul>
			<li><?php previous_posts_link('prev') ?></li> 
			<li><?php next_posts_link('next') ?></li>
		</ul>
	</div><!-- end_page -->

</div><!-- end_main -->


<?php get_footer(); ?>