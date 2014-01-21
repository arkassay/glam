<?php
/**
 * @package glamredux
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-header clearfix">
			<span class="date pull-left"><?php glamredux_posted_on(); ?></span>
			<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?><span class="comments-link pull-right"><?php comments_popup_link( __( 'Leave a comment', 'glamredux' ), __( '1 Comment', 'glamredux' ), __( '% Comments', 'glamredux' ) ); ?></span><?php endif; ?>
		</div>


	<div class="entry-summary">
		<span class="entry-meta"><?php $category = get_the_category(); ?><a href="<?php echo get_category_link( $category[0]->term_id ); ?>"><?php echo $category[0]->cat_name; ?></a></span><h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark">&nbsp;&mdash; <?php the_title(); ?></a></h1>
	</div><!-- .entry-summary -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'glamredux' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
	

	
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'glamredux' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'glamredux' ) );

			if ( ! glamredux_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'Tagged %2$s.', 'glamredux' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'Posted in %1$s and tagged %2$s.', 'glamredux' );
				} else {
					$meta_text = __( 'Posted in %1$s.', 'glamredux' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<?php // edit_post_link( __( 'Edit', 'glamredux' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
