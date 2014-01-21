<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package glamredux
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		
		<?php if (is_category()) { ?>
			<aside id="child-categories" class="widget">
			<?php
				$currentCat = get_cat_id( single_cat_title("",false) );
				$parents = get_category_parents($currentCat, FALSE, ",", TRUE);
				$parentarr = explode(",", $parents);
				$parentslug = get_category_by_slug($parentarr[0]);
				
				$args = array(
					'hide_empty' => 0,
					'child_of' => $parentslug->term_id,
					'title_li' => ''
				);

			?>
				<a href="<?php get_category_link( $parentslug->term_id ); ?>"><h1 class="<?php echo $parentarr[0] ?>">Categories</h1></a>
				<?php wp_list_categories( $args ); ?>

			</aside>
		<?php } ?>
		
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'glamredux' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'glamredux' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
