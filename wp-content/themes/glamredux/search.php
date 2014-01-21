<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package glamredux
 */

get_header(); ?>
	<div class="row">
		<div class="span3">
			<?php get_sidebar(); ?>
		</div>
		<section id="primary" class="content-area span9">
			<main id="main" class="site-main" role="main">
	
			<?php if ( have_posts() ) : ?>
	
				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'glamredux' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->
	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php get_template_part( 'content', 'search' ); ?>
	
				<?php endwhile; ?>
	
				<?php glamredux_paging_nav(); ?>
	
			<?php else : ?>
	
				<?php get_template_part( 'content', 'none' ); ?>
	
			<?php endif; ?>
	
			</main><!-- #main -->
		</section><!-- #primary -->
	</div>

<?php get_footer(); ?>
