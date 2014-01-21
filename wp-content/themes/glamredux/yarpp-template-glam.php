<?php 
/*
YARPP Template: Glam
Author: Josh Greco
Description: YARPP Template with Thumbnails
*/
?>
<?php if (have_posts()):?>
	<div class="related-posts">
		<h3>Related Posts</h3>
		<div class="row-fluid">
			<?php while (have_posts()) : the_post(); ?>
				<div class="span6">
					<?php if ( has_post_thumbnail() ) { ?>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('featured'); ?>
						</a>
					<?php } ?>
					<p class="text-center"><?php $category = get_the_category(); ?><a href="<?php echo get_category_link( $category[0]->term_id ); ?>"><?php echo $category[0]->cat_name; ?></a> &mdash; <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><!-- (<?php the_score(); ?>)--></p>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
<?php endif; ?>