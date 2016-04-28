<?php
/*
Home/catch-all template
*/

get_header();

?>

	<section role="main">
		
		<header>
			<h2>Blog</h2>
		</header>
		<section class="main-content">
		<?php
		if ( is_search() ) {
			?><h2>Search Results for <span>'<?php print $_REQUEST["s"]; ?>'</span></h2><?php
		} else {
			?><h2>Recent Posts</h2><?php
		}

		while ( have_posts() ) : the_post();
			?>
			<article>
			<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
			</article>
			<?php
		endwhile;

		the_posts_pagination( array( 'mid_size'  => 2 ) );
		?>
		</section>

	</section><!-- #primary -->


<?php get_footer(); ?>