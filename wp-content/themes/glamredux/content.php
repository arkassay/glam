<?php
/**
 * @package glamredux
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) { ?>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('featured'); ?>
		</a>
	<?php } ?>

	<div class="entry-summary">
		<span class="entry-meta"><?php $category = get_the_category(); ?><a href="<?php echo get_category_link( $category[0]->term_id ); ?>"><?php echo $category[0]->cat_name; ?></span><h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark">&nbsp;&mdash; <?php the_title(); ?></a></h1>
		<div class="excerpt">
			<p><?php $excerpt = get_the_excerpt(); if ( $excerpt != '' ) { echo $excerpt; } ?> <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="read-more">Read More</a></p>
		</div>
		<div class="entry-footer clearfix">
			<span class="date pull-left"><?php glamredux_posted_on(); ?></span>
			<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?><span class="comments-link pull-right"><?php comments_popup_link( __( 'Leave a comment', 'glamredux' ), __( '1 Comment', 'glamredux' ), __( '% Comments', 'glamredux' ) ); ?></span><?php endif; ?>
		</div>
	</div><!-- .entry-summary -->

</article>
