<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package glamredux
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="span3">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/get-glammed-footer.png" alt="get glammed" class="logo" />
					<p><em><a href="#">Terms &amp; Conditions</a></em></p>
					<p><em><a href="#">Privacy Policy</a></em></p>
					<p class="copyright">GetGlammed&reg;, LLC &copy; <?php echo date("Y"); ?></p>
				</div>
				<div class="span9">
					<div class="row-fluid">
						<div class="span4">
							<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>

							<ul class="footer-nav">
								<li><a href="<?php bloginfo('url') ?>/category/the-inside/" class="parent-category">The Inside</a>
									<?php 
										$args = array(
											'child_of'                 => 2,
											'hide_empty'               => 0,
										); 
										$categories = get_categories( $args );
										if (!empty($categories)) {
									?>
									<ul>
										<?php foreach($categories as $cat) { ?>
											<li>
												<a href="<?php bloginfo('url') ?>/category/the-inside/<?php echo $cat->slug ?>"><?php echo $cat->name ?></a>
											</li>
										<?php } ?>
									</ul>
									<?php } ?>
								</li>
							</ul>
						</div>
						<div class="span4">
							<ul class="footer-nav">
								<li><a href="<?php bloginfo('url') ?>/category/the-outside/" class="parent-category">The Outside</a>
									<?php 
										$args = array(
											'child_of'                 => 3,
											'hide_empty'               => 0,
										); 
										$categories = get_categories( $args );
										if (!empty($categories)) {
									?>
									<ul>
										<?php foreach($categories as $cat) { ?>
											<li>
												<a href="<?php bloginfo('url') ?>/category/the-outside/<?php echo $cat->slug ?>"><?php echo $cat->name ?></a>
											</li>
										<?php } ?>
									</ul>
									<?php } ?>
								</li>
							</ul>

							<ul class="footer-nav">
								<li><a href="<?php bloginfo('url') ?>/category/the-life/" class="parent-category">The Life</a>
									<?php 
										$args = array(
											'child_of'                 => 6,
											'hide_empty'               => 0,
										); 
										$categories = get_categories( $args );
										if (!empty($categories)) {
									?>
									<ul>
										<?php foreach($categories as $cat) { ?>
											<li>
												<a href="<?php bloginfo('url') ?>/category/the-life/<?php echo $cat->slug ?>"><?php echo $cat->name ?></a>
											</li>
										<?php } ?>
									</ul>
									<?php } ?>
								</li>
							</ul>
						</div>
						<div class="span4">
							<ul class="footer-nav">
								<li><a href="<?php bloginfo('url') ?>/category/the-inspiration/" class="parent-category">The Inspiration</a>
									<?php 
										$args = array(
											'child_of'                 => 4,
											'hide_empty'               => 0,
										); 
										$categories = get_categories( $args );
										if (!empty($categories)) {
									?>
									<ul>
										<?php foreach($categories as $cat) { ?>
											<li>
												<a href="<?php bloginfo('url') ?>/category/the-inspiration/<?php echo $cat->slug ?>"><?php echo $cat->name ?></a>
											</li>
										<?php } ?>
									</ul>
									<?php } ?>
								</li>
							</ul>

							<ul class="footer-nav">
								<li><a href="<?php bloginfo('url') ?>/category/the-obsession/" class="parent-category">The Obsession</a>
									<?php 
										$args = array(
											'child_of'                 => 5,
											'hide_empty'               => 0,
										); 
										$categories = get_categories( $args );
										if (!empty($categories)) {
									?>
									<ul class="footer-nav">
										<?php foreach($categories as $cat) { ?>
											<li>
												<a href="<?php bloginfo('url') ?>/category/the-obsession/<?php echo $cat->slug ?>"><?php echo $cat->name ?></a>
											</li>
										<?php } ?>
									</ul>
									<?php } ?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>