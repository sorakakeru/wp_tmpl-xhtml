<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main">

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

	<div class="main-conte">
		<h2><?php the_title(); ?></h2>
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
			<li><?php next_post_link('%link', '&#171; %title'); ?></li>
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">top</a></li>
			<li><?php previous_post_link('%link', '%title &#187;'); ?></li>
		</ul>
	</div><!-- end_page -->

</div><!-- end_main -->


<?php get_footer(); ?>